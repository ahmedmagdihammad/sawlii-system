<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use App\Freelancer;
use App\Category;
use App\subCategory;
use App\Service;
use App\Job;
use App\Portfolio;
use App\Education;
use App\Certification;
use App\Experience;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang)
    {
        app()->setLocale($lang);
        if (!Auth::user()) {
            app()->setLocale($lang);
            return view('pages.frontend.profile', compact('lang'));
        } else if(Auth::user()->type == 'C') {
            app()->setLocale($lang);
            $jobs = Job::where('customer', Auth::user()->id)->get();
            return view('pages.frontend.profile', compact('lang', 'jobs'));
        }else{
            app()->setLocale($lang);
            $users = User::find(Auth::user()->id);
            $categories = Category::all();
            $services = Service::where('freelancer', Auth::user()->id)->get();
            $freelancer = Freelancer::where('userid', '=', Auth::user()->id)->first();
            $portfolios = Portfolio::where('freelancer', Auth::user()->id)->get();
            $educations = Education::where('freelancer', Auth::user()->id)->get();
            $certifications = Certification::where('freelancer', Auth::user()->id)->get();
            $experiences = Experience::where('freelancer', Auth::user()->id)->get();
            if (empty($freelancer)) {
                return view('pages.frontend.profile', compact('lang', 'users', 'experiences', 'certifications', 'educations', 'freelancer', 'categories','services', 'portfolios'));
            } else {
                $languag = json_encode($freelancer->languages);
                $languages = json_decode($languag);
                $subcategories = subCategory::all();

                return view('pages.frontend.profile', compact('lang', 'users', 'experiences', 'certifications', 'educations', 'freelancer', 'languages', 'categories', 'services', 'subcategories', 'portfolios'));
            }
            
        }
        
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
