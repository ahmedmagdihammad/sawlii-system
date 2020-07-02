@extends('layouts.frontend.master')
@section('title')
    Profile - Vishal 
@endsection
@section('content')


<script>
    $("header .navbar-default .navbar-nav>li.notification .dropdown-menu").mCustomScrollbar();       
</script>
<!-- Your share button code -->
<div id="main-content">
    <!-- Start Dashboard -->
    @include('pages.frontend.freelancer.nav_dashboard')
    <!-- End Dashboard -->

<!-- Start Content -->
<section class="main-dashboard">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-wrap freelancer-details-profile">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="personal-dashboard-wrap">
                                <div class="box box-primary theme-box">
                                    <div class="box-body ">
                                        <div class="profile-before-edit media">
                                            <div class="media-left">
                                                <div class="user-switch-wrap">
                                                    <div class="user-avatar-wrap">
                                                        <div class="user-avatar">
                                                            <img src="{{asset('frontend/img/th2_no_user_image.png')}}" class="preview_profile">
                                                        </div>
                                                    </div>
                                                    <div class="invite_PickGeeks  clearfix invite-wrap">
                                                        <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#invite_user">
                                                        Invite
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-details-wrap">
                                                    <div class="personal-details-wrap">
                                                        <div class="user-title-wrap">
                                                            <h3 class="user-name"> Vishal Patel</h3>                                             
                                                            <div class="star-ratings-sprite">
                                                                <span style="width:%STAR_RATING%%" class="star-ratings-sprite-rating"></span>
                                                            </div>
                                                            <ul class="user-since-detail liststyle-none">
                                                                <li>Member since 25 March,2019</li>
                                                                <li>Last Login 2 months ago</li> 
                                                            </ul>
                                                            <div class="user-profile-action">
                                                                <div class="save_PickGeeks">
                                                                    <a href="#" class="save_freelancer" data-slug="vishal-c" title="Save">
                                                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="Report_PickGeeks">
                                                                    <a href="{{route('my_profile',$lang)}}" class="report_user_check" data-slug="vishal-c" title="Report">
                                                                        <i class="fa fa-flag-o" aria-hidden="true"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="user-location-detail liststyle-none">
                                                            <li class="hide"><span><i class="fa fa-envelope"></i></span>vishal.sukhadaam@gmail.com</li>
                                                            <li><span><i class="fa fa-map-marker"></i></span>Rajkot, Gujarat, India</li>
                                                            <li><span><i class="fa fa-briefcase"></i></span>-</li>
                                                            <li><span><i class="fa fa fa-bookmark"></i></span>Beginner</li>
                                                            <li><span><i class="fa fa-share-alt"></i></span><a href="{{route('my_profile',$lang)}}" target="_blank">http://www.sukhadaam.com/demo/sawlii/f/profile/vishal-c</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="work-detail-wrap">
                                                        <ul class="work-detail-total liststyle-none">
                                                        <li>Completed Jobs : <span>0</span></li>
                                                        <li>Sold Services : <span>0</span></li>
                                                        <li>Earned : <span class="kwdamount">0<span>$</span></span></li>
                                                        <li>Response Time : <span>0 minute(s)‎&lrm;</span></li>
                                                        </ul>
                                                        <div class="user-chat-btn-wrap">
                                                        <a href="javascript:void(0);" class="btn btn-primary btn-bordered message_send">
                                                            <i class="fa fa-comments-o"></i> Send Message
                                                        </a>
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
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-lg-3">
                            <div class="dashboard-sidebar">
                                <div class="box box-primary theme-box ">
                                    <div class="box-body">
                                        <div class="myskills-box">
                                            <h4 class="skills-title">My Skills</h4>
                                            <ul class="skills-list clearfix">
                                                
                                            </ul>
                                        </div>
                                        <div class="myskills-box">
                                            <h4 class="skills-title">Language</h4>
                                            <ul class="skills-list clearfix">
                                                
                                            </ul>
                                        </div>
                                        <div class="myskills-box">
                                            <h4 class="skills-title">Category</h4>
                                            <ul class="skills-list clearfix">
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-9 col-sm-8">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Overview</h3>
                                    <div class="box-tools pull-right">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#overview"></a>
                                    </div>
                                </div>
                                <div id="overview" class="panel-collapse collapse in" >
                                    <div class="box-body" >
                                        <p>-</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box box-primary hide">
                                <div class="box-header">
                                    <h3 class="box-title">Recently Added Products</h3>
                                    <div class="box-tools pull-right">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#our-video"></a>
                                    </div>
                                </div>
                                <div id="our-video" class="panel-collapse collapse in" >
                                    <div class="box-body" >
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="sawlii-tabs-wrap">
                                <ul class="nav nav-tabs" id="dasTabs">
                                    <li class="active"><a data-toggle="tab" href="#tab_1" aria-expanded="true">My Services</a></li>
                                    <li><a data-toggle="tab" href="#tab_2" aria-expanded="false">Portfolio</a></li>
                                    <li><a data-toggle="tab" href="#tab_3" aria-expanded="false">Education Details</a></li>
                                    <li><a data-toggle="tab" href="#tab_4" aria-expanded="false">Certifications</a></li>
                                    <li><a data-toggle="tab" href="#tab_5" aria-expanded="false">Experience</a></li>
                                    <li><a data-toggle="tab" href="#tab_6" aria-expanded="false">Reviews</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                        <div class="panel panel-default theme-box no-bg no-padding">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Services</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="fl-services ">
                                                    <span class='no-records'><i class='fa fa-exclamation-triangle'></i>No Records Found</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_2">
                                        <div class="panel panel-default theme-box no-bg no-padding">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Portfolio</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="fl-portfolio ">
                                                    <span class='no-records'><i class='fa fa-exclamation-triangle'></i>No Records Found</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_3">
                                        <div class="panel panel-default theme-box no-bg no-padding">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Educational Details</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="fl-edu">
                                                    <span class='no-records'><i class='fa fa-exclamation-triangle'></i>No Records Found</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_4">
                                        <div class="panel panel-default theme-box no-bg no-padding">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Certifications</h4>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="fl-certi">
                                                    <span class='no-records'><i class='fa fa-exclamation-triangle'></i>No Records Found</span>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_5">
                                        <div class="panel panel-default theme-box no-bg no-padding">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Experience</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="fl-experience">
                                                    <span class='no-records'><i class='fa fa-exclamation-triangle'></i>No Records Found</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_6">
                                        <div class="panel panel-default theme-box no-bg no-padding">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Reviews</h4>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="fl-avg-review clearfix">
                                                    <li class="fl-avg-review-item">
                                                        <label>Punctuality</label>
                                                        <div class="star-ratings-sprite">
                                                            <span style="width:0%" class="star-ratings-sprite-rating"></span>
                                                        </div>
                                                    </li>
                                                    <li class="fl-avg-review-item">
                                                        <label>Work Clarification</label>
                                                        <div class="star-ratings-sprite">
                                                            <span style="width:0%" class="star-ratings-sprite-rating"></span>
                                                        </div>
                                                    </li>
                                                    <li class="fl-avg-review-item">
                                                        <label>Communication</label>
                                                        <div class="star-ratings-sprite">
                                                            <span style="width:0%" class="star-ratings-sprite-rating"></span>
                                                        </div>
                                                    </li>
                                                    <li class="fl-avg-review-item">
                                                        <label>Work Quality</label>
                                                        <div class="star-ratings-sprite">
                                                            <span style="width:0%" class="star-ratings-sprite-rating"></span>
                                                        </div>
                                                    </li>
                                                    <li class="fl-avg-review-item">
                                                        <label>Expertise</label>
                                                        <div class="star-ratings-sprite">
                                                            <span style="width:0%" class="star-ratings-sprite-rating"></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Bootstrap Accordion -->
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"></div>
                                <!-- /Bootstrap Accordion -->
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="report_PickGeeks" role="dialog" tabindex="-1">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <form name="reportFrm" id="reportFrm" method="post">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">
                                        &times;
                                        </button>
                                        <h4>Report</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="media">
                                        <div class="media-left">
                                            <div class="invite_img">
                                            <img src="{{asset('frontend/img/th2_no_user_image.png')}}" title="Vishal Patel"/>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h3>
                                            Vishal Patel
                                            </h3>
                                            <p>
                                            
                                            </p>
                                        </div>
                                        </div>
                                    <div class="form-group">
                                        <label>
                                        Reason
                                        </label>
                                        <textarea class="form-control" name="report_reason" id="report_reason"></textarea>
                                        <input type="hidden" name="freelancerId" id="freelancerId" value="11">
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <div class="theme-button-default" data-dismiss="modal">
                                        <a href="#">Close</a>
                                        </div> -->
                                        <div class="theme-button">
                                        <input type="hidden" name="action" id="action" value="report_user">
                                        <button name="reportUser" id="reportUser" class="btn btn-system">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="modal fade" id="invite_user" role="dialog" tabindex="-1">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <form name="inviteFrm" id="inviteFrm" method="post">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">
                                    &times;
                                    </button>
                                    <h4>Invite</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>
                                        Jobs
                                        </label>
                                        <select name="jobId" id="jobId" class="form-control">
                                            <option value="">--Select Job--</option>
                                        </select>
                                        <input type="hidden" name="freelancerId" id="freelancerId" value="11">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <!-- <div class="theme-button-default" data-dismiss="modal">
                                    <a href="#">Close</a>
                                    </div> -->
                                    <div class="theme-button">
                                    <input type="hidden" name="action" id="action" value="invite_user">
                                    <button name="inviteUser" id="inviteUser" class="btn btn-system">Invite</button>
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
                                <div class="footer-btn">
                                    <input type="hidden" name="action" id="action" value="send_msg">
                                    <input type="hidden" name="freelancerId" id="freelancerId" value="11">
                                    <button name="sendMsg" id="sendMsg" class="btn btn-primary">Send</button>
                                </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>

<script type="text/javascript">

  $(document).ready(function(){

    $(document).on("click",".message_send",function(){
       $("#send_message").modal("show");
    });
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
        $("#msgFrm").submit();
      }
    });

    if($(window).width() <= 567){
      $(".all-sections-btn a").click(function(){
        $(".all-sections ul.nav").slideToggle();
      });
    }
    else{
        return false;
    }
    $(".all-sections ul.nav li a").click(function(){
      $(".all-sections ul.nav").hide();
    });

  });
</script>

<script type="text/javascript">

  $(document).ready(function(){

    if(($(window).width() >= 768) && ($(window).width() <= 991)){
      $(".all-sections-btn a").click(function(){
        $(".all-sections ul.nav").slideToggle();
      });
    }
    else{
        return false;
    }
    $(".all-sections ul.nav li a").click(function(){
      $(".all-sections ul.nav").hide();
    });

  });
</script>

                    <!-- <div class="row">
                        <div class="col-md-12">
                            <div class="personal-dashboard-wrap">
                                <div class="box box-primary theme-box">
                                    <div class="box-body ">
                                        <div class="profile-before-edit media">
                                            <div class="media-left">
                                                <div class="user-switch-wrap">
                                                    <div class="user-avatar-wrap">
                                                        <div class="user-avatar">
                                                            <img src="http://www.sukhadaam.com/demo/sawlii/dspaces-sd/th2_no_user_image.png" class="preview_profile">
                                                        </div>
                                                    </div>
                                                    <div class="invite-wrap">
                                                        <a href="" class="btn btn-primary btn-block btn-bordered">Invite</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-details-wrap">
                                                    <div class="personal-details-wrap">
                                                        <div class="user-title-wrap">
                                                            <h3 class="user-name">Vishal Patel</h3>
                                                            <div class="star-ratings-sprite">
                                                                <span style="width:80%" class="star-ratings-sprite-rating"></span>
                                                            </div>
                                                            <ul class="user-since-detail liststyle-none">
                                                                <li>Member since 12 February,2019</li>
                                                                <li>Last Seen 5 hours ago</li>
                                                            </ul>
                                                            <div class="user-profile-action">
                                                                <div class="save_PickGeeks">
                                                                    <a href="#" class="save_freelancer" data-slug="%DATA_SLUG%" title="Save">
                                                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="Report_PickGeeks">
                                                                    <a href="javascript:void(0)" class="report_user_check" data-slug="%DATA_SLUG%" title="Report">
                                                                        <i class="fa fa-flag-o" aria-hidden="true"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="user-location-detail liststyle-none">
                                                            <li><span><i class="fa fa-map-marker"></i></span>Rajkot, Gujarat, India</li>
                                                            <li><span><i class="fa fa-briefcase"></i></span>Manager - Business Intelligence and Optimization</li>
                                                            <li><span><i class="fa fa fa-bookmark"></i></span>Beginner</li>
                                                            <li><span><i class="fa fa-share-alt"></i></span><a href="">http://192.168.5.6/pickgeeks_yousef/f/profile/vkpatel-f</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="work-detail-wrap">
                                                        <ul class="work-detail-total liststyle-none">
                                                            <li>Completed Jobs : <span>0</span></li>
                                                            <li>Sold Services : <span>0</span></li>
                                                            <li>Earned : <span class="kwdamount">240<sub>KWD</sub></span></li>
                                                            <li>Response Time : <span>10 Minute(s)</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="row">
                        <div class="col-md-3">
                            <div class="dashboard-sidebar">
                                <div class="box box-primary theme-box ">
                                    <div class="box-body">
                                        <div class="myskills-box">
                                            <h4 class="skills-title">My Skills</h4>
                                            <ul class="skills-list clearfix">
                                                
                                            </ul>
                                        </div>
                                        <div class="myskills-box">
                                            <h4 class="skills-title">Language</h4>
                                            <ul class="skills-list">
                                               
                                            </ul>
                                        </div>
                                        <div class="myskills-box">
                                            <h4 class="skills-title">Category</h4>
                                            <ul class="skills-list">
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Overview</h3>
                                    <div class="box-tools pull-right">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#overview"></a>
                                    </div>
                                </div>
                                <div id="overview" class="panel-collapse collapse in" >
                                    <div class="box-body" >
                                        <p>%OVERVIEW%</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Video</h3>
                                    <div class="box-tools pull-right">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#our-video"></a>
                                    </div>
                                </div>
                                <div id="our-video" class="panel-collapse collapse in" >
                                    <div class="box-body" >
                                        %VIDEO_IFRAME%
                                    </div>
                                </div>
                            </div>
                            <div class="sawlii-tabs-wrap">
                                <ul class="nav nav-tabs">
                                   <li class="active"><a data-toggle="tab" href="#tab_1" aria-expanded="true">My Services</a></li>
                                    <li><a data-toggle="tab" href="#tab_2" aria-expanded="false">Portfolio</a></li>
                                    <li><a data-toggle="tab" href="#tab_3" aria-expanded="false">Education Details</a></li>
                                    <li><a data-toggle="tab" href="#tab_4" aria-expanded="false">Certifications</a></li>
                                    <li><a data-toggle="tab" href="#tab_5" aria-expanded="false">Experience</a></li>
                                    <li><a data-toggle="tab" href="#tab_6" aria-expanded="false">Reviews</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                        <div class="panel panel-default theme-box no-bg no-padding">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Services</h4>
                                            </div>
                                            <div class="panel-body">
                                                %MY_SERVICES%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_2">
                                        <div class="panel panel-default theme-box no-bg no-padding">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Portfolio</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="fl-portfolio ">
                                                    <span class='no-records'><i class='fa fa-exclamation-triangle'></i>No Records Found</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_3">
                                        <div class="panel panel-default theme-box no-bg no-padding">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Educational Details</h4>   
                                            </div>
                                            <div class="panel-body">
                                                <div class="fl-edu">
                                                     <span class='no-records'><i class='fa fa-exclamation-triangle'></i>No Records Found</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_4">
                                        <div class="panel panel-default theme-box no-bg no-padding">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Certifications</h4>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="fl-certi">
                                                    <span class='no-records'><i class='fa fa-exclamation-triangle'></i>No Records Found</span>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_5">
                                        <div class="panel panel-default theme-box no-bg no-padding">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Experience</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="fl-experience">
                                                    <span class='no-records'><i class='fa fa-exclamation-triangle'></i>No Records Found</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_6">
                                        <div class="panel panel-default theme-box no-bg no-padding">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Reviews</h4>
                                                <div class="panel-tools pull-right">
                                                    <a href="http://www.sukhadaam.com/demo/sawlii/f/review/%SLUG%" class="addRecord">View More<i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="fl-avg-review clearfix">
                                                    <li class="fl-avg-review-item">
                                                      <label>Punctuality</label>
                                                      <div class="star-ratings-sprite">
                                                          <span style="width:%PUN_REVIEW%%" class="star-ratings-sprite-rating"></span>
                                                      </div>
                                                    </li>
                                                    <li class="fl-avg-review-item">
                                                      <label>Work Clarification</label>
                                                      <div class="star-ratings-sprite">
                                                          <span style="width:%WORK_REVIEW%%" class="star-ratings-sprite-rating"></span>
                                                      </div>
                                                    </li>
                                                    <li class="fl-avg-review-item">
                                                      <label>Communication</label>
                                                      <div class="star-ratings-sprite">
                                                          <span style="width:%COMM_REVIEW%%" class="star-ratings-sprite-rating"></span>
                                                      </div>
                                                    </li>
                                                    <li class="fl-avg-review-item">
                                                      <label>Work Quality</label>
                                                      <div class="star-ratings-sprite">
                                                          <span style="width:%QUAT_REVIEW%%" class="star-ratings-sprite-rating"></span>
                                                      </div>
                                                    </li>
                                                    <li class="fl-avg-review-item">
                                                      <label>Expertise</label>
                                                      <div class="star-ratings-sprite">
                                                          <span style="width:%EXP_REVIEW%%" class="star-ratings-sprite-rating"></span>
                                                      </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Page Content -->
<div class="modal fade" id="share_link" role="dialog" tabindex="-1">
   <div class="modal-dialog">
      <!-- Modal content-->
      <form method="post" name="share_linkFrm" id="share_linkFrm">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">
               &times;
               </button>
               <h4 class="modal-title">
                  Share link
               </h4>
            </div>
            <div class="modal-body">
                  <div class="form-group">
      <strong class="control-label">Link :-</strong>
      <label>http://www.sukhadaam.com/demo/sawlii/f/profile/vishal-c</label>
   </div>

   <div class="share_fg">
      <ul class="list-inline">
         <li>
            <a href="javascript:void(0);" class="wbshare-icon facebook" onclick="window.open('http://www.facebook.com/dialog/feed?display=popup&amp;app_id=1589285127814293&amp;link=http://www.sukhadaam.com/demo/sawlii/f/profile/vishal-c&amp;name=%USERNM%&amp;caption=%USERNM% ')" title="Share Via Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>

         </li>
         <li>
            <a href="https://plus.google.com/share?url=%LINK%" class="google" onclick="javascript:window.open(this.href, 'http://www.sukhadaam.com/demo/sawlii/f/profile/vishal-c', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" title="Share Via Google"><i class="fa fa-google-plus"></i></a>
         </li>
      </ul>
</div>
            </div>
         </div>
      </form>
   </div>
</div>
<script>
$(document).ready(function(){

    getAccordion("#dasTabs",992);
    
  $('body').on('hidden.bs.modal', '.modal', function () {
    $(this).removeData('bs.modal');
  });



  var url = "http://www.sukhadaam.com/demo/sawlii/AjaxPublicFprofile";

  $(document).on("click",".save_freelancer",function(){
    $(this).find('i').removeClass("fa fa-heart-o").addClass("fa fa-heart");
    var slug = $(this).attr("data-slug");
    $.post(url,{"action":"saveFreelancer","slug":slug},function(data){
      if(data.type=="error")
      {
         window.location.href = "http://www.sukhadaam.com/demo/sawlii/SignIn";
         toastr[data.type](data.msg);
      }
      else
      {
         toastr[data.type](data.msg);
      }
    },'json');
  });

  $(document).on("click","#reportUser",function(){

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
                }
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

  $(document).on("click","#inviteUser",function(){

       $("#inviteFrm").validate({
          ignore: [],
          errorClass: 'help-block',
          errorElement: 'label',
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
                jobId:{required:true}
           },

          messages:
          {
                jobId:{required:"Please select job"}
           },
      });

       if($("#inviteFrm").valid())
       {
           addOverlay();
           $("#inviteFrm").submit();
       }
  });

  $(document).on("click",".report_user_check",function(){
    var s = $(this).attr("data-slug");
    $.post(url,{"action":"check_report",s:s},function(data){
        if(data.content == 'modal')
        {
          $("#report_PickGeeks").modal("show");
        }
        else
        {
          window.location.href = "http://www.sukhadaam.com/demo/sawlii/SignIn";
        }
    },'json');
  });

  /*Add to favourite */
   $(document).on("click",".save_service",function(){
      $(this).find('i').removeClass("fa fa-heart-o").addClass("fa fa-heart");
      var id = $(this).attr("data-id");
      $.post(url,{"action":"saveServices","id":id,"fId":"11"},function(data){
         if(data.type == 'error')
         {
            window.location.href = "http://www.sukhadaam.com/demo/sawlii/SignIn";
            toastr[data.type](data.msg);
         }
         else
         {
            toastr[data.type](data.msg);
         }
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