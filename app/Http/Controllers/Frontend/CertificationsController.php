<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Certification;

class CertificationsController extends Controller
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
        $certification = new Certification();
        $certification->freelancer = Auth::user()->id;
        $certification->institute = $request->cert_institute;
        $certification->duration = $request->cert_duration;
        $certification->area = $request->cert_area;
        $certification->description = $request->cert_desc;
        $certification->save();
        return $certification;
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
        $certification = Certification::find($request->upcert_id);
        $certification->freelancer = Auth::user()->id;
        $certification->institute = $request->upcert_institute;
        $certification->duration = $request->upcert_duration;
        $certification->area = $request->upcert_area;
        $certification->description = $request->upcert_desc;
        $certification->save();
        return $certification;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $lang)
    {
        Certification::find($request->certdelete_id);
        return response()->json('Record has been deleted successfully!');
    }
}
