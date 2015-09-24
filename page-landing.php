<?php
/**
 * Template Name: Ku Peninsula
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Studio_Ku
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div class="ku-above"></div>
      <div class="ku-below">
        <img 
          class="ambassador zombneck"
          src="<?php echo get_stylesheet_directory_uri(); ?>/img/ambassador/ambassador-zomb-neck.png" 
          alt="Ambassador Zomb Neck" 
          title="#studioku">
        <img 
          class="ambassador zombjacket"
          src="<?php echo get_stylesheet_directory_uri(); ?>/img/ambassador/ambassador-zomb-jacket.png" 
          alt="Ambassador Zomb Jacket" 
          title="#studioku">
        <img 
          class="ambassador zombhead"
          src="<?php echo get_stylesheet_directory_uri(); ?>/img/ambassador/ambassador-zomb-head.png" 
          alt="Ambassador Zomb Head" 
          title="#studioku">
        <img 
          class="ambassador zombeye"
          src="<?php echo get_stylesheet_directory_uri(); ?>/img/ambassador/ambassador-zomb-eye.png" 
          alt="Ambassador Zomb Eye" 
          title="#studioku">
        <img 
          class="ambassador zombmouth"
          src="<?php echo get_stylesheet_directory_uri(); ?>/img/ambassador/ambassador-zomb-mouth.png" 
          alt="Ambassador Zomb Mouth" 
          title="#studioku">
      </div>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
