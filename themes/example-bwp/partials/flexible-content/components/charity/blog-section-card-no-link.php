<?php
/**
 *
 * @var array $image
 * @var string $cta_link_url
 * @var string $data_attr
 * @var string $cta_link_label
 *
 */

?>
<div class="c-charity-blog-section__card js-animated-element">
    <?php
    get_partial( 'flexible-content/components/charity/blog-section-card', array(
	    'image'          => $image,
	    'cta_link_url'   => $cta_link_url,
	    'cta_link_label' => $cta_link_label,
	    'data_attr'      => $data_attr
    ) );
    ?>
</div>
