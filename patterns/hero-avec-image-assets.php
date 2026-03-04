<?php
/**
 * Title: Hero with image from assets
 * Slug: wc-nice/hero-avec-image-assets
 * Categories: featured
 */
?>
<!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"left":"0"}}}} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/nicoise.jpg' ) ); ?>","alt":"Smiling woman from Nice holding a laptop with the WordPress logo on the Promenade des Anglais","dimRatio":0,"customOverlayColor":"#86847b","isUserOverlayColor":false,"isDark":false,"sizeSlug":"full","style":{"dimensions":{"aspectRatio":"1"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light"><img class="wp-block-cover__image-background size-full" alt="Smiling woman from Nice holding a laptop with the WordPress logo on the Promenade des Anglais" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/nicoise.jpg' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#86847b"></span><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"var:preset|spacing|20"} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"className":"has-xx-large-font-size"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Welcome to WordCamp Nice</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Join the WordPress community on the French Riviera for a day of talks, workshops, and networking.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><strong><em>Nicæa civitas fidelissima</em></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->