<?php
if (get_row_layout("block-blog")) {
    $number_of_blogs = get_sub_field("number_of_blogs");
    $post_type = get_sub_field("post_type");
    $section_title = get_sub_field("section_title");
    $section_subheading = get_sub_field("section_subheading");
    $section_id = get_sub_field("section_id");
    // The Query
    $args = array( 'post_type' => $post_type, 'posts_per_page' => $number_of_blogs );
    $the_query = new WP_Query($args);

    echo "<section class='block-blog' id='$section_id'>";
        echo "<div class='block-blog__wrapper'>";
            echo "<div class='block-blog__wrapper__text'>";
                echo "<h2>$section_title</h2>";
                echo "<p>$section_subheading</p>";
            echo "</div>";                
            echo "<div class='block-blog__wrapper__blogs'>";
                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        echo "<div class='blog'>";
                            echo get_the_post_thumbnail();
                            echo "<div class='blog__text'>";
                                echo '<p>'.get_the_date().'</p>';
                                echo '<h3>'.get_the_title().'</h3>';
                                echo '<a href='.get_post_permalink().'><button>Read more →</button></a>';
                            echo "</div>";
                        echo "</div>";
                    }
                }
            echo "</div>";                
        echo "</div>";
    echo "<section>";
}