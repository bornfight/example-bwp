<?php


namespace exampleBwp\provider;

use WP_Query;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class PostDataProvider {
	public function get_post_data( array $args ): array {
		$query = new WP_Query($args);

		return $query->get_posts();
	}
}
