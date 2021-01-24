<?php


namespace exampleBwp\config;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class ModulesConfig {
	public static function get_all_modules_config(): array {
		return array(
			'about_team_module'              => 'About Team Module',
			'awards_section_module'          => 'Awards Section Module',
			'benefits_module'                => 'Benefits Module',
			'benefits_tile_module'           => 'Benefits Tile Module',
			'career_list_module'             => 'Careers List Module',
			'charity_blog_section_module'    => 'Charity Blog Section Module',
			'charity_contact_us_module'      => 'Charity Contact us Module',
			'charity_header_module'          => 'Charity Header Module',
			'charity_helping_local_module'   => 'Charity Helping Local Module',
			'charity_image_slider_module'    => 'Charity Image Slider Module',
			'charity_map_module'             => 'Charity Map Module',
			//'charity_news_slider_module',
			'charity_numbers_module'         => 'Charity Numbers Module',
			'charity_quote_module'           => 'Charity Quote Module',
			'contact_us_module'              => 'Contact us Module',
			'facts_slider_module'            => 'Facts Slider Module',
			'full_image_module'              => 'Full Image Module',
			'header_module'                  => 'Header Module',
			'headquarters_module'            => 'Headquarters Module',
			'hero_video_module'              => 'Hero video Module',
			'home_header_module'             => 'Home header Module',
			'home_header_fitline_module'     => 'Home header FitLine Module',
			'home_partners_module'           => 'Home partners Module',
			'home_success_stories_module'    => 'Home success stories Module',
			'image_content_module'           => 'Image Content Module',
			'instagram_module'               => 'Instagram Module',
			'intro_module'                   => 'Intro Module',
			'join_us_slider_module'          => 'Join us slider Module',
			'key_figures_module'             => 'Key Figures Module',
			'map_module'                     => 'Map module',
			'masonry_gallery_module'         => 'Masonry Gallery Module',
			'media_assets_module'            => 'Media Assets Module',
			'media_featured_module'          => 'Media Featured Module',
			'media_representative_module'    => 'Media Representative Module',
			'news_slider_module'             => 'News Slider Module',
			'numbers_about_module'           => 'Numbers About Module',
			'ntsc_video_module'              => 'NTC Video Module',
			'our_values_module'              => 'Our Values Module',
			'press_coverage_featured_module' => 'Press Coverage Featured Module',
			'quote_image_module'             => 'Quote Image Module',
			'quote_module'                   => 'Quote Module',
			'sports_section_module'          => 'Sports Section Module',
			'steps_module'                   => 'Steps Module',
			'stories_list_module'            => 'Stories List Module',
			'slider_module'                  => 'Slider Module',
//			'story_block_module',
			'team_images_module'             => 'Team Images Module'
		);
	}
}
