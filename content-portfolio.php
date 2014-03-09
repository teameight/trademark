<?php 
$postId = get_the_ID();

$categories = wp_get_post_terms($postId, 'projects');
$catsClass = '';
foreach($categories as $category) {
	$catsClass .= ' sort-'.$category->slug;
}

$columns = etheme_get_option('portfolio_columns');
$lightbox = etheme_get_option('portfolio_lightbox');


if(isset($_GET['col'])) {
	$columns = $_GET['col'];
}

switch($columns) {
	case 2:
		$span = 'span6';
	break;
	case 3:
		$span = 'span4';
	break;
	case 4:
		$span = 'span3';
	break;
	default:
		$span = 'span4';
	break;
}
	
	$width = etheme_get_option('portfolio_image_width');
	$height = etheme_get_option('portfolio_image_height');
	$crop = etheme_get_option('portfolio_image_cropping');

?>
<div class="portfolio-item columns-count-<?php echo $columns; ?> <?php echo $span; ?> <?php echo $catsClass; ?>">       
		<?php if (has_post_thumbnail( $postId ) ): ?>
			<div class="portfolio-image">
					<?php $imgSrc = etheme_get_image(get_post_thumbnail_id($postId), $width, $height, $crop) ?>
					<a href="<?php the_permalink(); ?>"><img src="<?php echo $imgSrc; ?>" alt="<?php the_title(); ?>"></a>
		    </div>
		<?php endif; ?>
	    <div class="portfolio-descr">
	    	
			    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p style="text-align: center;">
                    <a class="button filled" href="<?php the_permalink(); ?>">Learn More</a>
                </p>

	    </div>    
</div>