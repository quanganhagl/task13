<?php get_header(); ?>

<main class="p-home">
    <!-- MAINVISUAL start -->
    <div class="c-mainvisual">
        <div class="l-container">
            <div class="c-mainvisual__inner js-slider">
                <?php
                $images = get_field('slide');
                if ($images) : ?>
                <?php foreach ($images as $image) : ?>
                <div>

                    <a href="<?php echo get_site_url(); ?>/<?php echo $image["image"]["title"] ?>">
                        <img src="<?php echo esc_url($image["image"]["url"]); ?>"
                            alt="<?php echo esc_url($image["image"]["alt"]); ?>">
                    </a>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- MAINVISUAL end -->

    <!-- INTRODUCING start -->
    <div class="l-container">
        <div class="c-grouplink">
            <a href="<?php echo get_site_url(); ?>/thoughts"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/img_01_no.png"
                    alt="Introducing our philosophy" class="js-imglink"></a>
            <a href="<?php echo get_site_url(); ?>/strengths"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/img_02_no.png"
                    alt="Introducing our 6 strengths" class="js-imglink"></a>
            <a href="<?php echo get_site_url(); ?>/service"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/img_03_no.png"
                    alt="Introducing our service" class="js-imglink"></a>
        </div>
        <!-- INTRODUCING end -->

        <!-- TOPICS start -->
        <div class="p-topics">
            <h2 class="c-title">Topics</h2>
            <ul class="c-listpost">
                <?php
                $topics = get_posts(array('orderby' => 'date', 'order' => 'DESC'));
                foreach ($topics as $topic) :
                    setup_postdata($topic);
                ?>
                <li>
                    <!-- Date start -->
                    <span class="datepost"><?php echo get_the_date('Y/m/d', $topic); ?></span>
                    <!-- Date end -->

                    <!-- Category start -->
                    <?php
                        $cats = get_the_category($topic);
                        foreach ($cats as $cat) {
                            if ($cat->cat_name != '????????????' || $cat->cat_name != 'Uncategorized') {
                        ?>
                    <a href="<?php echo get_category_link($cat->term_id); ?>" class="c-label">
                        <?php echo $cat->cat_name; ?>
                    </a>
                    <?php }
                        } ?>
                    <!-- Category end -->

                    <!-- Link start -->
                    <a href="<?php echo get_permalink($topic->ID); ?>">
                        <?php echo get_the_title($topic->ID); ?>
                    </a>
                    <!-- Link end -->

                </li>
                <?php endforeach; ?>
            </ul>

            <div class="l-btn">
                <a href="<?php echo get_site_url(); ?>/topics" class="c-btn c-btn--small">???????????????</a>
            </div>
        </div>
        <!-- TOPICS end -->

        <!-- OFFICE & STAFF INFO start -->
        <div class="c-grouplink">
            <a href="<?php echo get_site_url(); ?>/staff"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/btn_03_no.png" alt="????????????"
                    class="js-imglink"></a>
            <a href="<?php echo get_site_url(); ?>/office"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/btn_04_no.png" alt="???????????????"
                    class="js-imglink"></a>
        </div>
        <!-- OFFICE & STAFF INFO end -->

        <!-- ACCESS start -->
        <?php
        $access = get_field('access');
        if ($access) : ?>
        <?php foreach ($access as $item) : ?>
        <div class="c-access">
            <!-- ACCESS INFO start -->
            <div class="c-access__info">
                <h3 class="c-title c-title--sub">
                    <?php echo $item['title_map']; ?>
                </h3>
                <p class="address"><?php echo $item['address']; ?></p>
                <p class="time">
                    <?php echo $item['time']; ?>
                </p>
                <br />
                <p>
                    <?php if ($item['tel']) : ?>
                    <span class="tel">tel : <a class="c-access__tel"
                            href="tel:+<?php echo $item['tel']; ?>"><?php echo $item['tel']; ?></a></span>
                    <?php endif; ?>
                    <?php if ($item['fax']) : ?>
                    <span class="fax">fax : <?php echo $item['fax']; ?></span>
                    <?php endif; ?>
                    <br />
                    <?php if ($item['email']) : ?>
                    <span class="email">
                        mail : <a class="u-defaulthover"
                            href="mailto:<?php echo $item['email']; ?>"><?php echo $item['email']; ?></a>
                    </span>
                    <?php endif; ?>
                </p>
            </div>
            <!-- ACCESS INFO end -->

            <!-- ACCESS MAP start -->
            <div class="c-access__img">
                <img src="<?php echo esc_url($item['image_map']['url']); ?>"
                    alt="<?php echo $item['image_map']['alt'] ?>" />
            </div>
            <!-- ACCESS MAP end -->

        </div>
        <?php endforeach; ?>
        <?php endif; ?>
        <!-- ACCESS start -->
    </div>
</main>

<?php get_footer(); ?>