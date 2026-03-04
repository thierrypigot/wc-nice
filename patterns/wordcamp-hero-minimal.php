<?php
/**
 * Title: Hero — Minimal
 * Slug: wc-nice/wordcamp-hero-minimal
 * Categories: wordcamp-hero
 * Keywords: hero, minimal, wordcamp, homepage, banner
 * Description: Minimal hero with title, subtitle and one CTA
 */
?>
<!-- wp:cover {"overlayColor":"secondary","isUserOverlayColor":true,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">
	<span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-100 has-background-dim"></span>
	<div class="wp-block-cover__inner-container">

		<!-- wp:group {"layout":{"type":"constrained","contentSize":"640px"}} -->
		<div class="wp-block-group">

			<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"large"} -->
			<h1 class="wp-block-heading has-text-align-center has-large-font-size"><?php esc_html_e( 'WordCamp Nice 2025', 'wc-nice' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
			<p class="has-text-align-center has-medium-font-size"><?php esc_html_e( 'One day. One community. One WordPress.', 'wc-nice' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"base","textColor":"secondary"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-secondary-color has-base-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'View schedule', 'wc-nice' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:group -->

	</div>
</div>
<!-- /wp:cover -->
