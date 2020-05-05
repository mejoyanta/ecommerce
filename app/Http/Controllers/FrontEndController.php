<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
    	$products = Product::latest()->take(12)->get();
	    return view('frontend.index',['products'=>$products ]);
    }

    public function productById(Product $product)
    {
    	return view('frontend.products.details', compact('product'));
    }

    public function collections()
    {
        return view('frontend.products.collections',['datas' => Category::latest()->take(12)->get(),'meta'=>'collections']);
    }
    public function brands()
    {
        return view('frontend.products.collections',['datas' => Brand::latest()->take(12)->get(),'meta'=>'brands']);
    }

    public function shop()
    {
        $products = Product::latest()->take(30)->paginate(30);

        return view('frontend.products.shop',['products'=> $products]);
    }

    public function brandWiseProduct($id)
    {
        $products = Brand::find($id)->products()->latest()->paginate(20);
        return view('frontend.products.shop',compact('products'));
    }

    public function categoryWiseProduct($id)
    {
        $products = Category::find($id)->products()->latest()->paginate(20);
        return view('frontend.products.shop',compact('products'));
    }
}
