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
$phone_number_contact = ot_get_option( 'phone_number_contact');
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
<div class="fb-page" data-href="https://www.facebook.com/JanHomeVietNam" data-small-header="true" data-height="300" data-width="250" data-tabs="messages" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false" data-show-posts="false">
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
<?php
    $address = get_terms( 'cat-address', array(
                    'order'=> 'DESC',
                    'orderby' => 'none',
                    'hide_empty' => 0,
                    'parent' => 0
                ) );
    $count = count($address);   
    $y = $count%7;
    $x = (($count - $y)/7)+1;
    $arg = array('one','two','three');
    //print_r(array_slice($address, 7));exit();
    $arg2 = array();
    for ($i=1; $i <= $x ; $i++) { 
        $j = $i == $x ? $y : 7 ;
        echo '<div class="panel panel-default" style="background:#ffffff">';
            for ($k=1; $k <= $j ; $k++) { 
                //$parent_cls = $i== 1 && $k == 1 ? 'true' : 'false';
                $start = $k == 1 ? '<div class="panel-heading" style="background:#f26b35"><div class="table-responsive"><table width="100%" height="25"><tbody><tr>' : '';
                $end = $k == $j ? '</tr></tbody></table></div></div>' : '';
                echo $start;
                echo '<td width="14.25%"><a href="#'.$address[$k-1]->slug.'" data-parent="#accordion" data-toggle="collapse" style="color: #ffffff;" class="collapsed" aria-expanded="false">'.$address[$k-1]->name.'</a></td>';
                echo $end;
            }
            for ($l=1; $l <= $j; $l++) { 
                $args = array(
                'post_type' => 'address',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'post_status' => 'publish',
                'tax_query' => array(
                        array(
                            'taxonomy' => 'cat-address',
                            'field'    => 'term_id',
                            'terms'    => $address[$l-1]->term_id
                        ),
                    ),
                );              
            $the_query = new WP_Query( $args );
            //print_r('found_posts = '.$the_query->found_posts.'l = '.$l.'j = '.$j);exit();
            $m = 1;
            if($the_query->have_posts() ) { 
                while ( $the_query->have_posts() ) : $the_query->the_post(); 
                //$cls = $i== 1 && $m == 1 ? 'true' : 'false';
                $sub_start = $m == 1 ? '<div class="panel-collapse collapse" id="'.$address[$l-1]->slug.'" aria-expanded="false"><div class="panel-body"><div class="table-responsive"><table width="100%" class="table"><tbody><tr>' : '';
                $sub_end = $m == $the_query->found_posts ? '</tr></tbody></table></div></div></div>' :'';
                $id = get_the_id();
                $phone = get_field('address_phone',$id);
                $sapkhaitruong = get_field('address_sapkhaitruong',$id);
                if($sapkhaitruong == 'yes'){
                  echo $sub_start;
                  echo '<td class="border-rb no-border-top">
                          <div class="sapkhaitruong"> JANHOME '.get_the_title().'</div>
                          <div class="add-mart">ĐT: <a href="tel:'.$phone.'" style="color:blue">'.$phone.'</a> </div> <a class="map-mart" href="#" style="color:blue">Bản đồ đường đi</a> 
                          </td>';
                  echo $sub_end;
                }else{
                   echo '<div class="panel-collapse collapse" id="'.$address[$l-1]->slug.'" aria-expanded="false">
                        <div class="panel-body">
                            <div class="sapkhaitruong"> JANHOME '.$address[$l-1]->name.'</div>
                            <div class="add-mart">ĐT: <a href="tel:'.$phone.'" style="color:blue">'.$phone.'</a> </div> <a class="map-mart" href="#" style="color:blue">Bản đồ đường đi</a> <span class="opened"></span> 
                        </div>
                        </div>';
                }                    
                $m++; endwhile;
            wp_reset_postdata();  
            }else{
                echo '<div class="panel-collapse collapse" id="'.$address[$l-1]->slug.'" aria-expanded="false">
                        <div class="panel-body">
                            <div class="sapkhaitruong"> JANHOME '.$address[$l-1]->name.'</div>
                            <div class="add-mart">ĐT: <a href="tel:'.$phone_number_contact.'" style="color:blue">'.$phone_number_contact.'</a> </div> <a class="map-mart" href="#" style="color:blue">Bản đồ đường đi</a> <span class="opened"></span> 
                        </div>
                        </div>';
            }
            }
            $address = array_slice($address, 7);  
        echo '</div>';
    }
    ?>     
</div>    
</div>	
</div>
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
            <?php
                 /**
                * Displays a navigation menu.
                *
                * @since 3.0.0
                */
                $arg_menu_footer = array(
                  'theme_location' => 'menu-footer1',
                  'container' => false,
                  'container_class' => 'collapse navbar-collapse',
                  'container_id' => '',
                  'menu_class' => 'list-unstyled',
                  'depth' => 2
                );
                wp_nav_menu( $arg_menu_footer );
            ?>

            </div>

          </div>

        </div>

        
        <div class="col-md-2 col-sm-6 col-xs-12 column">

          <div class="panel">

            <div class="panel-heading"><h5 class="panel-title">Chức năng khác</h5></div>

            <div class="panel-body">
            <?php
                 /**
                * Displays a navigation menu.
                *
                * @since 3.0.0
                */
                $arg_menu_footer = array(
                  'theme_location' => 'menu-footer2',
                  'container' => false,
                  'container_class' => 'collapse navbar-collapse',
                  'container_id' => '',
                  'menu_class' => 'list-unstyled',
                  'depth' => 2
                );
                wp_nav_menu( $arg_menu_footer );
            ?>

            </div>

          </div>

        </div> 

        <div class="col-md-2 col-sm-6 col-xs-12 column">

          <div class="panel">

            <div class="panel-heading"><h5 class="panel-title">Tài khoản của tôi</h5></div>

            <div class="panel-body">
            <?php
                 /**
                * Displays a navigation menu.
                *
                * @since 3.0.0
                */
                $arg_menu_footer = array(
                  'theme_location' => 'menu-footer3',
                  'container' => false,
                  'container_class' => 'collapse navbar-collapse',
                  'container_id' => '',
                  'menu_class' => 'list-unstyled',
                  'depth' => 2
                );
                wp_nav_menu( $arg_menu_footer );
            ?>

            </div>

          </div>

        </div>

        <div class="col-xs-12 col-sm-6 col-md-3 column">

          
         <div class="panel pull-right">
            <div class="panel-heading">
                <h6 class="panel-title">Chúng tôi</h6> </div>
            <div class="panel-body">
                 <?php
                    $info_footer = ot_get_option( 'info_footer');
                    echo $info_footer;
                ?>
            </div>
            <a href="#"><img alt="Đã Đăng ký với Bộ Công Thương" class="lazy" src="https://www.sango.com.vn/bo-cong-thuong.png" data-original="https://www.sango.com.vn/bo-cong-thuong.png" width="40%" rel="nofollow" data-pin-nopin="true" style="line-height: 1.42857; text-align: center; float: left; padding-right: 5px; display: block; width: 100px; height: 39.6226px;"></a>
            <div style="text-align: left;">
                <a href="#"></a>
                <br>
            </div>
            <div style="text-align: left;"><a href="#" title="DMCA.com Protection Status" rel="nofollow" class="dmca-badge" style="line-height: 1.42857; background-color: rgb(255, 255, 255);"><img src="<?php echo THEME_URI;?>/images.dmca.com/Badges/dmca_protected_sml_120m.png_-593863513.jpg" alt="DMCA.com Protection Status" data-pin-nopin="true" style="width: 111px; height: 22.3396px;margin-top: -25px;"></a>
                <br>
            </div>
            <a href="#" title="DMCA.com Protection Status" class="dmca-badge"> </a>
        </div>            

           

        </div>

        <div class="col-xs-12 col-sm-6 col-md-3 column">
         <div class="custom-logo" style="line-height: 1.4;"><address class="space-top-10"><span style="font-weight: bold; text-transform: uppercase; line-height: 1.42857;">HỆ THỐNG BÁN LẺ VẬT LIỆU HOÀN THIỆN TẠI KHO<br></span><span style="font-weight: bold;">HOTLINE</span> : <a href="<?php echo $phone_number_contact;?>"><?php echo $phone_number_contact;?></a></address></div>

			<iframe width="100%" height="220" src="https://www.google.com/maps/d/embed?mid=1xHioeCHPf5Iaj6FQeLRtVjrfeX0"></iframe>

        </div>

   

      </div>

    </div>

  </div>

</div>

<div class="footer-link">
    <?php
         /**
        * Displays a navigation menu.
        *
        * @since 3.0.0
        */
        $arg_menu_footer = array(
          'theme_location' => 'menu-footer4',
          'container' => false,
          'container_class' => 'collapse navbar-collapse',
          'container_id' => '',
          'menu_class' => 'list-unstyled',
          'depth' => 2
        );
        wp_nav_menu( $arg_menu_footer );
    ?>
</div>
</footer>
<!-- 
 -->
 <div id="powe#F26B35">
  <div class="container">
    <div class="inside">
      <div class="clearfix space-padding-tb-40">
        <div class="copyright">
        <div id="powe#F26B35">
        <?php
            $info_footer2 = ot_get_option( 'info_footer2');
            echo $info_footer2;
        ?>
        </div>
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
                <form role="search" method="get" id="offcanvas-search"
            class="input-group" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <input class="form-control" type="text" value="<?php echo get_search_query(); ?>" name="s" autocomplete="off" placeholder="Tìm sản phẩm tại đây.." name="search"> 
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </span>    
                </form>
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





