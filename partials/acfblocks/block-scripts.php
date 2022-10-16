<?php 
    if (get_row_layout("block-scripts")) {
        $section_title = get_sub_field("section_title");
        $section_subtitle = get_sub_field("section_subtitle");
        $script = get_sub_field("script");
        echo "<section class='block-scripts' data-aos='fade-up' data-aos-duration='450' data-aos-delay='300'>";
            echo "<div class='block-scripts__wrapper'>";
                echo "<h1> $section_title</h1>";
                echo "<p>$section_subtitle</p>";
                echo "<div class='script'>$script</div>";
            echo "</div>";    
        echo "</section>";
    }