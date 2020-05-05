@extends('admins.master')

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-8 mt-3">
			<div class="card card-primary">
				<div class="card-header">
					Create New Tag
				</div>
				<form role="form" action="{{ route('tags.store') }}" method="post" enctype="multipart/form-data">
					@csrf
	                <div class="card-body">
	                	@include('errors')
						<div class="form-group">
							<label for="name">Tag Name: *</label>
							<input type="text" value="{{ old('name') }}" class="form-control" id="name" name="name" placeholder="Tag name" required="" placeholder="Tag name">
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