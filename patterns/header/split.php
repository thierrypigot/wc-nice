<?php
/**
 * Title: Header split — Fond clair
 * Slug: wc-nice/header-split
 * Categories: header
 * Keywords: header, navigation, split, clair
 * Block Types: core/template-part/header
 * Description: Logo à gauche, navigation à droite sur fond clair avec bordure
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"bottom":{"color":"var:preset|color|primary","width":"3px"}}},"backgroundColor":"base","textColor":"contrast","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-contrast-color has-base-background-color has-text-color has-background" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:3px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:site-title {"style":{"typography":{"fontWeight":"700"}},"fontSize":"medium"} /-->

	<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"right"},"style":{"typography":{"fontSize":"0.9rem"}},"textColor":"contrast"} /-->

</div>
<!-- /wp:group -->
