<?php
/**
 *
 * @var boolean $show
 * @var string $eyebrow
 * @var string $title
 * @var array $link
 * @var array $projects
 * @var array $module_countries
 *
 */

?>

<div class="o-news-slider" id="<?= ! empty( $acf_fc_layout ) ? $acf_fc_layout : ''; ?>">
    <div class="o-section">
        <div class="o-container">
            <div class="c-news-slider">
                <div class="c-news-slider__row c-news-slider__row--main">
                    <div class="c-news-slider__col">
						<?php if ( ! empty( $eyebrow ) ) { ?>
                            <p class="c-eyebrow js-animated-element">
								<?= $eyebrow; ?>
                            </p>
						<?php }
						if ( ! empty( $title ) ) { ?>
                            <h2 class="u-a4 js-animated-element">
								<?= $title; ?>
                            </h2>
						<?php } ?>
                    </div>
                    <div class="c-news-slider__col js-animated-element">
                        <div class="c-news-slider__row">
							<?php if ( ! empty( $link['url'] ) && ! empty( $link['title'] ) ) { ?>
                                <a href="<?= $link['url']; ?>" class="c-inline-link">
									<?= $link['title']; ?>
                                </a>
							<?php } ?>
                            <div class="c-news-slider__navigation">
                                <i class="c-news-slider__button js-news-slider-prev">
									<?= get_icon( "arrow-left" ) ?>
                                </i>
                                <i class="c-news-slider__button js-news-slider-next">
									<?= get_icon( "arrow-right" ) ?>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-container js-news-slider">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
						<?php
						if ( ! empty( $projects ) ) {
							foreach ( $projects as $project ) { ?>
                                <div class="swiper-slide">
                                    <div class="c-news-slider__slide js-animated-element">
										<?php get_partial( 'flexible-content/components/charity/projects-card', array(
											'project' => $project
										) ); ?>
                                    </div>
                                </div>
							<?php }
						}
						?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
