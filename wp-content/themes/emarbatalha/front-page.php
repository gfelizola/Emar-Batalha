<?php get_header(); ?>
<div id="contentwrap">
	<div id="content">
		<div class="container_destaques">
			<?php
			$tipo_destaque = 'principal';
			$my_query = new WP_Query(array(
				'post_type' => 'destaques', 
				'posts_per_page' => '4'
			));
			?>
			<div class="destaque_principal">
				<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<div class="destaque_content">
					<img src="<?php the_field('imagem_ampliada'); ?>" alt="" />
					<div class="texto">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
						<?php 
						$link_destaque = get_field('linkar_para');
					
						if ($link_destaque) {
							$endereco_link = get_permalink($link_destaque[0]->ID);
							echo '<a href="' . $endereco_link . '" class="maisdetalhes">mais detalhes</a>' ;
						}
						?>
					</div>
				</div>
				<?php endwhile;?>
			</div>
			<div class="destaque_thumbs">
				<ul>
					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<li>
						<a href="#"><img src="<?php the_field('imagem_pequena'); ?>" alt="" /><?php the_title(); ?></a>
					</li>
					<?php endwhile;?>
				</ul>
			</div>
		</div>
		<div class="container_extras">
			<div class="video"><IMG SRC="<?php echo get_bloginfo('template_url') . '/images/destaque_video.jpg' ?>"></div>
			<div class="blog">
				
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>