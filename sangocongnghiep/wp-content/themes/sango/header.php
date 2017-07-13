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
<link href="<?php echo THEME_URI;?>/catalog/view/theme/lexus_golmart/stylesheet/fonts.css" rel="stylesheet" />
<link href="<?php echo THEME_URI;?>/catalog/view/theme/lexus_golmart/stylesheet/homebuilder.css" rel="stylesheet" />
<link href="<?php echo THEME_URI;?>/catalog/view/theme/lexus_golmart/stylesheet/sliderlayer/css/typo.css" rel="stylesheet" />
<link href="<?php echo THEME_URI;?>/catalog/view/theme/lexus_golmart/stylesheet/pavdeals.css" rel="stylesheet" />
<link href="<?php echo THEME_URI;?>/catalog/view/theme/lexus_golmart/stylesheet/pavproductcarousel.css" rel="stylesheet" />
<link href="<?php echo THEME_URI;?>/catalog/view/theme/lexus_golmart/stylesheet/pavblog.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo THEME_URI;?>/catalog/view/javascript/jquery/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo THEME_URI;?>/catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo THEME_URI;?>/catalog/view/javascript/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo THEME_URI;?>/catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo THEME_URI;?>/catalog/view/javascript/pavdeals/countdown.js"></script>
<script type="text/javascript" src="<?php echo THEME_URI;?>/catalog/view/javascript/layerslider/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="<?php echo THEME_URI;?>/catalog/view/javascript/layerslider/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?php echo THEME_URI;?>/catalog/view/javascript/common.js"></script>
<script type="text/javascript" src="<?php echo THEME_URI;?>/catalog/view/theme/lexus_golmart/javascript/common.js"></script>

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
          				<button type="submit" class="button-search autosearch-submit btn btn-default"><i class="fa fa-search"></i></button>    
          			</div>
        			</form>
      			<div class="clear clr"></div>
    		  </div>
        </div>  
      </div>
	<div class="header-contact">
		<div class="provinces">
        <a href="http://sango.com.vn" class="title_kho" target="_blank" title="JANHOME Hà Nội"><span class="dt">HÀ NỘI</span></a>
        <ul class="cont_add">
             <li>
                <a>JANHOME <span style="color:#ff3333;font-weight:bold;">NGUYỄN XIỂN</span></a>
                <div class="des_cont">Kho 28 - Ngõ 300 Nguyễn Xiển (đi vào 150m), Thanh Trì, Hà Nội <b><a style="color:#ff3333;font-weight:bold;" href="tel:0935962233">0935 96 22 33</a> </b></div>
            </li>
<hr>
            <li>
                <a>JANHOME <span style="color:#ff3333;font-weight:bold;">BẮC TỪ LIÊM</span></a>
                <div class="des_cont">Kho 21 -49 Phạm Văn Đồng(Cạnh Bộ Công An), Bắc Từ Liêm, Hà Nội - <b><a style="color:#ff3333;font-weight:bold;" href="tel:0906302233">0906 30 22 33</a> </b></div>
            </li>
            <hr>
            <li>
                <a>JANHOME <span style="color:#ff3333;font-weight:bold;">LONG BIÊN</span></a>
                <div class="des_cont">Số 3 Ngô Gia Tự, P Đức Giang, Q Long Biên, Hà Nội - <b><a style="color:#ff3333;font-weight:bold;" href="tel:0939632233">0939 63 22 33</a> </b></div>
            </li>
        </ul>
    </div>
		<div class="provinces">
        <a href="http://daklak.sango.com.vn" rel="nofollow" class="title_kho" target="_blank" title="JANHOME ĐẮK LẮK - BUÔN MA THUỘT"><span class="dt">ĐẮK LẮK</span></a>
        <ul class="cont_add">
             <li>
                <a>JANHOME <span style="color:#ff3333;font-weight:bold;">ĐẮK LẮK</span></a>
                <div class="des_cont"><b>Trung Tâm JANHOME:</b> 157 Phan Bội Châu, Thống Nhất, Buôn Ma Thuột, Đắk Lắk <b><a style="color:#ff3333;font-weight:bold;" href="tel:0901682233"> ĐT: 0901 68 22 33</a> </b></div>
	</li>
	<hr>
	<li>
	<div class="des_cont"><b>Trụ sở ĐKKD:</b> G28B Trần Khánh Dư, Tân Lợi, Buôn Ma Thuột, Đắk Lắk <b><a style="color:#ff3333;font-weight:bold;" href="tel:0901682233"> ĐT: 0901 68 22 33</a> </b></div>
            </li>
           
            
        </ul>
    </div>
    <div class="provinces">
      <a href="http://haiduong.sango.com.vn" rel="nofollow" class="title_kho" target="_blank" title="JANHOME Hải Dương"><span class="dt">HẢI DƯƠNG</span></a>
      <ul class="cont_add">
        <li>
        <a>JANHOME <span style="color:#ff3333;font-weight:bold;">HẢI DƯƠNG</span></a>
        <div class="des_cont"><b>JANHOME Hải Dương:</b> 377 Thanh Niên, Thành Phố Hải Dương<b><a style="color:#ff3333;font-weight:bold;" href="tel:0975922233"> ĐT: 0975 92 22 33</a> </b></div>
        </li>		
      </ul>
    </div>
    <div class="provinces">
      <a href="#" rel="nofollow" class="title_kho" target="_blank" title="JANHOME Thái Nguyên"><span class="dt">THÁI NGUYÊN</span></a>
      <ul class="cont_add">
        <li>
        <a href="http://phoyen.sango.com.vn">JANHOME <span style="color:#ff3333;font-weight:bold;">PHỔ YÊN</span></a>
        <div class="des_cont"><b>JANHOME PHỔ YÊN:</b> NAM TIẾN, PHỔ YÊN, THÁI NGUYÊN<b><a style="color:#ff3333;font-weight:bold;" href="tel:0972432233"> ĐT: 0972 43 22 33</a> </b></div>
        </li>				
      </ul>
    </div>

<div class="hotline hidden-xs"><span class="hl">HOTLINE(miễn phí cước gọi): <a href="tel:1800 0022" style="font-size: 40px; color:#F26B35;">1800 0022</a> </span><br>

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