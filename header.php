<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title'); ?></title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
 <?php wp_head(); ?>
</head>
<body <?php //body_class(); ?>>

<!-- header section starts  -->

<header>

    <div class="header-1">

        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo"><i class="fas fa-shopping-basket"></i>green veg</a>

        <form action="" method="POST" class="search-box-container">
            <input type="search" id="search-box" name="s"  placeholder="search here...">
            
            <button type="search"><label for="search-box" class="fas fa-search"></label></button>
        </form>

    </div>

    <div class="header-2">

        <div id="menu-bar" class="fas fa-bars"></div>
  <nav class="navbar">
        <ul class="header-menu" style="display: flex!important;">
             <?php
             wp_nav_menu(
                array(

                'theme_location'   =>  'HM',
                'container_class'  =>  'navbar',
                'items_wrap'       =>  '<ul class="header-menu">%3$s</ul>'
               
               
                ));
                 
                ?>
           
        </ul> 
        </nav>

        <div class="icons">
            <span><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span>



             <a href="<?php echo esc_url(home_url('/'));?>cart" class="fas fa-shopping-cart"></a>
            <a href="<?php echo esc_url(home_url('/'));?>wishlist" class="fas fa-heart"></a>
            <a href="<?php echo esc_url(home_url('/'));?>my-account" class="fas fa-user-circle"></a>
        </div>

    </div>

</header>

<!-- header section ends -->
