<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('frontsite') }}/assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('frontsite') }}/assets/img/icon.png">

    <!-- Title -->
    <title>Airi - Clean, Minimal eCommerce Bootstrap 4 Template</title>

    <!-- ************************* CSS Files ************************* -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontsite') }}/assets/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('frontsite') }}/assets/css/font-awesome.min.css">

    <!-- dl Icon CSS -->
    <link rel="stylesheet" href="{{ asset('frontsite') }}/assets/css/dl-icon.css">

    <!-- All Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('frontsite') }}/assets/css/plugins.css">

    <!-- Revoulation Slider CSS  -->
    <link rel="stylesheet" href="{{ asset('frontsite') }}/assets/css/revoulation.css">

    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('frontsite') }}/assets/css/main.css">

    <!-- modernizr JS
    ============================================ -->
    <script src="{{ asset('frontsite') }}/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="ai-preloader active">
        <div class="ai-preloader-inner h-100 d-flex align-items-center justify-content-center">
            <div class="ai-child ai-bounce1"></div>
            <div class="ai-child ai-bounce2"></div>
            <div class="ai-child ai-bounce3"></div>
        </div>
    </div>

    <!-- Main Wrapper Start -->
    <div class="wrapper {{Request::path()==='/' ? 'enable-header-transparent':'' }}" id="app">
        @include('frontend.layouts.nav')
        <!-- Main Content Wrapper Start -->
        @yield('content')
        <!-- Main Content Wrapper Start -->

        @include('frontend.layouts.footer')

        <!-- Search from Start -->
        <div class="searchform__popup" id="searchForm">
            <a href="#" class="btn-close"><i class="dl-icon-close"></i></a>
            <div class="searchform__body">
                <p>Start typing and press Enter to search</p>
                <form class="searchform" action="{{ route('search') }}" method="GET">

                    <input type="text" name="search" id="search" class="searchform__input"
                        placeholder="Search Entire Store...">
                    <button type="submit" class="searchform__submit"><i class="dl-icon-search10"></i></button>
                </form>
            </div>
        </div>
        <!-- Search from End -->

        <!-- Mini Cart Start -->
        @include('frontend.layouts.cart')

        <!-- Mini Cart End -->

        <!-- Global Overlay Start -->
        <div class="ai-global-overlay"></div>
        <!-- Global Overlay End -->
        @include('frontend.layouts.modal')

    </div>
    <!-- Main Wrapper End -->

    <script src="{{ asset('js/app.js') }}"></script>
    <!-- ************************* JS Files ************************* -->
    <!-- jQuery JS -->
    <script src="{{ asset('frontsite') }}/assets/js/vendor/jquery.min.js"></script>

    <!-- Bootstrap and Popper Bundle JS -->
    <script src="{{ asset('frontsite') }}/assets/js/bootstrap.bundle.min.js"></script>

    <!-- All Plugins Js -->
    <script src="{{ asset('frontsite') }}/assets/js/plugins.js"></script>

    <!-- Main JS -->
    <script src="{{ asset('frontsite') }}/assets/js/main.js"></script>

    <!-- REVOLUTION JS FILES -->
    <script src="{{ asset('frontsite') }}/assets/js/revoulation/jquery.themepunch.tools.min.js"></script>
    <script src="{{ asset('frontsite') }}/assets/js/revoulation/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{ asset('frontsite') }}/assets/js/revoulation/extensions/revolution.extension.actions.min.js">
    </script>
    <script src="{{ asset('frontsite') }}/assets/js/revoulation/extensions/revolution.extension.carousel.min.js">
    </script>
    <script src="{{ asset('frontsite') }}/assets/js/revoulation/extensions/revolution.extension.kenburn.min.js">
    </script>
    <script src="{{ asset('frontsite') }}/assets/js/revoulation/extensions/revolution.extension.layeranimation.min.js">
    </script>
    <script src="{{ asset('frontsite') }}/assets/js/revoulation/extensions/revolution.extension.migration.min.js">
    </script>
    <script src="{{ asset('frontsite') }}/assets/js/revoulation/extensions/revolution.extension.navigation.min.js">
    </script>
    <script src="{{ asset('frontsite') }}/assets/js/revoulation/extensions/revolution.extension.parallax.min.js">
    </script>
    <script src="{{ asset('frontsite') }}/assets/js/revoulation/extensions/revolution.extension.slideanims.min.js">
    </script>
    <script src="{{ asset('frontsite') }}/assets/js/revoulation/extensions/revolution.extension.video.min.js"></script>

    <!-- REVOLUTION ACTIVE JS FILES -->
    <script src="{{ asset('frontsite') }}/assets/js/revoulation.js"></script>
    @include('sweetalert::alert')
</body>

</html>