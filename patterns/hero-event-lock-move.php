<?php
/**
 * Title: Hero Event — image verrouillée (déplacement)
 * Slug: wc-nice/hero-event-lock-move
 * Categories: featured, banner
 */
?>
<!-- wp:group {"align":"wide","backgroundColor":"contrast","textColor":"base-2"} -->
<div class="wp-block-group alignwide has-base-2-color has-contrast-background-color has-text-color has-background">

	<!-- wp:image {"sizeSlug":"full","lock":{"move":true,"remove":false}} -->
	<figure class="wp-block-image size-full">
		<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/nicoise.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Event', 'wc-nice' ); ?>"/>
	</figure>
	<!-- /wp:image -->

	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'Event details here', 'wc-nice' ); ?></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
