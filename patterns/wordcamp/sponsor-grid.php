<?php
/**
 * Title: Sponsor — Grid
 * Slug: wc-nice/wordcamp-sponsor-grid
 * Categories: wordcamp-sponsors
 * Keywords: sponsors, partners, grid, logos, support
 * Description: Sponsor grid with tier heading and logo placeholders
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Our sponsors', 'wc-nice' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size"><?php esc_html_e( 'Thank you to the companies that make WordCamp Nice possible.', 'wc-nice' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":3,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
	<h3 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--60)"><?php esc_html_e( 'Platinum', 'wc-nice' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"align":"center","sizeSlug":"medium","style":{"border":{"radius":"4px"}}} -->
			<figure class="wp-block-image aligncenter size-medium has-custom-border"><img src="" alt="<?php esc_attr_e( 'Sponsor logo', 'wc-nice' ); ?>" style="border-radius:4px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"align":"center","sizeSlug":"medium","style":{"border":{"radius":"4px"}}} -->
			<figure class="wp-block-image aligncenter size-medium has-custom-border"><img src="" alt="<?php esc_attr_e( 'Sponsor logo', 'wc-nice' ); ?>" style="border-radius:4px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:heading {"level":3,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
	<h3 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--60)"><?php esc_html_e( 'Gold', 'wc-nice' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"align":"center","sizeSlug":"thumbnail","style":{"border":{"radius":"4px"}}} -->
			<figure class="wp-block-image aligncenter size-thumbnail has-custom-border"><img src="" alt="<?php esc_attr_e( 'Sponsor logo', 'wc-nice' ); ?>" style="border-radius:4px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"align":"center","sizeSlug":"thumbnail","style":{"border":{"radius":"4px"}}} -->
			<figure class="wp-block-image aligncenter size-thumbnail has-custom-border"><img src="" alt="<?php esc_attr_e( 'Sponsor logo', 'wc-nice' ); ?>" style="border-radius:4px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"align":"center","sizeSlug":"thumbnail","style":{"border":{"radius":"4px"}}} -->
			<figure class="wp-block-image aligncenter size-thumbnail has-custom-border"><img src="" alt="<?php esc_attr_e( 'Sponsor logo', 'wc-nice' ); ?>" style="border-radius:4px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
