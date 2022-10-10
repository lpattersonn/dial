<?php 
    // Title
    if (get_row_layout() == 'block-title') {
        $section_title = get_sub_field("section_title");
        echo '<section class="page-header-wrapper">';
            echo "<h1>$section_title</h1>";
        echo '</section>';
    }