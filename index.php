<?php
/* 
* This template for displaying the header
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- <?php wp_nav_menu([
    'theme_location' => 'mm',
    'container_class'   => 'new_id',
    'container_id'   => ' ',
    'menu_class'     => ' ',
    'menu_id'        => ' ',
]); ?>




<div id="header_area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a class="text-success" href=""><span >D</span> Events </a>
                <h1><?php bloginfo('name'); ?> </h1>
                <h1><?php bloginfo('description'); ?> </h1>
                <h1><?php bloginfo('home'); ?> </h1>
                <h1><?php bloginfo('url'); ?> </h1>
            </div>
            <div class="col-md-9">
                <img src="<?php header_image(); ?>" alt="">
            </div>
        </div>
    </div>
</div> -->

<!-- <?php wp_footer(); ?> -->

<!-- 
<div class='left_sidebar'>
    <?Php dynamic_sidebar('ls') ?>
</div>
<div class="rigth_sidebar">
<?Php dynamic_sidebar('rs') ?>
</div> -->

<?php while(have_posts()) : the_post(); ?>

<div class="posts">
    <h2><?php the_title();?></h2>
    <?php the_post_thumbnail(); ?>
    <p><?php the_content(); ?></p>
</div>
    
    </body>
</html>

<?php endwhile; ?>