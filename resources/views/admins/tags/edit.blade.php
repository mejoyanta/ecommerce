@extends('admins.master')

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-8 mt-3">
			<div class="card card-primary">
				<div class="card-header">
					Update Tag: {{ $tag->name }}
				</div>
				<form role="form" action="{{ route('tags.update', $tag->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')
	                <div class="card-body">
	                	@include('errors')
						<div class="form-group">
							<label for="name">Tag Name: *</label>
							<input value="{{ old('name') ? old('name') : $tag->name }}" type="text" class="form-control" id="name" name="name" placeholder="Tag name...">
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