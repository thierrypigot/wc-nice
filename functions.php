<?php
/**
 * WC Nice — Thème bloc FSE
 *
 * @package WC_Nice
 * @author  WeAre[WP]
 * @link    https://www.wearewp.pro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Configure les fonctionnalités du thème (FSE).
 *
 * Charge les traductions, active les styles de blocs, alignement large,
 * embeds responsives, styles éditeur et miniatures. Désactive les patterns
 * du cœur et les patterns distants (Pattern Directory).
 *
 * @since 1.0.0
 */
function wc_nice_setup() {
	// Load theme textdomain for translations.
	load_theme_textdomain( 'wc-nice', get_template_directory() . '/languages' );

	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for wide blocks.
	add_theme_support( 'align-wide' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

	// Add support for post thumbnails.
	add_theme_support( 'post-thumbnails' );

	// Désactive les compositions (patterns) fournies par le cœur WordPress.
	// Seules les compositions du thème (dossier patterns/) restent disponibles.
	remove_theme_support( 'core-block-patterns' );

	// Désactiver les patterns distants (Pattern Directory) pour ne pas charger les patterns de WordPress.org.
	add_filter( 'should_load_remote_block_patterns', '__return_false' );
}
add_action( 'after_setup_theme', 'wc_nice_setup' );


/**
 * Enregistre les catégories de compositions (block patterns) du thème.
 *
 * Catégories : page (contenu de départ), WordCamp (sponsors, programme,
 * équipe, speakers, infos pratiques, CTA, hero), WooCommerce.
 *
 * @since 1.0.0
 */
add_action( 'init', function () {
	// Catégorie pour les compositions de type page (Contenu de départ, À propos, Contact).
	register_block_pattern_category(
		'page',
		[
			'label'       => __( 'Contenu de départ', 'wc-nice' ),
			'description' => __( 'Starter page layouts: about, contact, etc.', 'wc-nice' ),
		]
	);

	register_block_pattern_category(
		'wordcamp-sponsors',
		[
			'label'       => __( 'WordCamp - Sponsors', 'wc-nice' ),
			'description' => __( 'Blocks and layouts to showcase WordCamp sponsors.', 'wc-nice' ),
		]
	);

	register_block_pattern_category(
		'wordcamp-programme',
		[
			'label'       => __( 'WordCamp - Schedule', 'wc-nice' ),
			'description' => __( 'Layouts for the programme, timetable and sessions.', 'wc-nice' ),
		]
	);

	register_block_pattern_category(
		'wordcamp-equipe',
		[
			'label'       => __( 'WordCamp - Team', 'wc-nice' ),
			'description' => __( 'Present the WordCamp organising team.', 'wc-nice' ),
		]
	);

	register_block_pattern_category(
		'wordcamp-speakers',
		[
			'label'       => __( 'WordCamp - Speakers', 'wc-nice' ),
			'description' => __( 'Cards and lists for speakers and presenters.', 'wc-nice' ),
		]
	);

	register_block_pattern_category(
		'wordcamp-infos-pratiques',
		[
			'label'       => __( 'WordCamp - Practical info', 'wc-nice' ),
			'description' => __( 'Venue, access, accommodation and practical information.', 'wc-nice' ),
		]
	);

	register_block_pattern_category(
		'wordcamp-cta',
		[
			'label'       => __( 'WordCamp - Calls to action', 'wc-nice' ),
			'description' => __( 'Banners and blocks for registration, ticketing and partnership.', 'wc-nice' ),
		]
	);

	register_block_pattern_category(
		'wordcamp-hero',
		[
			'label'       => __( 'WordCamp - Hero / Home', 'wc-nice' ),
			'description' => __( 'Headers and hero sections for the WordCamp homepage.', 'wc-nice' ),
		]
	);

	register_block_pattern_category(
		'woocommerce',
		[
			'label'       => __( 'WooCommerce', 'wc-nice' ),
			'description' => __( 'Product grids and shop layouts.', 'wc-nice' ),
		]
	);
} );


/**
 * Enregistre ou désenregistre des patterns selon la présence de WooCommerce.
 *
 * - Désenregistre « woocommerce-product-grid » si WooCommerce est inactif.
 * - Enregistre « woocommerce-product-featured » uniquement si WooCommerce est actif.
 *
 * Priorité 999 pour s’exécuter après l’enregistrement des patterns du thème.
 *
 * @since 1.0.0
 */
function wc_nice_conditional_patterns() {
    // Désactiver un pattern si WooCommerce n'est pas actif
    if ( ! class_exists( 'WooCommerce' ) ) {
        unregister_block_pattern( 'wc-nice/woocommerce-product-grid' );
    }
    
    // Ou enregistrer conditionnellement
    if ( class_exists( 'WooCommerce' ) ) {
		register_block_pattern( 'wc-nice/woocommerce-product-featured', array(
            'title'      => __( 'Featured Product', 'wc-nice' ),
            'categories' => array( 'woocommerce' ),
            'source'     => 'theme',
            'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">

				<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"medium"} /-->

				<!-- wp:post-excerpt {"moreText":"","excerptLength":20,"fontSize":"small","showMoreOnNewLine":false} /-->

			</div>
			<!-- /wp:group -->'
        ) );
    }
}