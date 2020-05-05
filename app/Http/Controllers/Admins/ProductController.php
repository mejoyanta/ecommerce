<?php

namespace App\Http\Controllers\Admins;

use Auth;
use App\Image;
use App\Brand;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image as Photo;

class ProductController extends Controller
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
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admins.products.index',['products'=>Product::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->get();
        $brands = Brand::latest()->get();
        return view('admins.products.create',compact('brands','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'required|exists:brands,id',
            'title' => 'required|string|min:4|max:200',
            'storage' => 'required|numeric',
            'price' => 'required|numeric',
            'discount' => 'required|numeric',
            'sort_desc' => 'required|string|max:200',
            'long_desc' => 'nullable|string',
            // 'image' => 'required|image',
        ]);

        // dd($request->all());
        $product = Product::create(request([
            'category_id', 'brand_id', 'title', 'storage', 'price', 'discount', 'sort_desc', 'long_desc'
        ]));

        //Image Add to a Product
        if (request()->hasFile('image')) {
            foreach ($request->image as $image) {
                //set name
                $short_image = time() . '_short.' . $image->extension();
                $long_image = time() . '_logn.' . $image->extension();
                //set directory image_name
                $dir = 'frontsite/assets/img/products';
                // dd($short_image.$long_image);
                //move file
                Photo::make($image)->resize(360,414)->save(public_path($dir .'/'. $short_image));
                Photo::make($image)->resize(1000,1300)->save(public_path($dir .'/'. $long_image));
                Image::create([
                    'product_id'=>$product->id,
                    'sm_img'=>$short_image,
                    'lg_img'=>$long_image
                ]);
            }
            // $image = $request->image;
        }

        return back()->with('toast_success', 'New product added.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::latest()->get();
        $brands = Brand::latest()->get();
        return view('admins.products.edit',compact('categories','brands','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request,[
            'category_id' => 'nullable|exists:categories,id',
            'brand_id' => 'nullable|exists:brands,id',
            'title' => 'nullable|string|min:4|max:200',
            'storage' => 'nullable|numeric',
            'price' => 'nullable|numeric',
            'discount' => 'nullable|numeric',
            'sort_desc' => 'nullable|string|max:200',
            'long_desc' => 'nullable|string',
        ]);

        if($request->category_id){
            $product->category_id = $request->category_id;
        }
        if($request->brand_id){
            $product->brand_id = $request->brand_id;
        }
        if($request->title){
            $product->title = $request->title;
        }
        if($request->storage){
            $product->storage = $request->storage;
        }
        if($request->price){
            $product->price = $request->price;
        }
        if($request->discount){
            $product->discount = $request->discount;
        }
        if($request->sort_desc){
            $product->sort_desc = $request->sort_desc;
        }
        if($request->long_desc){
            $product->long_desc = $request->long_desc;
        }
        $product->save();
        return redirect()->route('products.index')->with('toast_success', 'Product updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        foreach ($product->images as $image) {
            $image->delete();
        }
        $product->delete();
        return back()->with('toast_success', 'Product deleted.');
    }
}
