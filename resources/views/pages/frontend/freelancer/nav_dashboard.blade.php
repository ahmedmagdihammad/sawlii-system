@if(!Auth::user())

    @if(Route::is('service.test_service',$lang))
    <section class="dashboard-navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- sidenav mobile view -->
                    <div class="tablet-view">
                        <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="closebtn">&times;</a>
                            <ul class="dashboard-navbar">
                                <li class="@if(Auth::user()) @if(Route::is('profile',$lang)) active @endif @else @endif">
                                    <a href="@if(Auth::user()) {{route('profile',$lang)}} @else {{Route('signin',$lang)}} @endif">Dashboard</a>
                                </li>
                                <li  class="@if(Route::is('my_jobs',$lang)) active @endif">
                                    <a href="{{route('my_jobs',$lang)}}">My Jobs</a>
                                </li>
                                <li  class="@if(Route::is('review',$lang)) active @endif">
                                    <a href="{{route('review',$lang)}}">My Reviews</a>
                                </li>
                                <li  class="@if(Route::is('financial_dashboard',$lang)) active @endif">
                                    <a href="{{route('financial_dashboard',$lang)}}">Financial Dashboard</a>
                                </li>
                                <li  class="@if(Route::is('services_order',$lang)) active @endif">
                                    <a href="{{route('services_order',$lang)}}">Service Orders</a>
                                </li>
                                <li  class="@if(Route::is('saved_freelancer',$lang)) active @endif">
                                    <a href="{{route('saved_freelancer',$lang)}}">Saved Freelancers</a>
                                </li>
                                <li  class="@if(Route::is('favorite_services',$lang)) active @endif">
                                    <a href="{{route('favorite_services',$lang)}}">Favourite Services</a>
                                </li>
                            </ul>
                        </div>
                        <div class="dashboard-btn">
                            <a href="javascript:void(0)" id="dashboardMenu" class="btn btn-bar btn-primary">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <h4>Dashboard</h4>
                        </div>
                    </div>
                    <!-- sidenav mobile view --> 

                    <ul class="dashboard-navbar tablet-hide">
                        <li class="@if(Auth::user()) @if(Route::is('profile',$lang)) active @endif @endif">
                            <a href="@if(Auth::user()) {{route('profile',$lang)}} @else {{Route('signin',$lang)}} @endif">Dashboard</a>
                        </li>
                        <li class="@if(Route::is('my_jobs',$lang)) active @endif">
                            <a href="{{route('my_jobs',$lang)}}">Posted Jobs</a>
                        </li>
                        <li class="@if(Route::is('review',$lang)) active @endif">
                            <a href="{{route('review',$lang)}}">My Reviews</a>
                        </li>
                        <li class="@if(Route::is('financial_dashboard',$lang)) active @endif">
                            <a href="{{route('financial_dashboard',$lang)}}">Financial Dashboard</a>
                        </li>
                        <li class="@if(Route::is('services_order',$lang)) active @endif">
                            <a href="{{route('services_order',$lang)}}">Service Orders</a>
                        </li>
                        <li class="@if(Route::is('saved_freelancer',$lang)) active @endif">
                            <a href="{{route('saved_freelancer',$lang)}}">Saved Freelancers</a>
                        </li>
                        <li class="@if(Route::is('favorite_services',$lang)) active @endif">
                            <a href="{{route('favorite_services',$lang)}}">Favourite Services</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @else
    <section class="dashboard-navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- sidenav mobile view -->
                    <div class="tablet-view">
                        <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="closebtn">&times;</a>
                            <ul class="dashboard-navbar">
                                <li class="@if(Auth::user()) @if(Route::is('profile',$lang)) active @endif @endif">
                                    <a href="@if(Auth::user()) {{route('profile',$lang)}} @else {{Route('signin',$lang)}} @endif">Dashboard</a>
                                </li>
                                <li class="@if(Route::is('review',$lang)) active @endif">
                                    <a href="{{route('review',$lang)}}">My Reviews</a>
                                </li>
                                <li class="@if(Route::is('job_invitations',$lang)) active @endif">
                                    <a href="{{route('job_invitations',$lang)}}">Received Invitations</a>
                                </li>
                                <li class="@if(Route::is('financial_dashboard',$lang)) active @endif">
                                    <a href="{{route('financial_dashboard',$lang)}}">Financial Dashboard</a>
                                </li>
                                <li class="@if(Route::is('my_jobs',$lang)) active @endif">
                                    <a href="{{route('my_jobs',$lang)}}">Jobs</a>
                                </li>
                                <li class="@if(Route::is('services_order',$lang)) active @endif">
                                    <a href="{{route('services_order',$lang)}}">Posted Services</a>
                                </li>
                                <li class="@if(Route::is('my_services',$lang)) active @endif">
                                    <a href="{{route('my_services',$lang)}}">My Services</a>
                                </li>
                            </ul>
                        </div>
                        <div class="dashboard-btn">
                            <a href="javascript:void(0)" id="dashboardMenu" class="btn btn-bar btn-primary">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <h4>Dashboard</h4>
                        </div>
                    </div>
                    <!-- sidenav mobile view -->

                    <ul class="dashboard-navbar tablet-hide">
                        <li class="@if(Auth::user()) @if(Route::is('profile',$lang)) active @endif @endif">
                            <a href="@if(Auth::user()) {{route('profile',$lang)}} @else {{Route('signin',$lang)}} @endif">Dashboard</a>
                        </li>
                        <li class="@if(Route::is('my_jobs',$lang)) active @endif">
                            <a href="{{route('my_jobs',$lang)}}">Jobs</a>
                        </li>
                        <li class="@if(Route::is('services_order',$lang)) active @endif">
                            <a href="{{route('services_order',$lang)}}">Service Orders</a>
                        </li>
                        <li class="@if(Route::is('my_services',$lang)) active @endif">
                            <a href="{{route('my_services',$lang)}}">Posted Services</a>
                        </li>
                        <li class="@if(Route::is('job_invitations',$lang)) active @endif">
                            <a href="{{route('job_invitations',$lang)}}">Received Invitations</a>
                        </li>
                        <li class="@if(Route::is('review',$lang)) active @endif">
                            <a href="{{route('review',$lang)}}">My Reviews</a>
                        </li>
                        <li class="@if(Route::is('financial_dashboard',$lang)) active @endif">
                            <a href="{{route('financial_dashboard',$lang)}}">Financial Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @endif
    
@else
    @if(Auth::user()->type == 'C')
    <section class="dashboard-navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- sidenav mobile view -->
                    <div class="tablet-view">
                        <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="closebtn">&times;</a>
                            <ul class="dashboard-navbar">
                                <li class="@if(Route::is('profile',$lang)) active @endif">
                                    <a href="{{route('profile',$lang)}}">Dashboard</a>
                                </li>
                                <li  class="@if(Route::is('my_jobs',$lang)) active @endif">
                                    <a href="{{route('my_jobs',$lang)}}">My Jobs</a>
                                </li>
                                <li  class="@if(Route::is('review',$lang)) active @endif">
                                    <a href="{{route('review',$lang)}}">My Reviews</a>
                                </li>
                                <li  class="@if(Route::is('financial_dashboard',$lang)) active @endif">
                                    <a href="{{route('financial_dashboard',$lang)}}">Financial Dashboard</a>
                                </li>
                                <li  class="@if(Route::is('services_order',$lang)) active @endif">
                                    <a href="{{route('services_order',$lang)}}">Service Orders</a>
                                </li>
                                <li  class="@if(Route::is('saved_freelancer',$lang)) active @endif">
                                    <a href="{{route('saved_freelancer',$lang)}}">Saved Freelancers</a>
                                </li>
                                <li  class="@if(Route::is('favorite_services',$lang)) active @endif">
                                    <a href="{{route('favorite_services',$lang)}}">Favourite Services</a>
                                </li>
                            </ul>
                        </div>
                        <div class="dashboard-btn">
                            <a href="javascript:void(0)" id="dashboardMenu" class="btn btn-bar btn-primary">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <h4>Dashboard</h4>
                        </div>
                    </div>
                    <!-- sidenav mobile view --> 

                    <ul class="dashboard-navbar tablet-hide">
                        <li class="@if(Route::is('profile',$lang)) active @endif">
                            <a href="{{route('profile',$lang)}}">Dashboard</a>
                        </li>
                        <li class="@if(Route::is('my_jobs',$lang)) active @endif">
                            <a href="{{route('my_jobs',$lang)}}">Posted Jobs</a>
                        </li>
                        <li class="@if(Route::is('review',$lang)) active @endif">
                            <a href="{{route('review',$lang)}}">My Reviews</a>
                        </li>
                        <li class="@if(Route::is('financial_dashboard',$lang)) active @endif">
                            <a href="{{route('financial_dashboard',$lang)}}">Financial Dashboard</a>
                        </li>
                        <li class="@if(Route::is('services_order',$lang)) active @endif">
                            <a href="{{route('services_order',$lang)}}">Service Orders</a>
                        </li>
                        <li class="@if(Route::is('saved_freelancer',$lang)) active @endif">
                            <a href="{{route('saved_freelancer',$lang)}}">Saved Freelancers</a>
                        </li>
                        <li class="@if(Route::is('favorite_services',$lang)) active @endif">
                            <a href="{{route('favorite_services',$lang)}}">Favourite Services</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @else
    <section class="dashboard-navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- sidenav mobile view -->
                    <div class="tablet-view">
                        <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="closebtn">&times;</a>
                            <ul class="dashboard-navbar">
                                <li class="@if(Route::is('profile',$lang)) active @endif)">
                                    <a href="{{route('profile',$lang)}}">Dashboard</a>
                                </li>
                                <li class="@if(Route::is('review',$lang)) active @endif">
                                    <a href="{{route('review',$lang)}}">My Reviews</a>
                                </li>
                                <li class="@if(Route::is('job_invitations',$lang)) active @endif">
                                    <a href="{{route('job_invitations',$lang)}}">Received Invitations</a>
                                </li>
                                <li class="@if(Route::is('financial_dashboard',$lang)) active @endif">
                                    <a href="{{route('financial_dashboard',$lang)}}">Financial Dashboard</a>
                                </li>
                                <li class="@if(Route::is('my_jobs',$lang)) active @endif">
                                    <a href="{{route('my_jobs',$lang)}}">Jobs</a>
                                </li>
                                <li class="@if(Route::is('services_order',$lang)) active @endif">
                                    <a href="{{route('services_order',$lang)}}">Posted Services</a>
                                </li>
                                <li class="@if(Route::is('my_services',$lang)) active @endif">
                                    <a href="{{route('my_services',$lang)}}">My Services</a>
                                </li>
                            </ul>
                        </div>
                        <div class="dashboard-btn">
                            <a href="javascript:void(0)" id="dashboardMenu" class="btn btn-bar btn-primary">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <h4>Dashboard</h4>
                        </div>
                    </div>
                    <!-- sidenav mobile view -->

                    <ul class="dashboard-navbar tablet-hide">
                        <li class="@if(Route::is('profile',$lang)) active @endif">
                            <a href="{{route('profile',$lang)}}">Dashboard</a>
                        </li>
                        <li class="@if(Route::is('my_jobs',$lang)) active @endif">
                            <a href="{{route('my_jobs',$lang)}}">Jobs</a>
                        </li>
                        <li class="@if(Route::is('services_order',$lang)) active @endif">
                            <a href="{{route('services_order',$lang)}}">Service Orders</a>
                        </li>
                        <li class="@if(Route::is('my_services',$lang)) active @endif">
                            <a href="{{route('my_services',$lang)}}">Posted Services</a>
                        </li>
                        <li class="@if(Route::is('job_invitations',$lang)) active @endif">
                            <a href="{{route('job_invitations',$lang)}}">Received Invitations</a>
                        </li>
                        <li class="@if(Route::is('review',$lang)) active @endif">
                            <a href="{{route('review',$lang)}}">My Reviews</a>
                        </li>
                        <li class="@if(Route::is('financial_dashboard',$lang)) active @endif">
                            <a href="{{route('financial_dashboard',$lang)}}">Financial Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @endif
@endif