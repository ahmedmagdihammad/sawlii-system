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
<section class="detail-section">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="job-detail-wrap">
          <div class="pbox ">
            <div class="service-featured "><span><i class="fa fa-star"></i></span></div>
            <div class="pbox-header no-padding">
              <h1 class="pbox-title">123 Test Job</h1>
              <div class="pbox-breadcrumb hide"> <span class="hide"><i class="fa fa-angle-right"></i></span> </div>
            </div>
            <div class="pbox-body no-padding">
              <div class="pbox-body-panel">
                <h3 class="pbox-body-title">About Job</h3>
                <div class="pbox-body-info">
                    <p>Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing</p>
                </div>
              </div>
              <div class="pbox-body-panel">
                <h3 class="pbox-body-title">Extra Information about job</h3>
                <div class="pbox-body-info">
                  <ul class="job-details-list">
                    <li><label>Job Status</label>:<span>Open</span></li>
                    <li><label>Total no. of applicants</label>:<span>0</span></li>
                    <li><label>Required Skills</label>:<span></span></li>
                    <li><label>Bidding deadline</label>:<span>Expired</span></li>
                    <li><label>Bid accepted from</label>:<span> All Locations</span></li>
                    <li><label>Expertise Level</label>:<span> Any</span></li>
                    </ul>
                </div>
              </div>
              <div class="pbox-body-panel">
                <div class="pbox-body-info">
                  <div class="job-details-button hide">
                      <a class="btn btn-primary" href="{{route('test_job',$lang)}}"> View Invited Freelancer </a>
                  </div>
                  <div class="job-details-button hide">
                      <a class="btn btn-primary" href="{{route('test_job',$lang)}}">View Bids</a>
                  </div>
                </div>
              </div>                
              <div class="pbox-body-panel">
                <h3 class="pbox-body-title">Attachments</h3>
                <div class="pbox-body-info">
                  <ul class="job-attachment-list">
                      
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="pbox job-bid-wrap">
          <div class="pbox-body no-padding">
            <div class="bid-details-wrap">
              <div class="amount-wrap">
                <div class="service_orignal_price hide">Budget not available</div>
                <p class="">Budget not available</p>
              </div>
              <div class="job-action-wrap">
                <div class="job-action-item job-save-wrap">
                  <a href="javascript:void(0)" id="save_job">
                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                    <span class="total_save_job">0</span>
                  </a>
                </div>
                <div class="job-action-item job-report-wrap">
                  <a href="javascript:void(0)" data-id="64" class="reportJob">
                    <i class="fa fa-flag" aria-hidden="true"></i>
                  </a>
                  <span>Report</span>
                </div>
              </div>
              <ul class="bid-details-list">
                  <li><label>Est.time</label><span>undefined</span></li>
                  <li><label>Posted</label><span>9 months ago</span></li>
              </ul>
              <div class="place-bid-wrap buy_now">
                <input type="hidden" name="job_type" id="job_type" value="pu">
                <a href="javascript:void(0)" class="btn btn-primary btn-lg btn-block   " data-credit="" id="place_bid" data-hired="0" data-status="">Place a Bid</a>
                <input type="hidden" value="1" id='is_disp'>
              </div>
            </div>
          </div>
        </div>
        <div class="pbox user-details-card">
          <div class="pbox-body no-padding">
            <div class="user-details-wrap">
              <div class="user-avatar-wrap">
                <div class="user-avatar">
                    <img src="{{asset('frontend/img/th2_no_user_image.png')}}">
                </div>
                <span class="user-label user-online" title="online"></span>
              </div>
              <div class="user-info-wrap">
                <h3 class="user-title">Vishal Patel</h3>
                <div class="star-ratings-sprite">
                  <span style="width:71.428%" class="star-ratings-sprite-rating">
                  </span>
                </div>
                <div class="user-location-wrap">
                    <i class="fa fa-map-marker"></i> Rajkot, Gujarat, India
                </div>
                <div class="user-chat-btn-wrap ">
                  <a href="javascript:void(0);" class="btn btn-primary btn-bordered message_send">
                      <i class="fa fa-comments-o"></i> Send Message
                  </a>
                </div>
              </div>
              <div class="user-work-wrap">
                <ul class="user-work-lists">
                  <li><label>member since</label> <span>Mar, 2019</span></li>
                  <li><label>Amount spent</label><span>222<span>$</span></span></li>
                  <li><label>Posted Jobs</label> <span>27</span></li>
                  <li><label>Open Jobs</label> <span>0</span></li>
                </ul>
              </div>
              <div class="user-desc-wrap">
                 <!--  <p>Praesent vel dapibus urna, nec imperdiet nunc. Sed vel tortor consequat, placerat nulla in, venenatis massa. <a href="http://www.sukhadaam.com/demo/sawlii/customer_review_all/11">Read More...</a></p> -->
                <a href="{{route('customer_review_all',$lang)}}">View all reviews and ratings</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="bid_job" role="dialog" tabindex="-1">
        <form name="frmJobDetail" id="frmJobDetail" action="" method="POST">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                  &times;
                </button>
                <h4 class="modal-title">
                  Submit proposal
                </h4>
              </div>
              <div class="modal-body">

                <div class="form-group">
                </div>
                <div class="form-group">
                  <label>
                    Enter bid amount ($)
                  </label>
                  <input class="form-control" name="budget" id="budget"/>
                </div>
                <div class="form-group">
                  <label>
                    Estimate time duration for delivery
                  </label>
                  <select class="form-control" name="estDuration" id="estDuration">
                    <option value="1 day or less">1 day or less</option>
                    <option value="Less than 1 week">Less than 1 week</option>
                    <option value="1 to 2 week">1 to 2 week</option>
                    <option value="3 to 4 week">3 to 4 week</option>
                    <option value="1 to 6 month">1 to 6 month</option>
                    <option value="More than 6 month">More than 6 month</option>
                    <option value="Ongoing">Ongoing</option>
                    <option value="Not sure">Not sure</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>
                    Description
                  </label>
                  <textarea class="form-control" placeholder="Enter bid description" name="bidDesc" id="bidDesc"></textarea>
                </div>
                <div class="form-group hide">
                  <p>
                    <label>
                      Escrow required? :
                    </label>
                    <div class="form-group radio-inline ">
                      <input type="radio" id="escrowy" value="y" name="escrowReq" class="ipEscrow"/>
                      <label for="escrowy">
                        yes
                      </label>
                    </div>
                    <div class="form-group radio-inline">
                      <input type="radio" id="escrown" value="n" name="escrowReq" class="ipEscrow"/>
                      <label for="escrown">
                        no
                      </label>
                    </div>
                  </p>
                  <label class="lbl_escrow_error"></label>
                  <input type="hidden" name="jobId" id="jobId" value="64">
                  <input type="hidden" name="isDisplayEscrow" id="isDisplayEscrow" value="yes">
                </div>
                
              </div>
              <div class="modal-footer">
                <div class="theme-button-default">
                  <a href="http://www.sukhadaam.com/demo/sawlii/" data-dismiss="modal">Cancel</a>
                </div>
                <div class="theme-button">
                  <button type="submit" id="sbmJobDetail" name="sbmJobDetail" value="submit" class="btn btn-block btn-system">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal fade" id="delete" role="dialog" data-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">
                 &times;
              </button>
              <h4 class="modal-title">
                 Are you Sure?
              </h4>
            </div>
            <div class="modal-body">
              <form>
                <p>
                 <!-- Bidding on this job will require 2 credits from your package. -->
                 You want to place a bid
                </p>
                
             </form>
            </div>
            <div class="modal-footer">
              <div class="theme-button-default" data-dismiss="modal">
                <a href="javascript:void(0)">Cancel</a>
              </div>
              <div class="theme-button bid_confirm" data-dismiss="modal">
               <a href="javascript:void(0)">Submit Bid</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
</section>
<div class="modal fade" id="report_job" role="dialog" tabindex="-1">
 <div class="modal-dialog">
  <!-- Modal content-->
  <form name="reportFrm" id="reportFrm" method="post">
   <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal">
      &times;
    </button>
    <div class="media">
      <div class="media-body">
       <h3>
        123 Test Job
      </h3>
    </div>
  </div>
</div>
<div class="modal-body">
 <div class="form-group">
  <label>
   Reason for Report
 </label>
 <input type="hidden" name="jobId" id="jobId" value="64">
 <textarea class="form-control" name="report_reason" id="report_reason" pattern="^[a-zA-Z][\sa-zA-Z]*"></textarea>
</div>
</div>
<div class="modal-footer">
 <div class="theme-button-default" data-dismiss="modal">
  <a href="#">Closed</a>
</div>
<div class="theme-button">
  <input type="hidden" name="action" id="action" value="report_job">
  <button name="reportJob" id="reportJob" class="btn btn-system">Submit</button>
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
                     <input type="hidden" name="freelancerId" id="freelancerId" value="11">
                     <button name="sendMsg" id="sendMsg" class="btn btn-primary">Send</button>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>

<!-- /.container -->
<script type="text/javascript">
  url = "http://www.sukhadaam.com/demo/sawlii/ajaxJobDetail";
  $(document).ready(function(){
    jQuery.validator.addMethod("trimReq", function(value, element)
    {
      return $.trim(value) == '' ? false : true;
    }, "Please enter field value");
    jQuery.validator.addMethod("answerReq", function(value, element)
    {
      return $.trim(value) == '' ? false : true;
    }, "&nbsp;Please enter your answer");
    //$.validator.addMethod("answerReq", $.validator.methods.required, '&nbsp;Please enter your answer');
    $.validator.addClassRules("answerReq", { answerReq: true});

    $(document).on('click', '#sbmJobDetail', function (e) {

      $("#frmJobDetail").validate({
        ignore: [],
        errorClass: 'help-block',
        errorElement: 'label',
        highlight: function (element)
        {
          $(element).closest('.form-group').addClass('has-error');
          if($(element).hasClass('answerReq')){
            $(element).parent().addClass('has-error');
          }
        },
        unhighlight: function (element)
        {
          $(element).closest('.form-group').removeClass('has-error');
          if($(element).hasClass('answerReq')) {
            $(element).parent().removeClass('has-error');
          }
        },
        rules:
        {
          budget:{required:true,number:true},
          bidDesc:{required:true,trimReq : true},
          location:{required:true,startingSpaceNotAllow:true},
          aboutme : {required:true}

        },
        messages:
        {
          budget: {required:"Please enter bid amount"},
          bidDesc: {required:"Please enter description",trimReq : "Please enter description"},
          location:{ required:"Please enter location"},
          aboutme: { required:"Please enter overview"}
        }
      });

      
      if($("#isDisplayEscrow").val()!="yes"){      
        if(!$("input[type='radio']:checked").val()){
          $('.lbl_escrow_error').html("Please select escrow");
          $('.lbl_escrow_error').css("color","#a94442");
          return false;
        }else{
          $('.lbl_escrow_error').html("");
        }
      }
      $(".ipEscrow").on('change',function(){
        $('.lbl_escrow_error').html("");
      });

      if($("#sbmJobDetail").valid())
      {
        $("#sbmJobDetail").submit();
      }
    });

    $('#bid_job').on('hidden.bs.modal', function () {
      var _this = $(this);
      var form = _this.find('form');
      var form_id = _this.find('form').attr('id');

      form[0].reset();
      $('#'+form_id+' .form-group').each(function(index, element) {
        if($(element).hasClass('has-error')) {
          $(element).removeClass('has-error')
        }
      });
      $('#'+form_id+' .help-block').each(function(index, element) {
        $(element).remove();
      });
    });
    $(document).on("click","#place_bid", function(e){

      var status = $(this).attr("data-status");
      var credit = $(this).attr("data-credit");
      var hired_in_status_val = $(this).attr("data-hired");
      var job_type = $("#job_type").val();
      
      if($(this).hasClass('not_login')){
        toastr["error"]("Please sign in to continue");
        return false;
      }

      if($(this).hasClass('already_applied')){
        toastr["error"]("You have already placed a bid on this job.");
        return false;
      }

      if($(this).hasClass('owner')){
        toastr["error"]("You can not bid on your own job.");
        return false;
      }

      if(hired_in_status_val == 'y'){
        toastr["error"]("You can't place a bid on this job now. Try for other jobs.","Job closed for bids");
        return false;
      }
      // Private job is not accepted 
      
      if(job_type=="pr"){
        addOverlay();
        var jobId = $("#jobId").val();

        $.ajax({
          url: url,
          type: 'post', 
          data: {"action":"private_job_status","job_id":jobId},        
          dataType : "json", 
          async : false,                
          success:function(data)
          {
            removeOverlay();
            if(data.status=="false"){
              $("#is_disp").val("0");
              toastr["error"]("Bid invitation not accepted by you.");
            }
          }
        });
      }      
      if($("#is_disp").val()=="1"){
        if(credit == "0") {
          toastr['error']('Please upgrade your plan to bid this project');
        } else {
         $('#delete').modal("show");  
        }
      }      
   });


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
        $("#reportFrm").submit();
      }
    });
    $(document).on("click",".bid_confirm", function(e){
      $('#delete').modal("hide");
      $('#bid_job').modal("show");
    });

    $(document).on("click","#save_job",function(e){
      jobId = $("#jobId").val(),$this = $(this);
      addOverlay();
      $.post(url,{"action":"save_job","job_id":jobId},
        function(data)
        {
          removeOverlay();
          if(data["type"]=="success"){
            $this.find('i').removeClass('fa fa-heart-o').addClass('fa fa-heart')
            $(".total_save_job").html("1");           
          }
          toastr[data.type](data.msg);
        },'json');
    });


    $(document).on("click",".reportJob",function(){
      $("#report_job").modal("show");
    });

    $(document).on("click",'#reportFrm [name="reportJob"]',function()
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