<?php 
    if (get_row_layout() == "block-features") {
        $section_title = get_sub_field("section_title");
        $section_subtitle = get_sub_field("section_subtitle");
        $section_button = get_sub_field("section_button");
        echo "<section class='block-features'>";
            echo "<div class='block-features__wrapper'>";

                echo "<div class='block-features__wrapper__text'>";
                    echo "<div>";
                        echo "<h2>$section_title</h2>";
                        echo "<p>$section_subtitle</p>";
                    echo "</div>";
                    echo '<a href='.$section_button['url'].'><button>'. $section_button['title'].'</button></a>';
                echo "</div>";

                echo "<div class='block-features__wrapper__features'>";
                    if (have_rows("features")) {
                        while (have_rows("features")) {
                            the_row();
                            $feature_image = get_sub_field("feature_image");
                            $feature_heading = get_sub_field("feature_heading");
                            $feature_subheading = get_sub_field("feature_subheading");
                            $feature_button = get_sub_field("feature_button");
                            echo "<div class='feature'>";
                                echo '<img src='.$feature_image['url'].' />';
                                echo "<h2>$feature_heading</h2>";
                                echo "<p>$feature_subheading</p>";
                                echo '<a href='.$feature_button['url'].'><button>'.$feature_button['title'].'</button></a>';
                            echo "</div>";
                        }
                    }
                echo "</div>";
                
            echo "</div>";
        echo "</section>";
    }