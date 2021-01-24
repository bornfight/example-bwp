<?php
/**
 *
 * @var boolean $show
 * @var string $title
 * @var array $headquarters
 * @var array $module_countries
 * @var string $fitline_modifier
 *
 */

?>
<div class="o-map" id="<?= ! empty( $acf_fc_layout ) ? $acf_fc_layout : ''; ?>">
    <div class="o-section">
        <div class="o-container">
            <div class="c-map c-map--hq <?= ! empty( $fitline_modifier ) ? $fitline_modifier : ''; ?>">
                <div class="c-map__hq">
					<?php if ( ! empty( $title ) ) { ?>
                        <h3 class="u-a2 js-animated-element">
							<?= $title; ?>
                        </h3>
					<?php } ?>

                    <div class="c-map__hq-list">
						<?php foreach ( $headquarters as $headquarter ) {
							get_partial( 'flexible-content/components/headquarter-card', array(
								'image' => $headquarter['image'],
								'name'  => $headquarter['name']
							) );
						}
						?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
