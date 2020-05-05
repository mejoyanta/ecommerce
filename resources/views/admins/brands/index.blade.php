@extends('admins.master')

@section('content')
<div class="row">
	<div class="col-12 mt-3">
		 <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                Brands
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="datatable" class="table table-bordered table-striped text-center">
                <thead>
                <tr>
                  <th>SL/NO</th>
                  <th>Name</th>
                  <th>Logo</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($brands as $brand)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td style="white-space: nowrap;">{{ $brand->name }}</td>
                      <td>
                        <img src="/{{ $brand->image }}" alt="{{ $brand->name }}" style="width:50px;height: 50px;">
                      </td>
                      <td>{{ $brand->description }}</td>
                      <td style="white-space: nowrap;">
                        <a class="btn btn-info" title="Edit" href="{{ route('brands.edit', $brand->id) }}">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a class="btn btn-danger" title="Delete" href="{{ route('brands.destroy', $brand->id) }}" 
                          onclick="event.preventDefault();document.getElementById('delete_{{$brand->id}}').submit();">
                          <i class="fas fa-trash"></i>
                        </a>
                        <form class="d-none" method="post" action="{{ route('brands.destroy', $brand->id) }}" id="delete_{{$brand->id}}">
                          @csrf
                          @method('DELETE')
                        </form>
                      </td>
                    </tr>
                  @endforeach
              </table>
            </div>
            <!-- /.card-body -->
          </div>
	</div>
</div>
@endsection

@section('scripts')
	<script src="{{ asset('backend/assets/plugins/datatables/jquery.dataTables.js') }}"></script>
	<script src="{{ asset('backend/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

	<script>
		  $(function () {
		    $('#datatable').DataTable({
		      "paging": true,
		      "lengthChange": true,
		      "searching": true,
		      "ordering": false,
		      "info": true,
		      "autoWidth": true,
		    });
		  });
	</script>
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ asset('backend/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection