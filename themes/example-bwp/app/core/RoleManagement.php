<?php

namespace exampleBwp\core;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class RoleManagement {
	public function init(): void {
		// Add capabilities to default editor role
		add_action( 'admin_init', array( $this, 'edit_default_editor_role' ) );

		// Restrict access to some roles
		add_action( 'admin_init', array( $this, 'restrict_access_to_roles' ) );

		// remove custom field capability to anyone who is not admin
		add_filter( 'acf/settings/show_admin', array( $this, 'acf_options_page' ) );

		// Remove default roles
		add_action( 'admin_init', array( $this, 'remove_default_roles' ) );
	}

	/**
	 *
	 * Edit default editor role
	 *
	 */
	public function edit_default_editor_role(): void {
		$role = get_role( 'editor' );
		$role->add_cap( 'manage_options' );
		$role->add_cap( 'manage_links' );
	}

	/**
	 * Restrict access to roles
	 */
	public function restrict_access_to_roles(): void {
		$roles_user      = wp_get_current_user()->roles;
		$menus_to_remove = $this->get_menus_to_remove();
		if ( in_array( 'editor', $roles_user ) && ! empty( $menus_to_remove ) ) {
			foreach ( $menus_to_remove as $menu_to_remove ) {
				remove_menu_page( $menu_to_remove );
			}
		}
	}

	/**
	 * Remove Custom Fields option page if not admin
	 * @return bool
	 */
	public function acf_options_page(): bool {
		// provide a list of usernames who can edit custom field definitions here
		$admins = array(
			'admin'
		);

		// get the current user
		$current_user = wp_get_current_user();

		return ( in_array( $current_user->user_login, $admins ) );
	}

	/**
	 * Remove default roles
	 */
	public function remove_default_roles(): void {
		remove_role( 'contributor' );
		remove_role( 'author' );
		remove_role( 'subscriber' );
	}

	public function get_menus_to_remove(): array {
		return array(
			'options-general.php',
			'tools.php',
			'upload.php',
			'wpcf7',
			'wphb',
			'theme-options',
			'degordian-gdpr-settings-page',
			'smush'
		);
	}
}
