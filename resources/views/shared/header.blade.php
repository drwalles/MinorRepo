<div class="navbar-header">
    <!--Buttons for small screen (=) -->
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a href="{{ url('/')}}" class="navbar-brand">
        <a href="{{ url('/')}}" class="logo"><b>STAR<span>OJ</span></b></a>
    </a>
</div>

@if (Route::has('login'))
    @if (Auth::check())
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right mainNav">
                <li><a href="{{url('/home')}}">Home</a></li>
                <li><a href="{{ url('/problem') }}">Volume</a></li>
                <li><a href="{{url('/contest')}}">Contest</a></li>
                <li><a href="{{url('/editor')}}">Editor</a></li>
                <li><a href="{{url('/blog')}}">Blog</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="/setting/{{Auth::user()->id}}">Profile</a></li>
                        <li><a href="#">Ranking</a></li>
                        <li><a href="{{ route('password.change') }}">Change Password</a></li>
                        <li><a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    @else
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right mainNav">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ url('/problem') }}">Volume</a></li>
                <li><a href="{{url('/contest')}}">Contest</a></li>
                <li><a href="{{url('/editor')}}">Editor</a></li>
                <li><a href="{{url('/blog')}}">Blog</a></li>
                <li><a class="btn btn-outline-primary" href="{{ url('/login') }}">Login</a></li>
                <li><a class="btn btn-danger" href="{{ url('/register') }}">Register</a></li>
            </ul>
        </div>

        @endif
    @endif
    </div>
</div>
