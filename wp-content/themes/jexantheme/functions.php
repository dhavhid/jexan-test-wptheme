<?php

/**
 * Include custom classes
 */
require('custom-classes/walker-nav-menu-dropdown.php');

/**
 * Registers the menu on top of every page of the website
 * jexan_register_header_menu
 * @return void
 * 
 */
function jexan_register_header_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'jexan_register_header_menu' );

function jexan_wp_nav_menu() {
    wp_nav_menu( array(
        'theme_location' => 'header-menu', 
        'container_class' => 'header-top-menu d-none d-md-block'
    ) );
    wp_nav_menu( array(
		'theme_location' => 'header-menu',
		'walker'         => new Walker_Nav_Menu_Dropdown(),
		'items_wrap'     => '<div class="mobile-menu d-block d-sm-block d-md-none"><form><select onchange="if (this.value) window.location.href=this.value">%3$s</select></form></div>',
	) );
}

/**
 * Creates a responsive image using picture
 *
 * @param $image_field_prefix string Prefix of the image field
 * @param $image_alt string Image alt
 * @param $css_classes string CSS classes that you would like to include separated by space
 *
 *
 * @return string
 */
function jexan_create_responsive_image( $image_field_prefix, $image_alt = '', $css_classes = '' ) {
    $mobile_breakpoint = 576;
    $tablet_breakpoint = 768;
  
    $desktop_image = get_field( $image_field_prefix . '_desktop' );
    $tablet_image  = get_field( $image_field_prefix . '_tablet' );
    $mobile_image  = get_field( $image_field_prefix . '_mobile' );
  
    $desktop_url = is_array( $desktop_image ) ? $desktop_image['url'] : $desktop_image;
    $tablet_url  = is_array( $tablet_image ) ? $tablet_image['url'] : $tablet_image;
    $mobile_url  = is_array( $mobile_image ) ? $mobile_image['url'] : $mobile_image;
  
    $responsive_image = '<picture>
        <source media="(max-width:' . $mobile_breakpoint . 'px)" srcset="' . $mobile_url . '">
        <source media="(max-width: ' . $tablet_breakpoint . 'px)" srcset="' . $tablet_url . '">
        <img class="' . $css_classes . '" src="' . $desktop_url . '" alt="' . $image_alt . '">
      </picture>';
  
  
    echo $responsive_image;
}

/**
 * Creates a shortcode to strike through a piece of text
 *
 * @param $atts an array that holds the attributes for the shortcode
 * @param $content a string with the content of the shortcode
 * 
 * @return string
 */
function jexan_shortcode_strikethrough( $atts = null, $content ) {
    $a = shortcode_atts( array(
        'wrapper' => 'div',
        'bgcolor' => '#ffffff',
    ), $atts );

    return "<{$a['wrapper']} class='strikethrough' style='text-align: center;'><span style='background-color: {$a['bgcolor']} !important;'>{$content}</span></{$a['wrapper']}>";
}
add_shortcode( 'strikethrough', 'jexan_shortcode_strikethrough' );

/**
 * Creates a shortcode to make a coloured box with content
 *
 * @param $atts an array that holds the attributes for the shortcode
 * @param $content a string with the content of the shortcode
 * 
 * @return string
 */
function jexan_shortcode_boxcontent( $atts = null, $content ) {
    $a = shortcode_atts( array(
        'bgcolor' => '#000000',
        'color'   => '#ffffff',
        'float'   => 'left',
    ), $atts);

    return "<div class='boxcontent' style='background-color: {$a['bgcolor']}; color: {$a['color']};'>{$content}</div>";
}
add_shortcode( 'boxcontent', 'jexan_shortcode_boxcontent' );
