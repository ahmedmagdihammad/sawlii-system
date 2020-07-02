@extends('layouts.frontend.master')
@section('title')
    Sub Categpry
@endsection
@section('content')

<!-- Your share button code -->
<div id="main-content">
  <script type="text/javascript" src="http://www.sukhadaam.com/demo/sawlii/requires-sd/javascript-sd/URI.js"></script>
<!--start inner section-->
<div class="sub-category-section detail-section">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-4">
        <div class="box box-primary no-padding no-bg">
          <div class="box-header">
              <h3 class="box-title">All Categories</h3>
          </div>
          <div class="box-body">
            <ul class="category-listing">
              <li class="">
                <div class="sub-category-icon">
                <img src="{{asset('frontend/img/18af23c1cc67b722c3ed6f7b08cc73fb.png')}}" alt="">
                </div>
                <h4>
                <a href="{{route('sub_category',$lang)}}" class="cat_name" data-id="1">
                  Accounts & Consultants
                </a>
                </h4>
              </li><li class="">
                  <div class="sub-category-icon">
                  <img src="{{asset('frontend/img/f028563cf7716f9c9d2794591e12d5b2.png')}}" alt="">
                </div>
                <h4>
                  <a href="{{route('sub_category',$lang)}}" class="cat_name" data-id="2">
                    Graphics Designing
                  </a>
                </h4>
              </li><li class="">
                  <div class="sub-category-icon">
                  <img src="{{asset('frontend/img/2e8b38a6f5566c676d11c92a30ccd79c.png')}}" alt="">
                </div>
                <h4>
                  <a href="{{route('sub_category',$lang)}}" class="cat_name" data-id="3">
                    Mobile Development
                  </a>
                </h4>
              </li><li class="active">
                  <div class="sub-category-icon">
                  <img src="{{asset('frontend/img/18127dc0e89eb32f4deff3149da5c815.png')}}" alt="">
                </div>
                <h4>
                  <a href="{{route('sub_category',$lang)}}" class="cat_name" data-id="4">
                    Web Developement
                  </a>
                </h4>
              </li><li class="">
                  <div class="sub-category-icon">
                  <img src="{{asset('frontend/img/8e74e1ea4680b0a8cb51eab5335221bc.png')}}" alt="">
                </div>
                <h4>
                  <a href="{{route('sub_category',$lang)}}" class="cat_name" data-id="5">
                    Virtual Assitant
                  </a>
                </h4>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-9 col-sm-8">
        <div class="box box-primary no-padding no-bg">
          <div class="box-header">
              <h3 class="box-title">Web Developement</h3>
          </div>
          <div class="box-body category-body">
              <div class="row">
                <!-- <div class="col-md-3 col-sm-4">
                  <p><a href="{{route('freelancer',$lang)}}">%CAT_NAME%</a></p>
                </div> -->
                <div class="col-md-4 col-sm-6">
                  <div class="category-item">
                    <a href="{{route('freelancer',$lang)}}">
                      <div class="category-img">
                        <img src="{{asset('frontend/img/default-image_450.png')}}" alt="">
                      </div>
                      <h4>Game Development</h4>
                    </a>
                  </div>
                </div>
                <!-- <div class="col-md-3 col-sm-4">
                <p><a href="http://www.sukhadaam.com/demo/sawlii/search/freelancer/?category=Web+Developement&subcategory=Website+Development">%CAT_NAME%</a></p>
                </div> -->
                <div class="col-md-4 col-sm-6">
                  <div class="category-item">
                    <a href="{{route('freelancer',$lang)}}">
                      <div class="category-img">
                        <img src="{{asset('frontend/img/default-image_450.png')}}" alt="">
                      </div>
                      <h4>Website Development</h4>
                    </a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--end inner section-->

<script type="text/javascript">
   var url = "http://www.sukhadaam.com/demo/sawlii/ajaxCategorySearch";
   
   $(document).ready(function(){
      $(document).on("click",".search_record",function(){
         search_record(1);
      });
      $(document).on("input","#keyword",function(){
         search_record(1);
      });
   });

   function search_record(p_no,loadType='load') 
   {

       var query_param = $("#filters-search select").serialize()+"&"+$("#filters-search input").serialize()+"&action=load_seach_data&page_no="+p_no;
       var new_serialized_url = URI(url+'/?'+query_param),
           curr_uri = URI(window.location.href),
           new_serialized_params = new_serialized_url.search(true);

       ((new_serialized_params.keyword!= '' && new_serialized_params.keyword!=undefined) ? curr_uri.setSearch("keyword", new_serialized_params.keyword) : curr_uri.removeSearch("keyword"));

       history.pushState({}, null, '?'+curr_uri._parts.query);
       $.ajax({
           url: url,
           type: 'POST',
           dataType: 'json',
           data: query_param,
           success : function(data)
           {     
             (loadType=='load_append') ? $('#category_search').append(data.content) : $('#category_search').html(data.content);
             (data.btn=='') ? $(".load_more_data").removeClass("hide") : $(".load_more_data").addClass(data.btn);
             $(".load_more_data").attr("data-page",data.pageno);
           }
       });
   }

   
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