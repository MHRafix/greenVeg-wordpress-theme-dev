<?php
/**
 * The main template file
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



<section class="product" id="product">
<div class="breadcrumb"> <ul>
            <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>/<li style="margin-left: 5px;"><?php the_title(); ?></li>
        </ul>
    </div>
    <h1 class="heading">Deal <span>products</span></h1>

    <div class="box-container"> 
    <?php the_content(); ?> 
    <h1>CXFD</h1>
    </div>
</section>


 




<?php get_footer(); ?>