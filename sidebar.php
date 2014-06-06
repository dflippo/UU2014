<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package UU2014
 */
?>
<div id="secondary" class="widget-area" role="complementary">
    <?php do_action('before_sidebar'); ?>
    <?php if (!dynamic_sidebar('home-widgets')) : ?>

        <aside id="meta" class="widget">
            <h1 class="widget-title"><?php _e('Meta', 'uu2014'); ?></h1>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </aside>
<?php endif; // end sidebar widget area  ?>
</div><!-- #secondary -->
