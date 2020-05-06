<!-- Modal -->
<div class="modal fade" id="order_{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-center" id="exampleModalLabel">Orders Details</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="text-left">
      		{{-- @foreach($order->bliling) --}}
	      	<div class="row mb-2">
	      		<div class="col">Name: </div>
	      		<div class="col">{{ $order->billing->name }}</div>
	      	</div>
	      	<div class="row mb-2">
	      		<div class="col">Full Address: </div>
	      		<div class="col">{{ $order->billing->address }}</div>
	      	</div>

	      	<div class="row mb-2">
	      		<div class="col">Phone: </div>
	      		<div class="col">{{ $order->billing->phone }}</div>
	      	</div>
	      	<div class="row mb-2">
	      		<div class="col">Email: </div>
	      		<div class="col">{{ $order->billing->email }}</div>
	      	</div>
	      	<hr>
      	</div>
      	<h3 class="text-left">Orters Item</h3>
      	<div class="table-content table-responsive">
	      	<table class="table text-center">
	      		<thead>
	                <tr>
	                    <th>SL/NO</th>
	                    <th>OrderID</th>
	                    <th>Title</th>
	                    <th>Price</th>
	                    <th>Quantity</th>
	                    <th>Total</th>
	                </tr>
	            </thead>
	            <tbody>
	            	@foreach($order->details as $item)
	            	<tr>
	            		<td>{{ $loop->iteration }}</td>
	            		<td>{{ $order->id }}</td>
	            		<td>{{ $item->product->title }}</td>
	            		<td>{{ $item->product->price }}</td>
	            		<td>{{ $item->quantity }}</td>
	            		<td>{{ $item->total }}</td>
	            	</tr>
	            	@endforeach
	            </tbody>
	      	</table>
      	</div>
      </div>
    </div>
  </div>
</div>