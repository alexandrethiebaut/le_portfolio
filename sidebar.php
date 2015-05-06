<aside id="sidebar" class="small-12 large-4 columns">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<div class="row">
		<div class="small-offset-2 small-8 large-offset-3 large-6 columns">

		<?php if(is_home()) : ?>

			<h1><?php bloginfo('name'); ?></h1>
			
					
		<?php else : ?>
		
			<h1><?php single_cat_title(); ?></h1>
			<p><?php echo category_description(); ?></p>

		<?php endif; ?>
	</div>
	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>
