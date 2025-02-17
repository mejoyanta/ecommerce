<?php

namespace App\Http\Controllers\Admins;

use Image;
use App\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
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
        return view('admins.brands.index', ['brands'=> Brand::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.brands.create');
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
            'name' => 'required|string|min:2|max:200',
            'image' => 'required|image|max:2024',
            'description' => 'nullable|string|min:15|max:255' 
        ]);
        // dd($request->all());

        // image create
        if (request()->hasFile('image')) {
            //get file
            $image = $request->image;
            // dd($image);
            //get extension
            $type = $image->extension();
            //set name
            $image_name = time() . '.' . $type;
            //set directory image_name
            $dir = 'img/brands/';
            //move file
            // $image->move($dir, $image_name);
            $img = Image::make($image);
            //->crop(300,300)->save($dir.$image_name);

            $img->fit(800, 600, function ($constraint) {
                $constraint->upsize();
            })->save($dir.$image_name);

            
            $image_name = $dir.$image_name;
        }else {
            $image_name = 'img/brands/brands.jpg';
        }

        Brand::create([
            'name' => $request->name,
            'image' => $image_name,
            'description' => $request->description,
        ]);

        return redirect()->route('brands.index')->with('toast_success', 'New brand added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('admins.brands.edit', ['brand'=>$brand]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $this->validate($request,[
            'name' => 'nullable|string|min:2|max:200',
            'image' => 'nullable|image|max:2024',
            'description' => 'nullable|string|min:15|max:255' 
        ]);

        if(isset($request->name)){
        	// return $request->name;
            $brand->name = $request->name;
        }

        // image create
        if (request()->hasFile('image')) {
            //get file
            $image = $request->image;
            //get extension
            $type = $image->extension();
            //set name
            $image_name = time() . '.' . $type;
            //set directory image_name
            $dir = 'img/brands/';
            // $image->move($dir, $image_name);
            $img = Image::make($image);
            //->crop(300,300)->save($dir.$image_name);

            $img->fit(800, 600, function ($constraint) {
                $constraint->upsize();
            })->save($dir.$image_name);


            $image_name = $dir.$image_name;
            $brand->image = $image_name;
        }

        if(isset($request->description)){
            $brand->description = $request->description;
        }
        // dd($brand->isDirty());

        if($brand->isDirty()){
	        $brand->save();
	        return redirect()->route('brands.index')->with('toast_success', 'Brand updated.');

        }else{
	        return redirect()->route('brands.index')->with('toast_info', 'You haven\'t made any changes.');

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return back()->with('toast_success', 'Brand deleted.');
    }
}
