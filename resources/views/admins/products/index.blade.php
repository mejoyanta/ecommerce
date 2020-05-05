@extends('admins.master')

@section('content')
<div class="row">
	<div class="col-12 mt-3">
		 <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                Products
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="datatable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL/NO</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Category</th>
                  <th>Brand</th>
                  {{-- <th>Short Description</th> --}}
                  <th>Storage</th>
                  <th>Price(TK)</th>
                  <th>Discount(%)</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($products as $product)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td style="white-space: nowrap;">{{ $product->title }}</td>
                      <td>
                        <img src="{{ $product->images->count()> 0 ? '/frontsite/assets/img/products/'.$product->images()->first()->sm_img:'/' }}" alt="{{ $product->title }}" style="width:50px;height: 50px;">
                      </td>
                      <td>{{ $product->category->name }}</td>
                      <td>{{ $product->brand->name }}</td>
                      {{-- <td>{{ $product->sort_desc }}</td> --}}
                      <td>{{ $product->storage }}</td>
                      <td>{{ $product->price }}</td>
                      <td>{{ $product->discount }}%</td>
                      <td style="white-space: nowrap;">
                        <a class="btn btn-info" title="Edit" href="{{ route('products.edit', $product->id) }}">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a class="btn btn-danger" title="Delete" href="{{ route('products.destroy', $product->id) }}" 
                          onclick="event.preventDefault();document.getElementById('delete_{{$product->id}}').submit();">
                          <i class="fas fa-trash"></i>
                        </a>
                        <form class="d-none" method="post" action="{{ route('products.destroy', $product->id) }}" id="delete_{{$product->id}}">
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