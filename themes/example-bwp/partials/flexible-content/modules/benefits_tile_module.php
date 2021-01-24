<?php
/**
 *
 * @var boolean $show
 * @var string $title
 * @var array $cards
 * @var array $module_countries
 * @var string $fitline_modifier
 *
 *
 */

?>

<div class="o-benefits-tile" id="<?= ! empty( $acf_fc_layout ) ? $acf_fc_layout : ''; ?>">
    <section class="o-section">
        <div class="o-container">
            <div class="c-benefits-tile <?= ! empty( $fitline_modifier ) ? $fitline_modifier : ''; ?>">
				<?php if ( ! empty( $title ) ) { ?>
                    <h2 class="u-a4 js-animated-element">
						<?= $title; ?>
                    </h2>
				<?php } ?>
                <div class="c-benefits-tile__list">
					<?php
					foreach ( $cards as $card ) {
						get_partial( 'flexible-content/components/benefits-tile-card', array(
							'card' => $card
						) );
					}
					?>
                </div>
            </div>
        </div>
    </section>
</div>

