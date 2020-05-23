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
                                                    <img src="/frontsite/assets/img/products/{{$img->lg_img}}"
                                                        alt="{{$product->title}}"
                                                        class="{{$key == 0 ? 'primary-image' : 'secondary-image'}}">
                                                    @endforeach
                                                </a>
                                            </div>
                                            <div class="airi-product-action">
                                                <div class="product-action">
                                                    <a @click.prevent="showProductModal({{$product}})"
                                                        class="quickview-btn action-btn" data-toggle="tooltip"
                                                        data-placement="top" title="Quick Shop">
                                                        <span data-toggle="modal" data-target="#productModal">
                                                            <i class="dl-icon-view"></i>
                                                        </span>
                                                    </a>

                                                    <a @click.prevent="addItemToCart({{$product->id}})"
                                                        class="add_to_cart_btn action-btn" data-toggle="tooltip"
                                                        data-placement="top" title="Add to Cart">
                                                        <i class="dl-icon-cart29"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </figure>
                                        <div class="product-info text-center">
                                            <h3 class="product-title">
                                                <a
                                                    href="{{ route('product.details', $product->id) }}">{{ $product->title }}</a>
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
                                @foreach($categories as $category)
                                <li>
                                    <a href="{{ route('collections.product',$category->id) }}">
                                        {{ $category->name }}
                                    </a>
                                    <span class="count">({{$category->products->count()}})</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Category Widget Start -->
                        <!-- Product Brand Widget Start -->
                        <div class="product-widget product-widget--brand mb--40 mb-md--30">
                            <h3 class="widget-title">Brands</h3>
                            <ul class="product-widget__list">
                                @foreach($brands as $brand)
                                <li>
                                    <a href="{{ route('brands.product',$brand->id) }}">
                                        {{ $brand->name }}
                                    </a>
                                    <span class="count">({{$brand->products->count()}})</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Product Brand Widget End -->
                        <!-- Category Widget Start -->
                        <div class="product-widget tag-widget mb--35 mb-md--30">
                            <h3 class="widget-title">Categories</h3>
                            <div class="tagcloud">
                                @foreach($categories as $category)
                                <a href="{{ route('collections.product',$category->id) }}">
                                    {{ $category->name }}
                                </a>
                                @endforeach
                            </div>
                        </div>
                        <!-- Category Widget Start -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection