<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\USer;
use Auth;

class C_profileController extends Controller
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

    public function c_profile($lang)
    {
        app()->setlocale($lang);
        $user = User::find(Auth::user()->id);
        $user->type = 'C';
        $user->save();
        
        return redirect()->back();
    }

    public function changePassword(Request $request ,$lang)
    {
        $user = auth()->user();
        request()->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'currentPassword' => ['required', function ($attribute, $value, $fail) {
                if (!\Hash::check($value, Auth::user()->password)) {
                    return $fail(__('The current password is incorrect.'));
                }
            }]
        ]);

        app()->setlocale($lang);
        $user = User::find(Auth::user()->id);
        $user->password = Hash::make($request['password']);
        $user->save();
        
        return redirect()->back();
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
        $catesomer = User::find(Auth::user()->id);
        $catesomer->firstname	= $request->firstname;
        $catesomer->lastname	= $request->lastname;
        $catesomer->location	= $request->location;
        $catesomer->save();
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
