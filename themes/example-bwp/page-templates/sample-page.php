<?php
/** Template Name: Sample Page Template */

$template_name = 'home';
get_header();

get_partial( 'layout/loader' );
get_partial( 'layout/navigation' );


?>

<!-- PAGE WRAPPER -->
<div id="<?= $template_name ?>" class="o-page o-page--<?= $template_name ?>">

    <!-- PAGE CONTENT -->
    <div class="o-page__inner o-page__inner--<?= $template_name ?>">
		<?php
		get_partial( 'news/list' );
		get_partial( 'articles/list' );
		?>
    </div>
    <!-- //PAGE CONTENT -->

</div>
<!-- //PAGE WRAPPER -->
<?php

get_footer();

?>
