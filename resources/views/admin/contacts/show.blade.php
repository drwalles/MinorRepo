@extends('layouts.admin')

@section('title')
    {{$contact->name}}
@endsection

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                @include('partials.success')
                @include('partials.errors')
                <div class="title_left">
                    <h3>Contacts</h3>
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
                            <h2 style="color: #1b4b72">{{$contact->name}}</h2>
                            <div class="pull-right">
                                <a href="/admin/contacts" class="btn btn-primary">Back</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <section class="secpadding">
                                <div class="container">
                                    @include('partials.errors')
                                    @include('partials.success')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="title-box clearfix ">
                                                <h2 class="title-box_primary" style="padding-left: 40%;">{{ $contact->name }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="secpadding">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="title-box clearfix">
                                                <h4 class="title-box_primary">Email:</h4>
                                                <p class="font-weight-bold text-justify">{{ $contact->email }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="title-box clearfix">
                                                <h4 class="title-box_primary">Sample Input:</h4>
                                                <p class="font-weight-bold text-justify">{{ $contact->body }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
@section('script')

@endsection
