<?php get_header(); ?>
<div id="contentwrap">
	<div id="content" class="lista-items categorias">
		<?php 

		global $wp_query;

		$paged = (get_query_var('paged')) ? get_query_var('pagd') : 1;
		query_posts('posts_per_page=8&paged=' . $paged . '&' . $query_string );

		while (have_posts()) : the_post(); ?>
			<?php $imagem = get_field('imagem_do_produto') ?>
			<div class="produto grid-item" id="post-<?php the_ID(); ?>" style="background-image:url('<?php echo $imagem['sizes']['medium']; ?>')">
				<a href="<?php echo get_permalink(get_the_ID()) ?>"><span><?php the_title(); ?></span></a>
			</div>
		<?php endwhile;?>
		<div class="paginacao">
			<?php
			echo paginate_links(array(
				'base'    => str_replace( 999999, '%#%', esc_url( get_pagenum_link( 999999 ) ) ),
				'format'  => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total'   => $wp_query->max_num_pages
			));
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>