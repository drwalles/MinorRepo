@extends('layouts.admin')

@section('title')
    Contacts
@endsection

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
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
                            <h2>Contacts List</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <table class="table table-bordered">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($contacts as $contact)
                                <tr>
                                    <td>{{$contact->id}}</td>
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->body}}</td>
                                    <td class="text-center">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="/admin/contacts/{{$contact->id}}" class="btn btn-success"><i class="fa fa-eye"></i></a></li>
                                            <li class="list-inline-item"><a href="/admin/contacts/{{$contact->id}}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a></li>
                                            <li class="list-inline-item"><a href="" class="btn btn-primary"><i class="fa fa-reply"></i></a></li>
                                            <li class="list-inline-item">
                                                <a href="{{ action('Admin\ContactsController@destroy', ['id'=>$contact->id]) }}" class="btn btn-danger" onclick="return confirm('Are You sure to delete {{$contact->problem_name}}')">
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
                            {{ $contacts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
