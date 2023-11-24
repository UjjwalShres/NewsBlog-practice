<?php

/**
 * Template part for displaying categories (layout 1 design) content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NewsBlog
 */
?>

<div class="w3l-homeblock2 w3l-homeblock5 py-5">
    <div class="container pt-md-4 pb-md-5">
        <!-- block -->
        <?php
        the_archive_title('<h3 class="category-title mb-3">', '</h3>');
        the_archive_description('<p class="mb-sm-5 mb-4 max-width">', '</p>');
        ?>
        <div class="row">
            <?php     /* Start the Loop */
            while (have_posts()) :
                the_post(); ?>
                <div class="col-lg-6 mt-4">
                    <div class="bg-clr-white hover-box">
                        <div class="row">
                            <div class="col-sm-5 position-relative">
                                <a href="<?php the_permalink(); ?>" class="image-mobile">
                                    <img class="card-img-bottom d-block radius-image-full" src="<?php echo get_the_post_thumbnail_url() ?>" alt="Card image cap">
                                </a>
                            </div>
                            <div class="col-sm-7 card-body blog-details align-self">
                                <a href="<?php the_permalink(); ?>" class="blog-desc"><?php echo get_the_title(); ?>
                                </a>
                                <div class="author align-items-center">
                                    <?php $get_author_id = get_the_author_meta('ID'); ?>
                                    <img src="<?php echo get_avatar_url($get_author_id); ?>" alt="" class="img-fluid rounded-circle">
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="author.html"><?php echo get_the_author(); ?></a>
                                        </li>
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"><?php echo get_the_date(); ?></span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span><?php echo  read_time(); ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

        </div>
        <div class="pagination-container">
            <?php custom_pagination_links(); ?>
        </div>

    </div>
</div>