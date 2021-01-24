<?php
/**
 *
 * @var boolean $show
 * @var string $eyebrow
 * @var string $title
 * @var array $paragraphs
 * @var array $scientific_board
 * @var array $module_countries
 * @var string $fitline_modifier
 *
 */

?>

<div class="o-team" id="<?= ! empty( $acf_fc_layout ) ? $acf_fc_layout : ''; ?>">
    <div class="o-section">
        <div class="o-container">
            <div class="c-team <?= ! empty( $fitline_modifier ) ? $fitline_modifier : ''; ?>">
                <div class="c-team__content">
					<?php
					if ( ! empty( $eyebrow ) ) { ?>
                        <p class="c-eyebrow c-eyebrow--white js-animated-element"><?= $eyebrow; ?></p>
					<?php }

					if ( ! empty( $title ) ) { ?>
                        <h3 class="c-team__title u-a4 js-animated-element">
							<?= $title; ?>
                        </h3>
					<?php }

					if ( ! empty( $paragraphs ) ) {
						foreach ( $paragraphs as $paragraph ) { ?>
                            <p class="js-animated-element">
								<?= $paragraph['paragraph']; ?>
                            </p>
                            <br>
						<?php }
					}
					?>
                    <div class="c-slider-navigation js-animated-element">
                        <button class="c-slider-navigation__button js-team-slider-prev">
							<?= get_icon( "arrow-left" ) ?>
                        </button>
                        <span class="c-slider-navigation__pagination u-b0 js-team-slider-pagination"> 01 / 08</span>
                        <button class="c-slider-navigation__button js-team-slider-next">
							<?= get_icon( "arrow-right" ) ?>
                        </button>
                    </div>

                </div>

                <div class="c-team__slider js-animated-element">
                    <div class="swiper-container js-team-slider">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
							<?php
							if ( ! empty( $scientific_board ) ) {
								foreach ( $scientific_board as $team_member ) {
									get_partial( 'flexible-content/components/team-card', array(
										'team_member' => (object) $team_member
									) );
								}
							} ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
