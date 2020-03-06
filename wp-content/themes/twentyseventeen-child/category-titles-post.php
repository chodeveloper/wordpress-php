<?php 
/**
* Template Name: Page with post titles from php category
* Template Post Type: post
*/

get_header();

$args = array( 'post_type' =>  'post' ); 
$query = new WP_Query($args);

if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        the_title( '<h1>', '</h1>' ); 
        the_content();
    endwhile; 
    rewind_posts();
    
    if ( $query->have_posts() ) :
?>
        <h4>Posts from PHP category</h4>
<?php
        while ( $query->have_posts() ) : $query->the_post(); 
            if ( in_category(get_cat_ID("PHP") ) ) :
                the_title('<a href="'.get_permalink().'">', '</a><br>');
            endif;
        endwhile; 
    endif;
else: 
    _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); 
endif; 

?>
