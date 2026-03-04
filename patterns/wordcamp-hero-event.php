<?php
/**
 * Title: Hero — Event
 * Slug: wc-nice/wordcamp-hero-event
 * Categories: wordcamp-hero, featured
 * Keywords: hero, event, conference, banner, wordcamp, homepage
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1200
 * Description: Event page starter with date, venue and action buttons
 */

$event_infos = array(
	array(
		'icon'  => '📅',
		'label' => __( 'March 6, 2026', 'wc-nice' ),
	),
	array(
		'icon'  => '📍',
		'label' => __( 'Nîmes, France', 'wc-nice' ),
	),
	array(
		'icon'  => '🎤',
		'label' => sprintf(
			/* translators: %d: number of speakers */
			__( '%d speakers', 'wc-nice' ),
			12
		),
	),
	array(
		'icon'  => '👥',
		'label' => sprintf(
			/* translators: %d: number of attendees */
			__( '%d attendees', 'wc-nice' ),
			300
		),
	),
);
?>
<!-- wp:cover {"overlayColor":"secondary","isUserOverlayColor":true,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">
	<span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-100 has-background-dim"></span>
	<div class="wp-block-cover__inner-container">

		<!-- wp:group {"layout":{"type":"constrained","contentSize":"700px"}} -->
		<div class="wp-block-group">

			<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"large"} -->
			<h1 class="wp-block-heading has-text-align-center has-large-font-size"><?php esc_html_e( 'WordCamp Nice 2025', 'wc-nice' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php esc_html_e( 'The WordPress community meets on the French Riviera for a full day of talks, workshops, and networking.', 'wc-nice' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:columns -->
			<div class="wp-block-columns">
				<?php foreach ( $event_infos as $info ) : ?>
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size"><?php echo esc_html( $info['icon'] ); ?><br><strong><?php echo esc_html( $info['label'] ); ?></strong></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<?php endforeach; ?>
			</div>
			<!-- /wp:columns -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"base","textColor":"secondary"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-secondary-color has-base-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Get your ticket', 'wc-nice' ); ?></a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'View the schedule', 'wc-nice' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:group -->

	</div>
</div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'What to expect', 'wc-nice' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( '🎙 Talks', 'wc-nice' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php esc_html_e( 'Inspiring sessions from WordPress experts covering development, design, and business.', 'wc-nice' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( '🛠 Workshops', 'wc-nice' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php esc_html_e( 'Hands-on sessions to level up your skills with block themes, patterns, and more.', 'wc-nice' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( '🤝 Networking', 'wc-nice' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php esc_html_e( 'Meet the community, connect with professionals, and share your passion for WordPress.', 'wc-nice' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
