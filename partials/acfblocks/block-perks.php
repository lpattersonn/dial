<?php 

if (get_row_layout() == "block-perks") {
    $section_title = get_sub_field('section_title');
    $section_subtitle = get_sub_field('section_subtitle');
    $section_button = get_sub_field('section_button');
    $section_main_image = get_sub_field('section_main_image');
    echo "<section class='block-perks'>";
        echo "<div class='block-perks__wrapper'>";

            echo "<div class='block-perks__wrapper__perks'>";
                if (have_rows("sections_perks")) {
                    while (have_rows("sections_perks")) {
                        the_row();
                        $perks_image = get_sub_field('perks_image');
                        $perks_text = get_sub_field('perks_text');
                        echo "<div class='perk'>";
                            echo '<img src='.$perks_image['url'].'/>';
                            echo '<p>'.$perks_text.'</p>';
                        echo "</div>";
                    }
                }
            echo "</div>";

            echo "<div class='block-perks__wrapper__image'>";
                echo '<img src='.$section_main_image['url'].'/>';
            echo "</div>";

            echo "<div class='block-perks__wrapper__text'>";
                echo "<h2>$section_title</h2>";
                echo "<p>$section_subtitle</p>";
                echo '<a href='.$section_button['url'].'><button>'.$section_button['title'].'</button></a>';
            echo "</div>";
            
        echo "</div>";
    echo "</section>";
}