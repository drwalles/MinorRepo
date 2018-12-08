@extends('layouts.admin')

@section('title')
    {{$user->name}}
@endsection

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                @include('partials.success')
                @include('partials.errors')
                <div class="title_left">
                    <h3>Users</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                  <button class="btn btn-default" type="button">Go!</button>
                                </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
            <div class="row" style="min-height:500px">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2 style="color: #1b4b72"></h2>
                            <div class="pull-right">
                                <a href="/admin/user" class="btn btn-primary">Back</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-4">
                                    <h2 style="font-size: 28px; color: black;">{{ $user->name }}</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2">
                                    <p style="font-size: 16px; color: darkblue">Type:&nbsp; {{ $user->user_type }}</p>
                                </div>
                                <div class="col-md-4 col-md-offset-2">
                                    <p style="font-size: 16px; color: blueviolet">Joined:&nbsp; {{ $user->created_at }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-3">
                                    <h2 style="font-size: 22px; color: black;">Email: &nbsp;{{ $user->email }}</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-3">
                                    <h2 style="font-size: 18px; color: black;">Address: &nbsp;{{ $user->address }}</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-3">
                                    <h2 style="font-size: 18px; color: black;">Facebook: &nbsp;{{ $user->social }}</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-3">
                                    <h2 style="font-size: 18px; color: black;">Institute: &nbsp;{{ $user->institution }}</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-3">
                                    <h2 style="font-size: 18px; color: black;">About: &nbsp;{{ $user->about }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
@section('script')

@endsection
