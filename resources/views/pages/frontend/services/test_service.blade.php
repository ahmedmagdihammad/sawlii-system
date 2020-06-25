@extends('layouts.frontend.master')
@section('title')
    Test Service
@endsection
@section('content')

<!-- Your share button code -->
<div id="main-content">
  <section class="dashboard-navigation">
      <div class="container">
         <div class="row">
               <div class="col-md-12">
                  <!-- sidenav mobile view -->
                  <div class="tablet-view">
                     <div id="mySidenav" class="sidenav">
                           <a href="javascript:void(0)" class="closebtn">&times;</a>
                           <ul class="dashboard-navbar">
                              <li class="">
                                 <a href="{{route('signin',$lang)}}">Dashboard</a>
                              </li>
                              <li  class="">
                                 <a href="{{route('signin',$lang)}}">My Jobs</a>
                              </li>
                              <li  class="">
                                 <a href="{{route('signin',$lang)}}">My Reviews</a>
                              </li>
                              <li  class="">
                                 <a href="{{route('signin',$lang)}}">Financial Dashboard</a>
                              </li>
                              <li  class="">
                                 <a href="{{route('signin',$lang)}}">Service Orders</a>
                              </li>
                              <li  class="">
                                 <a href="{{route('signin',$lang)}}">Saved Freelancers</a>
                              </li>
                              <li  class="">
                                 <a href="{{route('signin',$lang)}}">Favourite Services</a>
                              </li>
                           </ul>
                     </div>
                     <div class="dashboard-btn">
                           <a href="javascript:void(0)" id="dashboardMenu" class="btn btn-bar btn-primary">
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                           </a>
                           <h4>Dashboard</h4>
                     </div>
                  </div>
                  <!-- sidenav mobile view --> 

                  <ul class="dashboard-navbar tablet-hide">
                     <li class="">
                           <a href="{{route('signin',$lang)}}">Dashboard</a>
                     </li>
                     <li class="">
                           <a href="{{route('signin',$lang)}}">Posted Jobs</a>
                     </li>
                     <li class="">
                           <a href="{{route('signin',$lang)}}">My Reviews</a>
                     </li>
                     <li class="">
                           <a href="{{route('signin',$lang)}}">Financial Dashboard</a>
                     </li>
                     <li class="">
                           <a href="{{route('signin',$lang)}}">Service Orders</a>
                     </li>
                     <li class="">
                           <a href="{{route('signin',$lang)}}">Saved Freelancers</a>
                     </li>
                     <li class="">
                           <a href="{{route('signin',$lang)}}">Favourite Services</a>
                     </li>
                  </ul>
               </div>
         </div>
      </div>
   </section>
<section class="detail-section">
  <div class="container">
    <form method="post" name="#" id="#">
      <div class="row">
          <div class="col-md-8 col-sm-8">
              <div class="job-detail-wrap service-detail-wrap">
                  <div class="pbox no-padding">
                    <div class="service-featured "><span><i class="fa fa-star"></i></span></div>
                    <div class="pbox-header no-margin">
                      <h1 class="pbox-title">Test service</h1>
                      <div class="pbox-breadcrumb">Accounts & Consultants <span><i class="fa fa-angle-right"></i></span> Accounting Solutions</div>
                    </div>
                    <div class="pbox-slider-body">
                      <div class="row">
                        <div class="col-sm-12">
                          <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:600px;height:300px;overflow:hidden;visibility:hidden;">
                             <!-- Loading Screen -->
                             <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
                                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;">
                                </div>
                                <div style="position:absolute;display:block;background:url('images/slider/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;">
                                </div>
                             </div>
                             <div class="slider_pg" data-u="slides" style="cursor:pointer;position:relative;top:0px;left:0px;width:600px;height:300px;overflow:hidden;">
                                <div>
                                    <img data-u="image" src="{{asset('frontend/img/6f3190fde78194fae38887ac165068c2.png')}}"/>
                                    <img data-u="thumb" src="{{asset('frontend/img/6f3190fde78194fae38887ac165068c2.png')}}"/>
                                 </div>
                             </div>
                             <!-- Thumbnail Navigator -->
                             <div data-u="thumbnavigator" class="jssort03" style="position:absolute;left:0px;bottom:0px;width:600px;height:60px;" data-autocenter="1">
                                <div style="position:absolute;top:0;left:0;width:100%;height:100%;background-color:#000;filter:alpha(opacity=30.0);opacity:0.5;">
                                </div>
                                <!-- Thumbnail Item Skin Begin -->
                                <div data-u="slides" style="cursor: pointer;">
                                   <div data-u="prototype" class="p">
                                      <div class="w">
                                         <div data-u="thumbnailtemplate" class="t">
                                         </div>
                                      </div>
                                      <div class="c">
                                      </div>
                                   </div>
                                </div>
                                <!-- Thumbnail Item Skin End -->
                             </div>
                             <!-- Arrow Navigator -->
                             <span data-u="arrowleft" class="jssora02l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2">
                             </span>
                             <span data-u="arrowright" class="jssora02r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2">
                             </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="pbox-body ">
                        <div class="pbox-body-panel">
                            <h3 class="pbox-body-title">About Service</h3>
                            <div class="pbox-body-info">
                                <p><p>test</p><br /> </p>
                            </div>
                        </div>
                        <div class="pbox-body-panel">
                            <h3 class="pbox-body-title">Required details for service</h3>
                            <div class="pbox-body-info">
                                <p>test</p>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="pbox service-detail-addons hide">
                    <div class="pbox-body no-padding">
                      <div class="pbox-body-panel addons-panel">
                        <h3 class="pbox-body-title">Add-ons</h3>
                        <div class="pbox-body-info">
                          <ul class="addons-items">
                            
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="pbox job-bid-wrap mobile-view">
                    <div class="pbox-body no-padding">
                      <div class="bid-details-wrap">
                        <div class="amount-wrap service_orignal_price" id="service_orignal_price" data-value="20">20<span>$</span></div>
                        <div class="service-quantity-wrap ">
                            <div class="form-group">
                                <div class="sp-quantity">
                                    <div class="sp-minus"><a class="ddd" href="#">-</a></div>
                                    <div class="sp-input">
                                        <input name="quantity" id="quantity" min=1 max=10 maxlength="3" class="quntity-input" value='1'>
                                    </div>
                                    <div class="sp-plus"><a class="ddd" href="#">+</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="job-action-wrap">
                          <div class="job-action-item job-save-wrap">
                            <a href="{{route('signin',$lang)}}" data-slug="#" class="#  ">
                           <i class="fa fa-heart-o" aria-hidden="true"></i>
                           <span id="#">0</span>
                            </a>
                          </div>
                          <div class="job-action-item job-report-wrap"><a href="#" data-toggle="modal" data-target="#report_service"><i class="fa fa-flag"></i></a><span>Report</span></div>
                        </div>
                        <ul class="bid-details-list">
                          <li><label>Delivery in</label><span class="total_days" data-days="2">2 day(s)</span></li>
                          <li><label>Views</label><span>2</span></li>
                          <li><label>Response in</label><span>0 minutes</span></li>
                          <li><label>Sales</label><span>0</span></li>
                        </ul>
                        <div class="place-bid-wrap buy_now  ">
                          <input type="hidden" name="action" id="action" value="payforOrder">
                          <input type="hidden" name="sid" id="sid" value="36">
                          <input type="hidden" name="price" id="price" value="20<span>$</span>">
                          <input type="hidden" name="addOnPrice" id="addOnPrice" value="">
                          <input type="hidden" name="deliveryDays" id="deliveryDays" value="2">
                          <input type="hidden" name="addOndeliveryDays" id="addOndeliveryDays" value="">
                          <button type="submit" name="submitData" id="submitData" class="btn btn-primary btn-block btn-lg">Buy Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="pbox service-faq">
                      <div class="pbox-body no-padding">
                          <div class="pbox-body-panel faq-panel">
                              <h3 class="pbox-body-title">Frequently Asked Questions</h3>
                              <div class="pbox-body-info">
                                   <div class="panel-group" id="accordion">
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                             <h5 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne_1">
                                                What is Service?
                                                </a>
                                             </h5>
                                          </div>

                                          <div id="collapseOne_1" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                <p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;</p>

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
          <div class="col-md-4 col-sm-4">
            <div class="pbox job-bid-wrap desktop-view">
              <div class="pbox-body no-padding">
                <div class="bid-details-wrap">
                  <div class="amount-wrap service_orignal_price" id="service_orignal_price" data-value="20">20<span>$</span></div>
                  <div class="service-quantity-wrap ">
                      <div class="form-group">
                          <div class="sp-quantity">
                              <div class="sp-minus"><a class="ddd" href="#">-</a></div>
                              <div class="sp-input">
                                  <input name="quantity" id="quantity" min=1 max=10 maxlength="3" class="quntity-input" value='1'>
                              </div>
                              <div class="sp-plus"><a class="ddd" href="#">+</a></div>
                          </div>
                      </div>
                  </div>
                  <div class="job-action-wrap">
                    <div class="job-action-item job-save-wrap">
                      <a href="{{route('signin',$lang)}}" data-slug="test-service-1" class="favourite_service  ">
                     <i class="fa fa-heart-o" aria-hidden="true"></i>
                     <span id="favourite_count">0</span>
                      </a>
                    </div>
                    <div class="job-action-item job-report-wrap"><a href="javascript:void(0);" data-toggle="modal" data-target="#report_service"><i class="fa fa-flag"></i></a><span>Report</span></div>
                  </div>
                  <ul class="bid-details-list">
                    <li><label>Delivery in</label><span class="total_days" data-days="2">2 day(s)</span></li>
                    <li><label>Views</label><span>2</span></li>
                    <li><label>Response in</label><span>0 minutes</span></li>
                    <li><label>Sales</label><span>0</span></li>
                  </ul>
                  <div class="place-bid-wrap buy_now  ">
                    <input type="hidden" name="action" id="action" value="payforOrder">
                    <input type="hidden" name="sid" id="sid" value="36">
                    <input type="hidden" name="price" id="price" value="20">
                    <input type="hidden" name="addOnPrice" id="addOnPrice" value="">
                    <input type="hidden" name="deliveryDays" id="deliveryDays" value="2">
                    <input type="hidden" name="addOndeliveryDays" id="addOndeliveryDays" value="">
                    <button type="submit" name="submitData" id="submitData" class="btn btn-primary btn-block btn-lg">Buy Now</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="pbox user-details-card">
                <div class="pbox-body no-padding">
                    <div class="user-details-wrap">
                        <div class="user-avatar-wrap">
                            <div class="user-avatar">
                                <img src="{{asset('frontend/img/th2_no_user_image.png')}}" title="Sejad Patani" />
                            </div>
                            <!-- <span class="user-label user-online" title="online"></span> -->
                        </div>
                        <div class="user-info-wrap">
                            <h3 class="user-title">Sejad Patani</h3>
                            <div class="star-ratings-sprite">
                                <span style="width:0%" class="star-ratings-sprite-rating"></span>
                            </div>
                            <div class="user-location-wrap">
                                <i class="fa fa-map-marker"></i> Nikava, Gujarat, India
                            </div>
                            <div class="user-chat-btn-wrap ">
                                <a href="javascript:void(0);" class="btn btn-primary btn-bordered message_send">
                                    <i class="fa fa-comments-o"></i> Send Message
                                </a>
                            </div>
                        </div>
                        <div class="user-work-wrap">
                          <ul class="user-work-lists">
                            <li><label>member since</label> <span>Oct, 2019</span></li>
                            <li><label>Posted Services</label> <span>1</span></li>
                            <li><label>Service orders</label> <span>0</span></li>
                            <li><label>Amount spent</label><span>$</span></li>
                          </ul>
                        </div>
                        <div class="user-desc-wrap">
                         <!--  <p>Praesent vel dapibus urna, nec imperdiet nunc. Sed vel tortor consequat, placerat nulla in, venenatis massa. <a href="#">Read More...</a></p> -->
                          <a href="{{route('review',$lang)}}">View all reviews and ratings</a>
                        </div>
                        <input type="hidden" name="serviceId" id="serviceId" value="test-service-1">
                    </div>
                </div>
            </div>
          </div>
      </div>
    </form>
  </div>
</section>
<section class="related-service-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="related-service-title">Recommended for you</h4>
                <div class="services-list-wrap related-service-wrap ">                    
                    <div id="relatedService" class="owl-carousel owl-theme related-service-slider">
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="report_service" role="dialog" tabindex="-1">
   <div class="modal-dialog">
      <!-- Modal content-->
      <form name="reportFrm" id="reportFrm" method="post">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">
                  &times;
               </button>
               <div class="media">
                  <div class="pull-left">
                     <div class="invite_img">
                        <img src="{{asset('frontend/img/th2_no_user_image.png')}}" title="Sejad Patani"/>
                     </div>
                  </div>
                  <div class="media-body">
                     <h4>
                        Sejad Patani
                     </h4>
                     <p>
                        
                     </p>
                     <input type="hidden" name="freelancerId" id="freelancerId" value="43">
                  </div>
               </div>
            </div>
            <div class="modal-body">
               <div class="form-group">
                  <label>
                     Reason
                  </label>
                  <input type="hidden" name="slug" id="slug" value="test-service-1">
                  <textarea class="form-control" name="report_reason" id="report_reason" pattern="^[a-zA-Z][\sa-zA-Z]*"></textarea>
               </div>
            </div>
            <div class="modal-footer">
               <!-- <div class="theme-button-default" data-dismiss="modal">
                  <a href="#">Close</a>
               </div> -->
               <div class="footer-btn">
                  <input type="hidden" name="action" id="action" value="report_service">
                  <button name="reportService" id="reportService" class="btn btn-primary">Submit</button>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>
<div class="modal fade" id="send_message" role="dialog" tabindex="-1">
   <div class="modal-dialog">
      <form name="msgFrm" id="msgFrm" method="post">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">
                  &times;
               </button>
               <h4>Send Message</h4>
            </div>
            <div class="modal-body">
               <div class="form-group">
                  <label>Enter Message</label>
                  <textarea name="msg" id="msg" class="form-control" rows=5></textarea>
               </div>
            </div>
            <div class="modal-footer">
               <!-- <div class="theme-button-default" data-dismiss="modal">
                     <a href="#">Close</a>
                  </div> -->
                  <div class="footer-btn">
                     <input type="hidden" name="action" id="action" value="send_msg">
                     <input type="hidden" name="freelancerId" id="freelancerId" value="43">
                     <button name="sendMsg" id="sendMsg" class="btn btn-primary">Send</button>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
   <script src="{{asset('frontend/js/jssor.slider-23.1.1.min.js')}}" type="text/javascript"></script>
   <script type="text/javascript">
      var url = "http://www.sukhadaam.com/demo/sawlii/ajaxServiceDetail";
      jssor_1_slider_init = function() {

         var jssor_1_options = {
          $AutoPlay: 1,
          $ArrowNavigatorOptions: {
           $Class: $JssorArrowNavigator$
        },
        $ThumbnailNavigatorOptions: {
           $Class: $JssorThumbnailNavigator$,
           $Cols: 9,
           $SpacingX: 3,
           $SpacingY: 3,
           $Align: 260
        }
     };

     var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

     /*responsive code begin*/
     /*remove responsive code if you don't want the slider scales while window resizing*/
     function ScaleSlider() {
        if($(window).outerWidth()>991){
         var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth - 30;
      }
      else if ($(window).outerWidth()<992 && $(window).outerWidth()>767){

         var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth -30;
      }
      else{
         var refSize = $(window).outerWidth()-30;
      }

      if (refSize) {
       refSize = Math.min(refSize, 6000);
       jssor_1_slider.$ScaleWidth(refSize);
    }
    else {
       window.setTimeout(ScaleSlider, 30);
    }
 }
 ScaleSlider();
 $Jssor$.$AddEvent(window, "load", ScaleSlider);
 $Jssor$.$AddEvent(window, "resize", ScaleSlider);
 $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
 /*responsive code end*/
};

$(document).on("click",".saveService",function(){
 var slug = $(this).attr("data-slug"),$this = $(this);
 addOverlay();
 $.post(url,{"action":"saveService","slug":slug},function(data){
   removeOverlay();
   if(data.type == 'error')
   {
      window.location.href = "http://www.sukhadaam.com/demo/sawlii/SignIn";
      toastr[data.type](data.msg);
   }
   else
   {
      $this.find("i").removeClass("fa fa-heart-o").addClass("fa fa-heart");
      toastr[data.type](data.msg);
   }
},'json');
});

$(document).on("click",".reportService",function(){
   $("#report_service").modal("show");
});

$(document).on("click","#reportService",function()
{
   $("#reportFrm").validate({
      ignore: [],
      errorClass: 'help-block',
      errorElement: 'label',
      normalizer: function(value) {
        return $.trim(value);
     },
     highlight: function (element)
     {
        $(element).closest('.form-group').addClass('has-error');
     },
     unhighlight: function (element)
     {
        $(element).closest('.form-group').removeClass('has-error');
     },
     rules:
     {
      report_reason:{
         required:true,
         normalizer: function(value) {
            value = value.replace("something", "new thing");
            return $.trim(value);
         }
      },
   },

   messages:
   {
      report_reason:{required:"Please enter report reason"}
   },
});

   if($("#reportFrm").valid())
   {
     addOverlay();
     $("#reportFrm").submit();
  }
});



/*favourite*/
$(document).on("click",".favourite_service",function(){
   var slug = $(this).attr("data-slug");
   var $this = $(this);
   addOverlay();
   $.post(url,{"action":"favService","slug":slug},function(data){
      removeOverlay();
      if(data.type == 'error')
      {
         window.location.href = "http://www.sukhadaam.com/demo/sawlii/SignIn";
         toastr[data.type](data.msg);
      }
      else
      {
         $this.find("i").removeClass("fa fa-heart-o").addClass("fa fa-heart");
         $("#favourite_count").html(data.count);
         toastr[data.type](data.msg);
      }
   },'json');
});

$(document).on("click","#submitData",function(e){
   e.preventDefault();

    var price = $("#service_orignal_price").text();
    swal({
      title: "Are you sure you want to pay ?",
      text: "By clicking on confirm, amount of "+price+" amount will be deducted from your wallet",
      type: "info",
      showCancelButton: true,
      confirmButtonClass: "btn-system",
      confirmButtonText: "Yes",
      closeOnConfirm: false
    },
    function(inputValue)
    {
      if(inputValue)
      {
       addOverlay();
       $("#serviceFrm").submit();
     }
   });
   /*swal({
      title: "Confirmation!",
      text: "Are you sure you want to buy this service?",
      showCancelButton: true,
      closeOnConfirm: false
   },
   function (inputValue) {
      if (inputValue)
      {
         $("#serviceFrm").submit();
      }
   });*/
});

$(document).on("change",".addOnSelect",function()
{
   if($(this).is(":checked"))
   {
      var price = $(".service_amount").text();
      var addOnPrice = Number($(this).attr("data-id"));
      var final = Number(price) + Number(addOnPrice);
      $(".service_amount").text(final);
      var addON = Number($(".no_of_addOn").text());
      $(".no_of_addOn").text(addON+1);
      var priceAddon = Number($(".addon_price").text());
      $(".addon_price").text((addOnPrice+priceAddon));
   }
   else
   {
      var price = $(".service_amount").text();
      var addOnPrice = Number($(this).attr("data-id"));
      var final = Number(price) - Number(addOnPrice);
      $(".service_amount").text(final);
      var addON = Number($(".no_of_addOn").text());
      $(".no_of_addOn").text(addON- 1);
      var priceAddon = Number($(".addon_price").text());
      $(".addon_price").text((addOnPrice-priceAddon));
   }
});

$(document).on("change","#quantity",function(){
   var qty = Number($(this).val());
   var price = Number($(".service_orignal_price").text());
   var final_price = price*qty;
   var addOnPrice = Number($(".addon_price").text());
   $(".service_amount").text(final_price+addOnPrice);
   $(".qty").text(qty);
});
$(document).on("click",".message_send",function(){
   $("#send_message").modal("show");
});


jQuery.validator.addMethod("emailsnotallowed", function(value, element)
{


   var re = /(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))/;

   var j = 0;
   $.each(icontent,function(i,val){
     if(value.indexOf(val) != -1){
       j++;
       return false;
    }
 });

   var varr = value.split("");

   for(k = 0;k < varr.length -5;k++){
      var substr = $.trim(value.substring(k, k+5));
      if(jQuery.isNumeric(substr)){
         j++;
         return false;
      }
   }

   return !(re.test(value) || j > 0);

}, "Email ID, Phone Number or Illegal content entered.");

$(document).on("click","#sendMsg",function(){
   $("#msgFrm").validate({
      ignore: [],
      errorClass: 'help-block',
      errorElement: 'label',
      normalizer: function(value) {
        return $.trim(value);
     },
     highlight: function (element)
     {
        $(element).closest('.form-group').addClass('has-error');
     },
     unhighlight: function (element)
     {
        $(element).closest('.form-group').removeClass('has-error');
     },
     rules:
     {
      msg:{
         required:true,
         emailsnotallowed : true,
         normalizer: function(value) {
            value = value.replace("something", "new thing");
            return $.trim(value);
         }
      },
   },

   messages:
   {
      msg:{required:"Please enter message"}
   },
});

   if($("#msgFrm").valid())
   {
     addOverlay();
     $("#reportFrm").submit();
  }
});

</script>
<script type="text/javascript">
   jssor_1_slider_init();
</script>
<script type="text/javascript">

   var currency_symbol = "$";

   $(window).keydown(function(event){
      if(event.keyCode == 13) {
         event.preventDefault();
         return false;
      }
   });
   $(document).ready(function(){
      $("#quantity").on("keypress",function(){
         if($("#quantity").val().length>=3){
            return false;
         }
      });
   });

   function calculate_total(){
      var total_days = 0;
      var total_amount = 0;
      var qty = $('#quantity').val();
      var oprice = $('.service_orignal_price').attr('data-value');
      total_amount = oprice;
      var days = $('.total_days').attr('data-days');
      total_days = parseInt(days);

      $('.addOnSelect:checked').each(function(){
           total_amount = (parseInt(total_amount) + parseInt($(this).attr('data-price')));
           total_days = (parseInt(total_days) + parseInt($(this).attr('data-days')));
      });    
      total_amount = (parseInt(total_amount) * parseInt(qty));
      total_days = parseInt(total_days) * parseInt(qty);

      $('.service_orignal_price').html(total_amount+'<span>'+currency_symbol+'</span>');
      $('.total_days').html(total_days+' day(s)');
   }

   $(document).on('blur','#quantity',function(e){
      var val = $(this).val();
      process_qty(val);
   });

   function process_qty(val){
      val = Math.ceil(val);
      if(val <= 0){
         val = 1;
      }
      if(val > 30){
         val = 30;
      }
      $('.quntity-input').val(val);
      calculate_total();
   }

   $(document).on('click','.sp-plus a, .sp-minus a',function(e){
      var val = $(this).closest('.sp-quantity').find('.quntity-input').val();
      process_qty(val);
   });

   $(document).on('change','.addOnSelect',function(e){
      calculate_total();
   });


</script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b078a26fa4028ed"></script>


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