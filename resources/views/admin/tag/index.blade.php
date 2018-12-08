@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Welcome</h3>
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
                            <h2>Tag</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                           <table class="table table-bordered">
                               <tr>
                                   <th>ID</th>
                                   <th>BS</th>
                                   <th>DP</th>
                                   <th>Ad-Hoc</th>
                                   <th>BDS</th>
                                   <th>BFS</th>
                                   <th>DFS</th>
                                   <th>Math</th>
                                   <th>String</th>
                                   <th>Greedy</th>
                                   <th>BM</th>
                                   <th>D&C</th>
                                   <th>Sort</th>
                               </tr>
                               @foreach($tags as $table)
                                <tr>
                                    <td>{{$table->id}}</td>
                                    <td>{{$table->binary_search}}</td>
                                    <td>{{$table->dynamic_programming}}</td>
                                    <td>{{$table->ad_hoc}}</td>
                                    <td>{{$table->basic_data_structure}}</td>
                                    <td>{{$table->bfs}}</td>
                                    <td>{{$table->dfs}}</td>
                                    <td>{{$table->math}}</td>
                                    <td>{{$table->string}}</td>
                                    <td>{{$table->greedy}}</td>
                                    <td>{{$table->bit_manipulation}}</td>
                                    <td>{{$table->divide_and_conquer}}</td>
                                    <td>{{$table->sort}}</td>
                                </tr>
                               @endforeach
                           </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
