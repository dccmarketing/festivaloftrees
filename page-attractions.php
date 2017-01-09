<?php
/**
 * Template Name: Attractions
 *
 * Description: Displays attractions
 *
 * @package Festival of Trees
 */

get_header();

	?><div id="primary" class="content-area content-sidebar attractions">
		<main id="main" class="site-main" role="main"><?php

		the_title( '<h1 class="entry-title">', '</h1>' );

		echo apply_filters( 'show_fot_attractions', '' );

		?></main><!-- #main -->
	</div><!-- #primary --><?php

get_sidebar();
get_footer();
?>