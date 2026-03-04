<?php
/**
 * Title: Cover — Témoignage
 * Slug: wc-nice/cover-testimonial
 * Categories: testimonials
 * Keywords: cover, témoignage, citation, testimonial
 * Block Types: core/cover
 * Description: Bannière cover avec un témoignage client
 */
?>
<!-- wp:cover {"overlayColor":"contrast","isUserOverlayColor":true,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">
	<span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-100 has-background-dim"></span>
	<div class="wp-block-cover__inner-container">

		<!-- wp:group {"layout":{"type":"constrained","contentSize":"700px"}} -->
		<div class="wp-block-group">

			<!-- wp:quote {"align":"center","className":"is-style-plain","fontSize":"large"} -->
			<blockquote class="wp-block-quote has-text-align-center is-style-plain has-large-font-size">
				<p><?php esc_html_e( 'This event truly changed the way I think about WordPress. Incredible speakers and a warm community.', 'wc-nice' ); ?></p>
				<cite><?php esc_html_e( 'Marie D., Developer', 'wc-nice' ); ?></cite>
			</blockquote>
			<!-- /wp:quote -->

		</div>
		<!-- /wp:group -->

	</div>
</div>
<!-- /wp:cover -->
