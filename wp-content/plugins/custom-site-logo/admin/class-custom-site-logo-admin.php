<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://no-site.com
 * @since      1.0.0
 *
 * @package    Custom_Site_Logo
 * @subpackage Custom_Site_Logo/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Custom_Site_Logo
 * @subpackage Custom_Site_Logo/admin
 * @author     Awais Altaf <m.awaisaltaf@gmail.com>
 */
class Custom_Site_Logo_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		$this->include_partial_files();
	}

	/**
	 * Register the partial files for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function include_partial_files() {
		/**
		 * The class responsible for defining all settings for admin end.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 
			'admin/partials/custom-site-logo-admin-settings.php';

		/**
		 * The class responsible for defining all menu for admin end.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 
			'admin/partials/custom-site-logo-admin-menu.php';

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Custom_Site_Logo_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Custom_Site_Logo_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( 'csl_admin_css', plugins_url( 'css/custom-site-logo-admin.css', __FILE__ ), array(),'1.0', 'all' );

		wp_enqueue_style( 'csl_admin_hover_css', plugins_url( 'css/hover-css/hover-min.css', __FILE__ ), array(),'1.0', 'all' );
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Custom_Site_Logo_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Custom_Site_Logo_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_media(); // Fixing media library button
		wp_enqueue_style( 'thickbox' );

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/custom-site-logo-admin.js', array( 'jquery' ), $this->version, false );

	}

}
