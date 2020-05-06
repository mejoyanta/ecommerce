@extends('frontend.layouts.app')
@section('content')
<div class="breadcrumb-area bg--white-6 breadcrumb-bg-1 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">My Account</h1>
                <ul class="breadcrumb justify-content-center">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li class="current"><span>My Account</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="content" class="main-content-wrapper">
    <div class="page-content-inner">
        <div class="container">
            <div class="row pt--80 pt-md--60 pt-sm--40 pb--80 pb-md--60 pb-sm--40">
                <div class="col-12">
                    <div class="user-dashboard-tab flex-column flex-md-row">
                        <div class="user-dashboard-tab__head nav flex-md-column" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" data-toggle="pill" role="tab" href="#dashboard" aria-controls="dashboard" aria-selected="true">Dashboard</a>
                            <a class="nav-link" data-toggle="pill" role="tab" href="#orders" aria-controls="orders" aria-selected="true">Orders</a>
                        </div>
                        <div class="user-dashboard-tab__content tab-content">
                            <div class="tab-pane fade show active" id="dashboard">
                                <p>Hello <strong>{{auth()->user()->name}}</strong> 
                            </div>
                            <div class="tab-pane fade" id="orders">
                                <div class="message-box mb--30 d-none">
                                    <p><i class="fa fa-check-circle"></i>No order has been made yet.</p>
                                    <a href="shop-sidebar.html">Go Shop</a>
                                </div>
                                <div class="table-content table-responsive">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(auth()->user()->orders as $order)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td class="wide-column">{{ $order->date }}</td>
                                                <td>{{ $order->status }}</td>
                                                <td class="wide-column">{{ $order->total }} for {{$order->details->count() }} item</td>
                                                <td><a href="#" class="btn btn-medium btn-style-1">View</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection