<aside id="sidebar" class="small-12 large-4 left columns">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<div class="row">
		<div class="small-offset-2 small-8 large-offset-3 large-6 columns padding-page">

		<?php if(is_home()) : ?>

			<?php $post_desc = get_post(POST_DESCRIPTION); ?>
			
			<?php echo $post_desc->post_content; ?>
			
		<?php else : ?>
		
			<h1><?php single_cat_title(); ?></h1>
			<hr>
			<p><?php echo category_description(); ?></p>
			<hr>

		<?php endif; ?>

		<?php if(is_category()) : ?>
			
			<!-- <div class="row">
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

			</div> -->

		<?php endif; ?>

	</div>
	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>
