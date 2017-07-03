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

<body <?php body_class("common-home page-home layout-boxed-lg"); ?>>
<div class="row-offcanvas row-offcanvas-left">
<div id="page">
<header id="header-layout"  class="header-v3">
<nav id="topbar">
  <div class="container">
    <div class="topbar-wrap clearfix">
      <div class="pull-left">
      <div class="quick-user pull-left"></div>  
      <div class="quick-user pull-left"></div> 
    </div>
     <div class="quick-setting pull-left hidden-lg hidden-md hidden-sm hidden-xs">
        <div class="quickaccess-toggle">
          <span>Setting</span><i class="fa fa-angle-down"></i>
          <div class="inner-toggle">
            <ul class="">
              	<li><a class="" href="/index.php?route=account/account"><span class="fa fa-user"></span>Tài khoản cá nhân</a></li>
              	<li><a class="shoppingcart" href="/index.php?route=checkout/cart"><span class="fa fa-shopping-cart"></span>Giỏ Hàng</a></li>
              	<li><a class="last" href="/index.php?route=checkout/checkout"><span class="fa fa-file"></span>Thanh toán</a></li> 
                <li><a href="/index.php?route=account/register"><span class="fa fa-pencil"></span>Đăng ký</a></li>
                <li><a href="/index.php?route=account/login"><span class="fa fa-unlock"></span>Đăng nhập</a> </li>
            </ul>
          </div>
        </div>
      </div>  

      <div class="login pull-right hidden-xs">
        <ul class="links">
          	<li><a class="" href="/index.php?route=account/account">Tài khoản cá nhân</a></li>
          	<li><a class="wishlist" href="/index.php?route=account/wishlist" id="wishlist-total">Mặt hàng yêu thích (0)</a></li>
            <li><a href="/index.php?route=account/register">Đăng ký</a></li>
            <li><a href="/index.php?route=account/login">Đăng nhập</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<div class="header-top">
  <div class="container">
    <div class="inside">
      <div class="row">
        <div class="col-xs-12 col-sm-5 col-md-5 text-center">
          <!-- logo -->
                <div id="logo" class="logo-store"><a href="/" class="img-responsive"><img src="<?php echo THEME_URI;?>/image/catalog/sieu-thi-janhome.png" title="Siêu thị sàn gỗ, giấy dán tường, vật liệu hoàn thiện giá rẻ tại Hà Nội" alt="Siêu thị sàn gỗ, giấy dán tường, vật liệu hoàn thiện giá rẻ tại Hà Nội" /></a></div>
                </div>
      
        <div class="col-xs-12 col-sm-4 col-md-4">
           	<div class=" autosearch-wrapper">
			<form method="GET" action="index.php">
			<div id="search0" class="input-group">
				<input class="search_query form-control" type="text" value="" size="35" autocomplete="off" placeholder="Tìm sản phẩm tại đây.." name="search">	
				<button type="submit" class="button-search autosearch-submit btn btn-default" name="submit_search"><i class="fa fa-search"></i></button>    
			</div>
			</form>
			<div class="clear clr"></div>
		</div>
        </div>  
        <div class="col-xs-12 col-sm-3 col-md-3 text-center hidden-xs">
          	<div id="cart" class="clearfix">
			    <div data-toggle="dropdown" data-loading-text="Đang Xử lý..." class="dropdown-toggle">      
			      <div class="cart-inner">
			        <a href="">
			          <i class="icon-cart"></i>
			     
			          <div class="wrap-cart">
			          <h6 class="text-cart">Giỏ Hàng</h6>
			          <span id="cart-total" class="cart-total radius-x ">0 sản phẩm - 0  VNĐ</span>         
			          </div>
			        </a>
			      </div>
			    </div>
			    <ul class="dropdown-menu content">
			        <li><p class="text-center">Không có sản phẩm trong Đơn hàng!</p></li>
			    </ul>
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
                        </li>
                       
                        
                    </ul>
                </div>
        
		   <div class="hotline hidden-xs"><span class="hl">HOTLINE(miễn phí cước gọi): <a href="tel:1800 0022" style="font-size: 40px; color:#F26B35;">1800 0022</a> </span><br>
    	        
    </div>
		
		   <div class="hotline hidden-sm hidden-lg hidden-md hidden-sm" ><span class="hl">HOTLINE(miễn phí cước gọi): <a href="tel:1800 0022" style="font-size: 40px; color:#F26B35;">1800 0022</a> </span><br>
			
    	        
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
			<div  class="verticalmenu" role="navigation">
				<div class="navbar-header">
				<a href="javascript:;" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			     </a>
				<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav verticalmenu">
				    <li class="parent dropdown ">
				        <a class="dropdown-toggle" data-toggle="dropdown" href="/san-pham-khuyen-mai">
				            <span class="menu-title">SẢN PHẨM KHUYẾN MẠI</span>
				            <b class="caret"></b></a>
				        <div class="dropdown-menu level1">
				            <div class="dropdown-menu-inner">
				                <div class="row">
				                    <div class="col-sm-12 mega-col" data-colwidth="12" data-type="menu">
				                        <div class="mega-col-inner">
				                            <ul>
				                                <li class=" "><a href="/san-go-thanh-ly"><i class=""></i><span class="menu-title">SÀN GỖ THANH LÝ</span></a></li>
				                            </ul>
				                        </div>
				                    </div>
				                </div>
				    </li>
				    <li class="">
				        <a href="/san-pham-ban-chay"><i class=""></i><span class="menu-title">SẢN PHẨM BÁN CHẠY</span></a></li>
				    <li class="parent dropdown ">
				        <a class="dropdown-toggle" data-toggle="dropdown" href="/san-go-gia-re"><i class=""></i><span class="menu-title">SÀN GỖ GIÁ RẺ</span><b class="caret"></b></a>
				        <div class="dropdown-menu level1">
				            <div class="dropdown-menu-inner">
				                <div class="row">
				                    <div class="col-sm-12 mega-col" data-colwidth="12" data-type="menu">
				                        <div class="mega-col-inner">
				                            <ul>
				                                <li class=" "><a href="/san-go-tu-nhien-gia-re"><i class=""></i><span class="menu-title">SÀN GỖ TỰ NHIÊN GIÁ RẺ</span></a></li>
				                            </ul>
				                        </div>
				                    </div>
				                </div>
				    </li>
				    
				    <li class="parent dropdown ">
				        <a class="dropdown-toggle" data-toggle="dropdown" href="/san-go-tu-nhien"><i class=""></i><span class="menu-title">SÀN GỖ TỰ NHIÊN</span><b class="caret"></b></a>
				        <div class="dropdown-menu level1">
				            <div class="dropdown-menu-inner">
				                <div class="row">
				                    <div class="col-sm-12 mega-col" data-colwidth="12" data-type="menu">
				                        <div class="mega-col-inner">
				                            <ul>
				                                <li class=" "><a href="/san-go-soi"><span class="menu-title">Sàn gỗ sồi</span></a></li>
				                                <li class=" "><a href="/san-go-cam-xe"><span class="menu-title">Sàn gỗ căm xe</span></a></li>
				                                <li class=" "><a href="/san-go-tram-bong-vang"><span class="menu-title">Sàn gỗ trăm bông vàng</span></a></li>
				                                <li class=" "><a href="/san-go-chiu-liu"><span class="menu-title">Sàn gỗ chiu liu</span></a></li>
				                                <li class=" "><a href="/san-go-walnut"><span class="menu-title">Sàn gỗ walnut</span></a></li>
				                                <li class=" "><a href="/san-go-teak"><span class="menu-title">Sàn gỗ gia ty (teak)</span></a></li>
				                                <li class=" "><a href="/san-go-tu-nhien-gia-re"><span class="menu-title">Sàn gỗ tự nhiên giá rẻ</span></a></li>
				                                <li class=" "><a href="/san-go-giang-huong"><span class="menu-title">Sàn gỗ giáng hương</span></a></li>
				                                <li class=" "><a href="/san-go-go-do"><span class="menu-title">Sàn gỗ gõ đỏ</span></a></li>
				                                <li class=" "><a href="/san-go-po-mu"><span class="menu-title">Sàn gỗ pơ mu</span></a></li>
				                            </ul>
				                        </div>
				                    </div>
				                </div>  
				            </div>
				        </div>
				    </li>
				    <li class="parent dropdown ">
				        <a class="dropdown-toggle" data-toggle="dropdown" href="/san-go-ngoai-troi"><i class=""></i><span class="menu-title">SÀN GỖ NGOÀI TRỜI</span><b class="caret"></b></a>
				        <div class="dropdown-menu level1">
				            <div class="dropdown-menu-inner">
				                <div class="row">
				                    <div class="col-sm-12 mega-col" data-colwidth="12" data-type="menu">
				                        <div class="mega-col-inner">
				                            <ul>
				                                <li class=" "><a href="/san-go-san-vuon"><i class=""></i><span class="menu-title">SÀN GỖ SÂN VƯỜN</span></a></li>
				                                <li class=" "><a href="/san-go-ho-boi"><span class="menu-title">SÀN GỖ HỒ BƠI</span></a></li>
				                                <li class=" "><a href="/san-go-ngoai-troi-awood"><i class=""></i><span class="menu-title">SÀN GỖ AWOOD</span></a></li>
				                                <li class=" "><a href="/san-go-tecwood"><span class="menu-title">Sàn gỗ TECWOOD</span></a></li>
				                                <li class=" "><a href="/san-go-biowood"><span class="menu-title">Sàn gỗ BIOWOOD</span></a></li>
				                                <li class=" "><a href="/san-go-greenwood"><span class="menu-title">Sàn gỗ GREENWOOD</span></a></li>
				                                <li class=" "><a href="/san-go-conwood"><span class="menu-title">Sàn gỗ CONWOOD</span></a></li>
				                                <li class=" "><a href="/vi-gach-go-nhua"><span class="menu-title">Vỉ gạch gỗ nhựa</span></a></li>
				                            </ul>
				                        </div>
				                    </div>
				                </div>
				            </div>
				        </div>
				    </li>
				    <li class="">
				        <a href="/giay-dan-tuong"><i class=""></i><span class="menu-title">GIẤY DÁN TƯỜNG</span></a></li>
				</ul>				 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>                  </div>
        <div class="main-menu topbar-right col-xs-12 col-sm-12 col-md-12 col-lg-10 no-padding">
          <!-- menu -->
          <div id="pav-mainnav" class="pav-mainnav"><div class="pav-megamenu">
          <button data-toggle="offcanvas" class="btn btn-primary canvas-menu hidden-lg hidden-md hidden-sm" type="button"><span class="fa fa-bars"></span> Danh mục Sản Phẩm</button>
                
<nav id="pav-megamenu" class="pav-megamenu hidden-sm hidden-xs">
	<div class="navbar">
		<div id="mainmenutop" class="megamenu" role="navigation">
			<div class="navbar-header">
				<div class="collapse navbar-collapse" id="bs-megamenu">
					<ul class="nav navbar-nav megamenu">
					    <li class="parent dropdown "><a class="dropdown-toggle" data-toggle="dropdown" href="/tin-tuc-san-go"><span class="menu-title">TIN TỨC</span><b class="caret"></b></a>
					        <div class="dropdown-menu level1">
					            <div class="dropdown-menu-inner">
					                <div class="row">
					                    <div class="col-sm-12 mega-col" data-colwidth="12" data-type="menu">
					                        <div class="mega-col-inner">
					                            <ul>
					                                <li class=" "><a href="du-an"><span class="menu-title">Dự Án thực hiện</span></a></li>
					                                <li class=" "><a href="/hinh-anh"><span class="menu-title">Hình ảnh thi công</span></a></li>
					                                <li class=" "><a href="/tu-van"><span class="menu-title">Tư vấn</span></a></li>
					                            </ul>
					                        </div>    
					                    </div>
					                </div>
					            </div>
					        </div>    
					    </li>
					    <li class=""><a href="/bao-gia-san-go"><span class="menu-title">BÁO GIÁ</span></a></li>
					    <li class=""><a href="/lien-he"><span class="menu-title">LIÊN HỆ</span></a></li>
					</ul>			
				</div>
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