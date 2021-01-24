<?php
/**
 *
 * @var boolean $show
 * @var string $title
 * @var string $description
 * @var array $items
 * @var array $module_countries
 *
 */


?>


<div class="o-charity-numbers" id="<?= ! empty( $acf_fc_layout ) ? $acf_fc_layout : ''; ?>">
    <section class="o-section">
        <div class="o-container">
            <div class="c-charity-numbers">
				<?php
				if ( ! empty( $title ) ) { ?>
                    <h2 class="c-charity-numbers__title u-a6 js-animated-element">
						<?= $title; ?>
                    </h2>
				<?php }
				if ( ! empty( $description ) ) { ?>
                    <p class="c-charity-numbers__description u-a2 js-animated-element">
						<?= $description; ?>
                    </p>
				<?php } ?>
                <div class="c-charity-numbers__grid">
					<?php foreach ( $items as $key=>$item ) {
						get_partial( 'flexible-content/components/charity/number-item', array(
							'item' => (object) $item,
							'index' => $key
						) );
					} ?>

                </div>
            </div>
        </div>
    </section>
</div>
