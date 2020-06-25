@extends('layouts.frontend.master')
@section('title')
How It Works
@endsection
@section('content')

<!-- Your share button code -->
<div id="main-content">
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact_us contact-form">
                    <div class="theme-form">
                        <div class="cont-nm">
                            <h1>How It Works</h1>
                            <div class="panel_toolbox btn-back" style="display: block;"></div>
                     <!-- <a href="javascript:window.history.back()" class="btn btn-primary btn-sm" title="Back"><i class="fa fa-arrow-left"></i></a> -->
                        </div>  
                        <div role="tabpanel" class="tab-pane active" id="terms-service"><div class="row">
                        <div class="col-md-3 col-sm-3">
                        <div class="border navy-blue" style="border-right:4px solid #158ab7">
                        <div class="main-content" style="margin-right:25px">
                        <div class="works-icon"><img alt="" src="/pickgeeks_v2/frames-sd/images-sd/icon/search.png" style="height:64px; width:64px" /></div>

                        <h4>FIND</h4>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu laoreet nulla.</p>
                        </div>
                        </div>
                        </div>

                        <div class="col-md-3 col-sm-3">
                        <div class="border dark-blue" style="border-right:4px solid #158ab7">
                        <div class="main-content" style="margin-right:25px">
                        <div class="works-icon"><img alt="" src="/pickgeeks_v2/frames-sd/images-sd/icon/user-checked.png" style="height:64px; width:64px" /></div>

                        <h4>HIRE</h4>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu laoreet nulla.</p>
                        </div>
                        </div>
                        </div>

                        <div class="col-md-3 col-sm-3">
                        <div class="blue border" style="border-right:4px solid #52cfff">
                        <div class="main-content" style="margin-right:25px">
                        <div class="works-icon"><img alt="" src="/pickgeeks_v2/frames-sd/images-sd/icon/employee.png" style="height:64px; width:64px" /></div>

                        <h4>WORK</h4>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu laoreet nulla.</p>
                        </div>
                        </div>
                        </div>

                        <div class="col-md-3 col-sm-3">
                        <div class="border light-blue" style="border-right:4px solid #9ee4ff">
                        <div class="main-content" style="margin-right:25px">
                        <div class="works-icon"><img alt="" src="/pickgeeks_v2/frames-sd/images-sd/icon/credit-card.png" style="height:64px; width:64px" /></div>

                        <h4>PAY</h4>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu laoreet nulla.</p>
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

@endsection