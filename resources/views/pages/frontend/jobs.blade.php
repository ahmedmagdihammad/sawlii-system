@extends('layouts.frontend.master')
@section('title')
    Jobs
@endsection
@section('content')
<!-- Your share button code -->
<div id="main-content">
  
<script type="text/javascript" src="{{asset('frontend/js/URI.js')}}"></script>
<!-- Searchbar Section -->
<section class="serchbar-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="searchbar-form filters-search">
                    <form class="form" action="" method="POST" id="frmMyJobs" name="frmMyJobs">
                        <div class="input-group">
                           <span class="input-group-btn">
                              <!-- <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                               Jobs
                              <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu selected-value" aria-labelledby="dropdownMenu1">
                                <li class=""><a href="javascript:;" data-value="Jobs">Jobs</a></li>
                                <li class=""><a href="javascript:;" data-value="Freelancers">Freelancers</a></li>
                                <li class=""><a href="javascript:;" data-value="Services">Services</a></li>
                              </ul> -->
                              <select class="btn search_type" name="search_type" id="search_type">
                                <!-- <option value="Freelancers" >Freelancers</option>
                                <option value="Jobs" selected>Jobs</option>
                                <option value="Services" >Services</option> -->
                                <option value="Freelancers" >Freelancers</option><option value="Jobs" selected>Jobs</option><option value="Services" >Services</option>
                              </select>
                           </span>
                            <!-- <input type="text" class="form-control" placeholder="Find Jobs (eg. Web Design)">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">Search</button>
                            </span> -->
                            <span class="main-input">
                              <input class="form-control" type="text" name="searchKeyword" id="searchKeyword" placeholder="Find Jobs" value=""/>
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
                                 <a href="#" class="btn btn-primary " data-url="Jobs" id="full"><i class="fa fa-search"></i> <span class="desktop-view">Search</span></a>
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
         <div class="search-page">
            <div class=" service-listing-wrap">
               <div class="job-find">
                  <div class="row">
                  </div>
               </div>
               <div class="row ">
                  <div class="col-md-3 col-sm-4">
                     <div class="left-sidebar filters-search" id="sidebarMenu">
                        <div class="panel panel-default theme-box">
                           <div class="panel-heading">
                              <h3 class="panel-title">Filters</h3>
                              <div class="panel-tools pull-right">
                                 <a href="#">Clear <i class="fa fa-refresh" aria-hidden="true"></i></a>
                              </div>
                           </div>
                           <div class="panel-body">
                              <div class="filter-box">
                                 <h5 class="filter-title">
                                    Category
                                 </h5>
                                 <div class="filter-body">
                                    <div class="form-group">
                                       <select class="form-control category" name="category" id="category">
                                          <option value="">Any</option><option value='Accounts & Consultants' >Accounts & Consultants</option><option value='Graphics Designing' >Graphics Designing</option><option value='Mobile Development' >Mobile Development</option><option value='Web Developement' >Web Developement</option><option value='Virtual Assitant' >Virtual Assitant</option><option value='Testing' >Testing</option><option value='Marketing' >Marketing</option><option value='Web Designing' >Web Designing</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="filter-box">
                                 <h5 class="filter-title">
                                    Sub Category
                                 </h5>
                                 <div class="filter-body">
                                    <div class="form-group">
                                       <select class="form-control subcategory" name="subcategory" id="subcategory">
                                          <option value="">Any</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="filter-box">
                                 <h5 class="filter-title">
                                    Skills
                                 </h5>
                                 <div class="filter-body">
                                    <div class="form-group">
                                       <select class="form-control skills" name="skills" id="skills">
                                          <option value="">--Select Skills--</option><option value='MQ==' >AngularJS Developers</option><option value='Mg==' >Android Developers</option><option value='Mw==' >Bookkeepers</option><option value='NA==' >C# Developers</option><option value='NQ==' >Content Writers</option><option value='Ng==' >Copywriters</option><option value='Nw==' >Customer Service Representatives</option><option value='OA==' >Data Entry Specialists</option><option value='OQ==' >Email Marketing Consultants</option><option value='MTA=' >Excel Experts</option><option value='MTE=' >Facebook Marketers</option><option value='MTI=' >Graphic Designers</option><option value='MTM=' >Objective-C Developers</option><option value='MTQ=' >JavaScript Developers</option><option value='MTU=' >JQuery Developers</option><option value='MTY=' >Mobile App Developers</option><option value='MTc=' >SEO Experts</option><option value='MTg=' >PHP Developers</option><option value='MTk=' >Python Developers</option><option value='MjA=' >Sales Consultants</option><option value='MjE=' >UI Designers</option><option value='MjI=' >Social Media Consultants</option><option value='MjM=' >Swift Developers</option><option value='MjQ=' >Technical Writers</option><option value='MjU=' >Wordpress Developers</option><option value='Mjc=' >Virtual Assistants</option><option value='Mjg=' >Web Designers</option><option value='Mjk=' >Writers</option><option value='MzA=' >Writer</option><option value='MzE=' >UX Designers</option><option value='MzY=' >Java</option><option value='Mzc=' >Node Js</option><option value='NDA=' >React Js</option><option value='NDQ=' >Selenium Web Driver</option><option value='NDU=' >QA Automation</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="filter-box">
                                 <h5 class="filter-title">
                                    Experience Level
                                 </h5>
                                 <div class="filter-body">
                                    <ul class="filter-lists">
                                       <li>
                                          <input type="radio" id="test1" name="exp_lvl" value="all" >
                                          <label for="test1">
                                          All
                                          </label>
                                       </li>
                                       <li>
                                          <input type="radio" id="test2" name="exp_lvl" value="beginner" >
                                          <label for="test2">
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
                                          <input type="radio" id="test4" name="exp_lvl" value="pro" >
                                          <label for="test4">
                                          Pro
                                          </label>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <!-- <div class="filter-box">
                                 <h5 class="filter-title">
                                   Number of Applicants
                                 </h5>
                                 <div class="filter-body">
                                    <div class="form-group">
                                       <input type="number" name="no_applicants" id="no_applicants" min=0 value="" class="form-control" placeholder="No of Applicants">
                                    </div>
                                 </div>
                              </div> -->
                              <div class="filter-box">
                                 <h5 class="filter-title">
                                    Client Budget
                                 </h5>
                                 <div class="filter-body">
                                    <div class="range_slider">
                                       <div>
                                          <input type="text" id="#" name="#" readonly style="border:0; font-weight:bold;">
                                          <input type="text" id="#" name="#" readonly style="border:0; font-weight:bold;">
                                       </div>
                                       <div id="slider-range">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="filter-box">
                                 <h5 class="filter-title">
                                    Sort by
                                 </h5>
                                 <div class="filter-body">
                                    <div class="form-group">
                                       <select class="form-control jobType" name="jobType" id="jobType">
                                          <option value="">Select Jobs</option>
                                          <option value="featured" >
                                             Only featured job
                                          </option>
                                          <option value="new" >
                                             New jobs
                                          </option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="filter-box mobile-view">
                                 <h5 class="filter-title">
                                    Customer Location
                                 </h5>
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
                              <div class="filter-box">
                                 <h5 class="filter-title">
                                    Bidding Deadline
                                 </h5>
                                 <div class="filter-body">
                                    <div class="date-select">
                                       <div class="form-group">
                                          <label>
                                          From :
                                          </label>
                                          <input type="text" id="startdate" name="startdate" class="form-control datepicker" value="" placeholder="From date">
                                       </div>
                                       <div class="form-group">
                                          <label>
                                          To :
                                          </label>
                                          <input type="text" id="enddate" name="enddate" class="form-control datepicker" value="" placeholder="To date">
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
                        Filter
                        </button>
                     </div>
                  </div>
                  
                  <div class="col-md-9 col-sm-8">
                     <div class="cm-job-lists-wrap">
                        <div class="panel panel-default theme-box">
                           <div class="panel-heading">
                              <h3 class="panel-title">
                                 Jobs
                              </h3>
                              <div class="panel-tools pull-right">
                                 <select class="form-control" name="sorting" id="sorting">
                                    <option value=''>
                                       Sort by
                                    </option>
                                    <option value="newest" >
                                       Newest
                                    </option>
                                    <option value="lTOhRating" >
                                       Client Spending : Low to High
                                    </option>
                                    <option value="hTOlRating" >
                                       Client Spending : High to Low
                                    </option>
                                    <option value="lTohInvest" >
                                       Client Rating : Low to High
                                    </option>
                                    <option value="hTolInvest" >
                                       Client Rating : High to Low
                                    </option>
                                 </select>
                              </div>
                           </div>
                           <div class="panel-body">
                              <ul class="cm-job-item-lists my-jobs" id="job_data"><!-- class="dash-job" id="job_data" -->
                                 <div class="no-records">
                                    <div class="record-img">
                                       <img src="{{asset('frontend/img/loupe.png')}}" alt="">
                                    </div>
                                    <h2>We didn't find any results for your search</h2>
                                    <p class="search-line">To find the job you need, you can try other criterias or try again later </p>
                                 </div>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="view-more-button">
                        <div class="theme-button">
                            <a href="javascript:void(0)" class="load_more_data hide" data-page="1">View More</a>
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
   var url = "http://www.sukhadaam.com/demo/sawlii/ajaxJobSearch";
   $(document).ready(function(){

      $(document).on("click",".job_details", function(e){
         $msg = $(this).data("msg");
         toastr["error"]($msg);
         return false;
      }); 

      /*sorting change*/
      $(document).on("change","#sorting",function(){
         search_record(1);
      });
      /*category change*/
      $(document).on("change",".category",function(){
         var catId = $(this).val();
         $.post(url,{"action":"subcateLoad",cat:catId},function(data){
            $("#subcategory").html(data.content);
            search_record(1);
         },'json');
      });
      /*sub category change*/
      $(document).on("change",".subcategory",function(){
         search_record(1);
      });

      /*skill change*/
      $(document).on("change",".skills",function(){
         search_record(1);
      });
      $(document).on("change","input[type=radio]",function(){
         search_record(1);
      });
      $(document).on("keyup","#no_applicants",function(){
         search_record(1);
      });
      $(document).on("change","#no_applicants",function(){
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

      $(document).on("change",".jobType",function(){
         search_record(1);
      });

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

       ((new_serialized_params.Rcategory!= '' && new_serialized_params.Rcategory!=undefined) ? curr_uri.setSearch("Rcategory", new_serialized_params.Rcategory) : curr_uri.removeSearch("Rcategory"));
       ((new_serialized_params.Rsubcategory!= '' && new_serialized_params.Rsubcategory!=undefined) ? curr_uri.setSearch("Rsubcategory", new_serialized_params.Rsubcategory) : curr_uri.removeSearch("Rsubcategory"));


       ((new_serialized_params.skills!= '' && new_serialized_params.skills!=undefined) ? curr_uri.setSearch("skills", new_serialized_params.skills) : curr_uri.removeSearch("skills"));
       ((new_serialized_params.Rskills!= '' && new_serialized_params.Rskills!=undefined) ? curr_uri.setSearch("Rskills", new_serialized_params.Rskills) : curr_uri.removeSearch("Rskills"));

       ((new_serialized_params.sorting!= '') ? curr_uri.setSearch("sorting", new_serialized_params.sorting) : curr_uri.removeSearch("sorting"));
       ((new_serialized_params.exp_lvl!= '' && new_serialized_params.exp_lvl!=undefined) ? curr_uri.setSearch("exp_lvl", new_serialized_params.exp_lvl) : curr_uri.removeSearch("exp_lvl"));
       ((new_serialized_params.Rexp_lvl!= '' && new_serialized_params.Rexp_lvl!=undefined) ? curr_uri.setSearch("Rexp_lvl", new_serialized_params.Rexp_lvl) : curr_uri.removeSearch("Rexp_lvl"));

       ((new_serialized_params.location!= '' && new_serialized_params.location!=undefined) ? curr_uri.setSearch("location", new_serialized_params.location) : curr_uri.removeSearch("location"));
       ((new_serialized_params.Rlocation!= '' && new_serialized_params.Rlocation!=undefined) ? curr_uri.setSearch("Rlocation", new_serialized_params.Rlocation) : curr_uri.removeSearch("Rlocation"));


       ((new_serialized_params.no_applicants!= '' && new_serialized_params.no_applicants!= undefined) ? curr_uri.setSearch("no_applicants", new_serialized_params.no_applicants) : curr_uri.removeSearch("no_applicants"));
       ((new_serialized_params.Rno_applicants!= '' && new_serialized_params.Rno_applicants!= undefined) ? curr_uri.setSearch("Rno_applicants", new_serialized_params.Rno_applicants) : curr_uri.removeSearch("Rno_applicants"));

       ((new_serialized_params.start_amount!= '' && new_serialized_params.start_amount!=undefined) ? curr_uri.setSearch("start_amount", new_serialized_params.start_amount) : curr_uri.removeSearch("start_amount"));
       ((new_serialized_params.end_amount!= '' && new_serialized_params.end_amount!= undefined) ? curr_uri.setSearch("end_amount", new_serialized_params.end_amount) : curr_uri.removeSearch("end_amount"));

       ((new_serialized_params.Rstart_amount!= '' && new_serialized_params.Rstart_amount!=undefined) ? curr_uri.setSearch("Rstart_amount", new_serialized_params.Rstart_amount) : curr_uri.removeSearch("Rstart_amount"));
       ((new_serialized_params.Rend_amount!= '' && new_serialized_params.Rend_amount!= undefined) ? curr_uri.setSearch("Rend_amount", new_serialized_params.Rend_amount) : curr_uri.removeSearch("Rend_amount"));


       ((new_serialized_params.startdate!= '' && new_serialized_params.startdate!=undefined) ? curr_uri.setSearch("startdate", new_serialized_params.startdate) : curr_uri.removeSearch("startdate"));
       ((new_serialized_params.enddate!= '' && new_serialized_params.enddate!=undefined) ? curr_uri.setSearch("enddate", new_serialized_params.enddate) : curr_uri.removeSearch("enddate"));
       ((new_serialized_params.Rstartdate!= '' && new_serialized_params.Rstartdate!=undefined) ? curr_uri.setSearch("Rstartdate", new_serialized_params.Rstartdate) : curr_uri.removeSearch("Rstartdate"));
       ((new_serialized_params.Renddate!= '' && new_serialized_params.Renddate!=undefined) ? curr_uri.setSearch("Renddate", new_serialized_params.Renddate) : curr_uri.removeSearch("Renddate"));


       ((new_serialized_params.searchKeyword!= '' && new_serialized_params.searchKeyword!=undefined) ? curr_uri.setSearch("searchKeyword", new_serialized_params.searchKeyword) : curr_uri.removeSearch("searchKeyword"));
       ((new_serialized_params.jobType!= '' && new_serialized_params.jobType!=undefined) ? curr_uri.setSearch("jobType", new_serialized_params.jobType) : curr_uri.removeSearch("jobType"));
       ((new_serialized_params.RjobType!= '' && new_serialized_params.RjobType!=undefined) ? curr_uri.setSearch("RjobType", new_serialized_params.RjobType) : curr_uri.removeSearch("RjobType"));


       history.pushState({}, null, '?'+curr_uri._parts.query);
       $.ajax({
           url: url,
           type: 'POST',
           dataType: 'json',
           data: query_param,
           success : function(data)
           {
             (loadType=='load_append') ? $('#job_data').append(data.content) : $('#job_data').html(data.content);
             $(".load_more_data").addClass(data.btn);
             $(".load_more_data").attr("data-page",data.pageno);
           }
       });
   }

   $( function() {
        $( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: "10000",
        values: [ 0, "10000" ],
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
        max: 100,
        values: [ 0, 100 ],
        slide: function( event, ui ) {
         $( "#amount3" ).val( "$" + ui.values[ 0 ]);
         $( "#amount4" ).val( "  $" + ui.values[ 1 ] );
       }
     });
     $( "#amount3" ).val( "$" + $( "#slider-range2" ).slider( "values", 0 ) );
      $( "#amount4" ).val( "$" + $( "#slider-range2" ).slider( "values", 1 ) );

    } );


   $('.datepicker').datetimepicker({
        format: 'DD-MM-YYYY'
   })


   $('.datepicker').on('dp.change', function(e){
      search_record(1);
   });

   /*Add to favourite */
   $(document).on("click",".add_favourite",function(){
      $(this).find('i').removeClass("fa fa-heart-o").addClass("fa fa-heart");
      var jobId = $(this).attr("data-id");
      $.post(url,{"action":"addToFav","jobId":jobId},function(data){
         if(data.type == "error")
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