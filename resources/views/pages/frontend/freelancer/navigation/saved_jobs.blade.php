@extends('layouts.frontend.master')
@section('title')
    My Saved Jobs
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

        <div class="">
            <div class="row">
                <div class="col-md-12">
                  <div class="">
                        <div class="account_setting my-jobs-wrap">
                            <div class="sawlii-tabs-wrap">
                                <ul class="nav nav-tabs">
                                    <li>
                                        <a href="{{route('my_bids',$lang)}}" class=" active">My Bids</a>
                                    </li>
                                    <li>
                                        <a href="{{route('my_jobs',$lang)}}">My Jobs</a>
                                    </li>
                                    <li class=" active">
                                        <a href="{{route('saved_jobs',$lang)}}">Saved Jobs</a>
                                    </li>
                                </ul>


                        <div class="tab-content">  
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <div id="sidebarMenu" class="left-sidebar filters-search">
                                        <div class="panel panel-default theme-box" id="filters-search">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Filters</h4>
                                                <div class="panel-tools pull-right">
                                                    <a href="{{route('saved_jobs',$lang)}}">Clear <i class="fa fa-refresh" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <div class="filter-box">
                                                    <h5 class="filter-title">Status</h5>
                                                    <div class="filter-body">
                                                        <ul class="filter-lists">
                                                            <li>
                                                                <input type="radio" id="test1" name="status" value="open" />
                                                                <label for="test1">
                                                                    Open
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="test2" name="status" value="hired_another" />
                                                                <label for="test2">
                                                                    Hired another Freelancer
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="test9" name="status" value="hired" />
                                                                <label for="test9">
                                                                    Hired
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="test10" name="status" value="closed" />
                                                                <label for="test10">
                                                                    Closed
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-menu">
                                        <button><i class="fa fa-sliders" aria-hidden="true"> </i> Filters</button>
                                    </div>
                                </div>

                                <div class="col-md-9 col-sm-8">
                                    <div class="panel-heading">
                                            <h3 class="panel-title">My Saved Jobs</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="fl-job-bid-wrap fl-saved-job-wrap">
                                                <ul class="fjb-lists" id="jobs_data">
                                                    <span class='no-records'><i class='fa fa-exclamation-triangle'></i>No Records Found</span>
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
        </div>
    </div>
</section>

<div class="modal fade" id="delete" role="dialog" data-backdrop="static" tabindex="-1">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          &times;
        </button>
        <h4 class="modal-title">
          Remove
        </h4>
      </div>
      <div class="modal-body">
        <form>
          <p>
             Are you sure you want to remove ??
          </p>
        </form>
      </div>
      <div class="modal-footer">
        <div class="theme-button-default">
          <a href="#" data-dismiss="modal">Cancel</a>
        </div>
        <div class="theme-button">
          <input type="hidden" name="jobId_delete" id="jobId_delete">
          <a href="javascript:void(0)" class="btn btn-system delete_confirm">Remove</a>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
var url = "http://www.sukhadaam.com/demo/sawlii/ajaxFreelancerSavedJobs";

$(document).ready(function(){

    /* Modal Open */
    $(document).on("click",".delete_record",function(){
      $("#delete").modal("show");
      var jobId = $(this).attr("data-id");
      $("#jobId_delete").val(jobId);
    });

    /* Delete Record */
    $(document).on("click",".delete_confirm",function(){
        $("#delete").modal("hide");
        var jobId = $("#jobId_delete").val();
        $(".job_"+jobId).hide();

        addOverlay();
        $.post(url,{"action":"remove_record","jobId":jobId},function(data){
          removeOverlay();
          toastr['success']("Job Removed successfully");
        },'json');
    });

    
    $(document).on("click",".load_more_data",function()
    {
        var pageNo = $(this).attr("data-page");
        var p_no = parseInt(pageNo)+1;        
        var status = $("input[name=status]:checked").val();
        if(status == undefined)
        {
          status = '';
        }
        else
        {
          status = status;
        }
        addOverlay();
        $.post(url,{"action":"load_more_data","page_no":p_no,"status":status},function(data){
          removeOverlay();
          $("#jobs_data").append(data.content);
          $(".load_more_data").addClass(data.btn);
          $(".load_more_data").attr("data-page",data.pageno);
        },'json');
    });

});

function search_record(p_no) 
{
    var query_param = $("#filters-search input").serialize()+"&action=load_seach_data&page_no="+p_no;
    var new_serialized_url = URI(url+'/?'+query_param),
        curr_uri = URI(window.location.href),
        new_serialized_params = new_serialized_url.search(true);

    ((new_serialized_params.status!=undefined) ? curr_uri.setSearch("status", new_serialized_params.status) : curr_uri.removeSearch("status"));
    history.pushState({}, null, '?'+curr_uri._parts.query);
    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'json',
        data: query_param,
        beforeSend: function () {
            addOverlay();
        },
        success : function(data)
        {       
          $('#jobs_data').html(data.content);
          $(".load_more_data").addClass(data.btn);
          $(".load_more_data").attr("data-page",data.pageno);
        },
        complete: function (xhr) {
            removeOverlay();
        }
    });
}

  $(document).on('change', 'input[name=status]:radio', function(e) {
      search_record(1);
  });
</script>
</div>


@endsection