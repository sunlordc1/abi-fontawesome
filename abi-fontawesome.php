<?php
/**
 * Plugin Name:       ABI Fontawesome
 * Plugin URI:        https://github.com/sunlordc1/wp_font-awesome
 * Description:       Add fontawesome to your project wordpress
 * Version:           1.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            SunLordc1
 * Author URI:        https://github.com/sunlordc1/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://github.com/sunlordc1/wp_font-awesome
 * Text Domain:       abi-fontawesome
 * Domain Path:       /languages
 */



if (! function_exists('fa_custom_setup_kit') ) {
    function fa_custom_setup_kit($kit_url = '') {
      foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
        add_action(
          $action,
          function () use ( $kit_url ) {
            // wp_enqueue_script( 'font-awesome-kit', $kit_url, [], null );
            wp_enqueue_style( 'all-fa', plugins_url('css/fontawesome6.min.css',__FILE__ ));
          }
        );
      }
    }
  }
fa_custom_setup_kit('https://kit.fontawesome.com/a4669b2749.js');