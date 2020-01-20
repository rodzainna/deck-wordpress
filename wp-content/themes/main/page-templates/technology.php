<?php
/**
 * Template Name: Technology
 * 
 */

get_header();

$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = isset( $thumb_url_array[0] ) ? $thumb_url_array[0] : "";

?>

<div class="container">
    <h1><?php the_title(); ?></h1>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : ?>
            <?php the_post(); ?>

            <img src="<?php echo $thumb_url; ?>" alt="">
            <div><?php the_content(); ?></div>

        
        <?php endwhile; ?>
    <?php endif; ?>

    <div></div>
</div>

<?php
get_footer();