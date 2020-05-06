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
            @if($items->count()>0)
                <form action="{{ route('checkout.store') }}" class="form form--checkout" method="post">
                    @csrf
                    <div class="row pb--80 pb-md--60 pb-sm--40 pt--80 pt-md--60 pt-sm--40">
                        <!-- Checkout Area Start -->  
                        <div class="col-lg-6">
                            <div class="checkout-title mt--10">
                                <h2>Billing Details</h2>
                            </div>
                            <div class="checkout-form">
                                <div class="form-row mb--30">
                                    <div class="form__group col-md-6 mb-sm--30">
                                        <label for="billing_fname" class="form__label form__label--2">First Name  <span class="required">*</span></label>
                                        <input type="text" value="{{old('fname')}}" name="fname" id="billing_fname" class="form__input form__input--2">
                                    </div>
                                    <div class="form__group col-md-6">
                                        <label for="billing_lname" class="form__label form__label--2">Last Name  <span class="required">*</span></label>
                                        <input type="text" value="{{old('lname')}}" name="lname" id="billing_lname" class="form__input form__input--2">
                                    </div>
                                </div>
                                <div class="form-row mb--30">
                                    <div class="form__group col-12">
                                        <label for="billing_company" class="form__label form__label--2">Company Name (Optional)</label>
                                        <input type="text" value="{{old('company')}}" name="company" id="billing_company" class="form__input form__input--2">
                                    </div>
                                </div>
                                <div class="form-row mb--30">
                                    <div class="form__group col-12">
                                        <label for="billing_streetAddress" class="form__label form__label--2">Street Address <span class="required">*</span></label>

                                        <input type="text" value="{{old('street_address')}}" name="street_address" id="billing_streetAddress" class="form__input form__input--2" placeholder="House number and street name">
                                    </div>
                                </div>
                                <div class="form-row mb--30">
                                    <div class="form__group col-12">
                                        <label for="billing_city" class="form__label form__label--2">Town / City <span class="required">*</span></label>
                                        <input type="text" value="{{old('town')}}" name="town" id="billing_city" class="form__input form__input--2">
                                    </div>
                                </div>
                                <div class="form-row mb--30">
                                    <div class="form__group col-12">
                                        <label for="billing_state" class="form__label form__label--2">State / County <span class="required">*</span></label>
                                        <input type="text" value="{{old('state')}}" name="state" id="billing_state" class="form__input form__input--2">
                                    </div>
                                </div>
                                <div class="form-row mb--30">
                                    <div class="form__group col-12">
                                        <label for="billing_phone" class="form__label form__label--2">Phone <span class="required">*</span></label>
                                        <input type="text" value="{{old('phone')}}" name="phone" id="billing_phone" class="form__input form__input--2">
                                    </div>
                                </div>
                                <div class="form-row mb--30">
                                    <div class="form__group col-12">
                                        <label for="billing_email" class="form__label form__label--2">Email Address  <span class="required">*</span></label>
                                        <input type="email" value="{{old('email')}}" name="email" id="billing_email" class="form__input form__input--2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 offset-xl-1 col-lg-6 mt-md--40">
                            <div class="order-details">
                                <div class="checkout-title mt--10">
                                    <h2>Your Order</h2>
                                </div>
                                <div class="table-content table-responsive mb--30">
                                    <table class="table order-table order-table-2">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th class="text-right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($items as $item)
                                            <tr>
                                                <th>
                                                    {{ $item->name }} 
                                                    <strong><span>✕</span>{{ $item->quantity }}</strong>
                                                </th>
                                                <td class="text-right">TK {{ $item->getPriceSum() }}</td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                        <tfoot>
                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <td class="text-right">
                                                    <span class="order-total-ammount">
                                                        TK {{ Cart::getTotal() }}
                                                    </span>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="checkout-payment">
                                    <div class="payment-group mb--10">
                                        <div class="payment-radio">
                                            <input type="radio" value="cash" name="payment-method" id="cash" checked="">
                                            <label class="payment-label" for="cash">
                                                CASH ON DELIVERY
                                            </label>
                                        </div>
                                        <div class="payment-info cash hide-in-default" data-method="cash">
                                            <p>Pay with cash upon delivery.</p>
                                        </div>
                                    </div>
                                    <div class="payment-group mt--20">
                                        <p class="mb--15">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                                        <button type="submit" class="btn btn-fullwidth btn-style-1">Place Order</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- Checkout Area End -->
                    </div>
                </form>
            @else
            <div class="row pb--80 pb-md--60 pb-sm--40 pt--80 pt-md--60 pt-sm--40">
                <div class="col-12">
                    <!-- User Action Start -->
                    <div class="user-actions user-actions__coupon">
                        <div class="mb--30 mb-sm--20">
                            <p class="d-block text-center alert alert-danger"><i class="fa fa-exclamation-circle"></i> Cart empty! </p>
                        </div>
                    </div>
                    <!-- User Action End -->
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection