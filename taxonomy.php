<?php 
	get_header();

    $query_obj = get_queried_object();
    $taxname = $query_obj->name;
?>

<div class="page-heading bc-type-<?php etheme_option('breadcrumb_type'); ?>">
	<div class="container">
		<div class="row-fluid">
			<div class="span12 a-center">
                <h1 class="title"><span><?php echo $taxname; ?></span></h1>
				<?php etheme_breadcrumbs(); ?>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="page-content">
		<div class="row-fluid">
			<div class="span12">
				<?php if(have_posts()): while(have_posts()) : the_post(); ?>
					
					<?php get_template_part('content', get_post_format()); ?>

				<?php endwhile; else: ?>

					<h3><?php _e('No posts were found!', ETHEME_DOMAIN) ?></h3>

				<?php endif; ?>

				<div class="articles-nav">
					<div class="left"><?php next_posts_link(__('&larr; Older Posts', ETHEME_DOMAIN)); ?></div>
					<div class="right"><?php previous_posts_link(__('Newer Posts &rarr;', ETHEME_DOMAIN)); ?></div>
					<div class="clear"></div>
				</div>

			</div>
		</div>


	</div>
</div>

	
<?php
	get_footer();
?>