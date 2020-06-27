@extends('layouts.frontend.master')
@section('title')
    Review
@endsection
@section('content')

<!-- Your share button code -->
<div id="main-content">
<!-- Dashboard Navigation -->
 @include('pages.frontend.freelancer.nav_dashboard')
<!-- Dashboard Navigation End -->
<section class="main-dashboard">
    <div class="container">
        <div class="">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h1 class="main-heading">Reviews</h1>
                    <div class="review-box">
                        <div class="review_rating reviews">
                            <ul class="review_data liststyle-none">
                                <span class='no-records'><i class='fa fa-exclamation-triangle'></i>No reviews yet</span>
                            </ul>
                        </div>
                        <div class="view-more-button hide">
                            <div class="theme-button">
                                <a href="javascript:void(0)" class="load_more_data" data-page="1" data-user-id="43">View More Reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- start full review modal -->
<div id="fullReview" class="modal fade full-review" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <img src="{{asset('frontend/img/cancel.png')}}" alt="">
        </button>
        <h4 class="modal-title">All Reviews</h4>
      </div>
      <div class="modal-body all_review_div">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!-- end full review modal -->

<script type="text/javascript">
  var url = "http://www.sukhadaam.com/demo/sawlii/ajaxFreelancerReview";
  $(document).on("click",".load_more_data",function()
  {
      var pageNo = $(this).attr("data-page");
      var p_no = parseInt(pageNo)+1;        
      var userId = $(this).attr("data-user-id");

      addOverlay();
      $.post(url,{"action":"load_more_data","page_no":p_no,"userId":userId},function(data){
        removeOverlay();
        $(".review_data").append(data.content);
        $(".load_more_data").addClass(data.btn);
        $(".load_more_data").attr("data-page",data.pageno);
      },'json');
  });
  $(document).on("click",".all_review",function()
  {
    var rid = $(this).attr("data-id");
    addOverlay();
    $.post(url,{"action":"all_review","rid":rid},function(data){
      removeOverlay();
      $(".all_review_div").html(data.content);
      $("#fullReview").modal("toggle");
    },'json');
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