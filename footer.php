<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package UU2014
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
  <div id="footer-widget-area" class="footer-widget-area" role="complementary">    <?php
    if (!dynamic_sidebar('footer-widget')) :
      echo '<p>&nbsp;</p>';
    endif;
    ?></div>
  <div class="site-info">
    <?php do_action('uu2014_credits'); ?>
    <p>Copyright &copy; <?php echo date("Y"); ?> : 
      <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
      <span class="sep"> | </span>
      <?php printf(__('WordPress Theme : %1$s', 'uu2014'), '<a href="http://www.faithandreason.dreamhosters.com/" rel="designer">UU2014</a>'); ?>      
      <span class="sep"> | </span>
      <a href="<?php echo get_admin_url(); ?>" title="Login">Login</a></p>
  </div><!-- .site-info -->
</footer><!-- #colophon -->

</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>