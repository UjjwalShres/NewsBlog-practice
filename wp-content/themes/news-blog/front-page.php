<?php

/**
 * The template file for displaying front page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NewsBlog
 */
get_header();
?>
<!-- /homeblock1-->
<section class="w3l-homeblock1 py-sm-5 py-4">
    <div class="container py-md-4">
        <div class="grids-area-hny main-cont-wthree-fea row">
            <div class="col-lg-3 col-6 grids-feature">
                <?php $category_id = get_cat_ID('Beauty'); ?>
                <a href="<?php echo get_category_link($category_id); ?>">
                    <div class="area-box">
                        <span class="fa fa-bath"></span>
                        <h4 class="title-head">Beauty</h4>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-6 grids-feature">
                <?php $category_id = get_cat_ID('Fashion and Style'); ?>
                <a href="<?php echo get_category_link($category_id); ?>">
                    <div class="area-box">
                        <span class="fa fa-female"></span>
                        <h4 class="title-head">Fashion and style</h4>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-6 grids-feature mt-lg-0 mt-md-4 mt-3">
                <?php $category_id = get_cat_ID('Food and Wellness'); ?>
                <a href="<?php echo get_category_link($category_id); ?>">
                    <div class="area-box">
                        <span class="fa fa-cutlery"></span>
                        <h4 class="title-head">Food and wellness</h4>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-6 grids-feature mt-lg-0 mt-md-4 mt-3">
                <?php $category_id = get_cat_ID('Lifestyle'); ?>
                <a href="<?php echo get_category_link($category_id); ?>">
                    <div class="area-box">
                        <span class="fa fa-pie-chart"></span>
                        <h4 class="title-head">Lifestyle</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- //homeblock1-->

<?php
ob_start(); //create a buffer
wp_list_categories(); //list all the categories name in the buffer
$categories = ob_get_clean(); //store the output from the buffer to the variable
?>
<section class="w3l-testimonials" id="testimonials">
    <!-- main-slider -->
    <div class="testimonials pt-2 pb-5">
        <div class="container pb-lg-5">
            <div class="owl-testimonial owl-carousel owl-theme mb-md-0 mb-sm-5 mb-4">
                <?php
                $category_option_of_first_post = get_theme_mod('slider_first_post_settings');
                $args = array(
                    'category_name' => $category_option_of_first_post,
                    'posts_per_page' => 1
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                ?>
                        <div class="item">
                            <div class="row slider-info">
                                <div class="col-lg-8 message-info align-self">
                                    <span class="label-blue mb-sm-4 mb-3"><?php the_category(); ?></span>
                                    <h3 class="title-big mb-4"><?php echo get_the_title(); ?>
                                    </h3>
                                    <p class="message"><?php the_excerpt(); ?></p>
                                </div>
                                <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                                    <img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid radius-image-full" alt="client image">
                                </div>
                            </div>
                        </div>
                <?php }
                }
                ?>
                <?php
                $category_option_of_second_post = get_theme_mod('slider_second_post_settings');
                $args = array(
                    'category_name' => $category_option_of_second_post,
                    'posts_per_page' => 1
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                ?>
                        <div class="item">
                            <div class="row slider-info">
                                <div class="col-lg-8 message-info align-self">
                                    <span class="label-blue mb-sm-4 mb-3"><?php the_category(); ?></span>
                                    <h3 class="title-big mb-4"><?php echo get_the_title(); ?>
                                    </h3>
                                    <p class="message"><?php the_excerpt(); ?></p>
                                </div>
                                <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                                    <img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid radius-image-full" alt="client image">
                                </div>
                            </div>
                        </div>
                <?php }
                }
                ?>
                <?php
                $category_option_of_third_post = get_theme_mod('slider_third_post_settings');
                $args = array(
                    'category_name' => $category_option_of_third_post,
                    'posts_per_page' => 1
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                ?>
                        <div class="item">
                            <div class="row slider-info">
                                <div class="col-lg-8 message-info align-self">
                                    <span class="label-blue mb-sm-4 mb-3"><?php the_category(); ?></span>
                                    <h3 class="title-big mb-4"><?php echo get_the_title(); ?>
                                    </h3>
                                    <p class="message"><?php the_excerpt(); ?></p>
                                </div>
                                <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                                    <img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid radius-image-full" alt="client image">
                                </div>
                            </div>
                        </div>
                <?php }
                }
                ?>
                <?php
                $category_option_of_fourth_post = get_theme_mod('slider_fourth_post_settings');
                $args = array(
                    'category_name' => $category_option_of_fourth_post,
                    'posts_per_page' => 1
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                ?>
                        <div class="item">
                            <div class="row slider-info">
                                <div class="col-lg-8 message-info align-self">
                                    <span class="label-blue mb-sm-4 mb-3"><?php the_category(); ?></span>
                                    <h3 class="title-big mb-4"><?php echo get_the_title(); ?>
                                    </h3>
                                    <p class="message"><?php the_excerpt(); ?></p>
                                </div>
                                <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                                    <img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid radius-image-full" alt="client image">
                                </div>
                            </div>
                        </div>
                <?php }
                }
                ?>

            </div>
        </div>
    </div>
    <!-- /main-slider -->
</section>

<div class="w3l-homeblock2 py-5">
    <div class="container py-lg-5 py-md-4">
        <!-- block -->
        <div class="row">
            <div class="col-lg-8">
                <h3 class="section-title-left mb-4"> Editor's Pick </h3>
                <div class="row">
                    <?php
                    $args = array(
                        'post_type' => 'post', // Replace 'post' with your desired post type
                        'posts_per_page' => 2, // Retrieve n number of posts with the checkbox checked
                        'meta_query' => array(
                            array(
                                'key' => 'editors_choice_checkbox',
                                'value' => '1', // Check for the value '1'
                                'compare' => '=',
                                'type' => 'NUMERIC', // Specify the data type as numeric
                            ),
                        ),
                    );

                    $editor_choice_posts = new WP_Query($args);
                    if ($editor_choice_posts->have_posts()) {
                        while ($editor_choice_posts->have_posts()) {
                            $editor_choice_posts->the_post();
                    ?>
                            <div class="col-lg-6 col-md-6 item">
                                <div class="card">
                                    <div class="card-header p-0 position-relative">
                                        <a href="<?php the_permalink(); ?>">
                                            <img class="card-img-bottom d-block radius-image-full" src="<?php echo get_the_post_thumbnail_url() ?>" alt="Card image cap">
                                        </a>
                                    </div>
                                    <div class="card-body blog-details">
                                        <span class="label-blue"><?php the_category(); ?></span>
                                        <a href="<?php the_permalink(); ?>" class="blog-desc"><?php the_title(); ?>
                                        </a>
                                        <?php $the_excerpt = get_the_excerpt();
                                        $the_excerpt = substr($the_excerpt, 0, 150); ?>
                                        <p><?php echo $the_excerpt; ?></p>
                                        <div class="author align-items-center mt-3 mb-1">
                                            <?php $get_author_id = get_the_author_meta('ID'); ?>
                                            <img src="<?php echo get_avatar_url($get_author_id); ?>" alt="" class="img-fluid rounded-circle" />
                                            <ul class="blog-meta">
                                                <li>
                                                    <a href="author.html"><?php echo get_the_author(); ?></a> </a>
                                                </li>
                                                <li class="meta-item blog-lesson">
                                                    <span class="meta-value"><?php echo get_the_date(); ?> </span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span><?php echo  read_time(); ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php wp_reset_postdata(); // Restore global post data 
                        }
                    } ?>
                </div>
                <div class="mt-4 left-right bg-clr-white p-3">
                    <h3 class="section-title-left align-self pl-2 mb-sm-0 mb-3">Advertise with us </h3>
                    <a class="btn btn-style btn-primary" href="#url">Learn more</a>
                </div>
            </div>
            <div class="col-lg-4 trending mt-lg-0 mt-5">
                <div class="topics">
                    <h3 class="section-title-left mb-4"> Topics</h3>
                    <?php $category_id = get_cat_ID('Beauty'); ?>
                    <a href="<?php echo get_category_link($category_id); ?>" class="topics-list">
                        <div class="list1">
                            <span class="fa fa-bath"></span>
                            <h4>Beauty</h4>
                        </div>
                    </a>
                    <?php $category_id = get_cat_ID('Fashion and Style'); ?>
                    <a href="<?php echo get_category_link($category_id); ?>" class="topics-list mt-3">
                        <div class="list1">
                            <span class="fa fa-female"></span>
                            <h4>Fashion and style</h4>
                        </div>
                    </a>
                    <?php $category_id = get_cat_ID('Food and Wellness'); ?>
                    <a href="<?php echo get_category_link($category_id); ?>" class="topics-list mt-3">
                        <div class="list1">
                            <span class="fa fa-cutlery"></span>
                            <h4>Food and wellness</h4>
                        </div>
                    </a>
                    <?php $category_id = get_cat_ID('Lifestyle'); ?>
                    <a href="<?php echo get_category_link($category_id); ?>" class="topics-list mt-3">
                        <div class="list1">
                            <span class="fa fa-pie-chart"></span>
                            <h4>Lifestyle</h4>
                        </div>
                    </a>
                </div>
                <div class="sponsers mt-5">
                    <h3 class="section-title-left mb-4"> Our sponsers</h3>
                    <a href="#ad-banner"><img src="assets/images/ad.jpg" alt="" class="img-fluid radius-image-full" /></a>
                    <a href="#advertise" class="text-center d-block text-uppercase">Advertise with us </a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="w3l-homeblock3 py-5">
    <div class="container py-lg-5 py-md-4">
        <h3 class="section-title-left mb-4"> Top Pick's of this month </h3>
        <div class="row top-pics">
            <?php
            $args = array(
                'post_type' => 'post', // Replace 'post' with your desired post type
                'posts_per_page' => 3, // Retrieve n number of posts with the checkbox checked
                'meta_query' => array(
                    array(
                        'key' => 'top_picks_checkbox',
                        'value' => '1', // Check for the value '1'
                        'compare' => '=',
                        'type' => 'NUMERIC', // Specify the data type as numeric
                    ),
                ),
            );

            $top_picks_posts = new WP_Query($args);
            if ($top_picks_posts->have_posts()) {
                while ($top_picks_posts->have_posts()) {
                    $top_picks_posts->the_post();
            ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="top-pic1" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                            <div class="card-body blog-details">
                                <a href="<?php the_permalink(); ?>" class="blog-desc"><?php the_title(); ?>
                                </a>
                                <div class="author align-items-center">
                                    <?php $get_author_id = get_the_author_meta('ID'); ?>
                                    <img src="<?php echo get_avatar_url($get_author_id); ?>" alt="" class="img-fluid rounded-circle" />
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="#"><?php echo get_the_author(); ?></a>
                                        </li>
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"><?php echo get_the_date(); ?></span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span><?php echo  read_time(); ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</div>


<div class="w3l-homeblock2 py-5">
    <div class="container py-lg-5 py-md-4">
        <!-- block -->
        <div class="left-right">
            <?php
            $args = array(
                'category_name' => 'fashion-and-style', // Replace 'post' with your desired post type
                'posts_per_page' => 3, // Retrieve n number of posts with the checkbox checked
            );

            $fashion_and_style_cat_posts = new WP_Query($args);
            if ($fashion_and_style_cat_posts->have_posts()) {
            ?>
                <h3 class="section-title-left mb-sm-4 mb-2">Fashion and Style</h3>
                <?php $category_id = get_cat_ID('Fashion and Style'); ?>
                <a href="<?php echo get_category_link($category_id); ?>" class="more btn btn-small mb-sm-0 mb-4">View more</a>
        </div>
        <div class="row">
            <?php while ($fashion_and_style_cat_posts->have_posts()) {
                    $fashion_and_style_cat_posts->the_post(); ?>
                <div class="col-lg-4 col-md-6 item">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="<?php the_permalink(); ?>">
                                <img class="card-img-bottom d-block radius-image-full" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body blog-details">
                            <a href="<?php the_permalink(); ?>" class="blog-desc"><?php the_title(); ?>
                            </a>
                            <div class="author align-items-center">
                                <?php $get_author_id = get_the_author_meta('ID'); ?>
                                <img src="<?php echo get_avatar_url($get_author_id); ?>" alt="" class="img-fluid rounded-circle" />
                                <ul class="blog-meta">
                                    <li>
                                        <a href="author.html"><?php echo get_the_author(); ?></a> </a>
                                    </li>
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"><?php echo get_the_date(); ?></span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span><?php echo read_time(); ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        <?php }
            } ?>
        </div>
    </div>
</div>


<div class="w3l-homeblock2 w3l-homeblock5 py-5">
    <div class="container py-lg-5 py-md-4">
        <!-- block -->
        <?php
        $args = array(
            'category_name' => 'beauty', // Replace 'post' with your desired post type
            'posts_per_page' => 4, // Retrieve n number of posts with the checkbox checked
        );

        $beauty_cat_posts = new WP_Query($args);
        if ($beauty_cat_posts->have_posts()) {
        ?>
            <div class="left-right">
                <h3 class="section-title-left mb-sm-4 mb-2"> Beauty</h3>
                <?php $category_id = get_cat_ID('Beauty'); ?>
                <a href="<?php echo get_category_link($category_id); ?>" class="more btn btn-small mb-sm-0 mb-4">View more</a>
            </div>
            <div class="row">
                <?php while ($beauty_cat_posts->have_posts()) {
                    $beauty_cat_posts->the_post(); ?>
                    <div class="col-lg-6 mt-4">
                        <div class="bg-clr-white hover-box">
                            <div class="row">
                                <div class="col-sm-5 position-relative">
                                    <a href="<?php the_permalink(); ?>" class="image-mobile">
                                        <img class="card-img-bottom d-block radius-image-full" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="col-sm-7 card-body blog-details align-self">
                                    <a href="<?php the_permalink(); ?>" class="blog-desc"><?php the_title(); ?>
                                    </a>
                                    <div class="author align-items-center">
                                        <?php $get_author_id = get_the_author_meta('ID'); ?>
                                        <img src="<?php echo get_avatar_url($get_author_id); ?>" alt="" class="img-fluid rounded-circle" />
                                        <ul class="blog-meta">
                                            <li>
                                                <a href="author.html"><?php echo get_the_author(); ?></a> </a>
                                            </li>
                                            <li class="meta-item blog-lesson">
                                                <span class="meta-value"><?php echo get_the_date(); ?></span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span><?php echo read_time(); ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>


<div class="w3l-homeblock2 w3l-homeblock6 py-5">
    <div class="container-fluid px-sm-5 py-lg-5 py-md-4">
        <!-- block -->
        <h3 class="section-title-left mb-4"> Trending Now</h3>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'post', // Replace 'post' with your desired post type
                'posts_per_page' => 2, // Retrieve n number of posts with the checkbox checked
                'meta_query' => array(
                    array(
                        'key' => 'trending_now_checkbox',
                        'value' => '1', // Check for the value '1'
                        'compare' => '=',
                        'type' => 'NUMERIC', // Specify the data type as numeric
                    ),
                ),
            );

            $trending_now_posts = new WP_Query($args);
            if ($trending_now_posts->have_posts()) {
                while ($trending_now_posts->have_posts()) {
                    $trending_now_posts->the_post();
            ?>
                    <div class="col-lg-6">
                        <div class="bg-clr-white hover-box">
                            <div class="row">
                                <div class="col-sm-6 position-relative">
                                    <a href="#blog-single.html">
                                        <img class="card-img-bottom d-block radius-image-full" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="col-sm-6 card-body blog-details align-self">
                                    <span class="label-blue"><?php the_category(); ?></span>
                                    <a href="<?php the_permalink(); ?>" class="blog-desc"><?php the_title(); ?>
                                    </a>
                                    <?php $the_excerpt = get_the_excerpt();
                                    $the_excerpt = substr($the_excerpt, 0, 150); ?>
                                    <p><?php echo $the_excerpt; ?></p>
                                    <div class="author align-items-center mt-3">
                                        <?php $get_author_id = get_the_author_meta('ID'); ?>
                                        <img src="<?php echo get_avatar_url($get_author_id); ?>" alt="" class="img-fluid rounded-circle" />
                                        <ul class="blog-meta">
                                            <li>
                                                <a href="author.html"><?php echo get_the_author(); ?></a> </a>
                                            </li>
                                            <li class="meta-item blog-lesson">
                                                <span class="meta-value"><?php echo get_the_date(); ?></span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span><?php echo read_time(); ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</div>


<div class="w3l-subscribe py-5">
    <div class="container py-lg-5 py-md-4">
        <div class="w3l-subscribe-content text-center bg-clr-white py-md-5 py-2">
            <div class="py-5">
                <h3 class="section-title-left mb-2">Subscribe to our newsletter!</h3>
                <p class="mb-md-5 mb-4">We'll send you the best of our blog just once a month. We promise. </p>
                <!-- <form action="#" method="GET" class="subscribe">
                    <input type="email" class="subscribe_input" name="search" placeholder="Email address" required="">
                    <button class="btn btn-style btn-primary">Subscribe</button>
                </form> -->
                <?php dynamic_sidebar('newsletter-form'); ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
