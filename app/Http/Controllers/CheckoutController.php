<?php

namespace App\Http\Controllers;

use Auth; 
use Cart;
use App\Order;
use App\Billing;
use App\OrderProcess;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Cart::getContent();
        if( $items->count() <= 0 ){
            return back()->with('toast_error', 'Please add product to cart');
        } else {
            return view('frontend.carts.checkout',compact('items'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'fname' => 'required|string',
            'lname' => 'required|string',
            'company' => 'nullable|string',
            // 'country' => 'required|string',
            'street_address' => 'required|string',
            'town' => 'required|string',
            'state' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
        ]);

        $ba = Billing::create([
            'fname' => request()->fname,
            'lname' => request()->lname,
            'company' => request()->company,
            'country' => 'Bangladesh',
            'street_address' => request()->street_address,
            'town' => request()->town,
            'state' => request()->state,
            'phone' => request()->phone,
            'email' => request()->email,
            'user_id' => Auth::id()
        ]);
        $order = Order::create([
            'user_id' => Auth::id(),
            'billing_id' => $ba->id,
            'total' => Cart::getTotal(),
            'status' => 'pending',
        ]);
        foreach (Cart::getContent() as $row) {
            OrderProcess::create([
                'order_id' => $order->id,
                'product_id' => $row->id,
                'quantity' => $row->quantity,
                'price' => $row->price,
                'total' => $row->getPriceSum(),
            ]);
        }
// return $order;

        Cart::clear();

        return redirect()->route('dashboard')->with('toast_success', 'Your order confirmed.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
