<?php

/**
 * Shortcodes
 *
 * Setup theme shortcodes
 *
 * @package WordPress
 * @subpackage Infrastrukt for WordPress
 * @since Infrastrukt for WordPress 1.0
 */

/**
 * Initialise Infrastrukt for WordPress Shortcodes
 */

// Allow shortcodes in widgets

add_filter('widget_text', 'do_shortcode');

/**
 * Grid
 */

// Rows [row][/row]

function infrastrukt_shortcode_row( $atts, $content = null ) {
   return '<div class="row">' . do_shortcode($content) . '</div>';
}

add_shortcode( 'row', 'infrastrukt_shortcode_row' );

// Columns [column][/column]

function infrastrukt_shortcode_column( $atts, $content = null ) {

  extract( shortcode_atts( array(
    'center' => '',
    'span' => '',
    ), $atts ) );

  // Set the 'center' variable
  if ($center == 'true') {
  $center = 'centered';
  }

  return '<div class="' . esc_attr($span) . ' columns ' . esc_attr($center) .'">' . do_shortcode($content) . '</div>';
}

add_shortcode( 'column', 'infrastrukt_shortcode_column' );

/**
 * UI
 */

// Buttons [button][/button]

function infrastrukt_shortcode_button( $atts, $content = null ) {

  extract( shortcode_atts( array(
    'link' => '#',
    'size' => 'medium',
    'type' => '',
    'style' => '',
    'reveal' => ''
    ), $atts ) );

    if (!$reveal == null) {
      $reveal_data = 'data-reveal-id=' . $reveal . ' ';
    }

  return '<a ' . $reveal_data . ' href="' . esc_attr($link) . '" class="' . esc_attr($size) . ' ' . esc_attr($style) . ' ' . esc_attr($type) . ' button">' . $content . '</a>';
}

add_shortcode( 'button', 'infrastrukt_shortcode_button' );

// Alerts [alert][/alert]

function infrastrukt_shortcode_alert( $atts, $content = null ) {

  extract( shortcode_atts( array(
    'type' => ''
    ), $atts ) );

  return '<div data-alert class="alert-box ' . esc_attr($type) . '">' . do_shortcode($content) . ' <a href="" class="close">&times;</a> </div>';
}

add_shortcode( 'alert', 'infrastrukt_shortcode_alert' );

// Panels [panel][/panel]

function infrastrukt_shortcode_panel( $atts, $content = null ) {

  extract( shortcode_atts( array(
    'type' => '',
    'style' => ''
    ), $atts ) );

  return '<div class="panel ' . esc_attr($type) . ' ' . esc_attr($style) . '">' . do_shortcode($content) . '</div>';
}

add_shortcode( 'panel', 'infrastrukt_shortcode_panel' );

/**
 * Elements
 */

// Detection (Show) [show][/show]

function infrastrukt_shortcode_show( $atts, $content = null ) {

  extract( shortcode_atts( array(
    'for' => ''
    ), $atts ) );

  return '<div class="show-for-' . esc_attr($for) . '">' . do_shortcode($content) . '</div>';
}

add_shortcode( 'show', 'infrastrukt_shortcode_show' );

// Detection (Hide) [hide][/hide]

function infrastrukt_shortcode_hide( $atts, $content = null ) {

  extract( shortcode_atts( array(
    'for' => ''
    ), $atts ) );

  return '<div class="hide-for-' . esc_attr($for) . '">' . do_shortcode($content) . '</div>';
}

add_shortcode( 'hide', 'infrastrukt_shortcode_hide' );

/**
 * Extras
 */

// Reveal [reveal][/reveal]

function infrastrukt_shortcode_reveal( $atts, $content = null ) {

  extract( shortcode_atts( array(
    'name' => '',
    'style' => ''
    ), $atts ) );

  return '<div id="' . esc_attr($name) . '" class="reveal-modal ' . esc_attr($style) . '" data-reveal>' . do_shortcode($content) . '</div>';

}

add_shortcode( 'reveal', 'infrastrukt_shortcode_reveal' );

?>
