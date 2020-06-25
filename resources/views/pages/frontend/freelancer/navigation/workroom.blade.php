@extends('layouts.frontend.master')
@section('title')
    Job
@endsection
@section('content')

<script>
    $("header .navbar-default .navbar-nav>li.notification .dropdown-menu").mCustomScrollbar();       
</script>
<!-- Your share button code -->
<div id="main-content">
    @include('pages.frontend.freelancer.nav_dashboard')
    <section class="main-work-room">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="work-room-menu theme-box">
                        <div class="profile">
                            <div class="workroom-freelancer">
                                <div class="profile-detail">
                                    <a href="javascript:void(0)">
                                        <div class="profile-img">
                                            <img src="{{asset('frontend/img/th2_no_user_image.png')}}" alt="" />
                                        </div>
                                    </a>
                                    <h4>
                                        <a href="javascript:void(0)">Vishal Patel</a>
                                    </h4>
                                    <span>
                                        <i class="fa fa-map-marker"></i>
                                        Rajkot, Gujarat, India
                                    </span>
                                    <div class="Report_PickGeeks">
                                        <a href="javascript:void(0)" class="report_user_check" data-slug="%DATA_SLUG%" title="Report">
                                            <i class="fa fa-flag-o" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="btn-feedback  hide">
                                        <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#user_feedback_free">
                                            Leave a Feedback
                                        </button>
                                    </div>
                                    <div class="btn-feedback hide">
                                        <button class="btn btn-primary btn-block given_feeback" data-toggle="modal" data-type="login">
                                            Given Feedback
                                        </button>
                                    </div>
                                    <div class="btn-feedback hide">
                                        <button class="btn btn-primary btn-block given_feeback hide" data-type="other">
                                            Review Rate
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="work-room-tabs">
                            <ul class="nav nav-tabs tabs-left" id="job_workroom_tab">
                                <li >
                                    <a href="#messages" data-toggle="tab" class="cls_message">Discussions</a>
                                </li>
                                <li>
                                    <a href="#job-detail" data-toggle="tab">Job Details</a>
                                </li>
                                <li class="%JOB_PENDING%">
                                    <a href="#files" data-toggle="tab"> Files</a>
                                </li>
                                <!-- <li class="hide"> -->
                                <li class="hide">
                                    <a href="#dispute-mgmt" data-toggle="tab"> Disputes</a>
                                </li>
                                <li class="active">
                                    <a href="#terms" data-toggle="tab">Terms &amp; Milestones </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8">
                    <div class="tab-content">
                        <div class="tab-pane fade" id="messages">
                            <div class="panel panel-default theme-box">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Discussions</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="content">
                                        <div class="chatting-person">
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="chat-img">
                                                        <img src="{{asset('frontend/img/th2_no_user_image.png')}}" width="225" height="225" />
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="user-name">
                                                        <h3>Vishal Patel</h3>
                                                        <span class="active"></span>
                                                        <span class="online">Active Now | 
                                                            <a href="javascript:void(0);">Files</a>
                                                        </span>
                                                    </div>
                                                    <div class="remove">
                                                        <label class="fileContainer">
                                                            <img src="{{asset('frontend/img/clip.png')}}" alt="">
                                                            <input type="file" name="messageFile" id="messageFile"/>
                                                        </label>
                                                        <a href="javascript:void(0)" class="delete_chat" data-slug="123-test-job" title="Delete Conversation">
                                                            <img src="{{asset('frontend/img/garbage.png')}}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="message-content" id="mesg_chat">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="msg-detail msg-room">
                                                        <ul>
                                                            <div class="no-msg">
                                                                <div class="no-msg-img">
                                                                    <img src="{{asset('frontend/img/no-msg.png')}}" alt=""/>
                                                                    <h2>No messages found!</h2>
                                                                    <p>Looks like you have not initiated a conversation.</p>
                                                                </div>
                                                            </div>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="msg-area ">
                                        <form name="msgForm" id="msgForm" method="post" onsubmit="return false">
                                        <input type="text" class="form-control" name="message" id="message" placeholder="Type a message"/>
                                        <input type="hidden" name="winnerId" id="winnerId" value="93">
                                        <input type="hidden" name="jobId" id="jobId" value="64">
                                        <button class="btn btn-system sendMessage" type="button">
                                            <i class="fa fa-paper-plane-o"></i>
                                        </button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="job-detail">
                            <div class="workroom-job-details panel panel-default theme-box">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Job Details</h3>
                                </div>
                                <div class="panel-body">
                                    <h4 class="card-title">
                                        <a href="{{route('test_job',$lang)}}">123 Test Job</a>
                                    </h4>
                                    <div class="category_subcategory">
                                        <span>
                                            
                                            <i class="fa fa-angle-right" aria-hidden="true">
                                            </i>
                                            
                                        </span>
                                    </div>
                                    <p><span>Public</span></p>
                                    <p><span>Any</span></p>
                                    <p><span class="theme-color">Pending</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="files">
                            <div class="panel panel-default theme-box">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Files</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="pro-filter">
                                        <ul class="filttering">
                                            <li>
                                                <a class="btn filter-button active" data-filter="all">All </a>
                                            </li>
                                            <li>
                                                <a class="btn filter-button " data-filter="jpeg">jpeg </a>
                                            </li>
                                            <li>
                                                <a class="btn filter-button " data-filter="jpg">jpg </a>
                                            </li>
                                            <li>
                                                <a class="btn filter-button " data-filter="pdf">pdf </a>
                                            </li>
                                            <li>
                                                <a class="btn filter-button " data-filter="png">png </a>
                                            </li>
                                            <li>
                                                <a class="btn filter-button " data-filter="psd">psd </a>
                                            </li>
                                            <li>
                                                <a class="btn filter-button " data-filter="svg">svg </a>
                                            </li>
                                            <li>
                                                <a class="btn filter-button " data-filter="doc">docx</a>
                                            </li>
                                            <li>
                                                <a class="btn filter-button " data-filter="work">Submitted Work </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="gallery-list">
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="dispute-mgmt">
                            <div class="panel panel-default theme-box">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Disputes</h3>
                                    <div class="panel-tools pull-right">
                                        <a href="#" type="button" class="hide" data-toggle="modal" data-target="#disp-mgmt-modal">Create Dispute <i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="dispute-list">
                                        <ul>
                                            <span class='no-records'><i class='fa fa-exclamation-triangle'></i>No Dispute Record</span>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade in active" id="terms">
                            <div class="panel panel-default theme-box">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Terms &amp; Milestones</h3>
                                    <div class="panel-tools pull-right">
                                        <a href="#" type="button" class="hide btn btn-primary" data-toggle="modal" data-target="#terms-modal">Create</a>
                                        <a href="#" type="button" class="btn btn-primary acc_milestone  hide" data-bid_id="45">Accept</a>
                                        <a href="#" type="button" class="btn btn-primary start_job_work hide">Start work</a>
                                        <a href="#" type="button" class="btn btn-primary edit_milestone hide" data-toggle="modal" data-target="#edit_milestone_modal">Edit</a>
                                        <a href="#" type="button" class="btn btn-primary hire_freelancer_btn hide" data-toggle="modal" data-id="45" data-target="">Hire</a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="escrow-funding">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive %CUST_MILESTONE_HIDE%">
                                                    <table class="table terms-milestone-table tbl_cust_milestone table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th class="tbl-num" align="left">
                                                                    Name
                                                                </th>
                                                                <th class="tbl-desc" style="width: 40%;">
                                                                    Description
                                                                </th>
                                                                <th class="tbl-amount">
                                                                    Amount
                                                                </th>
                                                                <th class="tbl-date">
                                                                    Date of completion
                                                                </th>
                                                                <th class="tbl-action">
                                                                    Status
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            
                                                        </tbody>
                                                    </table>
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
        </div>
    </section>

    <div class="modal fade" id="report_PickGeeks" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <form name="reportFrm" id="reportFrm" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <div class="media">
                            <div class="media-right">
                                <div class="invite_img">
                                    <img src="{{asset('frontend/img/th2_no_user_image.png')}}" title="Vishal Patel" />
                                </div>
                            </div>
                            <div class="media-body">
                                <h3>
                                Vishal Patel
                            </h3>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>
                                Reason
                            </label>
                            <textarea class="form-control" name="report_reason" id="report_reason"></textarea>
                            <input type="hidden" name="rp_id" id="rp_id" value="11">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="footer-btn">
                            <input type="hidden" name="action" id="action" value="report_user">
                            <button name="reportUser" id="reportUser" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="payment_confirm" role="dialog" data-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                    <h4 class="modal-title">
                    Payment Request
                </h4>
                </div>
                <div class="modal-body">
                    <form>
                        <p>
                            <label>Are you sure you would like to Ask For Payment for this milestone? </label>
                            <hr>
                            <label class="theme-color">Help :</label>
                            <label>Please be sure that all agreed points for this milestone should be completed from your side to avoid any chance of dispute and get paid easily.</label>
                        </p>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="footer-btn cf_payment" data-dismiss="modal">
                        <a class="btn btn-primary" href="javascript:void(0)">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirm_dsp" role="dialog" data-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                    <h4 class="modal-title">
                        Work Confirmation
                    </h4>
                </div>
                <div class="modal-body">
                    <form>
                        <p>
                            Are you sure you want to start work?
                        </p>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="footer-btn" data-dismiss="modal">
                        <a class="dp_work_start btn btn-primary" href="javascript:void(0)">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirm_no_dsp" role="dialog" data-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                    <h4 class="modal-title">
                    Work Confirmation
                </h4>
                </div>
                <div class="modal-body">
                    <form>
                        <p>
                            Are you sure you want to close job?
                        </p>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="footer-btn" data-dismiss="modal">
                        <a class="discon_work btn btn-primary" href="javascript:void(0)">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirm_disp_acc" role="dialog" data-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                    <h4 class="modal-title">
                    Work Confirmation
                </h4>
                </div>
                <div class="modal-body">
                    <form>
                        <p>
                            Are you sure you want to continue job?
                        </p>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="footer-btn" data-dismiss="modal">
                        <a class="dispute_acc_job btn btn-primary" href="javascript:void(0)">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirm_disp_deny" role="dialog" data-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                    <h4 class="modal-title">
                    Work Cancellation Confirmation
                </h4>
                </div>
                <div class="modal-body">
                    <form>
                        <p>
                            Are you sure you want to cancel job
                        </p>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="footer-btn" data-dismiss="modal">
                        <a class="dispute_deny_job btn btn-primary" href="javascript:void(0)">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="hire_freelancer_modal" role="dialog" data-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                    <h4 class="modal-title">
                        Hire Freelancer Confirmation
                    </h4>
                </div>
                <div class="modal-body">
                    <form>
                        <p>
                            Are you sure you want to hire this freelancer?
                        </p>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="footer-btn" data-dismiss="modal">
                        <input type="hidden" name="freelancer_bid_id" class="freelancer_bid_id">
                        <a class="btn btn-primary hire_freelancer_submit" href="javascript:void(0)">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="user_payment" role="dialog" data-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                    <h4 class="modal-title">
                        Milestone Payment
                    </h4>
                </div>
                <div class="modal-body">
                    <form>
                        <p>
                            By clicking on pay, Amount of <span id='mls_amount'></span> will be transferred to your freelancer wallet. Kindly do not refresh page or go back while payment is in progress.
                        </p>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="footer-btn ml_payment" data-dismiss="modal">
                        <a class="btn btn-primary" href="javascript:void(0)">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="disp-mgmt-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form name="saveDisputeFrm" id="saveDisputeFrm" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 class="modal-title" id="exampleModalLabel">
                            Raise Dispute
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="dispute-amount">
                                Reason For Dispute
                            </label>
                            <input type="hidden" name="entityId" id="entityId" value="64">
                            <input type="text" class="form-control" name="reason" id="dispute-amount">
                        </div>
                        <div class="form-group">
                            <label for="message">
                                Description For Dispute
                            </label>
                            <textarea class="form-control" id="message" name="description" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="footer-btn">
                            <input type="hidden" name="action" id="action" value="saveDisputeData">
                            <button type="submit" name="saveDispute" id="saveDispute" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--start given feedback customer-->
    <div class="modal fade" id="given_feedback_cust" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    </div>
    <!--end given feedback customer-->

    <!--start leave feedback freelancer-->
    <div class="modal fade user-feedback" id="user_feedback_free" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form method="post" name="reviewRatingFrm" id="reviewRatingFrm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 class="modal-title">
                            Leave a Feedback
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="rating">
                            <div class="form-group">
                                <label for="message" class="control-label msg">
                                Your Review*
                                <span>
                                (Tips &amp; Guidelines)
                                </span>
                                </label>
                                <textarea class="form-control" name="review" id="description" rows="3" placeholder="Your review goes here..."></textarea>
                            </div>
                        </div>
                        <div class="rating">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <label for="dispute-amount">
                                    Requirement Clarification*
                                    </label>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <span class="star" id="rate1">
                                    </span>
                                    <input name='rate1Val' type='hidden' id='rate1Val' />
                                </div>
                            </div>
                        </div>
                        <div class="rating">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <label for="dispute-amount">
                                    On Time Payment*
                                    </label>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="">
                                        <span class="star" id="rate2">
                                        </span>
                                        <input name='rate2Val' type='hidden' id='rate2Val' />
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="rating">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <label for="dispute-amount">
                                    On Time Response*
                                    </label>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="">
                                        <span class="star" id="rate3">
                                        </span>
                                        <input name='rate3Val' type='hidden' id='rate3Val' />
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="rating">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <label for="dispute-amount">
                                    Communication*
                                    </label>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="">
                                        <span class="star" id="rate4">
                                        </span>
                                        <input name='rate4Val' type='hidden' id='rate4Val' />
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="rating hide">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <label for="dispute-amount">
                                    Average Star rating*
                                    </label>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="">
                                        <span class="star" id="rate5">
                                        </span>
                                        <input name='rate5Val' type='hidden' id='rate5Val' />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="userType" id="userType" value="F">
                        <input type="hidden" name="jobId" id="jobId" value="64">
                        <div class="rating">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <input type="hidden" name="average" id="average" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="footer-btn">
                            <input type="hidden" name="action" id="action" value="saveReviewData">
                            <button class="btn btn-primary" name="saveReview" id="saveReview">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--end leave feedback freelancer-->

    <!--start terms modal-->
    <div class="modal fade" id="terms-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="" name="frmMilestones" id="frmMilestones" method="POST">
                <input type="hidden" id="job_amount" name="job_amount" value="%JOB_BUDGET%">
                <input type="hidden" name="admin_comm" value="%ADMIN_COMM%" id="admin_comm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 class="modal-title" id="exampleModalLabel">
                            Create Milestone
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="milestones" id="mls">
                            <div class="sub_milestone well" id="sub_milestone1">
                                <span class="remove-mls">
                                    <a href="javascript:void(0)" class="remove_div">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </span>
                                <div class="form-group">
                                    <label for="dispute-amount">
                                        Enter Milestone Title
                                    </label>
                                    <input type="text" name="milestoneTitle[0]" class="form-control milestone_title">
                                </div>
                                <div class="form-group">
                                    <label for="message">
                                        Milestone Description
                                    </label>
                                    <textarea class="form-control milestone_desc" name="milestoneDesc[0]" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="message">
                                        Milestone Completion Date
                                    </label>
                                    <input class="form-control milestone_date datepicker" name="milestone_date[0]" rows="3">
                                </div>
                                <div class="form-group">
                                    <label for="message">
                                        Milestone Amount
                                    </label>
                                    <input type="text" name="amount[0]" class="form-control milestone_amount">
                                </div>
                            </div>
                        </div>
                        <p class="amount_err_mile hide"></p>
                        <div class="footer-btn">
                            <button type="button" class="btn btn-primary addMilestone">add another milestone</button>
                        </div>
                        <span class="amount_err label label-danger hide"></span>
                    </div>
                    <div class="modal-footer">
                        <div class="footer-btn">
                            <input type="submit" class="btn btn-primary " name="submitMilestone" id="submitMilestone" value="Submit">
                        </div>
                        <input type="hidden" name="job_id" id="job_id" value="64">
                    </div>
                </div>
            </form>
            <div class="sub_div well hide" id="sub_milestone1">
                <div class="form-group">
                    <label for="dispute-amount">
                        Enter Milestone Title
                    </label>
                    <span class="remove-mls">
                        <a href="javascript:void(0)" class="remove_div">
                            <i class="fa fa-times"></i>
                        </a>
                    </span>
                    <input type="text" name="milestoneTitle[0]" class="form-control milestone_title">
                </div>
                <div class="form-group">
                    <label for="message">
                        Milestone Description
                    </label>
                    <textarea class="form-control milestone_desc" name="milestoneDesc[0]" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="message">
                        Milestone Completion Date
                    </label>
                    <input class="form-control milestone_date datepicker" name="milestone_date[0]" rows="3">
                </div>
                <div class="form-group">
                    <label for="message">
                        Milestone Amount
                    </label>
                    <input type="text" name="amount[0]" class="form-control milestone_amount">
                </div>
            </div>
        </div>
    </div>
    <!--end terms modal-->

    <!--start terms modal-->
    <div class="modal fade" id="edit_milestone_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="" name="frmMilestones" id="frmMilestones" method="POST">
                <input type="hidden" id="job_amount" name="job_amount" value="%JOB_BUDGET%">
                <input type="hidden" name="admin_comm" value="%ADMIN_COMM%" id="admin_comm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 class="modal-title" id="exampleModalLabel">
                            Edit Milestone
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="milestones" id="mls">
                            %EDIT_MILESTONE%
                        </div>
                        <p class="amount_err_mile hide"></p>
                        <div class="">
                            <a href="javascript:void(0)" type="button" class="btn btn-primary addMilestone">Add</a>
                        </div>
                        <span class="amount_err label label-danger hide"></span>
                    </div>
                    <div class="modal-footer">
                        <div class="footer-btn">
                            <input type="submit" class="btn btn-primary" name="submitMilestone" id="submitMilestone" value="Submit">
                        </div>
                        <input type="hidden" name="job_id" id="job_id" value="64">
                        <input type="hidden" name="bid_id" id="bid_id" value="45">
                        <input type="hidden" name="edit_milestone_field" value="edit_milestone_field">
                    </div>
                </div>
            </form>
            <div class="sub_div well hide" id="sub_milestone1">
                <div class="form-group">
                    <label for="dispute-amount">
                        Enter Milestone Title
                    </label>
                    <span class="remove-mls">
                        <a href="javascript:void(0)" class="remove_div">
                            <i class="fa fa-times"></i>
                        </a>
                    </span>
                    <input type="text" name="milestoneTitle[0]" class="form-control milestone_title">
                </div>
                <div class="form-group">
                    <label for="message">
                        Milestone Description
                    </label>
                    <textarea class="form-control milestone_desc" name="milestoneDesc[0]" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="message">
                        Milestone Completion Date
                    </label>
                    <input class="form-control milestone_date datepicker" name="milestone_date[0]" rows="3">
                </div>
                <div class="form-group">
                    <label for="message">
                        Milestone Amount
                    </label>
                    <input type="text" name="amount[0]" class="form-control milestone_amount">
                </div>
            </div>
        </div>
    </div>
    <!--end terms modal-->

    <!-- submit work modal-->
    <div class="modal fade" id="submit_work" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form method="post" name="submitWorkForm" id="submitWorkForm" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 class="modal-title">
                        Submit work
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="message">
                                Message
                            </label>
                            <textarea class="form-control" id="submitWorkMsg" name="submitWorkMsg" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="message">
                                Files
                            </label>
                            <input type="file" name="workFile" id="workFile">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="footer-btn">
                            <input type="hidden" name="milestoneId" id="milestoneId">
                            <input type="hidden" name="disputeId" id="disputeId">
                            <input type="hidden" name="action" id="action" value="submitWork">
                            <button class="btn btn-primary" name="submitWork" id="submitWork">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
</div>

<script type="text/javascript">
    var url = "http://www.sukhadaam.com/demo/sawlii/AjaxJobWorkroom";
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();   
        $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
            localStorage.setItem('activeTab', $(e.target).attr('href'));
        });
        var activeTab = localStorage.getItem('activeTab');
        if(activeTab){
            $('#job_workroom_tab a[href="' + activeTab + '"]').tab('show');
        }
        jQuery.validator.addMethod("emailsnotallowed", function(value, element) {

            var re = /(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))/;

            var j = 0;
            $.each(icontent, function(i, val) {
                if (value.indexOf(val) != -1) {
                    j++;
                    return false;
                }
            });

            var varr = value.split("");

            for (k = 0; k < varr.length - 5; k++) {
                var substr = $.trim(value.substring(k, k + 5));
                if (jQuery.isNumeric(substr)) {
                    j++;
                    return false;
                }
            }

            return !(re.test(value) || j > 0);

        }, "Email ID, Phone Number or Illegal content entered.");

        $.validator.addMethod("regex", function(value,element,regexp){
            var re= new RegExp(regexp);
            return this.optional(element) || re.test(value);
        },"Please enter valid name");

        $(document).on("click", ".sendMessage", function() {
            $("#msgForm").validate({
                ignore: [],
                errorClass: 'help-block',
                errorElement: 'label',
                highlight: function(element) {
                    $(element).closest('.form-group').addClass('has-error');
                },
                unhighlight: function(element) {
                    $(element).closest('.form-group').removeClass('has-error');
                },
                rules: {
                    message: {
                        required: true,
                        regex: "^[^\\s]"
                    }
                },
                messages: {
                    message: {
                        required: "Please enter message",
                        regex: "Please enter valid message"
                    }
                }
            });

            if ($("#msgForm").valid()) {
                var message = $("#msgForm").serializeArray();
                addOverlay();
                $.post(url, {
                    "action": "send_message",
                    "msg": message
                }, function(data) {
                    $(".msg-room").html(data.content);
                    var objDiv = document.getElementById('mesg_chat');
                    $("#message").val('');
                    objDiv.scrollTop = objDiv.scrollHeight;
                    removeOverlay();
                }, 'json');
            }
        });

        $(document).on('click', '.confirm_no_dsp', function(event) {
            var id = $(this).attr("data-id");
            var disputeId = $(this).attr("data-dpid");
            $('#milestoneId').val(id);
            $('#disputeId').val(disputeId);
            $('#confirm_no_dsp').modal("show");
        });

        $(document).on('click', '.dp_work_start', function(event) {
            mlVal = $('#milestoneId').val();
            dpId = $('#disputeId').val();
            addOverlay();
            $.post(url, {
                "action": "startWork",
                "ml_id": mlVal,
                "dp_id": dpId
            }, function(data) {
                location.reload();
                removeOverlay();
            }, "json");
        });

        $(document).on('click', '.discon_work', function(event) {
            mlVal = $('#milestoneId').val();
            dpId = $('#disputeId').val();
            addOverlay();
            $.post(url, {
                "action": "endJob",
                "ml_id": mlVal,
                "dp_id": dpId
            }, function(data) {
                location.reload();
                removeOverlay();
            }, "json");

        });

        /* When disputed user accept the job and continue for the further milestone */
        $(document).on('click', '.disputer_acc', function(event) {
            var mlId = $(this).attr("data-id");
            var dpId = $(this).attr("data-dpid");
            $('#milestoneId').val(mlId);
            $('#disputeId').val(dpId);
            $('#confirm_disp_acc').modal("show");
        });

        $(document).on('click', '.dispute_acc_job', function(event) {
            mlVal = $('#milestoneId').val();
            dpId = $('#disputeId').val();
            addOverlay();
            $.post(url, {
                "action": "disputeAccJob",
                "ml_id": mlVal,
                "dp_id": dpId
            }, function(data) {
                location.reload();
                removeOverlay();
            }, "json");
        });


        $(document).on('click', '.disputer_deny', function(event) {
            var mlId = $(this).attr("data-id");
            var dpId = $(this).attr("data-dpid");
            $('#milestoneId').val(mlId);
            $('#disputeId').val(dpId);
            $('#confirm_disp_deny').modal("show");
        });

        $(document).on('click', '.dispute_deny_job', function(event) {
            mlVal = $('#milestoneId').val();
            dpId = $('#disputeId').val();
            addOverlay();
            $.post(url, {
                "action": "disputeDenyJob",
                "ml_id": mlVal,
                "dp_id": dpId
            }, function(data) {
                location.reload();
                removeOverlay();
            }, "json");
        });

        $(document).on('click', '.hire_freelancer_btn', function(event) {
            var mlId = $(this).attr("data-id");
            $('.freelancer_bid_id').val(mlId);
            $('#hire_freelancer_modal').modal("show");
        });

        $(document).on('click', '.hire_freelancer_submit', function(event) {
            mlVal = $('.freelancer_bid_id').val();

            addOverlay();
            $.post(url, {
                "action": "hire_freelancer",
                "bid_id": mlVal,
            }, function(data) {
                if(data.type == 'insuff'){
                    window.location = 'http://www.sukhadaam.com/demo/sawlii/c/financial-dashboard';
                }
                else{
                    location.reload();
                    removeOverlay();
                }
            }, "json");
        });

        /* end code */

        $(document).on('change', '#messageFile', function(event) {
            var _this = $(this);
            var files = _this.prop('files');
            var value = _this.val();
            var allowedFiles = ["txt", "exe", "doc", "pdf", "jpg", "png", "jpeg", "psd", "svg", 'doc', 'docx'];
            var extension = value.split('.').pop().toLowerCase();

            //console.log($.inArray(extension, allowedFiles));
            //return false;
            if (value && value != '') {
                if ($.inArray(extension, allowedFiles) < 0) {
                    toastr['info']("Invalid extension! upload only .jpg, .jpeg, .png, .doc, .pdf, .svg, .psd, .doc, .PDF");
                } else if (this.files[0].size > 5242880) {
                    toastr['info']("Please upload max 5MB size");
                } else {
                    var file_data = $(this).prop("files")[0];

                    var form_data = new FormData(); // Creating object of FormData class
                    form_data.append("file", file_data) // Appending parameter named file with properties of file_field to form_data
                    form_data.append("action", "move_file")
                    form_data.append("ext", extension)
                    form_data.append("id", "64") // Adding extra parameters to form_data
                    $.ajax({
                        url: url,
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data, // Setting the data attribute of ajax with
                        type: 'post',
                        dataType: 'json',

                        success: function(data) {
                            $('.msg-room').html(data.content);
                            var objDiv = document.getElementById('message-content');
                            /*objDiv.scrollTop = objDiv.scrollHeight;  */
                        }
                    });
                }
            } else {
                event.preventDefault();
            }
        });

        $(document).on("click", ".single_msg_delete", function() {
            if (confirm("Are you sure you want to delete chat?")) {
                var $this = $(this);
                var msg = $(this).attr("data-id");
                var userId = $(this).attr("data-user-id");
                $jobId = $('#job_id').val();
                $.post(url, {
                    action: 'delete_single_msg',
                    'msg_id': msg,
                    'userId': userId,
                    "jobId": $jobId
                }, function(data) {
                    //$('.msg-room').html(data.content);
                    $this.closest('li').remove();
                    var objDiv = document.getElementById('message-content');
                    /*objDiv.scrollTop = objDiv.scrollHeight;*/
                }, 'json');
            }
        });

        $(document).on("click", ".delete_chat", function() {
            var slug = $(this).attr("data-slug");
            swal({
                title: "Confirmation!",
                text: "Are you sure you want to delete chat?",
                showCancelButton: true,
                closeOnConfirm: true
            },
            function(inputValue) {
                if (inputValue) {
                    //alert(slug);
                    $.post(url, {
                        "action": "delte_message",
                        "slug": slug
                    }, function(data) {
                        $(".msg-room").html(data.content);
                    }, 'json');
                }
            });

        });

        $(document).on("click", ".confirm_dsp", function() {
            var id = $(this).attr("data-id");
            var disputeId = $(this).attr("data-dpid");
            $('#milestoneId').val(id);
            $('#disputeId').val(disputeId);
            $('#confirm_dsp').modal("show");
        });

        $(document).on("click", ".given_feeback", function() {
            var type = $(this).attr("data-type");
            $.post(url, {
                "action": "load_review",
                type: type,
                "id": ""
            }, function(data) {
                $("#given_feedback_cust").modal("show");
                $("#given_feedback_cust").html(data.content);
            }, 'json');
        });

        /*dispute form validation*/
        $(document).on("click", "#saveDispute", function() {
            $("#saveDisputeFrm").validate({
                ignore: [],
                errorClass: 'help-block',
                errorElement: 'label',
                highlight: function(element) {
                    $(element).closest('.form-group').addClass('has-error');
                },
                unhighlight: function(element) {
                    $(element).closest('.form-group').removeClass('has-error');
                },
                rules: {
                    reason: {
                        required: true,
                        regex: "^[^\\s]"
                    },
                    description: {
                        required: true,
                        regex: "^[^\\s]"
                    }
                },
                messages: {
                    reason: {
                        required: "Please enter reason",
                        regex: "Please enter valid reason"
                    },
                    description: {
                        required: "Please enter description",
                        regex: "Please enter valid description"
                    }
                }
            });

            if ($("#saveDisputeFrm").valid()) {
                addOverlay();
                return true;
            }
        });

        $(".modification-amount").hide();

        $('.datepicker').datetimepicker({
            format: 'DD-MM-YYYY'
        });

        $.validator.addMethod("milestone_title", $.validator.methods.required, '&nbsp;Please enter milestone title');
        $.validator.addClassRules("milestone_title", {
            milestone_title: true
        });

        $.validator.addMethod("milestone_desc", $.validator.methods.required, '&nbsp;Please enter milestone description');
        $.validator.addClassRules("milestone_desc", {
            milestone_desc: true
        });

        $.validator.addMethod("milestone_amount", $.validator.methods.required, 'Please enter milestone amount');
        $.validator.addClassRules("milestone_amount", {
            milestone_amount: true,
            number: true
        });

        $.validator.addMethod("milestone_date", $.validator.methods.required, 'Please select milestone completion date');
        $.validator.addClassRules("milestone_date", {
            milestone_date: true
        });

        count = 1;
        div_id = 2;

        /* First Milestone price should be greater than admin job commision */
        $(document).on("focusout", ".milestone_amount", function(e) {
            name = $(this).attr('name');
            admin_comm = $('#admin_comm').val();
            if (name == 'amount[0]') {
                value = Number($(this).val());
                if (value <= admin_comm) {
                    $('.amount_err_mile').removeClass('hide');
                    $('.amount_err_mile').html('Initial milestone amount must be greater than $'+admin_comm);
                    /*$(this).val('');*/
                }
                else{
                    $('.amount_err_mile').html('');
                }
            }
        });
        /* End code */

        $(document).on("click", ".acc_milestone", function(e) {
            job_id = $('#job_id').val();
            bid_id = $(this).attr("data-bid_id");
            addOverlay();
            $.post(url, {
                'action': 'bid_accept',
                'bid_id': bid_id,
                'job_id': job_id
            }, function(data) {
                removeOverlay();
                location.reload();
            }, 'json');
        }); 

        $(document).on("click", ".start_job_work", function(e) {            
            job_id = $('#job_id').val();
            addOverlay();
            $.post(url, {
                'action': 'start_work',
                'job_id': job_id
            }, function(data) {
                removeOverlay();
                location.reload();
            }, 'json');
        });

        /* Adding milestone */
        $(document).on("click", ".addMilestone", function(e) {
            var a = $('.sub_div').clone();
            var count = $(this).closest('form').find('.milestone_amount').length + 1;
            line1 = "<div class='sub_milestone well' id='sub_milestone" + div_id + "'>";
            content = a.html();
            content = content.replace('milestoneTitle[0]', 'milestoneTitle[' + count + ']');
            content = content.replace('milestoneDesc[0]', 'milestoneDesc[' + count + ']');
            content = content.replace('amount[0]', 'amount[' + count + ']');
            content = content.replace('milestone_date[0]', 'milestone_date[' + count + ']');
            line2 = "</div>";
            finalContent = line1.concat(content);
            finalContent = finalContent.concat(line2);
            $(this).closest('form').find('#mls').append(finalContent);
            div_id;

            $('.datepicker').datetimepicker({
                format: 'DD-MM-YYYY'
            });
        });
        /* End code */

        $(document).on("click", ".remove_div", function(e) {
            id = $(this).parent().parent().attr('id');
            var _this = $(this);

            if (id == 'sub_milestone1') {
                $("#terms-modal").modal("hide");
                swal({
                    title: "Deleting initial milestone?",
                    text: "Initial milestone should not be deleted. Atleast one milestone is required.",
                    showCancelButton: false,
                    closeOnConfirm: true,
                    inputPlaceholder: "Write something"
                });
            } else {
                var dataid = $(this).attr("data-id");
                if(dataid != undefined){
                    swal({
                        title: "Confirmation!",
                        text: "Are you sure you want to delete chat?",
                        showCancelButton: true,
                        closeOnConfirm: true
                    },
                    function(inputValue) {
                        if (inputValue) {
                            //alert(id);
                            $.post(url, {
                                "action": "delete_milestone",
                                "id": dataid
                            }, function(data) {
                                if(data.message == 'success'){
                                    _this.closest('.sub_milestone').remove();
                                    location.reload();
                                }
                            }, 'json');
                        }
                    });
                }else{
                    _this.closest('.sub_milestone').remove();
                }
            }

        });

        $(".reqModification").click(function() {
            $(".modification-amount").show(300);
        });

        $(document).on("click", ".submit_work", function(e) {
            id = $(this).attr('data-id');
            $('#submit_work').modal('show');
            $('#milestoneId').val(id);

            // $.post(url,{'action':'submitWork','milestoneId':id},function($data){
            // },"json");
        });

        /*Submit work validation*/
        $(document).on("click", "#submitWork", function() {
            $("#submitWorkForm").validate({
                ignore: [],
                errorClass: 'help-block',
                errorElement: 'label',
                highlight: function(element) {
                    $(element).closest('.form-group').addClass('has-error');
                },
                unhighlight: function(element) {
                    $(element).closest('.form-group').removeClass('has-error');
                },
                rules: {
                    submitWorkMsg: {
                        required: true,
                        regex: "^[^\\s]"
                    },
                    workFile: {
                        required: true
                    }
                },
                messages: {
                    submitWorkMsg: {
                        required: "Please enter message",
                        regex: "Please enter valid message"
                    },
                    workFile: {
                        required: "Please upload work file"
                    }
                }
            });
            if ($("#submitWorkForm").valid()) {
                addOverlay();
                return true;
            }
        });

        $(document).on("click", ".report_user_check", function() {
            var s = $(this).attr("data-slug");
            $.post(url, {
                "action": "check_report",
                s: s
            }, function(data) {
                if (data.content == 'modal') {
                    $("#report_PickGeeks").modal("show");
                } else {
                    window.location.href = "http://www.sukhadaam.com/demo/sawlii/SignIn";
                }
            }, 'json');
        });

        $(document).on("click", "#saveReview", function() {
            $("#reviewRatingFrm").validate({
                ignore: [],
                errorClass: 'help-block',
                errorElement: 'label',
                highlight: function(element) {
                    $(element).closest('.form-group').addClass('has-error');
                },
                unhighlight: function(element) {
                    $(element).closest('.form-group').removeClass('has-error');
                },
                rules: {
                    review: {
                        required: true,
                        regex: "^[^\\s]"
                    },
                    average: {
                        required: true
                    },
                },
                messages: {
                    review: {
                        required: "Please enter review",
                        regex: "Please enter valid review"
                    },
                    average: {
                        required: "Please give rate"
                    },
                }
            });
            if ($("#reviewRatingFrm").valid()) {
                return true;
            }
        });

        $('.star').raty({
            readOnly: false,
            starOff: 'http://www.sukhadaam.com/demo/sawlii/frames-sd/images-sd/star-off.png',
            starOn: 'http://www.sukhadaam.com/demo/sawlii/frames-sd/images-sd/star-on.png',
        });

        $('#avgRate').raty({
            readOnly: true,
            score: 0,
            starOff: 'http://www.sukhadaam.com/demo/sawlii/frames-sd/images-sd/star-off.png',
            starOn: 'http://www.sukhadaam.com/demo/sawlii/frames-sd/images-sd/star-on.png',
        });

        $(".star > img").click(function() {
            var name = $(this).parent().attr("id");
            var score = $(this).attr("alt"); //record clicked
            $("input[id='" + name + "Val']").val(score);

            if ($("#userType").val() == 'C') {
                if ($("#rate1Val").val() != '' && $("#rate2Val").val() != '' && $("#rate3Val").val() != '' && $("#rate4Val").val() != '' && $("#rate5Val").val() != '') {
                    $("#average").val("1");
                }
            } else {
                if ($("#rate1Val").val() != '' && $("#rate2Val").val() != '' && $("#rate3Val").val() != '' && $("#rate4Val").val() != '') {
                    $("#average").val("1");
                }
            }
        });

        $(document).on("click", ".ask_for_payment", function(e) {
            var id = $(this).attr('data-id');
            $('#payment_confirm').modal('show');
            $('#milestoneId').val(id);
        });

        $(document).on("click", ".cf_payment", function(e) {
            ml_id = $('#milestoneId').val();
            addOverlay();
            $.post(url, {
                'action': 'ask_for_payment',
                'mls_id': ml_id
            }, function(data) {
                location.reload();
            }, "json");
        });

        $(document).on("click", ".pay_to_user", function(e) {
            var id = $(this).attr('data-id');

            $.post(url, {
                'action': 'get_milestone_amount',
                'mls_id': id
            }, function(data) {
                $('#mls_amount').html('<b>$' + data + '</b>');
            }, "json");

            $('#user_payment').modal('show');
            $('#milestoneId').val(id);
        });

        $(document).on("click", ".ml_payment", function(e) {
            var id = $('#milestoneId').val();
            processing();
            $.post(url, {
                'action': 'milestone_payment',
                'mls_id': id
            }, function(data) {
                //cons
                location.reload();
                removeProcessing();
            }, "json");

        });

        $(".filter-button").click(function() {
            var value = $(this).attr('data-filter');

            if (value == "all") {
                //$('.filter').removeClass('hidden');
                $('.filter').show('1000');
                $(this).addClass('active');
            } else {
                //$('.filter[filter-item="'+value+'"]').removeClass('hidden');
                //$(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                $(".filter").not('.' + value).hide('2000');
                $('.filter').filter('.' + value).show('2000');

                $('.pro-filter .filter-button').removeClass('active');
                $(this).addClass('active');
            }
        });

        $(document).on('click', '.cls_message', function(e) {
            jobId = $('#jobId').val();
            addOverlay();
            $.post(url, {
                'action': 'message_read',
                'job_id': jobId
            }, function(data) {
                removeOverlay();
            });
        });

        $(document).on('click', '#submitMilestone', function(e) {
            var main_form = $(this).closest('form');
            job_budget = Number($('#job_amount').val());

            counter = 0;
            total = 0;
            admin_comm = $("#admin_comm").val();
            main_form.find('.milestone_amount').each(function(e) {
                amt = parseInt($(this).val());
                if (amt != '') {
                    counter += 1;
                }
                total += parseInt(amt);
            });

            var ml = $(this).find('.milestone_amount');
            name = ml.attr('name');
            admin_comm = $('#admin_comm').val();
            if (name == 'amount[0]') {
                value = Number(ml.val());
                if (value <= admin_comm) {
                    $('.amount_err_mile').removeClass('hide');
                    $('.amount_err_mile').html('Initial milestone amount must be greater than $'+admin_comm);
                    /*$(this).val('');*/
                    return false;
                }
                else{
                    $('.amount_err_mile').html('');
                }
            }


            if (counter == '1') {
                default_amount = main_form.find('.milestone_amount').val();

                if (job_budget < default_amount) {
                    main_form.find('.amount_err').removeClass('hide');
                    a = "Job amount :" + job_budget + " | Milestone amount can not be less than job amount. Please create more milestones for job or update the price.";
                    main_form.find('.amount_err').html(a);
                    //main_form.find('.milestone_amount').val('');
                    return false;
                }
            }

            if (!isNaN(total)) {

                if (job_budget < total) {
                    main_form.find('.amount_err').removeClass('hide');
                    a = "Job amount :" + job_budget + " | Milestone amount can not be greater than job amount. Please enter amount which was agreed.";
                    main_form.find('.amount_err').html(a);
                    return false;
                    //main_form.find('.milestone_amount').val('');
                } else if (job_budget > total) {
                    main_form.find('.amount_err').removeClass('hide');
                    a = "Job Budget :" + job_budget + " | Milestone amount can not be less than job amount. Please create more milestones for job or update the price.";
                    main_form.find('.amount_err').html(a);
                    //main_form.find('.milestone_amount').val('');
                    return false;
                }

            } else if (isNaN(total)) {

                default_amount = main_form.find('.milestone_amount').val();

                if (job_budget < default_amount) {
                    main_form.find('.amount_err').removeClass('hide');
                    a = "Job amount :" + job_budget + " | Milestone amount can not be less than job amount. Please create more milestones for job or update the price.";
                    main_form.find('.amount_err').html(a);
                    //main_form.find('.milestone_amount').val('');
                    return false;
                }
            }

            main_form.validate({
                ignore: [],
                errorClass: 'help-block',
                errorElement: 'label',
                highlight: function(element) {
                    if ($(element).hasClass('milestone_title')) {
                        $(element).parent().addClass('has-error');
                    }
                    if ($(element).hasClass('milestone_desc')) {
                        $(element).parent().addClass('has-error');
                    }
                    if ($(element).hasClass('milestone_amount')) {
                        $(element).parent().addClass('has-error');
                    }
                    if ($(element).hasClass("milestone_date")) {
                        $(element).parent().addClass('has-error');
                    }
                },
                unhighlight: function(element) {
                    if ($(element).hasClass('milestone_title')) {
                        $(element).parent().removeClass('has-error');
                    }
                    if ($(element).hasClass('milestone_desc')) {
                        $(element).parent().removeClass('has-error');
                    }
                    if ($(element).hasClass('milestone_amount')) {
                        $(element).parent().removeClass('has-error');
                    }
                    if ($(element).hasClass('milestone_date')) {
                        $(element).parent().removeClass('has-error');
                    }
                },
                rules: {

                },
                messages: {

                }
            });

            if (main_form.valid()) {
                var error_val = $(".amount_err_mile").html();
                if(error_val.length <= 0){
                    main_form.submit();
                }else{
                    return false;
                }
            }
        });

});
$(document).on('blur','.milestone_amount',function(){
    $('.amount_err').addClass('hide');
});
</script>

<script>
 $("#mesg_chat").mCustomScrollbar();
</script>

<style type="text/css">
span.amount_err.label.label-danger {
    margin-top: 20px;
}
p.amount_err_mile {
    margin-top: 20px;
    color: #ff0000;
}
</style>
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