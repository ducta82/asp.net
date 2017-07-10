<?php
/**
 * The template for displaying all single product
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sango
 */
$id = get_the_id();
get_header(); ?>
<?php the_breadcrumbs_product();?>
<div class="main-columns container space-20">
    <div class="row">
		 <div id="sidebar-main" class="col-md-9">
		 	<div id="content">
		 		<div class="product-info">
		 		<script type="text/javascript" src=" <?php echo THEME_URI;?>/catalog/view/javascript/jquery/elevatezoom/elevatezoom-min.js"></script>
				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'product' );
				endwhile; // End of the loop.
				?>
				</div>
				<div class="product-grid space-top-20 panel-v3 panel-primary related"> 
					<div class="panel-heading">
						<h4 class="panel-title">Sản phẩn liên quan</h4>
					</div>
					<div class="products-owl-carousel space-padding-0 panel-body ">
					    <div class="products-block products-owl bg-white " id="related-product">
							
							<?php
								$custom_taxterms = wp_get_object_terms( $id, 'cat-product', array('fields' => 'ids') );
								$args = array(
								'post_type' => 'product',
								'post_status' => 'publish',
								'posts_per_page' => -1, 
								'orderby' => 'rand',
								'tax_query' => array(
								    array(
								        'taxonomy' => 'cat-product',
								        'field' => 'id',
								        'terms' => $custom_taxterms
								    )
								),
								'post__not_in' => array ($id),
								);
								$related_items = new WP_Query( $args );
								if ($related_items->have_posts()) :
								while ( $related_items->have_posts() ) : $related_items->the_post();
								$related_product_link = get_the_permalink();
								$related_product_title = get_the_title();
								$related_id = get_the_id();
								$field = get_custom_field_by_id($related_id);
								?>
								    <div class="product-col-wrap ">
							            <div class="product-col border ">
							                <div class="product-block item-default " itemtype="http://schema.org/Product " itemscope>
							                    <div class="block-img text-center ">
							                        <div class="image ">
							                            <a class="img " itemprop="url " title="<?php echo $related_product_title;?>" href="<?php echo $related_product_link; ?>">
							                                <?php the_post_thumbnail();?>
							                            </a>
							                        </div>
							                    </div>
							                    <div class="product-meta ">
							                        <div class="top ">
							                            <h3 class="name " itemprop="name "><a href="<?php echo $related_product_link; ?>"><?php echo $related_product_title;?></a></h3>
							                            <div class="rating ">
							                                <span class="fa fa-stack "><i class="fa fa-star-o fa-stack-1x "></i></span>
							                                <span class="fa fa-stack "><i class="fa fa-star-o fa-stack-1x "></i></span>
							                                <span class="fa fa-stack "><i class="fa fa-star-o fa-stack-1x "></i></span>
							                                <span class="fa fa-stack "><i class="fa fa-star-o fa-stack-1x "></i></span>
							                                <span class="fa fa-stack "><i class="fa fa-star-o fa-stack-1x "></i></span>
							                            </div>
							                            <div class="price " itemtype="http://schema.org/Offer " itemscope itemprop="offers ">
							                                <span class="price-new "><?php echo $field['product_price'];?> VND</span>
							                                <meta content="<?php echo $field['product_price'];?> " itemprop="price ">
							                                <meta content=" " itemprop="priceCurrency ">
							                            </div>
							                        </div>
							                        <div class="bottom ">
							                            <div class="action ">
							                                <div class="cart ">
							                                    <button data-loading-text="Loading... " class="btn btn-dark btn-md " type="button " onclick="cart.addcart( '6328'); ">
							                                        <i class="md md-add-shopping-cart "></i>
							                                        <span class=" ">Mua hàng</span>
							                                    </button>
							                                </div>
							                                <div class="wishlist ">
							                                    <button class="btn btn-dark btn-md " type="button " title="Add to Wish List " onclick="wishlist.addwishlist( '6328'); "><i class="fa fa-heart "></i><span class=" ">Add to Wish List</span></button>
							                                </div>

							                                <div class="compare ">
							                                    <button class="btn btn-dark btn-md " type="button " title="Add to Compare " onclick="compare.addcompare( '6328'); "><i class="fa fa-refresh "></i><span class=" ">Add to Compare</span></button>
							                                </div>
							                                <!-- zoom image-->
							                                <div class="zoom ">
							                                    <a href="/image/catalog/san-gia-re/0212-1-8mm.jpg " class="product-zoom btn btn-dark btn-md " title="Sàn gỗ Ecofloor 0212-1-8mm ">
							                                        <i class="fa fa-search-plus "></i>
							                                        <span>zoom</span>
							                                    </a>
							                                </div>
							                                <p class="quickview space-margin-tb-10 ">
							                                    <a class="iframe-link " href="/index.php?route=themecontrol/product&amp;product_id=6328 " title="Quick View ">
							                                        <span>Quick View</span>
							                                    </a>
							                                </p>
							                            </div>
							                        </div>
							                    </div>
							                </div>
							            </div>
								    </div>
									<?php
									endwhile;
								endif;
								// Reset Post Data
								wp_reset_postdata();
							?>
							<script type="text/javascript">
								$(document).ready(function(){
								  $('.product-info .image a').click(
								    function(){  
								      $.magnificPopup.open({
								        items: {
								          src:  $('img',this).attr('src')
								        },
								        type: 'image'
								      }); 
								      return false;
								    }
								  );
								  var zoomCollection = '.product-info #image';
								    $( zoomCollection ).elevateZoom({
								        lensShape : "basic",
								    lensSize    : 150,
								    easing:true,
								    gallery:'image-additional-carousel',
								    cursor: 'pointer',
								    galleryActiveClass: "active"
								  });
								   var $carousel =  $("#related-product"); 
								   $carousel.owlCarousel({
								    autoPlay: false, //Set AutoPlay to 3 seconds
								    items : 4,
								    lazyLoad : true,
								    navigation: false,
								    navigationText:false,
								    rewindNav: false,
								    pagination:false

								    }); 
								});
							</script>
					    </div>
					</div>        
				</div>	
			</div>
		</div>
		<?php get_sidebar();?>
	</div>
</div>

<?php
get_sidebar();
get_footer();
