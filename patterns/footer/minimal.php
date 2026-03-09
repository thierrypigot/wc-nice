<?php
/**
 * Title: Footer minimal
 * Slug: wc-nice/footer-minimal
 * Categories: footer
 * Keywords: footer, pied de page, minimal
 * Block Types: core/template-part/footer
 */

$year = wp_date( 'Y' );
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|primary","width":"3px"}}},"backgroundColor":"secondary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-secondary-background-color has-text-color has-background" style="border-top-color:var(--wp--preset--color--primary);border-top-width:3px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group">

		<!-- wp:site-title {"style":{"typography":{"fontWeight":"700"}},"fontSize":"medium"} /-->

		<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"right"},"style":{"typography":{"fontSize":"0.85rem"}}} /-->

	</div>
	<!-- /wp:group -->

	<!-- wp:separator {"backgroundColor":"primary","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
	<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"/>
	<!-- /wp:separator -->

	<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size">
		<?php
		printf(
			/* translators: %s: current year */
			esc_html__( '© %s WC Nice — Built with WordPress by WeAre[WP]', 'wc-nice' ),
			esc_html( $year )
		);
		?>
	</p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
