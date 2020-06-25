@extends('layouts.frontend.master')
@section('title')
    Profile
@endsection
@section('content')

    @if(Auth::user()->type != 'C' && Auth::user()->type != 'F')
        @include('pages.frontend.include.home_profile')
    @endif 

    @if(Auth::user()->type == 'C')
        @include('pages.frontend.include.customer_profile')
    @endif

    @if(Auth::user()->type == 'F')

        @include('pages.frontend.include.freelancer_profile')
    @endif

@endsection