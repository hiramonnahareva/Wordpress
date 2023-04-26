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
            <img src="<?php echo get_template_directory_uri(); ?>/logo.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/photo.png" alt="">
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
    
    </body>
</html>