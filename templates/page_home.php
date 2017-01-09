<?php
/**
 * Template Name: Home Page
 *
 * Description: Home Page
 *
 * @package Festival of Trees
 */

$events 	= festival_of_trees_get_events();
$newsclass 	= $eventsclass = $videoclass	= '';
$video 		= get_field( 'video_url' );

if ( empty( $events ) && empty( $video ) ) {

	$newsclass = 'bottom';

} elseif ( empty( $video ) ) {

	$eventsclass = 'bottom';

} elseif ( empty( $events ) ) {

	$videoclass = 'bottom';

}

get_header(); ?>

	<div id="primary" class="content-area full-width">
		<main id="main" class="site-main" role="main">

			<section class="home-promo">
				<div class="wrap">
					<div class="promo-text">
						<div class="promo-line1"><?php echo get_field( 'line_1' ); ?></div>
						<div class="promo-line2"><?php echo get_field( 'line_2' ); ?></div>
						<div class="promo-line3"><?php echo get_field( 'line_3' ); ?></div>
						<a href="<?php
							echo get_field( 'button_url' );
						?>" class="home-promo-button"><?php
							echo get_field( 'button_text' );
						?></a>
					</div><?php

					the_post_thumbnail( 'full', array( 'class' => 'promo-image' ) );

				?></div>
			</section><!-- .promo -->

			<div class="home-tab tab-news">
				<div class="wrap tab-wrap"><?php

					echo festival_of_trees_get_svg( 'news' );

				?><h2 class="home-headline">Latest News</h2>
			</div></div>
			<section class="home-news <?php echo $newsclass; ?>">
				<div class="wrap"><?php

				$homeposts = festival_of_trees_get_posts( 'post', array( 'posts_per_page' => 6 ) );

				while ( $homeposts->have_posts() ) : $homeposts->the_post();

					?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><?php

						the_title( '<a href="' . get_permalink( get_the_ID() ) . '" class="entry-header-link"><h1 class="entry-title">', '</h1></a>' );

						festival_of_trees_home_posted_on();

					?></article><!-- #post-## --><?php

				endwhile; // end of the loop.

			?></div></section><?php

			if ( ! empty( $events ) ) {

				?><div class="home-tab tab-events">
					<div class="wrap tab-wrap"><?php

						echo festival_of_trees_get_svg( 'calendar' );

					?><h2 class="home-headline">Today's Happenings</h2>
				</div></div>
				<section class="home-events <?php echo $eventsclass; ?>">
					<div class="wrap"><?php

					foreach ( $events as $event ) {

						$time = date( 'g:i A', strtotime( $event->EventStartDate ) );

						?><article class="todays-event">
							<span class="event-time"><?php echo $time; ?> - </span><?php
							?><a href="<?php echo get_permalink( $event->ID ); ?>" class="entry-header-link">
								<h1 class="entry-title"><?php echo $event->post_title; ?></h1>
							</a>
							<p class="entry"><?php echo $event->post_content; ?></p>
						</article><!-- #post-## --><?php

					} // foreach

				?></div></section><?php

			}

			if ( ! empty( $video ) ) {

				?><div class="home-tab tab-videos <?php echo $videoclass; ?>">
					<div class="wrap tab-wrap"><?php

					echo festival_of_trees_get_svg( 'film' );

					?><h2 class="home-headline">Videos</h2>
				</div></div>
				<section class="home-videos">
					<div class="wrap"><?php

					echo $video;

				?></div></section><?php

			}

		?></main>
	</div><!-- .full-width --><?php

get_footer(); ?>