<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sango
 */

get_header(); ?>
<?php the_breadcrumbs_product();?>
<div class="container">
	<div class="row">
		<?php get_sidebar();?>
		<section id="sidebar-main" class="col-md-9">
    		<div id="content">
		<?php if ( have_posts() ) : ?>
				<div class="pav-header">
				<h1><?php single_cat_title();?></h1>
		        </div>
		        <div class="pav-category">
		        	<div class="pav-blogs">
		        		<div class="secondary clearfix">
						<?php
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content', get_post_format() );
						endwhile;
							the_posts_navigation();
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div><!-- #primary -->
</div>
<?php
get_footer();
