<?php
/**
 * Title: Home template
 * Slug: wc-nice/hidden-template-home
 * Inserter: false
 * Template Types: front-page, home
 * Keywords: accueil, home, template
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group">

	<!-- wp:pattern {"slug":"wc-nice/hero-i18n"} /-->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">

		<!-- wp:heading {"textAlign":"center","level":2} -->
		<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Latest posts', 'wc-nice' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:pattern {"slug":"wc-nice/query-grid"} /-->

	</div>
	<!-- /wp:group -->

	<!-- wp:pattern {"slug":"wc-nice/team-grid"} /-->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
