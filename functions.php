<?php 


// theme support

add_theme_support('menus');
add_theme_support('title-tag');
add_theme_support('widgets');
add_theme_support('custom-logo');
add_theme_support('custom-header');
add_theme_support('custom-background');
add_theme_support('woocommerce');

// register nav menus

register_nav_menus(
  array(
      
      'HM'   =>  'Header-Menu',
      'SM'   =>  'Social-Menu'

));


//Basic shortcode register
function basic_shortcode($atts,$content=null){
  return('<span style="background:red; color:white; padding:20px;">'.$content.'</span>');
}
add_shortcode('basic','basic_shortcode');


//remove action

remove_action('woocommerce_before_shop_loop','woocommerce_output_all_notices', 10);
remove_action('woocommerce_before_shop_loop','woocommerce_result_count', 20);
remove_action('woocommerce_before_main_content','woocommerce_breadcrumb', 20);
remove_action('woocommerce_before_shop_loop','woocommerce_catalog_ordering', 30);
remove_action('woocommerce_after_shop_loop','woocommerce_pagination', 10);
remove_action('woocommerce_before_shop_loop_item','woocommerce_template_loop_product_link_open', 10);

remove_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_product_thumbnail', 10);
remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title', 10);
remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_rating', 5);
remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_price', 10);
remove_action('woocommerce_before_single_product_summary','woocommerce_show_product_sale_flash', 10);
remove_action('woocommerce_single_product_summary','woocommerce_template_single_title', 5);
remove_action('woocommerce_single_product_summary','woocommerce_template_single_rating', 10);
remove_action('woocommerce_single_product_summary','woocommerce_template_single_price', 10);
remove_action('woocommerce_single_product_summary','woocommerce_template_single_excerpt', 20);
remove_action('woocommerce_single_product_summary','woocommerce_template_single_meta', 40);
remove_action('woocommerce_after_single_product_summary','woocommerce_output_related_products', 20);
remove_action('woocommerce_after_single_product_summary','woocommerce_output_product_data_tabs', 10);




// custom related product

add_action('woocommerce_after_single_product_summary','green_veg_output_related_products',20); 

function green_veg_output_related_products(){
  ?>
  <div class="box-container">

<?php woocommerce_output_related_products(); ?>
 
  </div>

  <?php
}

// custom tabs

add_action('woocommerce_after_single_product_summary','green_veg_output_product_data_tabs',10);
function green_veg_output_product_data_tabs(){
  ?>
<div class="description-reviews-addition">

 
        <?php woocommerce_output_product_data_tabs(); ?>


    </div>

  <?php
}

// custom title

add_action('woocommerce_single_product_summary','green_veg_template_single_title',5);

function green_veg_template_single_title(){
  ?>

 <div class="title-single-product">
           <h1 style="font-size: 50px!important"><?php the_title(); ?></h1>
       </div>
  <?php
}

// custom ratting

add_action('woocommerce_single_product_summary','green_veg_template_single_rating',10);

function green_veg_template_single_rating(){
  ?>
         <div class="stars">
          <?php woocommerce_template_single_rating(); ?>
     </div>

          

         

  <?php
}

// custom price

add_action('woocommerce_single_product_summary','green_veg_template_single_excerpt',20);

function green_veg_template_single_excerpt(){
  ?>

  <div class="short-desc">
            <?php the_excerpt(); ?>
            </div>
  <?php
}

// custom price

add_action('woocommerce_single_product_summary','green_veg_template_single_price',10);

function green_veg_template_single_price(){
  ?>
    <div class="price">
     <?php woocommerce_template_single_price(); ?>
     </div>
   
              
                
       
  <?php
}




// add product custom price

add_action('woocommerce_after_shop_loop_item_title','green_veg_product_loop_price', 10);

function green_veg_product_loop_price(){
  ?>
<div class="price"> <?php woocommerce_template_loop_price(); ?> </div>
  <?php 
}

// add product custom ratting

add_action('woocommerce_after_shop_loop_item_title','green_veg_product_loop_rating', 5);

function green_veg_product_loop_rating(){
  ?>

<?php woocommerce_template_loop_rating(); ?>

  <?php
}


// add product custom image

add_action('woocommerce_before_shop_loop_item_title','green_veg_product_thumbnail',10);
function green_veg_product_thumbnail(){
	?>
         <div class="icons">
                <?php echo do_shortcode('[ti_wishlists_addtowishlist]'); ?>
                 <?php echo do_shortcode('[yith_compare_button]'); ?><i href="#" class="fas fa-share"></i>
                <a href="<?php the_permalink(); ?>" class="fas fa-eye"></a>
            </div>
 <a href="<?php the_permalink(); ?>" ><?php woocommerce_template_loop_product_thumbnail(); ?></a> 
   	<?php
}


// add product custom title

add_action('woocommerce_shop_loop_item_title','green_veg_product_title',10);
function green_veg_product_title(){

echo '<h3><a href="'.get_the_permalink().'">'.get_the_title().'</a></h3>';
}


// footer location widget


add_action( 'widgets_init', 'green_veg_widget' );

function green_veg_widget(){
 
  // site location dynamic

    register_sidebar( array(
    'name'          =>esc_html__( 'Footer Location Widget', 'green veg' ),
    'description'   =>esc_html__( 'This is site locatin widget.....', 'green veg' ),
    'id'            => 'footer_location_widget',
    'before_widget' => ' <div class="box">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3> ',
  ) );

 register_sidebar( array(
    'name'          =>esc_html__( 'Footer About Widget', 'green veg' ),
    'description'   =>esc_html__( 'This is site about widget.....', 'green veg' ),
    'id'            => 'footer_about_widget',
    'before_widget' => ' <div class="box">',
    'after_widget'  => '</div>',
   
  ) );




  
}

// custom pagination

add_action('woocommerce_after_shop_loop','green_veg_pagination', 10); 
function green_veg_pagination(){

  global $wp_query;

  if ( $wp_query->max_num_pages <= 1 ) return; 

  $big = 999999999; // need an unlikely integer

  $pages = paginate_links( array(
      'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
      'format'    => '?paged=%#%',
      'current'   => max( 1, get_query_var('paged') ),
      'total'     => $wp_query->max_num_pages,
      'type'      => 'array',
      'prev_next' => true,
    'prev_text' => __('<i class="fa fa-angle-left" aria-hidden="true"></i>'),
    'next_text' => __('<i class="fa fa-angle-right" aria-hidden="true"></i>'),
  ) );
  
  if( is_array( $pages ) ) {
      $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
      echo '<div class="pagination-container"><ul class="list-inline list-unstyled">';
      foreach ( $pages as $page ) {
              echo "<li>$page</li>";
      }
     echo '</ul></div>';
    }
}






// show discount percantage on the sale flash

add_filter( 'woocommerce_sale_flash', 'add_percentage_to_sale_badge', 20, 3 );
function add_percentage_to_sale_badge( $html, $post, $product ) {

  if( $product->is_type('variable')){
      $percentages = array();

      // Get all variation prices
      $prices = $product->get_variation_prices();

      // Loop through variation prices
      foreach( $prices['price'] as $key => $price ){
          // Only on sale variations
          if( $prices['regular_price'][$key] !== $price ){
              // Calculate and set in the array the percentage for each variation on sale
              $percentages[] = round( 100 - ( floatval($prices['sale_price'][$key]) / floatval($prices['regular_price'][$key]) * 100 ) );
          }
      }
      // We keep the highest value
      $percentage = max($percentages) . '%';

  } elseif( $product->is_type('grouped') ){
      $percentages = array();

      // Get all variation prices
      $children_ids = $product->get_children();

      // Loop through variation prices
      foreach( $children_ids as $child_id ){
          $child_product = wc_get_product($child_id);

          $regular_price = (float) $child_product->get_regular_price();
          $sale_price    = (float) $child_product->get_sale_price();

          if ( $sale_price != 0 || ! empty($sale_price) ) {
              // Calculate and set in the array the percentage for each child on sale
              $percentages[] = round(100 - ($sale_price / $regular_price * 100));
          }
      }
      // We keep the highest value
      $percentage = max($percentages) . '%';

  } else {
      $regular_price = (float) $product->get_regular_price();
      $sale_price    = (float) $product->get_sale_price();

      if ( $sale_price != 0 || ! empty($sale_price) ) {
          $percentage    = round(100 - ($sale_price / $regular_price * 100)) . '%';
      } else {
          return $html;
      }
  }
  return '<span class="discount">' . esc_html__( '-', 'woocommerce' ) . ' ' . $percentage . '</span>';
}





