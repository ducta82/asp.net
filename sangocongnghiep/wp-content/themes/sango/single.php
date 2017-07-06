<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sango
 */

get_header(); ?>
<div class="container">
    <div class="breadcrumbs">

        <ul class="list-unstyled breadcrumb-links">
            <li><a href="/">Trang chủ</a></li>
            <li><a href="/san-go-ecofloor-8mm">Sàn gỗ Ecofloor 8mm</a></li>
            <li><a href="/san-go-gia-re">Sàn gỗ giá rẻ</a></li>
            <li><a href="/san-go-ecofloor">Sàn gỗ Ecofloor</a></li>
            <li><a href="/san-go-ecofloor-0272-23-8mm.html">Sàn gỗ Ecofloor 0272-23-8mm</a></li>
        </ul>
    </div>
</div>
<div class="main-columns container space-20">
    <div class="row">
		 <div id="sidebar-main" class="col-md-9">
		 	<div class="product-info">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

				the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			</div>
		</div>
		<?php get_sidebar();?>
	</div>
</div>

<?php
get_sidebar();
get_footer();
