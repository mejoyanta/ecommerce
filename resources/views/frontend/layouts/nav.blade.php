<!-- Header Area Start -->
<header class="header header-fullwidth header-style-1 {{Request::routeIs(['index']) ? 'header-transparent':'' }}">
    <div class="header-inner fixed-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <!-- Main Navigation Start Here -->
                    <nav class="main-navigation">
                        <ul class="mainmenu">
                            <li class="mainmenu__item">
                                <a href="{{ route('index')}}" class="mainmenu__link">
                                    <span class="mm-text">Home</span>
                                </a>
                            </li>
                            <li class="mainmenu__item">
                                <a href="{{ route('shop') }}" class="mainmenu__link">
                                    <span class="mm-text">Shop</span>
                                    {{-- <span class="tip">Hot</span> --}}
                                </a>
                            </li>
                            <li class="mainmenu__item">
                                <a href="{{ route('collections') }}" class="mainmenu__link">
                                    <span class="mm-text">Collections</span>
                                </a>
                            </li>
                            <li class="mainmenu__item">
                                <a href="{{ route('brands') }}" class="mainmenu__link">
                                    <span class="mm-text">Brands</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- Main Navigation End Here -->
                </div>
                <div class="col-lg-2 col-md-3 col-4 text-lg-center">
                    <!-- Logo Start Here -->
                    <a href="{{ route('index')}}" class="logo-box">
                        <figure class="logo--normal"> 
                            <img src="{{ asset('frontsite') }}/assets/img/logo/logo.svg" alt="Logo"/>   
                        </figure>
                        <figure class="logo--transparency">
                            <img src="{{ asset('frontsite') }}/assets/img/logo/logo-white.png" alt="Logo"/>  
                        </figure>
                    </a>
                    <!-- Logo End Here -->
                </div>
                <div class="col-xl-5 col-lg-4 col-md-9 col-8">
                    <ul class="header-toolbar text-right">
                        <li class="header-toolbar__item d-none d-lg-block">
                            <a href="#sideNav" class="toolbar-btn">
                                <i class="dl-icon-menu2"></i>
                            </a>                                    
                        </li>

                        <li class="header-toolbar__item user-info-menu-btn">
                            <a href="#">
                                <i class="fa fa-user-circle-o"></i>
                            </a>
                            <ul class="user-info-menu">
                                @guest
                                    <li>
                                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li>
                                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li>
                                        <a href="my-account.html">My Account</a>
                                    </li>
                                    <li>
                                        <a href="cart.html">Shopping Cart</a>
                                    </li>
                                    <li>
                                        <a href="checkout.html">Check Out</a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html">Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="order-tracking.html">Order tracking</a>
                                    </li>
                                    <li>
                                        <a href="compare.html">compare</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                           {{-- <i class="fas fa-sign-out-alt"></i> --}}
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                @endguest
                            </ul>
                        </li>
                        <li class="header-toolbar__item">
                            <a href="#miniCart" class="mini-cart-btn toolbar-btn">
                                <i class="dl-icon-cart4"></i>
                                <sup class="mini-cart-count">2</sup>
                            </a>
                        </li>
                        <li class="header-toolbar__item">
                            <a href="#searchForm" class="search-btn toolbar-btn">
                                <i class="dl-icon-search1"></i>
                            </a>
                        </li>
                        <li class="header-toolbar__item d-lg-none">
                            <a href="#" class="menu-btn"></a>                 
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End -->

<!-- Mobile Header area Start -->
<header class="header-mobile">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-4">
                <a href="{{ route('index')}}" class="logo-box">
                    <figure class="logo--normal">
                        <img src="{{ asset('frontsite') }}/assets/img/logo/logo.svg" alt="Logo">
                    </figure>
                </a>
            </div>
            <div class="col-8">
                <ul class="header-toolbar text-right">
                    <li class="header-toolbar__item user-info-menu-btn">
                        <a href="#">
                            <i class="fa fa-user-circle-o"></i>
                        </a>
                        <ul class="user-info-menu">
                            @guest
                                <li>
                                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li>
                                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li>
                                    <a href="my-account.html">My Account</a>
                                </li>
                                <li>
                                    <a href="cart.html">Shopping Cart</a>
                                </li>
                                <li>
                                    <a href="checkout.html">Check Out</a>
                                </li>
                                <li>
                                    <a href="wishlist.html">Wishlist</a>
                                </li>
                                <li>
                                    <a href="order-tracking.html">Order tracking</a>
                                </li>
                                <li>
                                    <a href="compare.html">compare</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                       {{-- <i class="fas fa-sign-out-alt"></i> --}}
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            @endguest
                        </ul>
                    </li>
                    <li class="header-toolbar__item">
                        <a href="#miniCart" class="mini-cart-btn toolbar-btn">
                            <i class="dl-icon-cart4"></i>
                            <sup class="mini-cart-count">2</sup>
                        </a>
                    </li>
                    <li class="header-toolbar__item">
                        <a href="#searchForm" class="search-btn toolbar-btn">
                            <i class="dl-icon-search1"></i>
                        </a>
                    </li>
                    <li class="header-toolbar__item d-lg-none">
                        <a href="#" class="menu-btn"></a>                 
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Mobile Navigation Start Here -->
                <div class="mobile-navigation dl-menuwrapper" id="dl-menu">
                    <button class="dl-trigger">Open Menu</button>
                    <ul class="dl-menu">
                        <li>
                            <a href="{{ route('index') }}">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('shop') }}">
                                Shop
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('collections') }}">
                                Collections
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('brands') }}">
                                Brands
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Mobile Navigation End Here -->
            </div>
        </div>
    </div>
</header>
<!-- Mobile Header area End -->
