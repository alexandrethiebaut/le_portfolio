<aside id="sidebar" class="small-12 large-4 left columns">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<div class="row">
		<div class="small-offset-2 small-8 large-offset-3 large-6 columns">

		<?php if(is_home()) : ?>

			<h1><?php bloginfo('name'); ?></h1>
	
			<hr>

			<?php $post_desc = get_post(30); ?>
			<p><?php echo $post_desc->post_content; ?></p>
			
		<?php else : ?>
		
			<h1><?php single_cat_title(); ?></h1>
			<p><?php echo category_description(); ?></p>

		<?php endif; ?>

		<?php if(is_category()) : ?>
			
			<!-- A REVOIR -->
			<div class="row">
				<div class="small-12 medium-offset-2 medium-8 large-12 large-offset-0 columns">

					<div>

						<?php $categories = (get_categories('child_of=2&hide_empty=0')); ?>
						<ul>
						<?php foreach ($categories as $k => $v) : ?>
							<a href="<?php echo $v->cat_link; ?>"></a><li class=""><?php echo $v->cat_name; ?></li>
						<?php endforeach; ?>
						</ul>
					</div>

				</div>

			</div>

		<?php endif; ?>

	</div>
	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>
