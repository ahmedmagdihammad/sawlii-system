@extends('layouts.frontend.master')
@section('title')
    Review
@endsection
@section('content')

<script>
    $("header .navbar-default .navbar-nav>li.notification .dropdown-menu").mCustomScrollbar();       
</script>
<!-- Your share button code -->
<div id="main-content">
  <section class="main-dashboard">
  <div class="container">
    <div class="profile">
      <div class="">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="review_rating reviews">
              <h1 class="main-heading">Reviews</h1>
              <div class="review-box">
                <ul class="review_data">
                   <li class="media">
                    <div class="media-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h2><a href="#">the job seeker will make a quick</a></h2>
                                <p>best</p>
                                <div class="freelancer-details">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="freelancer-img">
                                            <img src="{{asset('frontend/img/6e81616cfb6e50420d7b5b3a02063242.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            Heena Dattani
                                            <p class="date-time"> <span class="seperator-l">|</span> 26 March 2019 08:00 AM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="stars">
                                <label>Average star rating</label>
                                <div class="star-ratings-sprite">
                                    <span style="width:76%" class="star-ratings-sprite-rating"></span>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block all_review" data-toggle="modal" data-target="#fullReview">
                            See full review
                            </button>
                        </div>
                        </div>
                    </div>
                </li>

                <li class="media">
                    <div class="media-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h2><a href="#">عربي انجليزي</a></h2>
                                <p>Pickgeeks Sawlii is a freelancing platform for geeks and potential customers to get their work done.</p>
                                <div class="freelancer-details">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="freelancer-img">
                                            <img src="{{asset('frontend/img/6e81616cfb6e50420d7b5b3a02063242.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            Heena Dattani
                                            <p class="date-time"> <span class="seperator-l">|</span> 27 March 2019 09:26 AM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="stars">
                                <label>Average star rating</label>
                                <div class="star-ratings-sprite">
                                    <span style="width:60%" class="star-ratings-sprite-rating"></span>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block all_review" data-toggle="modal" data-target="#fullReview">
                            See full review
                            </button>
                        </div>
                        </div>
                    </div>
                </li>

                <li class="media">
                    <div class="media-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h2><a href="#">New Job</a></h2>
                                <p>****</p>
                                <div class="freelancer-details">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="freelancer-img">
                                            <img src="{{asset('frontend/img/no_user_image.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            Ishit Tankaria
                                            <p class="date-time"> <span class="seperator-l">|</span> 02 May 2019 12:53 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="stars">
                                <label>Average star rating</label>
                                <div class="star-ratings-sprite">
                                    <span style="width:72%" class="star-ratings-sprite-rating"></span>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block all_review" data-toggle="modal" data-target="#fullReview">
                            See full review
                            </button>
                        </div>
                        </div>
                    </div>
                </li>

                <li class="media">
                    <div class="media-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h2><a href="#">Test hd</a></h2>
                                <p>****</p>
                                <div class="freelancer-details">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="freelancer-img">
                                            <img src="{{asset('frontend/img/no_user_image.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            Ishit Tankaria
                                            <p class="date-time"> <span class="seperator-l">|</span> 23 June 2020 01:41 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="stars">
                                <label>Average star rating</label>
                                <div class="star-ratings-sprite">
                                    <span style="width:88%" class="star-ratings-sprite-rating"></span>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block all_review" data-toggle="modal" data-target="#fullReview">
                            See full review
                            </button>
                        </div>
                        </div>
                    </div>
                </li>

                <li class="media">
                    <div class="media-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h2><a href="#">Test hd</a></h2>
                                <p>****</p>
                                <div class="freelancer-details">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="freelancer-img">
                                            <img src="{{asset('frontend/img/no_user_image.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            Ishit Tankaria
                                            <p class="date-time"> <span class="seperator-l">|</span> 02 May 2019 03:55 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="stars">
                                <label>Average star rating</label>
                                <div class="star-ratings-sprite">
                                    <span style="width:84%" class="star-ratings-sprite-rating"></span>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block all_review" data-toggle="modal" data-target="#fullReview">
                            See full review
                            </button>
                        </div>
                        </div>
                    </div>
                </li>

                <li class="media">
                    <div class="media-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h2><a href="#">Test678</a></h2>
                                <p>****ing</p>
                                <div class="freelancer-details">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="freelancer-img">
                                            <img src="{{asset('frontend/img/no_user_image.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            Ishit Tankaria
                                            <p class="date-time"> <span class="seperator-l">|</span> 03 May 2019 05:55 AM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="stars">
                                <label>Average star rating</label>
                                <div class="star-ratings-sprite">
                                    <span style="width:72%" class="star-ratings-sprite-rating"></span>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block all_review" data-toggle="modal" data-target="#fullReview">
                            See full review
                            </button>
                        </div>
                        </div>
                    </div>
                </li>

                <li class="media">
                    <div class="media-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h2><a href="#">New October job</a></h2>
                                <p>test</p>
                                <div class="freelancer-details">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="freelancer-img">
                                            <img src="{{asset('frontend/img/no_user_image.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            Ishit Tankaria
                                            <p class="date-time"> <span class="seperator-l">|</span> 23 June 2020 01:41 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="stars">
                                <label>Average star rating</label>
                                <div class="star-ratings-sprite">
                                    <span style="width:68%" class="star-ratings-sprite-rating"></span>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block all_review" data-toggle="modal" data-target="#fullReview">
                            See full review
                            </button>
                        </div>
                        </div>
                    </div>
                </li>


                </ul>
              </div>
            </div>
            <div class="view-more-button hide">
              <div class="theme-button">
                <a href="javascript:void(0)" class="load_more_data" data-page="1">View More Reviews</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- full review modal -->
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
          <div class="star-rating">
            <div class="stars">
              <p>Requirement Clarification</p>
              <div class="star-ratings-sprite">
                   <span style="width:%REQ_CLARIFICATION%%" class="star-ratings-sprite-rating"></span>
              </div>
            </div>
            <div class="stars">
              <p>On Time Payment</p>
              <div class="star-ratings-sprite">
                 <span style="width:%ON_TIME_PAYMENT%%" class="star-ratings-sprite-rating"></span>
              </div>
            </div>
            <div class="stars">
              <p>On Time Response</p>
              <div class="star-ratings-sprite">
                 <span style="width:%ON_TIME_RESPONSE%%" class="star-ratings-sprite-rating"></span>
              </div>
            </div>
            <div class="stars">
              <p>Communication</p>
              <div class="star-ratings-sprite">
                 <span style="width:%COMMUNICATION_RATE%%" class="star-ratings-sprite-rating"></span>
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!-- full review modal -->

<script type="text/javascript">
  var url = "http://www.sukhadaam.com/demo/sawlii/ajaxCustomerReviewAll";
  $(document).on("click",".load_more_data",function()
  {
    var pageNo = $(this).attr("data-page");
    var p_no = parseInt(pageNo)+1;   
    addOverlay();     
    $.post(url,{"action":"load_more_data","page_no":p_no},function(data){
      removeOverlay();
      $(".review_data").append(data.content);
      $(".load_more_data").addClass(data.btn);
      $(".load_more_data").attr("data-page",data.pageno);
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