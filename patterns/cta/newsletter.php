<?php
/**
 * Title: CTA — WordCamp newsletter
 * Slug: wc-nice/cta-newsletter
 * Categories: wordcamp-cta, call-to-action
 * Keywords: cta, newsletter, signup, email, countdown, tickets
 * Block Types: core/cover
 * Viewport Width: 1200
 * Description: Newsletter signup banner with days-until-event countdown
 */

// Calcul dynamique du nombre de jours avant l'événement.
$event_date    = new DateTime( '2025-06-14' );
$today         = new DateTime();
$days_left     = max( 0, (int) $today->diff( $event_date )->days );
$days_left_str = sprintf(
	/* translators: %d: number of days */
	_n( '%d day left', '%d days left', $days_left, 'wc-nice' ),
	$days_left
);
?>
<!-- wp:cover {"overlayColor":"primary","isUserOverlayColor":true,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">
	<span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-100 has-background-dim"></span>
	<div class="wp-block-cover__inner-container">

		<!-- wp:group {"layout":{"type":"constrained","contentSize":"600px"}} -->
		<div class="wp-block-group">

			<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
			<p class="has-text-align-center has-small-font-size"><strong>⏱ <?php echo esc_html( $days_left_str ); ?></strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"textAlign":"center","level":2} -->
			<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Don\'t miss WordCamp Nice 2025', 'wc-nice' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php esc_html_e( 'Get notified when tickets go on sale. Be the first to know about speakers and the schedule.', 'wc-nice' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"base","textColor":"primary"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-base-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Subscribe to the newsletter', 'wc-nice' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:group -->

	</div>
</div>
<!-- /wp:cover -->
