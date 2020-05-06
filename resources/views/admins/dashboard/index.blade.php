@extends('admins.master')
@section('content')
	<div class="row">
		<div class="col">
			<div class="card mt-5">
				<div class="card-header">
					<h2>Welcome to Dashboard</h2>
				</div>
				<div class="card-body">
					<p>
						Hello! <strong>{{ auth()->user()->name }}</strong>
					</p>
				</div>
			</div>
		</div>
	</div>
@endsection