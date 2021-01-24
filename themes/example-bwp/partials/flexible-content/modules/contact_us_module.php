<?php
/**
 *
 * @var boolean $show
 * @var string $title
 * @var string $content
 * @var array $contact_persons
 * @var array $module_countries
 * @var string $fitline_modifier
 *
 */

?>

<div class="o-contact-us" id="<?= ! empty( $acf_fc_layout ) ? $acf_fc_layout : ''; ?>">
    <section class="o-section">
        <div class="o-container">
            <div class="c-contact-us <?= ! empty( $fitline_modifier ) ? $fitline_modifier : ''; ?>">
				<?php if ( ! empty( $title ) ) { ?>
                    <h2 class="c-contact-us__title u-a4">
						<?= $title; ?>
                    </h2>
				<?php } ?>
                <div class="c-contact-us__row">
					<?php if ( ! empty( $content ) ) { ?>
                        <div class="c-contact-us__content">
							<?= $content; ?>
                        </div>
					<?php } ?>
                    <div class="c-contact-us__list">
						<?php
						if ( ! empty( $contact_persons ) ) {
							foreach ( $contact_persons as $contact_person ) {
								get_partial( 'flexible-content/components/contact-us-module-item', array(
									'contact_person' => $contact_person
								) );
							}
						}
						?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
