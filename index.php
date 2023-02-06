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
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="header_area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a class="text-success" href=""><span >D</span> Events </a>
            </div>
            <div class="col-md-9">
                <ul>
                    <li>Home</li>
                    <li>About</li>
                    <li>Bolgs</li>
                </ul>
            </div>
        </div>
    </div>
</div>

    <?php wp_footer(); ?>
    
</body>
</html>