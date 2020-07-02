<!-- start mockup section -->
<section class="above-fold-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-7">
					<div class="section-desc">
						<div class="left-section">
							<h1>New customers are waiting. We'll help you reach them.</h1>
							<h4>Sawlii suits to all small to medium scale businesses to turn up and grow</h4>
							<form class="form" action="#" method="post">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Find Jobs">
									<button class="btn btn-system">
										<i class="fa fa-search"></i>
									</button>
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
	<!-- end mockup section -->
	<script>
		$("header .navbar-default .navbar-nav>li.notification .dropdown-menu").mCustomScrollbar();       
	</script>
	<!-- Your share button code -->
	<div id="main-content">
		<!-- start featured jobs -->
		<section class="home-featured-jobs common-section ">
			<div class="container">
				<h2 class="main-title">Featured Jobs</h2>
				<div class="row">
					<div class="col-md-12">
						<div class="job-list-wrap">
							<div class="row">
								<div class="col-md-4 col-sm-6" >
									<div class="fjob-box">
										<div class="fjob-featured featured-tag">Featured</div>
										<h4 class="fjob-title">
											<a href="{{route('test_job',$lang)}}">123 Test Job</a>
										</h4>
										<ul class="fjob-breadcrumb">
											<li title=""></li>
											<li title=""></li>
										</ul>
										<div class="fjob-price-wrap">
											Est.Budget : <div class="amount-wrap">0 <span>USD</span></div>
											<span class="level-label ">Any</span>
										</div>
										<div class="fjob-desc">Testing Testing Testing Testing Testing Testing Testing Testing Testing�....<a href='{{route('test_job',$lang)}}'>See More</a></div>
										<div class="fjob-skills"><p></p></div>
										<ul class="fjob-post">
											<li><span>Posted</span>: 9 months ago</li>
											<li><span>Total no. of applicants</span>: 0</li>
										</ul>
										<div class="freelancer-details">
											<div class="media">
												<div class="media-left media-top">
													<div class="freelancer-img">
														<a href="{{route('my_profile',$lang)}}">
															<img src="{{asset('frontend/img/default-image_450.png')}}"/>
														</a>
													</div>
												</div>
												<div class="media-body media-top">
													<h5><a href="{{route('my_profile',$lang)}}">Vishal</a></h5>
													<div class="user-location">Rajkot, Gujarat, India</div>
													<p class="rating"><i class="fa fa-star"></i> 4</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-4 col-sm-6" style="display: none;">
									<div class="featured-box ">
										<div class="featured-tag">
											<p>Featured</p>
										</div>
										<div class="pro-tag">
											<p>Any</p>
										</div>
										<h4><a href="{{route('test_job',$lang)}}">123 Test Job</a></h4>

										<a href="#" data-toggle="tooltip" title="" class="active save-job" data-original-title="Saved"><!-- <i class="fa fa-heart"></i> --></a>
										<p class="price">0  <span>USD</span></p>

										<span class="subcat">
											
											<i class="fa fa-angle-right" aria-hidden="true">
											</i>
											
										</span>

										<p class="desc">Testing Testing Testing Testing Testing Testing Testing Testing Testing�....<a href='{{route('test_job',$lang)}}'>See More</a></p>
										<!-- <p><a href="javascript:void(0);">Web Design</a>, <a href="javascript:void(0);">Graphic Design</a></p> -->
										<p class="skills-list"></p>
										<ul class="recevied_addons">
											<li>
												<label>Posted </label>
												<span>9 months ago</span>
											</li>
											<li>
												<label>Total no. of applicants</label>
												<span>0</span>
											</li>
										</ul>
									</div>
								</div>

								<div class="col-md-4 col-sm-6" >
									<div class="fjob-box">
										<div class="fjob-featured featured-tag">Featured</div>
										<h4 class="fjob-title">
											<a href="{{route('test_job',$lang)}}">ionic job heena</a>
										</h4>
										<ul class="fjob-breadcrumb">
											<li title="Accounts & Consultants">Accounts & Consultants</li>
											<li title="Accounting Solutions">Accounting Solutions</li>
										</ul>
										<div class="fjob-price-wrap">
											Est.Budget : <div class="amount-wrap">2000 <span>USD</span></div>
											<span class="level-label ">Intermediate</span>
										</div>
										<div class="fjob-desc">test demo ionic  test demo ionic  test demo ionic  test demo ionic  test demo io....<a href='{{route('test_job',$lang)}}'>See More</a></div>
										<div class="fjob-skills"><p>Android Developers,Bookkeepers</p></div>
										<ul class="fjob-post">
											<li><span>Posted</span>: 9 months ago</li>
											<li><span>Total no. of applicants</span>: 0</li>
										</ul>
										<div class="freelancer-details">
											<div class="media">
												<div class="media-left media-top">
													<div class="freelancer-img">
														<a href="{{route('my_profile',$lang)}}">
															<img src="{{asset('frontend/img/default-image_450.png')}}"/>
														</a>
													</div>
												</div>
												<div class="media-body media-top">
													<h5><a href="{{route('my_profile',$lang)}}">Vishal</a></h5>
													<div class="user-location">Rajkot, Gujarat, India</div>
													<p class="rating"><i class="fa fa-star"></i> 4</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-4 col-sm-6" style="display: none;">
									<div class="featured-box ">
										<div class="featured-tag">
											<p>Featured</p>
										</div>
										<div class="pro-tag">
											<p>Intermediate</p>
										</div>
										<h4><a href="{{route('test_job',$lang)}}">ionic job heena</a></h4>

										<a href="#" data-toggle="tooltip" title="" class="active save-job" data-original-title="Saved"><!-- <i class="fa fa-heart"></i> --></a>
										<p class="price">2000  <span>USD</span></p>

										<span class="subcat">
											Accounts & Consultants
											<i class="fa fa-angle-right" aria-hidden="true">
											</i>
											Accounting Solutions
										</span>

										<p class="desc">test demo ionic  test demo ionic  test demo ionic  test demo ionic  test demo io....<a href='{{route('test_job',$lang)}}'>See More</a></p>
										<!-- <p><a href="javascript:void(0);">Web Design</a>, <a href="javascript:void(0);">Graphic Design</a></p> -->
										<p class="skills-list">Android Developers,Bookkeepers</p>
										<ul class="recevied_addons">
											<li>
												<label>Posted </label>
												<span>9 months ago</span>
											</li>
											<li>
												<label>Total no. of applicants</label>
												<span>0</span>
											</li>
										</ul>
									</div>
								</div>

								<div class="col-md-4 col-sm-6" >
									<div class="fjob-box">
										<div class="fjob-featured featured-tag">Featured</div>
										<h4 class="fjob-title">
											<a href="{{route('test_job',$lang)}}">May Job</a>
										</h4>
										<ul class="fjob-breadcrumb">
											<li title="Web Developement">Web Developement</li>
											<li title="Website Development">Website Development</li>
										</ul>
										<div class="fjob-price-wrap">
											Est.Budget : <div class="amount-wrap">100 <span>USD</span></div>
											<span class="level-label ">Intermediate</span>
										</div>
										<div class="fjob-desc">Testing</div>
										<div class="fjob-skills"><p>PHP Developers</p></div>
										<ul class="fjob-post">
											<li><span>Posted</span>: 1 year ago</li>
											<li><span>Total no. of applicants</span>: 1</li>
										</ul>
										<div class="freelancer-details">
											<div class="media">
												<div class="media-left media-top">
													<div class="freelancer-img">
														<a href="{{route('my_profile',$lang)}}">
															<img src="{{asset('frontend/img/default-image_450.png')}}"/>
														</a>
													</div>
												</div>
												<div class="media-body media-top">
													<h5><a href="{{route('my_profile',$lang)}}">Vishal</a></h5>
													<div class="user-location">Rajkot, Gujarat, India</div>
													<p class="rating"><i class="fa fa-star"></i> 4</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-4 col-sm-6" style="display: none;">
									<div class="featured-box ">
										<div class="featured-tag">
											<p>Featured</p>
										</div>
										<div class="pro-tag">
											<p>Intermediate</p>
										</div>
										<h4><a href="{{route('test_job',$lang)}}">May Job</a></h4>

										<a href="#" data-toggle="tooltip" title="" class="active save-job" data-original-title="Saved"><!-- <i class="fa fa-heart"></i> --></a>
										<p class="price">100  <span>USD</span></p>

										<span class="subcat">
											Web Developement
											<i class="fa fa-angle-right" aria-hidden="true">
											</i>
											Website Development
										</span>

										<p class="desc">Testing</p>
										<!-- <p><a href="javascript:void(0);">Web Design</a>, <a href="javascript:void(0);">Graphic Design</a></p> -->
										<p class="skills-list">PHP Developers</p>
										<ul class="recevied_addons">
											<li>
												<label>Posted </label>
												<span>1 year ago</span>
											</li>
											<li>
												<label>Total no. of applicants</label>
												<span>1</span>
											</li>
										</ul>
									</div>
								</div>

								<div class="col-md-4 col-sm-6" >
									<div class="fjob-box">
										<div class="fjob-featured featured-tag">Featured</div>
										<h4 class="fjob-title">
											<a href="{{route('test_job',$lang)}}">Test Job</a>
										</h4>
										<ul class="fjob-breadcrumb">
											<li title="Accounts & Consultants">Accounts & Consultants</li>
											<li title="Accounting Solutions">Accounting Solutions</li>
										</ul>
										<div class="fjob-price-wrap">
											Est.Budget : <div class="amount-wrap">120 <span>USD</span></div>
											<span class="level-label ">Intermediate</span>
										</div>
										<div class="fjob-desc">Testing</div>
										<div class="fjob-skills"><p>Bookkeepers</p></div>
										<ul class="fjob-post">
											<li><span>Posted</span>: 1 year ago</li>
											<li><span>Total no. of applicants</span>: 0</li>
										</ul>
										<div class="freelancer-details">
											<div class="media">
												<div class="media-left media-top">
													<div class="freelancer-img">
														<a href="{{route('my_profile',$lang)}}">
															<img src="{{asset('frontend/img/72c2e5274a58c9816922396f870c965d.png')}}"/>
														</a>
													</div>
												</div>
												<div class="media-body media-top">
													<h5><a href="{{route('my_profile',$lang)}}">Ishit</a></h5>
													<div class="user-location">Rajkot, Gujarat, India</div>
													<p class="rating"><i class="fa fa-star"></i> 3</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-4 col-sm-6" style="display: none;">
									<div class="featured-box ">
										<div class="featured-tag">
											<p>Featured</p>
										</div>
										<div class="pro-tag">
											<p>Intermediate</p>
										</div>
										<h4><a href="{{asset('test_gob',$lang)}}">Test Job</a></h4>

										<a href="#" data-toggle="tooltip" title="" class="active save-job" data-original-title="Saved"><!-- <i class="fa fa-heart"></i> --></a>
										<p class="price">120  <span>USD</span></p>

										<span class="subcat">
											Accounts & Consultants
											<i class="fa fa-angle-right" aria-hidden="true">
											</i>
											Accounting Solutions
										</span>

										<p class="desc">Testing</p>
										<!-- <p><a href="javascript:void(0);">Web Design</a>, <a href="javascript:void(0);">Graphic Design</a></p> -->
										<p class="skills-list">Bookkeepers</p>
										<ul class="recevied_addons">
											<li>
												<label>Posted </label>
												<span>1 year ago</span>
											</li>
											<li>
												<label>Total no. of applicants</label>
												<span>0</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					
				</div>
				<div class="row hide">
					<div class="view-more-button">
						<div class="">
							<a class="btn btn-primary" href="{{route('test_job',$lang)}}">See All Jobs</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end featured jobs -->
	</div>