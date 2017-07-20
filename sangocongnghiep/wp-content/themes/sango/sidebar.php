<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sango
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
$id_aside = is_tax( 'cat-product') || is_singular('product') ? 'sidebar-right' : 'sidebar-left';
?>
<aside id="<?php echo $id_aside;?>" class="col-md-3">
<column id="column-right" class="hidden-xs sidebar">
    <div class="widget-html">
        <div class="widget-inner">
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>
    </div>
</column>
</aside>
