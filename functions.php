<?php

/* 
* MY Theme Function
*/

// Theme Title 
add_theme_support('title-tag');
add_theme_support('custom-header');

// Theme CSS and jquery File calling
function eva_css_js_file_calling(){
    wp_enqueue_style('eva-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');
  
  
    //jQuery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', 'true' );
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true' );
//  wp_enqueue_style('eva-style', get_stylesheet_uri());
//  wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2');
//  wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
//  wp_enqueue_style('bootstrap');
//  wp_enqueue_style('custom');

//  // jquery
//  wp_enqueue_script('jquery');
//  wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.css', array(), '5.0.2', 'true');
//  wp_enqueue_script('main', get_template_directory_uri().'/js/main.css', array(), '1.0.0', 'true');
    
 
}
add_action('wp_enqueue_scripts', 'eva_css_js_file_calling');

//Theme Function
function eva_customizar_register($wp_customize){
    $wp_customize->add_section('eva_header_area', array(
      'title' =>__('Header Area', 'eva'),
      'description' => 'If you interested to update your header area, you can do it here.'
    ));
  
    $wp_customize->add_setting('eva_logo', array(
      'default' => get_bloginfo('template_directory') . '/img/logo.png',
    ));
    $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'eva_logo', array(
        'label' => 'Logo Upload',
        'description' => 'If you interested to change or update your logo you can do it.',
        'setting' => 'eva_logo',
        'section' => 'eva_header_area',
      ) ));
}