<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang)
    {
        app()->setLocale($lang);
        return view('pages.frontend.home',compact('lang'));
    }

    public function service($lang)
    {
        app()->setLocale($lang);
        return view('pages.frontend.service', compact('lang'));
    }
    
    public function test_service($lang)
    {
        app()->setLocale($lang);

        return view('pages.frontend.services.test_service', compact('lang'));
    }

    public function review($lang)
    {
        app()->setLocale($lang);

        return view('pages.frontend.services.review', compact('lang'));
    }

    public function jobs($lang)
    {
        app()->setLocale($lang);

        return view('pages.frontend.jobs', compact('lang'));
    }

    public function signup($lang)
    {
        app()->setLocale($lang);

        return view('pages.frontend.signup', compact('lang'));

        // return view('auth.register', compact('lang'));

    }

    public function signup_work($lang)
    {
        app()->setLocale($lang);

        return view('pages.frontend.signup.signup_work', compact('lang'));
    }

    public function signup_hire($lang)
    {
        app()->setLocale($lang);

        return view('pages.frontend.signup.signup_hire', compact('lang'));

        // return view('auth.register', compact('lang'));
    }

    public function signin($lang)
    {
        app()->setLocale($lang);

        return view('pages.frontend.signin', compact('lang'));
    }

    public function contact_us($lang)
    {
        app()->setLocale($lang);

        return view('pages.frontend.contact_us', compact('lang'));
    }

    public function faq($lang)
    {
        app()->setLocale($lang);

        return view('pages.frontend.faq', compact('lang'));
    }

    public function blog($lang)
    {
        app()->setLocale($lang);

        return view('pages.frontend.blog', compact('lang'));
    }

    public function privacy($lang)
    {
        app()->setLocale($lang);

        return view('pages.frontend.privacy', compact('lang'));
    }

    public function terms_and_conditions($lang)
    {
        app()->setLocale($lang);

        return view('pages.frontend.terms_and_conditions', compact('lang'));
    }

    public function how_it_works($lang)
    {
        app()->setLocale($lang);

        return view('pages.frontend.how_it_works', compact('lang'));
    }

    public function about_us($lang)
    {
        app()->setLocale($lang);

        return view('pages.frontend.about_us', compact('lang'));
    }

    public function sub_category($lang)
    {
        app()->setLocale($lang);

        return view('pages.frontend.categories.sub_category', compact('lang'));
    }

    public function freelancer($lang)
    {
        app()->setLocale($lang);

        return view('pages.frontend.freelancer', compact('lang'));
    }
    
    public function forgetPassword($lang)
    {
        app()->setLocale($lang);

        return view('pages.frontend.forgetPassword', compact('lang'));
    }

    public function posts($lang)
    {
        app()->setLocale($lang);
        return view('pages.frontend.posts', compact('lang'));
    }

    // Login Freelancer-------------------------------------------
    public function account_setting($lang)
    {
        app()->setLocale($lang);
        return view('pages.frontend.freelancer.account_setting', compact('lang'));
    }

    public function wrong_turn($lang)
    {
        app()->setLocale($lang);
        return view('pages.frontend.freelancer.wrong_turn', compact('lang'));
    }

    public function post_services($lang)
    {
        app()->setLocale($lang);
        return view('pages.frontend.freelancer.post_services', compact('lang'));
    }
    
    public function test_job($lang)
    {
        app()->setLocale($lang);
        return view('pages.frontend.freelancer.test_job', compact('lang'));
    }

    public function my_profile($lang)
    {
        app()->setLocale($lang);
        return view('pages.frontend.freelancer.my_profile', compact('lang'));
    }

    public function customer_review_all($lang)
    {
        app()->setLocale($lang);
        return view('pages.frontend.freelancer.customer_review_all', compact('lang'));
    }

    public function my_jobs($lang)
    {
        app()->setLocale($lang);
        return view('pages.frontend.freelancer.navigation.my_jobs', compact('lang'));
    }
    
    public function workroom($lang)
    {
        app()->setLocale($lang);
        return view('pages.frontend.freelancer.navigation.workroom', compact('lang'));
    }

    public function profile_job($lang)
    {
        app()->setLocale($lang);
        return view('pages.frontend.freelancer.navigation.profile_job', compact('lang'));
    }

    public function my_bids($lang)
    {
        app()->setLocale($lang);
        return view('pages.frontend.freelancer.navigation.my_bids', compact('lang'));
    } 

    public function saved_jobs($lang)
    {
        app()->setLocale($lang);
        return view('pages.frontend.freelancer.navigation.saved_jobs', compact('lang'));
    }
    
    public function services_order($lang)
    {
        app()->setLocale($lang);
        return view('pages.frontend.freelancer.navigation.services_order', compact('lang'));
    }
    
    public function my_services($lang)
    {
        app()->setLocale($lang);
        return view('pages.frontend.freelancer.navigation.my_services', compact('lang'));
    }
    
    public function job_invitations($lang)
    {
        app()->setLocale($lang);
        return view('pages.frontend.freelancer.navigation.job_invitations', compact('lang'));
    }
    
    public function financial_dashboard($lang)
    {
        app()->setLocale($lang);
        return view('pages.frontend.freelancer.navigation.financial_dashboard', compact('lang'));
    }

    // Login Customer------------------------------
    public function saved_freelancer($lang)
    {
        app()->setLocale($lang);
        return view('pages.frontend.customer.saved_freelancer', compact('lang'));
    }
    
    public function favorite_services($lang)
    {
        app()->setLocale($lang);
        return view('pages.frontend.customer.favorite_services', compact('lang'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
