<?php

/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NewsBlog
 */

?>

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