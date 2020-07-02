@extends('layouts.frontend.master')
@section('title')
    Saved Freelance
@endsection
@section('content')

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
        <div class="">
            <div class="">
                <div class="sub_featured">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="saved-fl-wrap">
                                <div class="main-heading-wrap">
                                    <h1 class="main-heading">
                                        Saved Freelancer
                                    </h1>
                                    <div class="main-heading-tool pull-right hide">
                                        <div class="remove_saved unsave">
                                            <label class="signin-check">Remove All
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class='col-md-12'><span class='no-records'><i class='fa fa-exclamation-triangle'></i>No Records Found</span></div>
                                </div>
                                <div class="text-center hide">
                                    <div class="">
                                        <a href="javascript:void(0);" class="btn btn-primary load_more_data" data-page="1" >View More Freelancer</a>
                                    </div>
                                </div>
                                <input type="hidden" name="freelancer_id" id="freelancer_id">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.container -->

<div class="modal fade" id="delete" role="dialog" data-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    &times;
                </button>
                <h4>
                    Remove
                </h4>
            </div>
            <div class="modal-body">
                <form>
                    <p>
                         Are you sure you want to remove ?
                    </p>
                </form>
            </div>
            <div class="modal-footer">
                <div class="footer-btn">
                    <a href="#" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                </div>
                <div class="footer-btn">
                    <a href="javascript:void(0)" data-dismiss="modal" class="fRemove btn btn-primary">Remove</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteAll" role="dialog" data-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    &times;
                </button>
                <h4>
                    Remove
                </h4>
            </div>
            <div class="modal-body">
                <form>
                    <p>
                        Are you sure you want to remove all freelancers ?
                    </p>
                </form>
            </div>
            <div class="modal-footer">
                <div class="footer-btn">
                    <a class="btn btn-secondary" href="#" data-dismiss="modal">Cancel</a>
                </div>
                <div class="footer-btn">
                    <a href="javascript:void(0)" data-dismiss="modal" class="RemoveAll btn btn-primary">Remove</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
url = "http://www.sukhadaam.com/demo/sawlii/ajaxSavedFreelancer";
    $(document).ready(function(e){
        $(document).on("click",".fa-heart",function(e){
            $("#delete").modal("show");
            var id = $(this).parent().attr("data-id");
            $("#freelancer_id").val(id);
        });

        $(document).on("click",'.fRemove',function(e){
            fid = $("#freelancer_id").val(); 
            addOverlay();
            $.post(url,{"action":"delete_fid","fid_id":fid},
             function(data){
               if(data['type'] == "true"){
                  $('.freelancerid_'+fid).hide();  
                  toastr['success']('Saved freelancer has been removed successfully');
               }
               removeOverlay();
            },'json');   
        });

        $(document).on("click",".remove_saved",function(e){
            $("#deleteAll").modal("show");
        });
        
        $(document).on("click",".RemoveAll",function(e){
            addOverlay();
            $.post(url,{"action":"delete_all"},
             function(data){
                if(data['type'] == "true"){
                  $('.dash-job').hide();
                  $('.remove_saved').hide();
                    if(data['type'] == "true"){
                        removeOverlay();
                        toastr['success']('Freelancer has been removed successfully');
                        location.reload(true);
                    }
                }
            },'json');    
        });

        $(document).on("click",".load_more_data",function(e){

            var pageNo = $(this).attr("data-page");
            var p_no = parseInt(pageNo)+1;
            
            //addOverlay();
            $.post(url,{"action":"load_more_data","page_no":p_no},function(data){
                //removeOverlay();
                $(".data_freelancer").append(data.content);
                $(".load_more_data").addClass(data.btn);
                $(".load_more_data").attr("data-page",data.pageno);
            },"JSON");

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