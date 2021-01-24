<?php
/**
 *
 * @var array $slides
 *
 */

use exampleBwp\controller\AdvancedImagesController;

?>
<div class="c-charity-slider">
    <div class="c-charity-slider__timeline js-animated-element">
        <i></i>
        <div class="c-charity-slider__pagination swiper-pagination js-charity-pagination">

        </div>

    </div>

    <div class="c-charity-slider__content js-animated-element">
        <div class="swiper-container js-charity-slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
				<?php
				if ( ! empty( $slides ) ) {
					foreach ( $slides as $slide ) {
						if ( ! empty( $slide['image']['ID'] ) ) { ?>
                            <div class="swiper-slide">
                                <div class="c-charity-slider__content-slide js-charity-slide"
                                     data-year="<?= $slide['year']; ?>"
                                     data-image="<?= AdvancedImagesController::get_image_by_size_name( $slide['image']['ID'], 'image_1200' ); ?>">
                                    <h3 class="u-a5">
										<?= $slide['title']; ?>
                                    </h3>
                                </div>
                            </div>
						<?php }
					}
				}
				?>
                <!-- Slides -->
            </div>
        </div>
    </div>
</div>
