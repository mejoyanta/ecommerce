<section class="trending-products-area pt--30 pb--80 pt-md--20 pb-md--60">
    <div class="container-fluid">
        <div class="row mb--40 mb-md--30">
            <div class="col-12">
                <h2 class="heading-secondary text-center">Trending</h2>
            </div>
        </div>
        <div class="row">
            @forelse($products as $product)
                <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
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
                                        <a class="add_to_cart_btn action-btn" href="{{ route('cart.add', $product->id) }}" onclick="event.preventDefault(); document.getElementById('add_item_{{$product->id}}').submit();" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                            <i class="dl-icon-cart29"></i>
                                        </a>

                                        <form method="post" action="{{ route('cart.add', $product->id) }}" id="add_item_{{$product->id}}" style="display: none;">
                                            @csrf
                                            <input type="number" name="quantity" value="1">
                                        </form>

                                    </div>
                                </div>
                            </figure>
                            <div class="product-info">
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

                    <!-- Modal Start -->
                    @include('frontend.layouts.modal')
                    <!-- Modal End -->

                </div>
            @empty
                <div class="alert alert-danger">
                    <h3>No Product Found!</h3>
                </div>
            @endforelse

        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="{{ route('shop') }}" class="heading-button">Shop Now</a>
            </div>
        </div>
    </div>
</section>
