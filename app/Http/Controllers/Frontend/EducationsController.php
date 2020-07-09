<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Education;

class EducationsController extends Controller
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
        $education = new Education();
        $education->freelancer = Auth::user()->id;
        $education->institute = $request->edu_institute;
        $education->from = $request->edu_from;
        $education->to = $request->edu_to;
        $education->degree = $request->edu_degree;
        $education->area = $request->edu_area;
        $education->description = $request->edu_desc;
        $education->save();
        return $education;
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
        $education = Education::find($request->editedu_id);
        $education->freelancer = Auth::user()->id;
        $education->institute = $request->editedu_institute;
        $education->from = $request->editedu_from;
        $education->to = $request->editedu_to;
        $education->degree = $request->editedu_degree;
        $education->area = $request->editedu_area;
        $education->description = $request->editedu_desc;
        $education->save();
        return $education;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $lang)
    {
        Education::find($request->edudelete_id)->delete();
        return response()->json('Record has been deleted successfully!');
    }
}
