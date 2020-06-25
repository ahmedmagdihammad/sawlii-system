@extends('layouts.frontend.master')
@section('title')
    Service
@endsection
@section('content')
<!-- Your share button code -->
<div id="main-content">
  
<script type="text/javascript" src="{{asset('frontend/js/URI.js')}}"></script>

<section class="serchbar-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="searchbar-form filters-search">
                    <form class="form" action="" method="POST" id="frmMyJobs" name="frmMyJobs">
                        <div class="input-group">
                           <span class="input-group-btn">
                              <!-- <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                               Services
                              <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu selected-value" aria-labelledby="dropdownMenu1">
                                <li class=""><a href="javascript:;" data-value="Jobs">Jobs</a></li>
                                <li class=""><a href="javascript:;" data-value="Freelancers">Freelancers</a></li>
                                <li class=""><a href="javascript:;" data-value="Services">Services</a></li>
                              </ul> -->
                              <select class="btn search_type" name="search_type" id="search_type">
                                <!-- <option value="Freelancers" >Freelancers</option>
                                <option value="Jobs" >Jobs</option>
                                <option value="Services" selected>Services</option> -->
                                <option value="Freelancers" >Freelancers</option><option value="Jobs" >Jobs</option><option value="Services" selected>Services</option>
                              </select>
                           </span>
                            <!-- <input type="text" class="form-control" placeholder="Find Jobs (eg. Web Design)">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">Search</button>
                            </span> -->
                            <span class="main-input">
                              <input class="form-control" type="text" name="searchKeyword" id="searchKeyword" placeholder="Find Services" value=""/>
                              <i class="fa fa-search desktop-view"></i>
                            </span>
                            <span class="input-group-btn location-input-group desktop-view">
                             <input type="text" class="form-control load_ggl_autocomplete location" name="location" id="search_location" value=""/>
                              <i class="fa fa-map-marker"></i>
                            </span>
                           <span class="input-group-btn">
                                 <<!-- a href="javascript:void(0)" class="btn btn-primary">
                                    <i class="fa fa-search mobile-view"></i> 
                                    <span class="desktop-view">Search</span>
                                 </a> -->
                                 <a href="#" class="btn btn-primary" data-url="Services" id="full"><i class="fa fa-search"></i> <span class="desktop-view">Search</span></a>
                                <!-- <button class="btn btn-primary search_record" type="button">Search</button> -->
                           </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Searchbar Section End -->
<section class="main-dashboard">
   <div class="container">
        <div class="" id="filters-search">
            <div class="featurette-job search-page">
                <div class="sub_featured">
                 
                  <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div id="sidebarMenu" class="left-sidebar filters-search">
                            <div class="panel panel-default theme-box">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Filters</h4>
                                    <div class="panel-tools pull-right">
                                        <a href="#">Clear <i class="fa fa-refresh" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="filter-box">
                                        <h5 class="filter-title">Category</h5>
                                        <div class="filter-body">
                                            <div class="form-group">
                                                <select class="form-control category" name="category" id="category" data-id="">
                                                    <option value="">--Select Category--</option><option value='Accounts & Consultants' >Accounts & Consultants</option><option value='Graphics Designing' >Graphics Designing</option><option value='Mobile Development' >Mobile Development</option><option value='Web Developement' >Web Developement</option><option value='Virtual Assitant' >Virtual Assitant</option><option value='Testing' >Testing</option><option value='Marketing' >Marketing</option><option value='Web Designing' >Web Designing</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-box">
                                        <h5 class="filter-title">Sub Category</h5>
                                        <div class="filter-body">
                                            <div class="form-group">
                                                <select class="form-control subcategory" name="subcategory" id="subcategory"><option value="">--Select Subcategory--</option></select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-box">
                                        <h5 class="filter-title">Experience level</h5>
                                        <div class="filter-body">
                                            <ul class="filter-lists">
                                                 <li>
                                                    <input type="radio" id="test1" name="exp_lvl" value="beginner" >
                                                    <label for="test1">
                                                    Beginner
                                                    </label>
                                                 </li>
                                                 <li>
                                                    <input type="radio" id="test3" name="exp_lvl" value="intermediate" >
                                                    <label for="test3">
                                                    Intermediate
                                                    </label>
                                                 </li>
                                                 <li>
                                                    <input type="radio" id="test2" name="exp_lvl" value="pro" >
                                                    <label for="test2">
                                                    Pro
                                                    </label>
                                                 </li>
                                              </ul>
                                        </div>
                                    </div>
                                    <div class="filter-box">
                                        <h5 class="filter-title">Delivery Time</h5>
                                        <div class="filter-body">
                                            <div class="form-group">
                                                 <input type="number" class="form-control deliveryTime" name="deliveryTime" id="deliveryTime" min=0 value="">
                                              </div>
                                        </div>
                                    </div>
                                    <div class="filter-box">
                                        <h5 class="filter-title">Service price</h5>
                                        <div class="filter-body">
                                            <div class="range_slider">
                                                 <div>
                                                    <input type="text" id="#" name="#" value="" readonly style="border:0; font-weight:bold;">
                                                    <input type="text" id="#" name="#" value="" readonly style="border:0; font-weight:bold;">
                                                 </div>
                                                 <div id="slider-range">
                                                 </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="filter-box">
                                        <h5 class="filter-title">Sort by</h5>
                                        <div class="filter-body">
                                            <div class="form-group">
                                                 <select class="form-control serviceType" name="serviceType" id="serviceType">
                                                    <option value="">--Select Service Type--</option>
                                                    <option value="featured" >
                                                       Only featured Service 
                                                    </option>
                                                    <option value="new" >
                                                       New Service
                                                    </option>
                                                 </select>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="filter-box mobile-view">
                                        <h5 class="filter-title">Freelancer Location</h5>
                                        <div class="filter-body">
                                            <div class="location_search">
                                            <div class="form-group">
                                                <input type="text" class="form-control load_ggl_autocomplete location" name="location" id="location" value=""/>
                                                <i class="fa fa-map-marker" aria-hidden="true">
                                                </i>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-menu">
                            <button>
                            <i class="fa fa-sliders" aria-hidden="true">
                            </i>
                           </button>
                        </div>
                    </div>
                     <div class="col-md-9 col-sm-8">
                        <div class="panel panel-default theme-box no-bg no-padding">
                            <div class="panel-heading">
                                <h4 class="panel-title">Services</h4>
                                <div class="search_sort panel-tools pull-right">
                                  <select class="form-control" name="sorting" id="sorting">
                                     <option value="">
                                        Sort by
                                     </option>
                                     <option value="Newest" >
                                        Newest
                                     </option>
                                     <option value="lTohSold" >
                                        No. of times sold : Low to High
                                     </option>
                                     <option value="hTolSold" >
                                        No. of times sold : High to Low
                                     </option>
                                     <option value="lTohPrice" >
                                        Price : Low to High
                                     </option>
                                     <option value="hTolPrice" >
                                        Price : High to Low
                                     </option>
                                     <option value="lTohRate" >
                                        Ratings : Low to High
                                     </option>
                                     <option value="hTolRate" >
                                        Ratings : High ot Low
                                     </option>
                                  </select>
                                </div>
                            </div>
                            <div class="panel-body">
                           <div class="services-list-wrap">
                        <div class="row dash-job cust-purchase" id="service_data">
                     <div class="col-md-4 col-sm-6">
                     <div class="service-box">
                           <div class="service-featured hide"><span><i class="fa fa-star"></i></span></div>
                              <div class="service-img">
                                 <a href="{{route('service.test_service',$lang)}}">
                                    <img src="{{asset('frontend/img/240525bb3d3a3118f1b07d9420318f1d.jpeg')}}" title="Tobys  test">
                                 </a>
                                 <div class="save-service ">
                                 <a href="javascript:void(0)" title="Saved" class="save_service" data-id="38">
                                       <i class="fa fa-heart-o"></i>
                                 </a>
                              </div>
                           </div>
                           <div class="service-desc">
                              <h4 class="service-title">
                                 <a href="{{route('service.test_service',$lang)}}" target="_blank">Tobys  test</a>
                              </h4>
                              <div class="services-cat">Digital Marketing</div>
                              <div class="price-sales-wrap">
                                 <div class="ps-wrap price-wrap"><div class="amount-wrap">$10</div></div>
                                 <div class="ps-wrap sales-wrap">Service Sold <span>0</span></div>
                              </div>
                              <div class="freelancer-details">
                                 <div class="media">
                                    <div class="media-left media-top">
                                       <div class="freelancer-img">
                                          <a href="{{route('service.test_service',$lang)}}" target="_blank">
                                             <img src="{{asset('frontend/img/th2_no_user_image.png')}}" title="Yousef Albader" alt="Yousef Albader"/>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="media-body media-top">
                                       <h5><a href="{{route('profile',$lang)}}" target="_blank">Yousef Albader</a></h5>
                                       <div class="user-location">Kuwait City, Kuwait</div>
                                       <p class="rating"><i class="fa fa-star"></i>4</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                     </div>
               </div>
   <!-- ======== Old Data ========== -->
   <li class="card-block" style="display: none;">
      <div class="like active ">
         <a href="javascript:void(0)" class="save_service" data-id="38"><i class="fa fa-heart-o"></i></a>
      </div>

      <div class="row hide">
         <div class="col-md-12">
            <div class="featured">
               <span>
               Featured
               </span>
            </div>
         </div>
      </div>
      <div class="media">
         <div class="pull-left">
            <div class="posted_service">
               <img src="{{asset('frontend/js/240525bb3d3a3118f1b07d9420318f1d.jpeg')}}" title="Tobys  test">
            </div>
         </div>
         <div class="media-body">
            <div class="row">
               <div class="col-md-12">
                  <h4 class="card-title">
                     <a href="{{route('service.test_service',$lang)}}" target="_blank">Tobys  test</a>
                  </h4>
               </div>
            </div>
            <div class="category_subcategory">
               <span>
               Marketing
               <i class="fa fa-angle-right"></i>
               Digital Marketing
               </span>
            </div>
            <ul class="project-desc list-inline">
               <li>
                  Price : $10
               </li>
               <li>
                  Service Sold : 0
               </li>
            </ul>
            <div class="PickGeeks_detail">
               <ul>
                  <li>
                     <div class="PickGeeks_img">
                        <img src="{{asset('frontend/img/th2_no_user_image.png')}}" title="Yousef Albader" alt="Yousef Albader">
                     </div>
                  </li>
                  <li>
                     <h5>
                        <a href="{{route('service.test_service',$lang)}}" target="_blank">Yousef Albader</a>
                     </h5>
                     (Beginner)
                  </li>
                  <li>
                     <div class="star-ratings-sprite">
                        <span style="width:4%" class="star-ratings-sprite-rating">
                        </span>
                     </div>
                  </li>
                  <li class="loc">
                     <i class="fa fa-map-marker" aria-hidden="true">
                     </i>
                     Kuwait City, Kuwait
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </li>
   <div class="col-md-4 col-sm-6">
     <div class="service-box">
         <div class="service-featured "><span><i class="fa fa-star"></i></span></div>
         <div class="service-img">
             <a href="{{route('service.test_service',$lang)}}">
                 <img src="{{asset('frontend/img/400e359cda4a91c1d997de5812a61312.png')}}" title="New test service001">
             </a>
             <div class="save-service ">
                 <a href="javascript:void(0)" title="Saved" class="save_service" data-id="37">
                     <i class="fa fa-heart-o"></i>
                 </a>
             </div>
         </div>
         <div class="service-desc">
             <h4 class="service-title">
                <a href="{{route('service.test_service',$lang)}}" target="_blank">New test service001</a>
            </h4>
             <div class="services-cat">Ecommerce Development</div>
             <div class="price-sales-wrap">
                <div class="ps-wrap price-wrap"><div class="amount-wrap">$50</div></div>
                <div class="ps-wrap sales-wrap">Service Sold <span>1</span></div>
             </div>
            <div class="freelancer-details">
               <div class="media">
                   <div class="media-left media-top">
                      <div class="freelancer-img">
                         <a href="{{route('service.test_service',$lang)}}" target="_blank">
                             <img src="{{asset('frontend/img/th2_no_user_image.png')}}" title="Ishit Tankaria" alt="Ishit Tankaria"/>
                         </a>
                      </div>
                   </div>
                   <div class="media-body media-top">
                      <h5><a href="{{route('profile',$lang)}}" target="_blank">Ishit Tankaria</a></h5>
                      <div class="user-location">India</div>
                      <p class="rating"><i class="fa fa-star"></i>4</p>
                   </div>
               </div>
            </div>
         </div>
     </div>
   </div>
   <!-- ======== Old Data ========== -->
   <li class="card-block" style="display: none;">
      <div class="like active ">
         <a href="javascript:void(0)" class="save_service" data-id="37"><i class="fa fa-heart-o"></i></a>
      </div>

      <div class="row ">
         <div class="col-md-12">
            <div class="featured">
               <span>
               Featured
               </span>
            </div>
         </div>
      </div>
      <div class="media">
         <div class="pull-left">
            <div class="posted_service">
               <img src="{{asset('frontend/img/400e359cda4a91c1d997de5812a61312.png')}}" title="New test service001">
            </div>
         </div>
         <div class="media-body">
            <div class="row">
               <div class="col-md-12">
                  <h4 class="card-title">
                     <a href="{{route('service.test_service',$lang)}}" target="_blank">New test service001</a>
                  </h4>
               </div>
            </div>
            <div class="category_subcategory">
               <span>
               Mobile Development
               <i class="fa fa-angle-right"></i>
               Ecommerce Development
               </span>
            </div>
            <ul class="project-desc list-inline">
               <li>
                  Price : $50
               </li>
               <li>
                  Service Sold : 1
               </li>
            </ul>
            <div class="PickGeeks_detail">
               <ul>
                  <li>
                     <div class="PickGeeks_img">
                        <img src="{{asset('frontend/img/th2_no_user_image.png')}}" title="Ishit Tankaria" alt="Ishit Tankaria">
                     </div>
                  </li>
                  <li>
                     <h5>
                        <a href="{{route('profile',$lang)}}" target="_blank">Ishit Tankaria</a>
                     </h5>
                     (Beginner)
                  </li>
                  <li>
                     <div class="star-ratings-sprite">
                        <span style="width:4%" class="star-ratings-sprite-rating">
                        </span>
                     </div>
                  </li>
                  <li class="loc">
                     <i class="fa fa-map-marker" aria-hidden="true">
                     </i>
                     India
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </li>
   </li>
      <div class="col-md-4 col-sm-6">
         <div class="service-box">
            <div class="service-featured "><span><i class="fa fa-star"></i></span></div>
               <div class="service-img">
                  <a href="{{route('service.test_service',$lang)}}">
                     <img src="{{asset('frontend/img/6f3190fde78194fae38887ac165068c2.png')}}" title="Test service">
                  </a>
                  <div class="save-service ">
                     <a href="javascript:void(0)" title="Saved" class="save_service" data-id="36">
                           <i class="fa fa-heart-o"></i>
                     </a>
                  </div>
               </div>
               <div class="service-desc">
                  <h4 class="service-title">
                     <a href="{{route('service.test_service',$lang)}}" target="_blank">Test service</a>
                  </h4>
                  <div class="services-cat">Accounting Solutions</div>
                  <div class="price-sales-wrap">
                     <div class="ps-wrap price-wrap"><div class="amount-wrap">$20</div></div>
                     <div class="ps-wrap sales-wrap">Service Sold <span>0</span></div>
                  </div>
                  <div class="freelancer-details">
                     <div class="media">
                        <div class="media-left media-top">
                           <div class="freelancer-img">
                              <a href="{{route('service.test_service',$lang)}}" target="_blank">
                                 <img src="{{asset('frontend/img/th2_no_user_image.png')}}" title="Sejad Patani" alt="Sejad Patani"/>
                              </a>
                           </div>
                        </div>
                        <div class="media-body media-top">
                           <h5><a href="{{route('profile',$lang)}}" target="_blank">Sejad Patani</a></h5>
                           <div class="user-location">Nikava, Gujarat, India</div>
                           <p class="rating"><i class="fa fa-star"></i>0</p>
                        </div>
                     </div>
                  </div>
               </div>
         </div>
      </div>
   </li>
`   <!-- ======== Old Data ========== -->
   <li class="card-block" style="display: none;">
      <div class="like active ">
         <a href="javascript:void(0)" class="save_service" data-id="36"><i class="fa fa-heart-o"></i></a>
      </div>

      <div class="row ">
         <div class="col-md-12">
            <div class="featured">
               <span>
               Featured
               </span>
            </div>
         </div>
      </div>
      <div class="media">
         <div class="pull-left">
            <div class="posted_service">
               <img src="{{asset('frontend/img/6f3190fde78194fae38887ac165068c2.png')}}" title="Test service">
            </div>
         </div>
         <div class="media-body">
            <div class="row">
               <div class="col-md-12">
                  <h4 class="card-title">
                     <a href="{{route('service.test_service',$lang)}}" target="_blank">Test service</a>
                  </h4>
               </div>
            </div>
            <div class="category_subcategory">
               <span>
               Accounts & Consultants
               <i class="fa fa-angle-right"></i>
               Accounting Solutions
               </span>
            </div>
            <ul class="project-desc list-inline">
               <li>
                  Price : $20
               </li>
               <li>
                  Service Sold : 0
               </li>
            </ul>
            <div class="PickGeeks_detail">
               <ul>
                  <li>
                     <div class="PickGeeks_img">
                        <img src="{{asset('frontend/th2_no_user_image.png')}}" title="Sejad Patani" alt="Sejad Patani">
                     </div>
                  </li>
                  <li>
                     <h5>
                        <a href="{{route('service.test_service',$lang)}}" target="_blank">Sejad Patani</a>
                     </h5>
                     (Beginner)
                  </li>
                  <li>
                     <div class="star-ratings-sprite">
                        <span style="width:0%" class="star-ratings-sprite-rating">
                        </span>
                     </div>
                  </li>
                  <li class="loc">
                     <i class="fa fa-map-marker" aria-hidden="true">
                     </i>
                     Nikava, Gujarat, India
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </li>
   <div class="col-md-4 col-sm-6">
      <div class="service-box">
         <div class="service-featured "><span><i class="fa fa-star"></i></span></div>
         <div class="service-img">
               <a href="{{route('service.test_service',$lang)}}">
                  <img src="{{asset('frontend/img/default-image_450.png')}}" title="Test56">
               </a>
               <div class="save-service ">
                  <a href="javascript:void(0)" title="Saved" class="save_service" data-id="35">
                     <i class="fa fa-heart-o"></i>
                  </a>
               </div>
         </div>
         <div class="service-desc">
               <h4 class="service-title">
                  <a href="{{route('service.test_service',$lang)}}" target="_blank">Test56</a>
            </h4>
               <div class="services-cat">Accounting Solutions</div>
               <div class="price-sales-wrap">
                  <div class="ps-wrap price-wrap"><div class="amount-wrap">$2</div></div>
                  <div class="ps-wrap sales-wrap">Service Sold <span>0</span></div>
               </div>
            <div class="freelancer-details">
               <div class="media">
                     <div class="media-left media-top">
                        <div class="freelancer-img">
                           <a href="{{route('profile',$lang)}}" target="_blank">
                              <img src="{{asset('frontend/img/th2_no_user_image.png')}}" title="Ishit Tankaria" alt="Ishit Tankaria"/>
                           </a>
                        </div>
                     </div>
                     <div class="media-body media-top">
                        <h5><a href="{{route('profile',$lang)}}" target="_blank">Ishit Tankaria</a></h5>
                        <div class="user-location">India</div>
                        <p class="rating"><i class="fa fa-star"></i>4</p>
                     </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- ======== Old Data ========== -->`
   <li class="card-block" style="display: none;">
      <div class="like active ">
         <a href="javascript:void(0)" class="save_service" data-id="35"><i class="fa fa-heart-o"></i></a>
      </div>

      <div class="row ">
         <div class="col-md-12">
            <div class="featured">
               <span>
               Featured
               </span>
            </div>
         </div>
      </div>
      <div class="media">
         <div class="pull-left">
            <div class="posted_service">
               <img src="{{asset('frontend/img/default-image_450.png')}}" title="Test56">
            </div>
         </div>
         <div class="media-body">
            <div class="row">
               <div class="col-md-12">
                  <h4 class="card-title">
                     <a href="{{route('service.test_service',$lang)}}" target="_blank">Test56</a>
                  </h4>
               </div>
            </div>
            <div class="category_subcategory">
               <span>
               Accounts & Consultants
               <i class="fa fa-angle-right"></i>
               Accounting Solutions
               </span>
            </div>
            <ul class="project-desc list-inline">
               <li>
                  Price : $2
               </li>
               <li>
                  Service Sold : 0
               </li>
            </ul>
            <div class="PickGeeks_detail">
               <ul>
                  <li>
                     <div class="PickGeeks_img">
                        <img src="{{asset('frontend/img/th2_no_user_image.png')}}" title="Ishit Tankaria" alt="Ishit Tankaria">
                     </div>
                  </li>
                  <li>
                     <h5>
                        <a href="{{route('profile',$lang)}}" target="_blank">Ishit Tankaria</a>
                     </h5>
                     (Beginner)
                  </li>
                  <li>
                     <div class="star-ratings-sprite">
                        <span style="width:4%" class="star-ratings-sprite-rating">
                        </span>
                     </div>
                  </li>
                  <li class="loc">
                     <i class="fa fa-map-marker" aria-hidden="true">
                     </i>
                     India
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </li>
</section>

<script type="text/javascript">
   var url = "http://www.sukhadaam.com/demo/sawlii/ajaxServiceSearch";
   $(document).ready(function(){

      /*sorting change*/
      $(document).on("change","#sorting",function(){
         search_record(1);
      });
      /*category change*/
      $(document).on("change",".category",function(){
         var catId = $(this).val(),divId = $(this).attr("data-id");
         $.post(url,{"action":"subcateLoad",cat:catId},function(data){
            (divId=='')  ? $("#subcategory").html(data.content) : $("#Rsubcategory").html(data.content);
            search_record(1);
         },'json');
      });
      /*sub category change*/
      $(document).on("change",".subcategory",function(){
         search_record(1);
      });

      /*skill change*/

      $(document).on("change","input[type=radio]",function(){
         search_record(1);
      });

      $(document).on("keyup",".deliveryTime",function(){
         search_record(1);
      });
      $(document).on("change",".deliveryTime",function(){
         search_record(1);
      });


      $(document).on("click",".load_more_data",function()
      {
           var pageNo = $(this).attr("data-page");
           var p_no = parseInt(pageNo)+1;
           search_record(p_no,"load_append");
      });

      $(document).on("click",".search",function(){
         search_record(1);
      });

      $(document).on("change",".serviceType",function(){
         search_record(1);
      });
      /*freelancer location*/

      $(document).on("change","#location",function(){
         setTimeout(function() {
            search_record(1);
         }, 200);
      });
   });

   function search_record(p_no,loadType='load')
   {
       var query_param = $("#filters-search select").serialize()+"&"+$("#filters-search input").serialize()+"&action=load_seach_data&page_no="+p_no;
       var new_serialized_url = URI(url+'/?'+query_param),
           curr_uri = URI(window.location.href),
           new_serialized_params = new_serialized_url.search(true);

       ((new_serialized_params.category!= '' && new_serialized_params.category!=undefined) ? curr_uri.setSearch("category", new_serialized_params.category) : curr_uri.removeSearch("category"));
       ((new_serialized_params.subcategory!= '' && new_serialized_params.subcategory!=undefined) ? curr_uri.setSearch("subcategory", new_serialized_params.subcategory) : curr_uri.removeSearch("subcategory"));

       ((new_serialized_params.sorting!= '') ? curr_uri.setSearch("sorting", new_serialized_params.sorting) : curr_uri.removeSearch("sorting"));
       ((new_serialized_params.serviceType!= '') ? curr_uri.setSearch("serviceType", new_serialized_params.serviceType) : curr_uri.removeSearch("serviceType"));
       ((new_serialized_params.exp_lvl!= '' && new_serialized_params.exp_lvl!=undefined) ? curr_uri.setSearch("exp_lvl", new_serialized_params.exp_lvl) : curr_uri.removeSearch("exp_lvl"));
       ((new_serialized_params.deliveryTime!= '' && new_serialized_params.deliveryTime!= undefined) ? curr_uri.setSearch("deliveryTime", new_serialized_params.deliveryTime) : curr_uri.removeSearch("deliveryTime"));
       ((new_serialized_params.start_amount!= '' && new_serialized_params.start_amount!=undefined) ? curr_uri.setSearch("start_amount", new_serialized_params.start_amount) : curr_uri.removeSearch("start_amount"));
       ((new_serialized_params.end_amount!= '' && new_serialized_params.end_amount!= undefined) ? curr_uri.setSearch("end_amount", new_serialized_params.end_amount) : curr_uri.removeSearch("end_amount"));

       ((new_serialized_params.searchKeyword!= '' && new_serialized_params.searchKeyword!=undefined) ? curr_uri.setSearch("searchKeyword", new_serialized_params.searchKeyword) : curr_uri.removeSearch("searchKeyword"));
       ((new_serialized_params.location!= '' && new_serialized_params.location!=undefined) ? curr_uri.setSearch("location", new_serialized_params.location) : curr_uri.removeSearch("location"));

       /*responsive field*/
       ((new_serialized_params.Rstart_amount!= '' && new_serialized_params.Rstart_amount!=undefined) ? curr_uri.setSearch("Rstart_amount", new_serialized_params.Rstart_amount) : curr_uri.removeSearch("Rstart_amount"));
       ((new_serialized_params.Rend_amount!= '' && new_serialized_params.Rend_amount!= undefined) ? curr_uri.setSearch("Rend_amount", new_serialized_params.Rend_amount) : curr_uri.removeSearch("Rend_amount"));

       ((new_serialized_params.Rcategory!= '' && new_serialized_params.Rcategory!=undefined) ? curr_uri.setSearch("Rcategory", new_serialized_params.Rcategory) : curr_uri.removeSearch("Rcategory"));
       ((new_serialized_params.Rsubcategory!= '' && new_serialized_params.Rsubcategory!=undefined) ? curr_uri.setSearch("Rsubcategory", new_serialized_params.Rsubcategory) : curr_uri.removeSearch("Rsubcategory"));
       ((new_serialized_params.Rexp_lvl!= '' && new_serialized_params.Rexp_lvl!=undefined) ? curr_uri.setSearch("Rexp_lvl", new_serialized_params.Rexp_lvl) : curr_uri.removeSearch("Rexp_lvl"));
       ((new_serialized_params.RdeliveryTime!= '' && new_serialized_params.RdeliveryTime!= undefined) ? curr_uri.setSearch("RdeliveryTime", new_serialized_params.RdeliveryTime) : curr_uri.removeSearch("RdeliveryTime"));
       ((new_serialized_params.RserviceType!= '') ? curr_uri.setSearch("RserviceType", new_serialized_params.RserviceType) : curr_uri.removeSearch("RserviceType"));
       ((new_serialized_params.Rlocation!= '' && new_serialized_params.Rlocation!=undefined) ? curr_uri.setSearch("Rlocation", new_serialized_params.Rlocation) : curr_uri.removeSearch("Rlocation"));







       history.pushState({}, null, '?'+curr_uri._parts.query);
       $.ajax({
           url: url,
           type: 'POST',
           dataType: 'json',
           data: query_param,
           success : function(data)
           {
             (loadType=='load_append') ? $('#service_data').append(data.content) : $('#service_data').html(data.content);
             $(".load_more_data").addClass(data.btn);
             $(".load_more_data").attr("data-page",data.pageno);
           }
       });
   }

   /*slider search*/

   $( function() {
        $( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: "8990",
        values: [ 0, "8990" ],
        slide: function( event, ui ) {
         $( "#amount" ).val( ui.values[ 0 ]);
         $( "#amount2" ).val( ui.values[ 1 ] );
         search_record(1);
       }
     });
     $( "#amount" ).val( $( "#slider-range" ).slider( "values", 0 ) );
      $( "#amount2" ).val( $( "#slider-range" ).slider( "values", 1 ) );

    } );
   $( function() {
        $( "#slider-range2" ).slider({
        range: true,
        min: 0,
        max: "8990",
        values: [ 0, "8990" ],
        slide: function( event, ui ) {
         $( "#amount3" ).val( ui.values[ 0 ]);
         $( "#amount4" ).val(ui.values[ 1 ] );
         search_record(1);
       }
     });
     $( "#amount3" ).val( $( "#slider-range2" ).slider( "values", 0 ) );
      $( "#amount4" ).val($( "#slider-range2" ).slider( "values", 1 ) );

    } );

   /*datepicker*/

   $('.datepicker').datetimepicker({
        format: 'DD-MM-YYYY'
   })


   $('.datepicker').on('dp.change', function(e){
      search_record(1);
   });

   /*Add to favourite */
   $(document).on("click",".save_service",function(){
      $(this).find('i').removeClass("fa fa-heart-o").addClass("fa fa-heart");
      var id = $(this).attr("data-id");
      $.post(url,{"action":"saveServices","id":id},function(data){
         if(data.type == 'error')
         {
            window.location.href = "http://www.sukhadaam.com/demo/sawlii/SignIn";
            toastr[data.type](data.msg);
         }
         else
         {
            toastr[data.type](data.msg);
         }
      },'json');
   });

   /*$(".dropdown-menu li a").click(function(){
      $(this).parents(".dropdown.fix-width").find('.btn').html($(this).text() + ' <span class="caret"></span>');
      var dataVal = $(this).attr('data-url');
      var keyword = $("#keyword").val();

      window.location.href = (keyword!='') ? dataVal+"/?keyword="+keyword : dataVal+"/";
    }); */

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