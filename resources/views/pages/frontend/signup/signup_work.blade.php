@extends('layouts.frontend.master')
@section('title')
    Sign Up Work
@endsection
@section('content')

<!-- Your share button code -->
<div id="main-content">
  <section class="inner-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="sign-form">
                    <div class="theme-form">
                        <div class="sign_up_main">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="sign_up_header">
                                        <h3>
                                            Sign Up
                                        </h3>
                                    </div>
                                    <div class="sign_up_form">
                                        <div class="sign_social">
                                            <a href="javascript:void(0)" onclick="facebookLogin('Hire')" class="social-facebook" title="Facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="javascript:void(0)" id="login_google2" class="customGPlusSignIn social-google" data-user-type="Hire" title="Google">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </div>
                                        <form class="form" method="post" action = "http://www.sukhadaam.com/demo/sawlii/units-sd/signup-sd/index.php" name="signUpFrm" id="signUpFrm">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-12 right">
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" name="firstName" id="firstName" placeholder="First Name"/>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12 left">
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" name="lastName" id="lastName" placeholder="Last Name"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control location" name="location" id="location" placeholder="Location"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="userName" id="userName" placeholder="Username"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="email" id="email" placeholder="Email"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="cpwd" id="cpwd" placeholder="Confirm Password"/>
                                            </div>
                                           
                                            <div class="row">
                                               <!--  <div class="col-md-12">
                                                    <div id="RecaptchaField1" class="g-recaptcha">
                                                    </div>
                                                </div>  -->
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="g-recaptcha" data-sitekey="6LdpKaEUAAAAADPUbqo8M7CHk6eLeYBzogMg9kPs"></div>
                                                    <div class="form-group">
                                                         <input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha">
                                                    </div>
                                                </div>
                                                <input type="hidden" name="userType" id="userType" value="Hire">
                                            </div>
                                            <label class="signin-check">Subscribe for Newsletter
                                                <input type="checkbox" name="subscribe" id="term3">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="signin-check">I agree to all <a href="{{route('terms_and_conditions',$lang)}}">Terms & Conditions</a> and <a href="{{route('privacy_policy',$lang)}}">Privacy Policy</a>.
                                                <input type="checkbox" name="terms" id="term4" class="ipAgree">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="lbl_agree_error"></label>
                                            <div class="get_started">
                                                <button type="submit" name="submitAddData" id="submitAddData" class="btn btn-block btn-system">Get Started</button>
                                                <input type="hidden" name="action" id="action" value="submitAddForm">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="signin-mockup">
                                        <img src="{{asset('frontend/img/signin.png')}}" alt="">
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
<script type="text/javascript">
$(document).ready(function(){


    $(document).on('focus','#location',function(){
        var places = document.getElementById('location');
        var option = {};
        autocomplete= new google.maps.places.Autocomplete(places,option);
    });

    jQuery.validator.addMethod("alphanumeric", function(value, element)
    {
            return this.optional(element) || /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/.test(value);
    }, "Only letters are allowed");


    jQuery.validator.addMethod("properNumber", function(value, element, param) {
                    var reg = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
                       return reg.test(value);
                }, "Please enter a valid email address");

    jQuery.validator.addMethod("spaceNotAllow", function(value, element)
    {
        return this.optional(element) || /^\S*$/.test(value);
    }, "Space is not allowed");

    jQuery.validator.addMethod("startingSpaceNotAllow", function(value, element)
    {
        return this.optional(element) || /^\S.*$/.test(value);
    }, "Space is not allowed");

     $(document).on('click', '#submitAddData', function (e) {

        $("#signUpFrm").validate({
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
                userName:{required:true,minlength:2,
                    normalizer: function(value) {
                        value = value.replace("something", "new thing");
                        return $.trim(value);
                      },remote: 'http://www.sukhadaam.com/demo/sawlii/units-sd/signup-sd/ajax.signup-sd.php'
                },
                /*captcha:{required:true,maxlength:5},*/
                email:{required:true,email:true,properNumber:true,remote: 'http://www.sukhadaam.com/demo/sawlii/units-sd/signup-sd/ajax.signup-sd.php'},
                location:{required:true, startingSpaceNotAllow:true},
                pwd:{required:true, minlength:6},
                cpwd:{required:true,equalTo: "#pwd"},
                hiddenRecaptcha:
                {
                 required: function()
                  {
                    if(grecaptcha.getResponse() == '')
                    {
                         return true;
                    } else
                    {
                         return false;
                    }
                  }
                }

             },

            messages:
            {
                firstName:{required:"Please enter first name", minlength:"Please enter at least 2 characters",alphanumeric:"Please enter valid first name"},
                lastName:{required:"Please enter last name", minlength:"Please enter at least 2 characters",alphanumeric:"Please enter valid last name"},
                userName:{required:"Please enter user name", minlength:"Please enter at least 2 characters",remote:"Username already exist"},
                /*captcha:{required:"Please enter captcha code", maxlength:"Please enter only 5 digits"},*/
                email: { required:"Please enter email address", email:"Please enter a valid email address",remote:"Email already exist" },
                location:{required:"Please enter location"},
                pwd: { required:"Please enter password", minlength:"Minimum 6 characters required"},
                cpwd: {required:"Please enter password" ,equalTo:"Password doesn't match" },
                hiddenRecaptcha: {required:"Please enter captcha code"}
            }
        });

       	if($("#signUpFrm").valid())
        {
            if(!$("input[type='checkbox']:checked").val()){
                $('.lbl_agree_error').html("Kindly agree to our Terms and Conditions");
                $('.lbl_agree_error').css("color","#ff0000");
                return false;
            }
            else{
                $('.lbl_agree_error').html("");
                return true;
            }
            addOverlay();
            $("#signUpFrm").submit();
        }

    });

    $(".ipAgree").change(function(){
    	if(this.checked){
    		$('.lbl_agree_error').html("");
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