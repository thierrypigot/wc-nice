<?php
/**
 * Title: Speakers — Simple list
 * Slug: wc-nice/wordcamp-speakers-list
 * Categories: wordcamp-speakers
 * Keywords: speakers, list, presenters, talks, lineup
 * Description: Simple list of speakers with talk titles
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Speakers', 'wc-nice' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size"><?php esc_html_e( 'Experts and practitioners sharing their experience at WordCamp Nice.', 'wc-nice' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:list {"className":"wp-block-list is-style-none"} -->
	<ul class="wp-block-list is-style-none"><!-- wp:list-item -->
	<li><strong><?php esc_html_e( 'Speaker name', 'wc-nice' ); ?></strong> — <?php esc_html_e( 'Talk title or short bio', 'wc-nice' ); ?></li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li><strong><?php esc_html_e( 'Speaker name', 'wc-nice' ); ?></strong> — <?php esc_html_e( 'Talk title or short bio', 'wc-nice' ); ?></li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li><strong><?php esc_html_e( 'Speaker name', 'wc-nice' ); ?></strong> — <?php esc_html_e( 'Talk title or short bio', 'wc-nice' ); ?></li>
	<!-- /wp:list-item --></ul>
	<!-- /wp:list -->

	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size"><?php esc_html_e( 'Replace with a Query Loop (custom post type) or use the Speakers grid pattern for cards with photos.', 'wc-nice' ); ?></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
