<?php get_header(); ?>
<div id="contentwrap">
	<div id="content" class="produtos">
		<?php while (have_posts()) : the_post(); ?>
			<div class="produto" id="post-<?php the_ID(); ?>">
				<div class="imagem">
					<?php $imagem = get_field('imagem_do_produto') ?>
					<img src="<?php echo $imagem['sizes']['large']; ?>" alt="" />
				</div>
				<div class="descricao">
					<?php 
					$categorias = get_the_terms( get_the_ID(), 'Categorias');
					$colecoes 	= get_the_terms( get_the_ID(), 'colecoes');

					echo "<h3>";
					if( $categorias ){
						foreach ($categorias as $cat) {
							echo $cat->name . '<br>';
						}
					}
					echo "<br>";
					if ( $colecoes) {
						foreach ($colecoes as $col) {
							echo $col->name . '<br>';
						}
					}
					echo "</h3>";
					?>
					<p><?php the_field('referencia') ?></p>
				</div>
				<?php $term = array_shift( $categorias ); ?>
				<a href="<?php echo site_url() . '/' .$term->taxonomy .'/'. $term->slug ?>/" class="bt-voltar">voltar</a>
				<?php previous_post_link(); ?> 
				<?php next_post_link(); ?> 
			</div>
		<?php endwhile;?>
	
		<div class="relacionados">
			<p>relacionados</p>
			<ul>
			<?php 
			

			$args = array(
				'post_type' => 'joias', 
				'posts_per_page' => 6,
				'taxonomy' => $term->taxonomy, 
				'term' => $term->slug,
				'post__not_in' => array($post->ID)
			);

			$relacionados = new WP_Query($args);

			if ($relacionados->have_posts()) : while ($relacionados->have_posts()) : $relacionados->the_post(); ?>
			<li><a href="<?php echo get_permalink( get_the_ID()) ?>">
				<?php $imagem = get_field('imagem_do_produto') ?>
				<img src="<?php echo $imagem['sizes']['thumbnail']; ?>" alt="" />
			</a></li>
			<?php endwhile; endif; ?>
			</ul>
		</div>
	</div>
</div>
<?php get_footer(); ?>