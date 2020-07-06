<script>
    $("header .navbar-default .navbar-nav>li.notification .dropdown-menu").mCustomScrollbar();       
</script>
<!-- Your share button code -->
<div id="main-content">
  <!-- Dashboard Navigation -->
    @include('pages.frontend.freelancer.nav_dashboard')
    <!-- Dashboard Navigation End -->
    <!-- Page Content -->
    <section class="main-dashboard">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard-wrap">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="personal-dashboard-wrap">
                                    <div class="box box-primary theme-box">
                                        <div class="box-body ">
                                            <div class="fl-profile-wrap media">
                                                <div class="media-left">
                                                    <div class="user-switch-wrap">
                                                        <div class="user-avatar-wrap">
                                                            <div class="user-avatar">
                                                                <img src="{{asset('frontend/img/th2_no_user_image.png')}}" class="preview_profile">
                                                            </div>
                                                            <span class="update-camera">
                                                                <a href="javascript:void(0)" id="profile_image_trigger" title="Update Profile Picture"><i class="fa fa-camera"></i></a>
                                                            </span>    
                                                        </div>
                                                        <div class="switch-wrap">
                                                            <a class="switch-btn btn-flr active" href="{{route('f_profile',$lang)}}">Freelancer</a>
                                                            <a class="switch-btn btn-ctm" href="{{route('c_profile',$lang)}}">Customer</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="user-details-wrap">
                                                        <div class="personal-details-wrap">
                                                            <div class="user-title-wrap">
                                                                <h3 class="user-name">{{Auth::user()->firstname}} {{Auth::user()->lastname }}</h3>
                                                                <div class="data_edit">
                                                                <a href="#" data-toggle="modal" data-target="#profile_name">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                </div>
                                                                <div class="star-ratings-sprite">
                                                                    <span style="width:%STAR_RATING%%" class="star-ratings-sprite-rating"></span>
                                                                </div>

                                                                <ul class="user-since-detail liststyle-none">
                                                                    <li>Member since {{date('d M,Y', strtotime(Auth::user()->created_at)) }}</li>          
                                                                    <li>Last Login {{Auth::user()->lastLogin}} hours ago</li>
                                                                </ul>
                                                                <!-- <a href="#" class="user-profile-edit">Edit <i class="fa fa-edit"></i></a> -->
                                                            </div>
                                                            <ul class="user-location-detail liststyle-none">
                                                            <li class=""><span><i class="fa fa-envelope"></i></span>{{Auth::user()->email}}</li>
                                                                <li>
                                                                <span><i class="fa fa-map-marker"></i></span>{{Auth::user()->location}}
                                                                    <div class="data_edit">
                                                                    <a href="#" data-toggle="modal" data-target="#profile_location">
                                                                    <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                </div>
                                                                </li>
                                                                <li>
                                                                <span><i class="fa fa-briefcase"></i></span>-
                                                                <div class="data_edit">
                                                                    <a href="#" data-toggle="modal" data-target="#professional_title">
                                                                    <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                </div>
                                                                </li>
                                                                <li><span><i class="fa fa fa-bookmark"></i></span>Beginner</li>
                                                                <li class="profile-share"><span><i class="fa fa-share-alt"></i></span><a href="#" data-toggle="modal" data-target="#share_link">http://www.sukhadaam.com/demo/sawlii/f/profile/fastkood-f</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="work-detail-wrap">
                                                            <ul class="work-detail-total liststyle-none">
                                                                <li>Completed Jobs : <span>0</span></li>
                                                                <li>Sold Services : <span>0</span></li>
                                                                <li>Earned : <span class="kwdamount">0<span>$</span></span></li>
                                                                <li>Response Time : <span>0 minute(s)‎&lrm;</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-lg-3">
                                <div class="dashboard-sidebar">
                                    <div class="box box-primary theme-box ">
                                        <div class="box-body">
                                            <div class="myskills-box">
                                                <h4 class="skills-title">My Skills</h4>
                                                <ul class="skills-list clearfix">
                                                        @if(empty($freelancer->skills))
                                                        @else
                                                            @foreach(explode('#',$freelancer->skills) as $skills)
                                                            <li>{{ $skills }} 
                                                                <a href="#" data-id="40" data-item-type="skill" class="delete_data remove-skill"></a>
                                                            </li>
                                                            @endforeach
                                                        @endif
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#skills" title="Add ">
                                                        Add more skills
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="myskills-box">
                                                <h4 class="skills-title">Language</h4>
                                                <ul class="skills-list clearfix">
                                                    <li>
                                                        @if(empty($freelancer->languages))
                                                        @else
                                                            {{str_replace(['{"','":"', '"}'], ['', ' - '],$languages)}}
                                                        @endif
                                                        <a href="javascript:void(0);" data-id="1" data-item-type="lang" class="delete_data remove-skill"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#languages" title="Add Language">
                                                            Add more languages
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="myskills-box">
                                                <h4 class="skills-title">Category</h4>
                                                <ul class="skills-list clearfix">
                                                        @if(empty($freelancer->categories))
                                                        @else
                                                            @foreach($subcategories as $subcategore)
                                                            @foreach(explode("#",$freelancer->categories) as $category)
                                                                @if($subcategore->id == $category)
                                                                <li>{{$subcategore->name}} 
                                                                    <a href="javascript:void(0);" data-id="1" data-item-type="lang" class="delete_data remove-skill"></a>
                                                                </li> 
                                                                @endif
                                                            @endforeach
                                                            @endforeach
                                                        @endif
                                                    <li>
                                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#categoryMofel" class="addRecord" title="Add subcategory" data-entity="categories">
                                                        Add more categories
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="myskills-box">
                                                <h4 class="skills-title">Video</h4>
                                                <ul class="skills-list clearfix">                                                
                                                    <div class="add_video">
                                                        
                                                    <a href="#" data-toggle="modal" data-target="#myModal">
                                                        Place a video
                                                    </a>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-9 col-sm-8 ">
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title">Overview</h3>
                                        <div class="box-tools pull-right">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#overview_div"></a>
                                        </div>              
                                    </div>
                                    <div id="overview_div" class="panel-collapse collapse in" >
                                        <div class="box-body" >
                                            <p>@if(empty($freelancer->overview)) @else{{$freelancer->overview}} @endif</p>
                                            <!-- <iframe id="playVideo" style="width:100%; min-height:450px;" src="wqdqwdw"></iframe> -->
                                            <div class="data_edit">
                                                <a href="#" data-toggle="modal" data-target="#overview">
                                                <i class="fa fa-pencil"></i>
                                                </a>
                                            </div>
                                        </div>              
                                    </div>
                                </div>

                                <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title">Recently Added Products</h3>
                                        <div class="box-tools pull-right">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#our-video"></a>
                                        </div>
                                    </div>
                                    <div id="our-video" class="panel-collapse collapse in" >
                                        <div class="box-body" >
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="sawlii-tabs-wrap">
                                    <ul class="nav nav-tabs" id="dasTabs">
                                        <li class="active"><a data-toggle="tab" href="#tab_1" aria-expanded="true">My Services</a></li>
                                        <li><a data-toggle="tab" href="#tab_2" aria-expanded="false">Portfolio</a></li>
                                        <li><a data-toggle="tab" href="#tab_3" aria-expanded="false">Education Details</a></li>
                                        <li><a data-toggle="tab" href="#tab_4" aria-expanded="false">Certifications</a></li>
                                        <li><a data-toggle="tab" href="#tab_5" aria-expanded="false">Experience</a></li>
                                        <li><a data-toggle="tab" href="#tab_6" aria-expanded="false">Reviews</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <!-- <div class="tab-pane fade in active" id="tab_1">
                                            <div class="panel theme-box no-bg no-padding">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">Services</h4>
                                                    <div class="panel-tools pull-right">
                                                        <a href="{{route('post_services',$lang)}}">Add More <i class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="fl-services ">
                                                    <span class='no-records'><i class='fa fa-exclamation-triangle'></i>No Records Found</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->


                                        <div class="tab-pane fade in active" id="tab_1">
                                            <div class="panel theme-box no-bg no-padding">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">Services</h4>
                                                    <div class="panel-tools pull-right">
                                                        <a href="{{route('post_services',$lang)}}">Add More <i class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                @foreach($services as $service)
                                                    <div class="fl-services ">
                                                        <div class="fl-services-item">
                                                            <div class="like active %FAV_CLASS%">
                                                                <a href="javascript:void(0)" class="save_service" data-id="39"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                            <div class="save-service %SAVE_RIGHTS%">
                                                            <a href="javascript:void(0)" title="Saved" class="save_service" data-id="39">
                                                                <i class="%SAVE_CLASS%"></i>
                                                            </a>
                                                            </div>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <div class="fl-service-thumb">
                                                                        <a href="#"><img src="{{asset($service->image)}}" title="Test service" alt="images"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="media-body fl-service-info">
                                                                    <div class="fl-service-heading">
                                                                        <a href="#"><h4 class="main-title"><a href="#" target="_blank">Test service</a></h4></a>
                                                                        <span>Delivery in 3 Day(s)&lrm;</span>
                                                                    </div>
                                                                    <div class="fl-service-price"><label>Price:</label>{{$service->price}}<span>$</span></div>
                                                                    <div class="fl-service-sort-info">{{$service->details_en}}</div>
                                                                    <div class="fls-status-wrap">
                                                                        <div class="fls-status-box">
                                                                            <span class="fls-status bg-success">DeActive</span>
                                                                            <span class="fls-post-date">Posted on : <span>{{date('d, M Y',strtotime($service->date))}}</span></span>
                                                                        </div>
                                                                        <ul class="fls-featured-edit">
                                                                            <li class="mark-ftr add-feature flps-f-item hide"  id="make_feature_39">
                                                                                <label class="sawlii-check">Mark as Featured
                                                                                    <input type="checkbox" class="hide make_featured" name="feature" id="feature" data-id="39" >
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </li>
                                                                            <li class="fls-edit"><a class="edit " href="{{ route('post_services.edit',[$lang, $service->id]) }}" title="Edit"><i class="fa fa-edit"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade " id="tab_2">
                                            <div class="panel theme-box no-bg no-padding">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">Portfolio</h4>
                                                    <div class="panel-tools pull-right">
                                                        <a href="javascript:void(0)" data-entity="add_portfolio" title="Add Portfolio" class="add_portfolio_btn addRecord">Add More<i class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="fl-portfolio "> 
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade " id="tab_3">
                                            <div class="panel  theme-box no-bg no-padding">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Educational Details</h4>
                                                <div class="panel-tools pull-right">
                                                <a href="javascript:void(0)" data-entity="add_education" title="Add Education" class="addRecord">Add More <i class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <div class="fl-edu">
                                                
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade " id="tab_4">
                                            <div class="panel theme-box no-bg no-padding">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">Certifications</h4>
                                                    <div class="panel-tools pull-right">
                                                        <a href="#" class="addRecord" data-entity="add_certificate" title="Add Certificate">Add More <i class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <ul class="fl-certi">
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab_5">
                                            <div class="panel theme-box no-bg no-padding">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">Experience</h4>
                                                    <div class="panel-tools pull-right">
                                                        <a href="javascript:void(0)" class="addRecord" data-entity="add_experience" title="Add Experience">Add More<i class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="fl-experience">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab_6">
                                            <div class="panel theme-box no-bg no-padding">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">Reviews</h4>
                                                    <div class="panel-tools pull-right">
                                                        <a href="{{route('review',$lang)}}" class="addRecord">View More<i class="fa fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <ul class="fl-avg-review clearfix">
                                                        <li class="fl-avg-review-item">
                                                            <label>Punctuality</label>
                                                            <div class="star-ratings-sprite">
                                                                <span style="width:0%" class="star-ratings-sprite-rating"></span>
                                                            </div>
                                                        </li>
                                                        <li class="fl-avg-review-item">
                                                            <label>Work Clarification</label>
                                                            <div class="star-ratings-sprite">
                                                                <span style="width:0%" class="star-ratings-sprite-rating"></span>
                                                            </div>
                                                        </li>
                                                        <li class="fl-avg-review-item">
                                                            <label>Communication</label>
                                                            <div class="star-ratings-sprite">
                                                                <span style="width:0%" class="star-ratings-sprite-rating"></span>
                                                            </div>
                                                        </li>
                                                        <li class="fl-avg-review-item">
                                                            <label>Work Quality</label>
                                                            <div class="star-ratings-sprite">
                                                                <span style="width:0%" class="star-ratings-sprite-rating"></span>
                                                            </div>
                                                        </li>
                                                        <li class="fl-avg-review-item">
                                                            <label>Expertise</label>
                                                            <div class="star-ratings-sprite">
                                                                <span style="width:0%" class="star-ratings-sprite-rating"></span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Bootstrap Accordion -->
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"></div>
                                    <!-- /Bootstrap Accordion -->
                                    </div>
                                </div>
                            </div>
                            <style type="text/css">
                                /*.edit_remove{
                                display: block!important;
                                }*/
                            </style>
                            <script type="text/javascript">

                                $(document).ready(function(){

                                    if($(window).width() <= 567){
                                    $(".all-sections-btn a").click(function(){
                                        $(".all-sections ul.nav").slideToggle();
                                    });
                                    }
                                    else{
                                    return false;
                                    }
                                    $(".all-sections ul.nav li a").click(function(){
                                    $(".all-sections ul.nav").hide();
                                    });

                                });
                                </script>

                                <script type="text/javascript">

                                $(document).ready(function(){

                                    if(($(window).width() >= 768) && ($(window).width() <= 991)){
                                    $(".all-sections-btn a").click(function(){
                                        $(".all-sections ul.nav").slideToggle();
                                    });
                                    }
                                    else{
                                    return false;
                                    }
                                    $(".all-sections ul.nav li a").click(function(){
                                    $(".all-sections ul.nav").hide();
                                    });

                                });
                                </script>
                                <script type="text/javascript">
                                $(document).on("click",".add_portfolio_btn",function(){
                                    $(".img_pre").remove();
                                    $("#projectTitle").val("");
                                    $("#projectDuration").val("");
                                    $("#project_skill_name").val("");
                                    $("#projectDesc").val("");
                                });

                                    /*Add to favourite */
                                $(document).on("click",".save_service",function(){
                                    var url = "http://www.sukhadaam.com/demo/sawlii/ajaxServiceSearch";
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


                                $(function(){
                                    var hash = window.location.hash;
                                    hash && $('ul.nav a[href="' + hash + '"]').tab('show');

                                    $('.nav-tabs a').click(function (e) {
                                    $(this).tab('show');
                                    var scrollmem = $('body').scrollTop() || $('html').scrollTop();
                                    window.location.hash = this.hash;
                                    $('html,body').scrollTop(scrollmem);
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- /.container -->
    <div class="modal fade" id="myModal" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <!-- Modal content-->
            <form method="post" action="{{route('profile.add_video',$lang)}}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Video</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label> Paste the link to your YouTube video here</label>
                            <div class="input-group">
                                <input type="text" class="form-control videoUrl" name="video" id="video">
                                
                            </div>
                            <label class="red_error link_val"></label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="theme-button">
                            <button type="submit" class="btn btn-system">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <div class="modal fade" id="skills" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <!-- Modal content-->
        <form method="post" action="{{route('profile.add_skills',$lang)}}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> Add Skill</h4>
                </div>
                <div class="modal-body">
                    <!-- <div class="form-group add-skill-form-group">
                        <input name="skills_userid" class="form-control " value="{{Auth::user()->id}}">
                    </div> -->
                    <div class="form-group add-skill-form-group">
                        <select name="skills[]" data-placeholder="Skill list" class="form-control skill_choose_skillList" multiple tabindex="4" id="#">
                            
                            <option value="React Js" >React Js</option>
                            <option value="Selenium Web Driver" >Selenium Web Driver</option>
                            <option value="QA Automation" >QA Automation</option>
                            <option value="Node Js" >Node Js</option>
                            <option value="Java" >Java</option>
                            <option value="UX Designers" >UX Designers</option>
                            <option value="Writer" >Writer</option>
                            <option value="Writers" >Writers</option>
                            <option value="Web Designers" >Web Designers</option>
                            <option value="Virtual Assistants">Virtual Assistants</option>
                            <option value="Wordpress Developers">Wordpress Developers</option>
                            <option value="Technical Writers" >Technical Writers</option>
                            <option value="JavaScript Developers" >JavaScript Developers</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="theme-button">
                        <button type="submit" class="btn btn-system">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>

    <div class="modal fade" id="languages" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <!-- Modal content-->
        <form method="post" action="{{route('profile.add_languages',$lang)}}">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Add Language</h4>
            </div>
            <div class="modal-body">

            <div class="form-group">
                <div class="form-group">
                <select data-placeholder="Language list" class="form-control" name="languages_key" id="#">
                    <option value="">--Select Language--</option>
                    <option value="Arabic">Arabic</option>
                    <option value="English">English</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                <select data-placeholder="Language list" class="form-control" name="languages_val" id="#">
                    <option value="">--Select language level--</option>
                    <option value="Basic">Basic</option>
                    <option value="Conversational">Conversational</option>
                    <option value="Fluent">Fluent</option>
                    <option value="Native">Native</option>
                </select>
                </div>
            </div>
            </div>
            <div class="modal-footer">
            <div class="theme-button">
                <button type="submit" class="btn btn-system">Save</button>
            </div>
            </div>
        </div>
        </form>
    </div>
    </div>

    <div class="modal fade" id="profile_name" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <!-- Modal content-->
        <form method="post" action="{{route('profile.update', $lang)}}">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                    <h4 class="modal-title">
                        Enter name
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label> First name </label>
                        <input type="text" name="firstname" id="firstname" value="{{Auth::user()->firstname}}" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>
                        Last name
                        </label>
                        <input type="text" name="lastname" id="lastname" value="{{Auth::user()->lastname}}" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="theme-button">
                        <button type="submit" class="btn btn-system" id="#">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>

    <div class="modal fade" id="profile_location" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <!-- Modal content-->
            <form method="post" action="{{route('profile.update', $lang)}}">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"> Location </h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control load_ggl_autocomplete" name="location" id="location" value="{{Auth::user()->location}}" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="theme-button">
                            <button type="submit" class="btn btn-system">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="UserLevel" role="dialog" tabindex="-1">
        <div class="modal-dialog">
        <!-- Modal content-->
        <form method="post" name="#" id="#">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                &times;
                </button>
                <h4 class="modal-title">
                User Experience Level
                </h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                <select class="form-control" name="userLvl">
                    <option value="f" selected>Beginner</option>
                    <option value="e" >Pro</option>
                </select>
                </div>
            </div>
            <div class="modal-footer">
                <div class="theme-button">
                <input type="hidden" name="action" id="action" value="addExpLvl">
                <button type="submit" class="btn btn-system">Save</button>
                </div>
            </div>
            </div>
        </form>
        </div>
    </div>
    <div class="modal fade" id="delete" role="dialog" data-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <!-- Modal content-->
            <form name="#" id="#" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                        &times;
                        </button>
                        <h4 class="modal-title">
                        Remove
                        </h4>
                    </div>
                    <div class="modal-body">
                        <p>
                        Are you sure you want to remove ?
                        </p>
                    </div>
                    <div class="modal-footer">                   
                    <div class="theme-button">
                        <input type="hidden" name="entityType" id="entityType" value="">
                        <input type="hidden" name="entityVal" id="entityVal" value="">
                        <input type="hidden" name="action" value="deleteRecord">
                        <button type="submit" name="deleteRecord" class="btn btn-system">Delete</button>
                    </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="portfolioSection">
    <div class="modal fade" id="#" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <!-- Modal content-->
            <form name="portfolioFrm" id="portfolioFrm" method="post" enctype="multipart/form-data">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                    &times;
                    </button>
                    <h4 class="modal-title">
                        Add Project
                    </h4>
                </div>
                <div class="modal-body add_portfolio">

                        <div class="form-group text-center">
                            <div class="file-input-wrapper">
                            <label for="upload-file" class="file-input-button">
                            Choose Image
                            </label>
                            <input id="upload-file" type="file" name="portFolioimage" class="imgData" accept="image/*" />
                            <input type="hidden" name="old_image" id="old_image" value="">
                            <img height='100' width='100' class="hide imgPrev"/>
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Project Title</label>
                            <input class="form-control" name="projectTitle" id="projectTitle" value=""/>
                        </div>
                        <div class="form-group">
                            <label>Project Duration</label>
                            <select class="form-control" name="projectDuration" id="projectDuration">
                                <option value=''>Select Duration</option>
                                <option value="1 day or less" >1 day or less</option>
                                <option value="Less than 1 week" >Less than 1 week</option>
                                <option value="1 to 2 weeks" >1 to 2 weeks</option>
                                <option value="3 to 4 weeks" >3 to 4 weeks</option>
                                <option value="1 to 6 month" >1 to 6 month</option>
                                <option value="More than 6 month" >More than 6 month</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Project Skills</label>
                            <select data-placeholder="Skill List"  class="form-control skill_choose" multiple tabindex="4" name="project_skill_name[]" id="project_skill_name"><option value=40 >React Js</option><option value=44 >Selenium Web Driver</option><option value=45 >QA Automation</option><option value=37 >Node Js</option><option value=36 >Java</option><option value=31 >UX Designers</option><option value=30 >Writer</option><option value=29 >Writers</option><option value=28 >Web Designers</option><option value=27 >Virtual Assistants</option><option value=25 >Wordpress Developers</option><option value=24 >Technical Writers</option><option value=23 >Swift Developers</option><option value=22 >Social Media Consultants</option><option value=21 >UI Designers</option><option value=20 >Sales Consultants</option><option value=19 >Python Developers</option><option value=18 >PHP Developers</option><option value=17 >SEO Experts</option><option value=16 >Mobile App Developers</option><option value=15 >JQuery Developers</option><option value=14 >JavaScript Developers</option><option value=13 >Objective-C Developers</option><option value=12 >Graphic Designers</option><option value=11 >Facebook Marketers</option><option value=10 >Excel Experts</option><option value=9 >Email Marketing Consultants</option><option value=8 >Data Entry Specialists</option><option value=7 >Customer Service Representatives</option><option value=6 >Copywriters</option><option value=5 >Content Writers</option><option value=4 >C# Developers</option><option value=3 >Bookkeepers</option><option value=2 >Android Developers</option><option value=1 >AngularJS Developers</option></select>
                        </div>
                        <div class="form-group">
                            <label>Project Description</label>
                            <textarea class="form-control" name="projectDesc" id="projectDesc"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <div class="theme-button">
                        <input type="hidden" name="action" id="action" value="addPortfolio">
                        <input type="hidden" name="id" id="id" value="">
                        <button type="submit" name="addPorfolio" id="addPorfolio" class="btn btn-system">Save</button>
                    </div>
                </div>
                </div>
            </form>
        </div>
    </div>
    </div> 

    <div class="educationSection">
    <div class="modal fade" id="add_education" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <!-- Modal content-->
            <form method="post" name="#" id="#">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                    &times;
                    </button>
                    <h4 class="modal-title">
                        Add Education
                    </h4>
                </div>
                <div class="modal-body">
                        <label class="red_error error_dur"></label>
                        <div class="form-group">
                            <label>
                            Institute
                            </label>
                            <input class="form-control" name="instituteName" id="instituteName"  value=""/>
                        </div>
                        <div class="form-group">
                            <label>
                            Date attended
                            </label>
                            <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <select class="form-control" name="start_year" id="start_year">
                                    <option value="">--Select Year--</option><option value='2020' >2020</option><option value='2019' >2019</option><option value='2018' >2018</option><option value='2017' >2017</option><option value='2016' >2016</option><option value='2015' >2015</option><option value='2014' >2014</option><option value='2013' >2013</option><option value='2012' >2012</option><option value='2011' >2011</option><option value='2010' >2010</option><option value='2009' >2009</option><option value='2008' >2008</option><option value='2007' >2007</option><option value='2006' >2006</option><option value='2005' >2005</option><option value='2004' >2004</option><option value='2003' >2003</option><option value='2002' >2002</option><option value='2001' >2001</option><option value='2000' >2000</option><option value='1999' >1999</option><option value='1998' >1998</option><option value='1997' >1997</option><option value='1996' >1996</option><option value='1995' >1995</option><option value='1994' >1994</option><option value='1993' >1993</option><option value='1992' >1992</option><option value='1991' >1991</option><option value='1990' >1990</option><option value='1989' >1989</option><option value='1988' >1988</option><option value='1987' >1987</option><option value='1986' >1986</option><option value='1985' >1985</option><option value='1984' >1984</option><option value='1983' >1983</option><option value='1982' >1982</option><option value='1981' >1981</option><option value='1980' >1980</option><option value='1979' >1979</option><option value='1978' >1978</option><option value='1977' >1977</option><option value='1976' >1976</option><option value='1975' >1975</option><option value='1974' >1974</option><option value='1973' >1973</option><option value='1972' >1972</option><option value='1971' >1971</option><option value='1970' >1970</option><option value='1969' >1969</option><option value='1968' >1968</option><option value='1967' >1967</option><option value='1966' >1966</option><option value='1965' >1965</option><option value='1964' >1964</option><option value='1963' >1963</option><option value='1962' >1962</option><option value='1961' >1961</option><option value='1960' >1960</option><option value='1959' >1959</option><option value='1958' >1958</option><option value='1957' >1957</option><option value='1956' >1956</option><option value='1955' >1955</option><option value='1954' >1954</option><option value='1953' >1953</option><option value='1952' >1952</option><option value='1951' >1951</option><option value='1950' >1950</option><option value='1949' >1949</option><option value='1948' >1948</option><option value='1947' >1947</option><option value='1946' >1946</option><option value='1945' >1945</option><option value='1944' >1944</option><option value='1943' >1943</option><option value='1942' >1942</option><option value='1941' >1941</option><option value='1940' >1940</option><option value='1939' >1939</option><option value='1938' >1938</option><option value='1937' >1937</option><option value='1936' >1936</option><option value='1935' >1935</option><option value='1934' >1934</option><option value='1933' >1933</option><option value='1932' >1932</option><option value='1931' >1931</option><option value='1930' >1930</option><option value='1929' >1929</option><option value='1928' >1928</option><option value='1927' >1927</option><option value='1926' >1926</option><option value='1925' >1925</option><option value='1924' >1924</option><option value='1923' >1923</option><option value='1922' >1922</option><option value='1921' >1921</option><option value='1920' >1920</option><option value='1919' >1919</option><option value='1918' >1918</option><option value='1917' >1917</option><option value='1916' >1916</option><option value='1915' >1915</option><option value='1914' >1914</option><option value='1913' >1913</option><option value='1912' >1912</option><option value='1911' >1911</option><option value='1910' >1910</option><option value='1909' >1909</option><option value='1908' >1908</option><option value='1907' >1907</option><option value='1906' >1906</option><option value='1905' >1905</option><option value='1904' >1904</option><option value='1903' >1903</option><option value='1902' >1902</option><option value='1901' >1901</option><option value='1900' >1900</option>
                                </select>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <select class="form-control" name="end_year" id="end_year">
                                    <option value="">--Select Year--</option><option value='2020' >2020</option><option value='2019' >2019</option><option value='2018' >2018</option><option value='2017' >2017</option><option value='2016' >2016</option><option value='2015' >2015</option><option value='2014' >2014</option><option value='2013' >2013</option><option value='2012' >2012</option><option value='2011' >2011</option><option value='2010' >2010</option><option value='2009' >2009</option><option value='2008' >2008</option><option value='2007' >2007</option><option value='2006' >2006</option><option value='2005' >2005</option><option value='2004' >2004</option><option value='2003' >2003</option><option value='2002' >2002</option><option value='2001' >2001</option><option value='2000' >2000</option><option value='1999' >1999</option><option value='1998' >1998</option><option value='1997' >1997</option><option value='1996' >1996</option><option value='1995' >1995</option><option value='1994' >1994</option><option value='1993' >1993</option><option value='1992' >1992</option><option value='1991' >1991</option><option value='1990' >1990</option><option value='1989' >1989</option><option value='1988' >1988</option><option value='1987' >1987</option><option value='1986' >1986</option><option value='1985' >1985</option><option value='1984' >1984</option><option value='1983' >1983</option><option value='1982' >1982</option><option value='1981' >1981</option><option value='1980' >1980</option><option value='1979' >1979</option><option value='1978' >1978</option><option value='1977' >1977</option><option value='1976' >1976</option><option value='1975' >1975</option><option value='1974' >1974</option><option value='1973' >1973</option><option value='1972' >1972</option><option value='1971' >1971</option><option value='1970' >1970</option><option value='1969' >1969</option><option value='1968' >1968</option><option value='1967' >1967</option><option value='1966' >1966</option><option value='1965' >1965</option><option value='1964' >1964</option><option value='1963' >1963</option><option value='1962' >1962</option><option value='1961' >1961</option><option value='1960' >1960</option><option value='1959' >1959</option><option value='1958' >1958</option><option value='1957' >1957</option><option value='1956' >1956</option><option value='1955' >1955</option><option value='1954' >1954</option><option value='1953' >1953</option><option value='1952' >1952</option><option value='1951' >1951</option><option value='1950' >1950</option><option value='1949' >1949</option><option value='1948' >1948</option><option value='1947' >1947</option><option value='1946' >1946</option><option value='1945' >1945</option><option value='1944' >1944</option><option value='1943' >1943</option><option value='1942' >1942</option><option value='1941' >1941</option><option value='1940' >1940</option><option value='1939' >1939</option><option value='1938' >1938</option><option value='1937' >1937</option><option value='1936' >1936</option><option value='1935' >1935</option><option value='1934' >1934</option><option value='1933' >1933</option><option value='1932' >1932</option><option value='1931' >1931</option><option value='1930' >1930</option><option value='1929' >1929</option><option value='1928' >1928</option><option value='1927' >1927</option><option value='1926' >1926</option><option value='1925' >1925</option><option value='1924' >1924</option><option value='1923' >1923</option><option value='1922' >1922</option><option value='1921' >1921</option><option value='1920' >1920</option><option value='1919' >1919</option><option value='1918' >1918</option><option value='1917' >1917</option><option value='1916' >1916</option><option value='1915' >1915</option><option value='1914' >1914</option><option value='1913' >1913</option><option value='1912' >1912</option><option value='1911' >1911</option><option value='1910' >1910</option><option value='1909' >1909</option><option value='1908' >1908</option><option value='1907' >1907</option><option value='1906' >1906</option><option value='1905' >1905</option><option value='1904' >1904</option><option value='1903' >1903</option><option value='1902' >1902</option><option value='1901' >1901</option><option value='1900' >1900</option>
                                </select>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>
                            Degree
                            </label>
                            <input class="form-control" name="degree" id="degree"  value=""/>
                        </div>
                        <div class="form-group">
                            <label>
                            Area of study
                            </label>
                            <input class="form-control" name="study" id="study" value=""/>
                        </div>
                        <div class="form-group">

                            <label>
                            Description
                            </label>
                            <textarea class="form-control" name="desc" id="desc"></textarea>
                        </div>

                </div>
                <div class="modal-footer">
                    <!-- <div class="theme-button-default">
                        <a href="#" data-dismiss="modal">Cancel</a>
                    </div> -->
                    <div class="theme-button">
                        <input type="hidden" name="action" id="action" value="addEducation">
                        <input type="hidden" name="id" id="id" value="">
                        <button type="submit" name="addEducation" id="addEducation" class="btn btn-system">Save</button>
                    </div>
                </div>
                </div>
        </form>
        </div>
    </div>
    </div> 

    <div class="certificateSection">
    <div class="modal fade" id="#" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <!-- Modal content-->
        <form method="post" name="certificateFrm" id="certificateFrm">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                &times;
                </button>
                <h4 class="modal-title">
                    Add Certificate
                </h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>
                        Certificate
                        </label>
                        <input class="form-control" name="certiName" id="certiName" value=""/>
                    </div>
                </div>
                <div class="modal-footer">
                <div class="theme-button">
                    <input type="hidden" name="action" id="action" value="addCertification">
                    <input type="hidden" name="id" id="id" value="">
                    <button type="submit" name="addCertification" id="addCertification" class="btn btn-system">Save</button>
                </div>
                </div>
            </div>
        </form>
        </div>
    </div>
    </div> 

    <div class="expSection">
    <div class="modal fade" id="#" role="dialog" tabindex="-1">
        <div class="modal-dialog">
        <form method="post" name="experienceform" id="experienceform">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    ×
                </button>
                <h4 class="modal-title">
                    Add Experience
                </h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>
                            Company Name
                        </label>
                        <input class="form-control"  name="cmp_nm" id="cmp_nm" value="">
                    </div>
                    <div class="form-group">
                        <label>
                            Location
                        </label>
                        <input type="text" name="location" id="location" class="form-control load_ggl_autocomplete" value="">
                    </div>
                    <div class="form-group">
                        <label>
                            Title
                        </label>
                        <input class="form-control" name="title" id="title" value="">
                    </div>
                    <div class="form-group">
                        <label>
                            Experience Duration
                        </label>
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                            <label>From</label>
                            <select name="start_month" id="start_month" class="form-control">
                                <option value="">--Select Month--</option><option value='January' >January</option><option value='February' >February</option><option value='March' >March</option><option value='April' >April</option><option value='May' >May</option><option value='June' >June</option><option value='July' >July</option><option value='August' >August</option><option value='September' >September</option><option value='October' >October</option><option value='November' >November</option><option value='December' >December</option>
                            </select>
                            </div>
                            <div class="col-md-3 col-sm-3">
                            <label>&nbsp;</label>
                            <select name="start_yr" id="start_yr" class="form-control">
                                <option value="">--Select Year--</option><option value='2020' >2020</option><option value='2019' >2019</option><option value='2018' >2018</option><option value='2017' >2017</option><option value='2016' >2016</option><option value='2015' >2015</option><option value='2014' >2014</option><option value='2013' >2013</option><option value='2012' >2012</option><option value='2011' >2011</option><option value='2010' >2010</option><option value='2009' >2009</option><option value='2008' >2008</option><option value='2007' >2007</option><option value='2006' >2006</option><option value='2005' >2005</option><option value='2004' >2004</option><option value='2003' >2003</option><option value='2002' >2002</option><option value='2001' >2001</option><option value='2000' >2000</option><option value='1999' >1999</option><option value='1998' >1998</option><option value='1997' >1997</option><option value='1996' >1996</option><option value='1995' >1995</option><option value='1994' >1994</option><option value='1993' >1993</option><option value='1992' >1992</option><option value='1991' >1991</option><option value='1990' >1990</option><option value='1989' >1989</option><option value='1988' >1988</option><option value='1987' >1987</option><option value='1986' >1986</option><option value='1985' >1985</option><option value='1984' >1984</option><option value='1983' >1983</option><option value='1982' >1982</option><option value='1981' >1981</option><option value='1980' >1980</option><option value='1979' >1979</option><option value='1978' >1978</option><option value='1977' >1977</option><option value='1976' >1976</option><option value='1975' >1975</option><option value='1974' >1974</option><option value='1973' >1973</option><option value='1972' >1972</option><option value='1971' >1971</option><option value='1970' >1970</option><option value='1969' >1969</option><option value='1968' >1968</option><option value='1967' >1967</option><option value='1966' >1966</option><option value='1965' >1965</option><option value='1964' >1964</option><option value='1963' >1963</option><option value='1962' >1962</option><option value='1961' >1961</option><option value='1960' >1960</option><option value='1959' >1959</option><option value='1958' >1958</option><option value='1957' >1957</option><option value='1956' >1956</option><option value='1955' >1955</option><option value='1954' >1954</option><option value='1953' >1953</option><option value='1952' >1952</option><option value='1951' >1951</option><option value='1950' >1950</option><option value='1949' >1949</option><option value='1948' >1948</option><option value='1947' >1947</option><option value='1946' >1946</option><option value='1945' >1945</option><option value='1944' >1944</option><option value='1943' >1943</option><option value='1942' >1942</option><option value='1941' >1941</option><option value='1940' >1940</option><option value='1939' >1939</option><option value='1938' >1938</option><option value='1937' >1937</option><option value='1936' >1936</option><option value='1935' >1935</option><option value='1934' >1934</option><option value='1933' >1933</option><option value='1932' >1932</option><option value='1931' >1931</option><option value='1930' >1930</option><option value='1929' >1929</option><option value='1928' >1928</option><option value='1927' >1927</option><option value='1926' >1926</option><option value='1925' >1925</option><option value='1924' >1924</option><option value='1923' >1923</option><option value='1922' >1922</option><option value='1921' >1921</option><option value='1920' >1920</option><option value='1919' >1919</option><option value='1918' >1918</option><option value='1917' >1917</option><option value='1916' >1916</option><option value='1915' >1915</option><option value='1914' >1914</option><option value='1913' >1913</option><option value='1912' >1912</option><option value='1911' >1911</option><option value='1910' >1910</option><option value='1909' >1909</option><option value='1908' >1908</option><option value='1907' >1907</option><option value='1906' >1906</option><option value='1905' >1905</option><option value='1904' >1904</option><option value='1903' >1903</option><option value='1902' >1902</option><option value='1901' >1901</option><option value='1900' >1900</option>
                            </select>
                            </div>

                            <div class="col-md-3 col-sm-3">
                            <label>To</label>
                            <select name="end_month" id="end_month" class="form-control">
                                <option value="">--Select Month--</option><option value='January' >January</option><option value='February' >February</option><option value='March' >March</option><option value='April' >April</option><option value='May' >May</option><option value='June' >June</option><option value='July' >July</option><option value='August' >August</option><option value='September' >September</option><option value='October' >October</option><option value='November' >November</option><option value='December' >December</option>
                            </select>
                            </div>
                            <div class="col-md-3 col-sm-3">
                            <label>&nbsp;</label>
                            <select name="end_yr" id="end_yr" class="form-control">
                                <option value="">--Select Year--</option><option value='2020' >2020</option><option value='2019' >2019</option><option value='2018' >2018</option><option value='2017' >2017</option><option value='2016' >2016</option><option value='2015' >2015</option><option value='2014' >2014</option><option value='2013' >2013</option><option value='2012' >2012</option><option value='2011' >2011</option><option value='2010' >2010</option><option value='2009' >2009</option><option value='2008' >2008</option><option value='2007' >2007</option><option value='2006' >2006</option><option value='2005' >2005</option><option value='2004' >2004</option><option value='2003' >2003</option><option value='2002' >2002</option><option value='2001' >2001</option><option value='2000' >2000</option><option value='1999' >1999</option><option value='1998' >1998</option><option value='1997' >1997</option><option value='1996' >1996</option><option value='1995' >1995</option><option value='1994' >1994</option><option value='1993' >1993</option><option value='1992' >1992</option><option value='1991' >1991</option><option value='1990' >1990</option><option value='1989' >1989</option><option value='1988' >1988</option><option value='1987' >1987</option><option value='1986' >1986</option><option value='1985' >1985</option><option value='1984' >1984</option><option value='1983' >1983</option><option value='1982' >1982</option><option value='1981' >1981</option><option value='1980' >1980</option><option value='1979' >1979</option><option value='1978' >1978</option><option value='1977' >1977</option><option value='1976' >1976</option><option value='1975' >1975</option><option value='1974' >1974</option><option value='1973' >1973</option><option value='1972' >1972</option><option value='1971' >1971</option><option value='1970' >1970</option><option value='1969' >1969</option><option value='1968' >1968</option><option value='1967' >1967</option><option value='1966' >1966</option><option value='1965' >1965</option><option value='1964' >1964</option><option value='1963' >1963</option><option value='1962' >1962</option><option value='1961' >1961</option><option value='1960' >1960</option><option value='1959' >1959</option><option value='1958' >1958</option><option value='1957' >1957</option><option value='1956' >1956</option><option value='1955' >1955</option><option value='1954' >1954</option><option value='1953' >1953</option><option value='1952' >1952</option><option value='1951' >1951</option><option value='1950' >1950</option><option value='1949' >1949</option><option value='1948' >1948</option><option value='1947' >1947</option><option value='1946' >1946</option><option value='1945' >1945</option><option value='1944' >1944</option><option value='1943' >1943</option><option value='1942' >1942</option><option value='1941' >1941</option><option value='1940' >1940</option><option value='1939' >1939</option><option value='1938' >1938</option><option value='1937' >1937</option><option value='1936' >1936</option><option value='1935' >1935</option><option value='1934' >1934</option><option value='1933' >1933</option><option value='1932' >1932</option><option value='1931' >1931</option><option value='1930' >1930</option><option value='1929' >1929</option><option value='1928' >1928</option><option value='1927' >1927</option><option value='1926' >1926</option><option value='1925' >1925</option><option value='1924' >1924</option><option value='1923' >1923</option><option value='1922' >1922</option><option value='1921' >1921</option><option value='1920' >1920</option><option value='1919' >1919</option><option value='1918' >1918</option><option value='1917' >1917</option><option value='1916' >1916</option><option value='1915' >1915</option><option value='1914' >1914</option><option value='1913' >1913</option><option value='1912' >1912</option><option value='1911' >1911</option><option value='1910' >1910</option><option value='1909' >1909</option><option value='1908' >1908</option><option value='1907' >1907</option><option value='1906' >1906</option><option value='1905' >1905</option><option value='1904' >1904</option><option value='1903' >1903</option><option value='1902' >1902</option><option value='1901' >1901</option><option value='1900' >1900</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>
                            Description
                        </label>

                        <textarea name="desc" id="desc" class="form-control"></textarea>

                    </div>
                    <div class="form-group">
                        <label class="signin-check">I currently work here
                            <input type="checkbox" name="Current" id="Current" value="y" >
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                <!-- <div class="theme-button-default">
                    <a href="#" data-dismiss="modal">Cancel</a>
                </div> -->
                <div class="theme-button">
                    <input type="hidden" name="action" id="action" value="addExp">
                    <input type="hidden" name="id" id="id" value="">
                    <button type="submit" name="addExperience" id="addExperience" class="btn btn-system">Save</button>
                </div>
                </div>
            </div>
        </form>
        </div>
    </div>
    </div> 

    <div class="modal fade" id="categoryMofel" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <!-- Modal content-->
            <form method="post" action="{{route('profile.add_categories',$lang)}}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Sub Categories</h4>
                    </div>
                    <div class="modal-body">
                        @foreach($categories as $category)
                        <div class="cat-subcat">
                            <h4>{{$category->name}}</h4>
                            <div class="row">
                                @foreach($category->subCategory as $subcateg)
                                <div class="col-md-6">
                                    <label class="signin-check">&nbsp;{{$subcateg->name}}
                                        @if(!empty($freelancer->categories))
                                        @foreach(explode("#",$freelancer->categories) as $category)
                                            @if($subcateg->id == $category)
                                            <input type="checkbox" name="categories[]" value="#{{$subcateg->id}}#" checked>
                                            @else
                                            <input type="checkbox" name="categories[]" value="#{{$subcateg->id}}#" >
                                            @endif
                                        @endforeach
                                        @else
                                            <input type="checkbox" name="categories[]" value="#{{$subcateg->id}}#" >
                                        @endif
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                @endforeach
                            </div> 
                        </div>
                        @endforeach
                    </div>
                    <div class="modal-footer">
                        <div class="theme-button-default">
                            <a href="#" data-dismiss="modal">Cancel</a>
                        </div>
                        <div class="theme-button">
                            <button type="submit" class="btn btn-system">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="overview" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <!-- Modal content-->
            <form method="post" action="{{route('profile.add_overview',$lang)}}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                        &times;
                        </button>
                        <h4 class="modal-title">
                        Overview
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <textarea class="form-control" rows="5" name="overview" id="overview" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="theme-button-default">
                        <a href="#" data-dismiss="modal">Cancel</a>
                        </div>
                        <div class="theme-button">
                        <button type="submit" class="btn btn-system">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div> 
    <div class="modal fade" id="professional_title" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <!-- Modal content-->
            <form method="post" name="proFrm" id="proFrm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                        &times;
                        </button>
                        <h4 class="modal-title">
                        Professional Title
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                                <textarea class="form-control" rows="3" name="professional_title" id="professional_title_tarea"></textarea>
                        </div>
                        <div class="form-group text-right">
                                    <label class="red_error char_cnt"><strong>100</strong></label> <span> characters remaining</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="theme-button-default">
                        <a href="#" data-dismiss="modal">Cancel</a>
                        </div>
                        <div class="theme-button">
                            <input type="hidden" name="action" value="addTitle">
                            <button type="submit" name="addTitle" id="addTitle" class="btn btn-system">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div> 
    <div class="modal fade" id="share_link" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <!-- Modal content-->
            <form method="post" name="share_linkFrm" id="share_linkFrm">
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                    &times;
                    </button>
                    <h4 class="modal-title">
                        Share link
                    </h4>
                    </div>
                    <div class="modal-body">
                    
                        <div class="form-group">
                            <strong class="control-label">Link</strong>
                            : <label>http://www.sukhadaam.com/demo/sawlii/f/profile/fastkood-f</label>
                        </div>
                    
                    <div class="share_fg">
                        <ul class="list-inline">
                            <li>
                                <!-- <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> -->
                                <a href="javascript:void(0);" class="wbshare-icon facebook" onclick="window.open({{route('my_profile',$lang)}})" title="Share Via Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <!-- <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> -->
                                <a href="{{route('my_profile',$lang)}}" class="google" onclick="javascript:window.open(this.href, 'http://www.sukhadaam.com/demo/sawlii/f/profile/fastkood-f', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" title="Share Via Google"><i class="fa fa-google-plus"></i></a>
                            </li>
                        </ul>
                    </div>
                    </div>
                    <!-- <div class="modal-footer">
                    <div class="theme-button-default">
                        <a href="#" data-dismiss="modal">Cancel</a>
                    </div>
                    <div class="theme-button">
                        <input type="hidden" name="action" id="action" value="addlink">
                        <button type="submit" name="addLink" id="addLink" class="btn btn-system">Save</button>
                    </div>
                    </div> -->
                </div>
            </form>
        </div>
    </div>

<script>
    $("#dashboardMenu").click(function(){
        $("#mySidenav").css("left","0px");
         $("#mySidenav").addClass("open");
    });
    $("#mySidenav .closebtn").click(function(){
        $("#mySidenav").css("left","-250px");
        $("#mySidenav").removeClass("open");
    });
    $(document).ready(function(){
        getAccordion("#dasTabs",992);
        $(".profile-button").click(function(){
           $(".edit_remove").toggle();
           $(".edit_img").toggle();
        });
        $(".skill_choose").select2({
          tags:true,
          dropdownParent: $('#add_portfolio')
        });

        $(".skill_choose_skillList").select2({
          tags:true,
          dropdownParent: $('#skills')
        });
        $(".language_choose").select2({});

        $(document).on("click",".videoPlay",function(e){
          var exp = new RegExp("^(http[s]?:\\/\\/(www\\.)?){1}([0-9A-Za-z-\\.@:%_\+~#=]+)+((\\.[a-zA-Z]{2,3})+)(/(.)*)?(\\?(.)*)?");                  
          if(exp.test(url))
          {                 
            var url = $("#videoUrl").val();
            if(url=="" || url==null){
              $(".link_val").html("Please use valid src value from your embed code iframe.");
              return false;
            }
            var new_url;
            if (url.indexOf("iframe")>0){

              $("#videoUrl").val("");
              toastr["error"]("Invalid Format for video URL. Try Using embed code iframe's src value only.");
              return false;
            }
            else if(url.indexOf("youtube")>0 && url.indexOf("watch")>0){

              new_url = url.split("=");
              url=new_url[1];
              url = "https://www.youtube.com/embed/"+url;
              $("#videoUrl").val(url);
            }
            else if(url.indexOf("/vimeo")>0){

              new_url = url.split("/");

              url=new_url[3];
              url = "https://player.vimeo.com/video/"+url;
              $("#videoUrl").val(url);
            }
            $("#playVideo").attr("src",url);
            return false;
          }
          else
          { 
              $(".link_val").html("Please use valid src value from your embed code iframe.");
              return false;
          }
          
        });

        function readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
              $('.imgPrev').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
          }
        }
        $(".imgData").change(function(){
          readURL(this);
          $('.imgPrev').removeClass("hide");
        });

        $(document).on("click",".btnSaveVideo",function(e){
          var url = $("#videoUrl").val();
          if(url=="" || url==null){
            $(".link_val").html("Please use valid src value from your embed code iframe.");
            return false;
          }
          if (~url.indexOf("iframe")){
            $(".link_val").html("Invalid Format for video URL. Try Using embed code iframe's src value only..");
            return false;
          }
          $("#playVideo").attr("src",url);
          $("#videoFrm").submit();

        });

        $('.modal').on('hidden.bs.modal', function () {
          var _this = $(this);
          var form = _this.find('form');
          var form_id = _this.find('form').attr('id');
          form[0].reset();

          $('#'+form_id+' .form-group').each(function(index, element) {
            if($(element).hasClass('has-error')) {
              $(element).removeClass('has-error')
            }
          });

          $('#'+form_id+' .help-block').each(function(index, element) {
            $(element).remove();
          });
        });

        jQuery.validator.addMethod("startingSpaceNotAllow", function(value, element)
        {
          return this.optional(element) || /^\S.*$/.test(value);
        }, "Space is not allowed");

        $(document).on("click","#addPorfolio",function(){
            $("#portfolioFrm").validate({
              ignore: [],
              errorClass: 'help-block',
              errorElement: 'label',
              highlight: function (element)
              {
                $(element).closest('.form-group').addClass('has-error');
              },
              unhighlight: function (element)
              {
                $(element).closest('.form-group').removeClass('has-error');
              },
              rules:
              {
                portFolioimage:{extension: "jpg|jpeg|png|JPG|JPEG|PNG"},
                projectTitle:{required:true,minlength:2,startingSpaceNotAllow:true,
                  normalizer: function(value) {
                    value = value.replace("something", "new thing");
                    return $.trim(value);
                  }
                },
                projectDuration:{required:true},
                'project_skill_name[]':{required:true},
                projectDesc:
                {
                  required:true, startingSpaceNotAllow:true,startingSpaceNotAllow:true,
                  normalizer: function(value) {
                    value = value.replace("something", "new thing");
                    return $.trim(value);
                  }
                }
              },

              messages:
              {
                portFolioimage:{extension:"Please select valid image"},
                projectTitle:{required:"Please enter project title"},
                projectDuration:{required:"Please enter project duration"},
                'project_skill_name[]': { required:"Please select skill"},
                projectDesc:{required:"Please enter project description"}
              },
              errorPlacement: function(error, element) {
                if (element.attr("name") == "project_skill_name[]" )
                  error.insertAfter(".selection");
                else
                  error.insertAfter(element);
              },
              unhighlight: function (element, errorClass, validClass) {
                var elem = $(element);
                if (elem.hasClass('select2-offscreen')) {
                  $('#s2id_' + elem.attr('id') + ' ul').removeClass(errorClass);
                } else {
                  elem.removeClass(errorClass);
                }
              }

            });
            if($("#portfolioFrm").valid()){
                addOverlay();
                $("#portfolioFrm").submit();
            }
        });
        $(document).on("click","#saveLang",function(){
            $("#langFrm").validate({
              ignore: [],
              errorClass: 'help-block',
              errorElement: 'label',
              highlight: function (element)
              {
                $(element).closest('.form-group').addClass('has-error');
              },
              unhighlight: function (element)
              {
                $(element).closest('.form-group').removeClass('has-error');
              },
              rules:
              {
                language_type:{required:true},
                language_name:{required:true}
              },
              messages:
              {
                language_type:{required:"Please select language type"},
                language_name:{required:"Please select language"}
              },
            });
            if($("#langFrm").valid())
            {
              addOverlay();
              $("#langFrm").submit();
            }
        });
        $(document).on("click","#addCertification",function(){
            $("#certificateFrm").validate({
              ignore: [],
              errorClass: 'help-block',
              errorElement: 'label',
              highlight: function (element)
              {
                $(element).closest('.form-group').addClass('has-error');
              },
              unhighlight: function (element)
              {
                $(element).closest('.form-group').removeClass('has-error');
              },
              rules:
              {
                certiName:{required:true,
                  normalizer: function(value) {
                    value = value.replace("something", "new thing");
                    return $.trim(value);
                  }
                }
              },
              messages:
              {
                certiName:{required:"Please enter certificate name"}
              },
            });
            if($("#certificateFrm").valid())
            {
                addOverlay();
                $("#certificateFrm").submit();
            }
        });
        $(document).on("click","#addEducation",function(){
            $("#educationFrm").validate({
              ignore: [],
              errorClass: 'help-block',
              errorElement: 'label',
              highlight: function (element)
              {
                $(element).closest('.form-group').addClass('has-error');
              },
              unhighlight: function (element)
              {
                $(element).closest('.form-group').removeClass('has-error');
              },
              rules:
              {
                instituteName:{required:true,
                  normalizer: function(value) {
                    value = value.replace("something", "new thing");
                    return $.trim(value);
                  }
                },
                start_year:{required:true},
                end_year:{required:true,min:$("#start_year").val()},
                degree:{required:true},
                study:{required:true},
                desc:{required:true,
                  normalizer: function(value) {
                    value = value.replace("something", "new thing");
                    return $.trim(value);
                  }
                }
              },
              messages:
              {
                instituteName:{required:"Please enter institute name"},
                start_year:{required:"Please enter start year"},
                end_year:{required:"Please enter end year"},
                degree:{required:"Please enter degree"},
                study:{required:"Please enter study"},
                desc:{required:"Please enter description"}
              },
            });
            if($("#educationFrm").valid())
            {
               addOverlay();
               $("#educationFrm").submit();
            }
        });
    });

    $(".edit_button").click(function(){
        $(".edit_remove").toggle();
    });
</script>
<script>      
    $(document).ready(function(){
        jQuery.validator.addMethod("startdatelessthantoday", function(value, element){
            return true;
        }, "Avoid selecting future dates");
        jQuery.validator.addMethod("enddatelessthantoday", function(value, element){
            return true;
        }, "Avoid selecting future dates");
        $(document).on("click","#addExperience",function(){
            var fm = $(this).closest('form');
            var start_month = fm.find('#start_month').val();
            var start_year = fm.find('#start_yr').val();
            var end_month = fm.find('#end_month').val();
            var end_year = fm.find('#end_yr').val();
            var months = ["January","February","March","April","May","June","July","August","September","October","November", "December"];
            if(start_year != '' && start_month != '' ){
                start_month = months.indexOf(start_month);
                //console.log(new Date(start_year,start_month));
                if(new Date(start_year,start_month) > new Date()){
                  toastr['error']('Avoid selecting future dates in start dates');
                  return false;
                }
            }
            if(end_year != '' && end_month != ''){
                end_month = months.indexOf(end_month);
                if(new Date(end_year,end_month) > new Date()){
                  toastr['error']('Avoid selecting future dates in end dates');
                  return false;
                }
            }
            $("#experienceform").validate({
                ignore: [],
                errorClass: 'help-block',
                errorElement: 'label',
                highlight: function (element)
                {
                  $(element).closest('.form-group').addClass('has-error');
                },
                unhighlight: function (element)
                {
                  $(element).closest('.form-group').removeClass('has-error');
                },

                rules:
                {
                  cmp_nm:{required:true,
                    normalizer: function(value) {
                      value = value.replace("something", "new thing");
                      return $.trim(value);
                    }
                  },
                  location:{required:true,
                    normalizer: function(value) {
                      value = value.replace("something", "new thing");
                      return $.trim(value);
                    }
                  },
                  title:{required:true,
                    normalizer: function(value) {
                      value = value.replace("something", "new thing");
                      return $.trim(value);
                    }
                  },
                  start_month:{required:true,startdatelessthantoday:true},
                  start_yr:{required:true},
                  end_month:{required:true,enddatelessthantoday:true},
                  end_yr:{required:true,min:$("#start_yr").val()},
                  desc:{required:true,
                    normalizer: function(value) {
                      value = value.replace("something", "new thing");
                      return $.trim(value);
                    }
                  }
                },
                messages:
                {
                  cmp_nm:{required:"Please enter company name"},
                  location:{required:"Please enter location"},
                  title:{required:"Please enter degree"},
                  start_month:{required:"Please enter start month"},
                  start_yr:{required:"Please enter start year"},
                  end_month:{required:"Please enter end month"},
                  end_yr:{required:"Please enter end year",min:"Please select end year greater than start year"},
                  desc:{required:"Please enter description"}
                },
            });

            if($("#experienceform").valid())
            {
               addOverlay();
              $("#experienceform").submit();
            }
        });
        $(document).on("click","#saveFnm",function(){
            $("#profileFrm").validate({
              ignore: [],
              errorClass: 'help-block',
              errorElement: 'label',
              highlight: function (element)
              {
                $(element).closest('.form-group').addClass('has-error');
              },
              unhighlight: function (element)
              {
                $(element).closest('.form-group').removeClass('has-error');
              },
              rules:
              {
                firstName:{required:true,
                  normalizer: function(value) {
                    value = value.replace("something", "new thing");
                    return $.trim(value);
                  }
                },
                lastName:{required:true,
                  normalizer: function(value) {
                    value = value.replace("something", "new thing");
                    return $.trim(value);
                  }
                },
              },

              messages:
              {
                firstName:{required:"Please enter first name"},
                lastName:{required:"Please enter last name"}
              },
            });
            if($("#profileFrm").valid())
            {
               addOverlay();
               $("#profileFrm").submit();
            }
        });
        $(document).on("click","#locationSave",function(){
            $("#profilelocationFrm").validate({
                ignore: [],
                errorClass: 'help-block',
                errorElement: 'label',
                highlight: function (element)
                  {
                    $(element).closest('.form-group').addClass('has-error');
                  },
                unhighlight: function (element)
                {
                    $(element).closest('.form-group').removeClass('has-error');
                  },
                normalizer: function(value) {
                    // Trim the value of every element
                      return $.trim(value);
                },
                rules:
                {
                  userLocation:{
                    required:true,
                    normalizer: function(value) {
                    value = value.replace("something", "new thing");
                    return $.trim(value);
                    }
                  }
                },
                messages:
                  {
                    userLocation:{required:"Please enter location"}
                  },
            });
             if($("#profilelocationFrm").valid())
             {
               addOverlay();
               $("#profilelocationFrm").submit();
             }
        });

                $(document).on("click","#addTitle",function(){

                 $("#proFrm").validate({
                  ignore: [],
                  errorClass: 'help-block',
                  errorElement: 'label',
                  highlight: function (element)
                  {
                    $(element).closest('.form-group').addClass('has-error');
                  },
                  unhighlight: function (element)
                  {
                    $(element).closest('.form-group').removeClass('has-error');
                  },
                  rules:
                  {
                    professional_title:{required:true,
                      normalizer: function(value) {
                        value = value.replace("something", "new thing");
                        return $.trim(value);
                      }
                    }
                  },

                  messages:
                  {
                    professional_title:{required:"Please enter professional title"}
                  },
                });


                 if($("#proFrm").valid())
                 {
                   addOverlay();
                   $("#proFrm").submit();
                 }
               });

                $(document).on("click","#overviewAdd",function(){

                 $("#overviewFrm").validate({
                  ignore: [],
                  errorClass: 'help-block',
                  errorElement: 'label',
                  highlight: function (element)
                  {
                    $(element).closest('.form-group').addClass('has-error');
                  },
                  unhighlight: function (element)
                  {
                    $(element).closest('.form-group').removeClass('has-error');
                  },
                  rules:
                  {
                    overview:{required:true,
                      normalizer: function(value) {
                        value = value.replace("something", "new thing");
                        return $.trim(value);
                      }
                    }
                  },

                  messages:
                  {
                    overview:{required:"Please enter overview"}
                  },
                });


                 if($("#overviewFrm").valid())
                 {
                   addOverlay();
                   $("#overviewFrm").submit();
                 }
               });

                $(document).on("click",".delRecord",function(){
                  var entityId = $(this).attr("data-id");
                  var entityType = $(this).attr("data-entity");
                  $("#entityType").val(entityType);
                  $("#entityVal").val(entityId);
                  $("#delete").modal("show");
                });
                var Fileurl = "http://www.sukhadaam.com/demo/sawlii/AjaxFprofile";

                $(document).on("click",".addRecord",function()
                {
                  var entityType = $(this).attr("data-entity");
                  /*alert($("#"+entityType).closest('form').attr("id"));*/
                  $("#"+entityType).modal("show");
                });
                $(document).on("click",".editRecord",function(){

                  var entityId = $(this).attr("data-id");
                  var entityType = $(this).attr("data-entity");

                  var dataDiv = $(this).attr("data-div");
                  addOverlay();
                  $.post(Fileurl,{"action":"load_data","entityType":entityType,"entityId":entityId},function(data){
                    removeOverlay();
                    $(".portfolioSection").html(data.content);
                    $("#"+entityType).modal("show");
                  },'json');
                });

                var professional_title_tarea_len = $("#professional_title_tarea").val().length;
                var allowed_len = 100;
                var curr_len = allowed_len - professional_title_tarea_len;
                $(".char_cnt").html("<strong>"+curr_len+"</strong>");

                $('#professional_title_tarea').bind('input',function() {
                  var $t=$(this);
                  var max= 100;
                  if ($t.val().length>max) {
                    $t.val($t.val().substr(0,max));
                  }
                  var professional_title_tarea_len = $("#professional_title_tarea").val().length;
                  var allowed_len = 100;
                  var curr_len = allowed_len - professional_title_tarea_len;
                  $(".char_cnt").html("<strong>"+curr_len+"</strong>");

                });

                $(document).on("keypress","#professional_title_tarea",function(e){

                  var professional_title_tarea_len = $("#professional_title_tarea").val().length;
                  var allowed_len = 100;
                  var curr_len = allowed_len - professional_title_tarea_len;
                  if(curr_len<0){
                    return false;
                  }
                  $(".char_cnt").html("<strong>"+curr_len+"</strong>");
                  return true;
                });

              });


    /*$('body').on('hidden.bs.modal', '.modal', function () {
    $(this).removeData('bs.modal');
    });*/



    $(document).on("click","#profile_image_trigger",function(e){
    e.preventDefault();
    $("#avatar-modal").modal('show');
    });
    $(document).on("click",".avatar-cancel",function(e){
    e.preventDefault();
    $("#avatar-modal").modal('hide');
    });


    /*$(document).on("change","#profile_image",function(){

    var value = $(this).val();
    var allowedFiles = ["jpg", "jpeg", "png"];
    var extension = value.split('.').pop().toLowerCase();
    if ($.inArray(extension, allowedFiles) < 0)
    {
        toastr['warning']("Please upload only .jpg,.jpeg,.png files");
    }
    else if (this.files[0].size > 4194304)
    {
        toastr['warning']("Image size must be less then 4MB");
    }
    else
    {
        var file_data = $(this).prop("files")[0];
        var form_data = new FormData();
        form_data.append("file", file_data)
        form_data.append("action", "move_image");
        $.ajax({
        url: "http://www.sukhadaam.com/demo/sawlii/AjaxFprofile",
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        dataType: 'json',
        success:function(data)
        {
            var url = data.content;
            $('.preview_profile').attr('src',url);
        }
        });
    }
    });*/
    $(document).on("click",".delete_data",function(){
    var entityType = $(this).attr("data-item-type");
    var entityId = $(this).attr("data-id");
    var parent = $(this).closest('ul');
    var $this = $(this);
    swal({
        title: "Are you sure you want to delete?",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes",
        closeOnConfirm: false
    },
    function(inputValue)
    {
        if(inputValue)
        {
        addOverlay();
        $.post("http://www.sukhadaam.com/demo/sawlii/AjaxFprofile",{"action":"delete_data",id:entityId,"type":entityType},function(data){
            removeOverlay();
            //parent.html(data.div_content);
            $this.closest('li').remove();
        },'json');
        swal("Deleted!", "Record deleted successfully", "success");
        }

    });


    });

    $(document).on('click','#remove_profile_image',function(e){
    e.preventDefault();
    if(confirm("Are you sure you want to remove profile image?")){
        var form_data = new FormData();
        form_data.append("action", "remove_profile_image");
        $.ajax({
        url: "http://www.sukhadaam.com/demo/sawlii/AjaxFprofile",
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        dataType: 'json',
        success:function(data)
        {
            console.log(data);
            var url = data.url;
            $('#remove_profile_image').css('display','none');
            $('.preview_profile').attr('src',url);
        }
        });
    }
    });

    function remove_profile_image(){

    }

    function crop_image_file_upload(){
    var inp = document.getElementById('avatarInput');
    if(inp.files.length == 0){
        alert('Please select atleast one file');
        return false;
    }
    var $avatarForm = $('.avatar-form');
    addOverlay();
    var url = $avatarForm.attr('action');
    var data = new FormData($avatarForm[0]);

    $.ajax(url, {
        type: 'post',
        data: data,
        dataType: 'json',
        processData: false,
        contentType: false,

        beforeSend: function () {
        console.log('before send');
        },

        success: function (data) {
        //console.log(data);
        if(data.state == 200){
            var img = data.result.replace('/home/sukhadaam/public_html/demo/sawlii/app-sd/dspaces-sd/profile/','http://www.sukhadaam.com/demo/sawlii/dspaces-sd/profile/');
            $('.preview_profile').attr('src',img);
            $('#avatar-modal').modal('hide');
            $('#remove_profile_image').css('display','block');
            removeOverlay();
        }else{
            alert('Something went wrong, please try again!');
            removeOverlay();
        }
        },

        error: function (XMLHttpRequest, textStatus, errorThrown) {
        console.log('error');
        removeOverlay();
        },

        complete: function () {
        console.log('complete');
        removeOverlay();
        }
    });
    }
</script>


<div class="container" id="crop-avatar">
  <div class="avatar-view" title="Change the avatar" style="display: none;">
    <img src="images/picture.jpg" alt="Avatar">
  </div>
  <div class="modal fade profile_modal" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form class="avatar-form" action="#" enctype="multipart/form-data" method="post">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" id="avatar-modal-label">Edit Profile Image</h4>
          </div>
          <div class="modal-body">
            <div class="avatar-body">

              <!-- Upload image and data -->
              <div class="avatar-upload">
                <input type="hidden" class="avatar-src" name="avatar_src" value="/home/sukhadaam/public_html/demo/sawlii/app-sd/dspaces-sd/profile/">
                <input type="hidden" class="avatar-data" name="avatar_data">
                <label class="btn btn-primary" for="avatarInput">Local upload</label>
                <input type="file" class="avatar-input" id="avatarInput" name="avatar_file">
              </div>
              <!-- Crop and preview -->
              <div class="row">
                <div class="col-md-12">
                  <div class="avatar-wrapper"></div>
                </div>
                <!-- <div class="col-md-3">
                  <div class="avatar-preview preview-lg"></div>
                  <div class="avatar-preview preview-md"></div>
                  <div class="avatar-preview preview-sm"></div>
                </div> -->
              </div>

              <div class="row avatar-btns">
                <button type="submit" class="btn btn-system avatar-save">Submit</button>
                <!-- <a type="submit" class="btn btn-danger avatar-cancel" >Cancel</a> -->
              </div>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div><!-- /.modal -->

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