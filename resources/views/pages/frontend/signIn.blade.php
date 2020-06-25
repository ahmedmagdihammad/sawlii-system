@extends('layouts.frontend.master')
@section('title')
    SignIn
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
                            <h3>Sign In and get to work</h3>
                        </div>
                        <div class="sign_up_form">
                            <div class="sign_social">
                              <a href="javascript:void(0)" class="social-facebook" onclick="facebookLogin('all')" title="Facebook">
                                <i class="fa fa-facebook"></i>
                              </a>
                              <a href="javascript:void(0)" id="login_google" class="customGPlusSignIn social-google" data-user-type="all" title="Google"> 
                                <i class="fa fa-google"></i>
                              </a>
                            </div>
                            <form method="post" action="{{ route('signin',$lang) }}" id="#">
                              <div class="row">
                                <div class="col-md-12 col-sm-12">
                                  <div class="form-group">
                                    <input class="form-control @error('Email or Email') is-invalid @enderror" type="text"  value="{{ old('email') }}" tabindex=1 name="username" id="#" placeholder="Username or Email" required autocomplete="email" autofocus/>
                                  </div> 

                                  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                                <div class="col-md-12 col-sm-12">
                                  <div class="form-group">
                                    <input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required autocomplete="current-password" tabindex=2/>
                                    <span class="danger hide">Invalid sign in! Username or password did not match</span>
                                  </div>

                                  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                              </div>
                              <div class="terms-condition">
                                  <label class="signin-check">Remember me
                                    <input type="checkbox" name="isRemember" id="isRemember">
                                    <span class="checkmark"></span>
                                  </label>
                              </div>
                              <div class="get_started">
                                  <input type="hidden" name="action" value="login">
                                  <button type="submit" name="submitForm" id="submitForm" class="btn btn-block btn-system">Sign In</button>
                              </div>
                              <div class="forgot-pwd">
                                <a href="{{route('forgetPassword',$lang)}}" class="forget_pw">Forgot password?</a>
                                <a href="{{route('signup',$lang)}}" class="register">Sign Up</a>
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

  jQuery.validator.addMethod("emailvalidate", function(value, element) {
              return this.optional(element) || /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i.test(value);
          }, "Only letters, numbers, and underscores are allowed");
  $('#submitForm').click(function(){

          $loginForm="#loginForm";
          $($loginForm).validate({
              ignore: [],
              errorClass: 'help-block',
              errorElement: 'label',
              highlight: function (element) {
                  $(element).closest('.form-group').addClass('has-error');
              },
              unhighlight: function (element) {
                  $(element).closest('.form-group').removeClass('has-error');
              },
              rules: { email: { required:true }, password:{ required:true,minlength:6 } },
              messages: {
                  email: { required:"Please enter email address", emailvalidate:"Please enter valid email" },
                  password: { required:"Please enter password",min: "Please enter minimum 6 digits" }
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