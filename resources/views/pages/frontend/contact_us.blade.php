@extends('layouts.frontend.master')
@section('title')
    Contact US
@endsection
@section('content')

<!-- Your share button code -->
<div id="main-content">
  <!-- Page Content -->
<section class="inner-section">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="contact-form">
                    <div class="theme-form">
                        <h3 class="main-heading">
                            Contact PickGeeks
                        </h3>
                        <div class="row">
                            <div class="col-md-8 col-sm-7 con_seperator">
                                <form id="frmContactUs" name="frmContactUs" method="POST" id="frmContactUs">
                                    <input type="hidden" name="chkpoint" value="1346ca57a52086259b82d1a5d434bfeafecc60bf"/>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="firstName" id="firstName" class="form-control" value="" placeholder="First name*"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" value="" name="lastName" id="lastName" class="form-control" placeholder="Last name*"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" value="" name="email" id="email" class="form-control" placeholder="Email Address*"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="contactNo" value="" id="contactNo" class="form-control" placeholder="Contact Number"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="location" value="" id="location" class="form-control" placeholder="Location*"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <textarea rows="5" name="message" id="message" class="form-control" placeholder="Type your Message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="theme-button">
                                            <input type="submit" name="submitCnt" value="Submit" id="submitCnt" class="btn btn-block btn-system">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4 col-sm-5">
                                <h4>
                                    Sawlii
                                </h4>
                                <div class="head_email">
                                  <i class="fa fa-envelope-o"></i>&nbsp; sales@minttm.com
                                </div>
                                <div id="map_div" class="map_div"></div>
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

        jQuery.validator.addMethod("startingSpaceNotAllow", function(value, element)
        {
            return this.optional(element) || /^\S.*$/.test(value);
        }, "Space is not allowed");


        $(document).on("click","#submitCnt",function(){
            $("#frmContactUs").validate({
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
                    firstName : {required:true,startingSpaceNotAllow:true,minlength:4},
                    lastName : {required:true,startingSpaceNotAllow:true,minlength:4},
                    location : {required:true,startingSpaceNotAllow:true,minlength:3},
                    email : {required:true,email:true},
                    contactNo : {required:true,number:true,minlength:10},
                    message : {required:true,startingSpaceNotAllow:true}
                },
                messages:
                {
                    firstName : {required:"Please enter first name",startingSpaceNotAllow:"Space is not allowed",minlength:"Please enter valid first name"},
                    lastName : {required:"Please select last name",startingSpaceNotAllow:"Space is not allowed",minlength:"Please enter valid last name"},
                    location : { required: "Please enter location",startingSpaceNotAllow:"Space is not allowed",minlength:"Please enter valid location"},
                    email : { required :"Please enter email",email:"Please enter valid email"},
                    contactNo : {required:"Please enter contact number",number:"Please enter number only",minlength:"Please enter valid number"},
                    message : {required:"Please enter message",startingSpaceNotAllow:"Space is not allowed"}
                }
            });

            if($("#frmContactUs").valid())
            {
                addOverlay();
                $("#frmContactUs").submit();
            }
        });
        /* End code */
    });

    function initialize(latitude,longitude) {
            var i;
            var marker;
            var bounds = new google.maps.LatLngBounds();
            var myOptions = {
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var i;
            var map = new google.maps.Map(document.getElementById("map_div"), myOptions);

            marker = new google.maps.Marker({
                position: new google.maps.LatLng(latitude,longitude),
                map: map,
                animation: google.maps.Animation.DROP
            });
            bounds.extend(marker.position);
            map.setZoom(18);
            map.setCenter(bounds.getCenter());
            //map.fitBounds(bounds);
    }

    $(window).load(function() {
        latitude = '';
        longitude = '';
        getLatitudeLongitude(showResult, "201, Shree Gayatri Arcade, Rajnagar Circle, Pandit Dindayal Upadhyay Road, Manhar Society, Panchvati Nagar, Kotecha Nagar, Rajkot, Gujarat 360004")
        /* Getting long and latitude using address */
        function showResult(result) {
            latitude = result.geometry.location.lat();
            longitude = result.geometry.location.lng();
        }

        function getLatitudeLongitude(callback, address) {
            // If adress is not supplied, use default value 'Ferrol, Galicia, Spain'
            address = address || 'Ferrol, Galicia, Spain';
            // Initialize the Geocoder
            geocoder = new google.maps.Geocoder();
            if (geocoder) {
                geocoder.geocode({
                    'address': address
                }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        callback(results[0]);
                    }
                });
            }
        }
        setTimeout(function() {
            initialize(latitude,longitude);
        }, 2000);


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