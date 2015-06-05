<?php get_header(); ?>
		
<?php $post_desc = get_post(POST_DESCRIPTION); ?>
<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post_desc->ID) ); ?>

<div class="show-for-large-up pos-home-full" style="background-image: url('<?php echo $url; ?>');"></div>

<div class="row">
	
	<div class="small-offset-1 small-10 medium-offset-1 medium-6 columns padding-page">

		<div>
			<?php echo $post_desc->post_content; ?>
		</div>

	</div>
	<div class="small-12 medium-4 columns right">
	</div>

<div class="row collapse">
	<div class="small-12 hide-for-large-up">
		<img src="<?php echo $url; ?>" alt="">
	</div>
</div>

</div>
<?php get_footer(); ?>

<!-- 	<?php get_sidebar(); ?>
	<div class="small-12 large-8 columns" role="main">

		<div class="row collapse">
			
			<ul class="small-block-grid-1 medium-block-grid-2">
			<?php if ( have_posts() ) : ?>
				
				<?php query_posts(array('cat' => CAT_PROJETS)); ?>

				<?php do_action( 'foundationpress_before_content' ); ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content-home', get_post_format() ); ?>
				<?php endwhile; ?>

				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>

				<?php do_action( 'foundationpress_before_pagination' ); ?>

				<?php wp_reset_query(); ?>

			<?php endif;?>
			</ul>

		</div>

	<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
		</nav>
	<?php } ?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>
 -->
