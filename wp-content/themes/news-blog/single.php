<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package NewsBlog
 */

get_header();
?>

<div class="w3l-homeblock2 w3l-homeblock5 py-5">
	<div class="container pt-md-4 pb-md-5">

		<?php
		while (have_posts()) :
			the_post();
		?><a href="<?php the_permalink(); ?>" class="blog-desc">
				<h3><?php the_title(); ?></h3>
			</a></br>
			<span class="label-blue"><?php the_category(); ?></span>
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
			<br>
			<div>



				<?php echo get_the_post_thumbnail() ?>

				<div class="card-body blog-details">



					<p><?php the_content(); ?></p>

				</div>
			</div>
		<?php
		endwhile; // End of the loop.
		?>

	</div>
</div>

<?php
//get_sidebar();
get_footer();
