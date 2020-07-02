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
<!-- Searchbar Section -->
<section class="serchbar-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="searchbar-form filters-search">
                    <form class="form" action="" method="POST" id="frmMyJobs" name="frmMyJobs">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for Service" name="keyword" id="keyword" value="">
                            <span class="input-group-btn search_record">
                                <a href="javascript:void(0)" class="btn btn-primary search_record">Search</a>
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
                <div class="service-listing-wrap">
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <div class="left-sidebar filters-search" id="sidebarMenu">
                                <div class="panel panel-default theme-box">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Filters</h3>
                                        <div class="panel-tools pull-right">
                                            <a href="{{route('my_services',$lang)}}">Clear <i class="fa fa-refresh" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="filter-box">
                                            <h5 class="filter-title">Approval Status</h5>
                                            <div class="filter-body">
                                                <ul class="filter-lists">
                                                    <li>
                                                       <input type="radio" id="test1" name="approval_status" value="p" />
                                                       <label for="test1">
                                                            Pending
                                                       </label>
                                                    </li>
                                                    <li>
                                                       <input type="radio" id="test2" name="approval_status" value="a" />
                                                       <label for="test2">
                                                            Approved
                                                       </label>
                                                    </li>
                                                    <li>
                                                       <input type="radio" id="test9" name="approval_status" value="r" />
                                                       <label for="test9">
                                                            Rejected
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
                                                       <input type="radio" id="test12" name="status" value="y"  />
                                                       <label for="test12">
                                                            Active
                                                       </label>
                                                    </li>
                                                    <li>
                                                       <input type="radio" id="test13" name="status" value="n"  />
                                                       <label for="test13">
                                                            Deactive
                                                       </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-menu">
                              <button>
                                <i class="fa fa-sliders" aria-hidden="true">
                                </i>
                                Filter
                              </button>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-8">
                            <div class="cm-job-lists-wrap">
                                <div class="panel panel-default theme-box">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Posted Services</h3>
                                        <div class="panel-tools pull-right">
                                            <a href="{{route('post_services',$lang)}}" title="Post A Service"><span>Post New Service</span> <i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                      @foreach($services as $service)
                                      <ul class="fl-service-item-lists " id="services_data">
                                        <li class="fl-posted-service media services_39">
                                          <div class="media-left">
                                            <div class="flps-image">
                                              <a href="#"><img src="{{asset($service->image)}}" title="Test service" alt="images"></a>
                                            </div>
                                          </div>
                                          <div class="media-body">
                                            <div class="flps-title-wrap">
                                              <h4 class="flps-title">
                                                  <a href="{{route('my_services',$lang)}}" target="_blank">@if(empty($service->title_en)) {{$service->title_ar}} @else {{$service->title_en}}@endif</a>
                                              </h4>
                                              <span class="flps-delivery">Delivery in <span>3 Day(s)&lrm;</span></span>
                                            </div>
                                            <ul class="post-breadcrumbs">
                                              <li>{{$service->getcategory->name}}</li>
                                              <li>{{$service->getsubcategory->name}}</li>
                                            </ul>
                                            <div class="flps-bdgt">Price : <div class="amount-wrap">${{$service->price}}<span>KWD</span></div></div>
                                            <div class="flps-status-wrap">
                                              <div class="flps-status status-item flps-active">Pending Approval</div>
                                              <div class="flps-posted status-item">Posted on : <span>{{date('d, M Y',strtotime($service->date))}}</span></div>
                                              <div class="flps-operation status-item"><span>Pending</span></div>
                                              <div class="flps-posted status-item">Add-ons : <span>0</span></div>
                                            </div>
                                            <div class="flps-featured-wrap clearfix">
                                              <div class="flps-featured">
                                                <div class="add-feature flps-f-item hide"  id="make_feature_39">
                                                  <label class="sawlii-check">Mark as Featured
                                                    <input type="checkbox" class="hide make_featured" name="feature" id="feature" data-id="39" >
                                                    <span class="checkmark"></span>
                                                  </label>
                                                </div>
                                                <div class="mark-feature flps-f-item hide">
                                                  <label>Featured Price Detail <div class="amount-wrap">10<span>$</span></div></label>
                                                  <button class="payNow btn btn-primary btn-sm" data-id="39" data-price="10">Pay Now</button>
                                                </div>
                                                <div class="item-featured flps-f-item hide" id="featured_div_39">
                                                  <label class="">Featured <i class="fa fa-check-square"></i></label>
                                                </div>
                                                <div class="item-edits flps-f-item">
                                                  <a class="edit " href="{{route('post_services.edit',[$lang, $service->id])}}" title="Edit"><i class="fa fa-edit"></i></a>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </li>
                                      </ul>
                                      @endforeach
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
          Delete
        </h4>
      </div>
      <div class="modal-body">
        <form>
          <p>
            Are you sure you want to delete ?
          </p>
        </form>
      </div>
      <div class="modal-footer">
        <div class="theme-button-default">
          <a href="#" data-dismiss="modal">Cancel</a>
        </div>
        <div class="theme-button">
          <a href="javascript:void(0)" class="delete_record">Delete</a>
        </div>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">

  var url = "http://www.sukhadaam.com/demo/sawlii/ajaxFreelancerMyServices";
  $(document).ready(function(){
    $(document).on("click",".load_more_data",function()
    {
      var pageNo = $(this).attr("data-page");
      var p_no = parseInt(pageNo)+1;
      var status = $("input[name=status]:checked").val();
      var approval_status = $("input[name=approval_status]:checked").val();
      status = (status == undefined) ? '' : status;
      approval_status = (approval_status == undefined) ? '' : approval_status;

      addOverlay();
      $.post(url,{"action":"load_more_data","page_no":p_no,"status":status,"approval_status":approval_status},function(data){
        removeOverlay();
        $("#services_data").append(data.content);
        $(".load_more_data").addClass(data.btn);
        $(".load_more_data").attr("data-page",data.pageno);
      },'json');
    });
  });

  $(document).on('change', 'input[name=status]:radio', function(e) {
    search_record(1);
  });

  $(document).on('change', 'input[name=approval_status]:radio', function(e) {
    search_record(1);
  });

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

  function search_record(p_no)
  {
    var query_param = $(".filters-search input").serialize()+"&action=load_search_data&page_no="+p_no;
    var new_serialized_url = URI(url+'/?'+query_param),
    curr_uri = URI(window.location.href),
    new_serialized_params = new_serialized_url.search(true);

    ((new_serialized_params.approval_status!=undefined) ? curr_uri.setSearch("approval_status", new_serialized_params.approval_status) : curr_uri.removeSearch("approval_status"));
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
        $('#services_data').html(data.content);
        $(".load_more_data").addClass(data.btn);
        $(".load_more_data").attr("data-page",data.pageno);
      }
    });
  }

  /*delete record*/
  $(document).on("click",".delete_service",function(){
  	$(".delete_record").attr("data-id",$(this).attr("data-id"));
  	$("#delete").modal("show");
  });
  $(document).on("click",".delete_record",function(){
  	var id = $(this).attr("data-id");
    addOverlay();
    $.post(url,{"action":"delete_record",id:id},function(data){
      removeOverlay();
      toastr['success']("Service has been deleted successfully");
      $(".services_"+id).hide();
      $("#delete").modal("hide");
    },'json');
  });

  $(document).on("click",".payNow",function(){
  	var id = $(this).attr("data-id"),$this = $(this);
    var this_price = $(this).attr("data-price");
    swal({
      title: "Confirmation!",
      text: "By confirming $"+this_price+" amount will be deducted from your wallet ",
      showCancelButton: true,
      closeOnConfirm: false,
      inputPlaceholder: "Enter days"
    },
    function (inputValue) {
      if(inputValue)
      {
        $.post(url,{"action":"payFeaturedFees","id":id},function(data){
         $this.hide();
         //swal(data.initial, data.msg);
         swal({
          title: data.initial,
          text: data.msg,
          type: "success",
          confirmButtonText: "Ok",
          closeOnConfirm: true
        });
         setTimeout(function(){ window.location.href = data.link; }, 3000);
         
       },'json');
      }
    });
  });

  $(document).on("click",".make_featured",function(){
      $id = $(this).data("id");
      if($(this).prop("checked")){
        var id = $(this).attr("data-id");
        swal({
          title: "Confirmation!",
          text: "Are you sure you want to make this service featured? It will cost you : $10 /day",
          showCancelButton: true,
          closeOnConfirm: false,
          inputPlaceholder: "Write something"
        },
        function (inputValue) {
          if(inputValue)
          {
           swal({
            title: "Enter no. of days you want to get it featured",
            /* text: "Write something interesting:",*/
            type: "input",
            showCancelButton: true,
            closeOnConfirm: false,
            inputPlaceholder: "Enter days"
          },
          function (inputValue)
          {
            if (inputValue === false) return false;

            if (inputValue === "" ) {
              swal.showInputError("Enter no. of days");
              return false
            }
            if (inputValue < 1) {
              swal.showInputError("Days should be greater than or equal to 1.");
              return false
            }
            if(isNaN(parseInt(inputValue))){
              swal.showInputError("Enter valid numeric values");
              return false;
            }
            inputValue = parseInt(inputValue);
            if(inputValue > 30){
              swal.showInputError("Service can be featured for max. of 30 days.");
              return false;
            }

            $.post(url,{"action":"makeFeatured","id":id,"days":inputValue},function(data){
              if(data.content==1)
              {
                var msg = "You have insufficient balance to pay. Please credit up your wallet";
                //swal("Warning!", msg);
                swal({
                  title: "Warning!",
                  text: msg,
                  type: "warning",
                  confirmButtonText: "Ok",
                  closeOnConfirm: true
                });
                return false;
              }
              else
              {
                // var total_fee = inputValue * "10";
                // var msg = "Amount of $"+total_fee+ " has been deducted from your wallet";
                var msg = "Featured days added"
                //swal("Success!", msg);
                swal({
                  title: "Success!",
                  text: msg,
                  type: "success",
                  confirmButtonText: "Ok",
                  closeOnConfirm: true
                });
                $("#make_feature_"+$id).addClass("hide");
                $("#featured_div_"+$id).removeClass("hide");
              }
              setTimeout(function(){ location.reload(); }, 3000);
              //location.reload();
            },'json');
          });
           /**/
         }
      });
    }
  });


  $(document).on('click','.already_approve',function(e){

    var link = $(this).attr('href');
    swal({
      title: "Confirmation!",
      text: "You service will be disappeared from search. Do you want to proceed?",
      showCancelButton: true,
      closeOnConfirm: false,
    },
    function (inputValue) {
      if(inputValue == true){
        window.location.href = link;
      }
    });
    e.preventDefault();
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