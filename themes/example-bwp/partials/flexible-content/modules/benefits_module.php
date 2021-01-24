<?php
/**
 *
 * @var boolean $show
 * @var string $eyebrow
 * @var string $title
 * @var string $description
 * @var array $cards
 * @var array $module_countries
 * @var string $fitline_modifier
 *
 */

?>


<div class="o-benefits" id="<?= ! empty( $acf_fc_layout ) ? $acf_fc_layout : ''; ?>">
    <section class="o-section">
        <div class="o-container">
            <div class="c-benefits">
                <div class="c-benefits__header <?= ! empty( $fitline_modifier ) ? $fitline_modifier : ''; ?>">
					<?php if ( ! empty( $eyebrow ) ) { ?>
                        <p class="c-eyebrow">
							<?= $eyebrow; ?>
                        </p>
					<?php }
					if ( ! empty( $title ) ) { ?>
                        <h2 class="c-benefits__title u-a4">
							<?= $title; ?>
                        </h2>
					<?php }
					if ( ! empty( $description ) ) { ?>
                        <p class="c-benefits__description">
							<?= $description; ?>
                        </p>
					<?php } ?>
                </div>
                <div class="c-benefits__list">
					<?php
					foreach ( $cards as $key => $card ) { ?>
                        <div class="c-benefits__item">
							<?php get_partial( 'flexible-content/components/benefits-card', array(
								'card' => (object) $card,
								'key'  => $key
							) ); ?>
                        </div>
					<?php } ?>
                </div>
            </div>
        </div>
    </section>
</div>
