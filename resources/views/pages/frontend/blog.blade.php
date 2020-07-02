@extends('layouts.frontend.master')
@section('title')
    Blog
@endsection
@section('content')

<!-- Your share button code -->
<div id="main-content">
  <div class="blog_section_main">
    <div class="container">
        <div class="blog_header">
            <!-- <h1>Blogs Listing</h1> -->
        </div>
        <div class="row">
            <div class="col-md-9 col-sm-8">
                <ul class="blog-listing-wrap clearfix">
                    <li class="blog-listing-wrap-items">	
						<div class="blog_listing_main">
							<div class="media">
								<div class="media-left">
									<div class="blog_img_left">
										<img src="{{asset('frontend/img/1612a16b72ec929e163f5061cce6d6c7.gif')}}" class="media-object">
									</div>
								</div>
								<div class="media-body">
								<h3 class="media-heading"><a href="#">First Post</a></h3>
								<div class="blog_additional_icon">
									<ul>
										<li><span><i class="fa fa-calendar"></i></span><a href="javascript:void(0);">13th Aug 2019</a></li>
										<li><span><i class="fa fa-user"></i></span><a href="{{route('blog',$lang)}}">Admin</a></li>
										<li><span><i class="fa fa-th-large"></i></span><a href="{{route('blog',$lang)}}">Test</a></li>
										<li><span><i class="fa fa-comment"></i></span><a href="{{route('blog.posts',$lang)}}">Comments</a></li>
									</ul>
								</div>
								<div class="tags_blog">
									<ul>
										<li><a href="{{route('blog',$lang)}}">1st Tag</a></li>	      		
									</ul>
								</div>
								<p class="blog_desc">Post Description</p>
								<a href="{{route('blog.posts',$lang)}}" class="btn btn-primary btn_blog">Read More</a>
								</div>
							</div>
						</div>
					</li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="blog_search_sidebar">
		<div class="search_blog">
			
			<div class="input-group form-group">
				<input type="text" class="form-control" id="search_keyword_blog" placeholder="Search here">
				<div class="input-group-btn">
					<button class="btn" type="button" id="btn_search_blog"><i class="glyphicon glyphicon-search"></i></button>
				</div>
			</div>
			
		</div>
	<div class="sidebar_tags">
		<div class="sidebar_blogs_header">
			<h4>Tags</h4>
		</div>
		<div class="tags_blog">
			<ul>
				<li><a href="{{route('blog',$lang)}}">1st Tag</a></li>

			</ul>
		</div>
	</div>
	<div class="sidebar_tags">
		<div class="sidebar_blogs_header">
			<h4>Categories</h4>
		</div>
		<div class="sidebar_blogs_links">
			<ul>
				<li><a href="http://www.sukhadaam.com/demo/sawlii/blog/category/TEST">Test</a></li>
 
			</ul>
		</div>
	</div>
	<div class="sidebar_tags">
		<div class="sidebar_blogs_header">
			<h4>Recent Points</h4>
		</div>
		<div class="sidebar_blogs_links">
			<ul>
				<li><a href="http://www.sukhadaam.com/demo/sawlii/blog/FirstPost">First Post</a></li>
				

			</ul>
		</div>
	</div>
</div>
            </div>
        </div>
    </div>
</div>

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