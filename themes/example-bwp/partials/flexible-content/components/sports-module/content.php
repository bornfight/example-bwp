<?php
/**
 *
 * @var object $content
 * @var object|null $video
 *
 */

use exampleBwp\controller\AdvancedImagesController;

?>
<div class="c-sports-content">
    <div class="c-sports-content__row">
        <div class="c-sports-content__col">
            <figure class="o-aspect-ratio-figure">
                <div class="c-sports-content__overlay">
                    <div class="c-sports-content__overlay-play js-modal-open">
                        <span class="u-b1 u-bold"><?= __( 'WATCH VIDEO', 'pmi' ); ?></span>
                        <i> <?= get_icon( "carret-right" ) ?></i>
                    </div>

                </div>
				<?php
				if ( ! empty( $content->image['ID'] ) ) {
					get_partial( 'images/picture-data', array(
						'srcset'             => AdvancedImagesController::get_srcset_url( (int) $content->image['ID'], 'srcset_480_900', ' 800w,' ),
						'fallback_image_url' => AdvancedImagesController::get_image_by_size_name( (int) $content->image['ID'], 'image_900' ),
						'alt'                => $content->image['alt'],
						'img_class'          => 'js-lazy'
					) );
				}
				?>
            </figure>
        </div>
        <div class="c-sports-content__col">
            <h4 class="u-a4">
				<?= ! empty( $content->title ) ? $content->title : ''; ?>
            </h4>
			<?php
			if ( ! empty( $content->content ) ) {
				echo $content->content;
			}

			if ( ! empty( $content->link_url ) ) { ?>
                <div>
                    <a href="<?= $content->link_url ?>" class="c-inline-link u-a1">
                <span>
                    <?= __( 'More information', 'pmi' ); ?>
                </span>
						<?= get_icon( "external" ); ?>
                    </a>
                </div>
			<?php } ?>
        </div>
    </div>
</div>
<?php
$video_url = '';

if ( ! empty( $video->select ) ) {
	switch ( $video->select ) {
		case 'link':
			if ( ! empty( $video->url ) ) {
				$video_url = $video->url;
			}
			break;
		case 'upload':
			if ( ! empty( $video->upload['ID'] ) ) {
				$video_url = $video->upload['url'];
			}
			break;
	}
}

get_partial( 'flexible-content/components/sports-module/video-popup', array(
	'eyebrow'      => $video->eyebrow,
	'video_poster' => ! empty( $video->poster['url'] ) ? $video->poster['url'] : '',
	'video_url'    => $video_url
) );
?>
