<?php
/**
 * Title: Team — Grid
 * Slug: wc-nice/team-grid
 * Categories: wordcamp-equipe, featured
 * Keywords: team, organisers, grid, volunteers, staff
 */

$features = array(
    array(
        'photo'  => get_theme_file_uri( 'assets/images/john-doe.jpg' ),
        'name' => __( 'John Doe', 'wc-nice' ),
        'role' => __( 'Developer', 'wc-nice' ),
        'bio'  => __( 'John is a developer who loves to code and build things.', 'wc-nice' ),
    ),
    array(
        'photo'  => get_theme_file_uri( 'assets/images/jane-doe.jpg' ),
        'name' => __( 'Jane Doe', 'wc-nice' ),
        'role' => __( 'Designer', 'wc-nice' ),
        'bio'  => __( 'Jane is a designer who loves to design and build things.', 'wc-nice' ),
    ),
    array(
        'photo'  => get_theme_file_uri( 'assets/images/jim-doe.jpg' ),
        'name' => __( 'Jim Doe', 'wc-nice' ),
        'role' => __( 'Manager', 'wc-nice' ),
        'bio'  => __( 'Jim is a manager who loves to manage and build things.', 'wc-nice' ),
    ),
);
?>
<!-- wp:columns -->
<div class="wp-block-columns">
    <?php foreach ( $features as $feature ) : ?>
    <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:image {"sizeSlug":"large"} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url( $feature['photo'] ); ?>" alt="<?php echo esc_attr( $feature['name'] ); ?>"></figure>
            <!-- /wp:image -->
            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group">
            <!-- wp:heading {"textAlign":"center","level":3} -->
            <h3 class="wp-block-heading has-text-align-center"><?php echo esc_html( $feature['name'] ); ?></h3>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center has-small-font-size"><em><?php echo esc_html( $feature['role'] ); ?></em></p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center"><?php echo esc_html( $feature['bio'] ); ?></p>
            <!-- /wp:paragraph -->
        </div>
    <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
    <?php endforeach; ?>
</div>
<!-- /wp:columns -->