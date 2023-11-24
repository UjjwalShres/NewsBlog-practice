<?php /* Template Name: ACF */

get_header();

?>
<style>
    .page-description {
        margin-top: 50px;
    }
</style>

<div class="w3l-homeblock2 py-5">
    <div class="container pt-md-4 pb-md-5">

        <header class="entry-header">
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        </header><!-- .entry-header -->

        <?php the_field('page_title'); ?>

        <div class="page-description">
            <p><?php echo nl2br(get_field('page_description')); ?></p>
        </div>




    </div>
</div>


<?php
get_footer();
