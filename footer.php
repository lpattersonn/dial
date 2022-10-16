<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage dial
 * @since dial 1.0
 */

?>
<footer id="site-footer" class="header-footer-group">

    <div class="section-inner">

        <?php
            $sitelogo = get_field('site_logo', 'options');
            $logo_link_url = get_field('logo_link_url', 'options');
            echo '<a href='.$logo_link_url.'><img class="footer-site-logo" src='.$sitelogo['url'].' alt="" /></a>';
        ?>

        <div class="footer-credits">

            <p class="footer-copyright">Copyright &copy;
                <?php
							echo date_i18n(
								/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
								_x( 'Y', 'copyright date format', 'twentytwenty' )
							);
							?>. All rights reserved.
            </p><!-- .footer-copyright -->
        </div><!-- .footer-credits -->

    </div><!-- .section-inner -->

</footer><!-- #site-footer -->

<?php wp_footer(); ?>
<script>
AOS.init();
</script>
</body>

</html>