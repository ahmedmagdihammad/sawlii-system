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
        if (!Auth::user()) {
            return view('pages.frontend.profile', compact('lang'));
        } else if(Auth::user()->type == 'C') {
            return view('pages.frontend.profile', compact('lang'));
        }else{
            $users = User::find(Auth::user()->id);
            $categories = Category::all();
            $freelancer = Freelancer::where('userid', '=', Auth::user()->id)->first();
            if (empty($freelancer)) {
                return view('pages.frontend.profile', 
                compact('lang', 'users', 'freelancer', 'categories'));
            } else {
                $languages = json_decode($freelancer->languages);
                $subcategories = json_decode($freelancer->categories);
                $skills = json_decode($freelancer->skills);
                return view('pages.frontend.profile', compact('lang', 'users', 'freelancer', 'categories', 'skills', 'languages', 'subcategories'));
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
