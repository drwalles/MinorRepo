@extends('layouts.admin')
{{--@extends('admin.box.problem.problemShowBox')--}}
@section('title')
    Problems
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
                <div class="">

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
                            <h2>First Section</h2>
                            <div class="pull-right">
                                <a href="{{action('Admin\ProblemController@create')}}" class="btn btn-lg btn-primary">Add <i class="fa fa-plus-circle"></i> </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                           <table class="table table-bordered">
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Name</th>
                                    {{--<th class="text-center">Description</th>--}}
                                    <th class="text-center">Author</th>
                                    <th class="text-center">Solved</th>
                                    <th class="text-center">Submitted</th>
                                    <th class="text-center">Tags</th>
                                    <th class="text-center">Time Limit</th>
                                    <th class="text-center">Memory Limit</th>
                                    {{--<th class="text-center">Sample Input</th>--}}
                                    {{--<th class="text-center">Sample Output</th>--}}
                                    {{--<th>TestCase input</th>--}}
                                    {{--<th>TestCase Output</th>--}}
                                    <th class="text-center">Action</th>
                                </tr>

                                @foreach($problems as $table)
                                    <tr>
                                        
                                        <td>{{$table->id}}</td>
                                        <td><a href="/admin/problem/{{$table->id}}">{{$table->problem_name}}</a></td>
{{--                                        <td>{{$table->problem_description}}</td>--}}
                                        <td>{{$table->problem_setter}}</td>
                                        <td>{{$table->total_solved}}</td>
                                        <td>{{$table->total_submission}}</td>
                                        <td>{{$table->problem_tag}}</td>
                                        <td>{{$table->time_limit}}</td>
                                        <td>{{$table->memory_limit}}</td>
                                        {{--<td>{{$table->sample_input}}</td>--}}
                                        {{--<td>{{$table->sample_output}}</td>--}}
                                        {{--<td>{{$table->tc_input}}</td>--}}
                                        {{--<td>{{$table->tc_output}}</td>--}}
                                        <td class="text-center">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><a href="/admin/problem/{{$table->id}}" class="btn btn-success"><i class="fa fa-eye"></i></a></li>
                                                <li class="list-inline-item"><a href="/admin/problem/{{$table->id}}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a></li>
                                                <li class="list-inline-item">
                                                    <a href="{{ action('Admin\ProblemController@destroy', ['id'=>$table->id]) }}" class="btn btn-danger" onclick="return confirm('Are You sure to delete {{$table->problem_name}}')">
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                @endforeach

                            </table>

                        </div>
                        <div class="col-xs-12 col-xs-offset-4 col-sm-8 col-sm-offset-5 col-md-6 col-md-offset-5 col-lg-6 col-lg-offset-5">
                            {{ $problems->links() }}
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



{{--<ul class="icon-list">--}}
                                                {{--<li class="dropdown">--}}
                                                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="icon-menu7"></i></a>--}}
                                                    {{--<ul class="dropdown-menu dropdown-menu-right bg-primary">--}}
                                                        {{--<li>--}}
                                                            {{--<button type="button" class="btn bg-primary table-borderless ediBtn" data-toggle="modal" data-target="#showModal{{$table->id}}" style="width: 100%;text-align: left;">--}}
                                                                {{--<i class="fas fa-eye"></i> View Detail--}}
                                                            {{--</button>--}}
                                                        {{--</li>--}}
                                                        {{--<li>--}}
                                                            {{--<button  class="btn bg-primary table-borderless ediBtn"--}}
                                                                     {{--data-name="{{$table->problem_name}}"--}}
                                                                     {{--data-description="{{$table->problem_description}}"--}}
                                                                     {{--data-setter="{{$table->problem_setter}}"--}}
                                                                     {{--data-solved="{{$table->total_solved}}"--}}
                                                                     {{--data-submission="{{$table->total_submission}}"--}}
                                                                     {{--data-tag="{{$table->problem_tag}}"--}}
                                                                     {{--data-time="{{$table->time_limit}}"--}}
                                                                     {{--data-memory="{{$table->memory_limit}}"--}}
                                                                     {{--data-sampleInput="{{$table->sample_input}}"--}}
                                                                     {{--data-sampleOutput="{{$table->sample_output}}"--}}
                                                                     {{--data-tcInput="{{$table->tc_input}}"--}}
                                                                     {{--data-tcOutput="{{$table->tc_output}}"--}}
                                                                     {{--data-toggle="modal" data-target="#ediModal2" style="width: 100%;text-align: left;"><i class="icon-pencil pr-10"></i>Edit--}}
                                                            {{--</button>--}}
                                                        {{--</li>--}}
                                                        {{--<li><a class="btn bg-primary table-borderless pl-10"  href="{{action('Admin\ProblemController@destroy', ['id' => $table->id])}}"  onclick="return confirm('Are you sure to delete?')" title="Delete"style="text-align: left;"><i class="icon-remove"></i>Delete</a></li>--}}
                                                    {{--</ul>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                            {{--Start Show Modal--}}
{{--<div id="showModal{{$table->id}}" class="modal fade">--}}
    {{--<div class="modal-dialog modal-lg">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-header bg-light pt-10 pb-10">--}}
                {{--<button type="button" class="close" data-dismiss="modal">$times;</button>--}}
                {{--<h5 class="modal-title"><i class="fas fa-eye pr-10"></i>Problems Detail</h5>--}}
            {{--</div>--}}
            {{--<form action="" method="post" enctype="multipart/form-data">--}}
                {{--{{ csrf_field() }}--}}
                {{--<input type="hidden" id="ediID" name="id">--}}
                {{--<div class="modal-body">--}}
                    {{--<div class="col-md-6">--}}
                        {{--<div class="row">--}}
                            {{--<div class="thumbnail no-padding no-margin">--}}
                                {{--<div class="thumb">--}}
                                    {{--<h6 class="panel-title text-capitalize">{{$table->problem_name}} <span class="pull-right">{{$table->problem_setter}}</span></h6>--}}
                                {{--</div>--}}
                                {{--<div class="panel-body">--}}
                                    {{--<div class="col-md-6 no-padding-left">--}}
                                        {{--<ul class="list list-unstyled text-capitalize no-margin-top">--}}
                                            {{--<li><p>{{$table->id}}</p></li>--}}
                                            {{--<li><p>{{$table->problem_name}}</p></li>--}}
                                            {{--<li><p>{{$table->problem_description}}</p></li>--}}
                                            {{--<li><p>{{$table->problem_setter}}</p></li>--}}
                                            {{--<li><p>{{$table->total_solved}}</p></li>--}}
                                            {{--<li><p>{{$table->total_submission}}</p></li>--}}
                                            {{--<li><p>{{$table->time_limit}}</p></li>--}}
                                            {{--<li><p>{{$table->memory_limit}}</p></li>--}}
                                            {{--<li><p>{{$table->sample_input}}</p></li>--}}
                                            {{--<li><p>{{$table->sample_output}}</p></li>--}}
                                            {{--<li><p>{{$table->tc_input}}</p></li>--}}
                                            {{--<li><p>{{$table->tc_output}}</p></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--End of Showing Modal--}}

{{--<script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>

    <script type="text/javascript">

        $(function () {

            $('.datatable').DataTable({
                order: [[ 0, "desc" ]],
                columnDefs: [
                    { orderable: false, "targets": [6,7] }//For Column Order
                ]
            });
        });

        $(function () {
            $('.ediBtn').click(function () {
                //var id = $(this).data('id');
                var name = $(this).data('name');
                var description = $(this).data('description');
                var setter = $(this).data('setter');
                var solved = $(this).data('solved');
                var submission = $(this).data('submission');
                var tag = $(this).data('tag');
                var time = $(this).data('time');
                var memory = $(this).data('memory');
                var sampleInput = $(this).data('sampleInput');
                var sampleOutput = $(this).data('sampleOutput');
                var tcInput = $(this).data('tcInput');
                var tcOutput = $(this).data('tcOutput');


                //$('#editID').val(id);
                $('#ediModal2 [name=name]').val(name);
                $('#ediModal2 [name=description]').val(description);
                $('#ediModal2 [name=setter]').val(setter);
                $('#ediModal2 [name=solved]').val(solved);
                $('#ediModal2 [name=submission]').val(submission);
                $('#ediModal2 [name=tag]').val(tag);
                $('#ediModal2 [name=time]').val(time);
                $('#ediModal2 [name=memory]').val(memory);
                $('#ediModal2 [name=sampleInput]').val(sampleInput);
                $('#ediModal2 [name=sampleOutput]').val(sampleOutput);
                $('#ediModal2 [name=tcInput]').val(tcInput);
                $('#ediModal2 [name=tcOutput]').val(tcOutput);

            });
        });

    </script>--}}
