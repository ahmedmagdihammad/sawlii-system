<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Job;
use App\Category;
use App\subCatgeory;

class PostJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang)
    {
        app()->setlocale($lang);
        $categories = Category::all();
        return view('pages.frontend.customer.post_jobs', compact('lang', 'categories'));
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
    public function store(Request $request, $lang)
    {   
        if (empty($request->title_en) && empty($request->title_ar)) {
            return back();
        }else {
        $job = new Job();
        $job->customer = Auth::user()->id;
        $job->title_en = $request->title_en;
        $job->title_ar = $request->title_ar;
        $job->category = $request->category;
        $job->subcategory = $request->subcategory;
        $job->level = $request->level;
        $job->budget = $request->Budget;
        $job->description_en = $request->description_en;
        $job->description_ar = $request->title_en;
        if(!empty($request->skills)){
        $job->skills = implode('#',$request->skills);
        }else {
            $job->skills = NULL;
        }
        $job->deadline = $request->deadline;
        $job->duration = $request->duration;
        $job->public = $request->public;
        if(!empty($request->country)){
        $job->country = implode('#',$request->country);
        }else {
            $job->country = NULL;
        }
        $job->hide = $request->hide;
        $job->featured = $request->featured;
        $job->cost = $request->cost;
        // if ($request->hasFile('files')) {
        //     $job->files = $this->uploadimage($request->files);
        // }else {
        //     $job->files = NULL; 
        // }
        // return $job;
        $job->save();
        return $job;
        }
    }

    public function uploadimage($file)
    {
        $imagename = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('frontend/img_customer');
        $file->move($destinationPath, $imagename); 
        $returenurl = 'frontend/img_customer/'.$imagename; 

        return $returenurl;  
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
