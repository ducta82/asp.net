<?php
/**
 * Loop Add to Cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/add-to-cart.php.
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
if ( ! defined( 'YITH_WCWL' ) ) {
	exit;
} // Exit if accessed directly
global $product;

echo apply_filters( 'woocommerce_loop_add_to_cart_link',
	sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">%s</a>',
		esc_url( $product->add_to_cart_url() ),
		esc_attr( isset( $quantity ) ? $quantity : 1 ),
		esc_attr( $product->get_id() ),
		esc_attr( $product->get_sku() ),
		esc_attr( isset( $class ) ? $class : 'button' ),
		esc_html( $product->add_to_cart_text() )
	),
$product );
if(is_product_category()){
	?>
	<div class="yith-wcwl-add-to-wishlist add-to-wishlist-<?php echo $product_id ?>">
		<?php if( ! ( $disable_wishlist && ! is_user_logged_in() ) ): ?>
		    <div class="yith-wcwl-add-button <?php echo ( $exists && ! $available_multi_wishlist ) ? 'hide': 'show' ?>" style="display:<?php echo ( $exists && ! $available_multi_wishlist ) ? 'none': 'block' ?>">
			<a href="<?php echo get_the_permalink().'?add_to_wishlist='.$product->get_id();?>" rel="nofollow" data-product-id="<?php echo $product->get_id();?>" data-product-type="<?php echo $product->get_type();?>" class="add_to_wishlist single_add_to_wishlist button alt" ><i class="fa fa-heart"></i>
			</a>
			<img src="<?php echo esc_url( YITH_WCWL_URL . 'assets/images/wpspin_light.gif' ) ?>" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />

		    </div>

		    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
		        <span class="feedback"><?php echo $product_added_text ?></span>
		        <a href="<?php echo esc_url( $wishlist_url )?>" rel="nofollow">
		            <?php echo apply_filters( 'yith-wcwl-browse-wishlist-label', $browse_wishlist_text )?>
		        </a>
		    </div>

		    <div class="yith-wcwl-wishlistexistsbrowse <?php echo ( $exists && ! $available_multi_wishlist ) ? 'show' : 'hide' ?>" style="display:<?php echo ( $exists && ! $available_multi_wishlist ) ? 'block' : 'none' ?>">
		        <span class="feedback"><?php echo $already_in_wishslist_text ?></span>
		        <a href="<?php echo esc_url( $wishlist_url ) ?>" rel="nofollow">
		            <?php echo apply_filters( 'yith-wcwl-browse-wishlist-label', $browse_wishlist_text )?>
		        </a>
		    </div>

		    <div style="clear:both"></div>
		    <div class="yith-wcwl-wishlistaddresponse"></div>
		<?php endif; ?>
	</div>
	<div class="clear"></div>
	<?php
}
