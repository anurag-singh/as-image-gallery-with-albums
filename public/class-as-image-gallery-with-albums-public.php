<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    AS_Image_Gallery_With_Albums
 * @subpackage AS_Image_Gallery_With_Albums/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    AS_Image_Gallery_With_Albums
 * @subpackage AS_Image_Gallery_With_Albums/public
 * @author     Your Name <email@example.com>
 */
class AS_Image_Gallery_With_Albums_Public {

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of the plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct( $plugin_name, $version ) {

        $this->plugin_name = $plugin_name;
        $this->version = $version;

    }

    /**
     * Register the stylesheets for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_styles() {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in AS_Image_Gallery_With_Albums_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The AS_Image_Gallery_With_Albums_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/as-image-gallery-public.css', array(), $this->version, 'all' );

        wp_enqueue_style( $this->plugin_name.'fancy', plugin_dir_url( __FILE__ ) . 'css/jquery.fancybox.css', array(), $this->version, 'all' );

    }

    /**
     * Register the JavaScript for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts() {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in AS_Image_Gallery_With_Albums_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The AS_Image_Gallery_With_Albums_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/jquery.fancybox.js', array( 'jquery' ), $this->version, true );

        wp_enqueue_script( $this->plugin_name.'custom-functions', plugin_dir_url( __FILE__ ) . 'js/fancybox-custom-functions.js', array( 'jquery' ), $this->version, true );



    }


    /**
     * Override wordpress default template
     *
     * @since    1.0.0
     */
    function override_templates_for_cpt_gallery( $template ){

        // Check if its a gallery page
        if( is_post_type_archive('gallery')){
            $template = plugin_dir_path( __FILE__ ) .'/templates/archive-gallery.php';
        }

        // Check if taxonomy name of CPT 'gallery'
        if( is_tax('album')){
            $template = plugin_dir_path( __FILE__ ) .'/templates/taxonomy-album.php';
        }

        // Check if single page of CPT 'gallery'
        if( is_singular('gallery')){
            $template = plugin_dir_path( __FILE__ ) .'/templates/single-gallery.php';
        }
        return $template;

    }


}
