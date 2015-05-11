</section>
<footer class="row">

	<?php if (is_single()) : ?>

		<div class="small-12 columns nav-between-articles"> <!-- A REPLACER AUTRE PART PARCE QUE LA C'ETAIT UN PEU NAZE -->

			<div class="small-4 columns"><?php previous_post_link('%link', '<span class="icon-chevron-left"></span>'); ?></div>
			<div class="small-4 columns"><a href="<?php echo get_category_link(2); ?>"><span class="icon-grid"></span></a></div>
			<div class="small-4 columns"><?php next_post_link('%link', '<span class="icon-chevron-right"></span>'); ?></div>

		</div>

	<?php endif; ?>

	<?php do_action( 'foundationpress_before_footer' ); ?>
	<?php // dynamic_sidebar( 'footer-widgets' ); ?>
	<?php do_action( 'foundationpress_after_footer' ); ?>
</footer>
<a class="exit-off-canvas"></a>

	<?php do_action( 'foundationpress_layout_end' ); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
