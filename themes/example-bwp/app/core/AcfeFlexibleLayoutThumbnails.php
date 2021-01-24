<?php


namespace exampleBwp\core;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class AcfeFlexibleLayoutThumbnails {
	public $module = '';

	public function __construct( string $module ) {
		$this->module = $module;
	}

	public function acf_flexible_layout_thumbnail( $thumbnail, $field, $layout ): string {
		return bu( "thumbnails/$this->module.png" );
	}
}
