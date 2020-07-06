@extends('layouts.frontend.master')
@section('title')
    My Jobs
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

@if(Auth::user()->type == 'C')

<!-- Searchbar Section -->
<section class="serchbar-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="searchbar-form filters-search" >
                    <form class="form" action="" method="POST" id="frmMyJobs" name="frmMyJobs">
                        <div class="input-group">
                            <!-- <input type="text" class="form-control" placeholder="Find Jobs (eg. Web Design)">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">Search</button>
                            </span> -->
                            <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Find Jobs"/>
                           <span class="input-group-btn search_record">
                                <button class="btn btn-primary search_record" type="button">Search</button>
                           </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Searchbar Section End -->

<section class="main-dashboard ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="job-listing-wrap">
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <div class="left-sidebar filters-search" id="sidebarMenu">
                                <div class="panel panel-default theme-box">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Filters</h3>
                                        <div class="panel-tools pull-right">
                                            <a href="{{route('post_jobs',$lang)}}">Clear <i class="fa fa-refresh" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="filter-box">
                                            <h5 class="filter-title">Approved By</h5>
                                            <div class="filter-body">
                                                <ul class="filter-lists">
                                                    <li>
                                                       <input type="radio" value="p" id="test1" name="appStatus"/>
                                                       <label for="test1">
                                                          Pending
                                                       </label>
                                                    </li>
                                                    <li>
                                                       <input type="radio" value="a" id="test2" name="appStatus"/>
                                                       <label for="test2">
                                                          Accepted
                                                       </label>
                                                    </li>
                                                    <li>
                                                       <input type="radio" value="r" id="test3" name="appStatus"/>
                                                       <label for="test3">
                                                          Rejected
                                                       </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="filter-box">
                                            <h5 class="filter-title">Job is for</h5>
                                            <div class="filter-body">
                                                <ul class="filter-lists">
                                                    <li>
                                                       <input type="radio" value="b" id="test4" name="levelStatus"/>
                                                       <label for="test4">
                                                          Beginner
                                                       </label>
                                                    </li>
                                                    <li>
                                                       <input type="radio" value="p" id="test5" name="levelStatus"/>
                                                       <label for="test5">
                                                          Pro
                                                       </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="filter-box">
                                            <h5 class="filter-title">Job Type</h5>
                                            <div class="filter-body">
                                                <ul class="filter-lists">
                                                    <li>
                                                       <input type="radio" value="pu" id="test6" name="typeStatus"/>
                                                       <label for="test6">
                                                          Public
                                                       </label>
                                                    </li>
                                                    <li>
                                                       <input type="radio" value="pr" id="test7" name="typeStatus"/>
                                                       <label for="test7">
                                                          Private
                                                       </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="filter-box">
                                            <h5 class="filter-title">Status</h5>
                                            <div class="filter-body">
                                                <ul class="filter-lists">
                                                    <li>
                                                       <input type="radio" value="p" id="test8" name="status"/>
                                                       <label for="test8">
                                                          Pending jobs
                                                       </label>
                                                    </li>
                                                    <li>
                                                       <input type="radio" value="c" id="test9" name="status"/>
                                                       <label for="test9">
                                                          Closed
                                                       </label>
                                                    </li>
                                                    <li>
                                                       <input type="radio" value="ip" id="test10" name="status"/>
                                                       <label for="test10">
                                                          In progress jobs
                                                       </label>
                                                    </li>
                                                    <li>
                                                       <input type="radio" value="co" id="test11" name="status"/>
                                                       <label for="test11">
                                                          Completed jobs
                                                       </label>
                                                    </li>
                                                    <li>
                                                       <input type="radio" value="ud" id="test12" name="status"/>
                                                       <label for="test12">
                                                          Under dispute
                                                       </label>
                                                    </li>
                                                    <li>
                                                       <input type="radio" value="dsp" id="test13" name="status"/>
                                                       <label for="test13">
                                                          Dispute is solved & is in progress
                                                       </label>
                                                    </li>
                                                    <li>
                                                       <input type="radio" value="dsc" id="test14" name="status"/>
                                                       <label for="test14">
                                                          Dispute is solved & is closed
                                                       </label>
                                                    </li>
                                                    <li>
                                                       <input type="radio" value="dsCo" id="test15" name="status"/>
                                                       <label for="test15">
                                                          Dispute is solved & is completed
                                                       </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-menu">
                               <button class="filter-btn">
                                  <i class="fa fa-sliders" aria-hidden="true">
                                  </i>
                                  Filters
                               </button>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-8">
                            <div class="cm-job-lists-wrap">
                                <div class="panel panel-default theme-box">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">My Jobs</h3>
                                    </div>
                                    <div class="panel-body">
                                        <ul class="cm-job-item-lists my-jobs">
                                            @foreach($jobs as $job)
                                            @if(empty($job))
                                                <span class='no-records'><i class='fa fa-exclamation-triangle'></i>No Records Found</span>
                                            @else

                                            <li class="cm-job-item job_81">
                                                <div class="cmj-title-wrap">
                                                    <h4 class="cmj-title"><a href="{{route('post_jobs',$lang)}}">@if(!empty($job->title_en)) {{$job->title_en}} @else {{$job->title_ar}} @endif</a></h4>
                                                    <span class="cmj-deadline">Ending in 8 hour(s) 10 minute(s)</span>
                                                </div>
                                                <ul class="cmj-breadcrumb ">
                                                    <li>{{$job->getcategory->name}}</li>
                                                    <li class="">{{$job->getsubcategory->name}}</li>
                                                </ul>
                                                <div class="cmj-budget">Est.budget : <div class="amount-wrap">{{$job->budget}}<span>$</span></div></div>
                                                <div class="cmj-details"><p>@if(!empty($job->description_en)){{$job->description_en}} @else {{$job->description_ar}} @endif</p><br />
                                            </div>
                                                <ul class="cmj-skills clearfix">
                                                    @foreach(explode('#', $job->skills) as $skills)
                                                    <li>{{$skills}}</li>
                                                    @endforeach
                                                </ul>
                                                <ul class="cmj-status clearfix">
                                                    <li>No of Bids : <span>0</span></li>
                                                    <li><span>@if($job->public == '0') Public @else Private @endif</span></li>
                                                    <li>Job acceptance status : <span>Pending</span></li>
                                                    <li class=""><span>@if($job->level == 'B') Beginner @else @if($job->level == 'M') Intermediate @else Pro @endif @endif</span></li>
                                                </ul>
                                                <div class="cmj-footer">
                                                    <div class="cmj-action-wrap clearfix">
                                                        <ul class="cmj-post-status">
                                                            <li><span class="badge badge-pill badge-success">Pending</span></li>
                                                            <li>Posted : <span>11 minutes ago</span></li>
                                                        </ul>
                                                        <ul class="cmj-post-action pull-right">
                                                            <li class="hide">Featured <span><i class="fa fa-check-square"></i></span></li>
                                                            <li class=" "><a class="edit  " title="Edit" href="{{route('post_job.edit',[$lang, $job->id])}}" id="job_edit" data-id="81"><i class="fa fa-edit" aria-hidden="true"></i></a></li>
                                                            <li class=""><a class="delete " data-id="81" id="job_delete" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="cmj-button-wrap">
                                                        <!-- <a class="btn btn-secondary" href="">Pay featured Fee</a> -->
                                                        <div class="cmj-button notApproved   ask_feature" data-id="81">
                                                            <a class="btn btn-secondary btn-md" href="javascript:void(0)">Make Featured</a>
                                                        </div>
                                                        <div class="cmj-button hide notApproved payNow" data-id="81" data-dur="0">
                                                            <a class="btn btn-secondary btn-md" href="javascript:void(0)">Pay Featured Fee</a>
                                                        </div>
                                                        <div class="cmj-button hide">
                                                            <a class="btn btn-primary" href="http://www.sukhadaam.com/demo/sawlii/proposals/test-test">View Bids</a>
                                                        </div>
                                                        <div class="cmj-button hide">
                                                            <a class="btn btn-primary" href="http://www.sukhadaam.com/demo/sawlii/job/workroom/test-test">Workroom</a>
                                                        </div>
                                                        <div class="cmj-button hide">
                                                            <a class="btn btn-primary" href="http://www.sukhadaam.com/demo/sawlii/c/my-jobs/job-invitation/test-test"> View Invited Freelancer </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>    
                                            @endif
                                            @endforeach
                                        </ul>
                                        <div class="view-more-button">
                                          <div class="theme-button">
                                              <a href="javascript:void(0)" class="btn btn-primary load_more_data hide" data-page="1">View More Jobs</a>
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

<div id="makeFeatured" class="modal fade" role="dialog">
   <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
      <button type="button" class="close featured_cancel" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Make this Job Featured</h4>
   </div>
   <div class="modal-body">
     <div class="form-group">
       <label class="control-label">Featured Duration Days :</label>
       <input type="number" class="form-control" placeholder="days" value="1" id="txtDays" name="txtDays" />
       <label class="lbl_days_error help-block red_error"></label>
    </div>
    <div class="form-group">
       <label class="control-label">Total Featured Amount ($):</label>
       <input type="text" class="form-control" placeholder="Total Amount" value="10" id="txtAmount" name="txtAmount" readonly/>
       <label class="lbl_amount_error help-block red_error"></label>
    </div>
 </div>
 <div class="modal-footer">
   <div class="theme-button-default" data-dismiss="modal">
     <a href="javascript:void()" id="featured_cancel" class="featured_cancel">Cancel</a>
  </div>
  <a href="javascript:void(0)" id="invite" class="btn btn-system makeFPayment" data-id="%JOB_ID%">Add</a>

</div>
</div>
</div>
</div>
<!-- /.container -->

<!-- Script to Activate the Carousel -->
<script>

   $(document).on('click','.filter-btn',function(e){
    e.preventDefault();
   });
   
    var url = "http://www.sukhadaam.com/demo/sawlii/ajaxMyJobs";
    $(document).ready(function() {

        $(document).on("click",".payNow",function(){
            if($(this).hasClass("notApproved")){
            toastr['error']("Job is not approved by admin");
            }else{
            var id = $(this).attr("data-id"),$this = $(this);
            var dur= $(this).data("dur");
            var f_fees = dur*"10";
            swal({
                title: "Confirmation!",
                text: "Total amount of $"+f_fees+" will be deducted from your wallet to make this job as featured for "+dur+" days.",
                showCancelButton: true,
                closeOnConfirm: false,
                inputPlaceholder: "Write something"
            },
            function (inputValue) {
                if(inputValue)
                {
                $.post(url,{"action":"payFeaturedFees","id":id,"f_dur":dur},function(data){
                    $this.hide();
                    swal(data.initial, data.msg);
                    setTimeout(function(){location.reload();},3000);
                },'json');
                }
            });
            }
        });
        $(document).on("click",".ask_feature",function(){
            $('#makeFeatured').modal('show');
            $('.makeFPayment').attr('data-id',$(this).data("id"));

        });

        $(document).on("keypress","#txtDays",function(e){
        var charCode = (typeof e.which == "undefined") ? e.keyCode : e.which;
        if (charCode > 31 && (charCode < 48 || charCode > 57) && (charCode < 95 || charCode > 106)){
            return false;
        }
        return true;
    });

        $(document).on("keyup","#txtDays",function(e){

        var total_fetured_amount = ($("#txtDays").val())*"10";
        if(!isNaN(total_fetured_amount)){
            $("#txtAmount").val(total_fetured_amount);
        }
        else{
            toastr['error']("It is not a valid value");
            $("#txtAmount").val("10");
            $("#txtDays").val("1");
        }
    });

      $(document).on("click",".featured_cancel",function(e){
         $("#txtAmount").val("10");
         $("#txtDays").val("1");
      });

      $(document).on("click",".makeFPayment",function(){

         if($("#txtDays").val()=="" || $("#txtDays").val()==null){
            toastr['error']("It is not a valid value for featured days. Try with numeric values.","Invalid Value");
            return false;
         }
         else{

            if($("#txtDays").val() < 1){
               toastr['error']("Featured days should be greater than or equal to 1");
               return false;
            }

            var id = $(this).attr("data-id"),$this = $(this);
            var dur= $("#txtDays").val();
            var f_fees = dur*"10";
            $('#makeFeatured').modal('hide');
            swal({
               title: "Confirmation!",
               text: "Total amount of $"+f_fees+" will be deducted from your wallet to make this job as featured for "+dur+" days.",
               showCancelButton: true,
               closeOnConfirm: false,
               inputPlaceholder: "Write something"
            },
            function (inputValue) {
               if(inputValue)
               {
                  addOverlay();
                  $.post(url,{"action":"makeFeaturedPayment","id":id,"f_dur":dur},function(data){
                     $this.hide();

                     /*swal(data.initial, data.msg);*/
                     location.reload();
                  },'json');
               }
               else{
                  $('#makeFeatured').modal('show');
               }
            });
         }
      });

      $(document).on("click",".load_more_data",function()
      {
        var pageNo = $(this).attr("data-page");
        var p_no = parseInt(pageNo)+1;
        var status = $("input[name=status]:checked").val();
        status = (status == undefined) ?'' : status;
        addOverlay();
        $.post(url,{"action":"load_more_data","page_no":p_no,"status":status},function(data){
          $(".my-jobs").append(data.content);
              // console.log(data.btn,data.pageno);
              $(".load_more_data").addClass(data.btn);
              $(".load_more_data").attr("data-page",data.pageno);
              removeOverlay();
           },'json');
     });

      /* Delete Job */
      $(document).on("click",".delete",function(){
         $("#delete").modal("show");
         var jobId = $(this).attr("data-id");
         $("#jobId_delete").val(jobId);
      });

      $(document).on("click",".delete_confirm",function(){
         $("#delete").modal("hide");
         var id = $("#jobId_delete").val();
         addOverlay();
         $.post(url,{"action":"delete_jobs","job_id":id},
           function(data){
            if(data['type'] == "true"){
               $(".job_"+id).hide();
               toastr['success']('Job has been deleted successfully');
               removeOverlay();
            }
         },'json');


      });
      /* End record */

      /* Edit Job */
      // $(document).on("click",".edit",function(){

      //       $('#editDetails').modal("show");
      //       var jobId = $(this).attr("data-id");
      //       $("#jobId_edit").val(jobId);
      // });
      /* End code */


      $(document).on("click",".search_record",function(){
         var keyword = $("#keyword").val();
         search_record(1);
      });
      $(document).on("keypress","#keyword",function(e){
         var charCode = (typeof e.which == "undefined") ? e.keyCode : e.which;
         if (charCode == 13){
            var keyword = $("#keyword").val();
            search_record(1);
            return false;
         }
      });

   });

    function search_record(p_no)
    {
    var keyword = $("#keyword").val();
    var query_param = $(".filters-search input").serialize()+"&action=load_search_data&page_no="+p_no;

    console.log(query_param);

    var new_serialized_url = URI(url+'/?'+query_param),
    curr_uri = URI(window.location.href),
    new_serialized_params = new_serialized_url.search(true);

    ((new_serialized_params.appStatus!=undefined) ? curr_uri.setSearch("appStatus", new_serialized_params.appStatus) : curr_uri.removeSearch("appStatus"));

    ((new_serialized_params.levelStatus!=undefined) ? curr_uri.setSearch("levelStatus", new_serialized_params.levelStatus) : curr_uri.removeSearch("levelStatus"));

    ((new_serialized_params.typeStatus!=undefined) ? curr_uri.setSearch("typeStatus", new_serialized_params.typeStatus) : curr_uri.removeSearch("typeStatus"));

    ((new_serialized_params.status!=undefined) ? curr_uri.setSearch("status", new_serialized_params.status) : curr_uri.removeSearch("status"));


    ((new_serialized_params.keyword!='') ? curr_uri.setSearch("keyword", new_serialized_params.keyword) : curr_uri.removeSearch("keyword"));
    history.pushState({}, null, '?'+curr_uri._parts.query);
    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'json',
        data: query_param,
        success : function(data)
        {
        $('.my-jobs').html(data.content);
        $(".load_more_data").addClass(data.btn);
        $(".load_more_data").attr("data-page",data.pageno);
        }
    });

    }

    $(document).on("change","input[name=appStatus]:radio",function(e){
    search_record(1);
    });

    $(document).on("change","input[name=levelStatus]:radio",function(e){
    search_record(1);
    });
    $(document).on("change","input[name=typeStatus]:radio",function(e){
    search_record(1);
    })
    $(document).on("change","input[name=status]:radio",function(e){
    search_record(1);
    });

    $(document).on("click","#saveJob",function(){
    $("#frmMyJobs").validate({
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
        budget:{required:true,number:true}
        },
        messages:
        {
        budget:{required:"CMJ_PLEASE_ENTER_BUDGET",number:"CMJ_PLEASE_ENTER_NUMBER_ONLY"}
        }
    });

    if($("#frmMyJobs").valid())
    {
        addOverlay();
        $("#frmMyJobs").submit();
    }
    });

</script>
</div>

@else

<section class="main-dashboard">
    <div class="container">

        <div class="account_setting my-jobs-wrap">
            <div class="sawlii-tabs-wrap">
                <ul class="nav nav-tabs">
                    <li>
                        <a href="{{route('my_bids',$lang)}}" class=" active">My Bids</a>
                    </li>
                    <li class=" active">
                        <a href="{{route('my_jobs',$lang)}}">My Jobs</a>
                    </li>
                    <li>
                        <a href="{{route('saved_jobs',$lang)}}">Saved Jobs</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default theme-box">
                               <!--  <div class="panel-heading">
                                    <h3 class="panel-title">My Jobs</h3>
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
                                                    <li>Est.budget : <span class="amount-wrap">$0</span></li>
                                                    <!-- <li>Bid Amount : <span class="amount-wrap">%BID_AMOUNT%</span></li> -->
                                                </ul>
                                                <div class="fjb-desc">Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing</div>
                                                <ul class="fjb-cat">
                                                    
                                                </ul>
                                                <ul class="fjb-details-list">
                                                    <li><span>Any</span></li>
                                                    <li>No of Applicants : <span>1</span></li>
                                                    <li>Bidding Deadline : <span>Expired</span></li>
                                                </ul>
                                                
                                                <div class="fjb-status">
                                                    <div class="fjb-status-item"><span class="badge badge-pill badge-warning" ">Pending</span></div>
                                                    <div class="fjb-status-item fjb-post-time">Posted : <span>9 months ago</span></div>
                                                    <div class="fjb-workroom-btn %WORKROOM_CLASS%">
                                                    <a href="{{route('workroom',$lang)}}" class="btn btn-primary">Workroom</a>
                                                </div>
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
                                            <a href="javascript:void(0)" class="load_more_data hide" data-page="1">View More Jobs</a>
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

@endif
@endsection