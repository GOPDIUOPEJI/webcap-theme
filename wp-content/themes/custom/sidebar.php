<!-- <?php wp_meta(); ?> -->
<?php if ( is_active_sidebar( 'right_sidebar' ) ) : ?>

	<aside class="col-12 col-lg-3 widget-area right-sidebar" role="complementary" >
		<div class="widget-column ">
			<?php dynamic_sidebar( 'right_sidebar' ); ?>
		</div>
	</aside><!-- .widget-area -->

<?php endif; ?>