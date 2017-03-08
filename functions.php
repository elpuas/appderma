<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */

// Appderma styles

 function appderma_scripts() {

   wp_enqueue_style( 'appderma-google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:400,700', false );

   wp_enqueue_style( 'appderma-style', get_stylesheet_directory_uri() . '/assets/css/main.min.css' );
 }
   add_action( 'wp_enqueue_scripts', 'appderma_scripts' );

 if ( ! function_exists( 'storefront_credit' ) ) {
 	/**
 	 * Display the theme credit
 	 *
 	 * @since  1.0.0
 	 * @return void
 	 */
 	function storefront_credit() {
 		?>
 		<div class="site-info">
 			<?php echo esc_html( apply_filters( 'storefront_copyright_text', $content = '&copy; ' . get_bloginfo( 'name' ) . ' ' . date( 'Y' ) ) ); ?>
 			<?php if ( apply_filters( 'storefront_credit_link', true ) ) { ?>
 			<?php printf( esc_attr__( '%1$s designed by %2$s.', 'storefront' ), 'AppDerma', '<a href="http://www.elpuas.com" title="3LPU4S - Creative Technologist" rel="author">3LPU4S</a>' ); ?>
 			<?php } ?>
 		</div><!-- .site-info -->
 		<?php
 	}
 }

 //Page Slug Body Class
        function add_slug_body_class( $classes ) {
        global $post;
        if ( isset( $post ) ) {
        $classes[] = $post->post_type . '-' . $post->post_name;
        }
        return $classes;
        }
        add_filter( 'body_class', 'add_slug_body_class' );

 // Add Tag Shortcodes - Author Remi Corson

function woo_products_by_tags_shortcode( $atts, $content = null ) {

  // Get attribuets
      extract( shortcode_atts( array(
      'per_page' 		=> '24', // No Pagination
      'columns' 		=> '4',
      'orderby'   	=> 'title',
      'order'     	=> 'desc',
      'category'		=> '',
      'tags'          => '',
          ), $atts ) );

  ob_start();

  // Define Query Arguments
  $args = array(
      'post_type'				=> 'product',
      'post_status' 			=> 'publish',
      'ignore_sticky_posts'	=> 1,
      'orderby' 				=> $ordering_args['orderby'],
      'order' 				=> $ordering_args['order'],
      'posts_per_page' 		=> $per_page,
      'product_tag'           => $tags,
    'tax_query' 			=> array(
        array(
          'taxonomy' 		=> 'product_cat',
          'terms' 		=> array( esc_attr( $category ) ),
          'field' 		=> 'slug',
          'operator' 		=> $operator

        ))
    );

ob_start();

    $products = new WP_Query( apply_filters( 'woocommerce_shortcode_products_query', $args, $atts ) );

    $woocommerce_loop['columns'] = $columns;

    if ( $products->have_posts() ) : ?>

      <?php woocommerce_product_loop_start(); ?>

        <?php while ( $products->have_posts() ) : $products->the_post(); ?>

          <?php wc_get_template_part( 'content', 'product' ); ?>

        <?php endwhile; // end of the loop. ?>

      <?php woocommerce_product_loop_end(); ?>

    <?php endif;

    woocommerce_reset_loop();
    wp_reset_postdata();

    return '<div class="woocommerce columns-' . $columns . '">' . ob_get_clean() . '</div>';
  }

add_shortcode("woo_products_by_tags", "woo_products_by_tags_shortcode");


// Remove Billing Postal Code

add_filter( 'woocommerce_checkout_fields' , 'appderma_override_checkout_fields' );

function appderma_override_checkout_fields( $fields ) {
 unset($fields['billing']['billing_postcode']);

 return $fields;
}

// Change Order Comments

add_filter( 'woocommerce_checkout_fields' , 'appderma_order_comments_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function appderma_order_comments_checkout_fields( $fields ) {
 $fields['order']['order_comments']['placeholder'] = 'A que Hora te gustaria la entrega';
 return $fields;
}
