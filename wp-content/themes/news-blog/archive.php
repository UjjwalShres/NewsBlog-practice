<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NewsBlog
 */

get_header();
?>



<?php if (have_posts()) :


	$term_id = get_queried_object_id(); // Get the current category ID
	$category_layout_value = get_term_meta($term_id, 'custom_category_value', true);

	if ($category_layout_value == 'small_post_layout' && $term_id) {
		get_template_part('template-parts/content', 'layout1');
	} elseif ($category_layout_value == 'big_post_layout' && $term_id) {
		get_template_part('template-parts/content', 'layout2');
	} else {
	}



//the_posts_navigation();

else : ?>
	<main id="primary" class="site-main">
		<header class="page-header">
			<?php
			the_archive_title('<h1 class="page-title">', '</h1>');
			the_archive_description('<div class="archive-description">', '</div>');
			?>
		</header><!-- .page-header -->

		<?php

		/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
		//get_template_part('template-parts/content', get_post_type());
		get_template_part('template-parts/content', 'none');
		?>
	</main><!-- #main -->
<?php
endif;
?>



<?php
//get_sidebar();
get_footer();
