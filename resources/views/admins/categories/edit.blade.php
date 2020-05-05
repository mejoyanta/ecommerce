@extends('admins.master')

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-8 mt-3">
			<div class="card card-primary">
				<div class="card-header">
					Update category: {{ $category->name }}
				</div>
				<form role="form" action="{{ route('categories.update', $category->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')
	                <div class="card-body">
	                	@include('errors')
						<div class="form-group">
							<label for="name">category Name: *</label>
							<input value="{{ old('name') ? old('name') : $category->name }}" type="text" class="form-control" id="name" name="name">
						</div>
						<div class="form-group">
							<label for="description">Description:</label>
							<textarea name="description" id="description" class="form-control">{{ old('description') ? old('description') : $category->description }}</textarea>
						</div>

						<div class="form-group">
							<label for="image">Image:</label>
							<input type="file" class="form-control-file" name="image">
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