@extends('layouts.frontend.master')
@section('title')
    Profile
@endsection
@section('content')

<script>
    $("header .navbar-default .navbar-nav>li.notification .dropdown-menu").mCustomScrollbar();       
</script>
<!-- Your share button code -->
<div id="main-content">
  <!-- Dashboard Navigation -->
<section class="dashboard-navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- sidenav mobile view -->
                <div class="tablet-view">
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn">&times;</a>
                        <ul class="dashboard-navbar">
                            <li class="active">
                                <a href="{{route('profile_job',$lang)}}">Dashboard</a>
                            </li>
                            <li  class="">
                                <a href="http://www.sukhadaam.com/demo/sawlii/c/my-jobs">My Jobs</a>
                            </li>
                            <li  class="">
                                <a href="http://www.sukhadaam.com/demo/sawlii/c/review">My Reviews</a>
                            </li>
                            <li  class="">
                                <a href="http://www.sukhadaam.com/demo/sawlii/c/financial-dashboard">Financial Dashboard</a>
                            </li>
                            <li  class="">
                                <a href="http://www.sukhadaam.com/demo/sawlii/c/service-order">Service Orders</a>
                            </li>
                            <li  class="">
                                <a href="http://www.sukhadaam.com/demo/sawlii/c/saved-freelancer">Saved Freelancers</a>
                            </li>
                            <li  class="">
                                <a href="http://www.sukhadaam.com/demo/sawlii/c/favorite-services">Favourite Services</a>
                            </li>
                        </ul>
                    </div>
                    <div class="dashboard-btn">
                        <a href="javascript:void(0)" id="dashboardMenu" class="btn btn-bar btn-primary">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <h4>Dashboard</h4>
                    </div>
                </div>
                <!-- sidenav mobile view --> 

                <ul class="dashboard-navbar tablet-hide">
                    <li class="active">
                        <a href="{{route('profile_job',$lang)}}">Dashboard</a>
                    </li>
                    <li class="">
                        <a href="http://www.sukhadaam.com/demo/sawlii/c/my-jobs">Posted Jobs</a>
                    </li>
                    <li class="">
                        <a href="http://www.sukhadaam.com/demo/sawlii/c/review">My Reviews</a>
                    </li>
                    <li class="">
                        <a href="http://www.sukhadaam.com/demo/sawlii/c/financial-dashboard">Financial Dashboard</a>
                    </li>
                    <li class="">
                        <a href="http://www.sukhadaam.com/demo/sawlii/c/service-order">Service Orders</a>
                    </li>
                    <li class="">
                        <a href="http://www.sukhadaam.com/demo/sawlii/c/saved-freelancer">Saved Freelancers</a>
                    </li>
                    <li class="">
                        <a href="http://www.sukhadaam.com/demo/sawlii/c/favorite-services">Favourite Services</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Dashboard Navigation End -->
<!-- Page Content -->
<section class="main-dashboard">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-wrap">
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
                                                            <img src="{{asset('frontend/img/no_user_image.png')}}" class="preview_profile">
                                                        </div>
                                                        <span class="update-camera hide">
                                                            <a href="javascript:void(0)" id="profile_image_trigger" title="Update Profile Picture"><i class="fa fa-camera"></i></a>
                                                        </span>    
                                                    </div>
                                                    <div class="switch-wrap  hide">
                                                        <a class="switch-btn btn-flr " href="javascript:void(0)">Freelancer</a>
                                                        <a class="switch-btn btn-ctm active" href="#">Customer</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-details-wrap customer-user">
                                                    <div class="personal-details-wrap">
                                                        <div class="user-title-wrap">
                                                            <h3 class="user-name">Vishal Patel</h3>
                                                            <div class="star-ratings-sprite">
                                                                <span style="width:100%" class="star-ratings-sprite-rating"></span>
                                                            </div>
                                                            <ul class="user-since-detail liststyle-none">
                                                                <li>member since Mar, 2019</li>
                                                                <li>Last Login 2 months ago</li>
                                                            </ul>
                                                            <div class="hide">
                                                                <a href="#" class="edit_button user-profile-edit">Edit <i class="fa fa-edit"></i></a>
                                                            </div>
                                                            <div class="cust-user-location"><span><i class="fa fa-map-marker"></i></span>Rajkot, Gujarat, India</div>
                                                            <div class="cust-user-desc">-</div>
                                                        </div>
                                                        <ul class="cust-user-rating-lists liststyle-none">
                                                            <li>
                                                                <div class="star-ratings-sprite">
                                                                    <span style="width:80%" class="star-ratings-sprite-rating"></span>
                                                                </div><span>Requirement Clarification</span>
                                                            </li>
                                                            <li>
                                                                <div class="star-ratings-sprite">
                                                                    <span style="width:100%" class="star-ratings-sprite-rating"></span>
                                                                </div><span>On Time Payment</span>
                                                            </li>
                                                            <li>
                                                                <div class="star-ratings-sprite">
                                                                    <span style="width:80%" class="star-ratings-sprite-rating"></span>
                                                                </div><span>On Time Response</span>
                                                            </li>
                                                            <li>
                                                                <div class="star-ratings-sprite">
                                                                    <span style="width:80%" class="star-ratings-sprite-rating"></span>
                                                                </div><span>Communication</span>
                                                            </li>
                                                            <li class="cur-more hide"><a href="{{route('/',$lang)}}">View More <i class="fa fa-angle-double-right"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="work-detail-wrap">
                                                        <ul class="work-detail-total liststyle-none">
                                                            <li>Job Posted : <span>13</span></li>
                                                            <li>Open Jobs : <span>13</span></li>
                                                            <li>Total Expenditure : <span class="kwdamount">222<span>$</span></span></li>
                                                            <li>Amount In Wallet : <span class="kwdamount">3025<span>$</span></span></li>
                                                        </ul>
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
    </div>
</section>


<!-- /.container -->

<script type="text/javascript">
  $(document).ready(function(){

    $(document).on('focus','#location',function(){
      var places = document.getElementById('location');
      var option = {};
      autocomplete= new google.maps.places.Autocomplete(places,option);
    });

    $(".profile-after-edit").hide();
    $(".edit_button").click(function(){
      $(".profile-before-edit").hide();
      $(".profile-after-edit").show();
    });

    $(".save").click(function(){
      $(".profile-after-edit").hide();
      $(".profile-before-edit").show();
    });

    jQuery.validator.addMethod("startingSpaceNotAllow", function(value, element)
    {
      return this.optional(element) || /^\S.*$/.test(value);
    }, "Space is not allowed");

    jQuery.validator.addMethod("spaceNotAllow", function(value, element)
    {
      return this.optional(element) || /^\S*$/.test(value);
    }, "Space is not allowed");

    jQuery.validator.addMethod("alphanumeric", function(value, element)
    {
      return this.optional(element) || /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/.test(value);
    }, "Please enter letters only");

    $(document).on('click', '#subminFrmCust', function (e) {

      $("#frmCustomer").validate({
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
          firstName:{required:true,minlength:2,alphanumeric:true},
          lastName:{required:true,minlength:2,alphanumeric:true},
          location:{required:true,startingSpaceNotAllow:true},
          aboutme : {required:true}
        },
        messages:
        {
          firstName:{required:"Please enter first name", minlength:"Please enter at least 2 characters",alphanumeric:"Please enter valid first name"},
          lastName:{required:"Please enter last name", minlength:"Please enter at least 2 characters",alphanumeric:"Please enter valid last name"},
          location:{ required:"Please enter location"},
          aboutme: { required:"Please enter overview"}
        }
      });

      if($("#subminFrmCust").valid())
      {
                  //addOverlay();
                  $("#subminFrmCust").submit();
                }
              });

    /* code for star ratings */
    $('#starRatings').raty({
      readOnly: true,
      score: 100,
      starOff: 'http://www.sukhadaam.com/demo/sawlii/frames-sd/images-sd/star-off.png',
      starOn: 'http://www.sukhadaam.com/demo/sawlii/frames-sd/images-sd/star-on.png',
    });

    $('#reqClarification').raty({
      readOnly: true,
      score: 80,
      starOff: 'http://www.sukhadaam.com/demo/sawlii/frames-sd/images-sd/star-off.png',
      starOn: 'http://www.sukhadaam.com/demo/sawlii/frames-sd/images-sd/star-on.png',
    });

    $('#onTimePymt').raty({
      readOnly: true,
      score: 100,
      starOff: 'http://www.sukhadaam.com/demo/sawlii/frames-sd/images-sd/star-off.png',
      starOn: 'http://www.sukhadaam.com/demo/sawlii/frames-sd/images-sd/star-on.png',
    });

    $('#onTimeRes').raty({
      readOnly: true,
      score: 80,
      starOff: 'http://www.sukhadaam.com/demo/sawlii/frames-sd/images-sd/star-off.png',
      starOn: 'http://www.sukhadaam.com/demo/sawlii/frames-sd/images-sd/star-on.png',
    });

    $('#comm').raty({
      readOnly: true,
      score: 80,
      starOff: 'http://www.sukhadaam.com/demo/sawlii/frames-sd/images-sd/star-off.png',
      starOn: 'http://www.sukhadaam.com/demo/sawlii/frames-sd/images-sd/star-on.png',
    });

    /* End code */

  });

  /*$(document).on("change","#profile_image",function(){

    var value = $(this).val();
    var allowedFiles = ["jpg", "jpeg", "png"];
    var extension = value.split('.').pop().toLowerCase();
    if ($.inArray(extension, allowedFiles) < 0)
    {
      toastr['warning']("Please upload only .jpg,.jpeg,.png files");
    }
    else if (this.files[0].size > 4194304)
    {
      toastr['warning']("Image size must be less then 4MB");
    }
    else
    {
      var file_data = $(this).prop("files")[0];
      var form_data = new FormData();
      form_data.append("file", file_data)
      form_data.append("action", "move_image")
      $.ajax({
        url: "http://www.sukhadaam.com/demo/sawlii/AjaxFprofile",
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        dataType: 'json',
        beforeSend: function() {
          addOverlay();
        },
        success:function(data)
        {
          var url = data.content;
          $('.preview_profile').attr('src',url);
        },
        complete: function()
        {
          removeOverlay();
        }
      });
    }
  });*/

  $(document).ready(function(){
    var aboutme_len = $("#aboutme").val().length;
    var allowed_len = 100;
    var curr_len = allowed_len - aboutme_len;
    $(".char_cnt").html("<strong>"+curr_len+"</strong>");

    $('#aboutme').bind('input',function() {
      var $t=$(this);
      var max= 100;
      if ($t.val().length>max) {
        $t.val($t.val().substr(0,max));
      }
      var aboutme_len = $("#aboutme").val().length;
      var allowed_len = 100;
      var curr_len = allowed_len - aboutme_len;
      $(".char_cnt").html("<strong>"+curr_len+"</strong>");
    });

    $(document).on("keypress","#aboutme",function(e){

      var aboutme_len = $("#aboutme").val().length;
      var allowed_len = 100;
      var curr_len = allowed_len - aboutme_len;
      if(curr_len<0){
        return false;
      }
      $(".char_cnt").html("<strong>"+curr_len+"</strong>");
      return true;
    });

  });
  function crop_image_file_upload(){
    //if($('#avatarInput').files)
    var inp = document.getElementById('avatarInput');
    if(inp.files.length == 0){
      alert('Please select atleast one file');
      return false;
    }
    addOverlay();
    var $avatarForm = $('.avatar-form');
    var url = $avatarForm.attr('action');
    var data = new FormData($avatarForm[0]);

    $.ajax(url, {
      type: 'post',
      data: data,
      dataType: 'json',
      processData: false,
      contentType: false,

      beforeSend: function () {
        console.log('before send');
      },

      success: function (data) {

        if(data.state == 200){
          var img = data.result.replace('/home/sukhadaam/public_html/demo/sawlii/app-sd/dspaces-sd/profile/','http://www.sukhadaam.com/demo/sawlii/dspaces-sd/profile/');
          $('.preview_profile').attr('src',img);
          $('#avatar-modal').modal('hide');
          $('#remove_profile_image').css('display','block');
          removeOverlay();
        }else{
          alert('Something went wrong');
          removeOverlay();
        }
      },

      error: function (XMLHttpRequest, textStatus, errorThrown) {
        console.log('error');
        removeOverlay();
      },

      complete: function () {
        console.log('complete');
        removeOverlay();
      }
    });
  }
  $(document).on("click","#profile_image_trigger",function(e){
    e.preventDefault();
    $("#avatar-modal").modal('show');
  });
  $(document).on("click",".avatar-cancel",function(e){
    e.preventDefault();
    $("#avatar-modal").modal('hide');
  });
  $(document).on('click','#remove_profile_image',function(e){
    e.preventDefault();
    if(confirm("Are you sure you want to remove profile image?")){
      var form_data = new FormData();
      form_data.append("action", "remove_profile_image");
      $.ajax({
        url: "http://www.sukhadaam.com/demo/sawlii/AjaxFprofile",
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        dataType: 'json',
        success:function(data)
        {
          console.log(data);
          var url = data.url;
          $('#remove_profile_image').css('display','none');
          $('.preview_profile').attr('src',url);
        }
      });
    }
  });
</script>
