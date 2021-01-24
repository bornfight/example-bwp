<?php

namespace exampleBwp\bundles;

use bornfight\wpHelpers\AssetBundle;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

class ExampleBwpAssets extends AssetBundle
{
//    public $asyncCss = true;

	public $js;

	public $css;

	public function __construct() {
	$this->js = [
		'exampleBwpVendor' => [
			'path'     => 'dist/vendor.js',
			'version'  => 1.0,
			'localize' => [
				'object' => 'frontend_rest_object',
				'data'   => [
					'rest_url' => get_home_url() . '/wp-json/api/v1'
				]
			]
		],
		'exampleBwpBundle' => [
			'path'    => 'dist/bundle.js',
			'version' => 1.0
		],
	];

	$this->css = [
		'exampleBwpMainCSS' => [
			'path'      => 'dist/style.css',
			'in_footer' => false,
			'version'   => 1.0
		],
	];
}

}
