<?php
/**
 *
 * @var object $card
 * @var int $number
 *
 */


use bornfight\wpHelpers\ACFDataProvider;
use exampleBwp\controller\AdvancedImagesController;
use exampleBwp\formatter\LinkFormatter;
use exampleBwp\helper\CharityProjectsHelper;
use exampleBwp\modulesProvider\CharityModuleProvider;

$modifier          = CharityModuleProvider::get_charity_layout_modifier( $card->layout );
$acf_data_provider = ACFDataProvider::get_instance()->set_prefix( 'charity_projects_-_' );
$link_formatter    = new LinkFormatter();
$cta_link_label    = $acf_data_provider->get_field( 'cta_link_label', $card->ID );
$cta_link_url      = $link_formatter->get_cta_link( array(
	'cta_link'      => $acf_data_provider->get_field( 'cta_link', $card->ID ),
	'external_link' => $acf_data_provider->get_field( 'external_link', $card->ID ),
	'internal_link' => $acf_data_provider->get_field( 'internal_link', $card->ID ),
	'add_tp_to_url' => $acf_data_provider->get_field( 'add_tp_to_url', $card->ID )
) );

$data_attr = $link_formatter->get_cta_data_attr( array(
	'cta_link'         => $acf_data_provider->get_field( 'cta_link', $card->ID ),
	'anchor_to_module' => $acf_data_provider->get_field( 'anchor_to_module', $card->ID )
) );
?>

<a href="<?= ! empty( $cta_link_url ) ? $cta_link_url : ''; ?>" <?= ! empty( $data_attr ) ? $data_attr : ''; ?>
   class="c-helping-local-card <?= $modifier; ?>">
    <div class="c-helping-local-card__col">
        <figure class="o-aspect-ratio-figure js-animated-element">
			<?php
			if ( ! empty( get_post_thumbnail_id( $card ) ) ) {
				get_partial( 'images/picture-data', array(
					'srcset'             => AdvancedImagesController::get_srcset_url( (int) get_post_thumbnail_id( $card ), 'image_900', '' ),
					'fallback_image_url' => AdvancedImagesController::get_image_by_size_name( (int) get_post_thumbnail_id( $card ), 'image_900' ),
					'alt'                => get_post_meta( get_post_thumbnail_id( $card ), '_wp_attachment_image_alt', true ),
					'img_class'          => 'js-lazy'
				) );
			}
			?>
        </figure>
    </div>
    <div class="c-helping-local-card__col">
        <div class="c-helping-local-card__content">
            <div class="c-helping-local-card__content-top">
                <p class="u-a7 js-animated-element">
					<?= $number; ?>
                </p>
                <p class="u-a2 js-animated-element">
					<?= $card->post_title; ?>
                </p>
            </div>
            <p class="u-b0 js-animated-element">
				<?= CharityProjectsHelper::get_charity_projects_description( (int) $card->ID ); ?>
            </p>
            <p class="js-animated-element">
                <span class="c-inline-link u-b0">
                    <?= ! empty( $cta_link_label ) ? $cta_link_label : ''; ?>
                </span>
            </p>
        </div>
    </div>
</a>
