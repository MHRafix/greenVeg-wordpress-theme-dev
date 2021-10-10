<?php
/**
 * The main template file
 * Template Name: Contact Page
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

 get_header(); ?> 

<section class="contact" id="contact">

  <div class="breadcrumb"> <ul>
            <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>/<li style="margin-left: 5px;"><?php the_title(); ?></li>
        </ul>
    </div>
    <h1 class="heading"> <span>contact</span> us </h1>

    <form action="">

        <div class="inputBox">
            <input type="text" placeholder="name">
            <input type="email" placeholder="email">
        </div>

        <div class="inputBox">
            <input type="number" placeholder="number">
            <input type="text" placeholder="subject">
        </div>

        <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>

        <input type="submit" value="send message" class="btn">

    </form>

</section>



<!-- newsletter section ends -->
<?php get_footer(); ?>