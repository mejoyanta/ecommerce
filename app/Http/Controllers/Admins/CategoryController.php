<?php

namespace App\Http\Controllers\Admins;

use Image;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
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
        return view('admins.categories.index', ['categories'=> Category::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.categories.create');
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
            //get extension
            $type = $image->extension();
            //set name
            $image_name = time() . '.' . $type;
            //set directory image_name
            $dir = 'img/categories/';
            //move file
            $img = Image::make($image);
            $img->fit(800, 600, function ($constraint) {
                $constraint->upsize();
            })->save($dir.$image_name);
            
            $image_name = $dir.$image_name;
        }else {
            $image_name = 'img/categories/categories.jpg';
        }

        Category::create([
            'name' => $request->name,
            'image' => $image_name,
            'description' => $request->description,
        ]);

        return redirect()->route('categories.index')->with('toast_success', 'New category added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admins.categories.edit', ['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request,[
            'name' => 'nullable|string|min:2|max:200',
            'image' => 'nullable|image|max:2024',
            'description' => 'nullable|string|min:15|max:255' 
        ]);

        if(isset($request->name)){
            $category->name = $request->name;
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
            $dir = 'img/categories/';
            //move file
            $img = Image::make($image);
            $img->fit(800, 600, function ($constraint) {
                $constraint->upsize();
            })->save($dir.$image_name);

            $image_name = $dir.$image_name;
            $category->image = $image_name;
        }

        if(isset($request->description)){
            $category->description = $request->description;
        }

        $category->save();
        return redirect()->route('categories.index')->with('toast_success', 'category updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('toast_success', 'category deleted.');
    }
}
