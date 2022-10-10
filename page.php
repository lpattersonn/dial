<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage dial
 * @since dial 1.0
 */

get_header();

global $post;
$id = get_the_ID();
echo '<main class="sitewrapper">';
    if (have_rows('page_builder', $id) ):
        while(have_rows('page_builder', $id)):the_row();
      
            get_template_part("partials/acfblocks/" . get_row_layout());
            
        endwhile;
    endif;
echo '</main>'; 

get_footer();