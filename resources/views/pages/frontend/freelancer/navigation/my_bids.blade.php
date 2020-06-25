@extends('layouts.frontend.master')
@section('title')
    My Bids
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

<section class="main-dashboard">
    <div class="container">
        <div class="account_setting my-jobs-wrap">
            <div class="sawlii-tabs-wrap">
                <ul class="nav nav-tabs">
                    <li class=" active">
                        <a href="{{route('my_bids',$lang)}}" class=" active">My Bids</a>
                    </li>
                    <li>
                        <a href="{{route('my_jobs',$lang)}}">My Jobs</a>
                    </li>
                    <li>
                        <a href="http://www.sukhadaam.com/demo/sawlii/saved-jobs">Saved Jobs</a>
                    </li>
                </ul>
                <div class="tab-content">  
                  <div class="row">
                      <div class="col-md-12">
                          <div class="panel panel-default theme-box">
                              <!-- <div class="panel-heading">
                                  <h3 class="panel-title">My Bids</h3>
                              </div> -->
                              <div class="panel-body">
                                  <div class="fl-job-bid-wrap">
                                      <ul class="fjb-lists" id="bids_data">
                                          <li class="fjb-item ">
                                            <div class="service-featured featured"><span><i class="fa fa-star"></i></span></div>
                                            <h3 class="fjb-title"><a href="{{route('test_job',$lang)}}">123 Test Job</a></h3>
                                            <ul class="post-breadcrumbs clearfix">
                                                <li></li>
                                                <li></li>
                                            </ul>
                                            <ul class="fjb-details-list">
                                                <li>Est.budget : <span class="amount-wrap">0<span>$</span></span></li>
                                                <li>Bid Amount : <span class="amount-wrap">98<span>$</span></span></li>
                                            </ul>
                                            <div class="fjb-desc">Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing</div>
                                            <ul class="fjb-cat">
                                                
                                            </ul>
                                            <ul class="fjb-details-list">
                                                <li><span>Any</span></li>
                                                <li>No of Applicants : <span>1</span></li>
                                                <li>Bidding Deadline : <span>Expired</span></li>
                                                <li>Bid Acceptance Status : <span>Accepted</span></li>
                                            </ul>
                                            <div class="fjb-status">
                                                <div class="fjb-status-item"><span class="badge badge-pill badge-warning">Pending</span></div>
                                                <div class="fjb-status-item fjb-post-time">Posted : <span>9 months ago</span></div>
                                            </div>
                                            <div class="fjb-user-profile">
                                                <div class="profile-img-wrap">
                                                <div class="profile-img">
                                                    <img src="{{asset('frontend/img/th2_no_user_image.png')}}" title="Vishal Patel">
                                                </div>
                                                </div>
                                                <div class="profile-details">
                                                    <div class="profile-name"><a href="{{route('profile_job',$lang)}}">Vishal Patel</a></div>
                                                    <div class="star-ratings-sprite start-ratings">
                                                        <span style="width:71.428%" class="star-ratings-sprite-rating"></span>
                                                    </div>
                                                    <div class="fjb-location"><i class="fa fa-map-marker"></i> Rajkot, Gujarat, India</div>
                                                </div>
                                            </div>
                                        </li>
                                      </ul>
                                  </div>
                                  <div class="view-more-button">
                                      <div class="theme-button">
                                          <a href="javascript:void(0)" class="load_more_data hide" data-page="1">View More Bids</a>
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
</section>

<script type="text/javascript">
  var url = "http://www.sukhadaam.com/demo/sawlii/ajaxFreelancerBids";
  $(document).on("click",".load_more_data",function()
  {
      var pageNo = $(this).attr("data-page");
      var p_no = parseInt(pageNo)+1;
      addOverlay();
      $.post(url,{"action":"load_more_data","page_no":p_no},function(data){
        removeOverlay();
        $("#bids_data").append(data.content);
        $(".load_more_data").addClass(data.btn);
        $(".load_more_data").attr("data-page",data.pageno);
      },'json');
  });
</script>
</div>

@endsection