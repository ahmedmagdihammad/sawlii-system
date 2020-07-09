<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Experience;

class ExperiencesController extends Controller
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
    public function store(Request $request, $lang)
    {
        $experience = new Experience();
        $experience->freelancer = Auth::user()->id;
        $experience->company = $request->exper_company;
        $experience->location = $request->exper_location;
        $experience->title = $request->exper_title;
        if($request->exper_current != '1'){
        $experience->from = date("Y-m-d", strtotime($request->exper_from));
        $experience->to = date("Y-m-d", strtotime($request->exper_to));
        }else{
            $experience->from = NULL;
            $experience->to = NULL;
        }
        if($request->exper_current == '1'){
        $experience->current = $request->exper_current;
        }else{
            $experience->current = '0';
        }
        $experience->description = $request->exper_desc;
        $experience->save();
        $experience->dateFrom = date('Y M', strtotime($experience->from));
        $experience->dateTo = date('Y M', strtotime($experience->to));
        return $experience;
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
        $experience = Experience::find($request->upexper_id);
        $experience->freelancer = Auth::user()->id;
        $experience->company = $request->upexper_company;
        $experience->location = $request->upexper_location;
        $experience->title = $request->upexper_title;
        if($request->upexper_current != '1'){
        $experience->from = date('Y-m-d', strtotime($experience->from));
        $experience->to = date('Y-m-d', strtotime($experience->to));
        }else{
            $experience->from = NULL;
            $experience->to = NULL;
        }
        if($request->upexper_current == '1'){
        $experience->current = $request->upexper_current;
        }else{
        $experience->current = '0';
        }
        $experience->description = $request->upexper_desc;
        $experience->save();
        $experience->dateFrom = date('M Y', strtotime($experience->from));
        $experience->dateTo = date('M Y', strtotime($experience->to));
        return $experience;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $lang)
    {
        Experience::find($request->experdelete_id)->delete();
        return response()->json('Record has been deleted successfully!');
    }
}
