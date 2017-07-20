<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sango
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="<?php echo THEME_URI;?>/image/catalog/janhome.png" rel="icon" />
    <link href="<?php echo THEME_URI;?>/catalog/view/theme/lexus_golmart/stylesheet/bootstrap.css" rel="stylesheet" />
<link href="<?php echo THEME_URI;?>/catalog/view/theme/lexus_golmart/stylesheet/stylesheet.css" rel="stylesheet" />
<link href="<?php echo THEME_URI;?>/catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
<link href="<?php echo THEME_URI;?>/catalog/view/theme/lexus_golmart/stylesheet/animate.css" rel="stylesheet" />
<link href="<?php echo THEME_URI;?>/catalog/view/theme/lexus_golmart/stylesheet/material-design-iconic-font.min.css" rel="stylesheet" />
<link href="<?php echo THEME_URI;?>/catalog/view/javascript/jquery/magnific/magnific-popup.css" rel="stylesheet" />
<link href="<?php echo THEME_URI;?>/catalog/view/javascript/jquery/owl-carousel/owl.carousel.css" rel="stylesheet" />
<link href="<?php echo THEME_URI;?>/catalog/view/theme/lexus_golmart/stylesheet/homebuilder.css" rel="stylesheet" />
<link href="<?php echo THEME_URI;?>/catalog/view/theme/lexus_golmart/stylesheet/sliderlayer/css/typo.css" rel="stylesheet" />

<!-- CUSTOM FONT -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans"/>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans"/>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans"/><style>
body {font-family: ; font-size: 15}
#header-main {font-family: ; font-size: 15}
#module-container {font-family: ; font-size: 15}
</style>
<?php 
if(is_home()){
  echo '<style>
          body[class*="-home"] .header-v3 .pav-verticalmenu, body[class*="-home"] .header-v2 .pav-verticalmenu {
    display: block;}
       </style>';
}else{
  echo '<style>
          #header-layout .dropdown:hover .pav-verticalmenu {
           display: block;
           position: absolute;
          }
       </style>';
}
wp_head(); ?>
</head>
<?php 
  $home_cls = is_home() ? 'common-home page-home layout-boxed-lg': '' ;
  $catproduct_cls = is_tax('cat-product') ? 'page-category layout-boxed-lg': '' ;
  $product_cls = is_singular('product') ? 'page-product layout-boxed-lg': '' ;
  $cat_cls = is_single() && !is_singular('product') ? 'pavblog-blog page-pavblog-blog layout-boxed-lg': '' ;
  $cat_cls = is_category() ? 'pavblog-category page-pavblog-category layout-boxed-lg': '' ;
  global $address, $shop_name;
  $shop_name = ot_get_option( 'shop_name');
  $address = get_terms( 'cat-address', array(
                  'order'=> 'DESC',
                  'orderby' => 'none',
                  'hide_empty' => 0,
                  'parent' => 0
              ) ); 
?>
<body <?php body_class($home_cls.$catproduct_cls.$product_cls.$cat_cls.$cat_cls); ?>>
<div class="row-offcanvas row-offcanvas-left">
<div id="page">
<header id="header-layout"  class="header-v3">
<div class="header-top">
  <div class="container">
    <div class="inside">
      <div class="row">
        <div class="col-xs-12 col-sm-5 col-md-5 text-center">
          <!-- logo -->
          <div id="logo" class="logo-store">
          <?php 
            $logo = ot_get_option( 'logo_header');
            $phone_number_contact = ot_get_option( 'phone_number_contact');
            $site_title = get_bloginfo( 'name' );
          ?>
            <a href="/" class="img-responsive">
              <img src="<?php echo $logo;?>" title="<?php echo $site_title;?>" alt="<?php echo $site_title;?>" />
              </a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
           	<div class=" autosearch-wrapper">
        			 <form role="search" method="get" id="searchform"
                class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
          			<div id="search0" class="input-group">
          				<input class="search_query form-control" type="text" value="<?php echo get_search_query(); ?>" name="s" size="35" autocomplete="off" placeholder="Tìm sản phẩm tại đây.." name="search">	
                  <div class="input-group-btn">
                      <select name="post_type" class="category_filter">
                        <option value="post">Bài viết</option>
                        <option value="product">Sản phẩm</option>   
                      </select>
                  </div>
          				<button type="submit" class="button-search autosearch-submit btn btn-default"><i class="fa fa-search"></i></button>    
          			</div>
        			</form>
      			<div class="clear clr"></div>
    		  </div>
        </div>  
      </div>
    	<div class="header-contact">
      <?php
        foreach ($address as  $value) {
          $show = get_field('show_address_header','cat-address_'.$value->term_id);
          if($show == 'yes'){
            echo '<div class="provinces"><a href="'.site_url().'" class="title_kho" target="_blank" title="'.$shop_name.' '.$value->name.'"><span class="dt" style="text-transform: uppercase;">'.$value->name.'</span></a><ul class="cont_add">';
            $args = array(
              'post_type' => 'address',
              'posts_per_page' => -1,
              'orderby' => 'date',
              'post_status' => 'publish',
              'tax_query' => array(
                      array(
                          'taxonomy' => 'cat-address',
                          'field'    => 'term_id',
                          'terms'    => $value->term_id
                      ),
                  ),
              );              
            $the_query = new WP_Query( $args );
            if($the_query->have_posts() ) { 
              while ( $the_query->have_posts() ) : $the_query->the_post(); 
              $id = get_the_id();
              $phone = get_field('address_phone',$id);
              echo '<li>
                      <a>'.$shop_name.' <span style="color:#ff3333;font-weight:bold;">'.get_the_title().'</span></a>
                      <div class="des_cont">'.get_the_content().'<b></br><a style="color:#ff3333;font-weight:bold;" href="tel:'.$phone.'">ĐT: '.$phone.'</a> </b></div>
                  </li>
                  <hr>';
              endwhile; wp_reset_postdata();  
            }
            echo '</ul></div>';
          }
        }
      ?>
      <div class="hotline hidden-xs">
        <span class="hl">HOTLINE(miễn phí cước gọi): <a href="tel:<?php echo $phone_number_contact;?>" style="font-size: 40px; color:#F26B35;"><?php echo $phone_number_contact;?></a> </span><br>
      </div>
      <div class="hotline hidden-sm hidden-lg hidden-md hidden-sm" ><span class="hl">HOTLINE(miễn phí cước gọi): <a href="tel:<?php echo $phone_number_contact;?>" style="font-size: 40px; color:#F26B35;"><?php echo $phone_number_contact; ?></a> </span><br>
      </div>
    </div>
    </div>
  </div>
  
</div>
 
<div class="header-bottom">
    <div class="container">
        <div class="row no-margin">
            <div class="col-xs-12 col-sm-0 col-md-0 col-lg-2 hidden-sm hidden-xs hidden-md no-padding">
                <div class="dropdown">
                    <div class="panel panel-default space-top-10">
                        <div class="bg-default panel-heading">
                            <h4 class="panel-title white font-size-14">
                              Danh Mục Sản Phẩm
                              <span class="pull-right fa fa-angle-down red font-size-18"></span>
                            </h4>
                        </div>
                    </div>
                    <div class="pav-verticalmenu">
                        <div class="navbar navbar-default">
                            <div class="verticalmenu" role="navigation">
                                <div class="navbar-header">
                                    <a href="javascript:;" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </a>
                                    <?php
                                         /**
                                        * Displays a navigation menu.
                                        *
                                        * @since 3.0.0
                                        */
                                         $MenuDoc_Walker_Nav_Menu = new MenuDoc_Walker_Nav_Menu;
                                        $arg_primary = array(
                                          'theme_location' => 'menu-1',
                                          'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
                                          'menu_class' => 'nav navbar-nav verticalmenu',
                                          'depth' => 2,
                                          'walker' => $MenuDoc_Walker_Nav_Menu
                                        );
                                      
                                        wp_nav_menu( $arg_primary );
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-menu topbar-right col-xs-12 col-sm-12 col-md-12 col-lg-10 no-padding">
                <!-- menu -->
                <div id="pav-mainnav" class="pav-mainnav">
                    <div class="pav-megamenu">
                        <button data-toggle="offcanvas" class="btn btn-primary canvas-menu hidden-lg hidden-md hidden-sm" type="button"><span class="fa fa-bars"></span> Danh mục Sản Phẩm</button>

                        <nav id="pav-megamenu" class="pav-megamenu hidden-sm hidden-xs">
                            <div class="navbar">
                                <div id="mainmenutop" class="megamenu" role="navigation">
                                    <div class="navbar-header">
                                      <?php
                                         /**
                                        * Displays a navigation menu.
                                        *
                                        * @since 3.0.0
                                        */
                                         $MenuDoc_Walker_Nav_Menu = new MenuDoc_Walker_Nav_Menu;
                                        $arg_secondprimary = array(
                                          'theme_location' => 'menu-2',
                                          'container_class' => 'collapse navbar-collapse',
                                          'container_id' => 'bs-megamenu',
                                          'menu_class' => 'nav navbar-nav megamenu',
                                          'depth' => 2,
                                          'walker' => $MenuDoc_Walker_Nav_Menu
                                        );
                                        wp_nav_menu( $arg_secondprimary );
                                    ?>

                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</header>
<!-- sys-notification -->
<div id="sys-notification">
  <div class="container">
    <div id="notification"></div>
  </div>
</div>