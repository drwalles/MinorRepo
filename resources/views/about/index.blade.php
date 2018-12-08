@extends('layouts.app')

@section('title')
    About
@endsection

@section('style')
    .hovereffect {
    width: 300px;
    height: 300px;
    float: left;
    overflow: hidden;
    position: relative;
    text-align: center;
    cursor: default;
    }

    .hovereffect .overlay {
    width: 300px;
    height: 1300px;
    position: absolute;
    overflow: hidden;
    top: 0;
    left: 0;
    background-color: rgba(0,0,0,0.6);
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transform: translate(460px, -100px) rotate(180deg);
    -ms-transform: translate(460px, -100px) rotate(180deg);
    transform: translate(460px, -100px) rotate(180deg);
    -webkit-transition: all 0.2s 0.4s ease-in-out;
    transition: all 0.2s 0.4s ease-in-out;
    }

    .hovereffect img {
    display: block;
    position: relative;
    -webkit-transition: all 0.2s ease-in;
    transition: all 0.2s ease-in;
    }

    .hovereffect h2 {
    text-transform: uppercase;
    color: white;
    text-align: center;
    position: relative;
    font-size: 17px;
    padding: 10px;
    background: rgba(0, 0, 0, 0.6);
    }

    .hovereffect h3 {
    text-transform: uppercase;
    color: white;
    text-align: center;
    position: relative;
    font-size: 17px;
    padding: 10px;
    }


    .hovereffect a.info {
    display: inline-block;
    text-decoration: none;
    padding: 7px 14px;
    text-transform: uppercase;
    color: #fff;
    border: 1px solid #fff;
    margin: 50px 0 0 0;
    background-color: transparent;
    -webkit-transform: translateY(-200px);
    -ms-transform: translateY(-200px);
    transform: translateY(-200px);
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    }

    .hovereffect a.info:hover {
    box-shadow: 0 0 5px #fff;
    }

    .hovereffect:hover .overlay {
    opacity: 1;
    filter: alpha(opacity=100);
    -webkit-transition-delay: 0s;
    transition-delay: 0s;
    -webkit-transform: translate(0px, 0px);
    -ms-transform: translate(0px, 0px);
    transform: translate(0px, 0px);
    }

    .hovereffect:hover h2 {
    -webkit-transform: translateY(0px);
    -ms-transform: translateY(0px);
    transform: translateY(0px);
    -webkit-transition-delay: 0.5s;
    transition-delay: 0.5s;
    }

    .hovereffect:hover a.info {
    -webkit-transform: translateY(0px);
    -ms-transform: translateY(0px);
    transform: translateY(0px);
    -webkit-transition-delay: 0.3s;
    transition-delay: 0.3s;
    }
@endsection

@section('content')
    <div  style="background-color: #2C4257">
        <br>
        <br>
        <div class="row">
            <div class="col-md-5 col-md-push-3">
                <div class="hovereffect">
                    <img class="img-responsive" src="{{asset('images\ami.jpg')}}" style="width: 300px; height: 300px;" alt="Tahsin">
                    <div class="overlay">
                        <h2>Aminul Haque Rasel</h2>
                        <h3>Project Inspector & Backend Architecture</h3>
                        <a class="info" href="{{ route('about.ami') }}">More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-md-offset-1">
                <div class="hovereffect">
                    <img class="img-responsive" src="{{asset('images\jami.jpg')}}" style="width: 300px; height: 300px;" alt="Tahsin">
                    <div class="overlay">
                        <h2>Araf Al-Jami</h2>
                        <h3>Project Engineer (sandboxing)</h3>
                        <a class="info" href="{{ route('about.jami') }}">More</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-5 col-md-push-3">
                <div class="hovereffect">
                    <img class="img-responsive" src="{{asset('images\ash.jpg')}}" style="width: 300px; height: 300px;" alt="Tahsin">
                    <div class="overlay">
                        <h2>Mohammad Ashraful Haque Chowdhury Rahi</h2>
                        <h3>Designer & Debugger</h3>
                        <a class="info" href="{{ route('about.ash') }}">More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-md-offset-1">
                <div class="hovereffect">
                    <img class="img-responsive" src="{{asset('images\tas.jpg')}}" style="width: 300px; height: 300px;" alt="Tahsin">
                    <div class="overlay">
                        <h2>Tahsin Rashad</h2>
                        <h3>Front End & DB Designer</h3>
                        <a class="info" href="{{ route('about.tas') }}">More</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    <br>


@endsection
