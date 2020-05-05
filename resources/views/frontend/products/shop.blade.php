@extends('frontend.layouts.app')

@section('content')
<div class="breadcrumb-area bg--white-6 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Shop</h1>
                <ul class="breadcrumb justify-content-center">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li class="current"><span>Shop</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="content" class="main-content-wrapper">
    <div class="page-content-inner enable-page-sidebar">
        <div class="container-fluid">
            <div class="row shop-sidebar pt--45 pt-md--35 pt-sm--20 pb--60 pb-md--50 pb-sm--40">
                <div class="col-lg-9 order-lg-2" id="main-content">
                    <div class="shop-products"> 
                        <div class="row grid-space-20 xxl-block-grid-4">
                            @foreach($products as $product)
                            <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                                <div class="airi-product">
                                    <div class="product-inner">
                                        <figure class="product-image">
                                            <div class="product-image--holder">
                                                <a href="{{ route('product.details', $product->id) }}">
                                                    @foreach($product->images()->take(2)->get() as $key => $img)
                                                        <img src="/frontsite/assets/img/products/{{$img->lg_img}}" alt="{{$product->title}}" class="{{$key == 0 ? 'primary-image' : 'secondary-image'}}">
                                                    @endforeach
                                                </a>
                                            </div>
                                            <div class="airi-product-action">
                                                <div class="product-action">
                                                    <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                        <span data-toggle="modal" data-target="#productModal_{{$product->id}}">
                                                            <i class="dl-icon-view"></i>
                                                        </span>
                                                    </a>
                                                    <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                        <i class="dl-icon-cart29"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </figure>
                                        <div class="product-info text-center">
                                            <h3 class="product-title">
                                                <a href="{{ route('product.details', $product->id) }}">{{ $product->title }}</a>
                                            </h3>
                                            <span class="product-price-wrapper">
                                                <span class="money">TK {{$product->discounted_price}}</span>
                                                @if($product->discount > 0)
                                                    <span class="product-price-old">
                                                        <span class="money">TK {{$product->price }}</span>
                                                    </span>
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                    @include('frontend.layouts.modal')
                            </div>
                            @endforeach
                        </div>
                    </div>
                    {{ $products->links() }}
                </div>
                <div class="col-lg-3 order-lg-1 mt--30 mt-md--40" id="primary-sidebar">
                    <div class="sidebar-widget">
                        <!-- Category Widget Start -->
                        <div class="product-widget categroy-widget mb--35 mb-md--30">
                            <h3 class="widget-title">Categories</h3>
                            <ul class="prouduct-categories product-widget__list">
                                <li><a href="">Accessories</a><span class="count">(0)</span></li>
                                <li><a href="">Brands</a><span class="count">(0)</span></li>
                                <li><a href="">Clothing</a><span class="count">(1)</span></li>
                                <li><a href="">Fashions</a><span class="count">(21)</span></li>
                                <li><a href="">Furniture</a><span class="count">(20)</span></li>
                                <li><a href="">Gifts</a><span class="count">(0)</span></li>
                                <li><a href="">Kids</a><span class="count">(0)</span></li>
                                <li><a href="">Men</a><span class="count">(0)</span></li>
                                <li><a href="">New in</a><span class="count">(0)</span></li>
                                <li><a href="">Outlet</a><span class="count">(0)</span></li>
                                <li><a href="">Shoes</a><span class="count">(0)</span></li>
                                <li><a href="">Wallets</a><span class="count">(0)</span></li>
                                <li><a href="">Women</a><span class="count">(0)</span></li>
                            </ul>
                        </div>
                        <!-- Category Widget Start -->
                        
                        <!-- Product Brand Widget Start -->
                        <div class="product-widget product-widget--brand mb--40 mb-md--30">
                            <h3 class="widget-title">Brands</h3>
                            <ul class="product-widget__list">
                                <li><a href="shop-sidebar.html">Airi</a><span class="count">(2)</span></li>
                                <li><a href="shop-sidebar.html">Mango</a><span class="count">(2)</span></li>
                                <li><a href="shop-sidebar.html">Valention</a><span class="count">(2)</span></li>
                                <li><a href="shop-sidebar.html">Zara</a><span class="count">(2)</span></li>
                            </ul>
                        </div>
                        <!-- Product Brand Widget End -->

                        <!-- Category Widget Start -->
                        <div class="product-widget tag-widget mb--35 mb-md--30">
                            <h3 class="widget-title">Categories</h3>
                            <div class="tagcloud">
                                <a href="shop-sidebar.html">chair</a>
                                <a href="shop-sidebar.html">deco</a>
                                <a href="shop-sidebar.html">dress</a>
                                <a href="shop-sidebar.html">fashion</a>
                                <a href="shop-sidebar.html">furniture</a>
                                <a href="shop-sidebar.html">light</a>
                                <a href="shop-sidebar.html">living</a>
                                <a href="shop-sidebar.html">sofa</a>
                                <a href="shop-sidebar.html">table</a>
                                <a href="shop-sidebar.html">women</a>
                            </div>
                        </div>
                        <!-- Category Widget Start -->
                        
                        <!-- Promo Widget Start -->
                        <div class="product-widget promo-widget">
                            <div class="banner-box banner-type-3 banner-type-3-2 banner-hover-1">
                                <div class="banner-inner">
                                    <div class="banner-image">
                                        <img src="/frontsite/assets/img/banner/ad-banner.jpg" alt="Banner">
                                    </div>
                                    <div class="banner-info">
                                        <h2 class="banner-title-11">New <br> <strong>Season</strong></h2>
                                    </div>
                                    <a class="banner-link banner-overlay" href="shop-sidebar.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- Promo Widget End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection