<?php

/*
Plugin Name: "Web or Mobile" Form
Description: Suggests web or mobile app from the result of user form 
Version: 1.0
*/

if ( ! class_exists( 'WebOrMobile' ) ) {

	class WebOrMobile {
		public $name = 'web-or-mobile';

		public function __construct() {
			add_shortcode('web-mobile', array( &$this, 'include_file' ) );
		}

		function include_file() {
			$plugin_url = plugin_dir_url( __FILE__ );
			wp_enqueue_style( 'wom_style', $plugin_url . '/assets/css/wom-style.css' );
			wp_enqueue_script( 'wom_script',
				$plugin_url . '/assets/js/script.js',
				array( 'jquery' ) );
			ob_start();
			include(plugin_dir_path(__FILE__) . 'form-template.php');
			return ob_get_clean();
		}



	}

	$GLOBALS['web_or_mobile'] = new WebOrMobile();

}