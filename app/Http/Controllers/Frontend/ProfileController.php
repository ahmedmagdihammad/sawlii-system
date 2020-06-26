<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use App\Freelancer;
use App\Category;
use App\subCategory;

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
        $users = User::find(Auth::user()->id);
        $freelancer = Freelancer::where('userid', '=', Auth::user()->id)->first();
        $languages = json_decode($freelancer->languages);
        $categores = json_decode($freelancer->categories);
        $skills = json_decode($freelancer->skills);
        $categories = Category::all();
        return view('pages.frontend.profile', compact('lang', 'users', 'freelancer', 'categories', 'skills', 'languages', 'categores'));
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
        // return json_encode((object) $request->skills);


        $freelancer = Freelancer::where('userid', '=', Auth::user()->id)->first();
        if(empty($freelancer)){
            $freelancer = new Freelancer();
            $freelancer->userid = Auth::user()->id;
        }
        $freelancer->skills = json_encode((object)$request->skills);
        $freelancer->save();
        return back();
    }

    public function add_languages(Request $request, $lang)
    {
        app()->setlocale($lang);
        $freelancer = Freelancer::where('userid', '=', Auth::user()->id)->first();
        $freelancer->languages = json_encode((object)$request->languages);
        if(empty($freelancer->id)){
            $freelancer = new Freelancer();
            $freelancer->userid = Auth::user()->id;
        }
        $freelancer->save();
        return back();
    }

    public function add_categories(Request $request, $lang)
    {
        app()->setlocale($lang);
        $freelancer = Freelancer::where('userid', '=', Auth::user()->id)->first();
        $freelancer->categories = json_encode((object)$request->categories);
        if(empty($freelancer)){
            $freelancer = new Freelancer();
            $freelancer->userid = Auth::user()->id;
        }
        $freelancer->save();
        return back();
    }
    
    public function add_video(Request $request, $lang)
    {
        app()->setlocale($lang);
        $freelancer = Freelancer::where('userid', '=', Auth::user()->id)->first();
        $freelancer->video = $request->video;
        if(empty($freelancer)){
            $freelancer = new Freelancer();
            $freelancer->userid = Auth::user()->id;
        }
        $freelancer->save();
        return back();
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
