<?php get_header(); ?>
<div class="row">

	<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		
		<article <?php post_class() ?> >

			<header class="small-12 large-offset-1 large-3 columns">

				<div class="row">

					<div class="small-12 large-12 columns">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</div>

					<div class="small-12 large-3 end columns">

						<?php previous_post_link('%link', '<span class="icon-chevron-left"></span>'); ?>
						<a href="<?php echo get_category_link(1); ?>"><span class="icon-grid"></span></a>
						<?php next_post_link('%link', '<span class="icon-chevron-right"></span>'); ?>

					</div>
				</div>

				<?php the_content(); ?>

			</header>

			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>

			<div class="entry-content small-12 large-7 columns">
				<?php the_post_thumbnail(); ?>
			</div>


		</article>

	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer(); ?>
