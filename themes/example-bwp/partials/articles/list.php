<?php

use exampleBwp\controller\AdvancedImagesController;
use exampleBwp\core\CustomPostTypes;
use exampleBwp\provider\PostDataProvider;

$post_data_provider = new PostDataProvider();
$args               = array(
	'post_type'      => CustomPostTypes::POST_TYPE_ARTICLES,
	'posts_per_page' => 4,
	'post_status'    => 'publish',
);

$articles = $post_data_provider->get_post_data( $args );


if ( ! empty( $articles ) ) { ?>
    <div style="margin-top: 100px">
        <h1>Articles</h1>
        <div style="display: flex;">
			<?php foreach ( $articles as $article ) {
				$featured_image = AdvancedImagesController::get_featured_image_by_size_name( (int) $article->ID, 'image_900' );
				?>
                <a href="<?= get_permalink( $article ); ?>" class="js-modal-trigger" style="padding: 10px"
                   data-post-data-id="<?= $article->ID; ?>"
                   data-return-url="<?= get_permalink(); ?>">
                    <div>
						<?php if ( ! empty( $featured_image['url'] ) ) { ?>
                            <img src="<?= $featured_image['url']; ?>" alt="<?= $featured_image['alt']; ?>" width="200px"
                                 height="auto">
						<?php } ?>
                    </div>
					<?= $article->post_title; ?>
                </a>
			<?php } ?>
        </div>
    </div>
<?php } ?>
