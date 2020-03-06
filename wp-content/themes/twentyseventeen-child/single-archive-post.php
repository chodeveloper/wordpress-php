<?php 
/**
* Template Name: Page for multiple posts
* Template Post Type: post
*/

get_header();

$args = array( 'post_type' =>  'post', 'orderby' => 'title' ); 
$query = new WP_Query($args);

if ( $query->have_posts() ) : 
    while ( $query->have_posts() ) : $query->the_post(); 

        if ( in_category(get_cat_ID("Uncategorized") ) ) :
?>
        <div class="archive-post uncat">
<?php
            the_title('<h3><a href="'.get_permalink().'">', '</a></h3>');
?>
            <div>
                By <?php the_author_posts_link(); ?> on <?php the_time('F jS, Y'); ?>  in <?php the_category(', '); ?> <?php edit_post_link(__('Edit'), ''); ?>
            </div>
<?php  
            the_content();

        elseif ( in_category(get_cat_ID("PHP") ) ) :
?>
        <div class="archive-post php">
<?php
          
            the_title('<h3><a href="'.get_permalink().'">', '</a></h3>');
?>
            <div>
                By <?php the_author_posts_link(); ?> on <?php the_time('F jS, Y'); ?>  in <?php the_category(', '); ?> <?php edit_post_link(__('Edit'), ''); ?>
            </div>
<?php  
            the_content();

        else:
?>
        <div class="archive-post">
<?php
            the_title('<h3><a href="'.get_permalink().'">', '</a></h3>');
            the_content();
        endif;
?>
        </div>
<?php

    endwhile; 
    
else: 
    _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); 
endif; 

?>
