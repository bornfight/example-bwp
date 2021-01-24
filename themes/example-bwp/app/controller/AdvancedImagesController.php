<?php


namespace exampleBwp\controller;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

use wpAdvancedImagesPlugin\controller\WPAIMP_Image_Controller;

class AdvancedImagesController {
	public static function get_image_by_custom_size( int $image_id, array $sizes, bool $crop = false ): string {
		if ( is_plugin_active( 'wp-advanced-images-plugin/wp-advanced-images-plugin.php' ) ) {
			$image_controller = WPAIMP_Image_Controller::get_instance();

			return $image_controller->get_attachment_image_by_custom_size( $image_id, $sizes, $crop );
		}

		return '';
	}

	public static function get_image_by_size_name( int $image_id, string $size_name, bool $crop = false ): ?string {
		if ( is_plugin_active( 'wp-advanced-images-plugin/wp-advanced-images-plugin.php' ) ) {
			$image_controller = WPAIMP_Image_Controller::get_instance();

			return $image_controller->get_attachment_image_by_size_name( $image_id, $size_name, $crop );
		}

		return '';
	}

	public static function get_srcset_url( int $image_id, string $srcset, string $breakpoint ): string {
		if ( empty( $srcset ) ) {
			return '';
		}

		$small_image_url = '';
		if ( ! empty( $breakpoint ) ) {
			$small_image_url = AdvancedImagesController::get_image_by_size_name( $image_id, 'image_600' );
		}

		$full_image = AdvancedImagesController::get_image_by_size_name( $image_id, 'full' );

		switch ( $srcset ) {
			case 'srcset_480_600':
				$big_image_url = AdvancedImagesController::get_image_by_size_name( $image_id, 'image_600' );
				break;
			case 'srcset_480_700':
				$big_image_url = AdvancedImagesController::get_image_by_size_name( $image_id, 'image_700' );
				break;
			case 'srcset_480_800':
				$big_image_url = AdvancedImagesController::get_image_by_size_name( $image_id, 'image_800' );
				break;
			case 'srcset_480_900':
				$big_image_url = AdvancedImagesController::get_image_by_size_name( $image_id, 'image_900' );
				break;
			case 'srcset_480_1200':
				$big_image_url = AdvancedImagesController::get_image_by_size_name( $image_id, 'image_1200' );
				break;
			case 'srcset_480_1440':
				$big_image_url = AdvancedImagesController::get_image_by_size_name( $image_id, 'image_1440' );
				break;
			case 'srcset_480_1920':
				$big_image_url = AdvancedImagesController::get_image_by_size_name( $image_id, 'image_1920' );
				break;
			default:
				$small_image_url = AdvancedImagesController::get_image_by_size_name( $image_id, $srcset );
				break;
		}

		if ( ! empty( $big_image_url ) && ! empty( $breakpoint ) ) {
			return $small_image_url . ' ' . $breakpoint . $big_image_url . ' 1920w,' . $full_image;
		}

		if ( empty( $breakpoint ) ) {
			return $small_image_url . ' 1920w,' . $full_image;
		}

		return '';
	}
}
