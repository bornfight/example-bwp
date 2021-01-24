<?php
/**
 *
 * @var object $award
 * @var string $description
 * @var string $modifier
 *
 */

use exampleBwp\controller\AdvancedImagesController;

?>

<div class="c-awards-card <?= $modifier; ?> js-animated-element">
    <div class="c-awards-card__inner">
        <figure>
			<?php
			get_partial( 'images/picture-data', array(
				'srcset'             => AdvancedImagesController::get_image_by_size_name( (int) get_post_thumbnail_id( $award ), 'image_480' ),
				'fallback_image_url' => AdvancedImagesController::get_image_by_size_name( (int) get_post_thumbnail_id( $award ), 'image_480' ),
				'alt'                => get_post_meta( get_post_thumbnail_id( $award ), '_wp_attachment_image_alt', true ),
				'img_class'          => 'js-lazy'
			) );
			?>
        </figure>
		<?php if ( ! empty( $description ) ) { ?>
            <p class="u-b1">
				<?= $description; ?>
            </p>
		<?php } ?>
    </div>
</div>
