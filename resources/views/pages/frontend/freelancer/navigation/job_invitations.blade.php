@extends('layouts.frontend.master')
@section('title')
Invitations
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
        <div class="row">
            <div class="col-md-12">
                <h1 class="main-heading">Received Invitations</h1>
                <div class="panel panel-default theme-box">
                    <div class="panel-body">
                        <div class="fl-job-bid-wrap fjb-invite-wrap">
                            <ul class="fjb-lists" >
                                <span class='no-records'><i class='fa fa-exclamation-triangle'></i>No invitation found</span>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 
<script type="text/javascript">
  var url = "http://www.sukhadaam.com/demo/sawlii/ajaxFreelancerjobInvitation";
  $(document).on("click",".load_more_data",function()
  {
    var pageNo = $(this).attr("data-page");
    var p_no = parseInt(pageNo)+1;
    $.post(url,{"action":"load_more_data","page_no":p_no},function(data){
      $(".job_data").append(data.content);
      $(".load_more_data").addClass(data.btn);
      $(".load_more_data").attr("data-page",data.pageno);
    },'json');
  });

  $(document).on("click",".respond_action",function(){
    var data_action = $(this).attr("data-action"),jobId = $(this).attr("data-id");
    if(data_action=='a')
    {

      swal({
        title: "Confirmation!",
        text: "Are you sure to want to accept this bid?",
        showCancelButton: true,
        closeOnConfirm: false,
        inputPlaceholder: "Write something"
      },
      function (inputValue) {
        if(inputValue)
        {
          $.post(url,{"action":"respond_invitation",jobId:jobId,status:data_action},function(data){
                  //swal(data.initial, data.msg);
                  swal({
                    title: data.initial,
                    text: data.msg,
                    type: "success",
                    confirmButtonText: "Ok",
                    closeOnConfirm: true
                  });
                  $(".respond_action").hide();
                },'json');
          $(this).parent().hide();
        }
      });
    }
    else
    {
      swal({
        title: "Confirmation!",
        text: "Are you sure to want to reject this bid?",
        showCancelButton: true,
        closeOnConfirm: false,
        inputPlaceholder: "Write something"
      },
      function (inputValue) {
        if(inputValue)
        {
          $.post(url,{"action":"respond_invitation",jobId:jobId,status:data_action},function(data){
            //swal(data.initial, data.msg);
            swal({
                    title: data.initial,
                    text: data.msg,
                    type: "success",
                    confirmButtonText: "Ok",
                    closeOnConfirm: true
                  });
            $(".respond_action").hide();
          },'json');
          $(this).parent().hide();
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