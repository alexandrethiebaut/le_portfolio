<?php get_header(); ?>
<div class="row">
	<?php get_sidebar(); ?>
	<div class="small-12 large-8 columns" role="main">

		<div class="row">

			<?php if ( have_posts() ) : ?>

				<?php do_action( 'foundationpress_before_content' ); ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content-home', get_post_format() ); ?>
				<?php endwhile; ?>

				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>

				<?php do_action( 'foundationpress_before_pagination' ); ?>

			<?php endif;?>

		</div>

	<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
		</nav>
	<?php } ?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>
</div>
<?php get_footer(); ?>
