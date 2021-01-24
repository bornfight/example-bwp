<?php
/**
 *
 * @var object $card
 * @var int $key
 *
 */

use exampleBwp\controller\AdvancedImagesController;
use exampleBwp\modulesProvider\BenefitCardModuleProvider;

?>
<div class="c-benefits-card">
    <div class="c-benefits-card__row">
        <div class="c-benefits-card__image">
            <figure class="o-aspect-ratio-figure">
				<?php
				if ( ! empty( $card->image['ID'] ) ) {
					get_partial( 'images/picture-data', array(
						'srcset'             => AdvancedImagesController::get_srcset_url( (int) $card->image['ID'], 'srcset_480_600', ' 768w,' ),
						'fallback_image_url' => AdvancedImagesController::get_image_by_size_name( (int) $card->image['ID'], 'image_600' ),
						'alt'                => $card->image['alt'],
						'img_class'          => 'js-lazy'
					) );
				}
				?>
            </figure>
        </div>
        <div class="c-benefits-card__content">
            <div class="c-benefits-card__title">
                <span class="u-a8">
                    <?= ++ $key; ?>
                </span>
                <h3 class="u-a5">
					<?= $card->title; ?>
                </h3>
            </div>

			<?php
			if ( ! empty( $card->blocks ) ) {
				foreach ( $card->blocks as $block ) {
					echo BenefitCardModuleProvider::get_benefit_card_block( $block );
				}
			}
			?>
        </div>
    </div>
</div>
