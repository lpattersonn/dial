<?php
if (get_row_layout() == "block-main_header") {
    $header_text = get_sub_field('header_text');
    $sub_text = get_sub_field('sub_text');
    $first_button = get_sub_field('first_button');
    $second_button = get_sub_field('second_button');
    $main_image = get_sub_field('main_image');
    $background_image = get_sub_field('background_image');

    echo "<section class='haeder-section'>";
    echo "<div class='haeder-section__wrapper'>";
            echo '<div class="haeder-section__wrapper__image" style="background-image: url('.$background_image['url'].')">';
                echo '<img src='.$main_image['url'].' />';
            echo "</div>";
            echo "<div class='haeder-section__wrapper__text'>";
                echo "<h1>$header_text</h1>";
                echo "<p>$sub_text</p>";
                echo "<div class='haeder-section__wrapper__text__buttons'>";
                    echo '<a href='.$first_button['url'].'><button>'.$first_button['title'].'</button></a>';
                    echo '<a href='.$second_button['url'].'><button>'.$second_button['title'].'</button></a>';
                echo "</div>";
            echo "</div>";
        echo "</div>";
    echo "</section>"; 

}