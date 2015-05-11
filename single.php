<?php get_header(); ?>
<div class="row">

	<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="entry-content small-12 large-7 right columns">
				<?php the_post_thumbnail(); ?>
			</div>

		<article <?php post_class() ?> >

			<header class="small-offset-1 small-10 large-offset-1 large-3 columns">

				<div class="row">

					<div class="small-12 large-12 columns">
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<hr>
					</div>
					
				</div>

				<?php the_content(); ?>
				<hr>

			</header>

			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>

			<div class="entry-content small-12 large-7 right columns">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="entry-content small-12 large-7 right columns">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="entry-content small-12 large-7 right columns">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="entry-content small-12 large-7 right columns">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="entry-content small-12 large-7 right columns">
				<?php the_post_thumbnail(); ?>
			</div>


		</article>

	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer(); ?>
