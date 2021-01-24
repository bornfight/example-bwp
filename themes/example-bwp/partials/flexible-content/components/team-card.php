<?php
/**
 *
 * @var object $team_member
 *
 *
 */

use exampleBwp\controller\AdvancedImagesController;

?>
<div class="swiper-slide">
    <div class="c-team__slide">
        <figure>
			<?php
			if ( ! empty( $team_member->image['ID'] ) ) {
				get_partial( 'images/picture-data', array(
					'srcset'             => AdvancedImagesController::get_srcset_url( (int) $team_member->image['ID'], 'srcset_480_700', ' 768w,' ),
					'fallback_image_url' => AdvancedImagesController::get_image_by_size_name( (int) $team_member->image['ID'], 'image_700' ),
					'alt'                => $team_member->image['alt'],
					'img_class'          => 'swiper-lazy'
				) );
			}
			?>
        </figure>

        <div class="c-team__slide-content">
            <h4 class="c-team__name u-a1 u-normal">
				<?= $team_member->name; ?>
            </h4>
            <p>
				<?= $team_member->description; ?>
            </p>
        </div>
    </div>
</div>
