<?php
/**
 * The template for displaying Related Posts
 * @package CBD
 */
?>
<?php
    $args = [
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 4,
        'orderby' => 'rand',
        'post__not_in' => [get_the_ID()],
        'category__in' => wp_get_post_categories(get_the_ID()),
    ];
    $wp_query = new WP_Query($args);
?>
<?php if($wp_query->have_posts()): ?>
    <!-- Section - News Carousel -->
    <section class="section">
        <!-- Container -->
        <div class="section-container container">
            <div class="container-inner">
                <h3 class="outline-text mb-layout-xs">
                    <?php _e('<strong>Explore</strong> Our Blog', 'cbd'); ?>
                </h3>
                <div class="carousel carousel-news swiper" data-breakpoints="[['0', 1, 30], ['575', 2, 30], ['991', 3, 60]]">
                    <div class="swiper-wrapper">
                        <?php while($wp_query->have_posts()):$wp_query->the_post(); ?>
                            <div class="swiper-slide">
                                <?php get_template_part('templates/posts/post'); ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <?php if($wp_query->post_count > 3): ?>
                        <div class="swiper-button-prev" data-cursor="arrow-left"></div>
                        <div class="swiper-button-next" data-cursor="arrow-right"></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php wp_reset_query(); ?>