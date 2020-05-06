<aside class="mini-cart" id="miniCart">
    <div class="mini-cart-wrapper">
        <a href="" class="btn-close"><i class="dl-icon-close"></i></a>
        <div class="mini-cart-inner">
            <h5 class="mini-cart__heading mb--40 mb-lg--30">Shopping Cart</h5>
            <div class="mini-cart__content">
                <ul class="mini-cart__list">
                    @forelse(\Cart::getContent() as $item)
                        <li class="mini-cart__product">
                            <a href="{{ route('cart.destroy', $item->id) }}" class="remove-from-cart remove">
                                <i class="dl-icon-close"></i>
                            </a>
                            <div class="mini-cart__product__image">
                                <img src="/frontsite/assets/img/products/{{ $item->attributes->image }}" alt="products">
                            </div>
                            <div class="mini-cart__product__content">
                                <a class="mini-cart__product__title" href="{{ route('product.details', $item->id) }}">{{ $item->name }}</a>
                                <span class="mini-cart__product__quantity">
                                    {{$item->quantity}} x TK {{$item->price}}
                                </span>
                            </div>
                        </li>
                    @empty
                    <li class="mini-cart__product">
                        <div class="mini-cart__product__content">
                            <p class="mini-cart__product__title">Cart is Empty!</p>
                        </div>
                    </li>
                    @endforelse

                </ul>
                <div class="mini-cart__total">
                    <span>Subtotal</span>
                     @if(\Cart::getContent()->count() > 0)
                        <span class="ammount">
                            TK {{ \Cart::getTotal() }}
                        </span>
                    @endif
                </div>
                <div class="mini-cart__buttons">
                    <a href="{{ route('cart.index') }}" class="btn btn-fullwidth btn-style-1">View Cart</a>
                    <a href="{{ route('checkout.index') }}" class="btn btn-fullwidth btn-style-1">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</aside>