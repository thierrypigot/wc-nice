<?php
/**
 * Title: Speakers — Conference grid
 * Slug: wc-nice/wordcamp-team-speakers
 * Categories: wordcamp-speakers, featured
 * Keywords: speakers, conference, grid, presenters, talks
 * Viewport Width: 1200
 * Description: Speaker grid with photo, name, role and talk title
 */

$speakers = array(
	array(
		'photo'   => get_theme_file_uri( 'assets/images/john-doe.jpg' ),
		'name'    => __( 'John Doe', 'wc-nice' ),
		'role'    => __( 'Developer @Automattic', 'wc-nice' ),
		'talk'    => __( 'Block Patterns: From Zero to Hero', 'wc-nice' ),
	),
	array(
		'photo'   => get_theme_file_uri( 'assets/images/jane-doe.jpg' ),
		'name'    => __( 'Jane Doe', 'wc-nice' ),
		'role'    => __( 'Designer Freelance', 'wc-nice' ),
		'talk'    => __( 'Design Systems with theme.json', 'wc-nice' ),
	),
	array(
		'photo'   => get_theme_file_uri( 'assets/images/jim-doe.jpg' ),
		'name'    => __( 'Jim Doe', 'wc-nice' ),
		'role'    => __( 'Agency Owner', 'wc-nice' ),
		'talk'    => __( 'Scaling WordPress for Enterprise', 'wc-nice' ),
	),
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Our speakers', 'wc-nice' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size"><?php esc_html_e( 'Discover the experts who will share their knowledge at WordCamp Nice.', 'wc-nice' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:columns -->
	<div class="wp-block-columns">
		<?php foreach ( $speakers as $speaker ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"4px","width":"1px"}},"borderColor":"primary","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-border-color has-primary-border-color" style="border-width:1px;border-radius:4px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

				<!-- wp:image {"sizeSlug":"thumbnail","className":"is-style-rounded","align":"center"} -->
				<figure class="wp-block-image aligncenter size-thumbnail is-style-rounded"><img src="<?php echo esc_url( $speaker['photo'] ); ?>" alt="<?php echo esc_attr( $speaker['name'] ); ?>"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-text-align-center has-medium-font-size"><?php echo esc_html( $speaker['name'] ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size"><em><?php echo esc_html( $speaker['role'] ); ?></em></p>
				<!-- /wp:paragraph -->

				<!-- wp:separator {"backgroundColor":"primary","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
				<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"/>
				<!-- /wp:separator -->

				<!-- wp:paragraph {"align":"center","fontSize":"small","textColor":"primary"} -->
				<p class="has-text-align-center has-small-font-size has-primary-color has-text-color">🎤 <?php echo esc_html( $speaker['talk'] ); ?></p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
