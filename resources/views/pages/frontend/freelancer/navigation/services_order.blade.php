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
            <div class=" service-order">
                <div class=" after-login-wrap">
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <div id="sidebarMenu" class="left-sidebar filters-search">
                                <div class="panel panel-default theme-box" id="filters-search">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Filters</h4>
                                        <div class="panel-tools pull-right">
                                            <a href="{{route('services_order',$lang)}}">Clear <i class="fa fa-refresh" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="filter-box">
                                            <h5 class="filter-title">Order Status</h5>
                                            <div class="filter-body">
                                                <ul class="filter-lists">
                                                    <li>
                                                      <input type="radio" id="test1" name="status" value="new_order"  />
                                                      <label for="test1">
                                                        New Orders
                                                      </label>
                                                    </li>
                                                    <li>
                                                      <input type="radio" id="test3" name="status" value="in_progress" />
                                                      <label for="test3">
                                                        In Progress
                                                      </label>
                                                    </li>
                                                   <li>
                                                     <input type="radio" id="test4" name="status" value="ask_refund" />
                                                     <label for="test4">
                                                       Asked for Refund
                                                     </label>
                                                   </li>
                                                   <li>
                                                     <input type="radio" id="test5" name="status" value="closed" />
                                                     <label for="test5">
                                                       Closed
                                                     </label>
                                                   </li>
                                                   <li>
                                                     <input type="radio" id="test6" name="status" value="payment_pending" />
                                                     <label for="test6">
                                                       Payment Pending
                                                     </label>
                                                   </li>
                                                   <li>
                                                     <input type="radio" id="test7" name="status" value="completed" />
                                                     <label for="test7">
                                                       Completed
                                                     </label>
                                                   </li>
                                                   <li>
                                                     <input type="radio" id="test8" name="status" value="under_dispute" />
                                                     <label for="test8">
                                                       Under Dispute
                                                     </label>
                                                   </li>
                                                   <li>
                                                     <input type="radio" id="test9" name="status" value="dispute_solved" />
                                                     <label for="test9">
                                                       Dispute is solved
                                                     </label>
                                                   </li>
                                                   <li>
                                                     <input type="radio" id="test10" name="status" value="dispute_solved_closed" />
                                                     <label for="test10">
                                                       Dispute Solved and Closed
                                                     </label>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-menu">
                                <button><i class="fa fa-sliders" aria-hidden="true"></i>Filter</button>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-8">
                            <div class="panel panel-default theme-box">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Service Orders</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="fl-service-lists-wrap">
                                        <ul class="fl-service-order-list" id="services_data">
                                            <span class='no-records'><i class='fa fa-exclamation-triangle'></i>No Records Found</span>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="view-more-button hide">
                                <div class="theme-button">
                                <a href="javascript:void(0)" class="load_more_data hide" data-page="1">View More Orders</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="giveDeadline" class="modal fade" role="dialog" tabindex="-1">
  <div class="modal-dialog">
    <form method="post" name="deadlineFrm" id="deadlineFrm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Give Deadline</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>
              Start Date
            </label>
            <input class="form-control datepicker start_date" type="text" name="start_date" id="start_date" placeholder>
          </div>
          <div class="form-group">
            <label>
              End Date
            </label>
            <input class="form-control datepicker end_date" type="text" name="end_date" id="end_date" placeholder>
          </div>
          <div class="form-group">
            <label class="end_date_hint"></label>
          </div>
        </div>
        <div class="modal-footer">
          <div class="footer-btn" data-dismiss="modal">
            <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            <!-- <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a> -->
          </div>
          <div class="footer-btn">
            <input type="hidden" name="action" id="action" value="saveDeadline">
            <input type="hidden" name="sId" id="sId" value="">
            <button type="submit" name="saveDeadline" id="saveDeadline" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- start deadline details -->
<div id="deadlineDetail" class="modal fade" role="dialog" tabindex="-1">
  <div class="modal-dialog">
   <form method="post" name="replyFrm" id="replyFrm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Deadline Details</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered deadline_detail_table">
          
        </table>
      </div>
      <div class="modal-footer footer_deadlineDetail">
        <div class="theme-button-default" data-dismiss="modal">
          <a href="#" data-dismiss="modal">Cancel</a>
        </div>
        <div class="theme-button">
          <input type="hidden" name="orderId" id="orderId">
          <input type="hidden" name="action" id="action" value="saveMsg">
          <button type="submit" name="sendReply" id="sendReply" class="btn btn-system">Submit</button>
        </div>
      </div>
    </div>
  </form>
</div>
</div>
<!-- end deadline details -->

<script type="text/javascript">

  var url = "http://www.sukhadaam.com/demo/sawlii/ajaxFreelancerServicesOrder";
  $(document).ready(function(){
      $('.datepicker').datepicker({ dateFormat: 'yy-mm-dd'});
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
          $("#services_data").append(data.content);
          $(".load_more_data").addClass(data.btn);
          $(".load_more_data").attr("data-page",data.pageno);
        },'json');
      });

      $.validator.addMethod('checkGreaterThan', function (value, element) {        
        $start = $("input[name='start_date']").val();
        $end = $("input[name='end_date']").val();       
        if($start>$end){
          return false;
        }else{
          return true;
        }
      }, "Please provide valid date");
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
        console.log();
        $('#services_data').html(data.content);
        $(".load_more_data").addClass(data.btn);
        $(".load_more_data").attr("data-page",data.pageno);
      },
      complete: function (xhr) {
        removeOverlay();
      }
    });
  }

  $(document).on('change', 'input[name=status]:radio', function(e) {
   var pageNo = $(".load_more_data").attr("data-page");
   search_record(pageNo);
 });

  $(document).on("click",".give_deadline",function(){
    var a = $(this).attr("data-id");
    $("#giveDeadline").modal("show");
    addOverlay();
    $.post(url,{"action":"deadline_load","id":a},function(data){
      removeOverlay();
      $("#sId").val(data.id);
      $("#start_date").val(data.start_date);
      $("#end_date").val(data.end_date);

      $("#start_date").attr("data-start-id",data.id);
      $("#end_date").attr("data-end-id",data.id);
    },'json');
  });

  $(".start_date").datepicker({
    dateFormat: 'yy-mm-dd',
    minDate:0,
    onSelect: function(dateText) {
      var id = $(this).attr("data-start-id");
      addOverlay();
      $.post(url,{"action":"get_end_date","id":id,"start_date":$(this).val()},function(data){
        removeOverlay();
        $(".end_date_hint").html("<span class='glyphicon glyphicon-hand-right'></span>  Note:- ");
        $(".end_date_hint").append(data.note);
      },'json');
    }
  });
  $(".end_date").datepicker({
    dateFormat: 'yy-mm-dd',
    minDate:0
  });

  $(document).on("change","#start_date",function(){
    var date = $(this).val();
    if(date == '' || date == null)
    {
      $(".end_date_hint").html('');
    }
  })

  /*deadline form validation*/
  
  $(document).on("click","#saveDeadline",function(){

    $("#deadlineFrm").validate({
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
        start_date:{required:true},
        end_date:{
          required:true,
          checkGreaterThan: true,
        }
      },

      messages:
      {
        start_date:{required:"Please enter start date"},
        end_date:{required:"Please enter end date"}
      }
    });
   if($("#deadlineFrm").valid())
   {
     addOverlay();
     $("#deadlineFrm").submit();
   }
 });

  /*Reply message*/

  $(document).on("click","#sendReply",function(){
   $("#replyFrm").validate({
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
      reply:{required:true}
    },

    messages:
    {
      reply:{required:"Please enter message"}
    }
  });


   if($("#replyFrm").valid())
   {
     addOverlay();
     $("#replyFrm").submit();
   }
 });


  /*dedaline detail */

  $(document).on("click",".deadline_detail",function(){
    $("#deadlineDetail").modal("show");
    var id = $(this).attr("data-id");
    $(".deadline_detail_table").attr("id","table_"+id);
    $("#orderId").val(id);
    $.post(url,{"action":"deadline_detail","id":id},function(data){
      $("#table_"+id).html(data.content);
      if(data.btn=='')
      {
        if($(".footer_deadlineDetail").hasClass("hide"))
        {
          $(".footer_deadlineDetail").removeClass("hide");
        }
      }
      else
      {
        $(".footer_deadlineDetail").addClass("hide");
      }
   // (data.btn!='') ? $(".modal-footer").addClass(data.btn) : $(".modal-footer").removeClass("hide");
 },'json');
  });

  $(document).on("click",".start_service",function(){
    var id = $(this).attr("data-id"),$this = $(this);
    swal({
      title: "Confirmation!",
      text: "Are you sure you want to start service?",
      showCancelButton: true,
      closeOnConfirm: false,
      inputPlaceholder: "Write something"
    },
    function (inputValue) {
     /* */
     if(inputValue)
     {
      //addOverlay();
      $.post(url,{"action":"start_services","id":id},function(data){

      },'json');
      //removeOverlay();
        //swal("Nice!", "Service work time started");
        swal({
          title: "Nice!",
          text: "Your time for this service starts now!",
          type: "success",
          confirmButtonText: "Ok",
          closeOnConfirm: true
        });
        $this.hide();
        $(".give_deadline").hide();
      }
    });
    /**/
  });
</script>
</div>

@endsection