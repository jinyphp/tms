<div class="topbar-menu-area">
    <div class="container">
        <div class="topbar-menu left-menu">
            <ul>
                <li class="menu-item" >
                    <a title="Hotline: (+123) 456 789" href="#" >
                        <span class="icon label-before fa fa-mobile"></span>
                        Hotline: (+123) 456 789</a>
                </li>
            </ul>
        </div>


        <div class="topbar-menu right-menu">
            <ul>
                <li class="menu-item lang-menu menu-item-has-children parent">
                    <a title="English" href="#">
                        <span class="img label-before">
                            <img src="{{ asset('assets/shop/templates/images/lang-en.png') }}" alt="lang-en">
                        </span>
                        English
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                    <ul class="submenu lang" >
                        <li class="menu-item" >
                            <a title="hungary" href="#">
                                <span class="img label-before">
                                    <img src="{{ asset('assets/shop/templates/images/lang-hun.png') }}" alt="lang-hun">
                                </span>
                                Hungary
                            </a>
                        </li>
                        <li class="menu-item" >
                            <a title="german" href="#">
                                <span class="img label-before">
                                    <img src="{{ asset('assets/shop/templates/images/lang-ger.png') }}" alt="lang-ger" >
                                </span>
                                German
                            </a>
                        </li>
                        <li class="menu-item" >
                            <a title="french" href="#">
                                <span class="img label-before">
                                    <img src="{{ asset('assets/shop/templates/images/lang-fra.png') }}" alt="lang-fre">
                                </span>
                                French
                            </a>
                        </li>
                        <li class="menu-item" >
                            <a title="canada" href="#">
                                <span class="img label-before">
                                    <img src="{{ asset('assets/shop/templates/images/lang-can.png') }}" alt="lang-can">
                                </span>
                                Canada
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-has-children parent" >
                    <a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="submenu curency" >

                        @foreach(DB::table('shop_currency')->get() as $cur)
                        <li class="menu-item" >
                            <a title="{{$cur->title}}({{$cur->currency}})" href="#">{{$cur->title}}({{$cur->currency}})</a>
                        </li>
                        @endforeach
                    </ul>
                </li>

                @if(Route::has('login'))
                    @auth
                        @if(Auth::user()->utype == 'ADM')
                        <li class="menu-item menu-item-has-children parent" >
                            <a title="My Account " href="#">
                                My Account ({{Auth::user()->name}})
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="submenu curency" >
                                <li class="menu-item" >
                                    <a title="Dashboard" href="#">Dashboard</a>
                                </li>
                                <form id="logout-form" method="post" action="{{route('logout')}}">
                                    @csrf
                                <li lass="menu-item">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                </li>
                                </form>
                            </ul>
                        </li>

                        @else
                        <li class="menu-item menu-item-has-children parent" >
                            <a title="My Account " href="#">
                                My Account ({{Auth::user()->name}})
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="submenu curency" >
                                <li class="menu-item" >
                                    <a title="Dashboard" href="#">Dashboard</a>
                                </li>
                                <form id="logout-form" method="post" action="{{route('logout')}}">
                                    @csrf
                                <li lass="menu-item">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                </li>
                                </form>
                            </ul>
                        </li>
                        @endif
                    @else
                    <li class="menu-item" >
                        <a title="Register or Login" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="menu-item" >
                        <a title="Register or Login" href="{{route('register')}}">Register</a>
                    </li>
                    @endif
                @endif

            </ul>
        </div>

    </div>
</div>
