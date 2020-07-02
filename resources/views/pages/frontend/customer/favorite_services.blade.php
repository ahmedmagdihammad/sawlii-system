@extends('layouts.frontend.master')
@section('title')
    Saved Freelance
@endsection
@section('content')


<script>
    $("header .navbar-default .navbar-nav>li.notification .dropdown-menu").mCustomScrollbar();
</script>
<!-- Your share button code -->
<div id="main-content">
  <!-- Dashboard Navigation -->
  @include('pages.frontend.freelancer.nav_dashboard')
<!-- Dashboard Navigation End -->

<!-- Page Content -->
<section class="main-dashboard">
   <div class="container">
      <div class="row">
        <div class="col-md-12">
            <div class="main-heading-wrap">
                <h1 class="main-heading">
                    Favourite Services
                </h1>
                <div class="main-heading-tool pull-right ">
                    <div class="remove_saved unsave">
                      <label class="signin-check" for="test10">
                          
                          <span class="remove removeServices">
                                Remove all
                          </span>
                          <!-- <input type="checkbox" id="test10" name="removeAll">
                          <span class="checkmark"></span> -->
                      </label>
                    </div>
                </div>
            </div>
           <div class="panel panel-default theme-box no-bg no-padding">
              
              <ul class="cust-fav-service-lists liststyle-none clearfix" id="fav_service_div">  
                <li class="pbox ctfs-item service_25">
                    <div class="pbox-body no-padding">
                        <div class="media">
                            <div class="media-left ctfs-thumb-wrap">
                                <div class="ctfs-like-btn">
                                    <a href="javascript:void(0)" data-id="25" title="Remove from favourites">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                                <div class="ctfs-thumb">
                                    <img src="{{asset('frontend/img/default-image_450.png')}}" class="media-object"/>
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="ctfs-wrap">
                                    <div class="ctfs-wrap-left-block ctfs-block">
                                        <h4 class="ctfs-title">
                                            <a href="{{route('service.test_service',$lang)}}" target="_blank">I am providing web development service</a>
                                        </h4>
                                        <ul class="post-breadcrumbs clearfix">
                                            <li>Web Developement</li>
                                            <li>Website Development</li>
                                        </ul>
                                        <ul class="ctfs-details-list mobile-view">
                                            <li>Price : <span class="amount-wrap">100<span>$</span></span>
                                            </li>
                                            <li>Sales : <span>1</span></li>
                                        </ul>
                                        <div class="media author-details">
                                            <div class="media-left">
                                                <div class="ctfs-author">
                                                    <img src="{{asset('frontend/img/3d6bf37d3377cca9aa6cfcbfb978c6d7.jpeg')}}" class="media-object">
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Jay Stark</h4>
                                                <div class="star-ratings-sprite">
                                                    <span style="width:100%" class="star-ratings-sprite-rating">
                                                </span>
                                                </div>
                                                <div class="ctfs-item-location"> <i class="fas fa-map-marker-alt"></i> Rajkot, Gujarat, India</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="ctfs-wrap-right-block ctfs-block desktop-view">
                                        <div class="ctfs-bgdt-wrap">
                                            <div class="ctfs-bgdt amount-wrap">100<span>$</span></div>
                                            <div class="ctfs-sales">Service Sold : 1</div>
                                        </div>
                                        <div class="view-more-btn">
                                            <a href="{{route('service.test_service',$lang)}}" target="_blank" class="btn btn-primary btn-block btn-bordered">View More Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

           
           <!-- <div class="view-more-button hide">
              <div class="theme-button %NO_RECORD% ">
                 <a href="javascript:void(0)" class="load_more_data hide" data-page="1">View More Services</a>
              </div>
           </div> -->

           <input type="hidden" id="service_id" name="service_id">
           <input type="hidden" name="removeAllServices" id="removeAllServices">
        </div>
      </div>
   </div>
</section>

<script type="text/javascript">
   url = "http://www.sukhadaam.com/demo/sawlii/ajaxCustomerFavServices";
   $(document).ready(function(e){
       $(document).on("click",".fa-heart",function(e){
            $("#delete").modal("show");
            var id = $(this).parent().attr("data-id");
            $("#service_id").val(id);
        });

       $(document).on("click",".removeServices",function(e){
           $("#removedelete").modal("show");
           $("#removeAllServices").val('remove');
       });

       $(document).on("click",".srremove",function(e){
            addOverlay();
            $.post(url,{"action":"delete_all"},
             function(data){
               if(data['type'] == "true"){
                  removeOverlay();  
                  $('.services').hide();
                  toastr['success']('Favourite service has been removed successfully');
                  location.reload(true);
               }
            },'json');
       });

       $(document).on("click",".service_delete",function(e){
            id = $("#service_id").val();
            $('.service_'+id).hide();
            addOverlay();
            $.post(url,{"action":"delete_service","service_id":id},
             function(data){
               if(data['type'] == "true"){
                  toastr['success']('Favourite service has been removed successfully');
               }
               removeOverlay();
            },'json');
       });

         var b_url = "http://www.sukhadaam.com/demo/sawlii/ajaxFreelancerBids";
         $(document).on("click",".load_more_data",function()
         {
               var pageNo = $(this).attr("data-page");
               var p_no = parseInt(pageNo)+1;
               addOverlay();
               $.post(b_url,{"action":"load_more_data","page_no":p_no},function(data){
                 removeOverlay();
                 $("#fav_service_div").append(data.content);
                 $(".load_more_data").addClass(data.btn);
                 $(".load_more_data").attr("data-page",data.pageno);
               },'json');
         });
   });
</script>
</div>
<!-- {GOOGLE_ANALYTIC_CODE} -->
<section class="email-subscribe-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="newsletter-wrap">
                    <div class="newsletter-object"></div>
                     <div class="newsletter-content">
                        <h2 class="main-title">Subscribe to our Newsletter</h2>
                        <div class="title-info">Subscribe to receive news and updates with your Email Address.</div>
                        <form class="newsletter-form" action="#" method="post" name="newsletterFrm" id="newsletterFrm">
                            <div class="form-group">
                                    <input class="form-control" name="email" id="email" placeholder="Email Address"/>
                                    <input type="hidden" name="action" id="action" value="subscribeUser">
                                    <button type="submit" name="newsletterSubscriber" id="newsletterSubscriber" class="btn btn-primary"><span>Subscribe</span></button>
                            </div>
                        </form>
                      </div>
                    <!-- <div class="row">
                      <div class="col-md-6 col-sm-7">
                       
                      </div>
                    </div> -->
                    <div class="newsletter-bg">
                      <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 5000.000000 1194.000000" preserveAspectRatio="xMidYMid meet">
                          <metadata>
                          Created by potrace 1.15, written by Peter Selinger 2001-2017
                          </metadata>
                          <g transform="translate(0.000000,1194.000000) scale(0.100000,-0.100000)"
                          fill="#28a8e0" stroke="none">
                          <path d="M3816 11814 c-200 -43 -394 -159 -581 -348 -196 -198 -358 -459 -455
                          -731 -17 -49 -114 -380 -215 -735 -391 -1373 -934 -3280 -1150 -4040 -377
                          -1326 -691 -2427 -971 -3410 -146 -514 -279 -997 -295 -1073 -38 -186 -53
                          -354 -46 -512 19 -436 186 -735 467 -837 l65 -23 24325 -3 c18057 -2 24340 0
                          24385 9 391 73 603 539 530 1161 -25 218 3 113 -462 1743 -134 473 -323 1136
                          -419 1473 -677 2378 -1016 3571 -1420 4989 -190 667 -363 1258 -385 1315 -205
                          527 -626 947 -1027 1024 -114 22 -42244 19 -42346 -2z"/>
                          </g>
                      </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection