<?php


namespace exampleBwp\config;

use wpAdvancedImagesPlugin\controller\WPAIMP_Image_Controller;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class AdvancedImagesConfig {

	public function init(): void {
		add_action( 'wp_loaded', array( $this, 'register_image_sizes' ) );
	}

	/**
	 *
	 *
	 * @SuppressWarnings(PHPMD)
	 */
	public function register_image_sizes(): void {
		if ( is_plugin_active( 'wp-advanced-images-plugin/wp-advanced-images-plugin.php' ) ) {
			$image_controller = WPAIMP_Image_Controller::get_instance();

			$custom_image_sizes = $this->get_image_sizes_config();

			if ( ! empty( $custom_image_sizes ) ) {
				foreach ( $custom_image_sizes as $size_name => $custom_image_size ) {
					$image_controller->add_image_size( $size_name, $custom_image_size );
				}
			}
		}

	}

	private function get_image_sizes_config(): array {
		return array(
			'image_200'  => array( 200, 0 ),
			'image_250'  => array( 250, 0 ),
			'image_480'  => array( 480, 0 ),
			'image_600'  => array( 600, 0 ),
			'image_700'  => array( 700, 0 ),
			'image_800'  => array( 800, 0 ),
			'image_900'  => array( 900, 0 ),
			'image_1200' => array( 1200, 0 ),
			'image_1440' => array( 1440, 0 ),
			'image_1920' => array( 1920, 0 ),
			'image_2500' => array( 2500, 0 ),
		);
	}
}
