<?php

namespace App\Http\Controllers;

use Cart;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Cart::getContent();
        if ($items->count() <= 0) {
            return redirect()->route('index')->with('toast_info', 'Please add product to cart');
        } else {
            return view('frontend.carts.index', compact('items'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Product $product, Request $request)
    {
        $image = $product->images()->first();

        Cart::add(array(
            'id' => $product->id,
            'name' => $product->title,
            'price' => $product->discounted_price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $image->sm_img
            )
        ));

        return ['status' => 'success', 'message' => 'This product add into cart.'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function allInfo()
    {
        return [
            'items' => Cart::getContent(),
            'total' => Cart::getSubTotal(),
            'quantity' => Cart::getTotalQuantity(),
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function increaseCart($id)
    {
        Cart::update($id, array('quantity' => 1));
        return ['status' => 'success', 'message' => 'Cart updated'];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function decreaseCart($id)
    {
        Cart::update($id, array('quantity' => -1));
        return ['status' => 'success', 'message' => 'Cart updated'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return ['status' => 'success', 'message' => 'Item removed from cart.'];
    }
}
