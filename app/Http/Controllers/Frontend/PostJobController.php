<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Job;
use App\Category;
use App\subCategory;
use App\Question;

class PostJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang)
    {
        app()->setLocale($lang);
        $jobs = Job::where('customer', Auth::user()->id)->get();
        return view('pages.frontend.freelancer.navigation.my_jobs', compact('lang', 'jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($lang)
    {
        app()->setLocale($lang);
        $categories = Category::all();
        $jobs = Job::where('customer', Auth::user()->id)->get();
        return view('pages.frontend.customer.post_jobs', compact('lang', 'categories'));
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
        if ($request->hide == '1') {
            $job->hide = $request->hide;
        }else {
            $job->hide = '0';
        }
        $job->featured = $request->featured;
        $job->cost = $request->cost;
        if ($request->hasFile('files')) {
            foreach($request->file('files') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/frontend/img_customer', $name);
                // $returenurl = 'frontend/img_customer/'.$name;
                // return $returenurl;
                $images_data[] = 'frontend/img_customer/'.$name;
                $job->files = json_encode((object) $images_data);
            }
        } 
        // return $job;
        $job->save();

        // Start Add Questions
        if (!empty($request->question)) {
            $question = new Question();
            $question->job = $job->id;
            $question->question = $request->question;
            $question->save();
        }
        return back();
        }
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
    public function edit($lang, $id)
    {
        app()->setLocale($lang);
        $job = Job::find($id);
        $categories = Category::all();
        $questions = Question::where('job', $job->id)->get();
        return view('pages.frontend.customer.uppost_job', compact('lang', 'id','job', 'categories', 'questions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$lang, $id)
    {
        if (empty($request->title_en) && empty($request->title_ar)) {
            return back();
        }else {
        $job = Job::find($id);
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
        if ($request->hide == '1') {
            $job->hide = $request->hide;
        }else {
            $job->hide = '0';
        }
        $job->featured = $request->featured;
        $job->cost = $request->cost;
        if ($request->hasFile('files')) {
            foreach($request->file('files') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/frontend/img_customer', $name);
                $images_data[] = 'frontend/img_customer/'.$name;
                $job->files = json_encode((object) $images_data);
            }
        } 
        // return $job;
        $job->save();

        // Start Add Questions
        if (!empty($request->question)) {
            $question = new Question();
            $question->job = $job->id;
            $question->question = $request->question;
            $question->save();
        }
        return back();
        }
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
