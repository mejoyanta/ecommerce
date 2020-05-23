@extends('frontend.layouts.app')

@section('content')
<div class="breadcrumb-area bg--white-6 breadcrumb-bg-1 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Cart</h1>
                <ul class="breadcrumb justify-content-center">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li class="current"><span>Cart</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="content" class="main-content-wrapper">
    <div class="page-content-inner">
        <div class="container">
            <div class="row pt--80 pb--80 pt-md--45 pt-sm--25 pb-md--60 pb-sm--40">
                <div class="col-lg-8 mb-md--30">
                    <form class="cart-form" action="#">
                        <div class="row no-gutters">
                            <div class="col-12">
                                <div class="table-content table-responsive">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th>&nbsp;</th>
                                                <th>Image</th>
                                                <th class="text-left">Product</th>
                                                <th>price</th>
                                                <th>quantity</th>
                                                <th>total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="(item,index) in cart.items" :key="index">
                                                <td class="product-remove text-left">
                                                    <a class="remove-from-cart remove"
                                                        @click.prevent="removeItemFromCart(item)">
                                                        <i class="dl-icon-close"></i>
                                                    </a>
                                                </td>
                                                <td class="product-thumbnail text-left">
                                                    <img style="width:70px;" :src="item.attributes.image|imgSrcUrl"
                                                        :alt="item.name">
                                                </td>
                                                <td class="product-name text-left wide-column">
                                                    <h3>
                                                        <a :href="item|productUrl">
                                                            @{{ item.name }}
                                                        </a>
                                                    </h3>
                                                </td>
                                                <td class="product-price">
                                                    <span class="product-price-wrapper">
                                                        <span class="money">TK @{{item.price}}</span>
                                                    </span>
                                                </td>
                                                <td class="product-quantity">
                                                    <div class="quantity-section-styles">
                                                        <button @click.prevent="decriseCart(item)"
                                                            class="quantity-button-styles">-</button>
                                                        <output>@{{item.quantity}}</output>
                                                        <button @click.prevent="increaseCart(item)"
                                                            class="quantity-button-styles">+</button>
                                                    </div>
                                                </td>
                                                <td class="product-total-price">
                                                    <span class="product-price-wrapper">
                                                        <span class="money">
                                                            <strong>
                                                                TK @{{ item.price * item.quantity }}
                                                            </strong>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="cart-collaterals">
                        <div class="cart-totals">
                            <h5 class="mb--15">Cart totals</h5>
                            <div class="table-content table-responsive">
                                <table class="table order-table">
                                    <tbody>
                                        <tr>
                                            <th>Subtotal</th>
                                            <td>TK @{{ cart.total }}</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping</th>
                                            <td>TK 0</td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td>
                                                <span class="product-price-wrapper">
                                                    <span class="money">TK @{{ cart.total }}</span>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <a href="{{ route('checkout.index') }}" class="btn btn-fullwidth btn-style-1">
                            Proceed To Checkout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection