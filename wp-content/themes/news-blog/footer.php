<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NewsBlog
 */

?>
<!-- footer-28 block -->
<section class="app-footer">
	<footer class="footer-28 py-5">
		<div class="footer-bg-layer">
			<div class="container py-lg-3">
				<div class="row footer-top-28">
					<div class="col-lg-4 footer-list-28 copy-right mb-lg-0 mb-sm-5 mt-sm-0 mt-4">
						<a class="navbar-brand mb-3" href="index.html">
							<span class="fa fa-newspaper-o"></span> NewsBlog</a>
						<p class="copy-footer-28"> © <?php echo get_theme_mod('footer_settings'); ?> </p>
						<h5 class="mt-2">Design by <a href="https://w3layouts.com/">W3Layouts</a></h5>
					</div>
					<div class="col-lg-8 row">
						<div class="col-sm-4 col-6 footer-list-28">
							<h6 class="footer-title-28">Useful links</h6>
							<ul>
								<li><a href="#categories">food blogs</a></li>
								<li><a href="#advertise">Advertise with us</a></li>
								<li><a href="#authors">Our Authors</a></li>
								<li><a href="contact.html">Get in touch</a></li>
							</ul>
						</div>
						<div class="col-sm-4 col-6 footer-list-28">
							<h6 class="footer-title-28">Categories</h6>
							<?php
							$categories = get_categories(); // Retrieve all WordPress categories

							if (!empty($categories)) {
								echo '<ul>';
								foreach ($categories as $category) {
									$category_link = get_category_link($category->term_id); // Get the category link

									echo '<li><a href="' . esc_url($category_link) . '">' . esc_html($category->name) . '</a></li>';
								}
								echo '</ul>';
							} else {
								echo 'No categories found.';
							}

							?>
						</div>
						<div class="col-sm-4 col-6 footer-list-28 mt-sm-0 mt-4">
							<h6 class="footer-title-28">Social Media</h6>
							<ul class="social-icons">
								<?php if (get_theme_mod('facebook_block') != '') : ?>
									<li class="facebook"><a href="<?php echo get_theme_mod('facebook_block'); ?>"><span class="fa fa-facebook"></span>Facebook </a></li><?php endif; ?>
								<?php if (get_theme_mod('twitter_block') != '') : ?>
									<li class="twitter"><a href="<?php echo get_theme_mod('twitter_block'); ?>"><span class="fa fa-twitter"></span>Twitter </a></li><?php endif; ?>
								<?php if (get_theme_mod('linkedin_block') != '') : ?>
									<li class="linkedin"><a href="<?php echo get_theme_mod('linkedin_block'); ?>"><span class="fa fa-linkedin"></span>Linkedin </a></li><?php endif; ?>
								<?php if (get_theme_mod('dribble_block') != '') : ?>
									<li class="dribble"><a href="<?php echo get_theme_mod('dribble_block'); ?>"><span class="fa fa-dribbble"></span>Dribble </a></li><?php endif; ?>
							</ul>

						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</footer>

	<!-- move top -->
	<button onclick="topFunction()" id="movetop" title="Go to top">
		<span class="fa fa-angle-up"></span>
	</button>
	<!-- /move top -->
</section>
<!-- //footer-28 block -->

<?php wp_footer(); ?>
</body>

</html>