<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sango
 */

get_header(); ?>
<?php the_breadcrumbs_product();?>
<div class="main-columns container space-20">
    <div class="row">
    	<?php get_sidebar();?>
		 <div id="sidebar-main" class="col-md-9">
		 	<div id="content">
		 		<div id="blog-info" class="pav-blog wrapper blog-wrapper">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_format() );

					//the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
				</div>
			</div>
		</div>
		<?php get_sidebar();?>
	</div>
</div>

<?php
get_footer();
