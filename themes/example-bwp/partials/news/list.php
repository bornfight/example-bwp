<?php

use exampleBwp\controller\AdvancedImagesController;
use exampleBwp\core\CustomPostTypes;
use exampleBwp\provider\PostDataProvider;

$post_data_provider = new PostDataProvider();
$args               = array(
	'post_type'      => CustomPostTypes::POST_TYPE_NEWS_PRESS,
	'posts_per_page' => 4,
	'post_status'    => 'publish',
);

$news = $post_data_provider->get_post_data( $args );

if ( ! empty( $news ) ) { ?>
    <div style="margin-top: 100px;">
        <h1>News</h1>
        <div style="display: flex; padding: 5px 10px">
			<?php foreach ( $news as $news_item ) {
				$featured_image = AdvancedImagesController::get_featured_image_by_size_name( (int) $news_item->ID, 'image_900' );
				?>
                <a href="<?= get_permalink( $news_item ); ?>" class="js-modal-trigger" style="padding: 10px"
                   data-post-data-id="<?= $news_item->ID; ?>" data-return-url="<?= get_permalink(); ?>">
                    <div>
						<?php if ( ! empty( $featured_image['url'] ) ) { ?>
                            <img src="<?= $featured_image['url']; ?>" alt="<?= $featured_image['alt']; ?>" width="200px"
                                 height="auto">
						<?php } ?>
                    </div>
					<?= $news_item->post_title; ?>
                </a>
			<?php } ?>
        </div>
    </div>
<?php } ?>
