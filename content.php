<?php
/**
 *	Template for standart Posts (grid layout)
 */

?>

<?php
$postId = get_the_ID();
$lightbox = etheme_get_option('blog_lightbox');
$postClass = 'blog-post post-grid span4';
$width = etheme_get_option('blog_page_image_width');
$height = etheme_get_option('blog_page_image_height');
$crop = etheme_get_option('blog_page_image_cropping');
?>


<article <?php post_class($postClass); ?> id="post-<?php the_ID(); ?>" >

    <?php $image = etheme_get_image(false, $width,$height,$crop); ?>

    <?php if (has_post_thumbnail()): ?>
        <div class="post-images">
            <a href="<?php the_permalink(); ?>"><img src="<?php echo $image; ?>"></a>
        </div>
    <?php endif ?>
    <div class="post-information <?php if (!has_post_thumbnail()): ?>border-top<?php endif ?>">
        <h4 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <p style="text-align: center;">
            <a class="button filled" href="<?php the_permalink(); ?>">Learn More</a>
        </p>
        <div class="clear"></div>
    </div>

</article>