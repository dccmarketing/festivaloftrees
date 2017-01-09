<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Festival of Trees
 */
?>

		</div><!-- .wrap -->
	</div><!-- #content -->

	<div class="footer-top">
		<div class="wrap footer-top-wrap">
			<img src="<?php echo get_theme_mod( 'footer_artwork' ); ?>" class="footer-trees">
			<div class="stay-connected">Stay Connected</div><?php

			get_template_part( 'menus/menu', 'social' );

		?></div>
	</div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-wrap wrap">
			<div class="site-info"><?php

				printf( __( '<div class="copyright">All content &copy %1$s <a href="%2$s" title="Login">%3$s</a></a></div>', 'festival-of-trees' ), date( 'Y' ), get_admin_url(), get_bloginfo( 'name' ) );

				get_template_part( 'menus/menu', 'footer' );

				printf( __( '<div class="credits">Site designed &amp; developed by <a href="%1$s" title="DCC Marketing">DCC Marketing</a></div>', 'festival-of-trees' ), 'http://dccmarketing.com' );

			?></div><!-- .site-info -->
		</div><!-- .footer-wrap -->
	</footer><!-- #colophon -->
</div><!-- #page --><?php

wp_footer();

?></body>
</html>