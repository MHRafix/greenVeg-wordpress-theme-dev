<?php
/**
 * The main template file
 * Template Name: Home Page
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Green Veg
 * @since Green Veg 1.0
 */

 get_header(); ?>


<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/my-image/home-img.png" alt="">
    </div>

    <div class="content">
        <span>pure and organic</span>
        <h3>your daily need products</h3>
        <a href="<?php echo esc_url(home_url('/')); ?>shop" class="btn">Quick Shop</a>
    </div>

</section>

<!-- home section ends -->

<!-- banner section starts  -->

<section class="banner-container">

    <div class="banner">
        <a href="<?php echo esc_url(home_url('/')); ?>product/শুক্রবারের-প্যাকেজ"><img src="<?php echo get_template_directory_uri(); ?>/images/banner-1.jpg" alt=""></a>
        <div class="content">
            <h3>weekly package</h3>
            <p>upto 45% off</p>
            <a href="<?php echo esc_url(home_url('/')); ?>product/শুক্রবারের-প্যাকেজ" class="btn">quick shop</a>
        </div>
    </div>

    <div class="banner">
        <a href="<?php echo esc_url(home_url('/')); ?>product/শুক্রবারের-প্যাকেজ"><img src="<?php echo get_template_directory_uri(); ?>/images/banner-2.jpg" alt=""></a>
        <div class="content">
            <h3>limited offer</h3>
            <p>upto 50% off</p>
            <a href="<?php echo esc_url(home_url('/')); ?>product/শুক্রবারের-প্যাকেজ" class="btn">quick shop</a>
        </div>
    </div>

</section>

<!-- banner section ends -->

<!-- category section starts  -->

<section class="category" id="category">

    <h1 class="heading">shop by <span>category</span></h1>

    <div class="box-container2">

       
          
           
          <?php echo do_shortcode('[product_categories]');?>

        
        

    </div>

</section>

<!-- category section ends -->

<!-- product section starts  -->

<section class="product" id="product">

    <h1 class="heading">latest <span>products</span></h1>

    <div class="box-container">
        <?php echo do_shortcode('[recent_products limit="9" ]'); ?>
       
    </div>


    <h1 class="heading">Best Selling <span>products</span></h1>

    <div class="box-container">  
        <?php echo do_shortcode('[best_selling_products limit="6"]'); ?>
    </div>
 <div class="see_all2">
             <a href="<?php echo esc_url(home_url('/')); ?>best sale" class="btn">Explore All...</a>
         </div>
</section>

<!-- product section ends -->

<!-- deal section starts  -->

<section class="deal" id="deal">

    <div class="content">

        <h3 class="title">deal of the day</h3>
      <!--   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam possimus voluptates commodi laudantium! Doloribus sint voluptatibus quaerat sequi suscipit nulla?</p> -->

       
           <h1 style="font-size: 40px; font-weight: bold;">50% Off</h1> 
           <span style="
    font-size: 18px;margin-left: 60px;line-height: 0px;font-family: unset;font-weight: 700;
">On All Products</span>
        </div>

        <a href="<?php echo esc_url(home_url('/')); ?>deals" class="btn">Explore Now</a>



</section>
<section class="product" id="product">

    <h1 class="heading">Discount <span>products</span></h1>

    <div class="box-container">  
        <?php echo do_shortcode('[sale_products limit="6"]'); ?>
    </div>
             <div class="see_all">
             <a href="<?php echo esc_url(home_url('/')); ?>discount" class="btn">Explore All...</a>
         </div>
      
</section>
<!-- deal section ends -->

<!-- contact section starts  -->



<!-- contact section ends -->

<?php get_footer(); ?>