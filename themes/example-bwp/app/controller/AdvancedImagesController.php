<?php


namespace exampleBwp\controller;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

use wpAdvancedImagesPlugin\controller\WPAIMP_Image_Controller;

class AdvancedImagesController {
	/**
	 * @param int $image_id
	 * @param array $sizes
	 * @param bool $crop
	 *
	 * @return string
	 *
	 * @SuppressWarnings(PHPMD)
	 */
	public static function get_image_by_custom_size( int $image_id, array $sizes, bool $crop = false ): string {
		if ( is_plugin_active( 'wp-advanced-images-plugin/wp-advanced-images-plugin.php' ) ) {
			$image_controller = WPAIMP_Image_Controller::get_instance();

			return $image_controller->get_attachment_image_by_custom_size( $image_id, $sizes, $crop );
		}

		return '';
	}

	/**
	 * @param int $image_id
	 * @param string $size_name
	 * @param bool $crop
	 *
	 * @return string|null
	 * @SuppressWarnings(PHPMD)
	 */
	public static function get_image_by_size_name( int $image_id, string $size_name, bool $crop = false ): ?string {
		if ( is_plugin_active( 'wp-advanced-images-plugin/wp-advanced-images-plugin.php' ) ) {
			$image_controller = WPAIMP_Image_Controller::get_instance();

			return $image_controller->get_attachment_image_by_size_name( $image_id, $size_name, $crop );
		}

		return '';
	}

	public static function get_featured_image_by_size_name( int $post_id, string $size_name ): array {
		if ( empty( $size_name ) ) {
			return array();
		}
		$featured_image_id = get_post_thumbnail_id( $post_id );

		if ( empty( $featured_image_id ) ) {
			return array();
		}

		return array(
			'url' => self::get_image_by_size_name( $featured_image_id, $size_name ),
			'alt' => get_post_meta( $featured_image_id, '_wp_attachment_image_alt', true )
		);
	}
}
