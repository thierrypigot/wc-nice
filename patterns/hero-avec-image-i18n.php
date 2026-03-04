<?php
/**
 * Title: Hero with image and i18n
 * Slug: wc-nice/hero-avec-image-i18n
 * Categories: featured
 */
?>
<!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"left":"0"}}}} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:cover {"url":"https://wcnice.local/wp-content/uploads/2026/02/nicoise.jpg","id":90,"alt":"<?php esc_attr_e( 'Smiling woman from Nice holding a laptop with the WordPress logo on the Promenade des Anglais', 'wc-nice' ); ?>","dimRatio":0,"customOverlayColor":"#86847b","isUserOverlayColor":false,"isDark":false,"sizeSlug":"full","style":{"dimensions":{"aspectRatio":"1"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light"><img class="wp-block-cover__image-background wp-image-90 size-full" alt="<?php esc_attr_e( 'Smiling woman from Nice holding a laptop with the WordPress logo on the Promenade des Anglais', 'wc-nice' ); ?>" src="https://wcnice.local/wp-content/uploads/2026/02/nicoise.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#86847b"></span><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"var:preset|spacing|20"} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"className":"has-xx-large-font-size"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Welcome to WordCamp Nice', 'wc-nice' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Join the WordPress community on the French Riviera for a day of talks, workshops, and networking.', 'wc-nice' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><strong><em><?php esc_html_e( 'Nicæa civitas fidelissima', 'wc-nice' ); ?></em></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->