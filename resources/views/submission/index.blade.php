@extends('layouts.app')
@extends('box.submission.showCode')
@section('title')
    Submission
@endsection

@section('content')
    <div class="clearfix"></div>
    <div>
        <div class="secpadding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-box clearfix ">
                            <h2 class="title-box_primary" style="padding-left: 50%;">Submissions</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>When</th>
                        <th>Who</th>
                        <th>Problem</th>

                        <th>Lang</th>
                        <th>Verdict</th>
                        <th>Time</th>
                        <th>Memory</th>
                    </tr>
                    @foreach($submissions as $submission)
                        <tr>
                            <td><a href="#" data-toggle="modal" data-target="#showCodeModal">{{$submission->id}}</a></td>

                            <td>{{ \Carbon\Carbon::parse($submission->submission_time)->diffForHumans() }}</td>
                            <td>{{$submission->user['name']}}</td>
                            <td>{{$submission->problem['problem_name']}}</td>
{{--                            <td> {{ $submission->code }} </td>--}}
                            <td>lang</td>
                            <td>{{$submission->verdict}}</td>
                            <td>{{$submission->cpu}}</td>
                            <td>{{$submission->memory}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="col-xs-12 col-xs-offset-4 col-sm-8 col-sm-offset-5 col-md-6 col-md-offset-5 col-lg-6 col-lg-offset-5">
                {{ $submissions->links() }}
            </div>

        </div>
    </div>
@endsection
