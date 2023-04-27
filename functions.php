<?php

/* 
* MY Theme Function
*/

// Theme Title 
add_theme_support('title-tag');
add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats');
add_theme_support('custom-logo');

register_sidebar([
  'name' => 'Rigth Sidebar',
  'description'=> 'This is rigth sidebar',
  'id' => 'rs',
]);
register_sidebar([
  'name' => 'Left Sidebar',
  'description'=> 'This is left sidebar',
  'id' => 'ls',
]);
register_sidebar([
  'name' => 'Footer Sidebar',
  'description'=> 'This is footer bar',
  'id' => 'fb',
]);

register_nav_menus([
   'mm' => 'Main menu',
   'fm' => 'Footer menu',
]);

register_post_type('Gallery', [
  'public' => true,
  'labels' => [
    'name' => 'Gallery',
    'all_items' => 'All Gallery',
    'add_new' => 'Add New Gallery',
    'add_new_item' => 'Add New Gallery',
    'featured_image' => 'Gallery Image',
    'set_featured_image' => 'Set Gallery Image',

  ],
  'supports' => [ 'thumbnail', ],
  'menu_position' => 5,
  'menu_icon' => 'dashicons-format-gallery'


]);

register_post_type('news', [
  'public' => true,
  'labels' => [
    'name' => 'news',
    'all_items' => 'All News',
    'add_new' => 'Add News',
    'add_new_item' => 'Add New News',

  ],

  'supports' => [ 'thumbnail',  'editor' ],
  'menu_position' => 6,
  'menu_icon' => 'dashicons-admin-site-alt'

  ]);

  register_taxonomy('gal_tag', 'gallery', [
    'public' => true,
  ]);
  register_taxonomy('gal_tag_cat', 'gallery', [
    'public' => true,
    'hierarchical' => true
  ]);

  register_taxonomy('news_tag', 'news', [
    'public' => true,
  ]);
  register_taxonomy('news_tag_cat', 'news', [
    'public' => true,
    'hierarchical' => true
  ]);

  

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
    'default' => get_bloginfo('template_directory') . '/photo.png',
  ));
  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'eva_logo', array(
      'label' => 'Logo Upload',
      'description' => 'If you interested to change or update your logo you can do it.',
      'setting' => 'eva_logo',
      'section' => 'eva_header_area',
    ) ));
}


