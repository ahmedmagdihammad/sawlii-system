<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Portfolio;

class PortfoliosControllers extends Controller
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
        request()->validate([
            'port_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $portfoilo = new Portfolio();
        $portfoilo->freelancer = Auth::user()->id;
        $portfoilo->title = $request->port_title;
        $portfoilo->duration = $request->port_duration;
        $portfoilo->skills = $request->port_skills;
        $portfoilo->description = $request->port_description;
        // $portfoilo->image = str_replace('C:\fakepath','frontend\img',$request->image);
        if ($request->hasFile('port_image')) {
            $portfoilo->image = $this->uploadimage($request->port_image);
        }
        $portfoilo->save();

        return $portfoilo;
    }

    public function uploadimage($fill)
    {
        $imagename = time().'.'.$fill->getClientOriginalExtension();
        $destinationPath = public_path('frontend/img_freelancer');
        $fill->move($destinationPath, $imagename); 
        $returenurl = 'frontend/img_freelancer/'.$imagename; 

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
    public function update(Request $request, $lang)
    {
        $portfoilo = Portfolio::find($request->editport_id);
        $portfoilo->freelancer = Auth::user()->id;
        $portfoilo->title = $request->editport_title;
        $portfoilo->duration = $request->editport_duration;
        $portfoilo->skills = $request->editport_skills;
        $portfoilo->description = $request->editport_description;
        if ($request->hasFile('editport_image')) {
            $portfoilo->image = $this->uploadimage($request->editport_image);
        }
        $portfoilo->save();

        return $portfoilo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $lang)
    {
        $portfolio = Portfolio::find($request->delete_id)->delete();
        return response()->json('Record has been deleted successfully!');
    }
}
