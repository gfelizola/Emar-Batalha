<?php get_header(); ?>
<div id="contentwrap">
	<div id="content" class="lista-produtos">
		<?php while (have_posts()) : the_post(); ?>
			<?php $imagem = get_field('imagem_do_produto') ?>
			<div class="produto grid-item" id="post-<?php the_ID(); ?>" style="background-image:url('<?php echo $imagem['sizes']['medium']; ?>')">
				<a href="<?php echo get_permalink(get_the_ID()) ?>"><span><?php the_title(); ?></span></a>
			</div>
		<?php endwhile;?>
	</div>
</div>
<?php get_footer(); ?>