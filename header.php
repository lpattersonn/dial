<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="profile" href="https://gmpg.org/xfn/11">

        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>

        <?php
		wp_body_open();
		?>

        <header id="site-header" class="header-footer-group">

            <nav>
                <!-- Desktop -->
                <div class="deskop-menu">
                    <div class="header-titles-wrapper">
                        <?php 
                            $sitelogo = get_field('site_logo', 'options');
                            $logo_link_url = get_field('logo_link_url', 'options');
                            echo '<a href='.$logo_link_url.'><img src='.$sitelogo['url'].' alt="" /></a>';
                        ?>
                        <?php
                                $menu = get_field("menu", "options");
                                wp_nav_menu( array(
                                    'menu' => $menu,
                                    'menu_class' => 'menu',
                                    'container' => '',
                                    'items_wrap' => '<ul>%3$s</ul>',
                                ));
                            ?>
                    </div>
                    <div class="nav-buttons">
                        <?php
                            echo '<a href='.get_field("menu_button", "options")['url'].'><button>'.get_field("menu_button", "options")['title'].'</button></a>';
                        ?>
                    </div>
                </div>
                <!-- Mobile -->
                <div class="mobile-menu">
                    <div class="header-titles-wrapper">
                        <?php 
                            $sitelogo = get_field('site_logo', 'options');
                            $logo_link_url = get_field('logo_link_url', 'options');
                            echo '<a href='.$logo_link_url.'><img src='.$sitelogo['url'].' alt="" /></a>';
                            echo '<svg id="menu-open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>';
                        ?>
                    </div>
                    <div class="mobile-menu-flyout">
                        <?php
                          echo '<svg id="menu-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/></svg>';            
                                $menu = get_field("menu", "options");
                                wp_nav_menu( array(
                                    'menu' => $menu,
                                    'menu_class' => 'menu',
                                    'container' => '',
                                    'items_wrap' => '<ul>%3$s</ul>',
                                ));
                            ?>
                        <div class="nav-buttons">
                            <?php
                            echo '<a href='.get_field("menu_button", "options")['url'].'><button>'.get_field("menu_button", "options")['title'].'</button></a>';
                        ?>
                        </div>
                    </div>
                </div>
            </nav>
        </header><!-- #site-header -->

        <?php
		// Output the menu modal.
		// get_template_part( 'template-parts/modal-menu' );