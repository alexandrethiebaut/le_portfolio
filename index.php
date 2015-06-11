<?php get_header(); ?>
		
<?php $post_desc = get_post(POST_DESCRIPTION); ?>
<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post_desc->ID) ); ?>

<div class="row collapse">
	<div class="small-12 hide-for-large-up">
		<img src="<?php echo $url; ?>" alt="">
	</div>
</div>

<div class="show-for-large-up pos-home-full" style="background-image: url('<?php echo $url; ?>');"></div>

<div class="row">
	
	<div class="small-offset-1 small-10 medium-offset-1 medium-6 columns padding-page">

		<div class="this-is-homepage">
			<?php echo $post_desc->post_content; ?>
		</div>

	</div>
	<div class="small-12 medium-4 columns right">
	</div>

</div>
<?php get_footer(); ?>
