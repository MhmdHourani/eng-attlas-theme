<?php

add_theme_support('post-thumbnails');

function style_theme()
{
    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/assets/fonts/font-new/stylesheet.css', array(), 1.0);
    wp_enqueue_style('simplebar', get_template_directory_uri() . '/assets/css/simplebar.css', array(), 1.0);
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), 1.0);
};

function script_theme()
{
    // wp_enqueue_script('jquery');
    wp_enqueue_script('jqueryj', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array(), null, true);
    wp_enqueue_script('simplebarjs', get_template_directory_uri() . '/assets/js/simplebar.js', array(), null, true);
    wp_enqueue_script('carouseljs', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), null, true);
    wp_enqueue_script('wowjs', get_template_directory_uri() . '/assets/js/wow.min.js', array(), null, true);
    wp_enqueue_script('mainjs', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}

function theme_settings($wp_customize)
{
    // logo setting in customizing theme
    $wp_customize->add_panel('theme_options', array(
        'title' => "Theme Settings",
        'description' => 'Header Logo Options',
    ));

    $wp_customize->add_section('logo_settings_section', array(
        'title' => "Logo",
        'description' => 'Add logo to Show in Header => SVG ONLY',
        'panel' => 'theme_options',
    ));
    // avatar_logo
    $wp_customize->add_setting('Logo_Uplaod_setting', array(
        'default' => get_template_directory_uri() . '/assets/images/logo/attas_logo_RGB.svg'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_upload', array(
        'label' => 'Logo Upload',
        'section' => 'logo_settings_section',
        'settings' => 'Logo_Uplaod_setting',
    )));
    // full_logo
    $wp_customize->add_setting('avatar_upload_settings', array(
        'default' => get_template_directory_uri() . '/assets/images/logo/avatar_logo.svg'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'avatat_Upload', array(
        'label'    => 'Avatat Upload',
        'section'  => 'logo_settings_section',
        'settings' => 'avatar_upload_settings',
    )));

    // social media section 
    $wp_customize->add_section('social_media_section', array(
        'title' => "Social Media",
        'description' => 'Add Social Media URL',
        'panel' => 'theme_options',
    ));

    $wp_customize->add_setting('fb_social_media', array(
        'default' => 'www.facebook.com',
    ));
    $wp_customize->add_control('fb_social_media_field', array(
        'label' => 'URL Facebook',
        'section' => 'social_media_section',
        'settings' => 'fb_social_media',
    ));

    $wp_customize->add_setting('tw_social_media', array(
        'default' => 'https://twitter.com/',
    ));
    $wp_customize->add_control('tw_social_media_field', array(
        'label' => 'URL twitter',
        'section' => 'social_media_section',
        'settings' => 'tw_social_media',
    ));

    $wp_customize->add_setting('instg_social_media', array(
        'default' => 'https://www.instagram.com/',
    ));
    $wp_customize->add_control('instg_social_media_field', array(
        'label' => 'URL instagram',
        'section' => 'social_media_section',
        'settings' => 'instg_social_media',
    ));

    $wp_customize->add_setting('youtube_social_media', array(
        'default' => 'https://www.youtube.com/',
    ));
    $wp_customize->add_control('youtube_social_media_field', array(
        'label' => 'URL Youtube',
        'section' => 'social_media_section',
        'settings' => 'youtube_social_media',
    ));

    $wp_customize->add_setting('email_social_media', array(
        'default' => 'example@email.com',
    ));
    $wp_customize->add_control('email_social_media_field', array(
        'label' => 'Email',
        'section' => 'social_media_section',
        'settings' => 'email_social_media',
    ));
}

function register_menu()
{
    register_nav_menus(array(
        'header-menu' => 'Header Menu',
        'footer-menu' => 'Footer Menu'
    ));
}

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_enqueue_scripts', 'script_theme');
add_action('customize_register', 'theme_settings');
add_action('after_setup_theme', 'register_menu');
