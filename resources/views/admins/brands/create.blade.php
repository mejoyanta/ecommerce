@extends('admins.master')

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-8 mt-3">
			<div class="card card-primary">
				<div class="card-header">
					Create New Brand
				</div>
				<form role="form" action="{{ route('brands.store') }}" method="post" enctype="multipart/form-data">
					@csrf
	                <div class="card-body">
	                	@include('errors')
						<div class="form-group">
							<label for="name">Brand Name: *</label>
							<input type="text" value="{{ old('name') }}" class="form-control" id="name" name="name" placeholder="Brand name" required="">
						</div>
						<div class="form-group">
							<label for="description">Description:</label>
							<textarea placeholder="Write about this brand..." name="description" id="description" class="form-control">{{ old('description') }}</textarea>
						</div>
						<div class="form-group">
							<label for="image">Image: *</label>
							<input type="file" class="form-control-file" name="image">
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