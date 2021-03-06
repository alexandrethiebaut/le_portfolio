<?php get_header(); ?>
<div class="row">

	<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="entry-content small-12 large-7 right columns">
			<?php the_post_thumbnail('showcase-thumbnail'); ?>
		</div>

		<article <?php post_class() ?> >

			<header class="small-offset-1 small-10 large-offset-1 large-3 columns padding-page is-fixed-and-scrollable">

				<div class="row">

					<div class="small-12 large-12 columns">
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<hr>
						<?php the_content(); ?>
						<hr>
					</div>
					
				</div>

				<div class="small-12 small-centered columns nav-between-articles">
					
					<?php previous_post_link('%link', '<span class="icon-chevron-left"></span>', TRUE, CAT_NON_CLASSE); ?>
					<a href="<?php echo get_category_link(CAT_PROJETS); ?>"><span class="icon-grid"></span></a>
					<?php next_post_link('%link', '<span class="icon-chevron-right"></span>', TRUE, CAT_NON_CLASSE); ?>

				</div>

			</header>

			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>

			<?php $field = get_fields(); ?>
			<?php if($field) : ?>	
				<?php foreach ($field as $k => $v) : ?>
				
					<div class="entry-content small-12 large-7 right columns">
						<img src="<?php echo $field[$k]['sizes']['showcase-thumbnail']; ?>" alt="<?php echo $field[$k]['title']; ?>">
					</div>

				<?php endforeach; ?>
			<?php endif; ?>
		</article>

	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer(); ?>
