<?php
/**
 * Template part for displaying product
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sango
 */
$field = get_custom_field_by_id($id);
if(is_single()){
	?>
	<div class="row">
		<div class="product-info-bg">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 image-container">
				<div class="image">
					<?php if ( has_post_thumbnail() ) { ?>
					    <a href="<?php the_post_thumbnail_url( 'full' );?>" class="info_colorbox">
				            <img itemprop="image" src="<?php the_post_thumbnail_url( 'large' );?>" title="<?php the_title_attribute('','',0);?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true);?>" id="image" data-zoom-image="<?php the_post_thumbnail_url( 'full' );?>" class="product-image-zoom img-responsive">
				        </a>
				    <?php } ?>
				</div>
			</div>
			<div class="product-view col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
				<h1 class="title-product"><?php echo get_the_title();?></h1>
				<div class="rating">
				    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
				    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
				    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
				    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
				    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
				    <a href="#review-form" class="popup-with-form" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 đánh giá</a> / 
				    <a href="#review-form" class="popup-with-form" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Viết đánh giá</a>
				</div>
				<div class="price detail">
			        <ul class="list-unstyled">
			            <li>
			                <span class="price-new"><?php echo $field['product_price'];?> VND</span>
			            </li>
			        </ul>
			    </div>
			    <hr>
			    <ul class="list-unstyled">
			        <li><span class="check-box text-primary"><i class="fa fa-check"></i></span>Tình trạng:<?php echo $field['tinh_trang'];?></li>
			        <li><span class="check-box text-primary"><i class="fa fa-check"></i></span>Mã sản phẩm: <?php echo $field['ma_san_pham'];?></li>
			        <li><span class="check-box text-primary"><i class="fa fa-check"></i></span>Kích thước: <b><?php echo $field['kich_thuoc'];?></b></li>
			    </ul>
			    <hr>
			    <div id="product">
			    	<div class="product-meta">
		            <div class="clearfix">
		                <div style="color: white;background: #f26b35;padding: 5px;">
		                    <li class="first">Giá luôn cạnh tranh nhất - Hàng luôn có sẵn tại kho</li>
		                    <li> JANHOME là cty có uy tín hơn 13 năm tại Việt Nam - có hệ thống trên toàn quốc</li>
		                    <li>Chính sách bảo hành theo nhà cung cấp</li>
		                    <li class="last">Tư vấn &amp; CSKH : 1800 0022 - Email: info@janhome.vn</li>
		                </div>
		            </div>
		            <div class="clearfix">
		                <div class="wishlist pull-left space-padding-r20">
		                    <a data-toggle="tooltip" class="text-uppercase" title="" onclick="wishlist.addwishlist('6291');" data-original-title="Thêm vào DS yêu thích"><i class="fa fa-heart"></i><span>Thêm vào DS yêu thích</span>
		                                    </a>
		                </div>

		                <div class="compare pull-left">
		                    <a data-toggle="tooltip" class="text-uppercase" title="" onclick="compare.addcompare('6291');" data-original-title="Compare"><i class="fa fa-refresh"></i><span>Compare</span></a>
		                </div>
			            </div>
			        </div>
			        <div class="clearfix"></div>
			 		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58e25a78ab099727"></script> 
			        <div class="addthis_inline_share_toolbox_it1q"></div>
			    </div><!--#product-->
			</div>
		</div>
	</div><!-- end row-->
	<div class="tab-v4">
		<div class="tab-heading">
			<ul class="nav nav-tabs" role="tablist">
	            <li class="active"><a href="#tab-description" data-toggle="tab">Mô tả</a></li>
	            <li><a href="#tab-specification" data-toggle="tab">Đặc tính</a></li>
	            <li><a href="#tab-review" data-toggle="tab">Đánh giá (0)</a></li>
	        </ul>
		</div>
		<div class="tab-content width-80">
			<div class="tab-pane active" id="tab-description"><?php the_content();?></div>
			<div class="tab-pane" id="tab-specification"><?php echo $field['dactinh_sp'];?></div>
			<div class="tab-pane" id="tab-review">
				<?php 
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				?>
			</div>
		</div>
	</div>
	<?php
}else{
	global $i;
	$price = get_field('product_price',get_the_id());
	$post_count = $wp_query->post_count;
	$posts_per_page = $wp_query->query_vars['posts_per_page'];
	$start_div = $i == 1 ? '<div class="row products-row">' : '';
	$end_div = $i%4 == 0 && $i !== $post_count &&  $i !== $posts_per_page? '</div><div class="row products-row">' : '';
	$end_total = $i == $post_count || $i == $posts_per_page ? '</div><!--end row-->' : '';
	echo $start_div;
	?>	
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 product-col border">
            <div class="product-block item-default" itemtype="http://schema.org/Product" itemscope="">
                <div class="block-img text-center">
                    <div class="image">
                        <a class="img" itemprop="url" title="Sàn gỗ Ecofloor 0212-1-8mm" href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('large'); ?>
                        </a>
                    </div>
                </div>
                <div class="product-meta">
                    <div class="top">
                        <h3 class="name" itemprop="name"><a href="https://sango.com.vn/san-go-ecofloor-0212-1-8mm.html"><?php the_title();?></a></h3>
                        <!-- <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                        </div> -->
                        <div class="price" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
                            <span class="price-new"><?php echo $price;?>  VNĐ</span>
                            <meta content="<?php echo $price;?>" itemprop="price">
                            <meta content="" itemprop="priceCurrency">
                        </div>
                        <p class="description" itemprop="description"><?php echo wp_trim_words( get_the_content(), 40, '...' );?></p>
                    </div>
                    <!-- <div class="bottom">
                        <div class="action">
                            <div class="cart">
                                <button data-loading-text="Loading..." class="btn btn-dark btn-md" type="button" onclick="cart.addcart('6328');">
                                    <i class="md md-add-shopping-cart"></i>
                                    <span class="">Mua hàng</span>
                                </button>
                            </div>
                            <div class="wishlist">
                                <button class="btn btn-dark btn-md " type="button" title="Thêm vào DS yêu thích" onclick="wishlist.addwishlist('6328');"><i class="fa fa-heart"></i><span class="">Thêm vào DS yêu thích</span></button>
                            </div>
                    
                            <div class="compare">
                                <button class="btn btn-dark btn-md" type="button" title="So sánh sản phẩm dịch vụ" onclick="compare.addcompare('6328');"><i class="fa fa-refresh"></i><span class="">So sánh sản phẩm dịch vụ</span></button>
                            </div>
                            zoom image
                            <div class="zoom ">
                                <a href="https://sango.com.vn/image/catalog/san-gia-re/0212-1-8mm.jpg" class="product-zoom btn btn-dark btn-md" title="Sàn gỗ Ecofloor 0212-1-8mm">
                                    <i class="fa fa-search-plus"></i>
                                    <span>zoom</span>
                                </a>
                            </div>
                    
                            <p class="quickview space-margin-tb-10">
                                <a class="iframe-link" href="https://sango.com.vn/index.php?route=themecontrol/product&amp;product_id=6328" title="Quick View">
                                    <span>Quick View</span>
                                </a>
                            </p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
	<?php
	echo $end_div;
	echo $end_total;
}
