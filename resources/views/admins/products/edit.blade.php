@extends('admins.master')

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-8 mt-3">
			<div class="card card-primary">
				<div class="card-header">
					Update Product: {{ $product->title }}
				</div>
				<form role="form" action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')
	                <div class="card-body">
	                	@include('errors')
						<div class="form-group">
	                        <label for="category">Category *</label>
	                        <select name="category_id" id="category" class="form-control" required="">
	                            <option>Select Category</option>
	                            @foreach ($categories as $category)
		                            <option value="{{ $category->id }}" {{$category->id == $product->category->id ? 'selected': ''}}>
		                            	{{ $category->name }}
		                            </option>
	                            @endforeach
	                        </select>
	                    </div>
						<div class="form-group">
	                        <label for="brand">Brand *</label>
	                        <select name="brand_id" id="brand" class="form-control" required="">
	                            <option>Select Brand</option>
	                            @foreach ($brands as $brand)
	                            <option value="{{ $brand->id }}" {{$brand->id == $product->brand->id ? 'selected': ''}}>
	                            	{{ $brand->name }}
	                            </option>
	                            @endforeach
	                        </select>
	                    </div>
						<div class="form-group">
	                        <label for="title">Product Title</label>
	                        <input name="title" value="{{ old('title') ? old('title') : $product->title }}" type="text" class="form-control" id="title"
	                            placeholder="Product title" required="">
	                    </div>
	                    <div class="form-group">
	                        <label for="price">Price</label>
	                        <input name="price" value="{{ old('price') ? old('price') : $product->price }}" type="number" class="form-control" id="price"
	                            placeholder="Price" required="">
	                    </div>
	                    
	                    <div class="form-group">
	                        <label for="storage">Storage</label>
	                        <input name="storage" value="{{ old('storage') ? old('storage') : $product->storage }}" type="number" class="form-control"
	                            id="storage" placeholder="2" required="">
	                    </div>
	                    <div class="form-group">
	                        <label for="discount">Discount (%)</label>
	                        <input name="discount" value="{{ old('discount') ? old('discount') : $product->discount }}" type="number" class="form-control"
	                            id="discount" placeholder="2">
	                    </div>
	                    <div class="form-group">
	                        <label for="description">Short Description</label>
	                        <textarea required="" name="sort_desc" id="description" class="form-control">{{ old('sort_desc') ? old('sort_desc') : $product->sort_desc }}</textarea>
	                    </div>

	                    <div class="form-group">
	                        <label for="long_description">Long Description</label>
	                        <textarea required="" name="long_desc" id="long_description" class="form-control">{{ old('long_desc') ? old('long_desc') : $product->long_desc }}</textarea>
	                    </div>
	                </div>


	                <div class="card-footer">
	                  	<button type="submit" class="btn btn-primary">Update</button>
	                </div>
              </form>
			</div>
		</div>
	</div>
@endsection