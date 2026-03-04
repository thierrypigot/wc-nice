<?php
/**
 * Title: WooCommerce — Grille de produits
 * Slug: wc-nice/woocommerce-product-grid
 * Categories: featured, woocommerce
 * Keywords: woocommerce, products, grid, shop, query
 * Block Types: core/query
 * Description: Grille de produits WooCommerce avec requête (image, titre, extrait)
 */
?>
<!-- wp:query {"query":{"perPage":6,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"constrained"}} -->
<div class="wp-block-query">

	<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"},"border":{"radius":"4px","width":"1px"}},"borderColor":"primary","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-color has-primary-border-color" style="border-width:1px;border-radius:4px">

			<!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"0px","bottomRight":"0px"}}}} /-->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">

				<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"medium"} /-->

				<!-- wp:post-excerpt {"moreText":"","excerptLength":20,"fontSize":"small","showMoreOnNewLine":false} /-->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->

	<!-- wp:query-no-results -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php esc_html_e( 'No products found.', 'wc-nice' ); ?></p>
		<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->

</div>
<!-- /wp:query -->
