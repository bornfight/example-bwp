<?php
/**
 *
 * @var object $project
 *
 */

use bornfight\wpHelpers\ACFDataProvider;
use exampleBwp\controller\AdvancedImagesController;
use exampleBwp\formatter\LinkFormatter;

$acf_data_provider = ACFDataProvider::get_instance()->set_prefix( 'charity_projects_-_' );
$link_formatter    = new LinkFormatter();
$cta_link_label    = $acf_data_provider->get_field( 'cta_link_label', $project->ID );
$cta_link_url      = $link_formatter->get_cta_link( array(
	'cta_link'      => $acf_data_provider->get_field( 'cta_link', $project->ID ),
	'external_link' => $acf_data_provider->get_field( 'external_link', $project->ID ),
	'internal_link' => $acf_data_provider->get_field( 'internal_link', $project->ID )
) );

$data_attr = $link_formatter->get_cta_data_attr( array(
	'cta_link'         => $acf_data_provider->get_field( 'cta_link', $project->ID ),
	'anchor_to_module' => $acf_data_provider->get_field( 'anchor_to_module', $project->ID )
) );

?>
<a href="<?= ! empty( $cta_link_url ) ? $cta_link_url : ''; ?>" <?= ! empty( $data_attr ) ? $data_attr : ''; ?>
   class="c-news-card is-charity js-animated-element">
    <figure class="o-aspect-ratio-figure">
		<?php
		if ( ! empty( get_post_thumbnail_id( $project ) ) ) {
			get_partial( 'images/picture-data', array(
				'srcset'             => AdvancedImagesController::get_srcset_url( (int) get_post_thumbnail_id( $project ), 'image_600', '' ),
				'fallback_image_url' => AdvancedImagesController::get_image_by_size_name( (int) get_post_thumbnail_id( $project ), 'image_600' ),
				'alt'                => get_post_meta( get_post_thumbnail_id( $project ), '_wp_attachment_image_alt', true ),
				'img_class'          => 'js-lazy'
			) );
		}
		?>
    </figure>

    <div class="c-news-card__content">
        <h4 class="u-a1 c-news-card__title">
			<?= $project->post_title; ?>
        </h4>
        <p>
            <span class="c-inline-link u-b0">
                <?= ! empty( $cta_link_label ) ? $cta_link_label : ''; ?>
            </span>
        </p>

    </div>
</a>
