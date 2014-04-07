<?php if(!defined('ABSPATH')) die('Direct access denied.'); ?>

<?php
// For description of variables go to: http://www.codefleet.net/cyclone-slider-2/#template-variables
?>
<div class="cycloneslider cycloneslider-template-thumbnails cycloneslider-width-<?php echo esc_attr( $slider_settings['width_management'] ); ?>"
    id="<?php echo esc_attr( $slider_html_id ); ?>"
    <?php echo ( 'responsive' == $slider_settings['width_management'] ) ? 'style="max-width:'.esc_attr( $slider_settings['width'] ).'px"' : ''; ?>
    <?php echo ( 'fixed' == $slider_settings['width_management'] ) ? 'style="width:'.esc_attr( $slider_settings['width'] ).'px"' : ''; ?>
    >
	<div class="cycloneslider-slides cycle-slideshow"
		data-cycle-allow-wrap="<?php echo esc_attr( $slider_settings['allow_wrap'] ); ?>"
        data-cycle-dynamic-height="<?php echo esc_attr( $slider_settings['dynamic_height'] ); ?>"
        data-cycle-auto-height="<?php echo esc_attr( $slider_settings['auto_height'] ); ?>"
        data-cycle-auto-height-easing="<?php echo esc_attr( $slider_settings['auto_height_easing'] ); ?>"
        data-cycle-auto-height-speed="<?php echo esc_attr( $slider_settings['auto_height_speed'] ); ?>"
        data-cycle-delay="<?php echo esc_attr( $slider_settings['delay'] ); ?>"
        data-cycle-easing="<?php echo esc_attr( $slider_settings['easing'] ); ?>"
        data-cycle-fx="<?php echo esc_attr( $slider_settings['fx'] ); ?>"
        data-cycle-hide-non-active="<?php echo esc_attr( $slider_settings['hide_non_active'] ); ?>"
        data-cycle-log="false"
        data-cycle-next="#<?php echo esc_attr( $slider_html_id ); ?> .cycloneslider-next"
        data-cycle-pager="#<?php echo esc_attr( $slider_html_id ); ?> .cycloneslider-pager"
        data-cycle-pause-on-hover="<?php echo esc_attr( $slider_settings['hover_pause'] ); ?>"
        data-cycle-prev="#<?php echo esc_attr( $slider_html_id ); ?> .cycloneslider-prev"
        data-cycle-slides="&gt; div"
        data-cycle-speed="<?php echo esc_attr( $slider_settings['speed'] ); ?>"
        data-cycle-swipe="<?php echo esc_attr( $slider_settings['swipe'] ); ?>"
        data-cycle-tile-count="<?php echo esc_attr( $slider_settings['tile_count'] ); ?>"
        data-cycle-tile-delay="<?php echo esc_attr( $slider_settings['tile_delay'] ); ?>"
        data-cycle-tile-vertical="<?php echo esc_attr( $slider_settings['tile_vertical'] ); ?>"
        data-cycle-timeout="<?php echo esc_attr( $slider_settings['timeout'] ); ?>"
		>
		<?php foreach($slides as $slide): ?>
            <?php if ( 'image' == $slide['type'] ) : ?>
                <div class="cycloneslider-slide cycloneslider-slide-image" <?php echo cyclone_slide_settings($slide, $slider_settings); ?>>
                    <?php if( 'lightbox' == $slide['link_target'] ): ?>
                        <a class="cycloneslider-caption-more magnific-pop" href="<?php echo esc_url( $slide['full_image_url'] ); ?>" alt="<?php echo $slide['img_alt'];?>">
                    <?php elseif ( '' != $slide['link'] ) : ?>
                        <?php if( '_blank' == $slide['link_target'] ): ?>
                            <a class="cycloneslider-caption-more" target="_blank" href="<?php echo esc_url( $slide['link'] );?>">
                        <?php else: ?>
                            <a class="cycloneslider-caption-more" href="<?php echo esc_url( $slide['link'] );?>">
                        <?php endif; ?>
                    <?php endif; ?>

                    <img src="<?php echo cyclone_slide_image_url($slide['id'], $slider_settings['width'], $slider_settings['height'], array('current_slide_settings'=>$slide, 'slideshow_settings'=>$slider_settings) ); ?>" alt="<?php echo $slide['img_alt'];?>" title="<?php echo $slide['img_title'];?>" />
                    
                    <?php if( 'lightbox' == $slide['link_target'] or ('' != $slide['link']) ) : ?>
                        </a>
                    <?php endif; ?>
                    
                    <?php if(!empty($slide['title']) or !empty($slide['description'])) : ?>
                        <div class="cycloneslider-caption">
                            <div class="cycloneslider-caption-title"><?php echo wp_kses_post( $slide['title'] );?></div>
                            <div class="cycloneslider-caption-description"><?php echo wp_kses_post( $slide['description'] );?></div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php elseif ( 'youtube' == $slide['type'] ) : ?>
                <div class="cycloneslider-slide cycloneslider-slide-youtube" <?php echo cyclone_slide_settings($slide, $slider_settings); ?> style="padding-bottom:<?php echo $slider_settings['height']/$slider_settings['width']*100;?>%">
                    <?php echo $slide['youtube_embed_code']; ?>
                </div>
            <?php elseif ( 'vimeo' == $slide['type'] ) : ?>
                <div class="cycloneslider-slide cycloneslider-slide-vimeo" <?php echo cyclone_slide_settings($slide, $slider_settings); ?> style="padding-bottom:<?php echo $slider_settings['height']/$slider_settings['width']*100;?>%">
                    <?php echo $slide['vimeo_embed_code']; ?>
                </div>
            <?php elseif ( 'video' == $slide['type'] ) : ?>
                <div class="cycloneslider-slide" <?php echo cyclone_slide_settings($slide, $slider_settings); ?>>
                    <p><?php _e('Slide type not supported.', 'cycloneslider'); ?></p>
                </div>
            <?php elseif ( 'custom' == $slide['type'] ) : ?>
                <div class="cycloneslider-slide cycloneslider-slide-custom" <?php echo cyclone_slide_settings($slide, $slider_settings); ?>>
                    <?php echo wp_kses_post( $slide['custom'] ); ?>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
	</div>
	<?php if ($slider_settings['show_nav'] && ($video_count<=0) ) : ?>
	<div class="cycloneslider-prev"></div>
	<div class="cycloneslider-next"></div>
	<?php endif; ?>
</div>
<?php if ($slider_settings['show_nav']) : ?>
<div id="<?php echo $slider_html_id; ?>-pager" class="cycloneslider-template-thumbnails cycloneslider-thumbnails"
	<?php echo ( 'responsive' == $slider_settings['width_management'] ) ? 'style="max-width:'.esc_attr( $slider_settings['width'] ).'px"' : ''; ?>
    <?php echo ( 'fixed' == $slider_settings['width_management'] ) ? 'style="width:'.esc_attr( $slider_settings['width'] ).'px"' : ''; ?>
    >
	<ul class="clearfix">
		<?php foreach($slides as $i=>$slide): ?>
			<?php if ( 'image' == $slide['type'] ) : ?>
                <li>
					<img src="<?php echo cyclone_slide_image_url($slide['id'], 40, 40, array('current_slide_settings'=>$slide, 'slideshow_settings'=>$slider_settings, 'resize_option'=>'crop') ); ?>" width="40" height="40" alt="<?php echo $slide['img_alt'];?>" title="<?php echo $slide['img_title'];?>" />
				</li>
            <?php elseif ( 'youtube' == $slide['type'] ) : ?>
                <li>
					<img src="<?php echo $slide['thumbnail_small']; ?>" width="auto" height="80" alt="<?php echo $slide['img_alt'];?>" title="<?php echo $slide['img_title'];?>" />
				</li>
            <?php elseif ( 'vimeo' == $slide['type'] ) : ?>
                <li>
					<img src="<?php echo $slide['thumbnail_small']; ?>" width="auto" height="80" alt="<?php echo $slide['img_alt'];?>" title="<?php echo $slide['img_title'];?>" />
				</li>
            <?php elseif ( 'video' == $slide['type'] ) : ?>
                <li>
					<div class="thumb-custom">Video</div>
				</li>
            <?php elseif ( 'custom' == $slide['type'] ) : ?>
                <li>
					<div class="thumb-custom">HTML</div>
				</li>
            <?php endif; ?>
		<?php endforeach; ?>
	</ul>
</div>
<?php endif; ?>