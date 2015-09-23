<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Studio_Ku
 */

?>

  </div><!-- #content -->

  <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
      <?php echo date('Y'); ?>
      <span class="sep">&copy;</span>
      <a href="<?php echo esc_url( __( 'http://studio-ku.com/', '_ku' ) ); ?>">
        <?php printf( esc_html__( '%s', '_ku' ), bloginfo('name')); ?>
      </a>
      <?php printf( esc_html__( '%1$s', '_ku' ), '<a href="http://dylanjharris.com/" rel="designer">&olcross;</a>' ); ?>
    </div><!-- .site-info -->
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
