<?php
/**
 * Title: Query — Cards avec image
 * Slug: wc-nice/query-cards
 * Categories: query
 * Keywords: query, loop, articles, cards, grille
 * Block Types: core/query
 * Description: Grille de 3 articles en cards avec image, titre et extrait
 */
?>
<!-- wp:query {"query":{"perPage":3,"postType":"post","order":"desc","orderBy":"date"},"layout":{"type":"constrained"}} -->
<div class="wp-block-query">

	<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"},"border":{"radius":"4px","width":"1px"}},"borderColor":"primary","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-color has-primary-border-color" style="border-width:1px;border-radius:4px">

			<!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"0px","bottomRight":"0px"}}}} /-->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">

				<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"medium"} /-->

				<!-- wp:post-date {"fontSize":"small","style":{"color":{"text":"var:preset|color|primary"}}} /-->

				<!-- wp:post-excerpt {"moreText":"","excerptLength":20,"fontSize":"small"} /-->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	<!-- /wp:post-template -->

	<!-- wp:query-no-results -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php esc_html_e( 'No posts found.', 'wc-nice' ); ?></p>
		<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->

</div>
<!-- /wp:query -->
