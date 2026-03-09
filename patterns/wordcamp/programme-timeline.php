<?php
/**
 * Title: Programme — Timeline
 * Slug: wc-nice/wordcamp-programme-timeline
 * Categories: wordcamp-programme
 * Keywords: programme, schedule, timeline, sessions, agenda
 * Description: Simple timeline layout for conference sessions
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Schedule', 'wc-nice' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size"><?php esc_html_e( 'A full day of talks and workshops.', 'wc-nice' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"bottom":{"color":"var:preset|color|secondary","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"},"color":{"text":"var:preset|color|primary"}},"fontSize":"small"} -->
		<p class="has-small-font-size" style="color:var(--wp--preset--color--primary);font-weight:700">09:00</p>
		<!-- /wp:paragraph -->
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":3,"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Doors open & registration', 'wc-nice' ); ?></h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"bottom":{"color":"var:preset|color|secondary","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"},"color":{"text":"var:preset|color|primary"}},"fontSize":"small"} -->
		<p class="has-small-font-size" style="color:var(--wp--preset--color--primary);font-weight:700">10:00</p>
		<!-- /wp:paragraph -->
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":3,"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Opening keynote', 'wc-nice' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php esc_html_e( 'Main track — Welcome and state of WordPress.', 'wc-nice' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"bottom":{"color":"var:preset|color|secondary","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"},"color":{"text":"var:preset|color|primary"}},"fontSize":"small"} -->
		<p class="has-small-font-size" style="color:var(--wp--preset--color--primary);font-weight:700">11:00</p>
		<!-- /wp:paragraph -->
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":3,"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Session block 1', 'wc-nice' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php esc_html_e( 'Two parallel tracks — add your session titles here.', 'wc-nice' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"align":"center","fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
	<p class="has-text-align-center has-small-font-size" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Replace with Query Loop or custom content for your real schedule.', 'wc-nice' ); ?></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
