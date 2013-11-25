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
<?php if ( !dynamic_sidebar('footer-widget') ) : 
      echo '<p>&nbsp;</p>';
      endif; ?>
		<div class="site-info">
    <p>Copyright &copy; <?php echo date("Y"); ?> : 
<a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a>
<span class="sep"> | </span>
<a href="<?php echo get_admin_url(); ?>" title="Login">Login</a></p>
			<?php do_action( 'uu2014_credits' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>