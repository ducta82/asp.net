<?php
get_header(); ?>

    <div class="main-columns container-full">
        <div class="row">
            <div id="sidebar-main" class="col-md-12">
                <div id="content" class="space-padding-0">
                    <div id="pav-homebuilder1436434850" class="homebuilder clearfix home3">

                        <div class="pav-container  container ">
                            <div class="pav-inner  col-nopadding">

                                <div class="row row-level-1 ">
                                    <div class="row-inner clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-11 col-xs-12 ">
                                            <div class="col-inner hidden-lg hidden-sm hidden-md">
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-12 col-sm-11 col-xs-12 primary">
                                            <div class="col-inner hidden-sm hidden-xs">
                                                <div class="layerslider-wrapper" style="max-width:960px;">
                                                    <div class="bannercontainer banner-boxed" style="padding: 0;margin: 0;">
                                                        <div id="sliderlayer1349131353" class="rev_slider boxedbanner" style="width:100%;height:380px; ">
                                                            <ul>
                                                            <?php 
                                                                $i = 0;
                                                                $slider_trang_chu = ot_get_option( 'slider_trang_chu');
                                                                foreach ($slider_trang_chu as $slider) {
                                                                   ?>
                                                                   <li data-link="<?php echo $slider['link']?>" data-masterspeed="300" data-transition="random" data-slotamount="7" data-thumb="<?php echo $slider['image']?>">
                                                                        <img src="<?php echo $slider['image']?>" alt="<?php echo $slider['title']?>/image <?php echo $i;?>" />
                                                                    </li>
                                                                    <?php
                                                                    $i++;
                                                                }
                                                            ?>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                                <script type="text/javascript">
                                                    var tpj = jQuery;

                                                    if (tpj.fn.cssOriginal != undefined)
                                                        tpj.fn.css = tpj.fn.cssOriginal;

                                                    $('#sliderlayer1349131353').revolution({
                                                        delay: 9000,
                                                        startheight: 380,
                                                        startwidth: 960,

                                                        hideThumbs: 200,

                                                        thumbWidth: 100,
                                                        thumbHeight: 50,
                                                        thumbAmount: 5,

                                                        navigationType: "none",
                                                        navigationArrows: "verticalcentered",
                                                        navigationStyle: "round",

                                                        navOffsetHorizontal: 0,
                                                        navOffsetVertical: 20,

                                                        touchenabled: "on",
                                                        onHoverStop: "on",
                                                        shuffle: "off",
                                                        stopAtSlide: -1,
                                                        stopAfterLoops: -1,

                                                        hideCaptionAtLimit: 0,
                                                        hideAllCaptionAtLilmit: 0,
                                                        hideSliderAtLimit: 0,
                                                        fullWidth: "off",
                                                        shadow: 0

                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pav-container  container ">
                            <div class="pav-inner  ">
                            
                            <script type="text/javascript">
                                $('#pavdeals9, #productcarousel15').carousel({
                                    interval: false,
                                    pause: 'hover'
                                    }); 
                            </script>
                                <div class="row row-level-1 ">
                                    <div class="row-inner clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                            <div class="col-inner hidden-lg hidden-md hidden-sm">
                                                <div class=" productdeals panel panel-default panel-v2">
                                                    <div class="panel-heading" style="text-align:left">
                                                        <h4 class="panel-title"> Sản phẩm khuyến mại đặc biệt </h4>
                                                    </div>
                                                    <div class="box-products slide" id="pavdeals9" data-ride="owlcarousel">

                                                        <a class="carousel-control left carousel-sm" href="#pavdeals9" data-slide="prev" style="width:34px;height:34px;line-height:34px;"><i class="fa fa-angle-left"></i></a>
                                                        <a class="carousel-control right carousel-sm" href="#pavdeals9" data-slide="next" style="width:34px;height:34px;line-height:34px;"><i class="fa fa-angle-right"></i></a>
                                                        <div class="carousel-inner" style="overflow: hidden;" data-show="1" data-pagination="false" data-navigation="true">
                                                            <?php echo get_sale_product(2);?>
                                                        </div>
                                                        <hr style="border-top:5px solid #2957a4">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pav-container  container ">
                            <div class="pav-inner">

                                <div class="row row-level-1 ">
                                    <div class="row-inner clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                            <div class="col-inner hidden-xs">
                                                <div class="prefix panel-v3 productcarousel" id="module15">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">Sản phẩm giảm giá khuyến mại đặc biệt</h4></div>
                                                            <div class="box-products owl-carousel-play" id="productcarousel15" data-ride="owlcarousel">

                                                                <a class="carousel-control left carousel-sm" href="#productcarousel15" data-slide="prev">
                                                                    <i class="fa fa-angle-left"></i>
                                                                </a>
                                                                <a class="carousel-control right carousel-sm" href="#productcarousel15" data-slide="next">
                                                                    <i class="fa fa-angle-right"></i>
                                                                </a>

                                                                <div class="owl-carousel products-block col-nopadding" data-show="1" data-pagination="false" data-navigation="true">
                                                                    <?php echo get_sale_product(6);?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pav-container  container " style="margin:0 auto 30px">
                            <div class="pav-inner  col-nopadding">

                                <div class="row row-level-1 ">
                                    <div class="row-inner clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                            <div class="col-inner ">
                                                <div class="widget-images   ">
                                                    <div class="widget-inner box-content clearfix">
                                                        <div class="<?php echo THEME_URI;?>/image-item">
                                                        <?php
                                                            $banner_trang_chu = ot_get_option( 'banner_trang_chu');
                                                        ?>
                                                            <a href="<?php echo $banner_trang_chu[0]['link']?>"><img class="img-responsive" alt=" " src="<?php echo $banner_trang_chu[0]['image']?>"/></a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pav-container  container " style="margin:0 auto 30px">
                            <div class="pav-inner  ">

                                <div class="row row-level-1 ">
                                    <div class="row-inner clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                            <div class="col-inner ">
                                                <div class="widget-html">
                                                    <div class="widget-inner">
                                                    <?php
                                                       $categories = get_terms( 'cat-product', array(
                                                                        'orderby'    => 'rand',
                                                                        'hide_empty' => 0,
                                                                        'parent' => 0
                                                                    ) );
                                                        foreach ($categories as $value) {
                                                            $term_children = get_term_children( $value->term_id, 'cat-product' );
                                                            foreach ( $term_children as $child ) {
                                                                $term = get_term_by( 'id', $child, 'cat-product' );
                                                                echo '<li><a href="' . get_term_link( $child, 'cat-product' ) . '">' . $term->name . '</a></li>';
                                                            }
                                                        }
                                                    ?>
                                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                                            <div class="home_singleCategory"><a href="/san-go-malaysia" title="Sàn Gỗ Malaysia"><img src="<?php echo THEME_URI;?>/image/catalog/banner/san-go-cong-nghiep-malaysia.jpg" width="265px"></a>
                                                                <h2><a title="Sàn Gỗ Malaysia" href="/san-go-malaysia">Sàn Gỗ Malaysia</a></h2>
                                                                <ul>
                                                                    <li><a title="Sàn gỗ Janmi" href="/san-go-janmi">Sàn gỗ Janmi</a></li>
                                                                    <li><a title="Sàn gỗ Masfloor" href="/san-go-masfloor">Sàn gỗ Masfloor</a></li>
                                                                    <li><a title="Sàn gỗ Inovar" href="/san-go-inovar">Sàn gỗ Inovar</a></li>
                                                                    <li><a title="Sàn gỗ Robina" href="/san-go-robina">Sàn gỗ Robina</a></li>
                                                                    <li class="line"><a class="seeAll" href="/san-go-malaysia">Xem tất cả</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                                            <div class="home_singleCategory"><a href="/san-go-chau-au" title="Sàn Gỗ Châu Âu"><img src="<?php echo THEME_URI;?>/image/catalog/banner/san-go-chau-au.jpg" width="265px"></a>
                                                                <h2><a title="Sàn Gỗ Châu Âu" href="/san-go-chau-au">Sàn Gỗ Châu Âu</a></h2>
                                                                <ul>
                                                                    <li><a title="Sàn gỗ Đức" href="/san-go-duc">Sàn gỗ Đức</a></li>
                                                                    <li><a title="Sàn gỗ QuickStep" href="/san-go-wineo">Sàn gỗ Wineo</a></li>
                                                                    <li><a title="Sàn gỗ Pergo" href="/san-go-pergo">Sàn gỗ Pergo</a></li>
                                                                    <li><a title="Sàn gỗ Kronopol" href="/san-go-kronopol">Sàn gỗ Kronopol</a></li>
                                                                    <li class="line"><a class="seeAll" href="/san-go-chau-au">Xem tất cả</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                                            <div class="home_singleCategory"><a href="/san-go-duc-wineo" title="Sàn Gỗ Thái Lan"><img src="<?php echo THEME_URI;?>/image/catalog/banner/san-go-thai-lan.jpg" width="265px"></a>
                                                                <h2><a title="Sàn Gỗ Thái Lan" href="/san-go-thai-lan">Sàn Gỗ Thái Lan</a></h2>
                                                                <ul>
                                                                    <li><a title="Sàn gỗ Thái Green" href="/san-go-thaigreen">Sàn gỗ Thái Green</a></li>
                                                                    <li><a title="Sàn gỗ Thái Prince" href="/san-go-prince">Sàn gỗ Thái Prince (Thanh lý)</a></li>
                                                                    <li><a title="Sàn gỗ Thaixin" href="/san-go-thai-xin">Sàn gỗ Thaixin</a></li>
                                                                    <li><a title="Sàn gỗ ThaiViet" href="/san-go-thaiviet">Sàn gỗ ThaiViet</a></li>
                                                                    <li class="line"><a class="seeAll" href="/san-go-thai-lan">Xem tất cả</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                                            <div class="home_singleCategory"><a href="/san-go-trung-quoc" title="Sàn Gỗ Trung Quốc"><img src="<?php echo THEME_URI;?>/image/catalog/banner/san-go-cong-nghiep.jpg" width="265px"></a>
                                                                <h2><a title="Sàn Gỗ Trung Quốc" href="/san-go-gia-re">Sàn gỗ Trung Quốc</a></h2>
                                                                <ul>
                                                                    <li><a title="Sàn gỗ Harotex" href="/san-go-harotex">Sàn gỗ Harotex</a></li>
                                                                    <li><a title="Sàn gỗ King Floor" href="/san-go-kingfloor">Sàn gỗ King Floor</a></li>
                                                                    <li><a title="Sàn gỗ Excel Floor" href="/san-go-excel-floor">Sàn gỗ Excel Floor</a></li>
                                                                    <li><a title="Sàn gỗ Kendall" href="/san-go-kendall">Sàn gỗ Kendall</a></li>
                                                                    <li class="line"><a class="seeAll" href="/san-go-trung-quoc">Xem tất cả</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                                            <div class="home_singleCategory"><a href="/san-go-ngoai-troi" title="Sàn Gỗ Ngoài Trời"><img src="<?php echo THEME_URI;?>/image/catalog/banner/vat-lieu-ngoai-troi.jpg" width="265px"></a>
                                                                <h2><a href="/san-go-ngoai-troi" title="Sàn Gỗ Ngoài Trời">Sàn Gỗ Ngoài Trời</a></h2>
                                                                <ul>
                                                                    <li><a href="/san-go-ngoai-troi-awood" target="_blank">Sàn gỗ AWOOD</a></li>
                                                                    <li><a href="/san-go-biowood" title="Sàn gỗ Biowood">Sàn gỗ BIOWOOD</a></li>
                                                                    <li><a href="/san-go-conwood" title="Sàn gỗ Conwood">Sàn gỗ Conwood</a></li>
                                                                    <li><a href="/vi-gach-go-nhua" title="Vỉ gỗ nhựa DIY">Vỉ gạch gỗ nhựa</a></li>
                                                                    <li class="line"><a class="seeAll" href="/san-go-ngoai-troi">Xem tất cả</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                                            <div class="home_singleCategory"><a href="/san-go-tu-nhien" title="Sàn Gỗ WINEO"><img src="<?php echo THEME_URI;?>/image/catalog/banner/san-go-tu-nhien.jpg" width="265px"></a>
                                                                <h2><a title="Sàn Gỗ Tự Nhiên" href="/san-go-tu-nhien">Sàn Gỗ Tự Nhiên</a></h2>
                                                                <ul>
                                                                    <li><a title="Sàn gỗ căm xe" href="/san-go-cam-xe">Sàn gỗ căm xe</a></li>
                                                                    <li><a title="Sàn gỗ chiu liu" href="/san-go-chiu-liu">Sàn gỗ chiu liu</a></li>
                                                                    <li><a title="Sàn gỗ tràm bông vàng" href="/san-go-tram-bong-vang">Sàn gỗ tràm bông vàng</a></li>
                                                                    <li><a title="Sàn gỗ Giáng Hương" href="/san-go-giang-huong">Sàn gỗ Giáng Hương</a></li>
                                                                    <li class="line"><a class="seeAll" href="/san-go-tu-nhien">Xem tất cả</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                                            <div class="home_singleCategory"><a href="#" title="Sàn Gỗ Khác"><img src="<?php echo THEME_URI;?>/image/catalog/banner/san-go-khac.jpg" width="265px"></a>
                                                                <h2><a title="Sàn Gỗ Khác" href="#">Sàn Gỗ Khác</a></h2>
                                                                <ul>
                                                                    <li><a title="Sàn gỗ Florton" href="/san-go-florton">Sàn gỗ Florton</a> - Việt Nam</li>
                                                                    <li><a title="Sàn gỗ Newsky" href="/san-go-newsky">Sàn gỗ Newsky</a> - Việt Nam</li>
                                                                    <li><a title="Sàn gỗ Floormax" href="/san-go-floormax">Floormax</a> - Ấn Độ</li>
                                                                    <li><a title="Sàn gỗ DongWha" href="/san-go-dongwha">Sàn gỗ DongWha</a> - Hàn Quốc</li>
                                                                    <li class="line"><a class="seeAll" href="/#">Xem tất cả</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                                            <div class="home_singleCategory"><a href="/go-nhua-ngoai-troi" title="Vật liệu ngoài trời"><img src="<?php echo THEME_URI;?>/image/catalog/banner/go-nhua-ngoai-troi.jpg" width="265px"></a>
                                                                <h2><a title="Vật liệu ngoài trời" href="/go-nhua-ngoai-troi">Vật liệu ngoài trời</a></h2>
                                                                <ul>
                                                                    <li><a href="/gian-hoa-ngoai-troi-pergola" title="Giàn hoa ngoài trời">Giàn hoa ngoài trời</a></li>
                                                                    <li><a href="/hang-rao-ngoai-troi" title="Hàng rào gỗ ngoài trời">Hàng rào gỗ ngoài trời</a></li>
                                                                    <li><a href="/op-tuong-ngoai-troi" title="Ốp tường ngoài trời">Ốp tường ngoài trời</a></li>
                                                                    <li><a href="/op-tran-ngoai-troi" title="Ốp trần ngoài trời">Ốp trần ngoài trời</a></li>
                                                                    <li class="line"><a class="seeAll" href="/go-nhua-ngoai-troi">Xem tất cả</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                                            <div class="home_singleCategory"><a href="/san-nhua-vinyl" title="Sàn nhựa Vinyl"><img src="<?php echo THEME_URI;?>/image/catalog/banner/san-nhua-vinyl.jpg" width="265px"></a>
                                                                <h2><a title="Sàn nhựa Vinyl" href="/san-nhua-vinyl">Sàn nhựa Vinyl</a></h2>
                                                                <ul>
                                                                    <li><a href="/san-nhua-gia-da" title="Sàn nhựa giả đá">Sàn nhựa giả đá</a></li>
                                                                    <li><a href="/san-nhua-gia-go" title="Sàn nhựa giả gỗ">Sàn nhựa giả gỗ</a></li>
                                                                    <li><a href="/san-nhua-galaxy" title="Sàn nhựa Galaxy">Sàn nhựa Galaxy</a></li>
                                                                    <li><a href="/san-nhua-van-tham" title="Sàn nhựa vân thảm">Sàn nhựa vân thảm</a></li>
                                                                    <li class="line"><a class="seeAll" href="/san-nhua-vinyl">Xem tất cả</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                                            <div class="home_singleCategory"><a href="/giay-dan-tuong" title="Giấy Dán Tường"><img src="<?php echo THEME_URI;?>/image/catalog/banner/giay-dan-tuong.jpg" width="265px"></a>
                                                                <h2><a title="Giấy Dán Tường" href="/giay-dan-tuong">Giấy Dán Tường</a></h2>
                                                                <ul>
                                                                    <li><a href="/giay-dan-tuong-han-quoc" title="Giấy Dán Tường Hàn Quốc">Giấy Dán Tường Hàn Quốc</a></li>
                                                                    <li><a href="/giay-dan-tuong-nhat-ban" title="Giấy Dán Tường Nhật Bản">Giấy Dán Tường Nhật Bản</a></li>
                                                                    <li><a href="/giay-dan-tuong-y" title="Giấy Dán Tường Ý">Giấy Dán Tường Ý</a></li>
                                                                    <li><a href="/giay-dan-tuong-trung-quoc" title="Giấy Dán Tường Trung Quốc">Giấy Dán Tường Trung Quốc</a></li>
                                                                    <li class="line"><a class="seeAll" href="/giay-dan-tuong">Xem tất cả</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                                            <div class="home_singleCategory"><a href="/go-cong-nghiep-hdf" title="GỖ CÔNG NGHIỆP HDF"><img src="<?php echo THEME_URI;?>/image/catalog/banner/go-cong-nghiep.jpg" width="265px"></a>
                                                                <h2><a title="GỖ CÔNG NGHIỆP HDF" href="/go-cong-nghiep-hdf">GỖ CÔNG NGHIỆP HDF</a></h2>
                                                                <ul>
                                                                    <li><a href="/go-cau-thang" title="Gỗ cầu thang">Gỗ cầu thang</a></li>
                                                                    <li><a href="/van-laminate-hdf" title="Ván Laminate HDF">Ván Laminate HDF</a></li>
                                                                    <li><a href="/van-lot-san-gac" title="Ván lót sàn gác">Ván lót sàn gác</a></li>
                                                                    <li><a href="/tam-xi-mang-cemboard" title="Tấm xi măng Cemboard">Tấm xi măng Cemboard</a></li>
                                                                    <li class="line"><a class="seeAll" href="/go-cong-nghiep-hdf">Xem tất cả</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                                            <div class="home_singleCategory"><a href="/gach-3d" title="Gạch 3D Tháng Giêng"><img src="<?php echo THEME_URI;?>/image/catalog/banner/gach-3d.jpg" width="265px"></a>
                                                                <h2><a title="Gạch 3D Tháng Giêng" href="/gach-3d">Gạch 3D Tháng Giêng</a></h2>
                                                                <ul>
                                                                    <li><a href="/gach-3d-vi-tinh" title="Gạch 3D Vi Tinh">Gạch 3D Vi Tinh</a></li>
                                                                    <li><a href="/gach-3d-kinh" title="Gạch 3D Kính">Gạch 3D Kính</a></li>
                                                                    <li><a href="/tranh-gach-3d-theo-mau" title="Tranh gạch 3D theo mẫu">Tranh gạch 3D theo mẫu</a></li>
                                                                    <li><a href="/gach-3d-khac" title="Gạch 3D Khác">Gạch 3D Khác</a></li>
                                                                    <li class="line"><a class="seeAll" href="/gach-3d">Xem tất cả</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pav-container  container ">
                            <div class="pav-inner  ">

                                <div class="row row-level-1 ">
                                    <div class="row-inner clearfix">
                                        <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 ">
                                            <div class="col-inner ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pav-container  container ">
                            <div class="pav-inner  ">

                                <div class="row row-level-1 ">
                                    <div class="row-inner clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                            <div class="col-inner ">
                                                <div class="layerslider-wrapper" style="max-width:1050px;">
                                                    <div class="bannercontainer banner-boxed" style="padding: 5px 5px;margin: 0px 0px 18px;">
                                                        <div id="sliderlayer340451705" class="rev_slider boxedbanner" style="width:100%;height:400px; ">
                                                            <ul> 
                                                            <?php 
                                                                $i = 0;
                                                                $slider_cuoi_trang_chu = ot_get_option( 'slider_cuoi_trang_chu');
                                                                foreach ($slider_cuoi_trang_chu as $slider) {
                                                                   ?>
                                                                   <li data-link="<?php echo $slider['link']?>" data-masterspeed="300" data-transition="random" data-slotamount="7" data-thumb="<?php echo $slider['image']?>">
                                                                        <img src="<?php echo $slider['image']?>" alt="<?php echo $slider['title']?>/image <?php echo $i;?>" />
                                                                    </li>
                                                                    <?php
                                                                    $i++;
                                                                }
                                                            ?>
                                                            </ul>
                                                            <div class="tp-bannertimer tp-top"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <script type="text/javascript">
                                                    var tpj = jQuery;

                                                    if (tpj.fn.cssOriginal != undefined)
                                                        tpj.fn.css = tpj.fn.cssOriginal;

                                                    $('#sliderlayer340451705').revolution({
                                                        delay: 6000,
                                                        startheight: 400,
                                                        startwidth: 1050,

                                                        hideThumbs: 200,

                                                        thumbWidth: 100,
                                                        thumbHeight: 50,
                                                        thumbAmount: 5,

                                                        navigationType: "both",
                                                        navigationArrows: "verticalcentered",
                                                        navigationStyle: "round",

                                                        navOffsetHorizontal: 0,
                                                        navOffsetVertical: 20,

                                                        touchenabled: "on",
                                                        onHoverStop: "on",
                                                        shuffle: "off",
                                                        stopAtSlide: -1,
                                                        stopAfterLoops: -1,

                                                        hideCaptionAtLimit: 0,
                                                        hideAllCaptionAtLilmit: 0,
                                                        hideSliderAtLimit: 0,
                                                        fullWidth: "off",
                                                        shadow: 0

                                                    });
                                                </script>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                            <div class="col-inner ">
                                                <div class="widget-images   ">
                                                    <div class="widget-heading box-heading"></div>
                                                    <div class="widget-inner box-content clearfix">
                                                    <?php 
                                                        $banner_cuoi_trang_chu = ot_get_option( 'banner_cuoi_trang_chu');
                                                    ?>
                                                        <div class="image-item">
                                                            <a href="<?php echo $banner_cuoi_trang_chu[0]['link'];?>"><img class="img-responsive" alt=" " src="<?php echo $banner_cuoi_trang_chu[0]['image'];?>"/></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pav-container  container ">
                            <div class="pav-inner  ">

                                <div class="row row-level-1 ">
                                    <div class="row-inner clearfix">
                                        <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 ">
                                            <div class="col-inner ">
                                                <div class="panel-orange sidebar panel-v3 productcarousel">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">Tin Tức Mới</h4>
                                                    </div>
                                                    <div class="" style="border:1px solid #eee">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 right">
                                                                <div class="latest-posts-body" style="margin: 0 auto;width:90%;">

                                                                    <div class="latest-posts-meta media-body">
                                                                        <div class="latest-posts-image pull-left">
                                                                            <a class="" href="#">
                                                                                <a href="/dia-chi-tai-quang-ninh-cung-cap-san-go-chiu-nuoc-chat-luong-gia-re.html"><img src="<?php echo THEME_URI;?>/image/cache/catalog/1-san-go-gia-re/13-6/san go chiu nuoc tai Quang Ninh-300x200.jpg" title="Địa chỉ tại Quảng Ninh cung cấp sàn gỗ chịu nước chất lượng, giá rẻ" alt="Địa chỉ tại Quảng Ninh cung cấp sàn gỗ chịu nước chất lượng, giá rẻ" class="img-responsive"/></a>
                                                                            </a>
                                                                        </div>
                                                                        <h6 class="latest-posts-title"><a href="/dia-chi-tai-quang-ninh-cung-cap-san-go-chiu-nuoc-chat-luong-gia-re.html" title="Địa chỉ tại Quảng Ninh cung cấp sàn gỗ chịu nước chất lượng, giá rẻ">Địa chỉ tại Quảng Ninh cung cấp sàn gỗ chịu nước chất lượng, giá rẻ</a></h6>

                                                                        <div class="posts-meta">
                                                                            <div class="description space-10">
                                                                            </div>
                                                                            <div class="btn-more-link hidden">
                                                                                <a href="/dia-chi-tai-quang-ninh-cung-cap-san-go-chiu-nuoc-chat-luong-gia-re.html" class="readmore btn-link">Read more<i class="space-padding-l5 fa fa-angle-right"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end latest-posts-body -->
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 right">
                                                                <div class="latest-posts-body" style="margin: 0 auto;width:90%;">

                                                                    <div class="latest-posts-meta media-body">
                                                                        <div class="latest-posts-image pull-left">
                                                                            <a class="" href="#">
                                                                                <a href="/san-go-chiu-nuoc-tai-trung-tam-janhome-thanh-hoa.html"><img src="<?php echo THEME_URI;?>/image/cache/catalog/1-san-go-gia-re/13-6/cach-chon-san-go-cong-nghiep-chiu-nuoc-tot-cho-phong-khach-300x200.jpg" title="Sàn gỗ chịu nước tại trung tâm JANHOME Thanh Hóa" alt="Sàn gỗ chịu nước tại trung tâm JANHOME Thanh Hóa" class="img-responsive"/></a>
                                                                            </a>
                                                                        </div>
                                                                        <h6 class="latest-posts-title"><a href="/san-go-chiu-nuoc-tai-trung-tam-janhome-thanh-hoa.html" title="Sàn gỗ chịu nước tại trung tâm JANHOME Thanh Hóa">Sàn gỗ chịu nước tại trung tâm JANHOME Thanh Hóa</a></h6>

                                                                        <div class="posts-meta">
                                                                            <div class="description space-10">
                                                                            </div>
                                                                            <div class="btn-more-link hidden">
                                                                                <a href="/san-go-chiu-nuoc-tai-trung-tam-janhome-thanh-hoa.html" class="readmore btn-link">Read more<i class="space-padding-l5 fa fa-angle-right"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end latest-posts-body -->
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 right">
                                                                <div class="latest-posts-body" style="margin: 0 auto;width:90%;">

                                                                    <div class="latest-posts-meta media-body">
                                                                        <div class="latest-posts-image pull-left">
                                                                            <a class="" href="#">
                                                                                <a href="/cach-nhan-biet-san-go-chiu-nuoc-chat-luong-tai-thi-truong-lao-cai.html"><img src="<?php echo THEME_URI;?>/image/cache/catalog/1-san-go-gia-re/13-6/san-go-cong-nghiep-chiu-nuoc-300x200.jpg" title="Cách nhận biết sàn gỗ chịu nước chất lượng tại thị trường Lào Cai" alt="Cách nhận biết sàn gỗ chịu nước chất lượng tại thị trường Lào Cai" class="img-responsive"/></a>
                                                                            </a>
                                                                        </div>
                                                                        <h6 class="latest-posts-title"><a href="/cach-nhan-biet-san-go-chiu-nuoc-chat-luong-tai-thi-truong-lao-cai.html" title="Cách nhận biết sàn gỗ chịu nước chất lượng tại thị trường Lào Cai">Cách nhận biết sàn gỗ chịu nước chất lượng tại thị trường Lào Cai</a></h6>

                                                                        <div class="posts-meta">
                                                                            <div class="description space-10">
                                                                            </div>
                                                                            <div class="btn-more-link hidden">
                                                                                <a href="/cach-nhan-biet-san-go-chiu-nuoc-chat-luong-tai-thi-truong-lao-cai.html" class="readmore btn-link">Read more<i class="space-padding-l5 fa fa-angle-right"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end latest-posts-body -->
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 right">
                                                                <div class="latest-posts-body" style="margin: 0 auto;width:90%;">

                                                                    <div class="latest-posts-meta media-body">
                                                                        <div class="latest-posts-image pull-left">
                                                                            <a class="" href="#">
                                                                                <a href="/trung-tam-janhome-phan-phoi-san-go-gia-re-chat-luong-tai-nghe-an.html"><img src="<?php echo THEME_URI;?>/image/cache/catalog/1-san-go-gia-re/13-6/San-go-chiu-nuoc-tot-nhat-300x200.jpg" title="Trung tâm JANHOME phân phối sàn gỗ chịu nước, chất lượng tại Nghệ An" alt="Trung tâm JANHOME phân phối sàn gỗ chịu nước, chất lượng tại Nghệ An" class="img-responsive"/></a>
                                                                            </a>
                                                                        </div>
                                                                        <h6 class="latest-posts-title"><a href="/trung-tam-janhome-phan-phoi-san-go-gia-re-chat-luong-tai-nghe-an.html" title="Trung tâm JANHOME phân phối sàn gỗ chịu nước, chất lượng tại Nghệ An">Trung tâm JANHOME phân phối sàn gỗ chịu nước, chất lượng tại Nghệ An</a></h6>

                                                                        <div class="posts-meta">
                                                                            <div class="description space-10">
                                                                            </div>
                                                                            <div class="btn-more-link hidden">
                                                                                <a href="/trung-tam-janhome-phan-phoi-san-go-gia-re-chat-luong-tai-nghe-an.html" class="readmore btn-link">Read more<i class="space-padding-l5 fa fa-angle-right"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end latest-posts-body -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php get_footer();?>