<!-- Modal Start -->
<div class="modal fade product-modal" id="productModal_{{$product->id}}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close custom-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="dl-icon-close"></i></span>
        </button>
        <div class="row">
            <div class="col-md-6">
                <div class="airi-element-carousel product-image-carousel nav-vertical-center nav-style-1" data-slick-options='{
                            "slidesToShow": 1,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "prevArrow": "dl-icon-left",
                            "nextArrow": "dl-icon-right"
                        }'
                >
                @foreach($product->images()->take(4)->get() as $img)
                    <div class="product-image">
                        <div class="product-image--holder">
                            <a href="{{ route('product.details', $product->id) }}">
                                <img src="/frontsite/assets/img/products/{{$img->lg_img}}" alt="Product Image" class="primary-image">
                            </a>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
            <div class="col-md-6">
                <div class="modal-box product-summary">
                    <h3 class="product-title mb--15">{{ $product->title }}</h3>
                    <span class="product-price-wrapper mb--20">
                        <span class="money">TK {{$product->discounted_price}}</span>
                        @if($product->discount > 0)
                            <span class="product-price-old">
                                <span class="money">TK {{$product->price }}</span>
                            </span>
                        @endif
                    </span>
                    <p class="product-short-description mb--25 mb-md--20">
                        {{ $product->sort_desc }}
                    </p>
                    <div class="product-action d-flex flex-row align-items-center mb--30 mb-md--20">
                        
                        <form action="{{ route('cart.add', $product->id) }}" method="post" class="form--action mb--30 mb-sm--20">
                            @csrf
                            <div class="product-action flex-row align-items-center">
                                <div class="quantity">
                                    <input type="number" class="quantity-input" name="quantity" id="qty" value="1" min="1">
                                </div>
                                <button type="submit" class="btn btn-style-1 btn-large add-to-cart">
                                    Add To Cart
                                </button>
                            </div>  
                        </form>
                    </div>  
                    <div class="product-extra mb--30 mb-md--20">
                        <a href="#" class="font-size-12"><i class="fa fa-map-marker"></i>Find store near you</a>
                        <a href="#" class="font-size-12"><i class="fa fa-exchange"></i>Delivery and return</a>
                    </div>
                    <div class="product-summary-footer d-flex justify-content-between flex-sm-row flex-column flex-sm-row flex-column">
                        <div class="product-meta">
                            <span class="posted_in font-size-12">Categories: 
                                <a href="{{ route('collections.product', $product->category->id) }}">{{ $product->category->name }}</a>
                            </span>
                            <span class="posted_in font-size-12">Brands: 
                                <a href="{{ route('brands.product', $product->brand->id) }}">{{ $product->brand->name }}</a>
                            </span>
                        </div>
                        <div class="product-share-box">
                            <span class="font-size-12">Share With</span>
                            <!-- Social Icons Start Here -->
                            <ul class="social social-small">
                                <li class="social__item">
                                    <a href="facebook.com" class="social__link">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="twitter.com" class="social__link">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="plus.google.com" class="social__link">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="plus.google.com" class="social__link">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- Social Icons End Here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal End -->
