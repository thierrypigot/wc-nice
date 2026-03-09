<?php
/**
 * Title: Practical info — Venue
 * Slug: wc-nice/wordcamp-practical-venue
 * Categories: wordcamp-infos-pratiques
 * Keywords: venue, location, address, practical info, place
 * Description: Venue and location block with address and map placeholder
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Venue', 'wc-nice' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size">📍 <?php esc_html_e( 'Address', 'wc-nice' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Venue name', 'wc-nice' ); ?><br><?php esc_html_e( '123 Example Street', 'wc-nice' ); ?><br><?php esc_html_e( '06000 Nice, France', 'wc-nice' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size">🕐 <?php esc_html_e( 'When', 'wc-nice' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Friday, March 6, 2026 — 9:00 to 18:00', 'wc-nice' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"4px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="" alt="<?php esc_attr_e( 'Map or venue photo', 'wc-nice' ); ?>" style="border-radius:4px"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php esc_html_e( 'Add a map embed or venue image.', 'wc-nice' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
