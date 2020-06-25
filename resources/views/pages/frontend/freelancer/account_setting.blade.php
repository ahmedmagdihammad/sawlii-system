@extends('layouts.frontend.master')
@section('title')
    Account Settings
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

<section class="main-dashboard">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="account-settings-wrap">
                    <div class="main-heading-wrap">
                        <h1 class="main-heading">Account Settings</h1>
                        <div class="main-heading-tool pull-right ">
                            <span class="mobile-bars">
                                <a href="javascript:void(0);">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </span>
                        </div>    
                    </div>
                    <div class="account_setting">
                        <div class="sawlii-tabs-wrap">
                            <ul class="nav nav-tabs">
                                <li class=" active">
                                    <a href="#tab_a" data-toggle="tab">Change Password</a>
                                </li>
                                <li>
                                    <a href="#tab_d" data-toggle="tab">PayPal Settings</a>
                                </li>
                                <li>
                                    <a href="#tab_b" data-toggle="tab">Newsletter Settings</a>
                                </li>
                                <li>
                                    <a href="#tab_c" data-toggle="tab">Email Notification Settings</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab_a">
                                    <div class="box box-primary">
                                        <div class="box-header">
                                            <h3 class="box-title">Change Password</h3>
                                        </div>
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <form name="#" id="#" method="post">
                                                        <div class="form-group">
                                                            <label>
                                                                Current Password
                                                            </label>
                                                            <input type="password" class="form-control" name="currentPassword" id="currebtPassword" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>
                                                                New Password
                                                            </label>
                                                            <input type="password" class="form-control" name="password" id="password" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>
                                                                Confirm Password
                                                            </label>
                                                            <input type="password" class="form-control" name="cPassword" id="cPassword" />
                                                        </div>
                                                        <div class="text-right">
                                                            <div class="theme-button">
                                                                <input type="hidden" name="action" id="action" value="changePwd">
                                                                <button class="btn btn-system" name="passwordSave" id="passwordSave">Save</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab_d">
                                    <div class="box box-primary">
                                        <div class="box-header">
                                            <h3 class="box-title">PayPal Settings</h3>
                                        </div>
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <form name="#" id="#" method="post">
                                                        <div class="form-group">
                                                            <label>
                                                                PayPal ID
                                                            </label>
                                                            <input type="hidden" name="hidden_paypal_email" id="hidden_paypal_email" value="">
                                                            <input type="text" class="form-control" name="paypal_email" id="paypal_email" value="" />
                                                            <div class="paypal_content">
                                                                <span class='error'>Not Verified yet. Please check </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group paypal_password" style="display: none;">
                                                            <label>
                                                                Enter your pickgeeks password
                                                            </label>
                                                            <input type="paypal_password" class="form-control" name="paypal_password" id="paypal_password" value="" />
                                                        </div>
                                                        <div class="text-right">
                                                            <div class="theme-button">
                                                                <button class="btn btn-system" type="button" name="paypalSave" id="paypalSave">Save</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab_b">
                                    <div class="box box-primary">
                                        <div class="box-header">
                                            <h3 class="box-title">Newsletter Settings</h3>
                                        </div>
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p>
                                                        We update you on regular basis with new features and improvements and offers available for you. That you might avail for better use of the platform. Stay Subscribed and Stay Updated !!
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 8px"></div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="signin-check">&nbsp;Subscribe for Newsletter
                                                            <input type="checkbox" name="unsubscribe" class="notifyChange" data-val="subscribe_email" value="y" >
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab_c">
                                    <div class="box box-primary">
                                        <div class="box-header">
                                            <h3 class="box-title">Email Notification Settings</h3>
                                        </div>
                                        <div class="box-body">
                                            <p>
                                                Choose from the following notifications to get updated with the activities being performed in your account. Stay tuned and get notified !!
                                            </p>
                                            <form method="post" name="#" id="#">
                                                <ul class="email-notification liststyle-none">
                                                    <li>
                                                        <label class="signin-check" for="test1">Notify me when someone sends a message to me
                                                            <input type="checkbox" id="test1" name="Notifymessage" value="y"  class="notifyChange" data-val="Notifymessage">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="signin-check" for="test2">Notify me when service posted by freelancer is accepted/rejected
                                                            <input type="checkbox" id="test2" name="NotifyServiceAcceptReject" value="y"  class="notifyChange" data-val="NotifyServiceAcceptReject">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="signin-check" for="test9">Notify me when customer accepts/rejects my bid
                                                            <input type="checkbox" id="test9" name="NotifyCustomerAcceptRejectBid" value="y"  class="notifyChange" data-val="NotifyCustomerAcceptRejectBid">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="signin-check" for="test10">Notify me when customer hires me for the job
                                                            <input type="checkbox" id="test10" name="NotifyCustomerHireForJob" value="y"  class="notifyChange" data-val="NotifyCustomerHireForJob">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="signin-check" for="test11">Notify me when customer leaves a review 
                                                            <input type="checkbox" id="test11" name="NotifyCustomerReview" value="y"  class="notifyChange" data-val="NotifyCustomerReview">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="signin-check" for="test12">Notify me when I receives PRO level
                                                            <input type="checkbox" id="test12" name="NotifyProLevel" value="y"  class="notifyChange" data-val="NotifyProLevel">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="signin-check" for="test13">Notify me for the workroom messages
                                                            <input type="checkbox" id="test13" name="NotifyWorkRRoomMsg" value="y"  class="notifyChange" data-val="NotifyWorkRRoomMsg">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="signin-check" for="test14">Notify me when dispute is created by customer
                                                            <input type="checkbox" id="test14" name="NotifyDisputeCreateCustomer" value="y"  class="notifyChange" data-val="NotifyDisputeCreateCustomer">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                </ul>
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
</section>
<div class="modal fade" id="deactivateAccount" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    &times;
                </button>
                <h4> Deactivate Account</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to deactivate your account? </p>
            </div>
            <div class="modal-footer">
                <div class="theme-button-default">
                    <a href="#" data-dismiss="modal">No</a>
                    <a href="#" class="deactivateAccountSubmit">Yes</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var url = "http://www.sukhadaam.com/demo/sawlii/AjaxAccountSetting";
    $(document).ready(function() {

        /*password validation*/
        $(document).on("click", "#passwordSave", function() {
            $("#pwdFrm").validate({
                ignore: [],
                errorClass: 'help-block',
                errorElement: 'label',
                highlight: function(element) {
                    $(element).closest('.form-group').addClass('has-error');
                },
                unhighlight: function(element) {
                    $(element).closest('.form-group').removeClass('has-error');
                },
                rules: {
                    currentPassword: {
                        required: true
                    },
                    password: {
                        required: true,
                        minlength: 6
                    },
                    cPassword: {
                        required: true,
                        minlength: 6
                    }
                },

                messages: {
                    currentPassword: {
                        required: "Please enter current password"
                    },
                    password: {
                        required: "Please enter password",
                        minlength: "Please enter atleast 6 characters"
                    },
                    cPassword: {
                        required: "Please confirm password",
                        minlength: "Please enter atleast 6 characters"
                    }
                }
            });

            if ($("#pwdFrm").valid()) {
                addOverlay();
                $("#pwdFrm").submit();
            }
        });

        $(document).on('input', '#paypal_email', function() {
            var value = $(this).val();
            var h_value = $('#hidden_paypal_email').val();
            console.log('called');
            if (value != h_value) {
                $('.paypal_password').css('display', 'block');
            } else {
                $('.paypal_password').css('display', 'none');
            }
        });

        /*paypal verification*/
        $(document).on("click", "#paypalSave", function() {
            $("#paypalFrm").validate({
                ignore: [],
                errorClass: 'help-block',
                errorElement: 'label',
                highlight: function(element) {
                    $(element).closest('.form-group').addClass('has-error');
                },
                unhighlight: function(element) {
                    $(element).closest('.form-group').removeClass('has-error');
                },
                rules: {
                    paypal_email: {
                        required: true
                    },
                    paypal_password: {
                        required: {
                            depends: function(element) {
                                var value = $('#paypal_email').val();
                                var h_value = $('#hidden_paypal_email').val();
                                return value != h_value ? true : false;
                            }
                        },
                    },
                },

                messages: {
                    paypal_email: {
                        required: "Please enter PaypalId"
                    },
                    paypal_password: {
                        required: "Please enter Sawlii password"
                    }
                }
            });
            if ($("#paypalFrm").valid()) {
                addOverlay();
                var paypal_email = $("#paypal_email").val();
                $.post(url, {
                    "action": "verify_paypalId",
                    "paypal_email": paypal_email,
                    'paypal_password': $('#paypal_password').val()
                }, function(data) {
                    location.reload();
                    //removeOverlay();
                    /*if(data==true){
       toastr["success"]("Paypal Account verified successfully");
       msg='success';

       $(".paypal_content").html("<span class='green'>verified.</span> <span class='glyphicon glyphicon-ok-circle green'></span>");

     }
     else{

       toastr["error"]("Paypal Account does not verified, Please check it and try again");
       msg='failure';
       $(".paypal_content").html("<span class='green'>Not verified.</span> <span class='glyphicon glyphicon-ok-circle green'></span>");

     }*/
                }, 'json');

            }

        });

        /*newsletter subscriber*/
        $(document).on('change', '.notifyChange', function() {
            var status = ($(this).prop("checked") == true) ? 'y' : 'n';
            var type = $(this).attr("data-val");
            if (type == "subscribe_email" && status == "n") {
                swal({
                        title: "Confirmation!",
                        text: "Are you sure you want to unsubscribe newsletter?",
                        showCancelButton: true,
                        closeOnConfirm: false,
                        inputPlaceholder: "Write something"
                    },
                    function(inputValue) {

                        if (inputValue) {
                            $.post(url, {
                                "action": "change_status",
                                "type": type,
                                "status": status
                            }, function(data) {
                                //toastr['success']('Newsletter unsubscibe successfully');
                            }, 'json');
                            swal("Done!", "Newsletter unsubscribed successfully");
                        } else {
                            $('.notifyChange').prop('checked', true);
                        }
                    });
            } else {
                $.post(url, {
                    "action": "change_status",
                    "type": type,
                    "status": status
                }, function(data) {
                    toastr['success']('Status changed successfully');
                }, 'json');
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