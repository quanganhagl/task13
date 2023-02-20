<?php get_header(); ?>
<main class="p-single">
    <div class="c-title c-title--page">
        <h1>TOPICS</h1>
    </div>
    <div class="l-container">
        <!-- Sidebar start -->
        <?php get_sidebar(); ?>
        <!-- Sidebar end -->

        <!-- Main start -->
        <div class="l-main">
            <!-- Name,date,cat start -->
            <h2 class="p-single__title"><?php echo get_the_title($post->ID); ?></h2>
            <div class="p-single__info">
                <span>
                    <?php echo get_the_date('Y/m/d'); ?>
                </span>
                <p>
                    <?php $cat = get_the_category();
                    foreach ($cat as $cd) {
                    ?>
                        <a href="<?php echo get_category_link($cd->term_id); ?>">
                            <?php echo $cd->cat_name; ?>
                        </a>
                    <?php } ?>
                </p>
            </div>
            <!-- Name,date,cat end -->

            <!-- Post content start -->
            <div class="p-single__content">
                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>" alt="">
                <?php echo get_post_field('post_content', $post->ID); ?>
            </div>
            <!-- Post content end -->

            <!-- Prev Next Btn start -->
            <ul class="groupbtn">
                <?php
                $prev_post = get_previous_post();
                if (!empty($prev_post)) : ?>
                    <li class="prev_link"><a href="<?php echo get_permalink($prev_post->ID); ?>">Prev</a></li>
                <?php endif;
                $next_post = get_next_post();
                if (is_a($next_post, 'WP_Post')) { ?>
                    <li class="next_link"><a href="<?php echo get_permalink($next_post->ID); ?>">Next</a></li>
                <?php } ?>
            </ul>
            <!-- Prev Next Btn end -->


        </div>
        <!-- Main end -->

    </div>
</main>

<?php get_footer(); ?>