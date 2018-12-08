@extends('layouts.app')

@section('title')
    Setting
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="text-dark">{{ Auth::User()->name }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <img class="img-responsive" src="{{ asset('/images/img.jpg') }}">
            </div>
            <div class="col-md-4 col-md-offset-3">
                <br>
                Joined: &nbsp {{ Auth::User()->created_at->diffforhumans() }}
            </div>
        </div>
        <div class="row">
            
        </div>
    </div>
@endsection
