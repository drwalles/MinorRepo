@extends('layouts.admin')
{{--@extends('admin.box.problem.problemShowBox')--}}
@section('title')
    Problems Edit
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
                            <h2 style="color: #1b4b72">Edit {{$user->name}}</h2>
                            <div class="pull-right">
                                <a href="/admin/user" class="btn btn-primary">Back</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form method="post" action="{{route('user.update',[$user->id])}}" class="col-md-10 col-md-offset-2">
                                {{ csrf_field() }}

                                <input type="hidden" name="_method" value="put">
                                <div class="row">
                                <div class="form-group col-md-8">
                                    <label for="name" style="color: black; font-size: 16px;">Name: <span class="required">*</span></label>
                                    <input placeholder="Name"
                                           id="name"
                                           required
                                           name="name"
                                           spellcheck="false"
                                           class="form-control"
                                           value="{{$user->name}}"/>
                                </div>
                                </div>
                                <br>
                                <div class="row">
                                <div class="form-group col-md-8">
                                    <label for="email" style="color: black; font-size: 16px;">Email: <span class="required">*</span> </label>
                                    <input placeholder="Email"
                                           id="email"
                                           type="email"
                                           required
                                           name="email"
                                           spellcheck="false"
                                           class="form-control"
                                           value="{{ $user->email }}">


                                </div>
                                </div>
                                <br>
                                <div class="row">
                                <div class="form-group col-md-8">
                                    <label for="password" style="color: black; font-size: 16px;">Password: <span class="required">*</span></label>
                                    <input placeholder="Password"
                                           id="password"
                                           type="password"
                                           required
                                           name="password"
                                           spellcheck="false"
                                           class="form-control"
                                           value="{{$user->password}}"/>
                                </div>
                                </div>
                                <br>
                                <div class="row">
                                <div class="form-group col-md-8">
                                    <label for="address" style="color: black; font-size: 16px;">Address:<span class="required"></span></label>
                                    <textarea placeholder="Address"
                                           id="address"
                                           rows="5"
                                           name="address"
                                           spellcheck="false"
                                           onresize="false"
                                           class="form-control"
                                           >{{$user->address}}</textarea>
                                </div>
                                </div>
                                <br>
                                <div class="row">
                                <div class="form-group col-md-8">
                                    <label for="social" style="color: black; font-size: 16px;">Facebook:<span class="required"></span></label>
                                    <input placeholder="Facebook URL"
                                           id="social"
                                           name="social"
                                           spellcheck="false"
                                           class="form-control"
                                           value="{{$user->social}}"/>
                                </div>
                                </div>
                                <br>
                                <div class="row">
                                <div class="form-group col-md-8">
                                    <label for="institution" style="color: black; font-size: 16px;">Institution:<span class="required"></span> </label>
                                    <input placeholder="Institute or Company"
                                           id="institution"
                                           name="institution"
                                           spellcheck="false"
                                           class="form-control"
                                           value="{{ $user->institution }}"
                                    />

                                </div>
                                </div>
                                <br>
                                <div class="row">
                                <div class="form-group col-md-8">
                                    <label for="about" style="color: black; font-size: 16px;">About:<span class="required"></span> </label>
                                    <textarea placeholder="Write down a paragraph About Yourself in 200 word"
                                              id="about"
                                              rows="5"
                                              name="about"
                                              spellcheck="false"
                                              class="form-control">
                                        {{$user->about}}
                                    </textarea>
                                </div>
                                </div>
                                <br>
                                <div class="row">
                                <div class="form-group col-md-8">
                                    <label for="user_type" style="color: black; font-size: 16px;">User Type: <span class="required">*</span> </label>
                                    <input placeholder="Type Should be User or Admin [make sure to capitalize]"
                                              id="user_type"
                                              name="user_type"
                                              spellcheck="false"
                                              required
                                              class="form-control"
                                              value="{{ $user->user_type }}">

                                </div>
                                </div>
                                <br>
                                <div class="row">
                                <div class="form-group col-md-6 col-md-offset-3">
                                    <input type="submit" class="btn btn-success pull-right" value="Save Changes" style="margin-right: 10%">
                                </div>
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

