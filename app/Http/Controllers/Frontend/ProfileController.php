<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use App\Freelancer;

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
        return view('pages.frontend.profile', compact('lang'));
    }

    public function f_profile($lang)
    {
        app()->setlocale($lang);
        $user = User::find(Auth::user()->id);
        $user->type = 'F';
        $user->save();
        
        return redirect()->back();
    }

    public function c_profile($lang)
    {
        app()->setlocale($lang);
        $user = User::find(Auth::user()->id);
        $user->type = 'C';
        $user->save();
        
        return redirect()->back();
    }

    public function add_skills(Request $request, $lang)
    {
        app()->setlocale($lang);

        $freelancer = Freelancer::all();
        $freelancer->userid = Auth::user()->id;
        $freelancer->skills = $request->skills;
        $freelancer->save();
        return $freelancer;

        // $freelancer = Freelancer::where('userid', '=', Auth::user()->id)->get();
        // if ($freelancer->userid != Auth::user()->id) {
            // $freelancer->userid = Auth::user()->id;
            // $freelancer->title = $request->title;
            // $freelancer->level = $request->level;
            // $freelancer->rating = $request->rating;
            // $freelancer->jobs = $request->jobs;
            // $freelancer->services = $request->services;
            // $freelancer->earning = $request->earning;
            // $freelancer->response = $request->response;
            // $freelancer->skills = $request->skills;
            // $freelancer->languages = $request->languages;
            // $freelancer->categories = $request->categories;
            // $freelancer->video = $request->video;
            // $freelancer->overview = $request->overview;
            // $freelancer->save();
            // return $freelancer;
        // }else {
        //     $freelancer->userid = $request->title;
        //     $freelancer->title = $request->title;
        //     $freelancer->level = $request->level;
        //     $freelancer->rating = $request->rating;
        //     $freelancer->jobs = $request->jobs;
        //     $freelancer->services = $request->services;
        //     $freelancer->earning = $request->earning;
        //     $freelancer->response = $request->response;
        //     $freelancer->skills = $request->skills;
        //     $freelancer->languages = $request->languages;
        //     $freelancer->categories = $request->categories;
        //     $freelancer->video = $request->video;
        //     $freelancer->overview = $request->overview;
        //     $freelancer->save();
        //     return back();
        // }
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
    public function update(Request $request, $lang)
    {
        app()->setlocale($lang);
        $freelancer = User::find(Auth::user()->id);
        $freelancer->firstname	= $request->firstname;
        $freelancer->lastname	= $request->lastname;
        $freelancer->location	= $request->location;
        $freelancer->save();
        return back();
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
