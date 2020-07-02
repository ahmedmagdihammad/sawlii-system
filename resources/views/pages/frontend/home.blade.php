@extends('layouts.frontend.master')
@section('title')
  Welcome to Sawlii
@endsection
@section('content')

<div id="main-content">
	@if(!Auth::user())
		@include('pages.frontend.include.home')
	@else
		@if(Auth::user()->type == 'F')
			@include('pages.frontend.include.home_freelancer')
		@else
			@include('pages.frontend.include.home_customer')
		@endif
	@endif

	<!-- start top skills section -->
	<section class="top-skills-section common-section">
		<div class="container">
			<h2 class="main-title">
				Top Skills
			</h2>
			<ul class="clearfix">
				<li>
					<a href="{{route('jobs',$lang)}}">AngularJS Developers</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">Android Developers</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">Bookkeepers</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">C# Developers</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">Content Writers</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">Copywriters</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">Customer Service Representatives</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">Data Entry Specialists</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">Email Marketing Consultants</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">Excel Experts</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">Facebook Marketers</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">Graphic Designers</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">Objective-C Developers</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">JavaScript Developers</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">JQuery Developers</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">Mobile App Developers</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">SEO Experts</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">PHP Developers</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">Python Developers</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">Sales Consultants</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">UI Designers</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">Social Media Consultants</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">Swift Developers</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">Technical Writers</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">Wordpress Developers</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">UX Designers</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">Virtual Assistants</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">Web Designers</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">Writers</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">Writer</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">UX Designers</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">Java</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">Node Js</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">React Js</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">Selenium Web Driver</a>
				</li><li>
					<a href="{{route('jobs',$lang)}}">QA Automation</a>
				</li>
			</ul>
		</div>
	</section>

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
	<!-- End Content -->
@endsection
