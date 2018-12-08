@extends('layouts.app')

@section('title')
    Contact With the team
@endsection
@section('content')
    <section>
        <div class="col-md-9 col-md-offset-5" style="color: black;">
            <h2 class="">Contact With The Team</h2>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-md-9 col-md-offset-2">
                <form method="post" action="{{action('ContactController@store')}}" class="col-md-10 col-md-offset-2">
                    {{ csrf_field() }}

                    {{--<input type="hidden" name="_method" value="put">--}}
                    <div class="row">
                        <div class="form-group col-md-8">
                            <label for="name" style="color: black; font-size: 16px;">Name: &nbsp;<span class="required">*</span></label>
                            <input placeholder="Name"
                                   id="name"
                                   required
                                   name="name"
                                   spellcheck="false"
                                   class="form-control"
                            />
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-md-8">
                            <label for="email" style="color: black; font-size: 16px;">Email: &nbsp;<span class="required">*</span> </label>
                            <input placeholder="Email"
                                   id="email"
                                   type="email"
                                   required
                                   name="email"
                                   spellcheck="false"
                                   class="form-control">


                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-md-8">
                            <label for="body" style="color: black; font-size: 16px;">Message: &nbsp;<span class="required">*</span></label>
                            <textarea placeholder="Type your message here:"
                                      id="body"
                                      rows="5"
                                      name="body"
                                      required
                                      spellcheck="false"
                                      onresize="false"
                                      class="form-control">
                                        </textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-md-6 col-md-offset-3">
                            <input type="submit" class="btn btn-success " value="Send" style="margin-right: 10%">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>


@endsection


