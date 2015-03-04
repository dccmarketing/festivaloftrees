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

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="footer-wrap wrap">

			<div class="footer-left"><?php

				//

			?></div><!-- .footer_left -->
			<div class="site-info"><?php

				printf( __( '<div class="copyright">All content &copy %1$s <a href="%2$s" title="Login">%3$s</a></a></div>', 'festival-of-trees' ), date( 'Y' ), get_admin_url(), get_bloginfo( 'name' ) );

			?></div><!-- .site-info -->
			<div class="footer-right"><?php

				//

			?></div><!-- .site-info -->

		</div><!-- .footer-wrap -->

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>