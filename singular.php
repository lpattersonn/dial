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
?>

<main class="site-post">

    <?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();
			$title = get_the_title();
			$image = get_the_post_thumbnail();
			$content = get_the_content();

			echo "<h1>$title</h1>";
			echo $image;
			echo "<p>$content</p>";
		}
	}

	?>

</main>

<?php get_footer(); ?>