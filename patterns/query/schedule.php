<?php
/**
 * Title: Query — Conference schedule
 * Slug: wc-nice/query-schedule
 * Categories: wordcamp-programme, query
 * Keywords: query, programme, schedule, sessions, timetable
 * Block Types: core/query
 * Viewport Width: 1200
 * Description: Conference schedule list with title, time and excerpt
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Schedule', 'wc-nice' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size"><?php esc_html_e( 'A full day of WordPress talks and workshops.', 'wc-nice' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:query {"query":{"perPage":6,"postType":"post","order":"asc","orderBy":"date"},"layout":{"type":"constrained"}} -->
	<div class="wp-block-query">

		<!-- wp:post-template {"layout":{"type":"default"}} -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"},"border":{"bottom":{"color":"var:preset|color|secondary","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">

				<!-- wp:post-date {"format":"H:i","fontSize":"small","style":{"layout":{"selfStretch":"fixed","flexSize":"80px"},"color":{"text":"var:preset|color|primary"},"typography":{"fontWeight":"700"}}} /-->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">

					<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"medium"} /-->

					<!-- wp:post-excerpt {"moreText":"","excerptLength":25,"fontSize":"small"} /-->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php esc_html_e( 'The schedule will be announced soon.', 'wc-nice' ); ?></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
