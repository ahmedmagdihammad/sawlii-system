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
                                                <div class="profile-before-edit media">
                                                    <div class="media-left">
                                                        <div class="user-switch-wrap">
                                                            <div class="user-avatar-wrap">
                                                                <div class="user-avatar">
                                                                    <img src="{{asset('frontend/img/no_user_image.png')}}" class="preview_profile">
                                                                </div>
                                                                <span class="update-camera ">
                                                                    <a href="javascript:void(0)" id="profile_image_trigger" title="Update Profile Picture"><i class="fa fa-camera"></i></a>
                                                                </span>    
                                                            </div>
                                                            <div class="switch-wrap  ">
                                                                <a class="switch-btn btn-flr " href="{{route('f_profile',$lang)}}">Freelancer</a>
                                                                <a class="switch-btn btn-ctm active" href="{{route('c_profile',$lang)}}">Customer</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="user-details-wrap customer-user">
                                                            <div class="personal-details-wrap">
                                                                <div class="user-title-wrap">
                                                                    <h3 class="user-name">Mohamed Hammad</h3>
                                                                    <div class="star-ratings-sprite">
                                                                        <span style="width:0%" class="star-ratings-sprite-rating"></span>
                                                                    </div>
                                                                    <ul class="user-since-detail liststyle-none">
                                                                    <li>Member since {{date('d M,Y', strtotime(Auth::user()->created_at)) }}</li>          
                                                                    <li>Last Login {{Auth::user()->lastLogin}} hours ago</li>
                                                                    </ul>
                                                                    <div class="">
                                                                        <a href="#" class="edit_button user-profile-edit">Edit <i class="fa fa-edit"></i></a>
                                                                    </div>
                                                                    <div class="cust-user-location"><span><i class="fa fa-map-marker"></i></span>Egypt</div>
                                                                    <div class="cust-user-desc">-</div>
                                                                </div>
                                                                <ul class="cust-user-rating-lists liststyle-none">
                                                                    <li>
                                                                        <div class="star-ratings-sprite">
                                                                            <span style="width:0%" class="star-ratings-sprite-rating"></span>
                                                                        </div><span>Requirement Clarification</span>
                                                                    </li>
                                                                    <li>
                                                                        <div class="star-ratings-sprite">
                                                                            <span style="width:0%" class="star-ratings-sprite-rating"></span>
                                                                        </div><span>On Time Payment</span>
                                                                    </li>
                                                                    <li>
                                                                        <div class="star-ratings-sprite">
                                                                            <span style="width:0%" class="star-ratings-sprite-rating"></span>
                                                                        </div><span>On Time Response</span>
                                                                    </li>
                                                                    <li>
                                                                        <div class="star-ratings-sprite">
                                                                            <span style="width:0%" class="star-ratings-sprite-rating"></span>
                                                                        </div><span>Communication</span>
                                                                    </li>
                                                                    <li class="cur-more "><a href="{{route('review',$lang)}}">View More <i class="fa fa-angle-double-right"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="work-detail-wrap">
                                                                <ul class="work-detail-total liststyle-none">
                                                                    <li>Job Posted : <span>0</span></li>
                                                                    <li>Open Jobs : <span>0</span></li>
                                                                    <li>Total Expenditure : <span class="kwdamount">0</span></li>
                                                                    <li>Amount In Wallet : <span class="kwdamount">0<span>$</span></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="profile-after-edit">
                                                    <div class="box box-primary no-bg no-padding">
                                                        <div class="box-header">
                                                            <h3 class="box-title">Edit Profile</h3>
                                                        </div>
                                                        <div class="box-body">
                                                            <form action="{{route('c_profile.update',$lang)}}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="profile-edit-wrap media">
                                                                    <div class="media-left">
                                                                        <div class="user-switch-wrap">
                                                                            <div class="user-avatar-wrap">
                                                                                <div class="user-avatar">
                                                                                    <img src="{{asset('frontend/img/no_user_image.png')}}" class="preview_profile" />
                                                                                </div>
                                                                                <span class="update-camera">
                                                                                    <a href="javascript:void(0)" id="profile_image_trigger" title="Update Profile Picture">
                                                                                        <i class="fa fa-camera"></i>
                                                                                    </a>
                                                                                </span>    
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" name="firstname" placeholder="First Name" id="#" value="{{Auth::user()->firstname}}">
                                                                            </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" placeholder="Last Name" name="lastname" id="#" value="{{Auth::user()->lastname}}">
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="location" value="{{Auth::user()->location}}" id="#" placeholder="Location">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <textarea class="form-control" name="aboutme" id="aboutme" rows="2" placeholder="Overview">-</textarea>
                                                                        </div>
                                                                        <div class="form-group text-right">
                                                                            <label class="red_error char_cnt"><strong>100</strong></label> <span> characters remaining </span>
                                                                        </div>
                                                                        <div>
                                                                            <div class="text-right">
                                                                                <div class="theme-button-default">
                                                                                    <!-- <input type="cancel" name="cancel" value="Cancel"> -->
                                                                                    <a href="{{route('profile',$lang)}}">Cancel</a>
                                                                                </div>
                                                                                <div class="theme-button">
                                                                                    <input type="submit" value="Save" class="btn btn-block btn-system">
                                                                                    <!-- <a href="#" class="save">Save Changes</a> -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
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
                </div>
            </div>
        </section>


        <!-- /.container -->

        <script type="text/javascript">
            $(document).ready(function(){

                $(document).on('focus','#location',function(){
                var places = document.getElementById('location');
                var option = {};
                autocomplete= new google.maps.places.Autocomplete(places,option);
                });

                $(".profile-after-edit").hide();
                $(".edit_button").click(function(){
                $(".profile-before-edit").hide();
                $(".profile-after-edit").show();
                });

                $(".save").click(function(){
                $(".profile-after-edit").hide();
                $(".profile-before-edit").show();
                });

                jQuery.validator.addMethod("startingSpaceNotAllow", function(value, element)
                {
                return this.optional(element) || /^\S.*$/.test(value);
                }, "Space is not allowed");

                jQuery.validator.addMethod("spaceNotAllow", function(value, element)
                {
                return this.optional(element) || /^\S*$/.test(value);
                }, "Space is not allowed");

                jQuery.validator.addMethod("alphanumeric", function(value, element)
                {
                return this.optional(element) || /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/.test(value);
                }, "Please enter letters only");

                $(document).on('click', '#subminFrmCust', function (e) {

                $("#frmCustomer").validate({
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
                    firstName:{required:true,minlength:2,alphanumeric:true},
                    lastName:{required:true,minlength:2,alphanumeric:true},
                    location:{required:true,startingSpaceNotAllow:true},
                    aboutme : {required:true}
                    },
                    messages:
                    {
                    firstName:{required:"Please enter first name", minlength:"Please enter at least 2 characters",alphanumeric:"Please enter valid first name"},
                    lastName:{required:"Please enter last name", minlength:"Please enter at least 2 characters",alphanumeric:"Please enter valid last name"},
                    location:{ required:"Please enter location"},
                    aboutme: { required:"Please enter overview"}
                    }
                });

                if($("#subminFrmCust").valid())
                {
                            //addOverlay();
                            $("#subminFrmCust").submit();
                            }
                        });

                /* code for star ratings */
                $('#starRatings').raty({
                readOnly: true,
                score: 0,
                starOff: 'http://www.sukhadaam.com/demo/sawlii/frames-sd/images-sd/star-off.png',
                starOn: 'http://www.sukhadaam.com/demo/sawlii/frames-sd/images-sd/star-on.png',
                });

                $('#reqClarification').raty({
                readOnly: true,
                score: 0,
                starOff: 'http://www.sukhadaam.com/demo/sawlii/frames-sd/images-sd/star-off.png',
                starOn: 'http://www.sukhadaam.com/demo/sawlii/frames-sd/images-sd/star-on.png',
                });

                $('#onTimePymt').raty({
                readOnly: true,
                score: 0,
                starOff: 'http://www.sukhadaam.com/demo/sawlii/frames-sd/images-sd/star-off.png',
                starOn: 'http://www.sukhadaam.com/demo/sawlii/frames-sd/images-sd/star-on.png',
                });

                $('#onTimeRes').raty({
                readOnly: true,
                score: 0,
                starOff: 'http://www.sukhadaam.com/demo/sawlii/frames-sd/images-sd/star-off.png',
                starOn: 'http://www.sukhadaam.com/demo/sawlii/frames-sd/images-sd/star-on.png',
                });

                $('#comm').raty({
                readOnly: true,
                score: 0,
                starOff: 'http://www.sukhadaam.com/demo/sawlii/frames-sd/images-sd/star-off.png',
                starOn: 'http://www.sukhadaam.com/demo/sawlii/frames-sd/images-sd/star-on.png',
                });

                /* End code */

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
                form_data.append("action", "move_image")
                $.ajax({
                    url: "http://www.sukhadaam.com/demo/sawlii/AjaxFprofile",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    type: 'post',
                    dataType: 'json',
                    beforeSend: function() {
                    addOverlay();
                    },
                    success:function(data)
                    {
                    var url = data.content;
                    $('.preview_profile').attr('src',url);
                    },
                    complete: function()
                    {
                    removeOverlay();
                    }
                });
                }
            });*/

            $(document).ready(function(){
                var aboutme_len = $("#aboutme").val().length;
                var allowed_len = 100;
                var curr_len = allowed_len - aboutme_len;
                $(".char_cnt").html("<strong>"+curr_len+"</strong>");

                $('#aboutme').bind('input',function() {
                var $t=$(this);
                var max= 100;
                if ($t.val().length>max) {
                    $t.val($t.val().substr(0,max));
                }
                var aboutme_len = $("#aboutme").val().length;
                var allowed_len = 100;
                var curr_len = allowed_len - aboutme_len;
                $(".char_cnt").html("<strong>"+curr_len+"</strong>");
                });

                $(document).on("keypress","#aboutme",function(e){

                var aboutme_len = $("#aboutme").val().length;
                var allowed_len = 100;
                var curr_len = allowed_len - aboutme_len;
                if(curr_len<0){
                    return false;
                }
                $(".char_cnt").html("<strong>"+curr_len+"</strong>");
                return true;
                });

            });
            function crop_image_file_upload(){
                //if($('#avatarInput').files)
                var inp = document.getElementById('avatarInput');
                if(inp.files.length == 0){
                alert('Please select atleast one file');
                return false;
                }
                addOverlay();
                var $avatarForm = $('.avatar-form');
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

                    if(data.state == 200){
                    var img = data.result.replace('/home/sukhadaam/public_html/demo/sawlii/app-sd/dspaces-sd/profile/','http://www.sukhadaam.com/demo/sawlii/dspaces-sd/profile/');
                    $('.preview_profile').attr('src',img);
                    $('#avatar-modal').modal('hide');
                    $('#remove_profile_image').css('display','block');
                    removeOverlay();
                    }else{
                    alert('Something went wrong');
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
            $(document).on("click","#profile_image_trigger",function(e){
                e.preventDefault();
                $("#avatar-modal").modal('show');
            });
            $(document).on("click",".avatar-cancel",function(e){
                e.preventDefault();
                $("#avatar-modal").modal('hide');
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
        </script>
        <div class="container" id="crop-avatar">
            <div class="avatar-view" title="Change the avatar" style="display: none;">
                <img src="images/picture.jpg" alt="Avatar">
            </div>
            <div class="modal fade profile_modal" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form class="avatar-form" action="http://www.sukhadaam.com/demo/sawlii/app-sd/units-sd/freelancer_profile-sd/ajax.freelancer_profile-sd.php" enctype="multipart/form-data" method="post">
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
                            <label for="avatarInput" class="btn btn-primary">Local upload</label>
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

                        <div class="avatar-btns">
                            <button type="submit" class="btn btn-system avatar-save">Submit</button>
                            <!-- <a type="submit" class="btn btn-danger avatar-cancel">Cancel</a> -->
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


