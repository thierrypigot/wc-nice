<?php
/**
 * Title: Hero static loop
 * Slug: wc-nice/hero-static-loop
 * Categories: featured
 */

$title = __( 'Welcome to WordCamp Nice', 'wc-nice' );
$description = __( 'Join the WordPress community on the French Riviera for a day of talks, workshops, and networking. WordCamp Nice brings together developers, designers, and users in one of the Mediterranean\'s most vibrant cities.', 'wc-nice' );

$buttons = array(
	'register' => __( 'Register', 'wc-nice' ),
	'sponsor' => __( 'Sponsor the event', 'wc-nice' )
);
?>
<!-- wp:cover {"overlayColor":"contrast","isUserOverlayColor":true,"align":"full"} -->
<div class="wp-block-cover alignfull">
	<span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-100 has-background-dim"></span>
	<div class="wp-block-cover__inner-container">
		
		<!-- wp:heading {"textAlign":"center"} -->
		<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html( sprintf( '%1$s %2$s', $title, date( 'Y' ) ) ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php echo esc_html( $description ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">	
			<?php foreach ( $buttons as $key => $button ) : ?>
				<!-- wp:button {"className":"wp-block-button is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html( $button ); ?></a></div>
				<!-- /wp:button -->
			<?php endforeach; ?>
		</div>
		<!-- /wp:buttons -->

	</div>
</div>
<!-- /wp:cover -->