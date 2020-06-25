@extends('layouts.frontend.master')
@section('title')
    Freelancer
@endsection
@section('content')

<!-- Your share button code -->
<div id="main-content">
  <script type="text/javascript" src="{{asset('frontend/js/URI2.js')}}"></script>
<!-- <div class="input-group">
   <div class="input-group-btn">
      <div class="dropdown fix-width">
         <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Freelancer
         <span class="caret"></span>
         </button>
         <ul class="dropdown-menu selected-value" aria-labelledby="dropdownMenu1">
             <li class=""><a href="javascript:;" data-value="Jobs">Jobs</a></li>
             <li class=""><a href="javascript:;" data-value="Freelancers">Freelancers</a></li>
             <li class=""><a href="javascript:;" data-value="Services">Services</a></li>
         </ul>
      </div>
   </div>
   <input class="form-control" type="text" name="searchKeyword" id="searchKeyword" placeholder="Find Freelancer" value=""/>
   <span class="input-group-btn">
      <div class="theme-button">
         <a href="javascript:void(0)" class="btn btn-block search topSearch" data-url="Freelancer" id="full"><i class="fa fa-search"></i></a>
      </div>
   </span>
</div> -->

<section class="serchbar-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="searchbar-form filters-search">
                    <form class="form" action="" method="POST" id="frmMyJobs" name="frmMyJobs">
                        <div class="input-group">
                           <span class="input-group-btn">
                              <!-- <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                               Freelancer
                              <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu selected-value" aria-labelledby="dropdownMenu1">
                                <li class=""><a href="javascript:;" data-value="Jobs">Jobs</a></li>
                                <li class=""><a href="javascript:;" data-value="Freelancers">Freelancers</a></li>
                                <li class=""><a href="javascript:;" data-value="Services">Services</a></li>
                              </ul> -->
                              <select class="btn search_type" name="search_type" id="search_type">
                                <!-- <option value="Freelancers" selected>Freelancers</option>
                                <option value="Jobs" >Jobs</option>
                                <option value="Services" >Services</option> -->
                                <option value="Freelancers" selected>Freelancers</option><option value="Jobs" >Jobs</option><option value="Services" >Services</option>
                              </select>
                           </span>
                            <!-- <input type="text" class="form-control" placeholder="Find Jobs (eg. Web Design)">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">Search</button>
                            </span> -->
                            <span class="main-input">
                              <input class="form-control" type="text" name="searchKeyword" id="searchKeyword" placeholder="Find Freelancer" value=""/>
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
                                 <a href="#" class="btn btn-primary" data-url="Freelancer" id="full"><i class="fa fa-search"></i> <span class="desktop-view">Search</span></a>
                                <!-- <button class="btn btn-primary search_record" type="button">Search</button> -->
                           </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="main-dashboard">
   <div class="container">
      <div class="" id="filters-search">
         <div class="">
            <div class="">
               <div class="job-find">
                  <div class="row">
                  </div>
               </div>
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
                                            <select class="form-control subcategory" name="subcategory" id="subcategory">
                                            <option value="">--Select Subcategory--</option><option value='Accounting Solutions'  >Accounting Solutions</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-box">
                                    <h5 class="filter-title">Experience Level</h5>
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
                                    <h5 class="filter-title">Skills</h5>
                                    <div class="filter-body">
                                        <div class="form-group">
                                             <select class="form-control" name="skills" id="skills">
                                                <option value="">--Select Skills--</option><option value='MQ==' >AngularJS Developers</option><option value='Mg==' >Android Developers</option><option value='Mw==' >Bookkeepers</option><option value='NA==' >C# Developers</option><option value='NQ==' >Content Writers</option><option value='Ng==' >Copywriters</option><option value='Nw==' >Customer Service Representatives</option><option value='OA==' >Data Entry Specialists</option><option value='OQ==' >Email Marketing Consultants</option><option value='MTA=' >Excel Experts</option><option value='MTE=' >Facebook Marketers</option><option value='MTI=' >Graphic Designers</option><option value='MTM=' >Objective-C Developers</option><option value='MTQ=' >JavaScript Developers</option><option value='MTU=' >JQuery Developers</option><option value='MTY=' >Mobile App Developers</option><option value='MTc=' >SEO Experts</option><option value='MTg=' >PHP Developers</option><option value='MTk=' >Python Developers</option><option value='MjA=' >Sales Consultants</option><option value='MjE=' >UI Designers</option><option value='MjI=' >Social Media Consultants</option><option value='MjM=' >Swift Developers</option><option value='MjQ=' >Technical Writers</option><option value='MjU=' >Wordpress Developers</option><option value='Mjc=' >Virtual Assistants</option><option value='Mjg=' >Web Designers</option><option value='Mjk=' >Writers</option><option value='MzA=' >Writer</option><option value='MzE=' >UX Designers</option><option value='MzY=' >Java</option><option value='Mzc=' >Node Js</option><option value='NDA=' >React Js</option><option value='NDQ=' >Selenium Web Driver</option><option value='NDU=' >QA Automation</option>
                                             </select>
                                          </div>
                                    </div>
                                </div>
                                <div class="filter-box mobile-view">
                                    <h5 class="filter-title">Location</h5>
                                    <div class="filter-body">
                                        <div class="location_search">
                                            <div class="form-group">
                                                <input type="text" class="form-control load_ggl_autocomplete" name="location" id="location" value=""/>
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-box">
                                    <h5 class="filter-title">Average Star Rating</h5>
                                    <div class="filter-body">
                                        <ul class="filter-lists">
                                            <div class="form-group">
                                                <input type="number" name="avg_rate" id="avg_rate" min='0' max='5' class="form-control" value="0">
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                <div class="filter-box">
                                    <h5 class="filter-title">Last Activity</h5>
                                    <div class="filter-body">
                                        <ul class="filter-lists">
                                             <li>
                                                <input type="radio" id="test33" name="last_activity" value="2M"  />
                                                <label for="test33">
                                                Within 2 month
                                                </label>
                                             </li>
                                             <li>
                                                <input type="radio" id="test34" name="last_activity" value="1M" />
                                                <label for="test34">
                                                Within 1 month
                                                </label>
                                             </li>
                                             <li>
                                                <input type="radio" id="test35" name="last_activity" value="2W" />
                                                <label for="test35">
                                                Within 2 week
                                                </label>
                                             </li>
                                             <li>
                                                <input type="radio" id="test36" name="last_activity" value="all" />
                                                <label for="test36">
                                                All
                                                </label>
                                             </li>
                                          </ul>
                                    </div>
                                </div>
                                <div class="filter-box">
                                    <h5 class="filter-title">English Level</h5>
                                    <div class="filter-body">
                                        <ul class="filter-lists">
                                             <li>
                                                <input type="radio" id="test25" name="eng_lvl" value="Basic" />
                                                <label for="test25">
                                                Basic
                                                </label>
                                             </li>
                                             <li>
                                                <input type="radio" id="test26" name="eng_lvl" value="Conversational" />
                                                <label for="test26">
                                                Conversational
                                                </label>
                                             </li>
                                             <li>
                                                <input type="radio" id="test27" name="eng_lvl" value="Fluent" />
                                                <label for="test27">
                                                Fluent
                                                </label>
                                             </li>
                                             <li>
                                                <input type="radio" id="test28" name="eng_lvl" value="Native" />
                                                <label for="test28">
                                                Native
                                                </label>
                                             </li>
                                          </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter-menu">
                        <button><i class="fa fa-sliders" aria-hidden="true"></i>Filter</button>
                    </div>
                     <div class="seperator" style="display:none"></div>
                </div>
                <div class="col-md-9 col-sm-8">
                    <div class="panel panel-default theme-box no-bg no-padding">
                        <div class="panel-heading">
                            <h4 class="panel-title">Freelancers</h4>
                            <div class="search_sort panel-tools pull-right">
                                <select class="form-control" name="sorting" id="sorting">
                                     <option name="">
                                        Sort by
                                     </option>
                                     <option value="Newest">
                                        Newest
                                     </option>
                                     <option value="lTohRatesave_freelancer">
                                        Ratings : Low to High
                                     </option>
                                     <option value="hTolRatesave_freelancer">
                                        Ratings : High to Low
                                     </option>
                                     <option value="lToHResponsesave_freelancer">
                                        Response Time : Low to High
                                     </option>
                                     <option value="hTolResponsesave_freelancer">
                                        Response Time : High to Low
                                     </option>
                                </select>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="flu-list-wrap">
                                <ul class="flu-lists" id="freelancer_data">
                                    <li class="flu-search-item pbox">
                                        <div class="pbox-body no-padding">
                                            <div class="flu-media">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <div class="flu-img">
                                                            <img src="{{asset('frontend/img/2702fee20fc43c853582857ee19cc8aa.jpeg')}}" title="Jay Stark">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="flu-title-wrap">
                                                            <h4 class="flu-title">
                                                                <a href="{{route('profile',$lang)}}">Jay Stark</a>
                                                            </h4>
                                                            <span class="flu-level">(Beginner)</span>
                                                        </div>
                                                        <div class="star-ratings-sprite">
                                                            <span style="width:100%" class="star-ratings-sprite-rating"></span>
                                                        </div>
                                                        <div class="flu-details">
                                                            <i class="fa fa-map-marker"></i> Rajkot, Gujarat, India
                                                        </div>
                                                        <ul class="flu-skills clearfix desktop-view">
                                                            <li>PHP Developers</li><li>Node Js</li><li>Selenium Web Driver</li>
                                                        </ul>
                                                        <p>Beginner</p>
                                                    </div>
                                                    <span class="like active ">
                                                        <a href="javascript:void(0)" class="save_freelancer" data-id="2"><i class="fa fa-heart-o"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flu-earning">
                                                <ul class="extra-info">
                                                    <li>
                                                        <label>Earned :</label>
                                                        <span>3270<span>$</span></span>
                                                    </li>
                                                    <li>
                                                        <label>Sold Services :</label>
                                                        <span>1</span>
                                                    </li>
                                                    <li>
                                                        <label>Completed Jobs :</label>
                                                        <span>1</span>
                                                    </li>
                                                    <li class="">
                                                        <label>Response Time : </label>
                                                        <span>42 minute(s)‎&lrm;</span>
                                                    </li>
                                                    <li>
                                                        <label>Portfolio :</label>
                                                        <span>2</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <ul class="flu-skills clearfix mobile-view">
                                                <li>PHP Developers</li><li>Node Js</li><li>Selenium Web Driver</li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="flu-search-item pbox">
                                        <div class="pbox-body no-padding">
                                            <div class="flu-media">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <div class="flu-img">
                                                            <img src="{{asset('frontend/img/c8713100888dd0988264768d1f2f5d01.jpeg')}}" title="Anna Patrick">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="flu-title-wrap">
                                                            <h4 class="flu-title">
                                                                <a href="{{route('profile',$lang)}}">Anna Patrick</a>
                                                            </h4>
                                                            <span class="flu-level">(Beginner)</span>
                                                        </div>
                                                        <div class="star-ratings-sprite">
                                                            <span style="width:100%" class="star-ratings-sprite-rating"></span>
                                                        </div>
                                                        <div class="flu-details">
                                                            <i class="fa fa-map-marker"></i> Rajkot, Gujarat, India
                                                        </div>
                                                        <ul class="flu-skills clearfix desktop-view">
                                                            
                                                        </ul>
                                                        <p>Beginner</p>
                                                    </div>
                                                    <span class="like active ">
                                                        <a href="javascript:void(0)" class="save_freelancer" data-id="4"><i class="fa fa-heart-o"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flu-earning">
                                                <ul class="extra-info">
                                                    <li>
                                                        <label>Earned :</label>
                                                        <span>1920<span>$</span></span>
                                                    </li>
                                                    <li>
                                                        <label>Sold Services :</label>
                                                        <span>1</span>
                                                    </li>
                                                    <li>
                                                        <label>Completed Jobs :</label>
                                                        <span>2</span>
                                                    </li>
                                                    <li class="">
                                                        <label>Response Time : </label>
                                                        <span>38 minute(s)‎&lrm;</span>
                                                    </li>
                                                    <li>
                                                        <label>Portfolio :</label>
                                                        <span>0</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <ul class="flu-skills clearfix mobile-view">
                                                
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="flu-search-item pbox">
                                        <div class="pbox-body no-padding">
                                            <div class="flu-media">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <div class="flu-img">
                                                            <img src="{{asset('frontend/img/df4d7fe5c3af568592113edcfad328ca.jpeg')}}" title="Karlos Doe">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="flu-title-wrap">
                                                            <h4 class="flu-title">
                                                                <a href="{{route('profile',$lang)}}">Karlos Doe</a>
                                                            </h4>
                                                            <span class="flu-level">(Beginner)</span>
                                                        </div>
                                                        <div class="star-ratings-sprite">
                                                            <span style="width:0%" class="star-ratings-sprite-rating"></span>
                                                        </div>
                                                        <div class="flu-details">
                                                            <i class="fa fa-map-marker"></i> New York, NY, USA
                                                        </div>
                                                        <ul class="flu-skills clearfix desktop-view">
                                                            
                                                        </ul>
                                                        <p>Beginner</p>
                                                    </div>
                                                    <span class="like active ">
                                                        <a href="javascript:void(0)" class="save_freelancer" data-id="6"><i class="fa fa-heart-o"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flu-earning">
                                                <ul class="extra-info">
                                                    <li>
                                                        <label>Earned :</label>
                                                        <span>0<span>$</span></span>
                                                    </li>
                                                    <li>
                                                        <label>Sold Services :</label>
                                                        <span>0</span>
                                                    </li>
                                                    <li>
                                                        <label>Completed Jobs :</label>
                                                        <span>0</span>
                                                    </li>
                                                    <li class="">
                                                        <label>Response Time : </label>
                                                        <span>32 minute(s)‎&lrm;</span>
                                                    </li>
                                                    <li>
                                                        <label>Portfolio :</label>
                                                        <span>0</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <ul class="flu-skills clearfix mobile-view">
                                                
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="view-more-button">
                              <div class="theme-button">
                                 <a href="#" class="# " data-page="1">View More Freelancer</a>
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

<script type="text/javascript">
   var url = "http://www.sukhadaam.com/demo/sawlii/ajaxFreelancerSearch";
   $(document).ready(function(){

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
      $(document).on("change","#skills",function(){
         search_record(1);
      });

       $(document).on('change',"#location",function(event) {
         setTimeout(function() {
            search_record(1);
         }, 200);
       });

       /*$(document).on("keyup","#avg_rate",function(){
         search_record(1);
      });*/
      $(document).on("change","#avg_rate",function(){
         search_record(1);
      });

      $(document).on("click",".search",function(){
         search_record(1);
      });

      $(document).on('change', 'input[name=last_activity]:radio', function(e) {
         var pageNo = $(".load_more_data").attr("data-page");
         search_record(pageNo);
      });

      $(document).on('change', 'input[name=eng_lvl]:radio', function(e) {
         var pageNo = $(".load_more_data").attr("data-page");
         search_record(pageNo);
      });
      $(document).on("change","input[type=radio]",function(){
         search_record(1);
      });

      $(document).on("click",".save_freelancer",function(){
         $(this).find('i').removeClass("fa fa-heart-o").addClass("fa fa-heart");
         var id = $(this).attr("data-id");
         $.post(url,{"action":"addToSave","id":id},function(data){
            if(data.type=="error")
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

      $(document).on("click",".load_more_data",function()
      {
           var pageNo = $(this).attr("data-page");
           var p_no = parseInt(pageNo)+1;
           search_record(p_no,"load_append");
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


       ((new_serialized_params.avg_rate!= '' && new_serialized_params.avg_rate!=undefined) ? curr_uri.setSearch("avg_rate", new_serialized_params.avg_rate) : curr_uri.removeSearch("avg_rate"));
       ((new_serialized_params.Ravg_rate!= '' && new_serialized_params.Ravg_rate!=undefined) ? curr_uri.setSearch("Ravg_rate", new_serialized_params.Ravg_rate) : curr_uri.removeSearch("Ravg_rate"));


       ((new_serialized_params.last_activity!= '' && new_serialized_params.last_activity!=undefined) ? curr_uri.setSearch("last_activity", new_serialized_params.last_activity) : curr_uri.removeSearch("last_activity"));
       ((new_serialized_params.Rlast_activity!= '' && new_serialized_params.Rlast_activity!=undefined) ? curr_uri.setSearch("Rlast_activity", new_serialized_params.Rlast_activity) : curr_uri.removeSearch("Rlast_activity"));


       ((new_serialized_params.eng_lvl!= '' && new_serialized_params.eng_lvl!=undefined) ? curr_uri.setSearch("eng_lvl", new_serialized_params.eng_lvl) : curr_uri.removeSearch("eng_lvl"));
       ((new_serialized_params.Reng_lvl!= '' && new_serialized_params.Reng_lvl!=undefined) ? curr_uri.setSearch("Reng_lvl", new_serialized_params.Reng_lvl) : curr_uri.removeSearch("Reng_lvl"));

       ((new_serialized_params.searchKeyword!= '' && new_serialized_params.searchKeyword!=undefined) ? curr_uri.setSearch("searchKeyword", new_serialized_params.searchKeyword) : curr_uri.removeSearch("searchKeyword"));



       history.pushState({}, null, '?'+curr_uri._parts.query);
       $.ajax({
           url: url,
           type: 'POST',
           dataType: 'json',
           data: query_param,
           beforeSend: function()
           {
               $('#freelancer_data').html('<div class="center_loader"><img src="http://www.sukhadaam.com/demo/sawlii/dspaces-sd/dotdot.gif" width=100 height=100/></div>');
           },
           success : function(data)
           {
             (loadType=='load_append') ? $('#freelancer_data').append(data.content) : $('#freelancer_data').html(data.content);
             (data.btn=='') ? $(".load_more_data").removeClass("hide") : $(".load_more_data").addClass(data.btn);
             $(".load_more_data").attr("data-page",data.pageno);
           },
           complete: function()
           {
               $('.center_loader').remove();
           }
       });
   }

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