<?php
/**
 *
 * @var string $projects_title
 * @var array $projects
 *
 */
?>
<div class="c-charity-projects">
	<?php if ( ! empty( $projects_title ) ) { ?>
        <h3 class="u-a2 js-animated-element"><?= $projects_title; ?></h3>
	<?php } ?>
    <div class="c-charity-projects__grid">

		<?php if ( ! empty( $projects ) ) {
			foreach ( $projects as $project ) { ?>
                <div class="c-charity-projects__item">
					<?php get_partial( 'flexible-content/components/charity/projects-card', array(
						'project' => $project
					) ); ?>
                </div>
			<?php }
		} ?>
    </div>
</div>
