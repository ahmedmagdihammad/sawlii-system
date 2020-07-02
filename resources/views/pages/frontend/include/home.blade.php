<section class="above-fold-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-7">
				<div class="section-desc">
					<div class="left-section">
						<h1>{{__('lang.Hire expert Freelancers for your job online and get your work done!')}}</h1>
						<h4>Sawlii is a freelancing platform for geeks and customers to get their work done.</h4>
						<form class="form" action="#" method="post">
							<div class="form-group">
								<input class="form-control input-lg" placeholder="Find Freelancers, Jobs or Services" type="text" id="searchKeyword" name="searchKeyword">
								<a href="{{route('freelancer',$lang)}}" data-url="Jobs" class="btn btn-system topSearch" id="full"><i class="fa fa-search"></i></a>
								<input type="hidden" name="user_type" class="search_user_type" value="">
								<!-- <button class="btn btn-system">
									<i class="fa fa-search"></i>

								</button> -->
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-5">
				<div class="mockup">
					<img src="{{asset('frontend/img/mockup.png')}}" alt="">
				</div>
			</div>
		</div>
	</div>
	<div class="above-overlay"></div>
</section>

<!-- start select section -->
<section class="select-section">
	<div class="main-select-box">
		<div class="select-box left-box">
			<div class="text">
				<h3>I want to hire a <span>Freelancer</span></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet accumsan leo, a rutrum ante. Etiam tempus ju vsto nisi, ullamcorper  				rhoncus leo dignissim eget.</p>
				<a class="btn btn-system" href="{{route('signup.work',$lang)}}">Hire Freelancer</a>
			</div>
		</div>
		<div class="select-box right-box">
			<div class="text">
				<h3>I’m looking for <span>Online Work</span></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet accumsan leo, a rutrum ante. Etiam tempus ju vsto nisi, ullamcorper rhoncus leo dignissim eget.</p>
				<a href="{{route('signup.hire',$lang)}}" class="btn btn-system">Find Work</a>
			</div>
		</div>
	</div>
</section>
<!-- end select section -->

<!-- start service section -->
<section class="service-section common-section">
	<div class="container">
		<h2 class="main-title">
			Explore the Categories
		</h2>
		<div class="row">
			<div class="col-md-12">
				<div class="service-mcat-wrap">
					<div class="row">
						<div class="col-md-3 col-sm-4">
							<div class="service-box lgreen">
								<a href="{{route('sub_category',$lang)}}">
									<div class="service-img">
										<img src="{{asset('frontend/img/18af23c1cc67b722c3ed6f7b08cc73fb.png')}}" alt="">
									</div>
									<h3>Accounts & Consultants</h3>
									<span class="arrow">
										<i class="fa fa-angle-down"></i>
									</span>
								</a>
							</div>
						</div><div class="col-md-3 col-sm-4">
							<div class="service-box orange">
								<a href="{{route('sub_category',$lang)}}">
									<div class="service-img">
										<img src="{{asset('frontend/img/f028563cf7716f9c9d2794591e12d5b2.png')}}" alt="">
									</div>
									<h3>Graphics Designing</h3>
									<span class="arrow">
										<i class="fa fa-angle-down"></i>
									</span>
								</a>
							</div>
						</div><div class="col-md-3 col-sm-4">
							<div class="service-box purple">
								<a href="{{route('sub_category',$lang)}}">
									<div class="service-img">
										<img src="{{asset('frontend/img/2e8b38a6f5566c676d11c92a30ccd79c.png')}}" alt="">
									</div>
									<h3>Mobile Development</h3>
									<span class="arrow">
										<i class="fa fa-angle-down"></i>
									</span>
								</a>
							</div>
						</div><div class="col-md-3 col-sm-4">
							<div class="service-box green">
								<a href="{{route('sub_category',$lang)}}">
									<div class="service-img">
										<img src="{{asset('frontend/img/18127dc0e89eb32f4deff3149da5c815.png')}}" alt="">
									</div>
									<h3>Web Developement</h3>
									<span class="arrow">
										<i class="fa fa-angle-down"></i>
									</span>
								</a>
							</div>
						</div><div class="col-md-3 col-sm-4">
							<div class="service-box pink">
								<a href="{{route('sub_category',$lang)}}">
									<div class="service-img">
										<img src="{{asset('frontend/img/8e74e1ea4680b0a8cb51eab5335221bc.png')}}" alt="">
									</div>
									<h3>Virtual Assitant</h3>
									<span class="arrow">
										<i class="fa fa-angle-down"></i>
									</span>
								</a>
							</div>
						</div><div class="col-md-3 col-sm-4">
							<div class="service-box navyblue">
								<a href="{{route('sub_category',$lang)}}">
									<div class="service-img">
										<img src="{{asset('frontend/img/b540a4f4185013603e809003753bc93d.png')}}" alt="">
									</div>
									<h3>Data Entry</h3>
									<span class="arrow">
										<i class="fa fa-angle-down"></i>
									</span>
								</a>
							</div>
						</div><div class="col-md-3 col-sm-4">
							<div class="service-box blue">
								<a href="{{route('sub_category',$lang)}}">
									<div class="service-img">
										<img src="{{asset('frontend/img/0b6441cb669a10f381e400a1a643f2ba.png')}}" alt="">
									</div>
									<h3>Content Writing</h3>
									<span class="arrow">
										<i class="fa fa-angle-down"></i>
									</span>
								</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-4">
							<div class="service-box yellow">
								<a href="{{route('sub_category',$lang)}}">
									<div class="service-img">
										<img src="{{asset('frontend/img/yellow.png')}}" alt="">
									</div>
									<h3>See All Categories</h3>
									<span class="arrow">
										<i class="fa fa-angle-down"></i>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end service section -->

<!-- start guideline section -->
<section class="guideline-section common-section">
	<div class="container">
		<h2 class="main-title">
			Sawlii Guidelines
		</h2>
		<div class="row">
			<div class="col-md-12">
				<div class="howitwork-wrap">
					<ul class="howitwork-items">
						<li class="howitwork-item">
							<div class="hiw-item-wrap">
								<div class="media">
									<div class="media-left">
										<div class="hiw-icon">
											<img src="{{asset('frontend/img/cab4fe73cdf5ed9dd89e7a715a2965a2.png')}}" alt="">
										</div>
									</div>
									<div class="media-body">
										<div class="hiw-content">
											<h4 class="hiw-title">Find People</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu laoreet nulla.</p>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="howitwork-item">
							<div class="hiw-item-wrap">
								<div class="media">
									<div class="media-body">
										<div class="hiw-content">
											<h4 class="hiw-title">Hire people</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu laoreet nulla.</p>
										</div>
									</div>
									<div class="media-right">
										<div class="hiw-icon">
											<img src="{{asset('frontend/img/434c4c2e9593156716fd03f679158cbc.png')}}" alt="">
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="howitwork-item">
							<div class="hiw-item-wrap">
								<div class="media">
									<div class="media-left">
										<div class="hiw-icon">
											<img src="{{asset('frontend/img/c17e10da20f7e55618859e2f49670c70.png')}}" alt="">
										</div>
									</div>
									<div class="media-body">
										<div class="hiw-content">
											<h4 class="hiw-title">Work with people</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu laoreet nulla.</p>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="howitwork-item">
							<div class="hiw-item-wrap">
								<div class="media">
									<div class="media-body">
										<div class="hiw-content">
											<h4 class="hiw-title">Pay for your work</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu laoreet nulla.</p>
										</div>
									</div>
									<div class="media-right">
										<div class="hiw-icon">
											<img src="{{asset('frontend/img/c6cd2ba9ff244aecf7500cfa0f05aec1.gif')}}" alt="">
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="above-overlay left">
	</div>
</section>
<!-- end guideline section -->

<!-- start way to work section -->
<section class="workjob-section common-section">
	<div class="container">
		<h2 class="main-title">
			Way to work on a job
		</h2>
		<div class="row">
			<div class="col-md-3 col-sm-4 rb-border">
	<div class="job-item">
		<div class="job-icon">
			<img src="{{asset('frontend/img/fe705de833f2956c07f936dc15ff84d7.png')}}" alt="">
		</div>
		<h2>Post Job</h2>
		<p>Customer posts a job</p>
	</div>
	</div><div class="col-md-3 col-sm-4 rb-border">
		<div class="job-item">
			<div class="job-icon">
				<img src="{{asset('frontend/img/46ea53e804f5bf9f65f5cdeb8fecdd77.png')}}" alt="">
			</div>
			<h2>Search Job</h2>
			<p>Freelancer searches a job</p>
		</div>
	</div><div class="col-md-3 col-sm-4 rb-border">
		<div class="job-item">
			<div class="job-icon">
				<img src="{{asset('frontend/img/331e4195af15cb0917d5fdaf65418e47.png')}}" alt="">
			</div>
			<h2>Submit proposal</h2>
			<p>Freelancer searches a job</p>
		</div>
	</div><div class="col-md-3 col-sm-4 rb-border">
		<div class="job-item">
			<div class="job-icon">
				<img src="{{asset('frontend/img/dda1a56e325d70036457d004b301dd27.png')}}" alt="">
			</div>
			<h2>Customer check bids</h2>
			<p>Customer will check bids from my jobs</p>
		</div>
	</div><div class="col-md-3 col-sm-4 rb-border">
		<div class="job-item">
			<div class="job-icon">
				<img src="{{asset('frontend/img/89341b40dc4684778337eead6fdc892c.png')}}" alt="">
			</div>
			<h2>Multiple milestones</h2>
			<p>Customer can create multiple milestones</p>
		</div>
	</div><div class="col-md-3 col-sm-4 rb-border">
		<div class="job-item">
			<div class="job-icon">
				<img src="{{asset('frontend/img/d41dcca65a9ae90e5224ab8e42a4cbad.png')}}" alt="">
			</div>
			<h2>Accept milestones</h2>
			<p>Freelancer can accept milestones from workroom</p>
		</div>
	</div><div class="col-md-3 col-sm-4 rb-border">
		<div class="job-item">
			<div class="job-icon">
				<img src="{{asset('frontend/img/5fd06e4b47648de6fb634c831b3db452.png')}}" alt="">
			</div>
			<h2>Freelancer start work</h2>
			<p>Once customer hires freelancer from proposals</p>
		</div>
	</div><div class="col-md-3 col-sm-4 rb-border">
		<div class="job-item">
			<div class="job-icon">
				<img src="{{asset('frontend/img/859692286eee9d6acb6e9070fdb48409.png')}}" alt="">
			</div>
			<h2>Submit and get paid</h2>
			<p>Submit, ask for payment, get paid and leave a review</p>
		</div>
	</div>
			</div>
		</div>
</section>
<!-- end way to work section -->

<!-- start way to service section -->
<section class="workservice-section common-section">
	<div class="container">
		<h2 class="main-title">
			Way to work on a service
		</h2>
		<div class="row">
			<div class="col-md-4 col-sm-4">
				<div class="service-mockup">
					<img src="{{asset('frontend/img//mockup-s.png')}}" alt="">
				</div>
			</div>
			<div class="col-md-8 col-sm-8">
				<ul>
					<li>
						<div class="media">
							<div class="media-left">
								<span class="count">1</span>
							</div>
							<div class="media-body">
								Customer browse for services and can purchase even with addons
							</div>
						</div>
					</li>
					<li>
						<div class="media">
							<div class="media-left">
								<span class="count">2</span>
							</div>
							<div class="media-body">
								Freelancer would specify deadline details
							</div>
						</div>
					</li>
					<li>
						<div class="media">
							<div class="media-left">
								<span class="count">3</span>
							</div>
							<div class="media-body">
								Customer will accept it
							</div>
						</div>
					</li>
					<li>
						<div class="media">
							<div class="media-left">
								<span class="count">4</span>
							</div>
							<div class="media-body">
								Freelancer can start service from service orders
							</div>
						</div>
					</li>
					<li>
						<div class="media">
							<div class="media-left">
								<span class="count">5</span>
							</div>
							<div class="media-body">
								Freelancer can submit work from workroom
							</div>
						</div>
					</li>
					<li>
						<div class="media">
							<div class="media-left">
								<span class="count">6</span>
							</div>
							<div class="media-body">
								Customer can review the service availed
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="above-overlay right"></div>
</section>
<!-- end way to service section -->


<!-- start app section -->
<section class="app-section">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-9">
				<h4>Limitless Experience</h4>
				<h2>Download our mobile app from Google play store & itunes</h2>
				<p>Praesent et sem purus. Pellentesque imperdiet euismod pretium. Donec tristique bibendum dolor. Duis enim massa, ultricies id urna at, suscipit ornare turpis.</p>
				<div class="app-button">
					<a href="javascript:void(0);">
						<img src="{{asset('frontend/img/android.png')}}" alt="">
					</a>
				</div>
				<div class="app-button">
					<a href="javascript:void(0);">
						<img src="{{asset('frontend/img/apple.png')}}" alt="">
					</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-3">
				<div class="app-mockup">
					<img src="{{asset('frontend/img/app-section.png')}}" alt="">					 
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end app section -->