@if(!Auth::user())
<div class="loading hide">
    <div>
        <img src="{{asset('frontend/img/loadingGraphic.gif')}}" alt="processing"/>
        <span>You are not signed in. Please sign in to continue.</span>
    </div>
</div>
<header class="sub-header index-header">
    <!-- Navigation -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">
                        Toggle navigation
                    </span>
                    <span class="icon-bar">
                    </span>
                    <span class="icon-bar">
                    </span>
                    <span class="icon-bar">
                    </span>
                </button>
                <a class="navbar-brand" href="{{route('/',$lang)}}" title="Sawlii">
                    <div class="logo-header">
                    <img src="{{asset('frontend/img/12887404231553072498.png')}}" />
                    </div>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <li><a href="{{route('service',$lang)}}">Browse Services</a></li>
                    </li>
                    <li>
                        <li><a href="{{route('jobs',$lang)}}">Browse Jobs</a></li>
                    </li>
                    <li>
                        <a href="{{route('signup',$lang)}}">Sign Up</a>
                    </li>
                    <li>
                        <a href="{{route('signin',$lang)}}">Sign In</a>
                    </li>
                    <li>
                        <div class="language-selection">
                        
                            <select  class="form-control" onchange="top.location=this.value">
                                @if(App::isLocale('en'))
                                <option value="{{Route(Route::currentRouteName(), 'en')}}">English</option>
                                <option value="{{Route(Route::currentRouteName(), 'ar')}}">Arabic</option>
                                @else
                                <option value="{{Route(Route::currentRouteName(), 'ar')}}">Arabic</option>
                                <option value="{{Route(Route::currentRouteName(), 'en')}}">English</option>
                                @endif
                            </select>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
@else

@if(Auth::user()->type == 'C')
<div class="loading hide">
    <div>
        <img src="{{asset('frontend/img/loadingGraphic.gif')}}" alt="processing"/>
        <span>You are not signed in. Please sign in to continue.</span>
    </div>
</div>
<!-- <div class="hidden-header"></div> -->
<header class="sub-header index-header">
    <!-- Navigation -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">
                        Toggle navigation
                    </span>
                    <span class="icon-bar">
                    </span>
                    <span class="icon-bar">
                    </span>
                    <span class="icon-bar">
                    </span>
                </button>
                <a class="navbar-brand" href="{{route('/',$lang)}}">
                <div class="logo-header">
                    <img src="{{asset('frontend/img/12887404231553072498.PNG')}}" />
                </div>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{route('service',$lang)}}">Browse Services</a>
                    </li>
                    
                    <li class="login-img">
                        <a href="#" data-toggle="dropdown">
                            <div class="login-usr-img">
                                <img src="{{asset('frontend/img/th2_no_user_image.png')}}">
                            </div>
                            <span>{{Auth::user()->username}}</span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('profile',$lang)}}">My Profile</a></li>
                            <li><a href="{{route('account_setting',$lang)}}">Account Settings</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Sign out') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    <li class="notification">
                        <a href="#" class="mobile-noti">
                            <div class="noti-img">
                                <img src="{{asset('frontend/img/ring.png')}}" alt="">
                            </div>
                            <div class="number hide"></div>
                        </a>
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                            <div class="noti-img">
                                <img src="{{asset('frontend/img/ring.png')}}" alt="">
                            </div>
                            <div class="number hide"></div>
                        </a>
                        <div class="dropdown-menu">
                            <ul id="user_notification_list">
                                
                                <li class="text-center">
                                    <a href="{{route('wrong_turn',$lang)}}">
                                        <i class="fa fa-angle-down"></i>&nbsp; Show All Notifications
                                    </a>
                                </li>                                 
                            </ul>
                        </div>
                    </li>
                    <li class="pmb-menu notification">
                        <a href="{{route('wrong_turn',$lang)}}" class="mobile-noti">
                            <div class="message-icon">
                                <span class="fa fa-envelope-o" aria-hidden="true"></span>
                            </div>
                            <div class="number hide"></div>
                        </a>
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                            <div class="message-icon">
                                <span class="fa fa-envelope-o" aria-hidden="true"></span>
                            </div>
                            <div class="number hide"></div>
                        </a>
                        <div class="dropdown-menu">
                            <ul>
                                
                                <li class="text-center">
                                    <a href="{{route('wrong_turn',$lang)}}">
                                        <i class="fa fa-angle-down"></i>&nbsp; Show All Messages
                                    </a>
                                </li>                                
                            </ul>
                        </div>
                    </li>  

                    <li class="post-a-job-wrap">
                        <a href="{{route('post_services',$lang)}}">Post a Job</a>
                    </li>

                    <li>
                        <div class="language-selection">
                        <select class="form-control change_language">
                            <option value="Default">English</option>
                            <option value="1"  > Arabic </option> 
                        </select>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
@endif

@if(Auth::user()->type == 'F')
    <header class="sub-header index-header">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">
                            Toggle navigation
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                    </button>
                    <a class="navbar-brand" href="{{route('/',$lang)}}">
                        <div class="logo-header">
                            <img src="{{asset('frontend/img/12887404231553072498.PNG')}}" />
                        </div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li>
                            <li><a href="{{route('jobs',$lang)}}">Browse Jobs</a></li>
                        </li>

                                            
                        <li class="login-img">
                            <a href="#" data-toggle="dropdown">
                                <div class="login-usr-img">
                                    <img src="{{asset('frontend/img/th2_no_user_image.png')}}">
                                </div>
                                <span>
                                {{Auth::user()->username}}
                                </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('profile',$lang)}}">My Profile</a></li>
                                <li><a href="{{route('account_setting',$lang)}}">Account Settings</a></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Sign out') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>

                            </ul>
                        </li>
                        <li class="notification">
                            <a href="{{route('wrong_turn',$lang)}}" class="mobile-noti">
                                <div class="noti-img">
                                    <img src="{{asset('frontend/img/ring.png')}}" alt="">
                                </div>
                                <div class="number hide"></div>
                            </a>
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                <div class="noti-img">
                                    <img src="{{asset('frontend/img/ring.png')}}" alt="">
                                </div>
                                <div class="number hide"></div>
                            </a>
                            <div class="dropdown-menu">
                                <ul id="user_notification_list">
                                    
                                    <li class="text-center">
                                        <a href="{{route('wrong_turn',$lang)}}">
                                            <i class="fa fa-angle-down"></i>&nbsp; Show All Notifications
                                        </a>
                                    </li>                                
                                </ul>
                            </div>
                        </li>
                        <li class="pmb-menu notification">
                            <a href="{{route('wrong_turn',$lang)}}" class="mobile-noti">
                                <div class="message-icon">
                                    <span class="fa fa-envelope-o" aria-hidden="true"></span>
                                </div>
                                <div class="number hide"></div>
                            </a>
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                <div class="message-icon">
                                    <span class="fa fa-envelope-o" aria-hidden="true"></span>
                                </div>
                                <div class="number hide"></div>
                            </a>
                            <div class="dropdown-menu">
                                <ul>
                                    
                                    <li class="text-center">
                                        <a href="{{route('wrong_turn',$lang)}}">
                                            <i class="fa fa-angle-down"></i>&nbsp; Show All Messages
                                        </a>
                                    </li>                                
                                </ul>
                            </div>
                        </li>      
                        <li>
                            <div class="language-selection">
                                <select  class="form-control" onchange="top.location=this.value">
                                    @if(App::isLocale('en'))
                                    <option value="{{route(Route::currentRouteName(), 'en')}}">English</option>
                                    <option value="{{route(Route::currentRouteName(), 'ar')}}">Arabic</option>
                                    @else
                                    <option value="{{Route(Route::currentRouteName(), 'ar')}}">Arabic</option>
                                    <option value="{{Route(Route::currentRouteName(), 'en')}}">English</option>
                                    @endif
                                </select>
                            </div>
                        </li>

                        <li class="post-a-job-wrap">
                            <a href="{{route('post_services',$lang)}}">Post a Service</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
@endif
@endif