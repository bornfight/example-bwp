<?php
/**
 *
 * @var boolean $show
 * @var string $title
 * @var string $description
 * @var array $module_countries
 *
 */

?>
<div class="c-charity-map" id="<?= ! empty( $acf_fc_layout ) ? $acf_fc_layout : ''; ?>">
    <section class="o-section">
        <div class="o-container">
            <div class="c-charity-map__top">
				<?php if ( ! empty( $title ) ) { ?>
                    <h2 class="c-charity-map__title u-a5">
						<?= $title; ?>
                    </h2>
				<?php }
				if ( ! empty( $description ) ) { ?>
                    <p class="c-charity-map__description u-a1">
						<?= $description; ?>
                    </p>
				<?php } ?>
            </div>
        </div>
    </section>
    <div class="c-charity-map__map-wrapper js-charity-map-wrapper">

    </div>
</div>
