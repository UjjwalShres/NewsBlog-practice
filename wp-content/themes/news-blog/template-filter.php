<?php /* Template Name: Filter */

get_header();

?>

<style>
    .blue {
        color: #5a67d8;
        display: inline-block;
        background: rgba(90, 103, 216, 0.05);
        padding: 5px 20px;
        font-weight: 600px;
        border-radius: 16px;
    }

    .blue:hover {
        background-color: #5a67d8;
        color: white;
        cursor: pointer;
    }

    .selected {
        background-color: #5a67d8;
        color: white !important;
    }

    /* 
    .red {
        color: #DE3163;
        display: inline-block;
        background: rgba(90, 103, 216, 0.05);
        padding: 5px 20px;
        font-weight: 600px;
    }

    .red:hover {
        background-color: #DE3163;
        color: white;
        cursor: pointer;
    }

    .select-red {
        background-color: #DE3163;
        color: white;
    } */

    .filters {
        display: flex;
        padding: 20px;
        /* background-color: gray; */
        width: fit-content;
        margin: auto;
    }

    #pagination-container {
        display: block;
        width: fit-content;
        margin: auto;
        padding: 20px;
        color: #5a67d8;
    }

    #pagination-container>a {
        padding: 10px;
        border: 1px solid #5a67d8;
        margin: 5px;
    }

    #pagination-container>a:hover {
        background-color: #5a67d8;
        color: white;
    }
</style>



<div class="w3l-homeblock2 py-5">
    <div class="container pt-md-4 pb-md-5">
        <ul id="filters" class="filters">
            <li><a href="#" data-filter="item" class="selected blue">All</a></li>
            <?php
            $all_categories = get_terms('category');
            foreach ($all_categories as $category) {
                echo '<li><a href="#" data-filter="' . $category->slug . '" class="blue">' . $category->name . '</a></li>';
            }


            ?>
        </ul>
        <div class="card-body blog-details">
            <div class="row" id="isotope-list">
                <?php
                $args = array(
                    'category_name' => '', // Replace 'post' with your desired post type
                    //'posts_per_page' => 2
                );
                $filter_posts = new WP_Query($args);
                if ($filter_posts->have_posts()) {
                    while ($filter_posts->have_posts()) {
                        $filter_posts->the_post();
                        $this_category_terms = get_the_terms($post->ID, "category");
                        //print_r($this_category_terms);
                        $this_category_terms_string = '';
                        foreach ($this_category_terms as $term) {
                            $this_category_terms_string .= $term->slug . " ";
                        }
                ?>
                        <div class="<?php echo $this_category_terms_string; ?>  col-lg-6 mt-4 item">
                            <div class="bg-clr-white hover-box">
                                <div class="row">
                                    <div class="col-sm-5 position-relative">
                                        <a href="<?php the_permalink(); ?>" class="image-mobile">
                                            <img class="card-img-bottom d-block radius-image-full" src="<?php echo get_the_post_thumbnail_url() ?>" alt="Card image cap">
                                        </a>
                                    </div>
                                    <div class="col-sm-7 card-body blog-details align-self">
                                        <span class="label-blue"><?php the_category(); ?></span>
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

                    <?php }   ?>




                <?php
                } ?>
            </div>
        </div>
        <div id="pagination-container">
            <?php //custom_numeric_pagination($filter_posts);
            ?>
        </div>

    </div>

</div>



<?php

get_footer();
// echo 'name</br>';
                // the_field("team_name");
                // echo '</br>';
                // echo 'email</br>';
                // the_field("team_email");