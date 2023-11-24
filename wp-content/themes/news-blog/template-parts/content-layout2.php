<?php

/**
 * Template part for displaying categories (layout 2 design) content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NewsBlog
 */
?>

<div class="w3l-homeblock2 py-5">
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
                <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="<?php the_permalink(); ?>">
                                <img class="card-img-bottom d-block radius-image-full" src="<?php echo get_the_post_thumbnail_url() ?>" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body blog-details">
                            <a href="<?php the_permalink(); ?>" class="blog-desc"><?php echo get_the_title(); ?>
                            </a>
                            <?php $the_excerpt = get_the_excerpt();
                            $the_excerpt = substr($the_excerpt, 0, 50); ?>
                            <p><?php echo $the_excerpt; ?></p>
                            <div class="author align-items-center mt-3 mb-1">
                                <?php $get_author_id = get_the_author_meta('ID'); ?>
                                <img src="<?php echo get_avatar_url($get_author_id); ?>" alt="" class="img-fluid rounded-circle" />
                                <ul class="blog-meta">
                                    <li>
                                        <a href="author.html"><?php echo get_the_author(); ?></a> </a>
                                    </li>
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"><?php echo get_the_date(); ?></span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span><?php echo  read_time(); ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <!-- <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <a href="#blog-single.html">
                            <img class="card-img-bottom d-block radius-image-full" src="assets/images/fashion5.jpg" alt="Card image cap">
                        </a>
                    </div>
                    <div class="card-body blog-details">
                        <a href="#blog-single.html" class="blog-desc">Searching for online inspiration and how to steal their style?
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur ipsum adipisicing elit. Quis
                            vitae sit.</p>
                        <div class="author align-items-center mt-3 mb-1">
                            <img src="assets/images/a3.jpg" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="author.html">ELizabeth</a> </a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> July 13, 2020 </span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <a href="#blog-single.html">
                            <img class="card-img-bottom d-block radius-image-full" src="assets/images/fashion2.jpg" alt="Card image cap">
                        </a>
                    </div>
                    <div class="card-body blog-details">
                        <a href="#blog-single.html" class="blog-desc">The Satin Skirt & How to Wear it all year round fashion
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur ipsum adipisicing elit. Quis
                            vitae sit.</p>
                        <div class="author align-items-center mt-3 mb-1">
                            <img src="assets/images/a2.jpg" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="author.html">Charlotte mia</a> </a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> July 13, 2020 </span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <a href="#blog-single.html">
                            <img class="card-img-bottom d-block radius-image-full" src="assets/images/fashion7.jpg" alt="Card image cap">
                        </a>
                    </div>
                    <div class="card-body blog-details">
                        <a href="#blog-single.html" class="blog-desc">From the classic (jeans) to the not-so-classic (printed tops)
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur ipsum adipisicing elit. Quis
                            vitae sit.</p>
                        <div class="author align-items-center mt-3 mb-1">
                            <img src="assets/images/a1.jpg" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="author.html">Johnson smith</a> </a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> July 13, 2020 </span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <a href="#blog-single.html">
                            <img class="card-img-bottom d-block radius-image-full" src="assets/images/fashion8.jpg" alt="Card image cap">
                        </a>
                    </div>
                    <div class="card-body blog-details">
                        <a href="#blog-single.html" class="blog-desc">3 New Outfit Formulas To Add To Your
                            Capsule Wardrobe
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur ipsum adipisicing elit. Quis
                            vitae sit.</p>
                        <div class="author align-items-center mt-3 mb-1">
                            <img src="assets/images/a1.jpg" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="author.html">Johnson smith</a> </a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> July 13, 2020 </span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <a href="#blog-single.html">
                            <img class="card-img-bottom d-block radius-image-full" src="assets/images/fashion6.jpg" alt="Card image cap">
                        </a>
                    </div>
                    <div class="card-body blog-details">
                        <a href="#blog-single.html" class="blog-desc">3 New Outfit Formulas To Add To Your
                            Capsule Wardrobe
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur ipsum adipisicing elit. Quis
                            vitae sit.</p>
                        <div class="author align-items-center mt-3 mb-1">
                            <img src="assets/images/a1.jpg" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="author.html">Johnson smith</a> </a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> July 13, 2020 </span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <a href="#blog-single.html">
                            <img class="card-img-bottom d-block radius-image-full" src="assets/images/fashion1.jpg" alt="Card image cap">
                        </a>
                    </div>
                    <div class="card-body blog-details">
                        <a href="#blog-single.html" class="blog-desc">An easy Guide to buying Denim & My favourite styles
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur ipsum adipisicing elit. Quis
                            vitae sit.</p>
                        <div class="author align-items-center mt-3 mb-1">
                            <img src="assets/images/a1.jpg" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="author.html">Isabella ava</a> </a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> July 13, 2020 </span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <a href="#blog-single.html">
                            <img class="card-img-bottom d-block radius-image-full" src="assets/images/fashion3.jpg" alt="Card image cap">
                        </a>
                    </div>
                    <div class="card-body blog-details">
                        <a href="#blog-single.html" class="blog-desc">What I’ll be Wearing this Party Season & the Festive edit
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur ipsum adipisicing elit. Quis
                            vitae sit.</p>
                        <div class="author align-items-center mt-3 mb-1">
                            <img src="assets/images/a3.jpg" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="author.html">Elizabeth</a> </a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> July 13, 2020 </span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <a href="#blog-single.html">
                            <img class="card-img-bottom d-block radius-image-full" src="assets/images/image2.jpg" alt="Card image cap">
                        </a>
                    </div>
                    <div class="card-body blog-details">
                        <a href="#blog-single.html" class="blog-desc">3 New Outfit Formulas To Add To Your
                            Capsule Wardrobe
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur ipsum adipisicing elit. Quis
                            vitae sit.</p>
                        <div class="author align-items-center mt-3 mb-1">
                            <img src="assets/images/a1.jpg" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="author.html">Johnson smith</a> </a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> July 13, 2020 </span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="pagination-container">
            <?php custom_pagination_links(); ?>
        </div>
    </div>
</div>