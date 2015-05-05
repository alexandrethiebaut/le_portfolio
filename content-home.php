<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>

<article <?php post_class('small-12 medium-offset-2 medium-8 large-6 large-offset-0 columns end'); ?>>
	<header>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-thumbnail'); /*the_title();*/ ?></a>
	</header>
</article>

