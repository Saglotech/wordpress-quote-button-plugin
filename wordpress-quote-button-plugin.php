<?php
/*
Plugin Name: Saglotech Button Plugin
Description: Adds a floating button to the website.
Version: 1.0
Author: Saglotech
*/

function add_floating_button() {
  // Check if not on the contact page
  if (!is_page('contact')) {
    echo '<div class="floating-button">';
    echo '<a href="https://www.saglotech.co.za/contact/">Get a Quote</a>';
    echo '</div>';
  }
}

function enqueue_floating_button_scripts() {
  wp_enqueue_style('floating-button-style', plugins_url('floating-button.css', __FILE__));
}

add_action('wp_footer', 'add_floating_button');
add_action('wp_enqueue_scripts', 'enqueue_floating_button_scripts');
