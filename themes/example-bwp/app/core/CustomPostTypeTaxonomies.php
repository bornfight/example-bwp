<?php
/**
 *  Template function for adding custom post type. AutoLoader class should auto include this file.
 *
 *  Following code will add a new custom post type.
 *  Please check codex for more information on custom post types
 *  Custom post types: https://codex.wordpress.org/Post_Types#Custom_Post_Types
 *  Register post types: https://codex.wordpress.org/Function_Reference/register_post_type#Arguments
 */

namespace exampleBwp\core;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class CustomPostTypeTaxonomies {
//	const TAXONOMY_SOME_TAXONOMY = 'taxonomy';

	public function register() : void {
		$this->register_custom_taxonomies();
	}

	private function register_custom_taxonomies(): void {
//		add_action( 'init', function () {
//			register_taxonomy(
//				self::TAXONOMY_SOME_TAXONOMY,  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
//				CustomPostTypes::POST_TYPE_BLOG,        // post type name
//				array(
//					'hierarchical'       => true,
//					'label'              => 'Taxonomy Name',  // Display name
//					'query_var'          => true,
//					'public'             => true,
//					'publicly_queryable' => false,
//					'show_ui'            => true,
//					'show_admin_column'  => true,
//					'show_in_nav_menus'  => true,
//					'show_in_rest'       => true,
//				)
//			);
//		} );
	}
}
