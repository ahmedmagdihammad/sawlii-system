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
                                <form name="servicesFrm" id="servicesFrm" method="post" enctype="multipart/form-data">
                                    <ul class="nav nav-tabs">
                                        <li class="active default_tab hide"><a href="#postEnglish" class="default_tab_div" data-toggle="tab">English</a></li>
                                        <li class="second_tab hide"><a href="#postArabic" class="" data-toggle="tab">Arabic</a></li>                                        
                                    </ul>
                                    <div class="tab-content">
                                        <input type="hidden" name="fid" id="fid" value="1">
                                        <div class="tab-pane active" id="postEnglish">
                                            <div class="theme-form">
                                                <h2 class="main-heading">
                                                    Post a Service
                                                </h2> 
                                                <div class="post-serviceimg form-group ">
                                                    <label>
                                                        Upload service image
                                                    </label>
                                                    <div class="file-input-wrapper">
                                                        <label for="uploadfile_1" class="file-input-button" data-fid="1">
                                                            Choose Image
                                                        </label>
                                                        <input id="uploadfile_1" class="upload_file" data-fid="1" type="file" name="services_file_1">
                                                        <label class="help-block">Image dimension 200*400 </label>
                                                    </div>
                                                    <ul class="file-names clearfix" id="attchments_1">
                                                        
                                                    </ul>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>
                                                                Service Title :
                                                            </label>
                                                            <input class="form-control" name="serviceTitle_1" id="serviceTitle_1" value="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <label>
                                                            Select Category :
                                                        </label>
                                                        <div class="form-group">
                                                            <select class="form-control category" name="category_1" id="category_1" data-fid="1" data-lid="0">
                                                                <option value="">Select Category</option><option value='1' >Accounts & Consultants</option><option value='2' >Graphics Designing</option><option value='3' >Mobile Development</option><option value='4' >Web Developement</option><option value='5' >Virtual Assitant</option><option value='9' >Testing</option><option value='11' >Marketing</option><option value='13' >Web Designing</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <label>
                                                            Select Sub Category :
                                                        </label>
                                                        <div class="form-group">
                                                            <select class="form-control subcategory" name="subcategory_1" id="subcategory_1" data-fid="1" data-lid="0">
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
                                                                    <input type="text" name="noDayDelivery_1" id="noDayDelivery_1" class="quntity-input" value="1">
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
                                                            <input class="form-control servicesPrice" name="servicesPrice_1" id="servicesPrice_1" value="" maxlength="6" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>
                                                                Service Description :
                                                            </label>
                                                            <textarea rows="3" class="form-control ckeditor" name="description_1" id="description_1"></textarea>
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
                                                            <textarea class="form-control" rows="3" name="requiredDetails_1" id="requiredDetails_1"></textarea>
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
                                                                    <input type="text" name="no_of_days" id="no_of_days_1" class="quntity-input"  value="1">
                                                                </div>
                                                                <div class="sp-plus sp-plus-featured "" data-fid="1"> <a class="ddd" href="javascript:void(0)">+</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-sm-6">
                                                        <label>Payable Amount : </label>
                                                        <div class="featured_amount" id="featured_amount_1">$</div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="addOnMainDiv addon_display hide">
                                                            <
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
                                                <div class="file-input-wrapper">
                                                    <label for="upload-file_2" class="file-input-button">
                                                        Choose Image
                                                    </label>
                                                    <input id="uploadfile_2" class="upload_file" data-fid="2" type="file" name="services_file_2">
                                                    <label class="help-block">Image dimension 200*400 </label>                
                                                </div>
                                                <ul class="file-names clearfix" id="attchments_2">
                                                    %SERVICES_IMG%
                                                </ul>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label>
                                                            Service Title :
                                                        </label>
                                                        <input class="form-control" name="serviceTitle_2" id="serviceTitle_2" value="" />
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
                                                            <option value="">Select Category</option><option value='1' >Accounts & Consultants</option><option value='2' >Graphics Designing</option><option value='3' >Mobile Development</option><option value='4' >Web Developement</option><option value='5' >Virtual Assitant</option><option value='9' >Testing</option><option value='11' >Marketing</option><option value='13' >Web Designing</option>
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
                                                        <textarea rows="3" class="form-control ckeditor" name="description_2" id="description_2"></textarea>
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
                                                        <textarea class="form-control" rows="3" name="requiredDetails_2" id="requiredDetails_2"></textarea>
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
                                                                <input type="text" name="no_of_days" id="no_of_days_2" class="quntity-input" value="1" disabled>
                                                            </div>
                                                            <div class="sp-plus sp-plus-featured hide"  data-fid="2"> <a class="ddd" href="javascript:void(0)">+</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-sm-6">
                                                    <label>Payable Amount : </label>
                                                    <div class="featured_amount" id="featured_amount_2">$</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="addOnMainDiv addon_display hide">
                                                        <
                                                    </div>
                                                    <div class="add_addons">
                                                        <a href="javascript:void(0)" class="add_more_addon hide" data-type="arabic">Add Addons <i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <input type="hidden" name="frmToken_2" id="frmToken_2" value="B3CpJVGS"> -->
                                            <div class="text-right">
                                            <div class="theme-button">         
                                                    <button type="submit" class="btn btn-system" name="saveServices" id="saveServices">Submit(Submit)</button>     
                                                <!-- <button type="submit" class="btn btn-system" name="saveServices" id="saveServices_2"><button type="submit" class="btn btn-system" name="saveServices" id="saveServices">Submit(Submit)</button></button> -->
                                            </div>
                                            </div>
                                        </div>
                                    </div>                                 
                                    </div>
                                    <input type="hidden" name="id" id="id" value="0">
                                    <input type="hidden" name="action" id="action" value="saveData">
                                    <input type="hidden" name="default_lang" id="default_lang" value="English">
                                    <input type="hidden" name="default_lang_id" id="default_lang_id" value="0">
                                    <input type="hidden" name="is_update_image" id="is_update_image" value="n">
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
        $(document).on("change", ".category", function() {
            var cat = $(this).val();
            var fid = $(this).attr("data-fid");    
            var lid = $(this).attr("data-lid"); 
            addOverlay();
            $.post(url, {
                "action": "load_sub_category",
                "maincat_id": cat,
                "lang_id" : lid,
            }, function(data) {
                removeOverlay();
                $("#subcategory_"+fid).html(data.content);
                $("#subcategory_2").html(data.content);
                //Default Select 2nd form Category
                $('#category_2 option').filter(function() { 
                    return ($(this).val() == cat); //To select Blue
                }).prop('selected', true);
                $('#category_2').prop("disabled",true);
            }, 'json');
        });
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
            $('#featured_amount_'+$fid).text("$" + payableAmount);
            $('#featured_amount_2').text("$" + payableAmount);
        });
        $(document).on("click", ".sp-minus-featured", function() {
            $fid = $(this).attr("data-fid");
            var days = $("#no_of_days_"+$fid).val();
            $("#no_of_days_2").val(days);
            if(days < 1){
                $("#no_of_days_"+$fid).val("1");
                return false;
            }
            var payableAmount = days * 10;
            $('#featured_amount_'+$fid).text("$" + payableAmount);
            $('#featured_amount_2').text("$" + payableAmount);
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
                                $("#is_update_image").val("n");
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
                var payableAmount = "10";
                $("#no_of_days_"+$fid).val("1");
                $('#featured_amount_'+$fid).text("$" + payableAmount);
                $(".days_div_"+$fid).css("display", "block");

                //Select Default values on second form
                $("#someSwitchOptionPrimary_2").prop("checked",true);                
                $("#no_of_days_2").val("1");
                $("#no_of_days_2").prop("disabled",true);
                $('#featured_amount_2').text("$" + payableAmount);
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
                                <input type="hidden" class="avatar-src" name="avatar_src" value="/home/sukhadaam/public_html/demo/sawlii/app-sd/dspaces-sd/services_file-sd/">
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
@endsection