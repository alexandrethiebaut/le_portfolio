<?php get_header(); ?>

<div class="row">

	<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="small-offset-1 small-10 medium-offset-2 medium-8 large-4 columns padding-page" role="main">

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<header>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
				<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>

				<footer>
					<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
					<p><?php the_tags(); ?></p>
				</footer>

			</article>
			
		</div>

		<div class="small-12 large-4 columns right">
			<?php the_post_thumbnail(); ?>
		</div>

		
	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>

</div>
<?php get_footer(); ?>
