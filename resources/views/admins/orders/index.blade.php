@extends('admins.master')

@section('content')
<div class="row">
	<div class="col-12 mt-3">
		 <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                {{ $meta }} Orders
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="datatable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL/NO</th>
                  <th>OrderID</th>
                  <th>Buyer</th>
                  <th>Total(TK)</th>
                  <th>Status</th>
                  <th style="white-space: nowrap;">Order Date</th>
                  <th style="text-align: center;">Action</th>
                </tr>
                </thead>
                <tbody>
                  @forelse($orders as $order)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td style="white-space: nowrap;">{{ $order->id }}</td>
                      <td>{{ $order->user->name }}</td>
                      <td>{{ $order->total }}</td>
                      <td>
                        {{ $order->status }}
                      </td>
                      <td>
                        {{ $order->date }}
                      </td>
                      <td style="white-space: nowrap;text-align: center;">
                        @if($order->status == 'pending')
                          <a class="btn btn-success" title="Make order to deliver" href="{{ route('orders.makedelivered', $order->id) }}" 
                            onclick="event.preventDefault();document.getElementById('deliver_{{$order->id}}').submit();">
                            <i class="fas fa-check-circle"></i>
                            Deliver
                          </a>
                          <form class="d-none" method="post" action="{{ route('orders.makedelivered', $order->id) }}" id="deliver_{{$order->id}}">
                            @csrf
                            @method('PUT')
                          </form>
                        @endif

                      <!-- Button trigger modal -->
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#order_{{$order->id}}">
                          View
                        </button>

                        <!-- Modal Start -->
                        @include('admins.inc.modal')

                      </td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="6">
                        <h2 class="alert alert-danger">No {{$meta}} Orders!</h2>
                      </td>
                    </tr>
                  @endforelse
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