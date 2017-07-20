<?php
/**
 * The template for displaying taxonomy products
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sango
 */

get_header(); ?>
<?php the_breadcrumbs_product();?>
	<div class="main-columns container space-20">
   	 	<div class="row">
			<div id="sidebar-main" class="col-md-9">
            	<div id="content">
						<div class="clearfix"></div>
		                <div class="category-info clearfix hidden-xs hidden-sm">
		                    <div class="category-description wrapper">
		                        <?php
								$description = the_archive_description() ? the_archive_description() : '';
								echo $description;
								?>
		                    </div>
		                </div>
		                <div class="refine-search panel panel-v3 space-20">
		                    <div class="panel-heading">
		                        <h4 class="panel-title">Lọc tìm kiếm</h4>
		                    </div>
		                    <div class="panel-body">
		                        <div class="row">
		                            <div class="col-sm-12">
		                            	<?php
		                                	$term_id = get_queried_object()->term_id;
											$taxonomy_name = 'cat-product';
											$term_children = get_term_children( $term_id, $taxonomy_name );
											echo '<ul class="list-inline">';
											foreach ( $term_children as $child ) {
												$term = get_term_by( 'id', $child, $taxonomy_name );
												echo '<li><a href="' . get_term_link( $child, $taxonomy_name ) . '">' . $term->name . '</a></li>';
											}
											echo '</ul>';
		                                ?>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <!-- end refine-search -->
		                <div class="product-filter space-padding-tb-10 clearfix">
		                    <div class="display">
		                        <div class="btn-group group-switch">
		                            <button type="button" id="list-view" class="btn btn-switch" data-toggle="tooltip" title="" data-original-title="Danh sách"><i class="fa fa-th-list"></i></button>
		                            <button type="button" id="grid-view" class="btn btn-switch active" data-toggle="tooltip" title="" data-original-title="Lưới sản phẩm"><i class="fa fa-th-large"></i></button>
		                        </div>
		                    </div>
		                    <div class="filter-right">
		                        <div class="sort pull-right">
		                            <span for="input-sort">Sắp xếp theo:</span>
		                            <select id="input-sort" class="form-control" onchange="location = this.value;">
		                                <option value="<?=get_term_link( $term_id, $taxonomy_name );?>?order=ASC" <?php selected( $_GET['order'], 'ASC' ); ?>>Mặc định</option>
		                                <option value="<?=get_term_link( $term_id, $taxonomy_name );?>?order=ASC&amp;order_by=name" <?php selected( $_GET['order_by'].'&'.$_GET['order'], 'name&ASC' ); ?>>Tên (A - Z)</option>
		                                <option value="<?=get_term_link( $term_id, $taxonomy_name );?>?order=DESC&amp;order_by=name" <?php selected( $_GET['order_by'].'&'.$_GET['order'], 'name&DESC' ); ?>>Tên (Z - A)</option>
		                                <option value="<?=get_term_link( $term_id, $taxonomy_name );?>?order=ASC&amp;order_by=price" <?php selected( $_GET['order_by'].'&'.$_GET['order'], 'price&ASC' ); ?>>Giá (Thấp &gt; Cao)</option>
		                                <option value="<?=get_term_link( $term_id, $taxonomy_name );?>?order=DESC&amp;order_by=price" <?php selected( $_GET['order_by'].'&'.$_GET['order'], 'price&ASC' ); ?>>Giá (Cao &gt; Thấp)</option>
		                            </select>
		                        </div>
		                    </div>
		                </div>    
		                <div id="products" class="product-grid">
		                    <div class="products-block col-nopadding">
			                    <?php
									/* Start the Loop */
									if ( have_posts() ) : 
									global $i;
									$i = 1;
									$order_by = $_GET['order_by'];
									if($order_by == 'price'){
										function my_pre_get_posts( $query) {
											$order = $_GET['order'];
											if( is_admin() ) {
												return $query;
											}
											if( isset($query->query_vars['post_type']) && $query->query_vars['post_type'] == 'product' ) {
												$query->set('orderby', 'meta_value_num');	
												$query->set('meta_key', 'product_price');	 
												$query->set('order', $order); 
											}
											return $query;
										}
										add_action('pre_get_posts', 'my_pre_get_posts');
									}
									while ( have_posts() ) : the_post();

										/*
										 * Include the Post-Format-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
										 */
										get_template_part( 'template-parts/content', 'product' );
									$i++;		
									endwhile;

									the_posts_navigation();

								else :
									echo '<header class="page-header">
											<h1 class="page-title">Không có sản phẩm nào trong danh mục này</h1>
										</header>';
									//get_template_part( 'template-parts/content', 'none' );

								endif; ?>
		                    </div>
		                </div>        
	                </div>
				</div>
			<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php
get_footer();
