<?php get_header(); ?>
<?php
/**
 * woocommerce template file
 *
 *
 * @package WordPress
 * @subpackage JBST
 * @since 2.0.6
 */
get_header('shop'); 
if ( is_singular( 'product' ) ) {
     woocommerce_content();
  }else{
   //For ANY product archive.
   //Product taxonomy, product search or /shop landing
    woocommerce_get_template( 'archive-product.php' );
    woocommerce_get_template( 'single-product.php' );
  }
get_footer();

?>