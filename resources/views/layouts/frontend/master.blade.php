<!DOCTYPE html>

<html lang="en">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="cache-control" content="no-cache">
<head>
  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-signin-client_id" content="663422181971-ctenbuo7ihctfqcmnti763o6lsu3ulrt.apps.googleusercontent.com">
<meta name="keywords" content="Services" /><meta name="description" content="Services - Sawlii, Services, Sawlii, Sawlii" /><meta name="author" content="sukhadaam" />
<title>@yield('title')</title>
<link rel="shortcut icon" type="image/ico" href="{{asset('frontend/img/13900843951558697422.PNG')}}">

  @if(App()->isLocale('ar'))
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <link href="{{asset('frontend/rtl/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/rtl/css/css.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/rtl/css/css1.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/rtl/css/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/rtl/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/rtl/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/rtl/css/toastr.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('frontend/rtl/css/jquery.raty.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/rtl/css/bootstrap_choosen.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/rtl/css/select2.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/rtl/css/bootstrap-select.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/rtl/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/rtl/css/jquery.mCustomScrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/rtl/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('frontend/rtl/css/owl.theme.default.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('frontend/rtl/css/alertify.core.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/rtl/css/alertify.default.css')}}" id="toggleCSS" />
    <link href="{{asset('frontend/rtl/css/style_rtl.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('frontend/rtl/css/temp_rtl.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('frontend/rtl/css/responsive_rtl.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/rtl/css/color.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('frontend/rtl/css/sweetalert.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('frontend/rtl/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/rtl/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/rtl/js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/rtl/js/tether.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/rtl/js/chosen.jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/rtl/js/select2.min.js')}}"></script>
    <script src="{{asset('frontend/rtl/js/jquery.validate.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/rtl/js/js.js')}}"> </script>
    <script src="{{asset('frontend/rtl/js/bootstrap-select.js')}}"></script>
    <script src="{{asset('frontend/rtl/js/chart.js')}}"></script>
    <script src="{{asset('frontend/rtl/js/utils.js')}}"></script>
    <script src="{{asset('frontend/rtl/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/rtl/js/custom.js')}}"></script>
    <script src="{{asset('frontend/rtl/js/new_custom.js')}}"></script>
    <script src="{{asset('frontend/rtl/js/moment.js')}}"></script>
    <script src="{{asset('frontend/rtl/js/accordion.js')}}"></script>
    <script src="{{asset('frontend/rtl/js/blog-sd.js')}}"></script>
    <script src="{{asset('frontend/rtl/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('/jquery.raty.js')}}"></script>
    <script src="{{asset('frontend/rtl/js/jquery.mCustomScrollbar.js')}}"></script>
    <script src="{{asset('frontend/rtl/js/sweetalert.min.js')}}"></script>
    <link href="{{asset('frontend/rtl/js/typeahead.css')}}" rel="stylesheet">
    <script src="{{asset('frontend/rtl/js/typeahead.jquery.min.js')}}"></script>
    <script src="{{asset('frontend/rtl/js/api.js')}}" async defer></script>
    <script src="{{asset('frontend/rtl/js/platform.js')}}" async defer></script>
    <script src="{{asset('frontend/rtl/js/api.js')}}"></script>
    <script src="{{asset('frontend/rtl/js/alertify.min.js')}}"></script>
    <script src="{{asset('frontend/rtl/js/additional-methods.min.js')}}"></script>
    @if(Route::is('home'))
    <link href="{{asset('frontend/css/new_style_home_rtl.css')}}" rel="stylesheet" type="text/css"/>	
    @else
    <link href="{{asset('frontend/css/new_style_rtl.css')}}" rel="stylesheet" type="text/css"/>	
    @endif
    <link href="{{asset('frontend/css/responsive_rtl.css')}}" rel="stylesheet">
    
  @else

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  
  <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- <link href="{{asset('frontend/css/bootstrap-select.css.map')}}" rel="stylesheet"> -->
  <link href="{{asset('frontend/css/css.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/css/css1.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/css/jquery-ui.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet"> -->
  <link href="{{asset('frontend/css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/css/toastr.min.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('frontend/css/jquery.raty.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/css/bootstrap_choosen.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/css/select2.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/css/bootstrap-select.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/css/jquery.mCustomScrollbar.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('frontend/css/owl.theme.default.css')}}" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="{{asset('frontend/css/alertify.core.css')}}" />
  <link rel="stylesheet" href="{{asset('frontend/css/alertify.default.css')}}" id="toggleCSS" />
  <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css"/>	
  @if(Route::is('/'))
  <link href="{{asset('frontend/css/new_style_home.css')}}" rel="stylesheet" type="text/css"/>	
  @else
  <link href="{{asset('frontend/css/new_style.css')}}" rel="stylesheet" type="text/css"/>	
  @endif
  <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/css/color.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('frontend/css/sweetalert.css')}}" rel="stylesheet">
  <script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/js/tether.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/js/chosen.jquery.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/js/select2.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.validate.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('frontend/js/js.js')}}"> </script>
  <script src="{{asset('frontend/js/bootstrap-select.js')}}"></script>
  <script src="{{asset('frontend/js/chart.js')}}"></script>
  <script src="{{asset('frontend/js/utils.js')}}"></script>
  <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/js/custom.js')}}"></script>
  <script src="{{asset('frontend/js/new_custom.js')}}"></script>
  <script src="{{asset('frontend/js/moment.js')}}"></script>
  <script src="{{asset('frontend/js/accordion.js')}}"></script>
  <script src="{{asset('frontend/js/blog-sd.js')}}"></script>
  <script src="{{asset('frontend/js/bootstrap-datetimepicker.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.raty.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.mCustomScrollbar.js')}}"></script>
  <script src="{{asset('frontend/js/sweetalert.min.js')}}"></script>
  <script src="{{asset('frontend/js/typeahead.jquery.min.js')}}"></script>
  <script src="{{asset('frontend/js/api_client.js')}}" async defer></script>
  <script src="{{asset('frontend/js/platform.js')}}" async defer></script>
  <script src="{{asset('frontend/js/api.js')}}"></script>
  <script src="{{asset('frontend/js/alertify.min.js')}}"></script>
  <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend/js/additional-methods.min.js')}}"></script>
  
  @endif
  
<script type="text/javascript">
	var icontent = ['email','mail','payment','contact'];
	var site_url = "http://www.sukhadaam.com/demo/sawlii/";
</script>
  <style type="text/css">
  #overlayDocument {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('{{("frontend/img/ajax-modal-loading.gif")}}') 50% 50% no-repeat rgb(249,249,249);
    background-size: 60px 60px;
    opacity: .8;
  }

  #overlayModel {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('{{("frontend/img/ajax-modal-loading.gif")}}') 50% 50% no-repeat rgb(249,249,249);
    background-size: 60px 60px;
    opacity: .8;
  }
</style>
</head>
@if(!Auth::user())
  @if(Route::is('/'))
  <body class='homepage homepage_class'>
  @else
  <body class='homepage '>
  @endif
@else
  @if(Auth::user()->type == 'C')
    @if(Route::is('/'))
    <body class='homepage user_customer customer_home'>
    @else
    <body class='homepage user_customer'>
    @endif
  @else
    @if(Route::is('/'))
    <body class='homepage homepage_class'>
    @else
    <body class='homepage '>
    @endif
  @endif
@endif
        <!-- <div class="hidden-header"></div> -->
        <!-- Start Header -->
        @include('layouts.frontend.header')
        <!-- End Header -->

        <!-- Start Content -->
        @yield('content')
        <!-- End Content -->

        <!-- Start Footer -->
        @include('layouts.frontend.footer')
        <!-- End Footer -->

        <div class="modal fade" id="userTypeSelectionModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <form name="userTypesetForm" id="userTypesetForm" method="post" action="http://www.sukhadaam.com/demo/sawlii/userTypeSubmit">
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">First, tell us what you're looking for.</h4>
                    </div>
                    <div class="modal-body">
                    <div class="form-group">
                        <select name="userTypeS" id="userTypeS" class="form-control">
                        <option value="">Select User Type</option>
                        <option value="C">Hire</option>
                        <option value="F">Work</option>
                        </select>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" name="userTypesetbtn" id="userTypesetbtn" class="btn btn-primary">Submit</button>
                    <button type="button" name="loginCancel" id="loginCancel" class="btn btn-info">Sign in Cancel</button>
                    </div>
                </div>
                </form>
            </div>
        </div>


<!-- End Registration modal -->
<script src="{{asset('frontend/js/bootstrap-datepicker.js')}}"></script>

<script>
  $(document).ready(function(){

    jQuery.validator.addMethod("noSpace", function(value, element) {
      return value.indexOf(" ") < 0 && value != "";
    }, "Space is not allowed and don't leave it empty");

    $(document).on('click', '#submitAdd', function (e) {

      e.preventDefault();

      $changefrm="#changefrm";
      $($changefrm).validate({

        ignore: [],
        errorClass: 'help-block',
        errorElement: 'label',
        highlight: function (element) {
          $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function (element) {
          $(element).closest('.form-group').removeClass('has-error');
        },
        rules:
        {
          password1:{noSpace: true,required:true,minlength:6,maxlength:12},
          cPassword:{equalTo: "#password1",required:true}
        },

        messages:
        {
          password1:{noSpace:"Please enter password",required:"Please enter password",minlength:"New password length should be greater than or equal to 6 characters",maxlength:"New Password length should be less than or equal to 12 characters"},
          cPassword:{required:"Please enter confirm password",equalTo:"&nbsp;Password doesn't match"}
        },
        errorPlacement: function (error, element) {
          if (element.attr("data-error-container")) {
            error.appendTo(element.attr("data-error-container"));
          } else {
            error.insertAfter(element);
          }
        }
      });

      if($("#changefrm").valid())
      {
        $("#changefrm").submit();
      }

    });

    $(document).on('click', '#userTypesetbtn', function (e) {

      e.preventDefault();

      $userTypesetForm="#userTypesetForm";
      $($userTypesetForm).validate({

        ignore: [],
        errorClass: 'help-block',
        errorElement: 'label',
        highlight: function (element) {
          $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function (element) {
          $(element).closest('.form-group').removeClass('has-error');
        },
        rules:
        {
          userTypeS:{required:true},
        },

        messages:
        {
          userTypeS:{required:"Please select user type"},
        },
        errorPlacement: function (error, element)
        {
          if (element.attr("data-error-container")) {
            error.appendTo(element.attr("data-error-container"));
          } else {
            error.insertAfter(element);
          }
        }
      });

      if($("#userTypesetForm").valid())
      {
        $("#userTypesetForm").submit();
      }

    });

    $(document).on("click","#loginCancel",function(){
      $.post("http://www.sukhadaam.com/demo/sawlii/units-sd/home-sd/ajax.home-sd.php",{"action":"cancelLogin"},function(){
        window.location.href="http://www.sukhadaam.com/demo/sawlii/";
      });
    });


  });

</script>

<script type="text/javascript" src="{{asset('frontend/js/ckeditor.js')}}"></script>

<script type="text/javascript">
  function loadCKE(id) {
    var instance = CKEDITOR.instances[id];
    if (instance) {
      CKEDITOR.remove(instance);
    }
    CKEDITOR.replace(id,{
      filebrowserUploadUrl: 'http://www.sukhadaam.com/demo/sawlii/requires-sd/upload.php',
      toolbar : 'MyToolbar'
    });
  }
</script>

<script>
  window.fbAsyncInit = function() {
    // FB JavaScript SDK configuration and setup

    FB.init({
      appId      : '1589285127814293',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.11'
    });
    FB.AppEvents.logPageView();

  };

// Load the JavaScript SDK asynchronously
(function(d, s, id)
{
 var js, fjs = d.getElementsByTagName(s)[0];
 if (d.getElementById(id)) {return;}
 js = d.createElement(s); js.id = id;
 js.src = "http://connect.facebook.net/en_US/sdk.js";
 fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// Facebook login with JavaScript SDK




</script>
<!-- Facebook login start -->
<script>
  function facebookLogin(userType) {

    FB.login(function (response) {
      if (response.authResponse) {
            // Get and display the user profile data

            FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture'},
              function (response) {
                var email =  (response.email==undefined) ? '0' : response.email;

                addOverlay();
                $.ajax({
                  "dataType": 'json',
                  "type" : "POST",
                  "url"  : "http://www.sukhadaam.com/demo/sawlii/ajaxSignup",
                  "data" : {"action":"facebook-record","fid":response.id,"firstName":response.first_name,"lastName":response.last_name,"email":email,"loginWith": 'Facebook',"userType":userType},
                  "success": function(data)
                  {
                    removeOverlay();
                    if(data.userType=='' && data.userTypeCheck=='n')
                    {
                      $("#userTypeSelectionModal").modal("show");
                    }
                    else
                    {
                      toastr[data.type](data.messages);
                      window.location.href = data.url;
                    }

                  }
                });
              });
          }
        }, {scope: 'email'});
  }
/*if (grecaptcha.getResponse() == ""){
    alert("You can't proceed!");
} else {
    alert("Thank you");
  }*/

</script>
<!-- facebook login end -->
<!-- Google login start -->
<script type="text/javascript">

  $(document).ready(function(){
    function renderButton() {

      var userType = $('.customGPlusSignIn').attr("data-user-type");
        //console.log(userType);

        $('.customGPlusSignIn').each(function(index, el) {
          var id = $(el).attr('id');
            //console.log(id);
            gapi.load('auth2', function(){
                // Retrieve the singleton for the GoogleAuth library and set up the client.
                auth2 = gapi.auth2.init({
                  client_id: '663422181971-ctenbuo7ihctfqcmnti763o6lsu3ulrt.apps.googleusercontent.com',
                  cookiepolicy: 'single_host_origin',
                  scope: 'profile email'
                });
                google_on_success(document.getElementById(id),userType);
              });
          });
      }
      renderButton();
      function google_on_success(element,userType)
      {
        auth2.attachClickHandler(element, {}, function(googleUser) {
          var profile = googleUser.getBasicProfile();
          var name = profile.getName();
          var first_name = name.substring(0, name.indexOf(' ')),
          last_name = name.substring(name.indexOf(' ')+1);

          var data = {
            first_name: first_name,
            last_name: last_name,
            email: profile.getEmail(),
            gender: '',
            image: profile.getImageUrl(),
            userType:userType
          };
            // addOverlay();
            addOverlay();

            $.ajax({
              url: 'http://www.sukhadaam.com/demo/sawlii/login-gp',
              type: 'POST',
              dataType: 'json',
              data: data,
            })
            .done(function(data) {

              if(data.userType=='' && data.userTypeCheck=='n')
              {
                $("#userTypeSelectionModal").modal("show");
              }
              else
              {
                toastr[data.type](data.messages);
                window.location.href = data.url;
              }
            })
            .always(function() {
             $("#overlayDocument").hide();
                // removeOverlay();
              });
          }, function(error) {
            // alert(JSON.stringify(error, undefined, 2));
          });
      }
    });
  </script>
  <!-- Google login end -->

  <!-- Home page script -->
  <script>
    $(document).on('click',"#newsletterSubscriber",function (e){
      e.preventDefault();
      /*Check Url With http or without http*/
      $.validator.addMethod('ChkUrl', function (value, element) {
        return this.optional(element) || /^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/g.test(value);
      }, 'This URL is invalid'
      );

      $("#newsletterFrm").validate({
        ignore: [],
        errorClass: 'help-block',
        errorElement: 'label',
        highlight: function (element) {
          $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function (element) {
          $(element).closest('.form-group').removeClass('has-error');
        },
        errorPlacement: function (error, element) {
          if (element.attr("data-error-container")) {
            error.appendTo(element.attr("data-error-container"));
          } else {
            error.insertAfter(element);
          }
        },
        rules: {
          email: { required : true,email:true}
        },
        messages: {
          email: { required: "Please enter email address",email:"Please enter valid email"},
        }
      });
      if($("#newsletterFrm").valid())
      {
        $("#newsletterFrm").submit();
      }
    });

    $('.search-panel .dropdown-menu').find('a').click(function(e) {
      e.preventDefault();
      var param = $(this).attr("href").replace("#","");
      var concept = $(this).text();
      $('.search-panel span#search_concept').text(concept);
      $('.input-group #search_param').val(param);
    });

    /*==tooltip==*/
    $('[data-toggle="tooltip"]').tooltip();

    $("#search_type").change(function(){
      /*$(this).parents(".dropdown.fix-width").find('.btn').html($(this).text() + ' <span class="angle-down"><i class="fa fa-caret-down"></i></span>');
      $(this).parents(".dropdown.fix-width").find('.btn').val($(this).data('value'));*/
      $(".topSearch").attr("data-url",$(this).val());
      $("#searchKeyword").attr("Placeholder","Find "+$(this).val());
    });

    $(document).on("keypress","#searchKeyword",function(e){
      var charCode = (typeof e.which == "undefined") ? e.keyCode : e.which;
      if (charCode == 13){
        setTimeout(function(){
          $(".topSearch").trigger("click");
        }, 200);
        return false;
      }
    });

    $(document).on("click",".topSearch",function(){
      var slug = $("#search_type").val(),
      field = $(this).attr("id"),
      keyword = (field=='full') ? $("#searchKeyword").val() : $("#MsearchKeyword").val(),category=$("#category").val(),subcategory=$("#subcategory").val(),location=$("#search_location").val(),url=$params="";
      var user_rype = $(".search_user_type").val();
      var param = [];
      if(keyword!='' && keyword!=undefined){
        param.push("keyword="+keyword); 
      }
      if(location!='' && location!=undefined){
        param.push("location="+location); 
      }
      if(category!='' && category!=undefined){
        param.push("category="+category); 
      }
      if(subcategory!='' && subcategory!=undefined){
        param.push("subcategory="+subcategory); 
      }
      if(param.length > 0){
        $.each(param,function(key,val){
          var sign = "&";
          if(key==0){
            sign="?";
          }
          $params += sign+val;
        });
      }

      if(slug == 'Jobs')
      {
        url = "http://www.sukhadaam.com/demo/sawlii/search/"+"jobs/"+$params;
      }
      else if(slug == 'Services')
      {
        url = "http://www.sukhadaam.com/demo/sawlii/search/"+"service/"+$params;
      }
      else
      {
        if(user_rype=="Freelancer"){
          url = "http://www.sukhadaam.com/demo/sawlii/search/"+"jobs/";
        }else{
          url = "http://www.sukhadaam.com/demo/sawlii/search/"+"freelancer/";          
        }
      }
      window.location.href = url;
    });

    $(document).on("click",".topMSearch",function(){

      var slug = $(this).attr("data-url"),field = $(this).attr("id"),
      keyword = (field=='full') ? $("#searchKeyword").val() : $("#MsearchKeyword").val(),url;

      if(slug == 'Jobs')
      {
        url = (keyword=='') ? "http://www.sukhadaam.com/demo/sawlii/search/"+"jobs/" : "http://www.sukhadaam.com/demo/sawlii/search/"+"jobs/"+"?keyword="+keyword;
      }
      else if(slug == 'Services')
      {
        url = (keyword=='') ? "http://www.sukhadaam.com/demo/sawlii/search/"+"service/" : "http://www.sukhadaam.com/demo/sawlii/search/"+"service/"+"?keyword="+keyword;
      }
      else
      {
        url = (keyword=='') ? "http://www.sukhadaam.com/demo/sawlii/search/"+"freelancer/" : "http://www.sukhadaam.com/demo/sawlii/search/"+"freelancer/"+"?keyword="+keyword;
      }
      window.location.href = url;

    });



    $(document).ready(function(e){

      scaleVideoContainer();

      initBannerVideoSize('.video-container .poster img');
      initBannerVideoSize('.video-container .filter');
      initBannerVideoSize('.video-container video');

      $(window).on('resize', function() {
        scaleVideoContainer();
        scaleBannerVideoSize('.video-container .poster img');
        scaleBannerVideoSize('.video-container .filter');
        scaleBannerVideoSize('.video-container video');
      });

      $('.search-panel .dropdown-menu').find('a').click(function(e) {
        e.preventDefault();
        var param = $(this).attr("href").replace("#","");
        var concept = $(this).text();
        $('.search-panel span#search_concept').text(concept);
        $('.input-group #search_param').val(param);
      });
    });

    function scaleVideoContainer() {

      var height = $(window).height() + 5;
      var unitHeight = parseInt(height) + 'px';

      if ( $(window).width() > 767 ) {
        $('.homepage-hero-module').css('height','600px');
      }
      else{
        $('.homepage-hero-module').css('height','440px');
      }

    }

    function initBannerVideoSize(element){

      $(element).each(function(){
        $(this).data('height', $(this).height());
        // $(this).data('width', $(this).width());
      });

      scaleBannerVideoSize(element);

    }

    function scaleBannerVideoSize(element){


      var windowWidth;
      var windowHeight = $(window).height() + 5,
      videoHeight;


      $(element).each(function(){
        var videoAspectRatio = $(this).data('height')/$(this).data('width');

        $(this).width(windowWidth);

        if(windowWidth < 1000){
          videoHeight = windowHeight;
          videoWidth = videoHeight / videoAspectRatio;
          $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});

          $(this).width(videoWidth).height(videoHeight);
        }

        $('.homepage-hero-module .video-container video').addClass('fadeIn animated');

      });
    }


    (function( $ ) {

        //Function to animate slider captions
        function doAnimations( elems ) {

            //Cache the animationend event in a variable
            var animEndEv = 'webkitAnimationEnd animationend';

            elems.each(function () {
              var $this = $(this),
              $animationType = $this.data('animation');
              $this.addClass($animationType).one(animEndEv, function () {
                $this.removeClass($animationType);
              });
            });
          }

        //Variables on page load
        var $myCarousel = $('#carousel-example-generic'),
        $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

        //Initialize carousel
        $myCarousel.carousel();

        //Animate captions in first slide on page load
        doAnimations($firstAnimatingElems);

        //Pause carousel
        $myCarousel.carousel('pause');


        //Other slides to be animated on carousel slide event
        $myCarousel.on('slide.bs.carousel', function (e) {
          var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
          doAnimations($animatingElems);
        });
        $('#carousel-example-generic').carousel({
          interval:3000,
          pause: "false"
        });

      })(jQuery);

      $('.load_ggl_autocomplete').each(function(){

        var _this = $(this)[0];
        return new google.maps.places.Autocomplete(_this, {types: ["geocode"]});

      });

      $(document).on('change','.change_language',function(e){
        $url = window.location.href;
        $.ajax({
          "type" : "POST",
          "url"  : "http://www.sukhadaam.com/demo/sawlii/app-sd/units-sd/home-sd/ajax.home-sd.php",
          "data" : {"action":"change_language","id":$(this).val()},
          success: function(data)
          {
            removeOverlay();
            if($url!=""){
              window.location.href = $url;
            }else{
              window.location.href = "http://www.sukhadaam.com/demo/sawlii/";
            }
          }
        });
      });
    </script>
    <!-- end -->


<script type="text/javascript" src="{{asset('frontend/js/toastr.min.js')}}"></script>
<script type="text/javascript">
  toastr.options = {
    "closeButton": true,
    "debug": false,
      //"positionClass": "toast-top-full-width",
      "positionClass": "toast-top-right",
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }

    function initilizeRaty(control_name, score) {
      $(control_name).raty({
        scoreName: 'star_ratings',
        score: score,
        readOnly: true,
        half: true,
        starHalf: 'http://www.sukhadaam.com/demo/sawlii/requires-sd/javascript-sd/plugins-sd/raty/images/star-half.png',
        starOff: 'http://www.sukhadaam.com/demo/sawlii/requires-sd/javascript-sd/plugins-sd/raty/images/star-off.png',
        starOn: 'http://www.sukhadaam.com/demo/sawlii/requires-sd/javascript-sd/plugins-sd/raty/images/star-on.png',
        hints: ['Bad', 'Poor', 'Regular', 'Good', 'Excellent']
      });
    }
    function addOverlay() {
      $('<div id="overlayDocument"></div>').appendTo(document.body);
    }
    function removeOverlay() {
      $('#overlayDocument').remove();
    }

    function processing() {
      $('<div id="overlayModel"></div>').appendTo(document.body);
    }

    function removeProcessing() {
      $('#overlayModel').remove();
    }

    function chkIsLogin (objThis){
      var attrTarget=objThis.data('target');
      if(attrTarget=='#loginModal'){
        $(".loading").removeClass('hide');
        $(".loading").show();
        setTimeout(function() { $(".loading").hide(); }, 5000);
      }
    }
    function loadCKE(id) {
      var instance = CKEDITOR.instances[id];
      if (instance) {
        CKEDITOR.remove(instance);
      }
      CKEDITOR.replace(id,{
        filebrowserUploadUrl: 'http://www.sukhadaam.com/demo/sawlii/requires-sd/upload.php',
        toolbar : 'MyToolbar'
      });
    }

    $(document).ready(function(){
      var userType = "n";
      if(userType=='y')
      {
        $("#userTypeSelectionModal").modal("show");
      }

      


    });

    $(document).on('click','.view_noti a',function(e){
      e.preventDefault();

        var id= $(this).attr('data-id');
        var link = $(this).attr('href');
        $.ajax({
          type: "POST",
          url: 'http://www.sukhadaam.com/demo/sawlii/units-sd/notification-sd/ajax.notification-sd.php',
          data: {'action':'view','id':id},
          success: function(resultData){
              if(link != ''){
                window.location.href = link;
              }
          } ,
          dataType: 'json'
        });  

      });

      $(document).on("click",".delete_notification",function(){      
        var id = $(this).attr("data-id");
        $.ajax({
          type: "POST",
          url: 'http://www.sukhadaam.com/demo/sawlii/units-sd/notification-sd/ajax.notification-sd.php',
          data: {'action':'delete','id':id},
          success: function(resultData){
            if(resultData=='true'){            
              $("#notification_"+id).hide();
            }           
          } ,
          dataType: 'json'
        });  
      });
      setInterval(getNotification, 10000);   

      function getNotification(){
          $.ajax({
              url:'http://www.sukhadaam.com/demo/sawlii/units-sd/notification-sd/ajax.notification-sd.php',
              type: "POST",
              data: {'action':'loadNotifications'},
              success: function(resultData){
                  if(resultData!=""){
                      $("#user_notification_list").html(resultData);
                  }
              }
          });       
      }

    </script>
    
  </body>
</html>
<!-- <script>
  $(document).ready(function() {
        window.history.pushState(null, "", window.location.href);
        window.onpopstate = function() {
            window.history.pushState(null, "", window.location.href);
        };
    });
</script>

 -->
