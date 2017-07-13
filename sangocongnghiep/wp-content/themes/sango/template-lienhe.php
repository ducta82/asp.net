<?php
/**
 * Template Name: Lien He
 *
 * @package WordPress
 * @subpackage sango
 * @since sango 1.0
 */
get_header(); ?>
<?php the_breadcrumbs_product();?>
<div class="main-columns container space-20">
   <div class="container-inside"> 
  <div class="row"> 
   <div id="sidebar-main" class="col-md-12"><div id="content" class="space-padding-0"><div class="well">
      <!-- <h1 class="page-title"></h1> -->
      <h3>Thông tin của chúng tôi</h3>
      <div class="contact-location">
                  <iframe width="100%" height="450" src="https://www.google.com/maps/d/embed?mid=1xHioeCHPf5Iaj6FQeLRtVjrfeX0"></iframe>
      </div>
      </div></div>
   </div> 
</div>
</div>
</div>
     <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&language=en"></script>
    <script type="text/javascript" src="catalog/view/javascript/gmap/gmap3.min.js"></script>
    <script type="text/javascript" src="catalog/view/javascript/gmap/gmap3.infobox.js"></script>
    <script type="text/javascript">
        var mapDiv, map, infobox;
        var lat = 21.001404;
        var lon = 105.79275699999994;
        jQuery(document).ready(function($) {
            mapDiv = $("#contact-map");
            mapDiv.height(400).gmap3({
                map:{
                    options:{
                        center:[lat,lon],
                        zoom: 15
                    }
                },
                marker:{
                    values:[
                        {latLng:[lat, lon], data:"Công ty Cổ Phần Xuất Nhập Khẩu Tháng Giêng (Janco ), Hanoi, Vietnam"},
                    ],
                    options:{
                        draggable: false
                    },
                    events:{
                          mouseover: function(marker, event, context){
                            var map = $(this).gmap3("get"),
                                infowindow = $(this).gmap3({get:{name:"infowindow"}});
                            if (infowindow){
                                infowindow.open(map, marker);
                                infowindow.setContent(context.data);
                            } else {
                                $(this).gmap3({
                                infowindow:{
                                    anchor:marker, 
                                    options:{content: context.data}
                                }
                              });
                            }
                        },
                        mouseout: function(){
                            var infowindow = $(this).gmap3({get:{name:"infowindow"}});
                            if (infowindow){
                                infowindow.close();
                            }
                        }
                    }
                }
            });
        });
    </script>
<?php
get_footer();