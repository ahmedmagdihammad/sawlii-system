@extends('layouts.frontend.master')
@section('title')
    Signup
@endsection
@section('content')
<!-- Your share button code -->
<div id="main-content">
  <section class="inner-section">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="sign-form sign-up-user">
                    <div class="sign-option">
                        <!-- <h3>Let's get started!</h3> -->
                        <!-- <h3>First, tell us what you're looking for.</h3> -->
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 pnone">
                                <div class="customer-right common">
                                    <div class="customer-text">
                                        <h2>I want to hire a PickGeek</h2>
                                        <p>Find, collaborate with, <br /> and pay an expert.</p>
                                        <a href="{{route('signup.hire',$lang)}}">To Hire</a>
                                    </div>
                                    <div class="freelancer-img">
                                        <img src="{{asset('frontend/img/freelancer.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 pnone">
                                <div class="freelancer-left common">
                                    <div class="freelancer-text">
                                    <h2>I'm looking for online work</h2>
                                    <p>Find freelance projects and <br /> grow your business.</p>
                                    <a href="{{route('signup.work',$lang)}}">For Work</a>
                                    </div>
                                    <div class="online-work-img">
                                        <img src="{{asset('frontend/img/online-work.png')}}" alt="">
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

@endsection