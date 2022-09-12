<?php

/**
 * Theme setup.
 */

namespace App;

use function Roots\bundle;

/**
 * Register the theme assets.
 *
 * @return void
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style( 'type-kit','https://use.typekit.net/veu7gld.css',array(),false);
    wp_enqueue_style( 'font-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css',array(),false);
    wp_enqueue_style( 'swiper-css','https://unpkg.com/swiper@8/swiper-bundle.min.css',array(),false);
    wp_enqueue_style( 'swiper-css','https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css',array(),false);
    wp_enqueue_style( 'custom-css',get_template_directory_uri().'/resources/styles/custom.css',array(),false);
    // wp_enqueue_style( 'custom-style-css',get_template_directory_uri().'/resources/styles/custom-style.css',array(),false);
    
    
    wp_enqueue_script('swiper-js','https://unpkg.com/swiper@8/swiper-bundle.min.js"',array(),false,true );
    // wp_enqueue_script('swiper-js','https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"',array(),false,true );
    wp_enqueue_script('cloud-flare','https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.min.js"',array(),false,true );
    
    // wp_enqueue_script( 'custom-js',get_template_directory_uri().'/resources/scripts/custom.js',array('jquery'),true,false);
    
    bundle('app')->enqueue();
}, 100);

/**
 * Register the theme assets with the block editor.
 *
 * @return void
 */
add_action('enqueue_block_editor_assets', function () {
    bundle('editor')->enqueue();
}, 100);

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from the Soil plugin if activated.
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil', [
        'clean-up',
        'nav-walker',
        'nice-search',
    ]);

    /**
     * Disable full-site editing support.
     *
     * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
     */
    remove_theme_support('block-templates');

    /**
     * Register the navigation menus.
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
        'secondary_navigation' => __('Secondary Navigation', 'sage'),
    ]);

    /**
     * Disable the default block patterns.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable post thumbnail support.
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');
    add_image_size( 'single-post-thumbnail', 595, 485,true );

    /**
     * Enable responsive embed support.
     * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

    /**
     * Enable HTML5 markup support.
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style',
    ]);

    /**
     * Enable selective refresh for widgets in customizer.
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');
}, 20);

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ];

    register_sidebar([
        'name' => __('Primary', 'sage'),
        'id' => 'sidebar-primary',
    ] + $config);

    register_sidebar([
        'name' => __('Footer', 'sage'),
        'id' => 'sidebar-footer',
    ] + $config);
});

/* Theme options */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Header/Footer',
		'menu_title'	=> 'Header/Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Events',
		'menu_title'	=> 'Events',
		'parent_slug'	=> 'theme-general-settings',
	));
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Gallery',
		'menu_title'	=> 'Gallery Single',
		'parent_slug'	=> 'theme-general-settings',
	));
}

