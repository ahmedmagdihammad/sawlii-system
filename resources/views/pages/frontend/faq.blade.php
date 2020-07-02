@extends('layouts.frontend.master')
@section('title')
    Faq
@endsection
@section('content')

<!-- Your share button code -->
<div id="main-content">
  <section class="inner-section">
   <div class="about-us-img">
      <img src="{{asset('frontend/img/2.jpeg')}}">
      <div class="overlay">
         <div class="table-heading">
            <h3>How can we help you with ?</h3>
            <div class="row">
               <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
                  <div class="input-group">
                     <input type="text" class="form-control input-lg" name="keyword" id="keyword" placeholder=" Please type your query here">
                     <span class="input-group-btn">
                     <button class="btn btn-system search_faq" type="button"><i class="fa fa-search"></i></button>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="main-faq">
      <div class="container">
        <div class="theme-form">
          <h3>Frequently Asked Questions</h3>
           <div class="row">
              <div class="col-md-3 col-sm-4">
                 <div class="left-box">
                    <ul class="nav nav-pills">
                       <li class="active">
                          <a href="javascript:void(0)" data-toggle="tab" data-id="1" class="detail_faq" aria-expanded="true">General</a>
                        </li>
                        <li class="">
                          <a href="javascript:void(0)" data-toggle="tab" data-id="2" class="detail_faq" aria-expanded="true">Buyer</a>
                        </li><li class="">
                          <a href="javascript:void(0)" data-toggle="tab" data-id="3" class="detail_faq" aria-expanded="true">Seller</a>
                        </li>
                    </ul>
                 </div>
              </div>
              <div class="col-md-9 col-sm-8">
                 <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                      <div class="panel-group faq_question_list" id="accordion1">
                        <div class="panel-body"> No faq found.</div>
                      </div>
                    </div>
                 </div>
              </div>
           </div>
         </div>
      </div>
   </div>
  </section>

<script type="text/javascript">

  $(document).ready(function(){
      $( ".detail_faq" ).click(function() {
          var cat_id = $(this).attr("data-id");
          var a = $("#keyword").val();
          $.ajax({
                  "dataType": 'json',
                  "type" : "POST",
                  "url"  : "http://www.sukhadaam.com/demo/sawlii/units-sd/faq-sd/ajax.faq-sd.php",
                  "data" : {"action":"get-faq","faq_category":cat_id,"keyword":a},
                  "success": function(data)
                  {
                      $(".faq_question_list").html(data.content);
                  }
              });
      });
  });
  $( ".search_faq" ).click(function() 
  {       
          var a = $("#keyword").val();
          var cat = $("ul.nav-tabs li.active a").attr("data-id");
          if(a!=''){
              $.ajax({
                  "dataType": 'json',
                  "type" : "POST",
                  "url"  : "http://www.sukhadaam.com/demo/sawlii/units-sd/faq-sd/ajax.faq-sd.php",
                  "data" : {"action":"search-faq","keywrd":a,"cat":cat},
                  "success": function(data)
                  {
                      $(".faq_question_list").html(data.content);
                  }
              });
          }

          
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