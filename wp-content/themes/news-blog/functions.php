<?php

/**
 * NewsBlog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package NewsBlog
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function news_blog_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on NewsBlog, use a find and replace
		* to change 'news-blog' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('news-blog', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'news-blog'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'news_blog_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'news_blog_setup');

function custom_search_form()
{
	$form = '<div class="search-bar"><form role="search" method="get" class="search">
	  
	<input type="search" class="search__input" name="s" value="' . get_search_query() . '" placeholder="Discover news, articles and more" onload="equalWidth()" required/>
	<button type="submit" class="search__icon" style="display:none;"><span class="fa fa-search "></span></button>
	<span class="fa fa-search search__icon" style="cursor: pointer;" onclick="this.parentElement.submit();"></span>
	

  </form></div>';

	return $form;
}

add_filter('get_search_form', 'custom_search_form');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function news_blog_content_width()
{
	$GLOBALS['content_width'] = apply_filters('news_blog_content_width', 640);
}
add_action('after_setup_theme', 'news_blog_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function news_blog_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'news-blog'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'news-blog'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__('Newsletter Form', 'news-blog'),
			'id'            => 'newsletter-form',
			'description'   => esc_html__('Add widgets here.', 'news-blog'),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'news_blog_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function news_blog_scripts()
{
	wp_enqueue_style('news-blog-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('news-blog-style', 'rtl', 'replace');

	//Template CSS
	wp_enqueue_style('style-starter', get_template_directory_uri() . "/css/style-starter.css", array(), 2);
	//fonts
	wp_enqueue_style('google-fonts-1', "//fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600&display=swap");
	wp_enqueue_style('google-fonts-2', "//fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap");

	wp_enqueue_script('news-blog-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	//Template JavaScript
	wp_enqueue_script('jquery-js', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), _S_VERSION, true);
	//Theme changer JS
	wp_enqueue_script('theme-changer-js', get_template_directory_uri() . '/js/theme-change.js', array(), _S_VERSION, true);
	//courses owlcarousel
	wp_enqueue_script('courses-owlcarousel', get_template_directory_uri() . '/js/owl.carousel.js', array(), _S_VERSION, true);
	//bootstrap
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), _S_VERSION, true);
	//custom scripts
	wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array(), _S_VERSION, true);
	//isotope scripts
	wp_enqueue_script('isotope-js', get_template_directory_uri() . '/js/isotope.js', array('jquery'), 2, true);
	// wp_localize_script('isotope-js', 'myScript', array('template_dir' => get_template_directory_uri()));


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'news_blog_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}


//custom meta box
function newsblog_custom_metabox()
{
	// meta box for editor's choice
	add_meta_box(
		'custom_editor_choice_metabox',     // Meta box ID
		"Editor's Choice",  // Title
		'render_custom_editor_choice_metabox', // Callback function to render content
		'post',                   // Post type where the meta box should appear
		'normal',                 // Context (normal, advanced, side)
		'high',                    // Priority (high, default, low)
	);

	// meta box for top picks of the month
	add_meta_box(
		'custom_top_picks_metabox',     // Meta box ID
		"Top Picks of the Month",  // Title
		'render_custom_top_picks_metabox', // Callback function to render content
		'post',                   // Post type where the meta box should appear
		'normal',                 // Context (normal, advanced, side)
		'high',                    // Priority (high, default, low)
	);

	// meta box for trending now posts
	add_meta_box(
		'custom_trending_now_metabox',     // Meta box ID
		"Trending Now",  // Title
		'render_custom_trending_now_metabox', // Callback function to render content
		'post',                   // Post type where the meta box should appear
		'normal',                 // Context (normal, advanced, side)
		'high',                    // Priority (high, default, low)
	);
}

add_action('add_meta_boxes', 'newsblog_custom_metabox');

function render_custom_editor_choice_metabox($post) // render metabox for editor's choice
{
	$checked = get_post_meta($post->ID, 'editors_choice_checkbox', true);

	// Output the checkbox input field
	echo '<label for="editors_choice_checkbox">';
	echo '<input type="checkbox" id="editors_choice_checkbox" name="editors_choice_checkbox" value="1" ' . checked(1, $checked, false) . '>';
	echo "Pick this post for Editor's Choice";
	echo '</label>';
}

// Save the checkbox value when the post is saved
function save_custom_editor_choice_metabox($post_id)
{
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

	if (isset($_POST['editors_choice_checkbox'])) {
		update_post_meta($post_id, 'editors_choice_checkbox', $_POST['editors_choice_checkbox']);
	} else {
		delete_post_meta($post_id, 'editors_choice_checkbox');
	}
}
add_action('save_post', 'save_custom_editor_choice_metabox');

function render_custom_top_picks_metabox($post) // render metabox for top picks
{
	$top_pick_checked = get_post_meta($post->ID, 'top_picks_checkbox', true);

	// Output the checkbox input field
	echo '<label for="top_picks_checkbox">';
	echo '<input type="checkbox" id="top_picks_checkbox" name="top_picks_checkbox" value="1" ' . checked(1, $top_pick_checked, false) . '>';
	echo "Pick this post for Top Picks of the Month";
	echo '</label>';
}

// Save the checkbox value when the post is saved
function save_custom_top_picks_metabox($post_id)
{
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

	if (isset($_POST['top_picks_checkbox'])) {
		update_post_meta($post_id, 'top_picks_checkbox', $_POST['top_picks_checkbox']);
	} else {
		delete_post_meta($post_id, 'top_picks_checkbox');
	}
}
add_action('save_post', 'save_custom_top_picks_metabox');

function render_custom_trending_now_metabox($post) // render metabox for trending now
{
	$trending_now_checked = get_post_meta($post->ID, 'trending_now_checkbox', true);

	// Output the checkbox input field
	echo '<label for="trending_now_checkbox">';
	echo '<input type="checkbox" id="trending_now_checkbox" name="trending_now_checkbox" value="1" ' . checked(1, $trending_now_checked, false) . '>';
	echo "Pick this post for Trending Now";
	echo '</label>';
}

// Save the checkbox value when the post is saved
function save_custom_trending_now_metabox($post_id)
{
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

	if (isset($_POST['trending_now_checkbox'])) {
		update_post_meta($post_id, 'trending_now_checkbox', $_POST['trending_now_checkbox']);
	} else {
		delete_post_meta($post_id, 'trending_now_checkbox');
	}
}
add_action('save_post', 'save_custom_trending_now_metabox');

// Add custom metabox to category edit screen
function add_custom_category_metabox($term)
{
?>
	<div class="form-field">
		<label for="custom_category_value">Category Layout:</label>
		<select name="custom_category_value" id="custom_category_value">
			<option value="small_post_layout" <?php selected(get_term_meta($term->term_id, 'custom_category_value', true), 'small_post_layout'); ?>>Small Post Layout</option>
			<option value="big_post_layout" <?php selected(get_term_meta($term->term_id, 'custom_category_value', true), 'big_post_layout'); ?>>Big Post Layout</option>
		</select>
	</div>
<?php
}
add_action('category_edit_form_fields', 'add_custom_category_metabox');

// Save the selected value when category is updated
function save_custom_category_metabox($term_id)
{
	if (isset($_POST['custom_category_value'])) {
		update_term_meta($term_id, 'custom_category_value', sanitize_text_field($_POST['custom_category_value']));
	}
}
add_action('edited_category', 'save_custom_category_metabox');

//read time
// function read_time()
// {
// 	$post = get_post();
// 	$content = get_post_field('post_content', $post->ID);
// 	$word_count = str_word_count(strip_tags($content));
// 	$word_time = ceil($word_count / 200);

// 	if ($word_time <= 1) {
// 		$timer = 'min';
// 	} else {
// 		$timer = 'mins';
// 	}

// 	$total_read_time = ' ' . $word_time . ' ' . $timer;
// 	return $total_read_time;
// }


//custom numeric pagination

function custom_pagination_links()
{
	global $wp_query;

	$total_pages = $wp_query->max_num_pages;
	$current_page = max(1, get_query_var('paged'));

	if ($total_pages > 1) {
		echo '<ul class="site-pagination text-center mt-md-5 mt-4">';

		// Previous page link
		if (get_previous_posts_link()) {
			echo '<li>' . get_previous_posts_link('« Previous') . '</li>';
		} else {
			echo '<li><span class="page-numbers dots">« Previous</span></li>';
		}

		// Numbered pages
		for ($i = 1; $i <= $total_pages; $i++) {
			echo '<li>';
			if ($i === $current_page) {
				echo '<span aria-current="page" class="page-numbers current">' . $i . '</span>';
			} else {
				echo '<a class="page-numbers" href="' . esc_url(get_pagenum_link($i)) . '">' . $i . '</a>';
			}
			echo '</li>';
		}

		// Next page link
		if (get_next_posts_link()) {
			echo '<li>' . get_next_posts_link('Next »') . '</li>';
		} else {
			echo '<li><span class="page-numbers dots">Next »</span></li>';
		}

		echo '</ul>';
	}
}



//dynamically change posts per page depending on layout
function custom_posts_per_page($query)
{
	if (!is_admin() && $query->is_main_query()) {
		$term_id = get_queried_object_id();
		$category_layout_value = get_term_meta($term_id, 'custom_category_value', true);

		if ($category_layout_value == 'small_post_layout' && $term_id) {
			// Change the number of posts displayed per page to 2
			$query->set('posts_per_page', 2);
		} elseif ($category_layout_value == 'big_post_layout' && $term_id) {
			// Change the number of posts displayed per page to 3
			$query->set('posts_per_page', 3);
		}
	}
}

add_action('pre_get_posts', 'custom_posts_per_page');


// Add a custom metabox to the post editor screen
function add_custom_read_time_metabox()
{
	add_meta_box(
		'custom-read-time-metabox',
		'Read Time',
		'render_custom_read_time_metabox',
		'post', // Adjust post type if needed
		'normal',
		'high'
	);
}
add_action('add_meta_boxes', 'add_custom_read_time_metabox');

// Render the content of the custom metabox
function render_custom_read_time_metabox($post)
{
	// Retrieve the current value of the read time custom field
	$read_time = get_post_meta($post->ID, '_custom_read_time', true);

	// Output the input field
?>
	<label for="custom_read_time">Read Time (minutes):</label>
	<input type="text" id="custom_read_time" name="custom_read_time" value="<?php echo esc_attr($read_time); ?>">
<?php
}

// Save the custom metabox data
function save_custom_read_time_metabox($post_id)
{
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

	if (isset($_POST['custom_read_time'])) {
		$read_time = sanitize_text_field($_POST['custom_read_time']);
		update_post_meta($post_id, '_custom_read_time', $read_time);
	}
}
add_action('save_post', 'save_custom_read_time_metabox');


//read time meta box function 
function read_time()
{
	$post = get_post();
	$content = get_post_field('post_content', $post->ID);
	$word_count = str_word_count(strip_tags($content));
	$word_time = ceil($word_count / 200);

	if ($word_time <= 1) {
		$timer = 'min';
	} else {
		$timer = 'mins';
	}

	$total_read_time = ' ' . $word_time . ' ' . $timer;

	// Save the read time to the custom metabox field
	update_post_meta($post->ID, '_custom_read_time', $total_read_time);

	return $total_read_time;
}


//custom numeric pagination for filter
function custom_numeric_pagination($custom_query)
{
	//print_r($custom_query);
	$total_pages = $custom_query->max_num_pages;
	// echo $total_pages;
	$current_page = max(1, get_query_var('paged'));

	if ($total_pages > 1) {
		echo '<ul class="site-pagination text-center mt-md-5 mt-4">';

		// Previous page link
		if (get_previous_posts_link()) {
			echo '<li>' . get_previous_posts_link('« Previous') . '</li>';
		} else {
			echo '<li><span class="page-numbers dots">« Previous</span></li>';
		}

		// Numbered pages
		for ($i = 1; $i <= $total_pages; $i++) {
			echo '<li>';
			if ($i === $current_page) {
				echo '<span aria-current="page" class="page-numbers current">' . $i . '</span>';
			} else {
				echo '<a class="page-numbers" href="' . esc_url(get_pagenum_link($i)) . '">' . $i . '</a>';
			}
			echo '</li>';
		}

		// Next page link
		if (get_next_posts_link()) {
			echo '<li>' . get_next_posts_link('Next »') . '</li>';
		} else {
			echo '<li><span class="page-numbers dots">Next »</span></li>';
		}

		echo '</ul>';
	}
}
