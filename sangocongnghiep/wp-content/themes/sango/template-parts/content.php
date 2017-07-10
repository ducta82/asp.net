<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sango
 */
if(is_category()){
?>
<div class="pavcol20">
	<div class="blog-item">
	    <div class="blog-body image pavcol2">
	        <?php the_post_thumbnail( 'post-thumbnail', ['class' => 'image space-padding-tb-20'] );?>
	        <div class="pavcol2 info">
	            <footer>
	                <div class="blog-meta">
	                </div>
	                <div class="blog-body">
	                    <header class="blog-header clearfix">
	                        <h4 class="blog-title">	<a href="<?php the_permalink(); ?>" title="  Sàn gỗ Malaysia chịu nước số 1 thế giới !"><?php the_title();?></a></h4>
	                    </header>
	                    <div class="description">
	                        <?php echo wp_trim_words( get_the_content(), 100, '...' );?>
	                    </div>
	                </div>
	            </footer>
	        </div>
	    </div>
	</div>
</div>
<?php 
}else{ ?>
	<div class="blog-content clearfix">
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'sango' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );
			?>
		</div>
	</div>
	<div class="blog-bottom clearfix">
		<?php
			$id = get_the_id();
			$custom_taxterms = wp_get_object_terms( $id, 'category', array('fields' => 'ids') );
			$args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => -1, 
			'orderby' => 'rand',
			'tax_query' => array(
			    array(
			        'taxonomy' => 'category',
			        'field' => 'id',
			        'terms' => $custom_taxterms
			    )
			),
			'post__not_in' => array ($id),
			);
			$related_items = new WP_Query( $args );
			echo '<h4>Bài viết cùng chuyên mục: </h4>';
			if ($related_items->have_posts()) :
			echo '<ul>';	
				while ( $related_items->have_posts() ) : $related_items->the_post();
				echo '<li><a href="'.get_the_permalink().'">'.get_the_title().'</a></li>';	
				endwhile;
			echo '</ul>';
			endif;
			wp_reset_postdata();
		?>
	</div>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58e25a78ab099727"></script> 
    <div class="addthis_inline_share_toolbox_it1q"></div>
<?php
}


