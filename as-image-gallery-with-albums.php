<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           AS_Image_Gallery_With_Albums
 *
 * @wordpress-plugin
 * Plugin Name:       As Image Gallery with Albums
 * Plugin URI:        http://example.com/as-gallery-with-albums/
 * Plugin Type:       Piklist
 * Description:       Display image according to categories.
 * Version:           1.0.0
 * Author:            Anurag Singh
 * Author URI:        http://www.dselva.co.in/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       as-image-gallery-with-albums
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-as-image-gallery-with-albums-activator.php
 */
function activate_as_image_gallery_with_albums() {
    require_once plugin_dir_path( __FILE__ ) . 'includes/class-as-image-gallery-with-albums-activator.php';
    AS_Image_Gallery_With_Albums_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-as-image-gallery-with-albums-deactivator.php
 */
function deactivate_as_image_gallery_with_albums() {
    require_once plugin_dir_path( __FILE__ ) . 'includes/class-as-image-gallery-with-albums-deactivator.php';
    AS_Image_Gallery_With_Albums_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_as_image_gallery_with_albums' );
register_deactivation_hook( __FILE__, 'deactivate_as_image_gallery_with_albums' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-as-image-gallery-with-albums.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_as_image_gallery_with_albums() {

    $plugin = new AS_Image_Gallery_With_Albums();
    $plugin->run();

}
run_as_image_gallery_with_albums();


