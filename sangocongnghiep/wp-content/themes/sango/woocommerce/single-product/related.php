<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

	<section class="related products">

		<h2><?php esc_html_e( 'Related products', 'woocommerce' ); ?></h2>

		<?php woocommerce_product_loop_start(); 
			$i = 1;
			$related_count = count($related_products);
		?>
			
			<?php foreach ( $related_products as $related_product ) : ?>

				<?php
				 	$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object );

					//wc_get_template_part( 'content', 'product' ); 
					global $product;
					// Ensure visibility
					if ( empty( $product ) || ! $product->is_visible() ) {
						return;
					}
					$start_div = $i == 1 ? '<div class="row products-row">' : '';
					$end_div = $i%4 == 0 && $i !== $related_count ? '</div><div class="row products-row">' : '';
					$end_total =  $i == $related_count ? '</div>' : '';
					echo $start_div;
					?>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 product-col border">
						<div class="product-block item-default" itemtype="http://schema.org/Product" itemscope> 
					  		<div class="block-img text-center">
						<?php
						/**
						 * woocommerce_before_shop_loop_item hook.
						 *
						 * @hooked woocommerce_template_loop_product_link_open - 10
						 */
						do_action( 'woocommerce_before_shop_loop_item' );

						/**
						 * woocommerce_before_shop_loop_item_title hook.
						 *
						 * @hooked woocommerce_show_product_loop_sale_flash - 10
						 * @hooked woocommerce_template_loop_product_thumbnail - 10
						 */
						do_action( 'woocommerce_before_shop_loop_item_title' );
						?>
							</a>
							</div>
					    	<div class="product-meta">      
					      		<div class="top">
						<?php
						/**
						 * woocommerce_shop_loop_item_title hook.
						 *
						 * @hooked woocommerce_template_loop_product_title - 10
						 */
						//do_action( 'woocommerce_shop_loop_item_title' );
							echo '<h3 class="name" itemprop="name"><a href="' . get_permalink(). '">' . get_the_title() . '</a></h3>';

						/**
						 * woocommerce_after_shop_loop_item_title hook.
						 *
						 * @hooked woocommerce_template_loop_rating - 5
						 * @hooked woocommerce_template_loop_price - 10
						 */
						do_action( 'woocommerce_after_shop_loop_item_title' );
						?>
								</div>
						    	<div class="bottom">
						       		<div class="action">
						<?php
						/**
						 * woocommerce_after_shop_loop_item hook.
						 *
						 * @hooked woocommerce_template_loop_product_link_close - 5
						 * @hooked woocommerce_template_loop_add_to_cart - 10
						 */
						remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_product_link_close', 5 );
						do_action( 'woocommerce_after_shop_loop_item' );
						?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php 
					echo $end_div;
					echo $end_total;
					$i++; endforeach; ?>

		<?php woocommerce_product_loop_end(); ?>

	</section>

<?php endif;

wp_reset_postdata();
