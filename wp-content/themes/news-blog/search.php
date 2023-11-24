<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package NewsBlog
 */

get_header();
?>

<div class="w3l-homeblock2 py-5">
	<div class="container pt-md-4 pb-md-5">
		<header class="page-header">
			<h1 class="page-title">
				<?php
				/* translators: %s: search query. */
				printf(esc_html__('Search Results for: %s', 'news-blog'), '<span>' . get_search_query() . '</span>');
				?>
			</h1>
		</header><!-- .page-header -->
		<div class="row">

			<?php if (have_posts()) : ?>



			<?php
				/* Start the Loop */
				while (have_posts()) :
					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part('template-parts/content', 'search');

				endwhile;


			else :

				get_template_part('template-parts/content', 'none');

			endif;
			?>
		</div>
	</div>
</div>

<?php
get_footer();
