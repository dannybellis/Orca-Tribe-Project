<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}
$ftstory_query = new WP_Query( array(
                                'category_name'=>'featured-story',
                                'posts_per_page'=>1,
                                ));
        while ( $ftstory_query->have_posts() ) : $ftstory_query->the_post();
        //Store the latest post's ID in $latest_post, then assign variables to post info
            $fts_postID = $post->ID;
            $fts_ID = get_the_id();
            $fts_headline = get_the_title($fts_postID);

            $fts_featured_image = get_the_post_thumbnail($fts_postID);
            $fts_URL = get_the_permalink($fts_postID);
        endwhile;
$ftartist_query = new WP_Query( array(
                                'category_name'=>'featured-artist',
                                'posts_per_page'=>1,
                                ));
        while ( $ftartist_query->have_posts() ) : $ftartist_query->the_post();
        //Store the latest post's ID in $latest_post, then assign variables to post info
            $fta_postID = $post->ID;
            $fta_ID = get_the_id();
            $fta_headline = get_the_title($fta_postID);

            $fta_featured_image = get_the_post_thumbnail($fta_postID);
            $fta_URL = get_the_permalink($fta_postID);
        endwhile;
?>
<style>
    
    .featured-story {
	   border: solid green; 
	   width: 539px;
	   height: 385px;
	   margin-right: 24px;
	   float: left;
    }   

    .featured-artist {
	   border: solid red; 
	   width: 385px;
	   height: 385px; 
	   float: left;
    }   
    .featured {
        position: relative;
    }
    .featuredbottomleft {
        position: absolute;
        bottom: 8px;
        left: 16px;
    }
    
    .featuredtopright {
        position: absolute;
        top: 8px;
        right: 16px;
        text-align: right;
    }
    
    .featured img {
        display:block;
        max-height: 385px;
        width: auto;
        height: 385px;
    }
</style>
<!--Featured Story-->
<?php echo $before_widget?>
<a href="<?php echo $fts_URL;?>">
    <div class="featured-story">
        <div class="featured">
        <?php echo $fts_featured_image;?>
            <div class="featuredbottomleft">
                <h1><?php echo $fts_headline;?></h1>
            </div>
        </div>
    </div>
</a>
<!--Featured Artist-->
<a href="<?php echo $fta_URL;?>">
    <div class="featured-artist">
        <div class="featured">
        <?php echo $fta_featured_image;?>
            <div class="featuredtopright">
                <h1><?php echo $fta_headline;?></h1>
            </div>
        </div>
    </div>
</a>
