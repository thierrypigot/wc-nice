<?php
/**
 * Title: Header CTA — Fond bleu
 * Slug: wc-nice/header-with-button
 * Categories: header
 * Keywords: header, navigation, bouton, cta, bleu
 * Block Types: core/template-part/header
 * Description: Logo à gauche, navigation + bouton d'action sur fond bleu primaire
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-base-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:site-title {"style":{"typography":{"fontWeight":"700"}},"fontSize":"medium"} /-->

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"},"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
	<div class="wp-block-group">

		<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"right"},"style":{"typography":{"fontSize":"0.9rem"}},"textColor":"base"} /-->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"base","textColor":"primary","fontSize":"small"} -->
			<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-primary-color has-base-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Get your ticket', 'wc-nice' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
