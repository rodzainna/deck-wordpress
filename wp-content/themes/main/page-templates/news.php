<?php
/**
 * Template Name: News
 * 
 */

 $decks = _getDecks();

$domain = get_site_url();
get_header();
?>

<div class="container text-black py-4 relative">
    <div class="flex flex-wrap -mx-4">
        <masonry inline-template>
            <div v-masonry transition-duration="0.5s" 
                item-selector=".item" 
                origin-left="true"
                stamp=".stamp">
                
                <!-- <div v-masonry-tile class="stamp w-full md:w-1/2 lg:w-1/3 px-4 py-6">
                    <news-post
                        url="https://google.com"
                        category="Finance"
                        title="Using Banners Will Increase Trade Show Traffic"
                        desc="There is a lot of exciting stuff going on in the stars above us that makes astronomy so much fun."
                        image="<?php echo get_template_directory_uri(); ?>/public/images/pic-1.jpg"
                    ></news-post>
                </div> -->

                <?php foreach( $decks as $key => $deck ) : ?>
                <?php
                    //Get the fetured images
                    $thumb_id        = get_post_thumbnail_id( $deck->ID );
                    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                    $deck->thumb_url = isset( $thumb_url_array[0] ) ? $thumb_url_array[0] : "";

                    //Get categories
                    $category_id    = get_field( 'categories', $deck->ID, false);
                    $category       = get_term( $category_id[0] );
                    $deck->category = isset( $category->name ) ? $category->name : "";

                    //Get other fields
                    $deck->comments = get_field('comments', $deck->ID);
                    $deck->shares   = get_field('shares', $deck->ID);
                    $deck->views    = get_field('views', $deck->ID);

                    //Add "stamp" on the first box
                    //Add "item" on the succeeding boxes
                    $stamp = ($key == 0) ? "stamp" : "item";
                ?>
                <div v-masonry-tile class="<?php echo $stamp ?> w-full md:w-1/2 lg:w-1/3 px-4 py-6">
                    <news-post
                        url="<?php echo $domain ."/decks/". $deck->post_name; ?>"
                        category="<?php echo $deck->category ?>"
                        title="<?php echo $deck->post_title ?>"
                        desc="<?php echo $deck->post_content ?>"
                        image="<?php echo $deck->thumb_url ?>"
                    ></news-post>
                </div>
                <? endforeach; ?>
            </div>
        </masonry>
    </div>
</div>

<?php
get_footer();