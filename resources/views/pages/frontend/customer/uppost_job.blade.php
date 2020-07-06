@extends('layouts.frontend.master')
@section('title')
    Post Job
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
                                <form method="post" action="{{route('post_job.update',[$lang, $job->id])}}" enctype="multipart/form-data">
                                    @csrf
                                    <ul class="nav nav-tabs">
                                        @if(App::isLocale('en'))
                                        <li class="active default_tab"><a href="#postEnglish" class="default_tab_div" data-toggle="tab">English</a></li>
                                        <li class="second_tab"><a href="#postArabic" class="" data-toggle="tab">Arabic</a></li>
                                        @else
                                        <li class="active second_tab"><a href="#postArabic" class="" data-toggle="tab">Arabic</a></li>
                                        <li class=" default_tab"><a href="#postEnglish" class="default_tab_div" data-toggle="tab">English</a></li>
                                        @endif
                                    </ul>
                                    <div class="tab-content">
                                        <input type="hidden" name="fid" id="fid" value="1">
                                        <div class="tab-pane active" @if(App::isLocale('ar')) id="postArabic" @else id="postEnglish" @endif>
                                            <div class="theme-form">
                                                <h2 class="main-heading">
                                                    Post a Job
                                                </h2>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>
                                                                Job Title :
                                                            </label>
                                                            <input class="form-control" type="text" name="title_en" id="jobTitle_1"  value="{{$job->title_en}}" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <label>
                                                            Select Category :
                                                        </label>
                                                        <div class="form-group">
                                                            <select class="form-control category" name="category" id="category" >
                                                                <option value="">Any</option>
                                                                @foreach($categories as $category)
                                                                @if($job->category == $category->id)
                                                                <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                                                @endif
                                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <label>
                                                            Select Sub-Category :
                                                        </label>
                                                        <div class="form-group">
                                                            <select class="form-control subcategory" name="subcategory" id="subcategory">
                                                                <option value="{{$job->subcategory}}">{{$job->getsubcategory->name}}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label>
                                                                Budget ($) :
                                                            </label>
                                                            <input class="form-control budget" type="text" name="budget" id="#" value="{{$job->budget}}"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label>
                                                                Select experience level :
                                                            </label>
                                                                <select class="form-control expLevel" name="level" id="expLevel_1" >
                                                                <option value="" >Any</option>
                                                                    @if($job->level == "B")
                                                                    <option value="B" selected>Beginner</option><option value="M" >Intermediate</option><option value="X" >Pro</option>
                                                                    @else
                                                                        @if($job->level == "M")
                                                                        <option value="B" >Beginner</option><option value="M" selected>Intermediate</option><option value="X" >Pro</option>
                                                                        @else
                                                                        <option value="B" >Beginner</option><option value="M" selected>Intermediate</option><option value="X" >Pro</option>
                                                                        @endif
                                                                    @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>
                                                                Job Description :
                                                            </label>
                                                            <textarea rows="3" name="description_en" id="description_1" class="form-control ckeditor" value="">{{$job->description_en}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6" id="skills">
                                                        <div class="form-group">
                                                            <label>
                                                                Skills :
                                                            </label>
                                                            <select class="form-control skill_choose_skillList skillList" multiple="multiple" name="skills[]" id="skill_1"  >
                                                                @foreach(explode('#',$job->skills) as $skills)
                                                                <option value='{{$skills}}' selected>{{$skills}}</option>
                                                                @endforeach
                                                                <option value='AngularJS Developers'>AngularJS Developers</option>
                                                                <option value='Android Developers'>Android Developers</option>
                                                                <option value='Bookkeepers'>Bookkeepers</option>
                                                                <option value='C# Developers'>C# Developers</option>
                                                                <option value='Content Writers'>Content Writers</option>
                                                                <option value='Copywriters'>Copywriters</option>
                                                                <option value='Customer Service Representatives'>Customer Service Representatives</option>
                                                                <option value='Data Entry Specialists'>Data Entry Specialists</option>
                                                                <option value='Email Marketing Consultants'>Email Marketing Consultants</option>
                                                                <option value='Excel Experts'>Excel Experts</option>
                                                                <option value='Facebook Marketers'>Facebook Marketers</option>
                                                                <option value='Graphic Designers'>Graphic Designers</option>
                                                                <option value='Objective-C Developers'>Objective-C Developers</option><option value='JavaScript Developers'>JavaScript Developers</option><option value='JQuery Developers'>JQuery Developers</option><option value='Mobile App Developers'>Mobile App Developers</option><option value='SEO Experts'>SEO Experts</option><option value='PHP Developers'>PHP Developers</option><option value='Python Developers'>Python Developers</option>
                                                            </select>
                                                            <div id="skill_1_error"></div>
                                                            <label id="skill_1_error" class="help-block" for="skill_1"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group post_job">
                                                            <label>
                                                                Bidding Deadline :
                                                            </label>
                                                            <input type="date" name="deadline" class="form-control datepicker bidding_deadline" value="{{$job->deadline}}" id="biddingDeadline_1" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label>
                                                                Select estimated job time duration :
                                                            </label>
                                                            <select class="form-control estimatedDuration" name="duration" id="estimatedDuration_1" >
                                                                <option selected>{{$job->duration}}</option><option >undefined</option><option >1 day or less</option><option >Less than 1 week</option><option >1 to 2 weeks</option><option >3 to 4 weeks</option><option >1 to 6 month</option><option >More than 6 month</option><option >Ongoing</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label>
                                                                Select job type :
                                                            </label>
                                                            <select class="form-control" name="public" id="#"  >
                                                                <option value="0" @if($job->public == '0') selected @endif>Public</option> 
                                                                <option value="1" @if($job->public == '1') selected @endif>Private</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row invited_users hide">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>
                                                                Invited User List
                                                                <span>Add User</span>
                                                            </label>
                                                            <span class="extra-note invited_user"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>
                                                                Accept bids from :
                                                            </label>
                                                            <select class="form-control selectpicker" title="All location" multiple name="country[]" id="bidsFromLocation_1" data-live-search="true" >
                                                                @foreach(explode('#', $job->country) as $country) <option value='{{$country}}' selected>{{$country}}</option> @endforeach <option value='Afghanistan' >Afghanistan</option><option value='Albania'  >Albania</option><option value='Algeria'  >Algeria</option><option value='American Samoa'  >American Samoa</option><option value='Andorra'  >Andorra</option><option value='Angola'  >Angola</option><option value='Anguilla'  >Anguilla</option><option value='Antarctica'  >Antarctica</option><option value='Antigua and Barbuda'  >Antigua and Barbuda</option><option value='Argentina'  >Argentina</option><option value='Armenia'  >Armenia</option><option value='12'  >Aruba</option><option value='13'  >Australia</option><option value='14'  >Austria</option><option value='15'  >Azerbaijan</option><option value='16'  >Bahamas</option><option value='17'  >Bahrain</option><option value='18'  >Bangladesh</option><option value='19'  >Barbados</option><option value='20'  >Belarus</option><option value='21'  >Belgium</option><option value='22'  >Belize</option><option value='23'  >Benin</option><option value='24'  >Bermuda</option><option value='25'  >Bhutan</option><option value='26'  >Bolivia</option><option value='27'  >Bosnia and Herzegovina</option><option value='28'  >Botswana</option><option value='29'  >Bouvet Island</option><option value='30'  >Brazil</option><option value='31'  >British Indian Ocean Territory</option><option value='32'  >Brunei Darussalam</option><option value='33'  >Bulgaria</option><option value='34'  >Burkina Faso</option><option value='35'  >Burundi</option><option value='36'  >Cambodia</option><option value='37'  >Cameroon</option><option value='38'  >Canada</option><option value='39'  >Cape Verde</option><option value='40'  >Cayman Islands</option><option value='41'  >Central African Republic</option><option value='42'  >Chad</option><option value='43'  >Chile</option><option value='44'  >China</option><option value='45'  >Christmas Island</option><option value='46'  >Cocos (Keeling) Islands</option><option value='47'  >Colombia</option><option value='48'  >Comoros</option><option value='49'  >Congo</option><option value='50'  >Cook Islands</option><option value='51'  >Costa Rica</option><option value='52'  >Croatia (Hrvatska)</option><option value='53'  >Cuba</option><option value='54'  >Cyprus</option><option value='55'  >Czech Republic</option><option value='56'  >Denmark</option><option value='57'  >Djibouti</option><option value='58'  >Dominica</option><option value='59'  >Dominican Republic</option><option value='60'  >East Timor</option><option value='61'  >Ecuador</option><option value='62'  >Egypt</option><option value='63'  >El Salvador</option><option value='64'  >Equatorial Guinea</option><option value='65'  >Eritrea</option><option value='66'  >Estonia</option><option value='67'  >Ethiopia</option><option value='68'  >Falkland Islands (Malvinas)</option><option value='69'  >Faroe Islands</option><option value='70'  >Fiji</option><option value='71'  >Finland</option><option value='72'  >France</option><option value='73'  >France, Metropolitan</option><option value='74'  >French Guiana</option><option value='75'  >French Polynesia</option><option value='76'  >French Southern Territories</option><option value='77'  >Gabon</option><option value='78'  >Gambia</option><option value='79'  >Georgia</option><option value='80'  >Germany</option><option value='81'  >Ghana</option><option value='82'  >Gibraltar</option><option value='83'  >Guernsey</option><option value='84'  >Greece</option><option value='85'  >Greenland</option><option value='86'  >Grenada</option><option value='87'  >Guadeloupe</option><option value='88'  >Guam</option><option value='89'  >Guatemala</option><option value='90'  >Guinea</option><option value='91'  >Guinea-Bissau</option><option value='92'  >Guyana</option><option value='93'  >Haiti</option><option value='94'  >Heard and Mc Donald Islands</option><option value='95'  >Honduras</option><option value='96'  >Hong Kong</option><option value='97'  >Hungary</option><option value='98'  >Iceland</option><option value='99'  >India</option><option value='100'  >Isle of Man</option><option value='101'  >Indonesia</option><option value='102'  >Iran (Islamic Republic of)</option><option value='103'  >Iraq</option><option value='104'  >Ireland</option><option value='105'  >Israel</option><option value='106'  >Italy</option><option value='107'  >Ivory Coast</option><option value='108'  >Jersey</option><option value='109'  >Jamaica</option><option value='110'  >Japan</option><option value='111'  >Jordan</option><option value='112'  >Kazakhstan</option><option value='113'  >Kenya</option><option value='114'  >Kiribati</option><option value='115'  >Korea, Democratic People's Republic of</option><option value='116'  >Korea, Republic of</option><option value='117'  >Kosovo</option><option value='118'  >Kuwait</option><option value='119'  >Kyrgyzstan</option><option value='120'  >Lao People's Democratic Republic</option><option value='121'  >Latvia</option><option value='122'  >Lebanon</option><option value='123'  >Lesotho</option><option value='124'  >Liberia</option><option value='125'  >Libyan Arab Jamahiriya</option><option value='126'  >Liechtenstein</option><option value='127'  >Lithuania</option><option value='128'  >Luxembourg</option><option value='129'  >Macau</option><option value='130'  >Macedonia</option><option value='131'  >Madagascar</option><option value='132'  >Malawi</option><option value='133'  >Malaysia</option><option value='134'  >Maldives</option><option value='135'  >Mali</option><option value='136'  >Malta</option><option value='137'  >Marshall Islands</option><option value='138'  >Martinique</option><option value='139'  >Mauritania</option><option value='140'  >Mauritius</option><option value='141'  >Mayotte</option><option value='142'  >Mexico</option><option value='143'  >Micronesia, Federated States of</option><option value='144'  >Moldova, Republic of</option><option value='145'  >Monaco</option><option value='146'  >Mongolia</option><option value='147'  >Montenegro</option><option value='148'  >Montserrat</option><option value='149'  >Morocco</option><option value='150'  >Mozambique</option><option value='151'  >Myanmar</option><option value='152'  >Namibia</option><option value='153'  >Nauru</option><option value='154'  >Nepal</option><option value='155'  >Netherlands</option><option value='156'  >Netherlands Antilles</option><option value='157'  >New Caledonia</option><option value='158'  >New Zealand</option><option value='159'  >Nicaragua</option><option value='160'  >Niger</option><option value='161'  >Nigeria</option><option value='162'  >Niue</option><option value='163'  >Norfolk Island</option><option value='164'  >Northern Mariana Islands</option><option value='165'  >Norway</option><option value='166'  >Oman</option><option value='167'  >Pakistan</option><option value='168'  >Palau</option><option value='169'  >Palestine</option><option value='170'  >Panama</option><option value='171'  >Papua New Guinea</option><option value='172'  >Paraguay</option><option value='173'  >Peru</option><option value='174'  >Philippines</option><option value='175'  >Pitcairn</option><option value='176'  >Poland</option><option value='177'  >Portugal</option><option value='178'  >Puerto Rico</option><option value='179'  >Qatar</option><option value='180'  >Reunion</option><option value='181'  >Romania</option><option value='182'  >Russian Federation</option><option value='183'  >Rwanda</option><option value='184'  >Saint Kitts and Nevis</option><option value='185'  >Saint Lucia</option><option value='186'  >Saint Vincent and the Grenadines</option><option value='187'  >Samoa</option><option value='188'  >San Marino</option><option value='189'  >Sao Tome and Principe</option><option value='190'  >Saudi Arabia</option><option value='191'  >Senegal</option><option value='192'  >Serbia</option><option value='193'  >Seychelles</option><option value='194'  >Sierra Leone</option><option value='195'  >Singapore</option><option value='196'  >Slovakia</option><option value='197'  >Slovenia</option><option value='198'  >Solomon Islands</option><option value='199'  >Somalia</option><option value='200'  >South Africa</option><option value='201'  >South Georgia South Sandwich Islands</option><option value='202'  >Spain</option><option value='203'  >Sri Lanka</option><option value='204'  >St. Helena</option><option value='205'  >St. Pierre and Miquelon</option><option value='206'  >Sudan</option><option value='207'  >Suriname</option><option value='208'  >Svalbard and Jan Mayen Islands</option><option value='209'  >Swaziland</option><option value='210'  >Sweden</option><option value='211'  >Switzerland</option><option value='212'  >Syrian Arab Republic</option><option value='213'  >Taiwan</option><option value='214'  >Tajikistan</option><option value='215'  >Tanzania, United Republic of</option><option value='216'  >Thailand</option><option value='217'  >Togo</option><option value='218'  >Tokelau</option><option value='219'  >Tonga</option><option value='220'  >Trinidad and Tobago</option><option value='221'  >Tunisia</option><option value='222'  >Turkey</option><option value='223'  >Turkmenistan</option><option value='224'  >Turks and Caicos Islands</option><option value='225'  >Tuvalu</option><option value='226'  >Uganda</option><option value='227'  >Ukraine</option><option value='228'  >United Arab Emirates</option><option value='229'  >United Kingdom</option><option value='230'  >United States</option><option value='231'  >United States minor outlying islands</option><option value='232'  >Uruguay</option><option value='233'  >Uzbekistan</option><option value='234'  >Vanuatu</option><option value='235'  >Vatican City State</option><option value='236'  >Venezuela</option><option value='237'  >Vietnam</option><option value='238'  >Virgin Islands (British)</option><option value='239'  >Virgin Islands (U.S.)</option><option value='240'  >Wallis and Futuna Islands</option><option value='241'  >Western Sahara</option><option value='242'  >Yemen</option><option value='243'  >Zaire</option><option value='244'  >Zambia</option><option value='245'  >Zimbabwe</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>
                                                                Get to know your freelancer -
                                                                <a href="javascript:void(0);" data-toggle="modal" id="askQuestion_1" data-target="#ask_question" type="button" >Ask question</a>
                                                                <p class="tooltip-content">
                                                                    <i class="fa fa-question-circle"></i>
                                                                    <span>If you will ask questions to your freelancers, you will get more information about your freelancers</span>
                                                                </p>
                                                            </label>                            
                                                        </div>
                                                        <div class="extra-note sel_question"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label class="featured_yn">
                                                                Want to make job as featured
                                                            </label>
                                                            <div class="material-switch ">
                                                                <input id="featured_1" name="featured_1" value="y" @if($job->featured > '0') checked @endif class="sp_switch_featured " data-fid="1" type="checkbox"  />
                                                                <label for="featured_1" class="label-primary">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label class="featured_yn">
                                                                Hide job from search
                                                            </label>
                                                            <div class="material-switch ">
                                                                <input class="hideFrmSearch" id="hideFrmSearch_1" name="hide" @if($job->hide == '1') value="1" checked @else value="1" @endif type="checkbox"  />
                                                                <label for="hideFrmSearch_1" class="label-primary">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row featured_job_opt @if($job->featured <= '0') hide @endif ">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label>
                                                                Featured Duration [Day(s)]:
                                                            </label>
                                                            <!-- <input class="form-control" type="text" name="featuredDuration" id="featuredDuration" maxlength="2" value = '1' /> -->
                                                            <div class="sp-quantity">
                                                                <div class="sp-minus sp-minus-delivery " data-fid="1"> <a class="ddd" href="javascript:void(0)" >-</a></div>
                                                                <div class="sp-input">
                                                                    <input type="text" name="featured" id="featuredDuration_1" data-fid='1' class="quntity-input" value="{{$job->featured}}" >
                                                                </div>
                                                                <div class="sp-plus sp-plus-delivery " data-fid="1" > <a class="ddd" href="javascript:void(0) ">+</a></div>
                                                            </div>
                                                        </div>
                                                        <label class="red_error err_dur"></label>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label>
                                                                Per day Amount ($):
                                                            </label>
                                                            <input class="form-control" type="text" name="cost" id="perDayAmount_1" value="{{$job->cost}}" readonly/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="post-serviceimg form-group">
                                                            <label>
                                                                Add File
                                                            </label>
                                                            <!-- <div class="file-input-wrapper">
                                                                <label for="upload-file_1" class="file-input-button">
                                                                    Upload file
                                                                </label>
                                                                <input id="upload-file_1" type="file" name="files" value="{{ old('files') }}">
                                                            </div> -->
                                                            <input type="file" multiple="multiple" name="files[]" value="" class="form-control">
                                                            <!-- <ul class="file-names clearfix" id="attchments_1"><img  frameborder="0" src="#" alt="Not Photo"></ul> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-right">
                                                    <div class="theme-button">
                                                        <a href="#postArabic" class="btn btn-system next_btn" data-toggle="tab">Add Arabic</a> &nbsp;&nbsp;<button type="submit" class="btn btn-system" name="saveJob" id="saveJob">Submit</button>
                                                    </div>
                                                </div>      
                                            </div>
                                        </div>

                                        <div class="tab-pane postarabic " dir="rtl" lang="ar" @if(App::isLocale('ar')) id="postEnglish" @else id="postArabic" @endif>
                                            <div class="theme-form">
                                                <h2 class="main-heading">
                                                    Post a Job
                                                </h2>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>
                                                                Job Title :
                                                            </label>
                                                            <input class="form-control" type="text" name="title_ar" id="jobTitle_2"  value="{{$job->title_ar}}" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <label>
                                                            Select Category :
                                                        </label>
                                                        <div class="form-group">
                                                            <select class="form-control jobCategory" name="jobCategory_2" id="jobCategory_2" data-fid="2" data-lid="1" >
                                                                <option value="{{$job->category}}" selected displayed>{{$job->getcategory->name}}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <label>
                                                            Select Sub-Category :
                                                        </label>
                                                        <div class="form-group">
                                                            <select class="form-control jobSubCategory" name="jobSubCategory_2" id="jobSubCategory_2" data-fid="2" data-lid="1" readonly disabled >
                                                            <option value="{{$job->subcategory}}" selected displayed>{{$job->getsubcategory->name}}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label>
                                                                Budget ($) :
                                                            </label>
                                                            <input class="form-control budget" type="text" name="budget_2" id="budget_2" maxlength="6" value="{{$job->budget}}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label>
                                                                Select experience level :
                                                            </label>
                                                                <select class="form-control expLevel" name="expLevel_2" id="expLevel_2" data-fid="2" data-lid="1" >
                                                                    <option value="a" @if($job->level == 'a' ) selected @endif >Any</option>
                                                                    <option value="B" @if($job->level == 'B') selected @endif >Beginner</option>
                                                                    <option value="M" @if($job->level == 'M') selected @endif>Intermediate</option>
                                                                    <option value="X" @if($job->level == 'X') selected @endif>Pro</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>
                                                                Job Description :
                                                            </label>
                                                            <textarea rows="3" name="description_ar" id="description_2" class="form-control ckeditor" value="">{{$job->description_ar}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6" id="skills">
                                                        <div class="form-group">
                                                            <label>
                                                                Skills :
                                                            </label>
                                                            <select class="form-control skill_choose_skillList skillList" multiple="multiple" name="skill_2[]" id="skill_2"  >
                                                                @foreach(explode('#',$job->skills) as $skills) <option value="{{$skills}}" selected>{{$skills}}</option> @endforeach
                                                            </select>
                                                            <div id="skill_2_error"></div>
                                                            <label id="skill_2_error" class="help-block" for="skill_2"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group post_job">
                                                            <label>
                                                                Bidding Deadline :
                                                            </label>
                                                            <input type="text" name="biddingDeadline_2" class="form-control datepicker bidding_deadline" id="biddingDeadline_2" value="{{$job->deadline}}"  />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label>
                                                                Select estimated job time duration :
                                                            </label>
                                                            <select class="form-control estimatedDuration" name="estimatedDuration_2" id="estimatedDuration_2" >
                                                                <option value="{{$job->duration}}" selected>{{$job->duration}}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label>
                                                                Select job type :
                                                            </label>
                                                            <select class="form-control jobType" name="jobType_2" id="jobType_2" readonly disabled >
                                                                <option value="0" @if($job->public == '0') selected @endif>Public</option> <option value="1" @if($job->public == '1') selected @endif>Private</option><option value="pu" >Public</option> <option value="pr" >Private</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row invited_users hide">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>
                                                                Invited User List
                                                                <span>Add User</span>
                                                            </label>
                                                            <span class="extra-note invited_user"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>
                                                                Accept bids from :
                                                            </label>
                                                            <select class="form-control selectpicker location" title="All location" multiple name="bidsFromLocation_2[]" id="bidsFromLocation_2" data-live-search="true" >
                                                                <option value='1'  >Afghanistan</option><option value='2'  >Albania</option><option value='3'  >Algeria</option><option value='4'  >American Samoa</option><option value='5'  >Andorra</option><option value='6'  >Angola</option><option value='7'  >Anguilla</option><option value='8'  >Antarctica</option><option value='9'  >Antigua and Barbuda</option><option value='10'  >Argentina</option><option value='11'  >Armenia</option><option value='12'  >Aruba</option><option value='13'  >Australia</option><option value='14'  >Austria</option><option value='15'  >Azerbaijan</option><option value='16'  >Bahamas</option><option value='17'  >Bahrain</option><option value='18'  >Bangladesh</option><option value='19'  >Barbados</option><option value='20'  >Belarus</option><option value='21'  >Belgium</option><option value='22'  >Belize</option><option value='23'  >Benin</option><option value='24'  >Bermuda</option><option value='25'  >Bhutan</option><option value='26'  >Bolivia</option><option value='27'  >Bosnia and Herzegovina</option><option value='28'  >Botswana</option><option value='29'  >Bouvet Island</option><option value='30'  >Brazil</option><option value='31'  >British Indian Ocean Territory</option><option value='32'  >Brunei Darussalam</option><option value='33'  >Bulgaria</option><option value='34'  >Burkina Faso</option><option value='35'  >Burundi</option><option value='36'  >Cambodia</option><option value='37'  >Cameroon</option><option value='38'  >Canada</option><option value='39'  >Cape Verde</option><option value='40'  >Cayman Islands</option><option value='41'  >Central African Republic</option><option value='42'  >Chad</option><option value='43'  >Chile</option><option value='44'  >China</option><option value='45'  >Christmas Island</option><option value='46'  >Cocos (Keeling) Islands</option><option value='47'  >Colombia</option><option value='48'  >Comoros</option><option value='49'  >Congo</option><option value='50'  >Cook Islands</option><option value='51'  >Costa Rica</option><option value='52'  >Croatia (Hrvatska)</option><option value='53'  >Cuba</option><option value='54'  >Cyprus</option><option value='55'  >Czech Republic</option><option value='56'  >Denmark</option><option value='57'  >Djibouti</option><option value='58'  >Dominica</option><option value='59'  >Dominican Republic</option><option value='60'  >East Timor</option><option value='61'  >Ecuador</option><option value='62'  >Egypt</option><option value='63'  >El Salvador</option><option value='64'  >Equatorial Guinea</option><option value='65'  >Eritrea</option><option value='66'  >Estonia</option><option value='67'  >Ethiopia</option><option value='68'  >Falkland Islands (Malvinas)</option><option value='69'  >Faroe Islands</option><option value='70'  >Fiji</option><option value='71'  >Finland</option><option value='72'  >France</option><option value='73'  >France, Metropolitan</option><option value='74'  >French Guiana</option><option value='75'  >French Polynesia</option><option value='76'  >French Southern Territories</option><option value='77'  >Gabon</option><option value='78'  >Gambia</option><option value='79'  >Georgia</option><option value='80'  >Germany</option><option value='81'  >Ghana</option><option value='82'  >Gibraltar</option><option value='83'  >Guernsey</option><option value='84'  >Greece</option><option value='85'  >Greenland</option><option value='86'  >Grenada</option><option value='87'  >Guadeloupe</option><option value='88'  >Guam</option><option value='89'  >Guatemala</option><option value='90'  >Guinea</option><option value='91'  >Guinea-Bissau</option><option value='92'  >Guyana</option><option value='93'  >Haiti</option><option value='94'  >Heard and Mc Donald Islands</option><option value='95'  >Honduras</option><option value='96'  >Hong Kong</option><option value='97'  >Hungary</option><option value='98'  >Iceland</option><option value='99'  >India</option><option value='100'  >Isle of Man</option><option value='101'  >Indonesia</option><option value='102'  >Iran (Islamic Republic of)</option><option value='103'  >Iraq</option><option value='104'  >Ireland</option><option value='105'  >Israel</option><option value='106'  >Italy</option><option value='107'  >Ivory Coast</option><option value='108'  >Jersey</option><option value='109'  >Jamaica</option><option value='110'  >Japan</option><option value='111'  >Jordan</option><option value='112'  >Kazakhstan</option><option value='113'  >Kenya</option><option value='114'  >Kiribati</option><option value='115'  >Korea, Democratic People's Republic of</option><option value='116'  >Korea, Republic of</option><option value='117'  >Kosovo</option><option value='118'  >Kuwait</option><option value='119'  >Kyrgyzstan</option><option value='120'  >Lao People's Democratic Republic</option><option value='121'  >Latvia</option><option value='122'  >Lebanon</option><option value='123'  >Lesotho</option><option value='124'  >Liberia</option><option value='125'  >Libyan Arab Jamahiriya</option><option value='126'  >Liechtenstein</option><option value='127'  >Lithuania</option><option value='128'  >Luxembourg</option><option value='129'  >Macau</option><option value='130'  >Macedonia</option><option value='131'  >Madagascar</option><option value='132'  >Malawi</option><option value='133'  >Malaysia</option><option value='134'  >Maldives</option><option value='135'  >Mali</option><option value='136'  >Malta</option><option value='137'  >Marshall Islands</option><option value='138'  >Martinique</option><option value='139'  >Mauritania</option><option value='140'  >Mauritius</option><option value='141'  >Mayotte</option><option value='142'  >Mexico</option><option value='143'  >Micronesia, Federated States of</option><option value='144'  >Moldova, Republic of</option><option value='145'  >Monaco</option><option value='146'  >Mongolia</option><option value='147'  >Montenegro</option><option value='148'  >Montserrat</option><option value='149'  >Morocco</option><option value='150'  >Mozambique</option><option value='151'  >Myanmar</option><option value='152'  >Namibia</option><option value='153'  >Nauru</option><option value='154'  >Nepal</option><option value='155'  >Netherlands</option><option value='156'  >Netherlands Antilles</option><option value='157'  >New Caledonia</option><option value='158'  >New Zealand</option><option value='159'  >Nicaragua</option><option value='160'  >Niger</option><option value='161'  >Nigeria</option><option value='162'  >Niue</option><option value='163'  >Norfolk Island</option><option value='164'  >Northern Mariana Islands</option><option value='165'  >Norway</option><option value='166'  >Oman</option><option value='167'  >Pakistan</option><option value='168'  >Palau</option><option value='169'  >Palestine</option><option value='170'  >Panama</option><option value='171'  >Papua New Guinea</option><option value='172'  >Paraguay</option><option value='173'  >Peru</option><option value='174'  >Philippines</option><option value='175'  >Pitcairn</option><option value='176'  >Poland</option><option value='177'  >Portugal</option><option value='178'  >Puerto Rico</option><option value='179'  >Qatar</option><option value='180'  >Reunion</option><option value='181'  >Romania</option><option value='182'  >Russian Federation</option><option value='183'  >Rwanda</option><option value='184'  >Saint Kitts and Nevis</option><option value='185'  >Saint Lucia</option><option value='186'  >Saint Vincent and the Grenadines</option><option value='187'  >Samoa</option><option value='188'  >San Marino</option><option value='189'  >Sao Tome and Principe</option><option value='190'  >Saudi Arabia</option><option value='191'  >Senegal</option><option value='192'  >Serbia</option><option value='193'  >Seychelles</option><option value='194'  >Sierra Leone</option><option value='195'  >Singapore</option><option value='196'  >Slovakia</option><option value='197'  >Slovenia</option><option value='198'  >Solomon Islands</option><option value='199'  >Somalia</option><option value='200'  >South Africa</option><option value='201'  >South Georgia South Sandwich Islands</option><option value='202'  >Spain</option><option value='203'  >Sri Lanka</option><option value='204'  >St. Helena</option><option value='205'  >St. Pierre and Miquelon</option><option value='206'  >Sudan</option><option value='207'  >Suriname</option><option value='208'  >Svalbard and Jan Mayen Islands</option><option value='209'  >Swaziland</option><option value='210'  >Sweden</option><option value='211'  >Switzerland</option><option value='212'  >Syrian Arab Republic</option><option value='213'  >Taiwan</option><option value='214'  >Tajikistan</option><option value='215'  >Tanzania, United Republic of</option><option value='216'  >Thailand</option><option value='217'  >Togo</option><option value='218'  >Tokelau</option><option value='219'  >Tonga</option><option value='220'  >Trinidad and Tobago</option><option value='221'  >Tunisia</option><option value='222'  >Turkey</option><option value='223'  >Turkmenistan</option><option value='224'  >Turks and Caicos Islands</option><option value='225'  >Tuvalu</option><option value='226'  >Uganda</option><option value='227'  >Ukraine</option><option value='228'  >United Arab Emirates</option><option value='229'  >United Kingdom</option><option value='230'  >United States</option><option value='231'  >United States minor outlying islands</option><option value='232'  >Uruguay</option><option value='233'  >Uzbekistan</option><option value='234'  >Vanuatu</option><option value='235'  >Vatican City State</option><option value='236'  >Venezuela</option><option value='237'  >Vietnam</option><option value='238'  >Virgin Islands (British)</option><option value='239'  >Virgin Islands (U.S.)</option><option value='240'  >Wallis and Futuna Islands</option><option value='241'  >Western Sahara</option><option value='242'  >Yemen</option><option value='243'  >Zaire</option><option value='244'  >Zambia</option><option value='245'  >Zimbabwe</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row hide">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>
                                                                Get to know your freelancer -
                                                                <a href="javascript:void(0);" data-toggle="modal" id="askQuestion_2" data-target="#ask_question" type="button" >Ask question</a>
                                                                <p class="tooltip-content">
                                                                    <i class="fa fa-question-circle"></i>
                                                                    <span>If you will ask questions to your freelancers, you will get more information about your freelancers</span>
                                                                </p>
                                                            </label>
                                                                
                                                            </div>
                                                            <div class="extra-note sel_question"></div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label class="featured_yn">
                                                                Want to make job as featured
                                                            </label>
                                                            <div class="material-switch ">
                                                                <input id="featured_2" name="featured_2" value="y" @if($job->featured > 0) checked @endif class="sp_switch_featured" data-fid="2" type="checkbox" />
                                                                <label for="featured_2" class="label-primary">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label class="featured_yn">
                                                                Hide job from search
                                                            </label>
                                                            <div class="material-switch ">
                                                                <input id="featured_2" name="featured_2" @if($job->hide == '0') value="0" @else value="1" checked @endif class="sp_switch_featured " data-fid="2" type="checkbox"  />
                                                                <label for="hideFrmSearch_2" class="label-primary"> 
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row featured_job_opt @if($job->featured <= 0) hide @endif ">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label>
                                                                Featured Duration [Day(s)]:
                                                            </label>
                                                            <!-- <input class="form-control" type="text" name="featuredDuration" id="featuredDuration" maxlength="2" value = '1' /> -->
                                                            <div class="sp-quantity">
                                                                <div class="sp-minus sp-minus-delivery hide" data-fid="2"> <a class="ddd" href="javascript:void(0)" >-</a></div>
                                                                <div class="sp-input">
                                                                    <input type="text" name="featuredDuration_2" id="featuredDuration_2" class="quntity-input" value="{{$job->featured}}" >
                                                                </div>
                                                            <div class="sp-plus sp-plus-delivery hide" data-fid="2"> <a class="ddd" href="javascript:void(0)">+</a></div>
                                                            </div>
                                                        </div>
                                                        <label class="red_error err_dur"></label>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label>
                                                                Per day Amount ($):
                                                            </label>
                                                            <input class="form-control perDayAmount" type="text" name="perDayAmount_2" id="perDayAmount_2" value="{{$job->cost}}" readonly/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row hide">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="post-serviceimg form-group">
                                                            <label>
                                                                Add File
                                                            <div class="file-input-wrapper">
                                                                <label for="upload-file_2" class="file-input-button">
                                                                    Upload file
                                                                </label>
                                                                <input id="upload-file_2" type="file" name="">
                                                            </div>
                                                            <ul class="file-names clearfix" id="attchments"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-right">
                                                    <div class="theme-button">
                                                        <input type="hidden" name="action" id="action" value="saveData">
                                                        <button type="submit" class="btn btn-system" name="saveJob" id="saveJob">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- start job type private -->
                                    <div id="privateJob" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close pr_email_cancel" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Job Invitations</h4>
                                                </div>
                                                <div class="modal-body">
                                                <!-- <form class="form" action="#" id="jobInvitation" method="post"> -->
                                                    <div class="form-group" id="parent_usr_skill">
                                                        <label class="control-label">Select Users :</label>
                                                        <select class="form-control usr_skill" multiple="multiple" name="invitations[]" id="invitations">
                                                            <option value='2'  >jay</option><option value='4'  >anna</option><option value='6'  >Karlosdoe</option><option value='7'  >Ishit</option><option value='9'  >TestUser</option><option value='12'  >Vishal</option><option value='13'  >Heena</option><option value='21'  >Jv</option><option value='26'  >****Customer</option><option value='27'  >****Freelancer</option><option value='29'  >Yalbader90</option><option value='31'  >Asd</option><option value='36'  >Rainy</option><option value='38'  >Peter1</option><option value='40'  >1paulcabrera@gmail.com</option><option value='42'  >Bama749</option><option value='43'  >Sejadpatani</option><option value='46'  >John</option><option value='48'  >Nicolesuman</option><option value='50'  >Abdulwahab</option><option value='54'  >Medo728</option><option value='56'  >Graphical_aadi</option><option value='58'  >Aditya_singh</option><option value='60'  >SpiritKing42</option><option value='62'  >gaurikasat</option><option value='66'  >Dicman</option><option value='68'  >Yojana</option><option value='70'  >Roshanali11</option><option value='72'  >Niravsp</option><option value='74'  >Saikat1</option><option value='76'  >charlie74</option><option value='81'  >saikat007</option><option value='89'  >Jack.William</option><option value='100'  >Masa2el2</option>
                                                        </select>
                                                        <!-- <textarea class="form-control usr_skill txtarEmails" name="txtarEmails"></textarea> -->
                                                        <label id="invitations_error" class="help-block hide">Please select users</label>
                                                        <label class="wrong_email_error help-block red_error"></label>
                                                    </div>
                                                    <!-- </form> -->
                                                </div>
                                                <div class="modal-footer">
                                                    <!-- <div class="theme-button-default" data-dismiss="modal">
                                                        <a href="javascript:void()" id="pr_email_cancel">Cancel</a>
                                                    </div> -->
                                                    <div class="theme-button" data-dismiss="modal">
                                                        <button type="button" class="btn btn-block btn-system" id="invite">add another milestone</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end job type private -->
                                    <div class="modal fade " id="ask_question" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        &times;
                                                    </button>
                                                    <h4 class="modal-title">
                                                        Suggested Questions
                                                    </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <ul class="question_lsit checkboxes" >
                                                        <li>
                                                            <label class="signin-check hide" for='que_1'>
                                                                <input type='checkbox' id='que_1' data_id='1'  name='que_1' checked value="1">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <input type='text' name='question' id='question' class="form-control">
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="modal-footer">
                                                    <!-- <div class="theme-button-default" data-dismiss="modal">
                                                        <a href="javascript:void(0)">Cancel</a>
                                                    </div> -->
                                                    <div class="theme-button" data-dismiss="modal">
                                                        <button type="button" class="btn btn-block btn-system" id="addQue">Add this Question</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                            Write an informative title of the job - the job seeker will make a quick judgment of either to move on or read the details
                                        </li>
                                        <li>
                                            Upload more information regarding your job title to get a realistic quote - to enable easier search, include keywords that are relevant, watch your abbreviation and also make a track of your results.
                                        </li>
                                        <li>
                                            Compare the experience level to your requirements so that you will get a chance to get a job.
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
<!-- /.container -->
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
    
    $(document).ready(function() {
        var deadline_days = "30";
        var url = "http://www.sukhadaam.com/demo/sawlii/ajaxPostJob";
        $days = "+"+deadline_days+"D";
        $('.datepicker').datepicker({
            format: 'DD-MM-YYYY',
            minDate: 0, maxDate: $days            
       });
        $(document).on("change",".bidding_deadline", function(e){
            $date = $(this).val();
            $("#biddingDeadline_2").val($date);
            $("#biddingDeadline_2").attr("disabled",true);
        });

        //click on next button redirect to next tab
        $(document).on("click", ".next_btn", function() {
            $(".default_tab").removeClass("hide");
            $(".default_tab").removeClass("active");
            $(".second_tab").removeClass("hide");
            $(".second_tab").addClass("active");
        }); 

        /* Delete file attachments */
        $(document).on("click",".delAttachment", function(e){
            var id = $(this).attr("data_id");
            e.preventDefault();
            if (confirm("Are you sure you want to delete this attachment?")) {
                $.ajax({
                    url: url,
                    type: "POST",
                    dataType: "json",
                    data:{'action':'file_delete','id':id},
                    beforeSend: function () {
                       addOverlay();
                   },
                   success: function (response) {
                    if(response['status'] == 'true'){
                        $('.attchFile_'+id).remove();
                        toastr['success']('Attachment deleted successfully.');
                    } else {
                        toastr['error']('There is an issue deleting this attachment.');
                    }
                },
                complete: function (xhr) {
                    removeOverlay();
                    return false;
                }
            });
            }
        });
        /* End code */

        $(document).on("change",".sp_switch_featured",function(e){
            $fid = $(this).attr("data-fid");
            if($(".sp_switch_featured").prop("checked")==true){
                $("#featured_2").prop("checked",true);
                $("#featured_2").prop("disabled",true);
                $(".featured_job_opt").removeClass("hide");
            }else{
                $(".featured_job_opt").addClass("hide");
                $("#featured_2").prop("checked",false);
                $("#featured_2").prop("disabled",false);
            }
        });

        $(document).on("change",".hideFrmSearch",function(e){
            if($(this).prop("checked")==true){
                $("#hideFrmSearch_2").prop("checked",true);
                $("#hideFrmSearch_2").prop("disabled",true);
            }else{
                $("#hideFrmSearch_2").prop("checked",false);
                $("#hideFrmSearch_2").prop("disabled",false);
            }
        });

        $(document).on("keydown",".featuredDuration",function(event){
           var charCode = event.which || event.keyCode || event.charCode;
           return false;
       });
        $(document).on("click",".sp-plus",function(e){
            $fid = $(this).attr("data-fid");
            var dur = $("#featuredDuration_"+$fid).val();
            if(dur>30){
                $("#featuredDuration_"+$fid).val("30");
                return false;
            }
           var price = $("#perDayAmount_"+$fid).val();
           $("#perDayAmount_"+$fid).val(dur*"10");
           $("#featuredDuration_2").val(dur);
           $("#featuredDuration_2").attr("disabled",true);
           $("#perDayAmount_2").val(dur*"10");
       });
        $(document).on("click",".sp-minus",function(e){
            $ifid = $(this).attr("data-fid");
            var dur = $("#featuredDuration_"+$ifid).val();
            if(dur<1){
                $("#featuredDuration_"+$ifid).val("1");
                return false;
            }
            var price = $("#perDayAmount_"+$fid).val();
            $("#featuredDuration_2").val(dur);
            $("#featuredDuration_2").attr("disabled",true);
            $("#perDayAmount_"+$fid).val(dur*"10");
            $("#perDayAmount_2").val(dur*"10");
        });
        $(document).on("change",".featuredDuration",function(e){
            $fid = $(this).attr("data-fid"); 
           var total_fetured_amount = ($(this).val())*"10";
           if(!isNaN(total_fetured_amount)){
                $("#perDayAmount_"+$fid).val(total_fetured_amount);
                $("#perDayAmount_2").val(total_fetured_amount);
            }
            else{
                toastr['error']("Invalid value for featured days. Try with numeric values","Invalid Value");
                $("#perDayAmount_"+$fid).val("10");
                $("#perDayAmount_2").val("10");
                $(".featuredDuration").val("1");
            }
        });
        $(document).on("click","#invite",function(e){
            var userList = $('#invitations').val();
            if(userList == null){
                $('#invitations_error').removeClass('hide');
                $('#invitations').parent().addClass('has-error');
            } else {
                $.post("http://www.sukhadaam.com/demo/sawlii/units-sd/post_job-sd/ajax.post_job-sd.php",
                    {"action":"sel_invitations","user_id":userList},
                function(data){
                    if(data.result.ndata.length>0){
                        $('.wrong_email_error').html("Few of the emails are not available at this moment. Please check and try again.");
                    }
                    else{
                        $('.wrong_email_error').html("");
                        $('.invited_user').html(data.result.pdata);
                        $("#privateJob").modal("hide");
                    }
                },"json");
            }
        });

        $(document).on("click","#pr_email_cancel",function(e){
            $('.wrong_email_error').html("");
        });

        $(document).on("click",".pr_email_cancel",function(e){
            $('.wrong_email_error').html("");
        });


        $(document).on("change","#invitations",function(e){
            var userList = $('#invitations').val();
            if(userList != null){
                $('#invitations_error').addClass('hide');
                $('#invitations').parent().removeClass('has-error');
            }
        });

        /* File upload using ajax */
        $('#upload-file_1').change(function(event) {
            var file_data = $(this).prop('files')[0];
            var fileTagId = $(this).attr('id');
            var ImageId = fileTagId.split(',');
            var img = ImageId[1];

            console.log(file_data);

            var imagPath = $(this).val();
            var files = event.target.files;
            var fileName = files[0].name;
            var lastdotval = imagPath.lastIndexOf(".");
            var res = imagPath.substr(lastdotval + 1, 4);

            if (this.files[0].size > 5242880) {
                toastr['info']("Uploaded document size must be less then 5MB");
                return false;
            }
            if (res != 'png' && res != 'PNG' && res != 'JPG' && res != 'jpg' && res != 'JPEG' && res != 'jpeg' && res != 'csv' && res != 'doc' && res != 'docx' && res != 'pdf' && res != 'PDF') {
                toastr["error"]("Please select a valid file");
                return false;

            } else {
                token = $('#frmToken').val();
                var img_form_data = new FormData();
                img_form_data.append("file", file_data);
                img_form_data.append("action", "move_image");
                img_form_data.append("token",token);
                img_form_data.append("extention",res);

                $.ajax({
                    url: url,
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: img_form_data,
                    type: 'post',
                    dataType: 'json',
                    beforeSend: function () {
                        addOverlay();
                    },
                    success:function(data)
                    {
                        $('#attchments_1').append(data);
                    },
                    complete: function (xhr) {
                        removeOverlay();
                    }
                });
            }
        });
        /* End code */

        $(document).on("change",".jobType",function() {
            var jobType = $(this).val();
            if(jobType == 'pr'){
                $('#privateJob').modal('show');
                $('.invited_users').removeClass('hide');
            } else {
                $('.invited_users').addClass('hide');
            }
            $('#jobType_2 option').filter(function() { 
                return ($(this).val() == jobType); //To select Blue
            }).prop('selected', true);
            $('#jobType_2').prop("disabled",true);

        });


        $(document).on("click","#saveJob",function(e){
            var questions = $('.sel_question').text();

            $("#frmJobPost").validate({
                ignore: [],
                errorClass: 'help-block',
                errorElement: 'label',
                errorPlacement: function (error, element) {
                    if (element.attr("data-error-container")) {
                        error.appendTo(element.attr("data-error-container"));
                    } else {
                        error.insertAfter(element);
                    }
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
                    jobTitle_1:{required:true,startingSpaceNotAllow:true},
                    // jobCategory_1:{required:true},
                    // jobSubCategory_1 : {required:true},
                    // budget_1:{required:true,digits:true,zeroNotAllowed:true},
                    description_1:{required:true},
                    "skill_1[]": {
                        required: {
                            depends: function(element) {
                                if($("#jobCategory_1").val()==""){return false}else{return true;}
                            }
                        }
                    },
                    biddingDeadline_1 : { required: true}
                },
                messages:
                {   
                    jobTitle_1:{required:"Please enter job title",startingSpaceNotAllow:"Space is not allowed"},
                    // jobCategory_1:{required:"Please select category"},
                    // jobSubCategory_1:{ required: "Please select sub category"},
                    // budget:{budget_1:"Please enter budget",digits:"Please enter number only"},
                    description_1:{required:"Please enter description",startingSpaceNotAllow:"Space is not allowed"},
                    "skill_1[]" : {required:"Please select skills"},

                    biddingDeadline_1: { required:"Please select bidding deadline"}
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

            if($("#frmJobPost").valid())
            {

                var skills = $("#skill_1").val();

                var skills_arr = String(skills).split(",");
                var skill_single = final_str = '';

                for(var i=0; i<skills_arr.length;i++){
                    skill_single = parseInt(skills_arr[i]);
                    if(isNaN(skill_single)){
                        final_str += String(skills_arr[i])+ ", ";
                    }
                }
                if(final_str!=''){
                    final_str = final_str.substring(0,final_str.length - 2);
                    toastr['error']("These skill(s) ("+final_str+") are not approved on this platform. Please try selecting from suggestions.","Invalid Skills");
                    return false;
                }

                if($("#featuredDuration_1").val()=="" || $("#featuredDuration_1").val()== null){
                    toastr['error']("Minimum featured duration days should be atleast one.");
                    return false;
                }
                if($("#jobType_1").val()=='pr'){
                    if($('#invitations').val()==null || $('#invitations').val()==""){
                        toastr['error']("Please select atleast one freelancer for this private job.","No Freelancers!!");
                        return false;
                    }
                    else{
                        
                        addOverlay();
                        $("#frmJobPost").submit();
                    }
                }
                else{

                    addOverlay();
                    $("#frmJobPost").submit();
                }
            }
        });

        jQuery.validator.addMethod("startingSpaceNotAllow", function(value, element)
        {
            return this.optional(element) || /^\S.*$/.test(value);
        }, "Space is not allowed");

        jQuery.validator.addMethod("zeroNotAllowed", function(value, element)
        {
            if(value!=0){
                return true;
            }
            else{
                return false;
            }
        }, "Budget should be more than zero.");

        $(document).on("click",".que_remove",function() {
            var dataId = $(this).attr('data_id');
            $('#que_'+dataId).attr('checked',false);
        });

        $(document).on("click",".user_remove",function() {
            var dataId = $(this).attr('data_id');
            arr = $('#invitations').val();
            //console.log("Before Array "+arr);
            for(i=0; i < arr.length; i++) {
                if(arr[i] == dataId) {
                    arr.splice(i,1);
                }
            }
            if(arr.length == 0){    
                $('#invitations').val("").trigger("change");
            } else {
                $('#invitations').val(arr).trigger("change");
            }
        });

        /* Select Job Sub Category */
        $(document).on("change",".jobCategory",function(){
            var catId = $(this).val();
            var fid = $(this).attr("data-fid");    
            var lid = $(this).attr("data-lid");
            addOverlay();
            $.post("http://www.sukhadaam.com/demo/sawlii/units-sd/post_job-sd/ajax.post_job-sd.php",
                {"action":"load_sub","cat_id":catId},
                function(data){
                    $("#jobSubCategory_"+fid).html(data);
                    $("#jobSubCategory_2").html(data);
                    //Default Select 2nd form Category
                    $('#jobCategory_2 option').filter(function() { 
                        return ($(this).val() == catId); //To select Blue
                    }).prop('selected', true);
                    $('#jobCategory_2').prop("disabled",true);
                    //removeOverlay();
                });
                $.post("http://www.sukhadaam.com/demo/sawlii/units-sd/post_job-sd/ajax.post_job-sd.php",
                {"action":"load_skills","cat_id":catId},
                function(data){
                    //$("#jobSubCategory").html(data);
                    $('#skills select').html(data);
                    removeOverlay();
                });
        });
        //Default Select 2nd form Sub Category
        $(document).on("change", ".jobSubCategory", function() {
            var sub_cat = $(this).val();
            $('#jobSubCategory_2 option').filter(function() { 
                return ($(this).val() == sub_cat); //To select Blue
            }).prop('selected', true);
            $('#jobSubCategory_2').prop("disabled",true);
        });
        //Default Select 2nd form Sub Category
        $(document).on("change", ".expLevel", function() {
            var level = $(this).val();
            $('#expLevel_2 option').filter(function() { 
                return ($(this).val() == level); //To select Blue
            }).prop('selected', true);
            $('#expLevel_2').prop("disabled",true);
        });
        //Default Select 2nd form Sub Category
        $(document).on("change", ".estimatedDuration", function() {
            var sub_cat = $(this).val();
            $('#estimatedDuration_2 option').filter(function() { 
                return ($(this).val() == sub_cat); //To select Blue
            }).prop('selected', true);
            $('#estimatedDuration_2').prop("disabled",true);
        });
        //On blur update budget on second form
        $(document).on("blur", ".budget", function() {
            $val = $(this).val();
            $("#budget_2").val($val);
            $("#budget_2").prop("disabled",true);
        });

        /* End code */
        $(document).ready(function(){
            $("#jobSubCategory").html("<option value=''>---Select Sub Category---</option>");
            $("#jobCategory").trigger("change");
        });

        $(document).on("keypress",".select2-search__field",function(inputValue){
            var inputValue = event.which;
            // allow letters and whitespaces only.
            if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)) {
                return false;
            }
        });

        /* Adding questions */
        $(document).on("click","#addQue",function(){
            var selected = [];
            $('.checkboxes input:checked').each(function() {
                selected.push($(this).attr('data_id'));
            });
            selected = selected.toString();
            //console.log(selected);
            if(selected!=''){
                $.post("http://www.sukhadaam.com/demo/sawlii/units-sd/post_job-sd/ajax.post_job-sd.php",
                    {"action":"sel_question","que_id":selected},
                    function(data){
                        $('.sel_question').html(data.result);
                    },"json");
            } else if(selected == ''){
                $('.sel_question').html('');
            }
        });
        /* End code */

        $('#location').selectpicker();
        //$('#skill').select2();

        $(".skill_choose_skillList").select2({
            //tags:true,
            placeholder: " --Select Skills-- ",
            dropdownParent: $('#skills')
        });

        $(document).on("change",".skillList",function(){
            $list = $(this).val();
            $("#skill_2").val($list).select2();
            $("#skill_2").attr("disabled",true);
        });
        $(document).on("change",".location",function(){
            $list = $(this).val();
            $("#bidsFromLocation_2").val($list).selectpicker();
            $("#bidsFromLocation_2").attr("disabled",true);
        });
       
        $('#invitations').select2({
            //tags:true,
            dropdownParent: $('#parent_usr_skill')
        });
        $(document).on('keypress','#budget',function(){
              var b_length = $("#budget").val().length;
              if(b_length>5){
                return false;
            }
            return true;
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


<div class="modal fade" id="userTypeSelectionModal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <form name="userTypesetForm" id="userTypesetForm" method="post" action="http://www.sukhadaam.com/demo/sawlii/userTypeSubmit">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">First, tell us what you're looking for.</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <select name="userTypeS" id="userTypeS" class="form-control">
              <option value="">Select User Type</option>
              <option value="C">Hire</option>
              <option value="F">Work</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="userTypesetbtn" id="userTypesetbtn" class="btn btn-primary">Submit</button>
          <button type="button" name="loginCancel" id="loginCancel" class="btn btn-info">Sign in Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>


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

    $(document).on("click",".topSearch",function(){
      var slug = $("#search_type").val(),
      field = $(this).attr("id"),
      keyword = (field=='full') ? $("#searchKeyword").val() : $("#MsearchKeyword").val(),category=$("#category").val(),subcategory=$("#subcategory").val(),location=$("#search_location").val(),url=$params="";
      var user_rype = $(".search_user_type").val();
      var param = [];
      if(keyword!='' && keyword!=undefined){
        param.push("keyword="+keyword); 
      }
      if(location!='' && location!=undefined){
        param.push("location="+location); 
      }
      if(category!='' && category!=undefined){
        param.push("category="+category); 
      }
      if(subcategory!='' && subcategory!=undefined){
        param.push("subcategory="+subcategory); 
      }
      if(param.length > 0){
        $.each(param,function(key,val){
          var sign = "&";
          if(key==0){
            sign="?";
          }
          $params += sign+val;
        });
      }

      if(slug == 'Jobs')
      {
        url = "http://www.sukhadaam.com/demo/sawlii/search/"+"jobs/"+$params;
      }
      else if(slug == 'Services')
      {
        url = "http://www.sukhadaam.com/demo/sawlii/search/"+"service/"+$params;
      }
      else
      {
        if(user_rype=="Freelancer"){
          url = "http://www.sukhadaam.com/demo/sawlii/search/"+"jobs/";
        }else{
          url = "http://www.sukhadaam.com/demo/sawlii/search/"+"freelancer/";          
        }
      }
      window.location.href = url;
    });

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