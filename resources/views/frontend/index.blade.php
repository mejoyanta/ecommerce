@extends('frontend.layouts.app')

@section('content')
<!-- Main Content Wrapper Start -->
<div id="content" class="main-content-wrapper">
    <!-- Header Slider section -->
    @include('frontend.layouts.slider')
    <!-- End Header Slider section -->
    
    <!-- Video section Start Here -->
    @include('frontend.layouts.video')
    <!-- Video section End Here -->
    
    <!-- Trending Products area Start Here -->
    @include('frontend.layouts.products')
    <!-- Trending Products area End Here -->

    <!-- partners area Start Here -->
    <div class="partners-area ptb--40 ptb-md--30 bg--gray">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="airi-element-carousel partner-carousel"
                        data-slick-options='{
                            "slidesToShow": 6,
                            "slidesToScroll": 1
                        }'
                        data-slick-responsive='[
                            {"breakpoint":1200, "settings": {"slidesToShow": 5} },
                            {"breakpoint":991, "settings": {"slidesToShow": 4} },
                            {"breakpoint":767, "settings": {"slidesToShow": 3} },
                            {"breakpoint":575, "settings": {"slidesToShow": 2} },
                            {"breakpoint":380, "settings": {"slidesToShow": 1} }
                        ]'
                    >
                        <div class="item">
                            <div class="single-partner">
                                <img src="{{ asset('frontsite') }}/assets/img/partner/logo-partner1.png" alt="Partner">
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-partner">
                                <img src="{{ asset('frontsite') }}/assets/img/partner/logo-partner2.png" alt="Partner">
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-partner">
                                <img src="{{ asset('frontsite') }}/assets/img/partner/logo-partner3.png" alt="Partner">
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-partner">
                                <img src="{{ asset('frontsite') }}/assets/img/partner/logo-partner4.png" alt="Partner">
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-partner">
                                <img src="{{ asset('frontsite') }}/assets/img/partner/logo-partner5.png" alt="Partner">
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-partner">
                                <img src="{{ asset('frontsite') }}/assets/img/partner/logo-partner6.png" alt="Partner">
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-partner">
                                <img src="{{ asset('frontsite') }}/assets/img/partner/logo-partner1.png" alt="Partner">
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-partner">
                                <img src="{{ asset('frontsite') }}/assets/img/partner/logo-partner2.png" alt="Partner">
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-partner">
                                <img src="{{ asset('frontsite') }}/assets/img/partner/logo-partner3.png" alt="Partner">
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-partner">
                                <img src="{{ asset('frontsite') }}/assets/img/partner/logo-partner4.png" alt="Partner">
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-partner">
                                <img src="{{ asset('frontsite') }}/assets/img/partner/logo-partner5.png" alt="Partner">
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-partner">
                                <img src="{{ asset('frontsite') }}/assets/img/partner/logo-partner6.png" alt="Partner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partners area End Here -->

    <!-- Top Collections area Start Here -->
    <section class="top-collection-area ptb--80 pt-md--55 pb-md--60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="text-block">
                        <h2 class="heading-secondary mb--40 mb-md--20">Top Collections</h2>
                        <p class="font-2 heading-color font-size-16 mb--40 mb-md--25">Integer ut ligula quis lectus fringilla elementum porttitor sed est. Duis fringilla efficitur ligula sed lobortis. Sed tempus faucibus mi, quis fringilla mauris lacinia sed.</p>
                        <a href="{{ route('collections') }}" class="heading-button mb-sm--30">View All</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="banner-box banner-type-1 banner-hover-1 mb--20 mb-md--10 mb-sm--30">
                                <div class="banner-inner">
                                    <div class="banner-image">
                                        <img src="{{ asset('frontsite') }}/assets/img/banner/m01-collection1.jpg" alt="Banner">
                                    </div>
                                    <div class="banner-info">
                                        <a class="banner-btn" href="{{ route('shop') }}">Shop Now</a>
                                    </div>
                                    <a class="banner-link banner-overlay" href="{{ route('shop') }}">Shop Now</a>
                                </div>
                            </div>
                            <div class="banner-box banner-type-1 banner-hover-1 mb-sm--30">
                                <div class="banner-inner">
                                    <div class="banner-image">
                                        <img src="{{ asset('frontsite') }}/assets/img/banner/m01-collection2.jpg" alt="Banner">
                                    </div>
                                    <div class="banner-info">
                                        <a class="banner-btn" href="{{ route('shop') }}">Shop Now</a>
                                    </div>
                                    <a class="banner-link banner-overlay" href="{{ route('shop') }}">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner-box banner-type-1 banner-hover-1">
                                <div class="banner-inner">
                                    <div class="banner-image">
                                        <img src="{{ asset('frontsite') }}/assets/img/banner/m01-collection3.jpg" alt="Banner">
                                    </div>
                                    <div class="banner-info">
                                        <a class="banner-btn" href="{{ route('shop') }}">Shop Now</a>
                                    </div>
                                    <a class="banner-link banner-overlay" href="{{ route('shop') }}">Shop Now</a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Collections area End Here -->

</div>
<!-- Main Content Wrapper Start -->
@endsection