<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

try {
    \Roots\bootloader();
} catch (Throwable $e) {
    wp_die(
        __('You need to install Acorn to use this theme.', 'sage'),
        '',
        [
            'link_url' => 'https://docs.roots.io/acorn/2.x/installation/',
            'link_text' => __('Acorn Docs: Installation', 'sage'),
        ]
    );
}

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
    ->each(function ($file) {
        if (! locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });

/*
|--------------------------------------------------------------------------
| Enable Sage Theme Support
|--------------------------------------------------------------------------
|
| Once our theme files are registered and available for use, we are almost
| ready to boot our application. But first, we need to signal to Acorn
| that we will need to initialize the necessary service providers built in
| for Sage when booting.
|
*/

add_theme_support('sage');

/*nav menu li */
function wpdocs_channel_nav_class( $classes, $item, $args,$depth ) {
 
    if ( 'primary_navigation' === $args->theme_location && $depth==0) {
        $classes[] = "menu-item relative";
    }
    if('primary_navigation' === $args->theme_location && $depth!=0){
        $classes[] = "pb-1";
    }
    if('secondary_navigation' === $args->theme_location && $depth==0){
        $classes[] = "menu-item relative";
    }
    elseif('secondary_navigation' === $args->theme_location && $depth!=0){
        $classes[] = "pb-1";
    }
    // var_dump($depth);
    return $classes;
}
add_filter( 'nav_menu_css_class' , 'wpdocs_channel_nav_class' , 10, 4 );


/* nav menu li a*/
function add_specific_menu_location_atts( $atts,$item,$args,$depth ) {
    // check if the item is in the primary menu
    if( $args->theme_location == 'primary_navigation') {
      // add the desired attributes:
      
    if ( $depth != 0) {
        $atts['class'] = 'sub-menu-anchor';
    }else{
        $atts['class'] = 'menu-anchor';
    }
    }

    if( $args->theme_location == 'secondary_navigation') {
        // add the desired attributes:
        
      if ( $depth != 0) {
          $atts['class'] = 'sub-menu-anchor pl-9 pr-6 py-3 block';
      }else{
          $atts['class'] = 'menu-anchor block pl-5 mr-12 py-4';
      }
      }

    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 4 );

/*sub menu classes */
function wpdocs_custom_dropdown_class( $classes ) {
    $classes[] = 'bg-white';
 
    return $classes;
}
 
add_filter( 'nav_menu_submenu_css_class', 'wpdocs_custom_dropdown_class' );

function add_search_form($items, $args) {
    if( $args->theme_location == 'secondary_navigation' ){
    $link = get_field('contact','option');
    if($link):
    $items .= '<li class="menu-item relative contact-menu text-center">
    <a href="tel:'.$link .'" class="text-white bg-red tk-azo-sans-web text-base font-bold block px-5 py-4"><i class="fa-solid fa-phone mr-2" aria-hidden="true"></i>'. $link .'</a></li>';
endif;
    }
  return $items;
}
add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);

// In your theme's functions.php
function customize_add_button_atts( $attributes ) {
    return array_merge( $attributes, array(
      'text' => ' + Add Additional Entry Fees ',
    ) );
  }
  add_filter( 'wpcf7_field_group_add_button_atts', 'customize_add_button_atts' );


  function my_login_logo() { ?>
    <style type="text/css">
		body.login {
		    background: url(<?php echo get_stylesheet_directory_uri(); ?>/resources/images/Interested-in-joining-BG.jpg);
		    background-size: cover;
            background-repeat: no-repeat;
		}
        #login h1 a, .login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/resources/images/logo.svg);
        background-position: center;
        width: 100%;
        background-size: 100% 100%;
	    background-repeat: no-repeat;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


add_filter( 'wpcf7_mail_components', 'remove_blank_lines' );

function remove_blank_lines( $mail ) {
    if ( is_array( $mail ) && ! empty( $mail['body'] ) )
        $mail['body'] = preg_replace( '|\n\s*\n|', "\n\n", $mail['body'] );

    return $mail;
}

// add_filter( 'wpcf7_form_elements', 'imp_wpcf7_form_elements' );
// function imp_wpcf7_form_elements( $content ) {
//     /*futurity */
//     $str_pos = strpos( $content, 'name="futurity-checkbox-main-1"' );
//     $content = substr_replace( $content, ' data-amount="1,990" ', $str_pos, 0 );

//     $str_pos = strpos( $content, 'name="futurity-sub-checkbox-1"' );
//     $content = substr_replace( $content, ' data-amount="500" ', $str_pos, 0 );

//     $str_pos = strpos( $content, 'name="futurity-checkbox-main-2"' );
//     $content = substr_replace( $content, ' data-amount="400" ', $str_pos, 0 );

//     $str_pos = strpos( $content, 'name="futurity-checkbox-main-3"' );
//     $content = substr_replace( $content, ' data-amount="1,990" ', $str_pos, 0 );

//     $str_pos = strpos( $content, 'name="futurity-checkbox-main-4"' );
//     $content = substr_replace( $content, ' data-amount="850" ', $str_pos, 0 );

//     $str_pos = strpos( $content, 'name="futurity-checkbox-main-5"' );
//     $content = substr_replace( $content, ' data-amount="850" ', $str_pos, 0 );

//     $str_pos = strpos( $content, 'name="futurity-checkbox-main-6"' );
//     $content = substr_replace( $content, ' data-amount="1350" ', $str_pos, 0 );

//     /*Derby */
//     $str_pos = strpos( $content, 'name="derby-checkbox-main-1"' );
//     $content = substr_replace( $content, ' data-amount="1,990" ', $str_pos, 0 );

//     $str_pos = strpos( $content, 'name="derby-sub-checkbox-1"' );
//     $content = substr_replace( $content, ' data-amount="500" ', $str_pos, 0 );

//     $str_pos = strpos( $content, 'name="derby-checkbox-main-2"' );
//     $content = substr_replace( $content, ' data-amount="400" ', $str_pos, 0 );

//     $str_pos = strpos( $content, 'name="derby-checkbox-main-3"' );
//     $content = substr_replace( $content, ' data-amount="1,990" ', $str_pos, 0 );

//     $str_pos = strpos( $content, 'name="derby-checkbox-main-4"' );
//     $content = substr_replace( $content, ' data-amount="850" ', $str_pos, 0 );

//     $str_pos = strpos( $content, 'name="derby-checkbox-main-5"' );
//     $content = substr_replace( $content, ' data-amount="850" ', $str_pos, 0 );

//     $str_pos = strpos( $content, 'name="derby-checkbox-main-6"' );
//     $content = substr_replace( $content, ' data-amount="1350" ', $str_pos, 0 );





//     $str_pos = strpos( $content, 'name="stalls"' );
//     $content = substr_replace( $content, ' data-amount="200" ', $str_pos, 0 );
  
//     $str_pos = strpos( $content, 'name="rv-nights-1"' );
//     $content = substr_replace( $content, ' data-amount="50" ', $str_pos, 0 );

//     $str_pos = strpos( $content, 'name="rv-nights-2"' );
//     $content = substr_replace( $content, ' data-amount="50" ', $str_pos, 0 );
  
//     $str_pos = strpos( $content, 'name="entry-fee"' );
//     $content = substr_replace( $content, ' data-amount="entry-fee" ', $str_pos, 0 );
  
//     $str_pos = strpos( $content, 'name="stall-fee"' );
//     $content = substr_replace( $content, ' data-amount="stall-fee" ', $str_pos, 0 );

//     $str_pos = strpos( $content, 'name="rv-fee"' );
//     $content = substr_replace( $content, ' data-amount="rv-fee" ', $str_pos, 0 );

//     $str_pos = strpos( $content, 'name="stalls"' );
//     $content = substr_replace( $content, ' data-amount="200" ', $str_pos, 0 );
  
//     return $content;
// }

add_action('tribe_events_after_header', 'my_custom_content', 100);
function my_custom_content() {
echo "Here is my custom content!";
}