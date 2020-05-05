@extends('admins.master')

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-8 mt-3">
			<div class="card card-primary">
				<div class="card-header">
					Create New Product
				</div>
				<form role="form" action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
					@csrf
	                <div class="card-body">
	                	@include('errors')
						<div class="form-group">
	                        <label for="category">Category *</label>
	                        <select name="category_id" id="category" class="form-control" required="">
	                            <option>Select Category</option>
	                            @foreach ($categories as $category)
	                            <option value="{{ $category->id }}">{{ $category->name }}</option>
	                            @endforeach
	                        </select>
	                    </div>
						<div class="form-group">
	                        <label for="brand">Brand *</label>
	                        <select name="brand_id" id="brand" class="form-control" required="">
	                            <option>Select Brand</option>
	                            @foreach ($brands as $brand)
	                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
	                            @endforeach
	                        </select>
	                    </div>
						<div class="form-group">
	                        <label for="title">Product Title *</label>
	                        <input name="title" value="{{ old('title') }}" type="text" class="form-control" id="title"
	                            placeholder="Product title" required="">
	                    </div>
	                    <div class="form-group">
	                        <label for="price">Price *</label>
	                        <input name="price" value="{{ old('price') }}" type="number" class="form-control" id="price"
	                            placeholder="Price" required="">
	                    </div>
	                    
	                    <div class="form-group">
	                        <label for="storage">Storage *</label>
	                        <input name="storage" value="{{ old('storage') }}" type="number" class="form-control"
	                            id="storage" placeholder="2" required="">
	                    </div>
	                    <div class="form-group">
	                        <label for="discount">Discount (%)</label>
	                        <input name="discount" value="{{ old('discount') ? old('discount') : 0 }}" type="number" class="form-control"
	                            id="discount" placeholder="2">
	                    </div>
	                    <div class="form-group">
	                        <label for="customFile">Product Image</label>

	                        <div class="custom-file">
	                            <input name="image[]" type="file" class="custom-file-input" id="customFile" multiple="" required="">
	                            <label class="custom-file-label" for="customFile">Choose file</label>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="description">Short Description *</label>
	                        <textarea required="" name="sort_desc" id="description" class="form-control">{{ old('sort_desc') }}</textarea>
	                    </div>

	                    <div class="form-group">
	                        <label for="long_description">Long Description</label>
	                        <textarea required="" name="long_desc" id="long_description" class="form-control">{{ old('long_desc') }}</textarea>
	                    </div>
	                </div>

	                <div class="card-footer">
	                  	<button type="submit" class="btn btn-primary">Create</button>
	                </div>
              </form>
			</div>
		</div>
	</div>
@endsection