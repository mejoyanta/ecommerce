<!-- Modal -->
<div class="modal fade" id="order_{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Orders Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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