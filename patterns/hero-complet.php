<?php
/**
 * Title: Hero full
 * Slug: wc-nice/hero-complete
 * Categories: featured
 * Keywords: hero, accueil, bannière
 * Post Types: page
 * Block Types: core/cover, core/group
 * Viewport Width: 1376
 */

// Asset dynamique
$background_image = esc_url( get_theme_file_uri( 'assets/images/nicoise.jpg' ) );

// Données structurées traduisibles
$buttons = array(
    array(
        'label' => __( 'Discover our services', 'wc-nice' ),
        'url'   => home_url( '/services' ),
    ),
    array(
        'label' => __( 'Contact us', 'wc-nice' ),
        'url'   => home_url( '/contact' ),
    ),
);
?>
<!-- wp:cover {"url":<?php echo wp_json_encode( $background_image ); ?>,"dimRatio":60,"overlayColor":"contrast","align":"full","alt":<?php echo wp_json_encode( __( 'Background image', 'wc-nice' ) ); ?>} -->
<div class="wp-block-cover alignfull">
    <span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-60 has-background-dim"></span>
    <img class="wp-block-cover__image-background" src="<?php echo $background_image; ?>" alt="<?php echo esc_attr__( 'Background image', 'wc-nice' ); ?>" data-object-fit="cover"/>
    <div class="wp-block-cover__inner-container">
        
        <!-- wp:heading {"textAlign":"center","level":1} -->
        <h1 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Welcome to our agency', 'wc-nice' ); ?></h1>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"align":"center","fontSize":"large"} -->
        <p class="has-text-align-center has-large-font-size"><?php esc_html_e( 'Your trusted partner since 2010', 'wc-nice' ); ?></p>
        <!-- /wp:paragraph -->
        
        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons">
            <?php foreach ( $buttons as $button ) : ?>
            <!-- wp:button {"className":"is-style-outline"} -->
            <div class="wp-block-button is-style-outline">
                <a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $button['url'] ); ?>"><?php echo esc_html( $button['label'] ); ?></a>
            </div>
            <!-- /wp:button -->
            <?php endforeach; ?>
        </div>
        <!-- /wp:buttons -->
        
    </div>
</div>
<!-- /wp:cover -->