@extends('layouts.app')
@extends('box.submitProblem.modal')

@section('title')
    {{ $problem->problem_name }}
@endsection
@section('content')
    <section class="secpadding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box clearfix ">
                        <h2 class="title-box_primary" style="padding-left: 40%;">{{ $problem->problem_name }}</h2>
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
                        <p class="title-box_primary pull-left" style="align-content: center;">Time Limit: {{ $problem->time_limit }} sec</p>
                        <p class="title-box_primary pull-right" style="align-content: center;">Memory Limit: {{ $problem->memory_limit }} KB</p>
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
                        <h4 class="title-box_primary">Description:</h4>
                        <p class="font-weight-bold text-justify">{{ $problem->problem_description }}</p>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="title-box clearfix">
                        <h4 class="title-box_primary">Sample Input:</h4>
                        <p class="font-weight-bold text-justify">{{ $problem->sample_input }}</p>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="title-box clearfix">
                        <h4 class="title-box_primary">Sample Output:</h4>
                        <p class="font-weight-bold text-justify">{{ $problem->sample_output }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="secpadding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-5">
                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                        Submit
                    </button>
                </div>

            </div>
        </div>
    </section>
    <section class="secpadding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="title-box clearfix text-center">
                        <p class="title-box_primary">Problem Setter: {{ $problem->problem_setter }}</p>

                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
