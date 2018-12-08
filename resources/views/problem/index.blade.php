@extends('layouts.app')

@section('title')
    Volume
@endsection
@section('content')
    <div class="clearfix"></div>
    <div>
    <section class="secpadding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box clearfix ">
                        <h2 class="title-box_primary" style="padding-left: 50%;">Volume</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="table">
        <div class="col-md-8 col-md-offset-2">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Solved</th>
                    <th>Submitted</th>
                </tr>

                @foreach($problems as $problem)
                    <tr>
                        <td>{{$problem->id}}</td>
                        <td><a href="/problem/{{$problem->id}}">{{$problem->problem_name}}</a></td>
                        <td>{{$problem->total_solved}}</td>
                        <td>{{$problem->total_submission}}</td>
                    </tr>
                @endforeach

            </table>
        </div>
        <div class="col-xs-12 col-xs-offset-4 col-sm-8 col-sm-offset-5 col-md-6 col-md-offset-5 col-lg-6 col-lg-offset-5">
            {{ $problems->links() }}
        </div>

    </section>

    </div>
@endsection
