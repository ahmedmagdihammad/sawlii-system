<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use Auth;
use App\Service;
use App\Category;
use App\subCategory;
use App\Serviceaddon;

class PostServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang)
    {
        app()->setLocale($lang);
        $categories = Category::all();
        return view('pages.frontend.freelancer.post_services', compact('lang', 'categories'));
    }
    
    public function my_services($lang)
    {
        app()->setLocale($lang);
        $services = Service::where('freelancer', Auth::user()->id)->get();
        return view('pages.frontend.freelancer.navigation.my_services', compact('lang', 'services'));
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
        if ($request->title_en == '' && $request->title_ar == ''){
            return back();
        }else{
        // Add Start Service
        $post_service = new Service();
        $post_service->freelancer = Auth::user()->id;
        $post_service->title_en = $request->title_en;
        $post_service->title_ar = $request->title_ar;
        $post_service->category = $request->category;
        $post_service->subcategory = $request->subcategory;
        $post_service->days = $request->days;
        $post_service->price = $request->price;
        $post_service->description_en = $request->description_en;
        $post_service->description_ar = $request->description_ar;
        $post_service->details_en = $request->details_en;
        $post_service->details_ar = $request->details_ar;
        $post_service->featured = $request->featured;
        $post_service->cost = $request->cost;
        $post_service->date = date('Y-m-d');

        if ($request->cost == 0) {
            $post_service->payment = 'D';
        } else {
            $post_service->payment = 'N';
        }

        if ($request->cost == 0) {
            $post_service->status = "D";
        }else if($request->cost > 0) {
            $post_service->status = "N";
        }else{
            $post_service->status = "R";
        }

        if ($request->hasFile('image')) {
            $post_service->image = $this->uploadimage($request->image);
        }
        // Save Service
        $post_service->save();

        }
        // End Service

        if (empty($post_service->id)) {
            return back();
        }else {
            if (empty($request->addon_title_en) && empty($request->addon_title_ar)) {
                return back();
            } else {
            // Start Service Addons
            $serviceaddon = new Serviceaddon();
            $serviceaddon->service = $post_service->id;
            $serviceaddon->title_en = $request->addon_title_en;
            $serviceaddon->title_ar = $request->addon_title_ar;
            $serviceaddon->description_en = $request->addon_description_en;
            $serviceaddon->description_ar = $request->addon_description_ar;
            $serviceaddon->days = $request->addon_days;
            $serviceaddon->price = $request->addon_price;
            // Save Service Addon
            $serviceaddon->save();
            // End Service Addons

            return back();
            }
        }
    }

    public function uploadimage($file)
    {
        $imagename = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('frontend/img');
        $file->move($destinationPath, $imagename); 
        $returenurl = 'frontend/img/'.$imagename; 

        return $returenurl;  
    }

    public function getSubcategory(Request $request)
    {
        $subcategories = subCategory::where('category', $request->id)->get();
        return $subcategories;
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
        app()->getlocale($lang);
        $categories = Category::all();
        $service = Service::find($id);
        $serviceaddons = Serviceaddon::where('service', $id)->get();
        foreach ($serviceaddons as $serviceaddon) {
            return view('pages.frontend.freelancer.uppost_services', compact('lang', 'categories', 'serviceaddons', 'serviceaddon', 'service'));
        }
        return view('pages.frontend.freelancer.uppost_services', compact('lang', 'categories', 'serviceaddons', 'service'));
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
        if ($request->title_en == '' && $request->title_ar == ''){
            return back();
        }else{
        // Add Start Service
        $post_service = Service::find($id);
        $post_service->freelancer = Auth::user()->id;
        $post_service->title_en = $request->title_en;
        $post_service->title_ar = $request->title_ar;
        $post_service->category = $request->category;
        $post_service->subcategory = $request->subcategory;
        $post_service->days = $request->days;
        $post_service->price = $request->price;
        $post_service->description_en = $request->description_en;
        $post_service->description_ar = $request->description_ar;
        $post_service->details_en = $request->details_en;
        $post_service->details_ar = $request->details_ar;
        $post_service->featured = $request->featured;
        $post_service->cost = $request->cost;
        $post_service->date = date('Y-m-d');

        if ($request->cost == 0) {
            $post_service->payment = 'D';
        } else {
            $post_service->payment = 'N';
        }

        if ($request->cost == 0) {
            $post_service->status = "D";
        }else if($request->cost > 0) {
            $post_service->status = "N";
        }else{
            $post_service->status = "R";
        }

        if ($request->hasFile('image')) {
            $post_service->image = $this->uploadimage($request->image);
        }
        // Save Service
        $post_service->save();

        }
        // End Service

        if (empty($post_service->id)) {
            return back();
        }else {
            if (empty($request->addon_title_en) && empty($request->addon_title_ar)) {
                return back();
            } else {
            // Start Service Addons
            $serviceaddons = Serviceaddon::where('service', $id)->get();
            foreach ($serviceaddons as $serviceaddon) {
                $serviceaddon->service = $post_service->id;
                $serviceaddon->title_en = $request->addon_title_en;
                $serviceaddon->title_ar = $request->addon_title_ar;
                $serviceaddon->description_en = $request->addon_description_en;
                $serviceaddon->description_ar = $request->addon_description_ar;
                $serviceaddon->days = $request->addon_days;
                $serviceaddon->price = $request->addon_price;
                // Save Service Addon
                $serviceaddon->save();
                // End Service Addons
    
                return back();
            }
            }
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
