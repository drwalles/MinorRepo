@extends('layouts.app')

@section('title')
    Editor
@endsection
@section('content')
    <section class="secpadding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box clearfix ">
                        <h2 class="title-box_primary" style="padding-left: 50%;">Editor</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                    <a style="font-weight: bold; color: black;">Language:</a>
                    <select style="width: 200px; display: inline;" name="LanguageType">
                        <option value="1">GNU GCC C11 5.1.0</option>
                        <option value="2">GNU G++11 5.1.0</option>
                        <option value="3" selected="selected">GNU G++14 6.4.0</option>
                        <option value="4">Java 1.8.0_162</option>
                        <option value="5">Python 2.7</option>
                        <option value="6">Python 3.6</option>
                        <option value="7">JavaScript V8 4.8.0</option>
                    </select>
                    <br/>
                    <br/>
                    <textarea style="width: 90%;height: 50vh;text-align: left;text-decoration: none;font-family: Montserrat, sans-serif;font-size: 14px;font-weight: 300;overflow: scroll;" name="input"></textarea>
                    <br/>
                    <br/>
                    <button class="btn btn-primary" style="margin-left: 40%;margin-right: 40%; box-sizing: border-box;">Run</button>
                </div>
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
                    <br/>
                    <div>
                        <a style="font-weight: bold;">Input:</a>
                        <br/>
                        <textarea style="width: 90%; height: 10em; text-align: left; text-decoration: none; font-family: Montserrat, sans-serif; font-size: 14px; font-weight: 300; overflow: scroll;" name="input"></textarea>
                        <br/>
                        <br/>
                        <input name="inputFile" type="file" value="">
                    </div>
                    <br/>
                    <a style="font-weight: bold;">Output:</a>
                    <br/>
                    <textarea style="width: 90%; height: 10em; text-align: left; text-decoration: none; font-family: Montserrat, sans-serif; font-size: 14px; font-weight: 300; overflow: scroll;" name="output"></textarea>
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection
