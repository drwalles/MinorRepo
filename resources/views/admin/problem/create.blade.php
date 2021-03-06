@extends('layouts.admin')

@section('title')
    Add Problem
@endsection

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                @include('partials.success')
                @include('partials.errors')
                <div class="title_left">
                    <h3>Problems</h3>
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
                            <h2 style="color: #1b4b72">Add a Problem</h2>
                            <div class="pull-right">
                                <a href="/admin/problem" class="btn btn-primary">Back</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form method="post" action="{{action('Admin\ProblemController@store')}}" class="col-md-10 col-md-offset-2">
                                {{ csrf_field() }}

                                {{--<input type="hidden" name="_method" value="put">--}}

                                <div class="form-group">
                                    <label for="problem_name" style="color: black; font-size: 16px;">Name:<span class="required">*</span></label>
                                    <input placeholder="Problem Name"
                                           id="problem_name"
                                           required
                                           name="problem_name"
                                           style="width: 60%"
                                           spellcheck="false"
                                           class="form-control"
                                           />
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="problem_description" style="color: black; font-size: 16px;">Description<span class="required">*</span> </label>
                                    <textarea placeholder="Enter Description"
                                              style="resize: vertical; width: 90%;"
                                              id="problem_description"
                                              name="problem_description"
                                              rows="10"
                                              spellcheck="false"
                                              class="form-control">

                                    </textarea>
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="problem_setter" style="color: black; font-size: 16px;">Author:<span class="required">*</span></label>
                                    <input placeholder="Problem Setter"
                                           id="problem_setter"
                                           required
                                           name="problem_setter"
                                           style="width: 60%"
                                           spellcheck="false"
                                           class="form-control"
                                           />
                                </div>
                                <br>

                                {{--<div class="form-group">--}}
                                {{--<label for="problem_tag" style="color: black; font-size: 16px;">Problem Tag<span class="required">*</span> </label>--}}
                                {{--<select class="form-control" name="problem_tag">--}}
                                    {{--<option selected="">Select Tag</option>--}}
                                    {{--@foreach($problem as $table)--}}
                                        {{--<option value="{{$table->problem_tag}}">{{$table->problem_tag->name}}</option>--}}
                                    {{--@endforeach--}}
                                {{--</select>--}}
                                {{--</div>--}}
                                {{--<br>--}}

                                <div class="form-group">
                                    <label for="total_solved" style="color: black; font-size: 16px;">Total Solved:<span class="required">*</span></label>
                                    <input placeholder="Total Solved:"
                                           id="total_solved"
                                           required
                                           name="total_solved"
                                           style="width: 60%"
                                           spellcheck="false"
                                           class="form-control"
                                    />
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="total_submission" style="color: black; font-size: 16px;">Total Submission:<span class="required">*</span></label>
                                    <input placeholder="Total Submission"
                                           id="total_submission"
                                           required
                                           name="total_submission"
                                           style="width: 60%"
                                           spellcheck="false"
                                           class="form-control"
                                    />
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="time_limit" style="color: black; font-size: 16px;">Time Limit:<span class="required">*</span></label>
                                    <input placeholder="Time Limit"
                                           id="time_limit"
                                           required
                                           name="time_limit"
                                           style="width: 60%"
                                           spellcheck="false"
                                           class="form-control"
                                           />
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="memory_limit" style="color: black; font-size: 16px;">Memory Limit:<span class="required">*</span></label>
                                    <input placeholder="Memory Limit"
                                           id="memory_limit"
                                           required
                                           name="memory_limit"
                                           style="width: 60%"
                                           spellcheck="false"
                                           class="form-control"
                                           />
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="sample_input" style="color: black; font-size: 16px;">Sample Input:<span class="required">*</span> </label>
                                    <textarea placeholder="Sample Input"
                                              style="resize: vertical; width: 90%;"
                                              id="sample_input"
                                              name="sample_input"
                                              rows="10"
                                              spellcheck="false"
                                              class="form-control">
                                    </textarea>
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="sample_output" style="color: black; font-size: 16px;">Sample Output:<span class="required">*</span> </label>
                                    <textarea placeholder="Sample Output"
                                              style="resize: vertical; width: 90%;"
                                              id="sample_output"
                                              name="sample_output"
                                              rows="10"
                                              spellcheck="false"
                                              class="form-control">
                                    </textarea>
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="tc_input" style="color: black; font-size: 16px;">Test Case Input<span class="required">*</span> </label>
                                    <textarea placeholder="Test case Input"
                                              style="resize: vertical; width: 90%;"
                                              id="tc_input"
                                              name="tc_input"
                                              rows="10"
                                              spellcheck="false"
                                              class="form-control">
                                    </textarea>
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="tc_output" style="color: black; font-size: 16px;">Test Case Output: <span class="required">*</span> </label>
                                    <textarea placeholder="Test Case Output"
                                              style="resize: vertical; width: 90%;"
                                              id="tc_output"
                                              name="tc_output"
                                              rows="10"
                                              spellcheck="false"
                                              class="form-control">
                                    </textarea>
                                </div>
                                <br>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-success pull-right" value="Add" style="margin-right: 10%">
                                </div>
                            </form>
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

