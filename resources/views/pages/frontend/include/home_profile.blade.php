<!-- Your share button code -->
<div id="main-content">
    
    <!-- Dashboard Navigation -->
    @include('pages.frontend.freelancer.nav_dashboard')
    <!-- Dashboard Navigation End -->

    <section class="main-dashboard">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard-wrap freelancer-details-profile">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="personal-dashboard-wrap">
                                    <div class="box box-primary theme-box">
                                        <div class="box-body ">
                                            <div class="profile-before-edit media">
                                                <div class="media-left">
                                                    <div class="user-switch-wrap">
                                                        <div class="user-avatar-wrap">
                                                            <div class="user-avatar">
                                                                <img src="{{asset('frontend/img/th2_no_user_image.png')}}" class="preview_profile">
                                                            </div>
                                                        </div>
                                                        <div class="invite_PickGeeks hide clearfix invite-wrap">
                                                            <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#invite_user">
                                                            Invite
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="user-details-wrap">
                                                        <div class="personal-details-wrap">
                                                            <div class="user-title-wrap">
                                                                <h3 class="user-name"> Yousef Albader</h3>                                             
                                                                <div class="star-ratings-sprite">
                                                                    <span style="width:%STAR_RATING%%" class="star-ratings-sprite-rating"></span>
                                                                </div>
                                                                <ul class="user-since-detail liststyle-none">
                                                                    <li>Member since 18 June,2019</li>
                                                                    <li>Last Login 4 months ago</li> 
                                                                </ul>
                                                                <div class="user-profile-action">
                                                                    <div class="save_PickGeeks">
                                                                        <a href="#" class="save_freelancer" data-slug="yalbader90-f" title="Save">
                                                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="Report_PickGeeks">
                                                                        <a href="javascript:void(0)" class="report_user_check" data-slug="yalbader90-f" title="Report">
                                                                            <i class="fa fa-flag-o" aria-hidden="true"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <ul class="user-location-detail liststyle-none">
                                                                <li class="hide"><span><i class="fa fa-envelope"></i></span>Y.albader.90@gmail.com</li>
                                                                <li><span><i class="fa fa-map-marker"></i></span>Kuwait City, Kuwait</li>
                                                                <li><span><i class="fa fa-briefcase"></i></span>-</li>
                                                                <li><span><i class="fa fa fa-bookmark"></i></span>Beginner</li>
                                                                <li><span><i class="fa fa-share-alt"></i></span><a href="{{route('profile',$lang)}}" target="_blank">http://www.sukhadaam.com/demo/sawlii/f/profile/yalbader90-f</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="work-detail-wrap">
                                                            <ul class="work-detail-total liststyle-none">
                                                            <li>Completed Jobs : <span>2</span></li>
                                                            <li>Sold Services : <span>0</span></li>
                                                            <li>Earned : <span class="kwdamount">20<span>$</span></span></li>
                                                            <li>Response Time : <span>0 minute(s)‎&lrm;</span></li>
                                                            </ul>
                                                            <div class="user-chat-btn-wrap">
                                                            <a href="javascript:void(0);" class="btn btn-primary btn-bordered message_send">
                                                                <i class="fa fa-comments-o"></i> Send Message
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
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-lg-3">
                                <div class="dashboard-sidebar">
                                    <div class="box box-primary theme-box ">
                                        <div class="box-body">
                                            <div class="myskills-box">
                                                <h4 class="skills-title">My Skills</h4>
                                                <ul class="skills-list clearfix">
                                                    <li><p>PHP Developers </p></li>
                                                </ul>
                                            </div>
                                            <div class="myskills-box">
                                                <h4 class="skills-title">Language</h4>
                                                <ul class="skills-list clearfix"></ul>
                                            </div>
                                            <div class="myskills-box">
                                                <h4 class="skills-title">Category</h4>
                                                <ul class="skills-list clearfix">
                                                    <li>Ecommerce Development </li><li>Mobile Development </li><li>Web & Mobile Design </li><li>Machine Learning </li><li>Accounting Solutions </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-9 col-sm-8">
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title">Overview</h3>
                                        <div class="box-tools pull-right">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#overview"></a>
                                        </div>
                                    </div>
                                    <div id="overview" class="panel-collapse collapse in" >
                                        <div class="box-body" >
                                            <p>-</p>
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
                                        <div class="tab-pane active" id="tab_1">
                                            <div class="panel panel-default theme-box no-bg no-padding">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">Services</h4>
                                                </div>
                                                <div class="panel-body">
                                                <div class="fl-services ">
                                                    <div class="fl-services-item">
                                                        <div class="like active %FAV_CLASS%">
                                                            <a href="{{route('signin',$lang)}}" class="save_service" data-id="38"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                        <div class="save-service %SAVE_RIGHTS%">
                                                        <a href="{{route('signin',$lang)}}" title="Saved" class="save_service" data-id="38">
                                                            <i class="%SAVE_CLASS%"></i>
                                                        </a>
                                                        </div>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <div class="fl-service-thumb">
                                                                    <a href="#"><img src="{{asset('frontend/img/240525bb3d3a3118f1b07d9420318f1d.jpeg')}}" title="Tobys  test" alt="images"></a>
                                                                </div>
                                                            </div>
                                                            <div class="media-body fl-service-info">
                                                                <div class="fl-service-heading">
                                                                    <a href="#"><h4 class="main-title"><a href="{{route('service.test_service',$lang)}}" target="_blank">Tobys test</a></h4></a>
                                                                    <span>Delivery in 2 Day(s)&lrm;</span>
                                                                </div>
                                                                <div class="fl-service-price"><label>Price:</label>10<span>$</span></div>
                                                                <div class="fl-service-sort-info"> line 1 line 1 line 1 line 1 line 1 line 1 line 3 line 3 line 3 line 3 line ... </div>
                                                                <div class="fls-status-wrap">
                                                                    <div class="fls-status-box">
                                                                        <span class="fls-status bg-success">Active</span>
                                                                        <span class="fls-post-date">Posted on : <span>23rd, December 2019</span></span>
                                                                    </div>
                                                                    <ul class="fls-featured-edit">
                                                                        <li class="mark-ftr add-feature flps-f-item "  id="make_feature_38">
                                                                        <label class="sawlii-check">Mark as Featured
                                                                            <input type="checkbox" class=" make_featured" name="feature" id="feature" data-id="38" >
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="fl-services-item">
                                                        <div class="like active %FAV_CLASS%">
                                                            <a href="{{route('signin',$lang)}}" class="save_service" data-id="23"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                        <div class="save-service %SAVE_RIGHTS%">
                                                        <a href="{{route('signin',$lang)}}" title="Saved" class="save_service" data-id="23">
                                                            <i class="%SAVE_CLASS%"></i>
                                                        </a>
                                                        </div>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <div class="fl-service-thumb">
                                                                    <a href="#"><img src="{{asset('frontend/img/default-image_450.png')}}" title="**** phone" alt="images"></a>
                                                                </div>
                                                            </div>
                                                            <div class="media-body fl-service-info">
                                                                <div class="fl-service-heading">
                                                                    <a href="#"><h4 class="main-title"><a href="{{route('service.test_service',$lang)}}" target="_blank">**** phone</a></h4></a>
                                                                    <span>Delivery in 2 Day(s)&lrm;</span>
                                                                </div>
                                                                <div class="fl-service-price"><label>Price:</label>100<span>$</span></div>
                                                                <div class="fl-service-sort-info">Test phone ... </div>
                                                                <div class="fls-status-wrap">
                                                                    <div class="fls-status-box">
                                                                        <span class="fls-status bg-success">Active</span>
                                                                        <span class="fls-post-date">Posted on : <span>16th, July 2019</span></span>
                                                                    </div>
                                                                    <ul class="fls-featured-edit">
                                                                        <li class="mark-ftr add-feature flps-f-item "  id="make_feature_23">
                                                                        <label class="sawlii-check">Mark as Featured
                                                                            <input type="checkbox" class=" make_featured" name="feature" id="feature" data-id="23" >
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_2">
                                        <div class="panel panel-default theme-box no-bg no-padding">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Portfolio</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="fl-portfolio ">
                                                    <span class='no-records'><i class='fa fa-exclamation-triangle'></i>No Records Found</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_3">
                                        <div class="panel panel-default theme-box no-bg no-padding">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Educational Details</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="fl-edu">
                                                    <span class='no-records'><i class='fa fa-exclamation-triangle'></i>No Records Found</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_4">
                                        <div class="panel panel-default theme-box no-bg no-padding">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Certifications</h4>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="fl-certi">
                                                    <span class='no-records'><i class='fa fa-exclamation-triangle'></i>No Records Found</span>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_5">
                                        <div class="panel panel-default theme-box no-bg no-padding">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Experience</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="fl-experience">
                                                    <span class='no-records'><i class='fa fa-exclamation-triangle'></i>No Records Found</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_6">
                                        <div class="panel panel-default theme-box no-bg no-padding">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Reviews</h4>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="fl-avg-review clearfix">
                                                    <li class="fl-avg-review-item">
                                                        <label>Punctuality</label>
                                                        <div class="star-ratings-sprite">
                                                            <span style="width:50%" class="star-ratings-sprite-rating"></span>
                                                        </div>
                                                    </li>
                                                    <li class="fl-avg-review-item">
                                                        <label>Work Clarification</label>
                                                        <div class="star-ratings-sprite">
                                                            <span style="width:40%" class="star-ratings-sprite-rating"></span>
                                                        </div>
                                                    </li>
                                                    <li class="fl-avg-review-item">
                                                        <label>Communication</label>
                                                        <div class="star-ratings-sprite">
                                                            <span style="width:30%" class="star-ratings-sprite-rating"></span>
                                                        </div>
                                                    </li>
                                                    <li class="fl-avg-review-item">
                                                        <label>Work Quality</label>
                                                        <div class="star-ratings-sprite">
                                                            <span style="width:40%" class="star-ratings-sprite-rating"></span>
                                                        </div>
                                                    </li>
                                                    <li class="fl-avg-review-item">
                                                        <label>Expertise</label>
                                                        <div class="star-ratings-sprite">
                                                            <span style="width:50%" class="star-ratings-sprite-rating"></span>
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
                    <script type="text/javascript">

                        $(document).ready(function(){

                            $(document).on("click",".message_send",function(){
                            $("#send_message").modal("show");
                            });
                            $(document).on("click","#sendMsg",function(){
                            $("#msgFrm").validate({
                                ignore: [],
                                errorClass: 'help-block',
                                errorElement: 'label',
                                normalizer: function(value) {
                                return $.trim(value);
                                },
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
                                msg:{
                                    required:true,
                                    emailsnotallowed : true,
                                    normalizer: function(value) {
                                        value = value.replace("something", "new thing");
                                        return $.trim(value);
                                    }
                                },
                                },
                                messages:
                                {
                                msg:{required:"Please enter message"}
                                },
                            });
                            if($("#msgFrm").valid())
                            {
                                addOverlay();
                                $("#msgFrm").submit();
                            }
                            });

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
                </div>
            </div>
        </div>
    </section> 
</div>