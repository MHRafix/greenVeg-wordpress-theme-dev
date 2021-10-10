
<!-- newsletter section starts  -->

<section class="newsletter">

    <h3>subscribe us for latest updates</h3>

    <form action="">
        <input class="box" type="email" placeholder="enter your email">
        <input type="submit" value="subscribe" class="btn">
    </form>

</section>

<!-- newsletter section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo"><i class="fas fa-shopping-basket"></i>green veg</a>
           
        <?php dynamic_sidebar("footer_about_widget");?>
            <div class="share">
          
          <?php
         
               wp_nav_menu(
                array(
           
              'theme_location'   => 'SM',
              'container_class'  => 'share',
              'items_wrap'       => '<ul class="social-menu">%3$s</ul>'



               ));

                 ?>
                     
          
            </div>
        </div>
        
        <?php dynamic_sidebar("footer_location_widget");?>

        <div class="box">
            <h3>quick links</h3>
          
                <?php
             wp_nav_menu(
                array(

                'theme_location'   =>  'HM',
                'container_class'  =>  'links',
                'items_wrap'       =>  '%3$s'
               
               
                ));
                 
                ?>
          
        </div>

        <div class="box">
            <h3>download app</h3>
            <div class="links">
                <a href="#">google play</a>
                <a href="#">window xp</a>
                <a href="#">app store</a>
            </div>
        </div>

    </div>

    <h1 class="credit"> created by <a href="https://www.uniquecoder.net"><span> Mehedi Hasan Rafiz </span></a> | all rights reserved! </h1>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    
    <?php wp_footer(); ?>
</body>
</html>