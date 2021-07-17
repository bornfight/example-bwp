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

class CustomPostTypes {

	const POST_TYPE_BLOG       = 'post';
	const POST_TYPE_ARTICLES   = 'articles';
	const POST_TYPE_NEWS_PRESS = 'news';

	const TAXONOMY_BLOG_CATEGORY = 'category';

	public function register(): void {
		$this->register_post_types();
	}

	private function register_post_types(): void {
		add_action( 'init', function () {
			register_post_type( self::POST_TYPE_NEWS_PRESS, array(
				'labels'             => array(
					'name'          => __( 'News & Press' ),
					'singular_name' => __( 'News & Press' ),
				),
				'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
				'public'             => true,
				'publicly_queryable' => true,
				'has_archive'        => true,
				'hierarchical'       => false,
				'show_in_rest'       => true,
				'menu_icon'          => 'dashicons-admin-post',
				'rewrite'            => array(
					'slug'       => self::POST_TYPE_NEWS_PRESS,
					'with_front' => false,
				),
			) );

			register_post_type( self::POST_TYPE_ARTICLES, array(
				'labels'             => array(
					'name'          => __( 'Articles' ),
					'singular_name' => __( 'Articles' ),
				),
				'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
				'public'             => true,
				'publicly_queryable' => true,
				'has_archive'        => true,
				'hierarchical'       => false,
				'show_in_rest'       => true,
				'menu_icon'          => 'dashicons-admin-post',
				'rewrite'            => array(
					'slug'       => 'artikli',
					'with_front' => false,
				),
			) );

		} );

	}
}
