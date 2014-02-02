<?php
/**
 * @package UU2014
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <a href="<?php the_permalink(); ?>" rel="bookmark">
        <h2 class="entry-title"><?php the_title(); ?></h2>

        <?php if ('post' == get_post_type()) : ?>
            <div class="entry-meta">
                <?php uu2014_posted_on(); ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>
        </a>
    </header><!-- .entry-header -->

    <?php if (is_search()) : // Only display Excerpts for Search ?>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
    <?php else : ?>
        <div class="entry-content">
            <?php the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'uu2014')); ?>
            <?php
            wp_link_pages(array(
              'before' => '<div class="page-links">' . __('Pages:', 'uu2014'),
              'after'  => '</div>',
            ));
            ?>
        </div><!-- .entry-content -->
    <?php endif; ?>

    <footer class="entry-meta">
        <?php if ('post' == get_post_type()) : // Hide category and tag text for pages on Search ?>
            <?php
            /* translators: used between list items, there is a space after the comma */
            $categories_list = get_the_category_list(__(', ', 'uu2014'));
            if ($categories_list && uu2014_categorized_blog()) :
                ?>
                <span class="cat-links">
                    <?php printf(__('Posted in %1$s', 'uu2014'), $categories_list); ?>
                </span>
            <?php endif; // End if categories ?>

            <?php
            /* translators: used between list items, there is a space after the comma */
            $tags_list = get_the_tag_list('', __(', ', 'uu2014'));
            if ($tags_list) :
                ?>
                <span class="tags-links">
                    <?php printf(__('Tagged %1$s', 'uu2014'), $tags_list); ?>
                </span>
            <?php endif; // End if $tags_list ?>
        <?php endif; // End if 'post' == get_post_type() ?>

        <?php if (!post_password_required() && ( comments_open() || '0' != get_comments_number() )) : ?>
            <span class="comments-link"><?php comments_popup_link(__('Leave a comment', 'uu2014'), __('1 Comment', 'uu2014'), __('% Comments', 'uu2014')); ?></span>
        <?php endif; ?>

        <?php edit_post_link(__('Edit', 'uu2014'), '<span class="edit-link">', '</span>'); ?>
    </footer><!-- .entry-meta -->
</article><!-- #post-## -->
