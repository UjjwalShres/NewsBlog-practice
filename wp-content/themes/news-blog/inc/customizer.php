<?php

/**
 * NewsBlog Theme Customizer
 *
 * @package NewsBlog
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function news_blog_customize_register($wp_customize)
{
	$wp_customize->get_setting('blogname')->transport         = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

	//custom social links customizer starts here
	$wp_customize->add_panel('social_links_block', array(
		'priority' => 210,
		'theme_supports' => '',
		'title' => __('Social Links', 'news-blog'),
		'description' => __('Social links url section', 'news-blog')
	));
	$wp_customize->add_section('custom_social_links', array(
		'title' => __('Social Links Url', 'news-blog'),
		'panel' => 'social_links_block',
		'priority' => 10
	));
	//settings for facebook url
	$wp_customize->add_setting('facebook_block', array(
		'default' => 'https://www.facebook.com/'
	));
	$wp_customize->add_control('facebook_block', array(
		'type' => 'text',
		'label' => 'Facebook Url',
		'section' => 'custom_social_links',
		'priority' => 1
	));
	//settings for twitter url
	$wp_customize->add_setting('twitter_block', array(
		'default' => 'https://www.twitter.com/'
	));
	$wp_customize->add_control('twitter_block', array(
		'type' => 'text',
		'label' => 'Twitter Url',
		'section' => 'custom_social_links',
		'priority' => 2
	));
	//settings for linkedin url
	$wp_customize->add_setting('linkedin_block', array(
		'default' => 'https://www.linkedin.com/'
	));
	$wp_customize->add_control('linkedin_block', array(
		'type' => 'text',
		'label' => 'Linkedin Url',
		'section' => 'custom_social_links',
		'priority' => 2
	));
	//settings for dribble url
	$wp_customize->add_setting('dribble_block', array(
		'default' => 'https://www.dribble.com/'
	));
	$wp_customize->add_control('dribble_block', array(
		'type' => 'text',
		'label' => 'Dribble Url',
		'section' => 'custom_social_links',
		'priority' => 2
	));


	//custom footer customizer starts here
	$wp_customize->add_panel('footer_block', array( //panel for footer
		'priority' => 211,
		'theme_supports' => '',
		'title' => __('Footer', 'news-blog'),
		'description' => __('Footer Options', 'news-blog')
	));
	$wp_customize->add_section('footer_section', array( //section for footer
		'title' => __('Footer Text', 'news-blog'),
		'description' => __('Edit the footer text', 'news-blog'),
		'panel' => 'footer_block'
	));
	//settings for footer text
	$wp_customize->add_setting('footer_settings', array(
		'default' => '2023 News Blog. All rights reserved'
	));
	$wp_customize->add_control('footer_control', array(
		'type' => 'text',
		'label' => 'Footer Text',
		'section' => 'footer_section',
		'settings' => 'footer_settings',
		'priority' => 1
	));


	$wp_customize->add_section('advertise_section', array( //section for advertise
		'title' => __('Advertise with Us', 'news-blog'),
		'description' => __('Edit the advertise text', 'news-blog')
	));
	//settings for advertise address
	$wp_customize->add_setting('advertise_address_settings', array(
		'default' => '#302, 5th Floor, ALHK-2247 ek, Settlers Lane, New York.'
	));
	$wp_customize->add_control('advertise_address_control', array(
		'type' => 'text',
		'label' => 'advertise address',
		'section' => 'advertise_section',
		'settings' => 'advertise_address_settings',
		'priority' => 1
	));
	//settings for advertise email
	$wp_customize->add_setting('advertise_email_settings', array(
		'default' => 'mail@example.com'
	));
	$wp_customize->add_control('advertise_email_control', array(
		'type' => 'text',
		'label' => 'advertise email',
		'section' => 'advertise_section',
		'settings' => 'advertise_email_settings',
		'priority' => 1
	));
	//settings for advertise phone
	$wp_customize->add_setting('advertise_phone_settings', array(
		'default' => '+977 9801234567'
	));
	$wp_customize->add_control('advertise_phone_control', array(
		'type' => 'text',
		'label' => 'advertise phone',
		'section' => 'advertise_section',
		'settings' => 'advertise_phone_settings',
		'priority' => 1
	));

	$wp_customize->add_section('slider_section', array( //section for slider
		'title' => __('Slider Customizer', 'news-blog'),
		'description' => __('Customize the slider posts', 'news-blog')
	));
	//settings for slider for first post
	$wp_customize->add_setting('slider_first_post_settings', array(
		'default' => 'beauty',
		'type' => 'theme_mod',
	));
	$wp_customize->add_control('slider_first_post_control', array(
		'label' => 'Choose Category for 1st slider post',
		'section' => 'slider_section',
		'settings' => 'slider_first_post_settings',
		'priority' => 1,
		'type' => 'select',
		'choices' => array(
			'beauty' => __('Beauty', 'news-blog'),
			'fashion-and-style' => __('Fashion and Style', 'news-blog'),
			'food-and-wellness' => __('Food and Wellness', 'news-blog'),
			'lifestyle' => __('Lifestyle', 'news-blog'),
		),
	));
	//settings for slider for second post
	$wp_customize->add_setting('slider_second_post_settings', array(
		'default' => 'beauty',
		'type' => 'theme_mod',
	));
	$wp_customize->add_control('slider_second_post_control', array(
		'label' => 'Choose Category for 2nd slider post',
		'section' => 'slider_section',
		'settings' => 'slider_second_post_settings',
		'priority' => 1,
		'type' => 'select',
		'choices' => array(
			'beauty' => __('Beauty', 'news-blog'),
			'fashion-and-style' => __('Fashion and Style', 'news-blog'),
			'food-and-wellness' => __('Food and Wellness', 'news-blog'),
			'lifestyle' => __('Lifestyle', 'news-blog'),
		),
	));

	//settings for slider for third post
	$wp_customize->add_setting('slider_third_post_settings', array(
		'default' => 'beauty',
		'type' => 'theme_mod',
	));
	$wp_customize->add_control('slider_third_post_control', array(
		'label' => 'Choose Category for 3rd slider post',
		'section' => 'slider_section',
		'settings' => 'slider_third_post_settings',
		'priority' => 1,
		'type' => 'select',
		'choices' => array(
			'beauty' => __('Beauty', 'news-blog'),
			'fashion-and-style' => __('Fashion and Style', 'news-blog'),
			'food-and-wellness' => __('Food and Wellness', 'news-blog'),
			'lifestyle' => __('Lifestyle', 'news-blog'),
		),
	));

	//settings for slider for fourth post
	$wp_customize->add_setting('slider_fourth_post_settings', array(
		'default' => 'beauty',
		'type' => 'theme_mod',
	));
	$wp_customize->add_control('slider_fourth_post_control', array(
		'label' => 'Choose Category for 4th slider post',
		'section' => 'slider_section',
		'settings' => 'slider_fourth_post_settings',
		'priority' => 1,
		'type' => 'select',
		'choices' => array(
			'beauty' => __('Beauty', 'news-blog'),
			'fashion-and-style' => __('Fashion and Style', 'news-blog'),
			'food-and-wellness' => __('Food and Wellness', 'news-blog'),
			'lifestyle' => __('Lifestyle', 'news-blog'),
		),
	));





	if (isset($wp_customize->selective_refresh)) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'news_blog_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'news_blog_customize_partial_blogdescription',
			)
		);
	}
}
add_action('customize_register', 'news_blog_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function news_blog_customize_partial_blogname()
{
	bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function news_blog_customize_partial_blogdescription()
{
	bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function news_blog_customize_preview_js()
{
	wp_enqueue_script('news-blog-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), _S_VERSION, true);
}
add_action('customize_preview_init', 'news_blog_customize_preview_js');
