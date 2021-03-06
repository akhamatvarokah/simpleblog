     <header>
        <div class="container-fluid position-relative no-side-padding">
            <a href="{{ url('home') }}" class="logo"><img src="https://indefiniteloop.com/blog/img/posts/15-09-2015/logo2.jpg" alt="Logo Image"></a>
            <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>
            <ul class="main-menu visible-on-click" id="main-menu">
                <li><a href="{{ url('home') }}">Home</a></li>

                @if(Auth::check())
                    <li><a href="{{ url('admin') }}">Dashboard Administrator</a></li>
                    <li><a href="{{ url('logout') }}">Logout</a></li>
                @else
                    <li><a href="{{ url('login') }}">Login</a></li>
                    <li><a href="{{ url('register/user') }}">Register</a></li>
                @endIf

            </ul><!-- main-menu -->            

        </div><!-- conatiner -->
    </header>