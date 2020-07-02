@extends('layouts.frontend.master')
@section('title')
    Post Detail 
@endsection
@section('content')

<!-- Your share button code -->
<div id="main-content">
  <div class="blog_section_main">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blogs_detail_main">
                    <div class="blog_img_left">
                        <img src="{{asset('frontend/img/1612a16b72ec929e163f5061cce6d6c7.gif')}}" class="media-object" id="post_image">
                    </div>
                    <!-- Go to www.addthis.com/dashboard to customize your tools --> 
                    <script type="text/javascript" src="{{asset('frontend/js/addthis_widget.js')}}"></script>
                    <!-- <div class="share_icon_blog">
                    
                        <div class="dropdown">
                            <button class="btn btn_blog dropdown-toggle" id="share_btn" data-title="First Post" data-url="http://www.sukhadaam.com/demo/sawlii/blog-postdetail/FirstPost" type="button" data-toggle="dropdown">
                            <span class="fa fa-share"></span></button>
                            <ul class="dropdown-menu">
                              <li><a href="javascript:void(0);" id="share_blogfb">Facebook</a></li>
                              <li><a href="javascript:void(0);" id="share_blogtwitter">Twitter</a></li>
                              <li><a href="javascript:void(0);" id="share_bloggplus">Google Plus</a></li>
                            </ul>
                          </div>
                    </div> -->
                    <div class="blog-inner-wrap">    
                        <div class="blog_header">
                            <h1>First Post</h1>
                        </div>
                        <div class="blog_additional_icon">
                            <ul>
                                <li><span><i class="fa fa-calendar"></i></span><a href="#">13th Aug 2019</a></li>
                                <li><span><i class="fa fa-user"></i></span><a href="{{route('blog',$lang)}}">Admin</a></li>
                                <li><span><i class="fa fa-th-large"></i></span><a href="{{route('blog',$lang)}}">Test</a></li>
                                <li><span><i class="fa fa-comment"></i></span><a href="#">Comments</a></li>
                            </ul>
                        </div>
                        <div class="tags_blog">
                            <ul>
                                <li><a href="{{route('blog',$lang)}}">1st Tag</a></li>	      		
                            </ul>
                          </div>
                        <div class="blog_description">
                            Post Description
                        </div>
                    </div>
                    <div class="blog_comments_section">
                        <div class="blog_reply_header">
                            <h4>2 Comments</h4>
                        </div>
                        <div class="new_comment">
                            <div class="media comment_sec">
                                <div class="media-left">
                                    <div class="new_comment_img">
                                    <img src="" class="media-object">
                                        <!-- <img src="http://192.168.5.11/pickgeeks_sawlii/dspaces-sd/profile/b42b07ba23ddb7ed42cc9b4d40f5d239.png" class="media-object"> -->

                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Ishit Tankaria</h4>
                                    
                                    <p class="time">1st Nov 2019</p>
                                    <p class="time">hii</p>
                                    <a href="javascript:void(0);" class="cmnt_btn replybtn hide" data-commentid="4" data-toggle="modal" data-target="#blog_modal">Reply</a>
                                    <span class="saperator hide"> | </span>
                                    <a href="javascript:void(0);"  class="cmnt_btn delete_comment hide" data-id="4">Delete</a>
                                    <div class="replyed_comment">            
                                        <div class="media reply_sec">
                                    <div class="media-left">
                                        <div class="new_comment_img">
                                            <img src="" class="media-object">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                    <h4 class="media-heading"></h4>
                                    <p class="time">1st Nov 2019</p>
                                    <p class="time">23</p>
                                    <a href="javascript:void(0);"  class="cmnt_btn delete_comment hide" data-reply="true" data-id="5">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog_reply_cmnt hide">
            <div class="blog_reply_header ">
                <h4>Leave a Comment</h4>
            </div>
            <form name="comment_frm" id="comment_frm" method="POST">
                <div class="form-group">
                    <label>Comment</label>
                    <textarea class="form-control" id="user_comment" name="user_comment" rows="5"></textarea>
                    <input type="hidden" name="postid" id="postid" value="6">
                    <input type="hidden" name="userid" id="userid" value="0">
                </div>
                <button type="button" name="post_comment" id="post_comment" class="btn btn_blog btn-defualt btn-primary">Post Comment</button>
            </form>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="blog_search_sidebar">
	<div class="search_blog">
		
		<div class="input-group form-group">
			<input type="text" class="form-control" id="search_keyword_blog" placeholder="Search here">
			<div class="input-group-btn">
		        <button class="btn" type="button" id="#"><i class="glyphicon glyphicon-search"></i></button>
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
				<li><a href="{{route('blog',$lang)}}">Test</a></li>
 
			</ul>
		</div>
	</div>
	<div class="sidebar_tags">
		<div class="sidebar_blogs_header">
			<h4>Recent Points</h4>
		</div>
		<div class="sidebar_blogs_links">
			<ul>
				<li><a href="#">First Post</a></li>
				

			</ul>
		</div>
	</div>
</div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="blog_modal" role="dialog">
    <div class="modal-dialog">    
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close close_btn" data-dismiss="modal">&times;</button>
              <div class="blog_reply_header">
                <h4>LEAVE A REPLY</h4>
            </div>
            </div>
            <div class="modal-body">
                <div class="blog_reply_cmnt">
                    <form name="comment_reply_frm" id="comment_reply_frm" method="POST">
                        <div class="form-group">
                            <label>Comment</label>
                            <textarea class="form-control" id="user_reply_comment" name="user_reply_comment" rows="5"></textarea>
                            <input type="hidden" name="comment_id" id="comment_id">
                            <input type="hidden" name="postid" id="post_id">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" name="post_comment" id="btnReply" class="btn btn_blog btn-primary">Post Comment</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $(".reply_div_show").hide();
        $(".cmnt_btn").click(function(){
            $(".reply_div_show").slideDown();
        });
        $(".cancel_cmnt_btn").click(function(){
            $(".reply_div_show").slideUp();
        });
        $.validator.addMethod("regex", function(value,element,regexp){
            var re= new RegExp(regexp);
            return this.optional(element) || re.test(value);
        },"Please enter valid name");

        $.validator.addMethod("email_valid", function(value, element) {
            return this.optional(element) || /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/i.test(value);
        }, "Please enter a valid email");

        $('#blog_modal').on('hidden.bs.modal', function() {
            $("#comment_reply_frm").validate().resetForm();
        });
        
        $("#comment_frm").validate({
            ignore: [],
            errorClass: 'help-block',
            errorElement: 'span',
            rules:{   
                user_comment: { required: true, maxlength:500,regex: "^[^\\s]" }
            },
            messages:{
                user_comment:{ required: 'Please enter comment',  maxlength: '{MSG_MAX_CHARACTER}',regex : '{MSG_VALID_COMMENT}' }
            },
            highlight: function (element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            unhighlight: function (element) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            errorPlacement: function(error, element){
                if (element.attr("data-error-container")) {
                    error.appendTo(element.attr("data-error-container"));
                } else {
                    error.attr('style', 'color: #b94a48; margin-top: 0px; margin-bottom: 15px; text-align: left;');
                    error.insertAfter(element);
                }
            }
        });

        $("#comment_reply_frm").validate({
            ignore: [],
            errorClass: 'help-block',
            errorElement: 'span',
            rules:{   
                user_reply_comment: { required: true, maxlength:500,regex: "^[^\\s]" }
            },
            messages:{
                user_reply_comment:{ required: 'Please enter comment',  maxlength: '{MSG_MAX_CHARACTER}',regex : '{MSG_VALID_COMMENT}' }
            },
            highlight: function (element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            unhighlight: function (element) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            errorPlacement: function(error, element){
                if (element.attr("data-error-container")) {
                    error.appendTo(element.attr("data-error-container"));
                } else {
                    error.attr('style', 'color: #b94a48; margin-top: 0px; margin-bottom: 15px; text-align: left;');
                    error.insertAfter(element);
                }
            }
        });

        $(document).on('click',"#post_comment",function(e){
            var userid = $("#userid").val();
            if(userid > 0){
                if($("#comment_frm").valid()){
                    var formdata = $("#comment_frm").serialize();
                    addOverlay();
                    $.ajax({
                        url: site_url+'blog-postdetail-ajax',
                        type:"POST",
                        dataType:"JSON",
                        data:{action : 'submit_comment', formdata: formdata},
                        success:function(data) {
                            removeOverlay();
                            if(data.message == 'success'){
                                toastr['success']("{MSG_COMMENT_POST}");
                                $('#user_comment').val('');
                                setTimeout(function(){  
                                    location.reload();
                                }, 500);
                            }else{
                                toastr['error']("{MSG_LOGIN_POST_COMMENT}");
                            }
                        }
                    });
                }
                e.stopImmediatePropagation();
            }else{
                toastr['error']("{MSG_LOGIN_POST_COMMENT}");
                $("#signupModal").modal('show');
            }
        });

        $(document).on('click',".replybtn",function(){
            var postid = $("#postid").val();
            var comment_id = $(this).data('commentid');
            $("#comment_id").val(comment_id);
            $("#post_id").val(postid);
        });
        $(document).on('click',".delete_comment",function(){
            var del_sec = $(this);
            alertify.confirm("Are you sure to delete post comment?", function (e) {
                if (e) 
                {                    
                    var comid = del_sec.data('id');
                    addOverlay();

                    $.ajax({
                        url: site_url+'blog-postdetail-ajax',
                        type:"POST",
                        dataType:"JSON",
                        data:{action : 'delete_comment', comid: comid},
                        success:function(data) {
                            removeOverlay();
                            if(data.message == 'success'){
                                toastr['success']("{MSG_HAS_BEEN_DEL_SUCC}");
        //                        setTimeout(function(){  
        //                            location.reload();
        //                        }, 500);
        
                                if(del_sec.data('reply') == true)
                                    del_sec.closest('.reply_sec').hide('400');
                                else
                                    del_sec.closest('.comment_sec').hide('400');
                                 removeOverlay();
                            }else{
                                toastr['error']("{MSG_LOGIN_POST_COMMENT}");
                                removeOverlay();
                            }
                        }
                    });
                }
            });
        });
        $(document).on('click',"#btnReply",function(e){
            var userid = $("#userid").val();
            if(userid > 0){
                if($("#comment_reply_frm").valid()){
                    var formdata = $("#comment_reply_frm").serialize();
                    addOverlay();
                    $.ajax({
                        url: site_url+'blog-postdetail-ajax',
                        type:"POST",
                        dataType:"JSON",
                        data:{action : 'reply_comment', formdata: formdata},
                        success:function(data) {
                            removeOverlay();
                            if(data.message == 'success'){
                                
                                toastr['success']("{MSG_COMMENT_REPLY_POST}");
                                setTimeout(function(){  
                                    $('#user_reply_comment').val('');
                                    location.reload();
                                }, 500);
                                  
                            }else{
                                toastr['error']("{MSG_LOGIN_POST_COMMENT}");
                            }
                        }
                    });
                }
                e.stopImmediatePropagation();
            }else{
                toastr['error']("{MSG_LOGIN_POST_COMMENT}"); 
                $(".loginLink").modal('show');

            }
        });
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