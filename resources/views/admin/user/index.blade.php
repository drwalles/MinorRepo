@extends('layouts.admin')
@section('title')
    User List
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
                            <h2>User List</h2>
                            <div class="pull-right">
                                <a href="{{action('Admin\UserController@create')}}" class="btn btn-lg btn-primary">Add <i class="fa fa-plus-circle"></i> </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                           <table class="table table-bordered">
                               <tr>
                                   <th class="text-center">ID</th>
                                   <th class="text-center">Name</th>
                                   <th class="text-center">Email</th>
                                   <th class="text-center">Address</th>
                                   <th class="text-center">Social</th>
                                   <th class="text-center">Institution</th>
                                   <th class="text-center">About</th>
                                   <th class="text-center">Type</th>
                                   <th class="text-center">Action</th>
                               </tr>
                               @foreach($users as $table)
                                <tr>
                                    <td>{{$table->id}}</td>
                                    <td>{{$table->name}}</td>
                                    <td>{{$table->email}}</td>
                                    <td>{{$table->address}}</td>
                                    <td>{{$table->social}}</td>
                                    <td>{{$table->institution}}</td>
                                    <td>{{$table->about}}</td>
                                    <td class="text-center"><a class="btn btn-xs btn-primary p-0" href="{{action('Admin\UserController@makeAdmin', ['id'=>$table->id])}}"  onclick="return confirm('Are you sure to make him Admin?')" title="Admin">{{$table->user_type}}</a></td>
                                    <td class="text-center">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="/admin/user/{{$table->id}}" class="btn btn-success"><i class="fa fa-eye"></i></a></li>
                                            <li class="list-inline-item"><a href="/admin/user/{{$table->id}}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a></li>
                                            <li class="list-inline-item">
                                                <a href="{{ action('Admin\UserController@destroy', ['id'=>$table->id]) }}" class="btn btn-danger" onclick="return confirm('Are You sure to delete {{$table->name}}')">
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
                            {{ $users->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
