@extends('layouts.frontend.master')
@section('title')
    Post Service
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
<section>
    <div class="main-dashboard">
        <div class="container">
            <div class="profile">
                <div class="featurette-job">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="sawlii-tabs-wrap post-tabs">
                                @if(App::isLocale('en'))
                                <ul class="nav nav-tabs">
                                    <li class="active default_tab"><a href="#postEnglish" class="default_tab_div" data-toggle="tab">English</a></li>
                                    <li class="second_tab"><a href="#postArabic" class="" data-toggle="tab">Arabic</a></li>                                        
                                </ul>
                                @else
                                <ul class="nav nav-tabs">
                                    <li class="active second_tab"><a href="#postArabic" class="" data-toggle="tab">Arabic</a></li>                                        
                                    <li class=" default_tab"><a href="#postEnglish" class="default_tab_div" data-toggle="tab">English</a></li>
                                </ul>
                                @endif
                                <form method="post" action="{{route('post_services.store',$lang)}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="tab-content">
                                        <!-- <input type="hidden" name="fid" id="fid" value="1"> -->
                                        <div class="tab-pane active" id="postEnglish">
                                            <div class="theme-form">
                                                <h2 class="main-heading">
                                                    Post a Service
                                                </h2> 
                                                <div class="form-group ">
                                                    <label>
                                                        Upload service image
                                                    </label>
                                                    <input type="file" name="image" id="#" value="kkk">

                                                    <!-- <div class="file-input-wrapper">
                                                        <label for="uploadfile_1" class="file-input-button" data-fid="10">
                                                            Choose Image
                                                        </label>
                                                        <input id="uploadfile_1" class="upload_file" data-fid="10" type="file" name="upload_file">
                                                        <label class="help-block">Image dimension 200*400 </label>
                                                    </div>
                                                    <ul class="file-names clearfix" id="attchments_1">
                                                        
                                                    </ul> -->
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Service Title : </label>
                                                            <input class="form-control" name="title_en" id="serviceTitle_1" value="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <label>
                                                            Select Category :
                                                        </label>
                                                        <div class="form-group">
                                                            <select class="form-control category" name="category" id="category">
                                                                <option value="">Select Category</option>
                                                                @foreach($categories as $category)
                                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <label>
                                                            Select Sub Category :
                                                        </label>
                                                        <div class="form-group">
                                                            <select class="form-control subcategory" name="subcategory" id="subcategory" >
                                                                <option value=''>Select Sub Category</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label>
                                                                No. of days :
                                                            </label>
                                                            <div class="sp-quantity">
                                                                <div class="sp-minus sp-minus-delivery " data-fid="1"> <a class="ddd" href="javascript:void(0)">-</a>
                                                                </div>
                                                                <div class="sp-input">
                                                                    <input type="text" name="days" id="noDayDelivery_1" class="quntity-input" value="1">
                                                                </div>
                                                                <div class="sp-plus sp-plus-delivery " data-fid="1"> <a class="ddd" href="javascript:void(0)">+</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label>
                                                                Service Price ($) :
                                                            </label>
                                                            <input class="form-control servicesPrice" name="price" id="servicesPrice_1" value="" maxlength="6" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>
                                                                Service Description :
                                                            </label>
                                                            <textarea rows="3" class="form-control ckeditor" name="description_en" id="description_1"></textarea>
                                                            <label id="description-error_1" class="help-block" for="description"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>
                                                                Required details for service :
                                                            </label>
                                                            <textarea class="form-control" rows="3" name="details_en" id="requiredDetails_1"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="featured_yn">
                                                                Want to make service as featured?
                                                            </label>
                                                            <div class="material-switch ">
                                                                <input id="someSwitchOptionPrimary_1" name="featured_1" type="checkbox"   value="y" class="make_featured" data-fid="1" />
                                                                <label for="someSwitchOptionPrimary_1" class="label-primary">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row days_div_1" style="display: none">
                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="form-group">
                                                            <label class="featured_yn">
                                                                No. of days for featured :
                                                            </label>
                                                            <div class="sp-quantity">
                                                                <div class="sp-minus sp-minus-featured " data-fid="1"> <a class="ddd" href="javascript:void(0)">-</a>
                                                                </div>
                                                                <div class="sp-input">
                                                                    <input type="text" name="featured" id="no_of_days_1" class="quntity-input"  value="0">
                                                                </div>
                                                                <div class="sp-plus sp-plus-featured " data-fid="1"> <a class="ddd" href="javascript:void(0)">+</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-sm-6">
                                                        <label>Payable Amount : </label>
                                                        <div class="featured_amount" id="featured_amount_text_1">$</div>
                                                        <div class="sp-input">
                                                            <input type="text" name="cost" class="featured_amount" id="featured_amount_1"  value="0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="addOnMainDiv addon_display hide">
                                                            <div class="theme-form">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>
                                                                                Service Addons Title :
                                                                            </label>
                                                                            <input class="form-control" name="addon_title_en" id="serviceTitle_1" value="" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>
                                                                                No. of days :
                                                                            </label>
                                                                            <div class="sp-quantity">
                                                                                <div class="sp-minus sp-minus-delivery " data-fid="1"> <a class="ddd" href="javascript:void(0)">-</a>
                                                                                </div>
                                                                                <div class="sp-input">
                                                                                    <input type="text" name="addon_days" id="noDayDelivery_1" class="quntity-input" value="1">
                                                                                </div>
                                                                                <div class="sp-plus sp-plus-delivery " data-fid="1"> <a class="ddd" href="javascript:void(0)">+</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>
                                                                                Service Addons Price ($) :
                                                                            </label>
                                                                            <input class="form-control servicesPrice" name="addon_price" id="servicesPrice_1" value="" maxlength="6" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>
                                                                                Service Addons Description :
                                                                            </label>
                                                                            <textarea rows="3" class="form-control ckeditor" name="addon_description_en" id="description_1"></textarea>
                                                                            <label id="description-error_1" class="help-block" for="description"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="add_addons">
                                                            <a href="javascript:void(0)" class="add_more_addon " data-type="english">Add Addons <i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                </div>        
                                                <div class="text-right">
                                                    <div class="theme-button">
                                                        <input type="hidden" name="frmToken_eng" id="frmToken_eng" value="B3CpJVGS">
                                                        <a href="#postArabic" class="btn btn-system next_btn" data-toggle="tab">Add Arabic</a> &nbsp;&nbsp;<button type="submit" class="btn btn-system" name="saveServices" id="saveServices">Submit</button>
                                                        <!-- <button type="submit" class="btn btn-system" name="saveServices" id="saveServices_1"><a href="#postArabic" class="btn btn-system next_btn" data-toggle="tab">Add Arabic</a> &nbsp;&nbsp;<button type="submit" class="btn btn-system" name="saveServices" id="saveServices">Submit</button></button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane postarabic " dir="rtl" lang="ar"  id="postArabic">
                                            <div class="theme-form">
                                                <h2 class="main-heading">
                                                Post a Service
                                                </h2> 
                                                <div class="post-serviceimg form-group hide">
                                                    <label>
                                                        Upload service image
                                                    </label>
                                                    <!-- <input type="file" name="image" id="#" value="kkk"> -->

                                                    <!-- <div class="file-input-wrapper">
                                                        <label for="upload-file_2" class="file-input-button">
                                                            Choose Image
                                                        </label>
                                                        <input id="uploadfile_2" class="upload_file" data-fid="2" type="file" name="services_file_2">
                                                        <label class="help-block">Image dimension 200*400 </label>                
                                                    </div>
                                                    <ul class="file-names clearfix" id="attchments_2">
                                                        %SERVICES_IMG%
                                                    </ul> -->
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>
                                                                Service Title :
                                                            </label>
                                                            <input class="form-control" name="title_ar" id="serviceTitle_2" value="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <label>
                                                            Select Category :
                                                        </label>
                                                        <div class="form-group">
                                                            <select class="form-control category" name="category_2" id="category_2" data-fid="2" data-lid="1" disabled>
                                                                <option value="">Select Category</option>
                                                                @foreach($categories as $category)
                                                                <option value="{{$category->id}}">{{$category->id}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <label>
                                                            Select Sub Category :
                                                        </label>
                                                        <div class="form-group">
                                                            <select class="form-control subcategory" name="subcategory_2" id="subcategory_2" data-fid="2" data-lid="1" disabled>
                                                                <option value=''>Select Sub Category</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label>
                                                                No. of days :
                                                            </label>
                                                            <div class="sp-quantity"> 
                                                                <div class="sp-minus sp-minus-delivery hide" data-fid="2"> <a class="ddd" href="javascript:void(0)">-</a>
                                                                </div>
                                                                <div class="sp-input">
                                                                    <input type="text" name="noDayDelivery_2" id="noDayDelivery_2" class="quntity-input" value="1" disabled>
                                                                </div>
                                                                <div class="sp-plus sp-plus-delivery hide" data-fid="2"> <a class="ddd" href="javascript:void(0)">+</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label>
                                                                Service Price ($) :
                                                            </label>
                                                            <input class="form-control servicesPrice" name="servicesPrice_2" id="servicesPrice_2" value="" maxlength="6" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>
                                                                Service Description :
                                                            </label>
                                                            <textarea rows="3" class="form-control ckeditor" name="description_ar" id="description_2"></textarea>
                                                            <label id="description-error_2" class="help-block" for="description"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>
                                                                Required details for service :
                                                            </label>
                                                            <textarea class="form-control" rows="3" name="details_ar" id="requiredDetails_2"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="featured_yn">
                                                                Want to make service as featured?
                                                            </label>
                                                            <div class="material-switch ">
                                                                <input id="someSwitchOptionPrimary_2" name="featured_2" type="checkbox"  value="y" class="make_featured" data-fid="2" disabled />
                                                                <label for="someSwitchOptionPrimary_2" class="label-primary">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row days_div_2" style="display: none">
                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="form-group">
                                                            <label class="featured_yn">
                                                                No. of days for featured :
                                                            </label>
                                                            <div class="sp-quantity">
                                                                <div class="sp-minus sp-minus-featured hide"  data-fid="2"> <a class="ddd" href="javascript:void(0)">-</a>
                                                                </div>
                                                                <div class="sp-input">
                                                                    <input type="text" name="no_of_days" id="no_of_days_2" class="quntity-input" value="0" disabled>
                                                                </div>
                                                                <div class="sp-plus sp-plus-featured hide"  data-fid="2"> <a class="ddd" href="javascript:void(0)">+</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-sm-6">
                                                        <label>Payable Amount : </label>
                                                        <div class="featured_amount" id="featured_amount_text_2">$</div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="addOnMainDiv addon_display hide">
                                                            <div class="theme-form">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>
                                                                            Service Addons Title :
                                                                            </label>
                                                                            <input class="form-control" name="addon_title_ar" id="serviceTitle_2" value="" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>
                                                                                No. of days :
                                                                            </label>
                                                                            <div class="sp-quantity"> 
                                                                                <div class="sp-minus sp-minus-delivery hide" data-fid="2"> <a class="ddd" href="javascript:void(0)">-</a>
                                                                                </div>
                                                                                <div class="sp-input">
                                                                                    <input type="text" name="#" id="noDayDelivery_2" class="quntity-input" value="1" disabled>
                                                                                </div>
                                                                                <div class="sp-plus sp-plus-delivery hide" data-fid="2"> <a class="ddd" href="javascript:void(0)">+</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>
                                                                                Service Addons Price ($) :
                                                                            </label>
                                                                            <input class="form-control servicesPrice" name="#" id="servicesPrice_2" value="" maxlength="6" disabled />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>
                                                                                Service Addons Description :
                                                                            </label>
                                                                            <textarea rows="3" class="form-control ckeditor" name="addon_description_ar" id="description_2"></textarea>
                                                                            <label id="description-error_2" class="help-block" for="description"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <input type="hidden" name="frmToken_2" id="frmToken_2" value="B3CpJVGS"> -->
                                                <div class="text-right">
                                                <div class="theme-button">         
                                                        <button type="submit" class="btn btn-system" name="saveServices" id="saveServices">Submit</button>     
                                                    <!-- <button type="submit" class="btn btn-system" name="saveServices" id="saveServices_2"><button type="submit" class="btn btn-system" name="saveServices" id="saveServices">Submit(Submit)</button></button> -->
                                                </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <!-- <input type="hidden" name="image" id="is_update_image" value=""> -->
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tip-section">
                                <div class="tip-box">
                                    <div class="box-corner"></div>
                                    <h3>USEFUL TIPS</h3>
                                    <ol>
                                        <li>
                                            Draw on experience - if you’ve been freelancing for a while, you probably already have a good idea of what kind of services people want from you.
                                        </li>
                                        <li>
                                            Be flexible - the whole point of offering freelance products is to show potential clients what value you can offer, and make more money in the process.
                                        </li>
                                        <li>
                                            Don’t forget to promote - freelance product packages can really help your business scale. So don’t let them be an afterthought on your service page. Put them at the top! You don’t want potential clients to see your “basic” package first and stick with that. Promote your platinum offer so potential clients can see everything they’ll be missing out on if they go for the cheaper option.
                                        </li>
                                    </ol>
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

$("#category").on('change', function() {
		var id = $(this).children("option:selected").val();
        var cat = $(this).val();
		$.ajax({
			type: 'get',
			url: '{{route("getSubcategory",$lang)}}',
			data: { 'id': id, },
			success: function(data) {
				if (data == '') {
					$('#subcategory').html('<option>There is no Sub Category here</option>');
				}else{
					$("#subcategory").html(" ").append('<option>- Select Sub Category -</option>');
					for (var i = 0; i < data.length; i++) {
						var o = new Option(data[i].name, data[i].id);
						$("#subcategory").append(o);
					}
                    removeOverlay();
                    $("#subcategory_"+fid).html(data.name);
                    $("#subcategory_2").html(data.name);
                    //Default Select 2nd form Category
                    $('#category_2 option').filter(function() { 
                        return ($(this).val() == cat); //To select Blue
                    }).prop('selected', true);
                    $('#category_2').prop("disabled",true);
				} 
			},
			error: function(data) {
			$('#edit-done').attr('hidden', 'hidden');
			$('#edit-error').removeAttr('hidden', 'hidden').slideDown(700).slideUp(700);
			}
		}); 
	});

    // $("#upcategoryt").on('change', function() {
    //     var id = $(this).children("option:selected").val();
    //     $.ajax({
    //         type: 'get',
    //         url: '{{route("getSubcategory",$lang)}}',
    //         data: { 'id': id, },
    //         success: function(data) {
    //             if (data == '') {
    //                 $('#upsubcategory').html('<option> -- There is no subcategory here -- </option>');
    //             }else{
    //                 $("#upsubcategory").html(" ").append('<option >- Select subcategory -</option>');
    //                 for (var i = 0; i < data.length; i++) {
    //                     var o = new Option(data[i].jobtitle, data[i].id);
    //                         $(o).html('<option val='+data[i].id+'>'+data[i].jobtitle+'</option>');
    //                         $("#upsubcategory").append(o);
    //                     }
    //             }
    //         },
    //         error: function(data) {
    //         $('#edit-done').attr('hidden', 'hidden');
    //         $('#edit-error').removeAttr('hidden', 'hidden').slideDown(700).slideUp(700);
    //         }
    //     }); 
    // });

    var url = "http://www.sukhadaam.com/demo/sawlii/ajaxFreelancerPostServices";

    $(document).ready(function() {
        $lid = $("#default_lang_id").val();
        //Disabled addon add mode for second form
        $("#someSwitchOptionPrimary_2").prop("disabled",true);
        //click on next button redirect to next tab
        $(document).on("click", ".next_btn", function() {
            $(".default_tab").removeClass("hide");
            $(".default_tab").removeClass("active");
            $(".second_tab").removeClass("hide");
            $(".second_tab").addClass("active");
        });       

        /*subcategory load start*/
        // $(document).on("change", ".category", function() {
        //     var cat = $(this).val();
        //     var fid = $(this).attr("data-fid");    
        //     var lid = $(this).attr("data-lid"); 
        //     addOverlay();
        //     $.post(url, {
        //         "action": "load_sub_category",
        //         "maincat_id": cat,
        //         "lang_id" : lid,
        //     }, function(data) {
        //         removeOverlay();
        //         $("#subcategory_"+fid).html(data.content);
        //         $("#subcategory_2").html(data.content);
        //         //Default Select 2nd form Category
        //         $('#category_2 option').filter(function() { 
        //             return ($(this).val() == cat); //To select Blue
        //         }).prop('selected', true);
        //         $('#category_2').prop("disabled",true);
        //     }, 'json');
        // });
        //Default Select 2nd form Sub Category
        $(document).on("change", ".subcategory", function() {
            var sub_cat = $(this).val();
            $('#subcategory_2 option').filter(function() { 
                return ($(this).val() == sub_cat); //To select Blue
            }).prop('selected', true);
            $('#subcategory_2').prop("disabled",true);
        });

        $(document).on("click", ".remove_div", function(e) {
            e.preventDefault();
            var id = $(this).attr("id");
            $lang = $(this).attr("data-lang");
            $data_id = $(this).attr("data-id")
            if($lang=="english"){$lang_2 = "arabic";}else{$lang_2 = "english";}
            if (id != "remove_div_"+$lang+"_1"){
                $("#" + id).parent().parent().remove();
                $("#remove_div_"+$lang_2+"_1").parent().parent().remove();
            }else{
                $(".addon_display").addClass("hide");
                $("#addon_title_"+$lang+"_"+$data_id).val(null);
                $('input.addon_title').removeAttr('value');
            }
            /*toastr['warning']('not allow to remove defult section');*/
        });

        /*Add more addon*/
        $(document).on("click", ".add_more_addon", function() {
            $lang = $(this).attr("data-type");
            if ($(".addOnMainDiv").hasClass("hide")) {
                $(".addOnMainDiv").removeClass("hide");
            } else {
                /*var $buttton = $('a[id^="remove_div_'+$lang+'"]:last');
                console.log($buttton);
                var num = parseInt($buttton.prop("id").match(/\d+/g), 10) + 1;*/
                $aid = $('#aid').attr("data-id");
                num = parseInt($aid)+1;
                $('#aid').attr("data-id",num);
                // $(".addonDiv_"+$lang).children().clone().find("input[type=number]").val("").end().find("input:text").val("").end().find("textarea").val("").end().prepend(".addonDiv_"+$lang).find("a").prop("id", "remove_div" + num);

                var clone = $(".addonDiv_"+$lang).children().clone().insertAfter(".addonDiv_"+$lang);
                clone.find(".addon_text").attr({"id":"addon_title_"+$lang+"_"+num,"data-conid":num,"value":""});
                clone.find(".addon_price").attr({"id":"addon_price_"+$lang+"_"+num,"data-conid":num,"value":""});
                clone.find(".addon_dur").attr({"id":"addon_days_"+$lang+"_"+num,"data-conid":num,"value":""});
                clone.find(".addon_desc").attr({"id":"addon_desc_"+$lang+"_"+num,"data-conid":num,"value":""});

                // create clone for second language
                if($lang=="arabic"){
                    $sec_lang = "english";
                }else if($lang=="english"){
                    $sec_lang = "arabic";
                }
                var clone = $(".addonDiv_"+$sec_lang).children().clone().insertAfter(".addonDiv_"+$sec_lang);
                clone.find(".addon_text").attr({"id":"addon_title_"+$sec_lang+"_"+num,"data-conid":num,"value":""});
                clone.find(".addon_price").attr({"id":"addon_price_"+$sec_lang+"_"+num,"data-conid":num,"value":""});
                clone.find(".addon_dur").attr({"id":"addon_days_"+$sec_lang+"_"+num,"data-conid":num,"value":""});
                clone.find(".addon_desc").attr({"id":"addon_desc_"+$sec_lang+"_"+num,"data-conid":num,"value":""});
            }
        });

        /*featured fees update*/
        $(document).on("keydown",".no_of_days",function(event){
           var charCode = event.which || event.keyCode || event.charCode;
           return false;
        });
       /*$(document).on("keydown","#noDayDelivery",function(event){
           var charCode = event.which || event.keyCode || event.charCode;
           return false;
       });*/

        $(document).on("click", ".sp-plus-featured", function() {
            $fid = $(this).attr("data-fid");
            var days = $("#no_of_days_"+$fid).val();
            $("#no_of_days_2").val(days);
            if(days > 30){
                $("#no_of_days_"+$fid).val("30");
                return false;
            }
            var payableAmount = days * 10;
            $('#featured_amount_'+$fid).val(payableAmount);
            $('#featured_amount_text_'+$fid).text("$" + payableAmount);
            $('#featured_amount_2').val(payableAmount);
            $('#featured_amount_text_2').text("$" + payableAmount);
        });
        $(document).on("click", ".sp-minus-featured", function() {
            $fid = $(this).attr("data-fid");
            var days = $("#no_of_days_"+$fid).val();
            $("#no_of_days_2").val(days);
            if(days < 0){
                $("#no_of_days_"+$fid).val("0");
                return false;
            }
            var payableAmount = days * 10;
            $('#featured_amount_'+$fid).val( payableAmount);
            $('#featured_amount_text_'+$fid).text("$" + payableAmount);
            $('#featured_amount_2').val(payableAmount);
            $('#featured_amount_text_2').text("$" + payableAmount);
        });
        $(document).on("click", ".sp-minus-delivery", function() {
            $fid = $(this).attr("data-fid");
            var days = $("#noDayDelivery_"+$fid).val();
            $("#noDayDelivery_2").val(days);
            $("#noDayDelivery_2").prop("disabled",true);
            if(days < 1){
                $("#noDayDelivery_"+$fid).val("1");
                return false;
            }
        });
        $(document).on("click", ".sp-plus-delivery", function() {
            $fid = $(this).attr("data-fid");
            var days = $("#noDayDelivery_"+$fid).val();
            $("#noDayDelivery_2").val(days);
            $("#noDayDelivery_2").prop("disabled",true);
            if(days > 30){
                $("#noDayDelivery_"+$fid).val("30");
                return false;
            }
        });
        //On blur update amount on second form
        $(document).on("blur", ".servicesPrice", function() {
            $val = $(this).val();
            $("#servicesPrice_2").val($val);
            $("#servicesPrice_2").prop("disabled",true);
        });
        /* Delete file attachments */
        $(document).on("click", ".delAttachment", function(e) {
            var id = $(this).attr("data_id");
            e.preventDefault();
            if (confirm("Are you sure you want to delete this attachment?")) {
                $.ajax({
                    url: url,
                    type: "POST",
                    dataType: "json",
                    data: {
                        'action': 'file_delete',
                        'id': id,
                        'type': 'add'
                    },
                    beforeSend: function() {
                        addOverlay();
                    },
                    success: function(response) {
                        if (response['status'] == 'true') {
                            $('.attchFile_' + id).remove();
                            $count = $(".attchFile_li").length;
                            if($count==0){
                                $("#is_update_image").val($('#avatarInput').val());
                            }
                            toastr['success']('Attachment deleted successfully.');
                        } else {
                            toastr['error']('There is an issue deleting this attachment.');
                        }
                    },
                    complete: function(xhr) {
                        removeOverlay();
                        return false;
                    }
                });
            }
        });
        /* End code */

        // Update Addon days on second form
        $(document).on("blur", ".addon_dur", function() {
            $val = $(this).val();
            if($(this).attr("data-lang")=="english"){
                $sec_lang = "arabic";
            }else{
                $sec_lang = "english";
            }
            $id = $(this).attr("data-conid");
            $("#addon_days_"+$sec_lang+"_"+$id).val($val);
            $("#addon_days_"+$sec_lang+"_"+$id).prop("disabled",true);
        });

        // Update Addon price on second form
        $(document).on("blur", ".addon_price", function() {
            $val = $(this).val();
            if($(this).attr("data-lang")=="english"){
                $sec_lang = "arabic";
            }else{
                $sec_lang = "english";
            }
            $id = $(this).attr("data-conid");
            $("#addon_price_"+$sec_lang+"_"+$id).val($val);
            $("#addon_price_"+$sec_lang+"_"+$id).prop("disabled",true);
        });

        /* File upload using ajax */
        $('#avatarInput').change(function(event) {
             var file_data = $(this).prop('files')[0];
             var fileTagId = $(this).attr('id');
             var ImageId = fileTagId.split(',');
             var img = ImageId[1];

             var imagPath = $(this).val();
             var files = event.target.files;
             var fileName = files[0].name;
             var lastdotval = imagPath.lastIndexOf(".");
             var res = imagPath.substr(lastdotval + 1, 4);

             if (res != 'png' && res != 'PNG' && res != 'JPG' && res != 'jpg' && res != 'JPEG' && res != 'jpeg') {
                $('#avatarInput').val('');
                toastr["error"]("Please select a valid file");
                return false;
             } 
        });
        /* End code */
        /*validation*/
        jQuery.validator.addMethod("required_text", function(value, element) {
             if(!$(".addon_display").hasClass('hide')){
                return value != '';
             }else{
                return true;
             }
        },"Please enter addon title");
        jQuery.validator.addMethod("required_desc", function(value, element) {
             if(!$(".addon_display").hasClass('hide')){
                return value != '';
             }else{
                return true;
             }
        },"Please enter addon description");
        jQuery.validator.addMethod("required_price", function(value, element) {
             if(!$(".addon_display").hasClass('hide')){
                return value != '';
             }else{
                return true;
             }
        },"Please enter addon price");
        jQuery.validator.addMethod("required_dur", function(value, element) {
             if(!$(".addon_display").hasClass('hide')){
                return value != '';
             }else{
                return true;
             }
        },"Please enter addon duration");

        jQuery.validator.addClassRules("addon_text", { required_text: true });
        jQuery.validator.addClassRules("addon_desc", { required_desc: true });
        jQuery.validator.addClassRules("addon_price", { required_price: true });
        jQuery.validator.addClassRules("addon_dur", { required_dur: true });


        jQuery.validator.addMethod("startingSpaceNotAllow", function(value, element) {
            return this.optional(element) || /^\S.*$/.test(value);
        }, "Space is not allowed");

        $(document).on("click", "#saveServices", function(e) {
            $("#servicesFrm").validate({
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
                    serviceTitle_1: {
                        required: true,
                        startingSpaceNotAllow: true
                    },
                    category_1: {
                        required: true
                    },
                    subcategory_1: {
                        required: true
                    },
                    noDayDelivery_1: {
                        required: true,
                        startingSpaceNotAllow: true
                    },
                    servicesPrice_1: {
                        required: true,
                        number: true,
                        min : 1,
                        startingSpaceNotAllow: true
                    },
                    description_1: {
                        required: true
                    },
                    requiredDetails_1: {
                        required: true,
                        // startingSpaceNotAllow: true
                    },
                    services_file_1: {
                        required: {
                            depends: function(element) {
                                if($("#is_update_image").val()=="n"){return true}else{return false;}
                            }
                        }
                    },
                    no_of_days_1: {
                        required: {
                            depends: function(element) {
                                return $('#someSwitchOptionPrimary').is(':checked')
                            }
                        }
                    },
                    "addon_title[]":{
                        startingSpaceNotAllow: true
                    },
                    "addon_desc[]":{
                        startingSpaceNotAllow: true
                    }
                },
                messages: {
                    serviceTitle_1: {
                        required: "Please enter services title",
                        startingSpaceNotAllow: "Space is not allowed"
                    },
                    category_1: {
                        required: "Please select category"
                    },
                    subcategory_1: {
                        required: "Please select subcategory"
                    },
                    noDayDelivery_1: {
                        required: "Please enter number of days",
                        startingSpaceNotAllow: "Space is not allowed"
                    },
                    servicesPrice_1: {
                        required: "Please enter service price",
                        number: "Please enter number only",
                        min: "Please enter amount greater than or equal to 1",
                        startingSpaceNotAllow: "Space is not allowed"
                    },
                    description_1: {
                        required: "Please enter description"
                    },
                    requiredDetails_1: {
                        required: "Please enter required details for service",
                        // startingSpaceNotAllow: "Space is not allowed"
                    },
                    services_file_1: {
                        required: "Please select service image"
                    },
                    no_of_days_1: {
                        required: "Please enter featured days"
                    },
                    "addon_title_english[]":{
                        startingSpaceNotAllow: "Space is not allowed"
                    },
                    "addon_desc_english[]":{
                        startingSpaceNotAllow: "Space is not allowed"
                    },
                    "addon_title_arabic[]":{
                        startingSpaceNotAllow: "Space is not allowed"
                    },
                    "addon_desc_arabic[]":{
                        startingSpaceNotAllow: "Space is not allowed"
                    }
                },
                focusInvalid: false,
                invalidHandler: function(form, validator) {
                    
                    if (!validator.numberOfInvalids())
                        return;
                    $(".default_tab_div").trigger("click");                   
                    $('html, body').animate({
                        scrollTop: ($(validator.errorList[0].element).offset().top-500)
                    }, 1000);
                }
            });
            if ($("#servicesFrm").valid()) {
                addOverlay();
                $("#servicesFrm").submit();
            }

        });

        $(document).on("change", ".make_featured", function() {
            $fid = $(this).attr("data-fid");
            if ($(this).prop("checked")) {
                var payableAmount = "0";
                $("#no_of_days_"+$fid).val("0");
                $('#featured_amount_'+$fid).val(payableAmount);
                $('#featured_amount_text_'+$fid).text("$" + payableAmount);
                $(".days_div_"+$fid).css("display", "block");

                //Select Default values on second form
                $("#someSwitchOptionPrimary_2").prop("checked",true);                
                $("#no_of_days_2").val("0");
                $("#no_of_days_2").prop("disabled",true);
                $('#featured_amount_text_2').text("$" + payableAmount);
                $(".days_div_2").css("display", "block");
            } else {
                $(".days_div_"+$fid).css("display", "none");
            }
        }); 
    });

    $(document).on("keypress",".addon_price",function(e){
        if($(".second_tab").val().length>3){
            return false;
        }
    });
    $(document).on("click",".rtl_tab",function(e){
        $(".second_tab").addClass("active");
        $(".default_tab").removeClass("active");
    });
    $(document).on("keypress",".addon_dur",function(e){
        if($(".addon_dur").val().length>2){
            return false;
        }
    });

    $(document).on("click", ".file-input-button", function(e) {
        e.preventDefault();
        document.getElementById('avatarInput').value = "";
        var $avatarForm = $('.avatar-form');
        $("#avatar-modal").modal('show');
    });
    $(document).on("click", ".avatar-cancel", function(e) {
        e.preventDefault();
        $("#avatar-modal").modal('hide');
    });

    function crop_image_file_upload() {
        var inp = document.getElementById('avatarInput');
        if (inp.files.length == 0) {
            alert('Please select atleast one file');
            return false;
        }
        var $avatarForm = $('.avatar-form');
        //$avatarForm.find('.avatar-save').prop('disabled',true);
        addOverlay();
        var url = $avatarForm.attr('action');
        var data = new FormData($avatarForm[0]);
        $fid = $(".upload_file").attr("data-fid");

        data.append('token', $('#frmToken').val());
        $.ajax(url, {
            type: 'post',
            data: data,
            dataType: 'json',
            processData: false,
            contentType: false,
            beforeSend: function() {
                console.log('before send');
            },
            success: function(data) {
                if (data.state == 200) {
                    $('#attchments_'+$fid).append(data.result);
                    $('#avatar-modal').modal('hide');
                    $('#upload-file_'+$fid).files = $('#avatarInput').files;
                    $("#is_update_image").val("y");
                    removeOverlay();
                    //document.getElementById('avatarInput').value = "";
                } else {
                    alert('Something went wrong, please try again!');
                    removeOverlay();
                }
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log('error');
                removeOverlay();
            },
            complete: function() {
                console.log('complete');
                removeOverlay();
            }
        });
    }
</script>

<link rel="stylesheet" href="{{asset('frontend/css/cropper.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">

<script src="{{asset('frontend/js/cropper.min.js')}}"></script>
<script src="{{asset('frontend/js/main2.js')}}"></script>
<div class="container" id="crop-avatar">
    <div class="avatar-view hide" title="Change the avatar">
        <img src="images/picture.jpg" alt="Avatar">
    </div>
    <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form class="avatar-form" action="#" enctype="multipart/form-data" method="post">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" id="avatar-modal-label">Add Service Image(s)</h4>
                    </div>
                    <div class="modal-body">
                        <div class="avatar-body">

                            <!-- Upload image and data -->
                            <div class="avatar-upload">
                                <input type="hidden" class="avatar-src" name="avatar_src" value="#">
                                <input type="hidden" class="avatar-data" name="avatar_data">
                                <input type="hidden" name="frmToken" id="frmToken" value="B3CpJVGS">                                
                                <!-- <label for="avatarInput">Select file</label> -->
                                <label class="choose-img" for="avatarInput">Choose Image</label>
                                <input type="file" class="avatar-input" id="avatarInput" name="avatar_file">
                            </div>
                            <!-- Crop and preview -->
                                <div class="avatar-wrapper"></div>
                                <!-- <div class="col-md-3">
                                    <div class="avatar-preview preview-lg"></div>
                                    <div class="avatar-preview preview-md"></div>
                                    <div class="avatar-preview preview-sm"></div>
                                </div> -->

                            <div class="avatar-btns">
                                <!-- <a type="submit" class="btn btn-default avatar-cancel">Cancel</a> -->
                                <button type="submit" class="btn btn-system avatar-save">Submit</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- /.modal -->

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

<!-- End Registration modal -->

<script>
  $(document).ready(function(){

    jQuery.validator.addMethod("noSpace", function(value, element) {
      return value.indexOf(" ") < 0 && value != "";
    }, "Space is not allowed and don't leave it empty");

    $(document).on('click', '#submitAdd', function (e) {

      e.preventDefault();

      $changefrm="#changefrm";
      $($changefrm).validate({

        ignore: [],
        errorClass: 'help-block',
        errorElement: 'label',
        highlight: function (element) {
          $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function (element) {
          $(element).closest('.form-group').removeClass('has-error');
        },
        rules:
        {
          password1:{noSpace: true,required:true,minlength:6,maxlength:12},
          cPassword:{equalTo: "#password1",required:true}
        },

        messages:
        {
          password1:{noSpace:"Please enter password",required:"Please enter password",minlength:"New password length should be greater than or equal to 6 characters",maxlength:"New Password length should be less than or equal to 12 characters"},
          cPassword:{required:"Please enter confirm password",equalTo:"&nbsp;Password doesn't match"}
        },
        errorPlacement: function (error, element) {
          if (element.attr("data-error-container")) {
            error.appendTo(element.attr("data-error-container"));
          } else {
            error.insertAfter(element);
          }
        }
      });

      if($("#changefrm").valid())
      {
        $("#changefrm").submit();
      }

    });

    $(document).on('click', '#userTypesetbtn', function (e) {

      e.preventDefault();

      $userTypesetForm="#userTypesetForm";
      $($userTypesetForm).validate({

        ignore: [],
        errorClass: 'help-block',
        errorElement: 'label',
        highlight: function (element) {
          $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function (element) {
          $(element).closest('.form-group').removeClass('has-error');
        },
        rules:
        {
          userTypeS:{required:true},
        },

        messages:
        {
          userTypeS:{required:"Please select user type"},
        },
        errorPlacement: function (error, element)
        {
          if (element.attr("data-error-container")) {
            error.appendTo(element.attr("data-error-container"));
          } else {
            error.insertAfter(element);
          }
        }
      });

      if($("#userTypesetForm").valid())
      {
        $("#userTypesetForm").submit();
      }

    });

    $(document).on("click","#loginCancel",function(){
      $.post("http://www.sukhadaam.com/demo/sawlii/units-sd/home-sd/ajax.home-sd.php",{"action":"cancelLogin"},function(){
        window.location.href="http://www.sukhadaam.com/demo/sawlii/";
      });
    });


  });

</script>

<script type="text/javascript" src="http://www.sukhadaam.com/demo/sawlii/masters-sd/requires-sd/plugins-sd/ckeditor/ckeditor.js"></script>

<script type="text/javascript">
  function loadCKE(id) {
    var instance = CKEDITOR.instances[id];
    if (instance) {
      CKEDITOR.remove(instance);
    }
    CKEDITOR.replace(id,{
      filebrowserUploadUrl: 'http://www.sukhadaam.com/demo/sawlii/requires-sd/upload.php',
      toolbar : 'MyToolbar'
    });
  }
</script>

<script>
  window.fbAsyncInit = function() {
    // FB JavaScript SDK configuration and setup

    FB.init({
      appId      : '1589285127814293',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.11'
    });
    FB.AppEvents.logPageView();

  };

// Load the JavaScript SDK asynchronously
(function(d, s, id)
{
 var js, fjs = d.getElementsByTagName(s)[0];
 if (d.getElementById(id)) {return;}
 js = d.createElement(s); js.id = id;
 js.src = "http://connect.facebook.net/en_US/sdk.js";
 fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// Facebook login with JavaScript SDK




</script>
<!-- Facebook login start -->
<script>
  function facebookLogin(userType) {

    FB.login(function (response) {
      if (response.authResponse) {
            // Get and display the user profile data

            FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture'},
              function (response) {
                var email =  (response.email==undefined) ? '0' : response.email;

                addOverlay();
                $.ajax({
                  "dataType": 'json',
                  "type" : "POST",
                  "url"  : "http://www.sukhadaam.com/demo/sawlii/ajaxSignup",
                  "data" : {"action":"facebook-record","fid":response.id,"firstName":response.first_name,"lastName":response.last_name,"email":email,"loginWith": 'Facebook',"userType":userType},
                  "success": function(data)
                  {
                    removeOverlay();
                    if(data.userType=='' && data.userTypeCheck=='n')
                    {
                      $("#userTypeSelectionModal").modal("show");
                    }
                    else
                    {
                      toastr[data.type](data.messages);
                      window.location.href = data.url;
                    }

                  }
                });
              });
          }
        }, {scope: 'email'});
  }
/*if (grecaptcha.getResponse() == ""){
    alert("You can't proceed!");
} else {
    alert("Thank you");
  }*/

</script>
<!-- facebook login end -->
<!-- Google login start -->
<script type="text/javascript">

  $(document).ready(function(){
    function renderButton() {

      var userType = $('.customGPlusSignIn').attr("data-user-type");
        //console.log(userType);

        $('.customGPlusSignIn').each(function(index, el) {
          var id = $(el).attr('id');
            //console.log(id);
            gapi.load('auth2', function(){
                // Retrieve the singleton for the GoogleAuth library and set up the client.
                auth2 = gapi.auth2.init({
                  client_id: '663422181971-ctenbuo7ihctfqcmnti763o6lsu3ulrt.apps.googleusercontent.com',
                  cookiepolicy: 'single_host_origin',
                  scope: 'profile email'
                });
                google_on_success(document.getElementById(id),userType);
              });
          });
      }
      renderButton();
      function google_on_success(element,userType)
      {
        auth2.attachClickHandler(element, {}, function(googleUser) {
          var profile = googleUser.getBasicProfile();
          var name = profile.getName();
          var first_name = name.substring(0, name.indexOf(' ')),
          last_name = name.substring(name.indexOf(' ')+1);

          var data = {
            first_name: first_name,
            last_name: last_name,
            email: profile.getEmail(),
            gender: '',
            image: profile.getImageUrl(),
            userType:userType
          };
            // addOverlay();
            addOverlay();

            $.ajax({
              url: 'http://www.sukhadaam.com/demo/sawlii/login-gp',
              type: 'POST',
              dataType: 'json',
              data: data,
            })
            .done(function(data) {

              if(data.userType=='' && data.userTypeCheck=='n')
              {
                $("#userTypeSelectionModal").modal("show");
              }
              else
              {
                toastr[data.type](data.messages);
                window.location.href = data.url;
              }
            })
            .always(function() {
             $("#overlayDocument").hide();
                // removeOverlay();
              });
          }, function(error) {
            // alert(JSON.stringify(error, undefined, 2));
          });
      }
    });
  </script>
  <!-- Google login end -->

  <!-- Home page script -->
  <script>
    $(document).on('click',"#newsletterSubscriber",function (e){
      e.preventDefault();
      /*Check Url With http or without http*/
      $.validator.addMethod('ChkUrl', function (value, element) {
        return this.optional(element) || /^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/g.test(value);
      }, 'This URL is invalid'
      );

      $("#newsletterFrm").validate({
        ignore: [],
        errorClass: 'help-block',
        errorElement: 'label',
        highlight: function (element) {
          $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function (element) {
          $(element).closest('.form-group').removeClass('has-error');
        },
        errorPlacement: function (error, element) {
          if (element.attr("data-error-container")) {
            error.appendTo(element.attr("data-error-container"));
          } else {
            error.insertAfter(element);
          }
        },
        rules: {
          email: { required : true,email:true}
        },
        messages: {
          email: { required: "Please enter email address",email:"Please enter valid email"},
        }
      });
      if($("#newsletterFrm").valid())
      {
        $("#newsletterFrm").submit();
      }
    });

    $('.search-panel .dropdown-menu').find('a').click(function(e) {
      e.preventDefault();
      var param = $(this).attr("href").replace("#","");
      var concept = $(this).text();
      $('.search-panel span#search_concept').text(concept);
      $('.input-group #search_param').val(param);
    });

    /*==tooltip==*/
    $('[data-toggle="tooltip"]').tooltip();

    $("#search_type").change(function(){
      /*$(this).parents(".dropdown.fix-width").find('.btn').html($(this).text() + ' <span class="angle-down"><i class="fa fa-caret-down"></i></span>');
      $(this).parents(".dropdown.fix-width").find('.btn').val($(this).data('value'));*/
      $(".topSearch").attr("data-url",$(this).val());
      $("#searchKeyword").attr("Placeholder","Find "+$(this).val());
    });

    $(document).on("keypress","#searchKeyword",function(e){
      var charCode = (typeof e.which == "undefined") ? e.keyCode : e.which;
      if (charCode == 13){
        setTimeout(function(){
          $(".topSearch").trigger("click");
        }, 200);
        return false;
      }
    });

    // $(document).on("click",".topSearch",function(){
    //   var slug = $("#search_type").val(),
    //   field = $(this).attr("id"),
    //   keyword = (field=='full') ? $("#searchKeyword").val() : $("#MsearchKeyword").val(),category=$("#category").val(),subcategory=$("#subcategory").val(),location=$("#search_location").val(),url=$params="";
    //   var user_rype = $(".search_user_type").val();
    //   var param = [];
    //   if(keyword!='' && keyword!=undefined){
    //     param.push("keyword="+keyword); 
    //   }
    //   if(location!='' && location!=undefined){
    //     param.push("location="+location); 
    //   }
    //   if(category!='' && category!=undefined){
    //     param.push("category="+category); 
    //   }
    //   if(subcategory!='' && subcategory!=undefined){
    //     param.push("subcategory="+subcategory); 
    //   }
    //   if(param.length > 0){
    //     $.each(param,function(key,val){
    //       var sign = "&";
    //       if(key==0){
    //         sign="?";
    //       }
    //       $params += sign+val;
    //     });
    //   }

    //   if(slug == 'Jobs')
    //   {
    //     url = "http://www.sukhadaam.com/demo/sawlii/search/"+"jobs/"+$params;
    //   }
    //   else if(slug == 'Services')
    //   {
    //     url = "http://www.sukhadaam.com/demo/sawlii/search/"+"service/"+$params;
    //   }
    //   else
    //   {
    //     if(user_rype=="Freelancer"){
    //       url = "http://www.sukhadaam.com/demo/sawlii/search/"+"jobs/";
    //     }else{
    //       url = "http://www.sukhadaam.com/demo/sawlii/search/"+"freelancer/";          
    //     }
    //   }
    //   window.location.href = url;
    // });

    $(document).on("click",".topMSearch",function(){

      var slug = $(this).attr("data-url"),field = $(this).attr("id"),
      keyword = (field=='full') ? $("#searchKeyword").val() : $("#MsearchKeyword").val(),url;

      if(slug == 'Jobs')
      {
        url = (keyword=='') ? "http://www.sukhadaam.com/demo/sawlii/search/"+"jobs/" : "http://www.sukhadaam.com/demo/sawlii/search/"+"jobs/"+"?keyword="+keyword;
      }
      else if(slug == 'Services')
      {
        url = (keyword=='') ? "http://www.sukhadaam.com/demo/sawlii/search/"+"service/" : "http://www.sukhadaam.com/demo/sawlii/search/"+"service/"+"?keyword="+keyword;
      }
      else
      {
        url = (keyword=='') ? "http://www.sukhadaam.com/demo/sawlii/search/"+"freelancer/" : "http://www.sukhadaam.com/demo/sawlii/search/"+"freelancer/"+"?keyword="+keyword;
      }
      window.location.href = url;

    });



    $(document).ready(function(e){

      scaleVideoContainer();

      initBannerVideoSize('.video-container .poster img');
      initBannerVideoSize('.video-container .filter');
      initBannerVideoSize('.video-container video');

      $(window).on('resize', function() {
        scaleVideoContainer();
        scaleBannerVideoSize('.video-container .poster img');
        scaleBannerVideoSize('.video-container .filter');
        scaleBannerVideoSize('.video-container video');
      });

      $('.search-panel .dropdown-menu').find('a').click(function(e) {
        e.preventDefault();
        var param = $(this).attr("href").replace("#","");
        var concept = $(this).text();
        $('.search-panel span#search_concept').text(concept);
        $('.input-group #search_param').val(param);
      });
    });

    function scaleVideoContainer() {

      var height = $(window).height() + 5;
      var unitHeight = parseInt(height) + 'px';

      if ( $(window).width() > 767 ) {
        $('.homepage-hero-module').css('height','600px');
      }
      else{
        $('.homepage-hero-module').css('height','440px');
      }

    }

    function initBannerVideoSize(element){

      $(element).each(function(){
        $(this).data('height', $(this).height());
        // $(this).data('width', $(this).width());
      });

      scaleBannerVideoSize(element);

    }

    function scaleBannerVideoSize(element){


      var windowWidth;
      var windowHeight = $(window).height() + 5,
      videoHeight;


      $(element).each(function(){
        var videoAspectRatio = $(this).data('height')/$(this).data('width');

        $(this).width(windowWidth);

        if(windowWidth < 1000){
          videoHeight = windowHeight;
          videoWidth = videoHeight / videoAspectRatio;
          $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});

          $(this).width(videoWidth).height(videoHeight);
        }

        $('.homepage-hero-module .video-container video').addClass('fadeIn animated');

      });
    }


    (function( $ ) {

        //Function to animate slider captions
        function doAnimations( elems ) {

            //Cache the animationend event in a variable
            var animEndEv = 'webkitAnimationEnd animationend';

            elems.each(function () {
              var $this = $(this),
              $animationType = $this.data('animation');
              $this.addClass($animationType).one(animEndEv, function () {
                $this.removeClass($animationType);
              });
            });
          }

        //Variables on page load
        var $myCarousel = $('#carousel-example-generic'),
        $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

        //Initialize carousel
        $myCarousel.carousel();

        //Animate captions in first slide on page load
        doAnimations($firstAnimatingElems);

        //Pause carousel
        $myCarousel.carousel('pause');


        //Other slides to be animated on carousel slide event
        $myCarousel.on('slide.bs.carousel', function (e) {
          var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
          doAnimations($animatingElems);
        });
        $('#carousel-example-generic').carousel({
          interval:3000,
          pause: "false"
        });

      })(jQuery);

      $('.load_ggl_autocomplete').each(function(){

        var _this = $(this)[0];
        return new google.maps.places.Autocomplete(_this, {types: ["geocode"]});

      });

      $(document).on('change','.change_language',function(e){
        $url = window.location.href;
        $.ajax({
          "type" : "POST",
          "url"  : "http://www.sukhadaam.com/demo/sawlii/app-sd/units-sd/home-sd/ajax.home-sd.php",
          "data" : {"action":"change_language","id":$(this).val()},
          success: function(data)
          {
            removeOverlay();
            if($url!=""){
              window.location.href = $url;
            }else{
              window.location.href = "http://www.sukhadaam.com/demo/sawlii/";
            }
          }
        });
      });
    </script>
    <!-- end -->


<script type="text/javascript" src="http://www.sukhadaam.com/demo/sawlii/masters-sd/requires-sd/plugins-sd/bootstrap-toastr/toastr.min.js"></script>
<script type="text/javascript">
  toastr.options = {
    "closeButton": true,
    "debug": false,
      //"positionClass": "toast-top-full-width",
      "positionClass": "toast-top-right",
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }

    function initilizeRaty(control_name, score) {
      $(control_name).raty({
        scoreName: 'star_ratings',
        score: score,
        readOnly: true,
        half: true,
        starHalf: 'http://www.sukhadaam.com/demo/sawlii/requires-sd/javascript-sd/plugins-sd/raty/images/star-half.png',
        starOff: 'http://www.sukhadaam.com/demo/sawlii/requires-sd/javascript-sd/plugins-sd/raty/images/star-off.png',
        starOn: 'http://www.sukhadaam.com/demo/sawlii/requires-sd/javascript-sd/plugins-sd/raty/images/star-on.png',
        hints: ['Bad', 'Poor', 'Regular', 'Good', 'Excellent']
      });
    }
    function addOverlay() {
      $('<div id="overlayDocument"></div>').appendTo(document.body);
    }
    function removeOverlay() {
      $('#overlayDocument').remove();
    }

    function processing() {
      $('<div id="overlayModel"></div>').appendTo(document.body);
    }

    function removeProcessing() {
      $('#overlayModel').remove();
    }

    function chkIsLogin (objThis){
      var attrTarget=objThis.data('target');
      if(attrTarget=='#loginModal'){
        $(".loading").removeClass('hide');
        $(".loading").show();
        setTimeout(function() { $(".loading").hide(); }, 5000);
      }
    }
    function loadCKE(id) {
      var instance = CKEDITOR.instances[id];
      if (instance) {
        CKEDITOR.remove(instance);
      }
      CKEDITOR.replace(id,{
        filebrowserUploadUrl: 'http://www.sukhadaam.com/demo/sawlii/requires-sd/upload.php',
        toolbar : 'MyToolbar'
      });
    }

    $(document).ready(function(){
      var userType = "n";
      if(userType=='y')
      {
        $("#userTypeSelectionModal").modal("show");
      }

      


    });

    $(document).on('click','.view_noti a',function(e){
      e.preventDefault();

        var id= $(this).attr('data-id');
        var link = $(this).attr('href');
        $.ajax({
          type: "POST",
          url: 'http://www.sukhadaam.com/demo/sawlii/units-sd/notification-sd/ajax.notification-sd.php',
          data: {'action':'view','id':id},
          success: function(resultData){
              if(link != ''){
                window.location.href = link;
              }
          } ,
          dataType: 'json'
        });  

      });

      $(document).on("click",".delete_notification",function(){      
        var id = $(this).attr("data-id");
        $.ajax({
          type: "POST",
          url: 'http://www.sukhadaam.com/demo/sawlii/units-sd/notification-sd/ajax.notification-sd.php',
          data: {'action':'delete','id':id},
          success: function(resultData){
            if(resultData=='true'){            
              $("#notification_"+id).hide();
            }           
          } ,
          dataType: 'json'
        });  
      });
      setInterval(getNotification, 10000);   

      function getNotification(){
          $.ajax({
              url:'http://www.sukhadaam.com/demo/sawlii/units-sd/notification-sd/ajax.notification-sd.php',
              type: "POST",
              data: {'action':'loadNotifications'},
              success: function(resultData){
                  if(resultData!=""){
                      $("#user_notification_list").html(resultData);
                  }
              }
          });       
      }

    </script>
    
  </body>
  </html>
<!-- <script>
  $(document).ready(function() {
        window.history.pushState(null, "", window.location.href);
        window.onpopstate = function() {
            window.history.pushState(null, "", window.location.href);
        };
    });
</script>

 -->
@endsection