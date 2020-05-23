<aside class="mini-cart" id="miniCart">
    <div class="mini-cart-wrapper">
        <a href="" class="btn-close"><i class="dl-icon-close"></i></a>
        <div class="mini-cart-inner">
            <h5 class="mini-cart__heading mb--40 mb-lg--30">Shopping Cart</h5>
            <div v-if="cart.quantity > 0" class="mini-cart__content">
                <ul class="mini-cart__list" style="margin-right:0">
                    <li v-for="(item,index) in cart.items" :key="index" class="mini-cart__product">
                        <a style="right: -35px !important;" class="remove-from-cart remove"
                            @click.prevent="removeItemFromCart(item)">
                            <i class="dl-icon-close"></i>
                        </a>
                        <div class="mini-cart__product__image">
                            <img :src="item.attributes.image|imgSrcUrl" :alt="item.name">
                        </div>
                        <div class="mini-cart__product__content">
                            <a :href="item|productUrl" class="mini-cart__product__title">@{{ item.name }}</a>
                            <span class="mini-cart__product__quantity">
                                @{{item.quantity}} x TK @{{item.price}}
                            </span>
                        </div>
                    </li>
                </ul>

                <div class="mini-cart__total">
                    <span>Total</span>
                    <span class="ammount">
                        TK @{{ cart.total}}
                    </span>
                </div>
                <div class="mini-cart__buttons">
                    <a href="{{ route('cart.index') }}" class="btn btn-fullwidth btn-style-1">View Cart</a>
                    <a href="{{ route('checkout.index') }}" class="btn btn-fullwidth btn-style-1">Checkout</a>
                </div>
            </div>
            <div v-else class="mini-cart__product__content">
                <p class="mini-cart__product__title">Cart is Empty!</p>
            </div>
        </div>
    </div>
</aside>