<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
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
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 * @hooked WC_Structured_Data::generate_website_data() - 30
		 */
		do_action( 'woocommerce_before_main_content' );
	?>
<div id="sidebar-main" class="col-md-9">
    <header class="woocommerce-products-header">

		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

			<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>

		<?php endif; ?>

		<?php
			/**
			 * woocommerce_archive_description hook.
			 *
			 * @hooked woocommerce_taxonomy_archive_description - 10
			 * @hooked woocommerce_product_archive_description - 10
			 */
			do_action( 'woocommerce_archive_description' );
		?>

    </header>

		<?php if ( have_posts() ) : ?>
			<div class="product-filter space-padding-tb-10 clearfix">
				<div class="display">
				  <div class="btn-group group-switch">
				    <button type="button" id="list-view" class="btn btn-switch" data-toggle="tooltip" title="Danh sách"><i class="fa fa-th-list"></i></button>
				    <button type="button" id="grid-view" class="btn btn-switch active" data-toggle="tooltip" title="Lưới sản phẩm"><i class="fa fa-th-large"></i></button>
				  </div>
				</div>
				<div class="filter-right">
				  <div class="product-compare pull-right"><a href="/index.php?route=product/compare" class="btn btn-xs btn-primary " id="compare-total">So sánh sản phẩm (0)</a></div>
				  <div class="sort pull-right">
				    <span for="input-sort">Sắp xếp theo:</span>
				    <select id="input-sort" class="form-control" onchange="location = this.value;">
				                      <option value="/san-go-chau-au?sort=p.sort_order&amp;order=ASC">Mặc định</option>
				                              <option value="/san-go-chau-au?sort=pd.name&amp;order=ASC">Tên (A - Z)</option>
				                              <option value="/san-go-chau-au?sort=pd.name&amp;order=DESC">Tên (Z - A)</option>
				                              <option value="/san-go-chau-au?sort=p.price&amp;order=ASC" selected="selected">Giá (Thấp &gt; Cao)</option>
				                              <option value="/san-go-chau-au?sort=p.price&amp;order=DESC">Giá (Cao &gt; Thấp)</option>
				                              <option value="/san-go-chau-au?sort=rating&amp;order=DESC">Đánh giá (Cao nhất)</option>
				                              <option value="/san-go-chau-au?sort=rating&amp;order=ASC">Đánh giá (Thấp nhất)</option>
				                              <option value="/san-go-chau-au?sort=p.model&amp;order=ASC">Kiểu (A - Z)</option>
				                              <option value="/san-go-chau-au?sort=p.model&amp;order=DESC">Kiểu (Z - A)</option>
				                    </select>
				  </div>    
				  <div class="limit pull-right">
				    <span for="input-limit">Hiển thị:</span>
				    <select id="input-limit" class="form-control" onchange="location = this.value;">
				    <option value="/san-go-chau-au?limit=25">25</option>
				            <option value="/san-go-chau-au?limit=36" selected="selected">36</option>
				            <option value="/san-go-chau-au?limit=50">50</option>
				            <option value="/san-go-chau-au?limit=75">75</option>
				            <option value="/san-go-chau-au?limit=100">100</option>
				  </select>
				  </div>
				</div>

				</div>	
			<?php
				/**
				 * woocommerce_before_shop_loop hook.
				 *
				 * @hooked wc_print_notices - 10
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );
			?>

			<?php woocommerce_product_loop_start(); ?>

				<?php woocommerce_product_subcategories(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/**
						 * woocommerce_shop_loop hook.
						 *
						 * @hooked WC_Structured_Data::generate_product_data() - 10
						 */
						do_action( 'woocommerce_shop_loop' );
					?>

					<?php wc_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>

			<?php
				/**
				 * woocommerce_after_shop_loop hook.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php
				/**
				 * woocommerce_no_products_found hook.
				 *
				 * @hooked wc_no_products_found - 10
				 */
				do_action( 'woocommerce_no_products_found' );
			?>

		<?php endif; ?>
</div>
	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_sidebar' );
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		//do_action( 'woocommerce_sidebar' );
	?>

<?php get_footer( 'shop' ); ?>
