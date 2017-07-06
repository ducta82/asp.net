<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sango
 */

?>
<script> $(document).ready(function(){
  $('.online-support').hide();
  $('.support-icon-right h3').click(function(e){
    e.stopPropagation();
    $('.online-support').slideToggle();
  });
  $('.online-support').click(function(e){
    e.stopPropagation();
  });
  $(document).click(function(){
    $('.online-support').slideUp();
  });
  
});</script>
<div class="support-icon-right">
<h3><i class="fa fa-hand-o-right"></i> Chat Live Facebook</h3>
<div class="online-support">
<div class="fb-page"
data-href="https://www.facebook.com/JanHomeVietNam"
data-small-header="true"
data-height="300"
data-width="250"
data-tabs="messages"
data-adapt-container-width="false"
data-hide-cover="false"
data-show-facepile="false"
data-show-posts="false">
</div>
</div>
</div>

<div class="footer-mobile">
		<ul>
			<li><a href="/lien-he" title="Home"><i class="fcontact"></i>Liên hệ</a></li>
			<li><a href="tel:18000022" title="Call"><i class="call"></i>Gọi</a></li>
			<li><a href="https://m.me/JanHomeVietNam" title="Facebook Chat"><i class="chat"></i>Facebook Chat</a></li>
		</ul>
	</div>
<footer id="footer">
 
  <div class="footer-top " id="pavo-footer-top">
	<div class="container"><div class="inner">
				<div class="row">	
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border-line "><div class="widget-html">
	<div class="widget-inner">
		<div class="col-lg-12  listmap hidden-xs footer-nm">        
    <div id="accordion" class="panel-group">
    <p style="text-align: center;    color: #2957a4;    font-weight: 600;font-size: 20px;">HỆ THỐNG BÁN HÀNG TẠI KHO JANHOME<br></p>
    <div class="panel panel-default" style="background:#ffffff">   
                 <div class="panel-heading" style="background:#f26b35">                    
                 <div class="table-responsive">                        
                 <table width="100%" height="25">                            
                 <tbody>
                 <tr>                                
                 <td width="14.25%">                                    
                 <a href="#hanoi" data-parent="#accordion" data-toggle="collapse" style="color: #ffffff;" aria-expanded="true" class="">Hà Nội </a></td>
                 <td width="14.25%"><a href="#haiduong" data-parent="#accordion" data-toggle="collapse" style="color: #ffffff;" class="collapsed" aria-expanded="false">Hải Dương</a>                                
                 </td>                                
                 <td width="14.25%">                                    
                 <a href="#daklak" data-parent="#accordion" data-toggle="collapse" style="color: #ffffff;" class="collapsed" aria-expanded="false">Đắk Lắk </a></td>                                
                 <td width="14.25%">                                    
                 <a href="#thainguyen" data-parent="#accordion" data-toggle="collapse" style="color: #ffffff;" class="collapsed" aria-expanded="false">Thái Nguyên </a></td>                                
                 <td width="14.25%"><a href="#nghean" data-parent="#accordion" data-toggle="collapse" style="color: #ffffff;" class="collapsed" aria-expanded="false">Nghệ An </a></td>
                 <td width="14.25%"><a href="#quangninh" data-parent="#accordion" data-toggle="collapse" style="color: #ffffff;" class="collapsed" aria-expanded="false">Quảng Ninh </a></td>
                 <td width="14.25%"><a href="#thanhhoa" data-parent="#accordion" data-toggle="collapse" style="color: #ffffff;" class="collapsed" aria-expanded="false">Thanh Hóa</a></td>                            
                 </tr>                        
                 </tbody>
                 </table>                    
                 </div>                
                 </div>                
                 <div class="panel-collapse collapse in" id="hanoi" aria-expanded="true">                    
                 <div class="panel-body">                        
                 <div class="table-responsive">                            
                 <table class="table">                                
                 <tbody>                                    
                 <tr>
                 <td class="border-rb no-border-top">                                        
                 <div class="tit-mart">JANHOME Nguyễn Xiển</div>                                        
                 <div class="add-mart">Kho 28 - Ngõ 300 Nguyễn Xiển (đi vào 150m), Thanh Trì</div>
                 <div class="add-mart">ĐT : <a href="tel:0935962233" style="color:blue">0935 96 22 33</a> - <a class="map-mart" href="#" style="color:blue">Bản đồ đường đi</a>
                 </div>
                 </td>    
                 <td class="border-rb no-border-top">                                        
                 <div class="tit-mart">JANHOME Từ Liêm</div>                                        
                 <div class="add-mart">Kho 21 -49 Phạm Văn Đồng(Cạnh Bộ Công An), Bắc Từ Liêm</div>
                 <div class="add-mart">ĐT : <a href="tel:0906302233" style="color:blue">0906 30 22 33</a> - <a class="map-mart" href="#" style="color:blue">Bản đồ đường đi</a>
                 </div></td>    <td class="border-rb no-border-top">                                        <div class="tit-mart">                                            JANHOME Long Biên</div>                                        <div class="add-mart">Số 3 Ngô gia tự, P. Đức Giang, Q. Long Biên</div><div class="add-mart">ĐT : <a href="tel:0939632233" style="color:blue">0939 63 22 33</a> - <a class="map-mart" href="#" style="color:blue">Bản đồ đường đi</a></div></td>                                                                                                                                                              </tr></tbody></table>                        </div>                    </div>                </div>                <div class="panel-collapse collapse" id="haiduong" aria-expanded="false" style="height: 0px;">                    <div class="panel-body" style="background:#ffffff">                        <div class="table-responsive">                            <table class="table">                                <tbody><tr>    <td class="border-rb no-border-top">                                        <div>                                            JANHOME Hải Dương</div>                                        <div class="add-mart">377 Thanh Niên, Thành Phố Hải Dương</div>                                        <div class="add-mart">ĐT: <a href="tel:0975922233" style="color:blue">0975 92 22 33</a> </div>    <a class="map-mart" href="#" style="color:blue">Bản đồ đường                                            đi</a>                                    </td>                                                                    </tr>                            </tbody></table>                        </div>                    </div>                </div>                <div class="panel-collapse collapse" id="daklak" aria-expanded="false" style="height: 0px;">                    <div class="panel-body">                        <div class="tit-mart">                            JANHOME Đắk Lắk</div>                     <div class="add-mart">157 Phan Bội Châu, Thống Nhất, Buôn Ma Thuột, Đắk Lắk </div>                       <div class="add-mart">G28B Trần Khánh Dư, Tân Lợi, Buôn Ma Thuột, Đắk Lắk</div><div class="add-mart">ĐT : <a href="tel:0901682233" style="color:blue">0901 68 22 33</a> - <a class="map-mart" href="#" style="color:blue">Bản đồ đường                                            đi</a></div>                    </div>                </div>                <div class="panel-collapse collapse" id="thainguyen" aria-expanded="false">                    <div class="panel-body">                        <div>                            JANHOME Phổ Yên</div>					<div class="add-mart">Trường Chinh, Nam Tiến, Phổ Yên, Thái Nguyên </div>                        <div class="add-mart">ĐT: <a href="tel:0972432233" style="color:blue">0972 43 22 33</a> </div>                        <a class="map-mart" href="#" style="color:blue">Bản đồ đường                            đi</a>                    </div>                </div>                                                <div class="panel-collapse collapse" id="nghean" aria-expanded="false">                    <div class="panel-body">                        <div class="table-responsive">                            <table width="100%" class="table">                                <tbody><tr>    <td class="border-rb no-border-top">                                        <div class="sapkhaitruong">                                            JANHOME Nghệ An</div>                                        <div class="add-mart">ĐT: <a href="tel:18000022" style="color:blue">1800 0022</a> </div>    <a class="map-mart" href="#" style="color:blue">Bản đồ đường                                            đi</a>                                    </td>                                                                    </tr>                            </tbody></table>                        </div>                    </div>                </div>                <div class="panel-collapse collapse" id="quangninh" aria-expanded="false">                    <div class="panel-body">                        <div class="sapkhaitruong">                            JANHOME Cẩm Phả</div>                        <div class="add-mart">ĐT: <a href="tel:18000022" style="color:blue">1800 0022</a> </div>                        <a class="map-mart" href="#" style="color:blue">Bản đồ đường                            đi</a>                    </div>                </div>                <div class="panel-collapse collapse" id="thanhhoa" aria-expanded="false">                    <div class="panel-body">                        <div class="sapkhaitruong">                            JANHOME Thanh Hóa</div>                        <div class="add-mart">ĐT: <a href="tel:18000022" style="color:blue">1800 0022</a> </div>                        <a class="map-mart" href="#" style="color:blue">Bản đồ đường                            đi</a>                    </div>                </div>            </div>            <div class="panel panel-default" style="background:#ffffff">                <div class="panel-heading" style="background:#f26b35">                    <div class="table-responsive">                        <table width="100%" height="25">                            <tbody><tr><td width="14.25%"><a href="#bacgiang" data-parent="#accordion" data-toggle="collapse" style="color: #ffffff;" class="collapsed" aria-expanded="false">Bắc Giang</a></td><td width="14.25%"><a href="#hanam" data-parent="#accordion" data-toggle="collapse" style="color: #ffffff;" class="collapsed" aria-expanded="false">Hà Nam</a></td><td width="14.25%"><a href="#haiphong" data-parent="#accordion" data-toggle="collapse" style="color: #ffffff;" class="collapsed" aria-expanded="false">Hải Phòng</a></td><td width="14.25%"><a href="#namdinh" data-parent="#accordion" data-toggle="collapse" style="color: #ffffff;" class="collapsed" aria-expanded="false">Nam Định</a></td><td width="14.25%"><a href="#phutho" data-parent="#accordion" data-toggle="collapse" style="color: #ffffff;" class="collapsed" aria-expanded="false">Phú Thọ</a></td><td width="14.25%"><a href="#danang" data-parent="#accordion" data-toggle="collapse" style="color: #ffffff;" class="collapsed" aria-expanded="false">Đà Nẵng</a></td><td width="14.25%"><a href="#vinhphuc" data-parent="#accordion" data-toggle="collapse" style="color: #ffffff;" class="collapsed" aria-expanded="false">Vĩnh Phúc</a></td>                            </tr>                        </tbody></table>                    </div>                </div>                <div class="panel-collapse collapse" id="bacgiang" aria-expanded="false">                    <div class="panel-body">                        <div class="sapkhaitruong">                            JANHOME Bắc Giang</div>                        <div class="add-mart">ĐT: <a href="tel:18000022" style="color:blue">1800 0022</a> </div>                        <a class="map-mart" href="#" style="color:blue">Bản đồ đường                            đi</a>                    </div>                </div>                <div class="panel-collapse collapse" id="hanam" aria-expanded="false">                    <div class="panel-body">                        <div class="sapkhaitruong">                            JANHOME Phủ Lý</div>                        <div class="add-mart">ĐT: <a href="tel:18000022" style="color:blue">1800 0022</a> </div>                        <a class="map-mart" href="#" style="color:blue">Bản đồ đường                            đi</a>                    </div>                </div>                <div class="panel-collapse collapse" id="haiphong" aria-expanded="false">                    <div class="panel-body">                        <div class="table-responsive">                            <table width="100%" class="table">                                <tbody><tr>    <td class="border-rb no-border-top">                                        <div class="sapkhaitruong">                                            JANHOME Hải Phòng</div>                                        <div class="add-mart">ĐT: <a href="tel:18000022" style="color:blue">1800 0022</a> </div>    <a class="map-mart" href="#" style="color:blue">Bản đồ đường                                            đi</a>                                    </td>                                                                    </tr>                            </tbody></table>                        </div>                    </div>                </div>                <div class="panel-collapse collapse" id="namdinh" aria-expanded="false">                    <div class="panel-body">                        <div class="sapkhaitruong">                            JANHOME Nam Định</div>                        <div class="add-mart">ĐT: <a href="tel:18000022" style="color:blue">1800 0022</a> </div>                        <a class="map-mart" href="#" style="color:blue">Bản đồ đường                            đi</a>                    </div>                </div>                <div class="panel-collapse collapse" id="phutho" aria-expanded="false">                    <div class="panel-body">                        <div class="sapkhaitruong">                            JANHOME Việt Trì</div>                        <div class="add-mart">ĐT: <a href="tel:18000022" style="color:blue">1800 0022</a> </div>                        <a class="map-mart" href="#" style="color:blue">Bản đồ đường                            đi</a>                    </div>                </div>                <div class="panel-collapse collapse" id="danang" aria-expanded="false" style="height: 0px;">                    <div class="panel-body">                        <div class="sapkhaitruong">                            JANHOME Đà Nẵng</div>                        <div class="add-mart">ĐT: <a href="tel:18000022" style="color:blue">1800 0022</a> </div>                        <a class="map-mart" href="#" style="color:blue">Bản đồ đường                            đi</a>                    </div>                </div>                <div class="panel-collapse collapse" id="vinhphuc" aria-expanded="false">                    <div class="panel-body">                        <div class="sapkhaitruong">                            JANHOME Vĩnh Yên</div>                        <div class="add-mart">ĐT: <a href="tel:18000022" style="color:blue">1800 0022</a> </div>                        <a class="map-mart" href="#" style="color:blue">Bản đồ đường                            đi</a>                    </div>                </div>            </div>            <div class="panel panel-default" style="background:#ffffff">                <div class="panel-heading" style="background:#f26b35">                    <div class="table-responsive">                        <table width="100%" height="25">                            <tbody><tr><td width="14.25%"><a href="#bacninh" data-parent="#accordion" data-toggle="collapse" style="color: #ffffff;" class="collapsed" aria-expanded="false">Bắc Ninh</a></td><td width="14.25%"><a href="#hatinh" data-parent="#accordion" data-toggle="collapse" style="color: #ffffff;" class="collapsed" aria-expanded="false">Hà Tĩnh</a></td><td width="14.25%"><a href="#laocai" data-parent="#accordion" data-toggle="collapse" style="color: #ffffff;" class="collapsed" aria-expanded="false">Lào Cai</a></td><td width="14.25%"><a href="#ninhbinh" data-parent="#accordion" data-toggle="collapse" style="color: #ffffff;" class="collapsed" aria-expanded="false">Ninh Bình</a></td><td width="14.25%"><a href="#quangbinh" data-parent="#accordion" data-toggle="collapse" style="color: #ffffff;" class="collapsed" aria-expanded="false">Quảng Bình</a></td><td width="14.25%"><a href="#thaibinh" data-parent="#accordion" data-toggle="collapse" style="color: #ffffff;" class="collapsed" aria-expanded="false">Thái Bình</a></td><td width="14.25%"><a href="#yenbai" data-parent="#accordion" data-toggle="collapse" style="color: #ffffff;" class="collapsed" aria-expanded="false">Yên Bái</a></td>                            </tr>                        </tbody></table>                    </div>                </div>                <div class="panel-collapse collapse" id="bacninh" aria-expanded="false">                    <div class="panel-body">                        <div class="table-responsive">                            <table width="100%" class="table">                                <tbody><tr>    <td class="border-rb no-border-top">                                        <div class="sapkhaitruong">                                            JANHOME Bắc Ninh</div>                                        <div class="add-mart">ĐT: <a href="tel:18000022" style="color:blue">1800 0022</a> </div>    <a class="map-mart" href="#" style="color:blue">Bản đồ đường đi</a>                                    </td>                                                                   </tr>                            </tbody></table>                        </div>                    </div>                </div>                <div class="panel-collapse collapse" id="hatinh" aria-expanded="false">                    <div class="panel-body">                        <div class="sapkhaitruong">                            JANHOME Hà Tĩnh</div>                        <div class="add-mart">ĐT: <a href="tel:18000022" style="color:blue">1800 0022</a> </div>                        <a class="map-mart" href="#" style="color:blue">Bản đồ đường                            đi</a> <span class="opened"></span>                    </div>                </div>                <div class="panel-collapse collapse" id="laocai" aria-expanded="false">                    <div class="panel-body">                        <div class="sapkhaitruong">                            JANHOME Lào Cai</div>                        <div class="add-mart">ĐT: <a href="tel:18000022" style="color:blue">1800 0022</a> </div>                        <a class="map-mart" href="#" style="color:blue">Bản đồ đường đi</a> <span class="img-soon"></span>                    </div>                </div>                <div class="panel-collapse collapse" id="ninhbinh" aria-expanded="false">                    <div class="panel-body">                        <div class="sapkhaitruong">                            JANHOME Ninh Bình                        </div>                        <div class="add-mart">ĐT: <a href="tel:18000022" style="color:blue">1800 0022</a> </div>                        <a class="map-mart" href="#" style="color:blue">Bản đồ đường đi</a>                    </div>                </div>                <div class="panel-collapse collapse" id="quangbinh" aria-expanded="false">                    <div class="panel-body">                        <div class="sapkhaitruong">                            JANHOME Đồng Hới</div>                        <div class="add-mart">ĐT: <a href="tel:18000022" style="color:blue">1800 0022</a> </div>                        <a class="map-mart" href="#" style="color:blue">Bản đồ đường                            đi</a> <span class="opened"></span>                    </div>                </div>                <div class="panel-collapse collapse" id="thaibinh" aria-expanded="false">                    <div class="panel-body">                        <div class="sapkhaitruong">                            JANHOME Thái Bình</div>                        <div class="add-mart">ĐT: <a href="tel:18000022" style="color:blue">1800 0022</a> </div>                        <a class="map-mart" href="#" style="color:blue">Bản đồ đường                            đi</a>                    </div>                </div>                <div class="panel-collapse collapse" id="yenbai" aria-expanded="false">                    <div class="panel-body">                        <div class="sapkhaitruong">                            JANHOME Yên Bái</div>                        <div class="add-mart">ĐT: <a href="tel:18000022" style="color:blue">1800 0022</a> </div>                        <a class="map-mart" href="#" style="color:blue">Bản đồ đường                            đi</a></div>                </div>            </div>        </div>    </div>	</div>
</div>
</div>
		</div>	
			
	</div></div>
</div>


  <div class="footer-center " id="pavo-footer-center">

  <div class="container">

    <div class="inside space-padding-tb-40">

      <div class="row">

        
        <div class="col-md-2 col-sm-6 col-xs-12 column">

          <div class="panel">

            <div class="panel-heading"><h5 class="panel-title">Thông tin</h5></div>

            <div class="panel-body">

              <ul class="list-unstyled">

                
                <li><a href="/chinh-sach-quy-dinh">Chính sách &amp; Quy Định</a></li>

                
                <li><a href="/chinh-sach-bao-mat">Chính sách bảo mật</a></li>

                
                <li><a href="/chinh-sach-giao-hang">Chính sách giao hàng</a></li>

                
                <li><a href="/chinh-sach-dai-ly">Chính sách đại lý</a></li>

                
                <li><a href="/hinh-thuc-thanh-toan">Hình thức thanh toán</a></li>

                
                <li><a href="/quy-dinh-bao-hanh">Quy định bảo hành</a></li>

                
              </ul>

            </div>

          </div>

        </div>

        
        <div class="col-md-2 col-sm-6 col-xs-12 column">

          <div class="panel">

            <div class="panel-heading"><h5 class="panel-title">Chức năng khác</h5></div>

            <div class="panel-body">

              <ul class="list-unstyled">

                <li><a href="/index.php?route=product/manufacturer">Thương hiệu - hãng</a></li>

                <li><a href="/index.php?route=account/voucher">Phiếu quà tặng</a></li>

                <li><a href="/index.php?route=affiliate/account">Đại lý quảng cáo</a></li>

                <li><a href="/index.php?route=product/special">Khuyến mãi</a></li>

				<li><a href="http://sango.com.vn/lien-he"></i>Liên hệ</a></li>

				<li><a href="#">Sơ đồ trang</a></li>

              </ul>

            </div>

          </div>

        </div> 

        <div class="col-md-2 col-sm-6 col-xs-12 column">

          <div class="panel">

            <div class="panel-heading"><h5 class="panel-title">Tài khoản của tôi</h5></div>

            <div class="panel-body">

              <ul class="list-unstyled">

                <li><a href="/index.php?route=account/account">Tài khoản của tôi</a></li>

                <li><a href="/index.php?route=account/order">Lịch sử đơn hàng dịch vụ</a></li>

                <li><a href="/index.php?route=account/wishlist">Danh sách yêu thích</a></li>

                <li><a href="/index.php?route=account/newsletter">Thư thông báo</a></li>

              </ul>

            </div>

          </div>

        </div>

        <div class="col-xs-12 col-sm-6 col-md-3 column">

          
          <div class="panel pull-right">                    						<div class="panel-heading">    						<h6 class="panel-title">Chúng tôi</h6>						</div>						<div class="panel-body">       							<p>								JANHOME là hệ thống bán lẻ vật liệu sàn gỗ, sàn nhựa, giấy dán tường, vật liệu hoàn thiện tại kho được thành lập năm 2004 đến nay đã có uy tín hơn 13 năm trên thị trường vật liệu xây dựng nói chung.</p><p> JANHOME là hệ thống có mặt trên toàn quốc với những trung tâm uy tín tại Hà Nội, TP Hồ Chí Minh, Đà Nẵng và các tỉnh thành khác.</p></div><a href="http://online.gov.vn/CustomWebsiteDisplay.aspx?DocId=15909"><img alt="Đã Đăng ký với Bộ Công Thương" class="lazy" src="https://www.sango.com.vn/bo-cong-thuong.png" data-original="https://www.sango.com.vn/bo-cong-thuong.png" width="40%" rel="nofollow" data-pin-nopin="true" style="line-height: 1.42857; text-align: center; float: left; padding-right: 5px; display: block; width: 100px; height: 39.6226px;"></a><div style="text-align: left;"><a href="http://online.gov.vn/CustomWebsiteDisplay.aspx?DocId=15909"></a><br></div><div style="text-align: left;"><a href="http://www.dmca.com/Protection/Status.aspx?ID=a215dd4a-efb5-4369-ab0c-c224ebf4e7a1&amp;refurl=http://sango.com.vn/" title="DMCA.com Protection Status" rel="nofollow" class="dmca-badge" style="line-height: 1.42857; background-color: rgb(255, 255, 255);"><img src="<?php echo THEME_URI;?>/images.dmca.com/Badges/dmca_protected_sml_120m.png_-593863513.jpg" alt="DMCA.com Protection Status" data-pin-nopin="true" style="width: 111px; height: 22.3396px;margin-top: -25px;"></a><br></div><a href="http://www.dmca.com/Protection/Status.aspx?ID=a215dd4a-efb5-4369-ab0c-c224ebf4e7a1&amp;refurl=http://sango.com.vn/" title="DMCA.com Protection Status" class="dmca-badge"> </a></div>            

           

        </div>

        <div class="col-xs-12 col-sm-6 col-md-3 column">

         <div class="custom-logo" style="line-height: 1.4;"><address class="space-top-10"><span style="font-weight: bold; text-transform: uppercase; line-height: 1.42857;">HỆ THỐNG BÁN LẺ VẬT LIỆU HOÀN THIỆN TẠI KHO<br></span><span style="font-weight: bold;">HOTLINE</span> : <a href="tel:18000022">1800 0022</a></address></div>

			<iframe width="100%" height="220" src="https://www.google.com/maps/d/embed?mid=1xHioeCHPf5Iaj6FQeLRtVjrfeX0"></iframe>

        </div>

   

      </div>

    </div>

  </div>

</div>

<div class="footer-link"><a href="#san-go-cong-nghiep" id="#san+go+cong+nghiep" name="Sàn gỗ công nghiệp">Sàn gỗ công nghiệp</a> <a href="#">Sàn gỗ ngoài trời</a> <a href="#">Sàn gỗ cao cấp</a> <a href="#">Sàn gỗ Janmi</a> <a href="#">Sàn gỗ Awood</a> <a href="#">Sàn gỗ giá rẻ</a> <a href="#">Sàn gỗ WINEO</a> <a class="last" href="#">Phụ kiện sàn gỗ</a>&nbsp;<a href="#san+go" id="#san+go" name="sàn gỗ">sàn gỗ</a> <a href="#" rel="publisher">Google+</a></div>


  

</footer>
<!-- 
 -->
 <div id="powe#F26B35">
  <div class="container">
    <div class="inside">
      <div class="clearfix space-padding-tb-40">
        <div class="copyright">
        <div id="powe#F26B35">Copyright 2004 Janco - Powe#F26B35 by <a href="https://sango.com.vn">Sàn gỗ</a><br>
Bản quyền thuộc Janco, ghi rõ nguồn gốc khi phát hành lại thông tin trên website này.<br>
Số Giấy Phép ĐKKD / MST: 0101438181 - Do Sở Kế Hoạch Đầu Tu Hà Nội cấp ngày 28/11/2016<br>
Công ty Cổ Phần Xuất Nhập Khẩu Tháng Giêng - Tầng 3, Nhà C2, Số 289A Đường Khuất Duy Tiến, Phường Trung Hòa, Quận Cầu Giấy, Hà Nội - Tel: (04) 6265 2233 - Email: info@janco.com.vn<p></p></div>
        </div>           
      </div>
  </div>
</div>

</div>




</div>
 <div class="sidebar-offcanvas  visible-xs visible-sm">
      <div class="offcanvas-inner  panel-offcanvas">
          <div class="offcanvas-heading">
              <button data-toggle="offcanvas" class="btn btn btn-primary" type="button"> <span class="fa fa-times"></span></button>
          </div>
          <div class="offcanvas-body">
                <div id="offcanvasmenu"></div> 
          </div>
          <div class="offcanvas-footer panel-footer">
              <div class="input-group" id="offcanvas-search">
                <input type="text" class="form-control" placeholder="Search" value="" name="search">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                </span>
              </div>
          </div>
       </div> 
 </div>

<script type="text/javascript">
  $("#offcanvasmenu").html($("#bs-megamenu").html());
</script>
 
</div>
<nav class="bs-docs-sidebar hidden">
	<ul id="sidebar" class="nav nav-stacked fixed">

	</ul>
</nav>
<?php wp_footer(); ?>
</body>
</html>





