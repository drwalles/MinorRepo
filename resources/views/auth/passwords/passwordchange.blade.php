@extends('layouts.app')
@section('title')
    Change Password
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{__('Chage Password') }}</div>

                    @include('partials.errors')
                    @include('partials.success')

                    <div class="panel-body">
                        @if(session('errors'))
                            <div class="alert alert-danger">
                                <strong>Ooops !!</strong> {{session('errors')}}
                            </div>
                        @endif
                        <form class="form-horizontal" method="POST" action="{{ action('PasswordController@password_update') }}">
                            {{ csrf_field() }}


                            <div class="form-group{{ $errors->has('old') ? ' has-error' : '' }}">
                                <label for="old" class="col-md-4 control-label">Old Password</label>

                                <div class="col-md-6">
                                    <input id="old" type="password" class="form-control" name="old" value="{{ old('old') }}" required autofocus>

                                    @if ($errors->has('old'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('old') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <br/>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">New Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <br/>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <br/>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary form-control">
                                        Change Password
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
