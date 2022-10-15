<?php 
    if (get_row_layout("block-signup")) {
        $section_title = get_sub_field("section_title");
        $section_subtitle = get_sub_field("section_subtitle");
        $section_id = get_sub_field("section_id");
        echo "<section class='block-signup'>";
            echo "<div class='block-signup__wrapper'>";
                echo "<div class='block-signup__wrapper__text'>";
                    echo "<h2>$section_title</h2s>";
                    echo "<p>$section_subtitle</p>";
                echo "</div>";
                echo '<div class="block-signup__wrapper__blocks" id='.$section_id.'>';
                    if (have_rows("user_signup")) {
                        while (have_rows("user_signup")) {
                            the_row();
                            $sign_up_title = get_sub_field("sign_up_title");
                            $sign_up_title_subheading = get_sub_field("sign_up_title_subheading");
                            $sign_up_button = get_sub_field("sign_up_button");
                            $sign_up_image = get_sub_field("sign_up_image");
                            echo '<div class="sign-up" style="background-image: url('.$sign_up_image['url'].')">';
                                echo "<h3>$sign_up_title</h3>";
                                echo "<p>$sign_up_title_subheading </p>";
                                if ($sign_up_button['url'] == "#disabled") {
                                    echo '<button disabled>'.$sign_up_button['title'].'</button>';
                                } else {
                                    echo '<a href='.$sign_up_button['url'].'><button>'.$sign_up_button['title'].'</button></a>';
                                }
                            echo "</div>";
                        }
                    }
                echo "</div>";
            echo "</div>";
        echo "</section>";
    }