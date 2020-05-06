<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;

class OrdersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function pendingOrders()
    {
    	$orders = Order::pending()->latest()->get();
    	$meta = 'Pending';

    	return view('admins.orders.index',compact('orders','meta'));
    }

    public function deliveredOrders()
    {
    	$orders = Order::delivered()->latest()->get();

    	$meta = 'Delivered';
    	return view('admins.orders.index',compact('orders','meta'));
    }

    public function makeOrderToDelivered($id)
    {
    	$order = Order::findOrFail($id);
    	$order->update(['status'=>'delivered']);

    	return back()->with('toast_success', 'Order Deliverd.');
    }

    
}
