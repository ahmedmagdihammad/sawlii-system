<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\User;
use App\Freelancer;
use App\Category;
use App\subCategory;

class F_profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
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
        $freelancer = Freelancer::where('userid', '=', Auth::user()->id)->first();
        if(empty($freelancer)){
            $freelancer = new Freelancer();
            $freelancer->userid = Auth::user()->id;
        }
        $freelancer->skills = implode('#',$request->skills);;
        $freelancer->save();
        return $freelancer;
    }

    public function add_languages(Request $request, $lang)
    {
        app()->setlocale($lang);
        $freelancer = Freelancer::where('userid', '=', Auth::user()->id)->first();
        $array = array($request->languages_key => $request->languages_val);
        $freelancer->languages = json_encode((object)$array);
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
        $freelancer->categories = implode($request->categories);
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

    public function add_overview(Request $request, $lang)
    {
        app()->setlocale($lang);
        $freelancer = Freelancer::where('userid', '=', Auth::user()->id)->first();
        $freelancer->overview = $request->overview;
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
    public function destroy()
    {
        $freelancer = User::find(Auth::user()->id);
        return $freelancer;
    }
}
