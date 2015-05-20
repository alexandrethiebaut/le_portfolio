<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>

<article <?php post_class('small-12 medium-6 large-6 large-offset-0 columns end'); ?>>
	<header class="home-thumb">
		<a href="<?php the_permalink(); ?>">
			<div>
				<h2><?php the_title() ?></h2>
			</div>
			<?php the_post_thumbnail('home-thumbnail');?>
		</a>
	</header>
</article>