@extends('layouts.admin')
{{--@extends('admin.box.problem.problemShowBox')--}}
@section('title')
    Contacts Edit
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
                            <h2 style="color: #1b4b72">Edit {{$contact->name}}</h2>
                            <div class="pull-right">
                                <a href="/admin/contacts" class="btn btn-primary">Back</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form method="post" action="{{route('contacts.update',[$contact->id])}}" class="col-md-10 col-md-offset-2">
                                {{ csrf_field() }}

                                <input type="hidden" name="_method" value="put">

                                <div class="form-group">
                                    <label for="name" style="color: black; font-size: 16px;">Name:<span class="required">*</span></label>
                                    <input placeholder="Enter Name"
                                           id="name"
                                           required
                                           name="name"
                                           style="width: 60%"
                                           spellcheck="false"
                                           class="form-control"
                                           value="{{$contact->name}}"/>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="email" style="color: black; font-size: 16px;">Email:<span class="required">*</span></label>
                                    <input placeholder="Email"
                                           id="email"
                                           required
                                           name="email"
                                           style="width: 60%"
                                           spellcheck="false"
                                           class="form-control"
                                           value="{{$contact->email}}"/>
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="body" style="color: black; font-size: 16px;">Message:<span class="required">*</span> </label>
                                    <textarea
                                        class="form-control"
                                        style="border-radius: 4px;"
                                        rows="10"
                                        name="body"
                                        id="body"
                                        placeholder="Enter Your Message here..">
                                        {{ $contact->body }}
                                    </textarea>
                                </div>
                                <br>

                                <br>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success pull-right" value="Save Changes" style="margin-right: 10%">
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

