@extends('layouts.frontend.master')
@section('title')
    Profile
@endsection
@section('content')

@if(!Auth::user())
    @include('pages.frontend.include.home_profile')
    @else

    @if(Auth::user()->type == 'F')
            @include('pages.frontend.include.freelancer_profile')
        @else
            @include('pages.frontend.include.freelancer_profile')
    @endif

@endif 

@endsection