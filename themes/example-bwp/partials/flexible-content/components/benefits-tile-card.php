<?php
/**
 *
 * @var array $card
 *
 */

use exampleBwp\controller\AdvancedImagesController;

if ( ! empty( $card['background_image']['url'] ) ) { ?>
    <div class="c-benefits-tile-card js-animated-element"
         style="background-image: url('<?= $card['background_image']['url']; ?>')">
        <figure class="js-intro-slide-figure">
			<?php
			if ( ! empty( $card['icon']['ID'] ) ) {
				get_partial( 'images/picture', array(
					'srcset'             => AdvancedImagesController::get_srcset_url( $card['icon']['ID'], 'image_480', '' ),
					'fallback_image_url' => AdvancedImagesController::get_image_by_size_name( $card['icon']['ID'], 'image_480' ),
					'alt'                => $card['icon']['alt'],
					'img_class'          => ''
				) );
			}
			?>
        </figure>

        <p class="u-a3">
			<?= $card['description']; ?>
        </p>
    </div>
<?php } ?>
