<?php
/**
 *
 * @var array $image
 * @var string $cta_link_url
 * @var string $data_attr
 * @var string $cta_link_label
 *
 */

use exampleBwp\controller\AdvancedImagesController;

?>
<figure class="o-aspect-ratio-figure">
	<?php if ( ! empty( $image['ID'] ) ) {
		get_partial( 'images/picture-data', array(
			'srcset'             => AdvancedImagesController::get_srcset_url( (int) $image['ID'], 'image_600', '' ),
			'fallback_image_url' => AdvancedImagesController::get_image_by_size_name( (int) $image['ID'], 'image_600' ),
			'alt'                => $image['alt'],
			'img_class'          => 'js-lazy'
		) );
	}
	?>
</figure>
<div class="c-charity-blog-section__card-info">
	<?php
	if ( ! empty( $cta_link_url ) ) { ?>

		<?php if ( ! empty( $link_description ) && ! empty( $cta_link_label ) ) { ?>
            <h4 class="u-a2"><?= $link_description; ?></h4>
		<?php } ?>
        <span class="c-inline-link"><?= $cta_link_label; ?></span>
	<?php } ?>
</div>
