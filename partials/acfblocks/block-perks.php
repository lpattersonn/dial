<?php 

if (get_row_layout() == "block-perks") {
    $section_title = get_sub_field('section_title');
    $section_subtitle = get_sub_field('section_subtitle');
    $section_button = get_sub_field('section_button');
    $section_main_image = get_sub_field('section_main_image');
    $section_id = get_sub_field("section_id");
    echo "<section class='block-perks' id='$section_id'>";
        echo "<div class='block-perks__wrapper'>";

            echo "<div class='block-perks__wrapper__perks' data-aos='fade-up' data-aos-duration='450' data-aos-delay='300'>";
                if (have_rows("sections_perks")) {
                    while (have_rows("sections_perks")) {
                        the_row();
                        $perks_image = get_sub_field('perks_image');
                        $perks_text = get_sub_field('perks_text');
                        echo "<div class='perk'>";
                            echo '<img src='.$perks_image['url'].' />';
                            echo '<p>'.$perks_text.'</p>';
                        echo "</div>";
                    }
                }
            echo "</div>";

            echo "<div class='block-perks__wrapper__image' data-aos='fade-down' data-aos-duration='450' data-aos-delay='300'>";
                echo '<img src='.$section_main_image['url'].' />';
            echo "</div>";

            echo "<div class='block-perks__wrapper__text' data-aos='fade-up' data-aos-duration='450' data-aos-delay='300'>";
                echo "<h2>$section_title</h2>";
                echo "<p>$section_subtitle</p>";
                echo '<a href='.$section_button['url'].'><button>'.$section_button['title'].'</button></a>';
            echo "</div>";
            
        echo "</div>";
    echo "</section>";
}