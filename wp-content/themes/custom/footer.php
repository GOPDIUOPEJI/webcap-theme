	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col col-lg-3">
					<div class="contact-block">
						<div class="contact">
							<div class="geo"><a href="<?= $options['geoposition']; ?>"><img src="<?= $options['geoposition_img']; ?>"></a></div>
							<div class="call"><a href="tel:<?= $options['contact_phone']; ?>"><img src="<?= $options['contact_phone_img']; ?>"></a></div>
						</div>
					</div>
				</div>
				<div class="col col-lg-9 large-block">
					<div class="nav-menu">
						<?php wp_nav_menu(); ?>
						<div class="status-bar">
							<span class="bold-bar"></span>
							<span class="thin-bar"></span>
						</div>
					</div>
					<?php do_shortcode('[copyright]'); ?>
					<div class="socials">
						<div class="inst"><a href="<?= $options['instagram_link'];?>"><img  src="<?= $options['instagram_img'];?>"></a></div>
						<div class="fb"><a href="<?= $options['facebook_link']; ?>"><img  src="<?= $options['facebook_img']; ?>"></a></div>
						<div class="tw"><a href="<?= $options['twitter_link']; ?>"><img  src="<?= $options['twitter_img']; ?>"></a></div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>