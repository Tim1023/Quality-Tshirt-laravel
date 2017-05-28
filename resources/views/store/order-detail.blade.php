@extends('store.template')
@section('content')
	<div class="container text-center">
		<h3> <i class="fa fa-shopping-cart">  </i> Order Detail</h3>
		
		<div class="page">
			<div class="table-responsive">
				<h4>User</h4>
				<table class="table table-striped table-hover">
					<tr><td>Name:</td><td>{{ Auth::user()->name . " " . Auth::user()->last_name }}</td></tr>
					<tr><td>User:</td><td>{{ Auth::user()->user }}</td></tr>
					<tr><td>Email:</td><td>{{ Auth::user()->email }}</td></tr>
					<tr><td>State:</td><td>{{ Auth::user()->state }}</td></tr>
					<tr><td>City:</td><td>{{ Auth::user()->city }}</td></tr>
					<tr><td>Postal Code:</td><td>{{ Auth::user()->cp }}</td></tr>
					<tr><td>Address:</td><td>{{ Auth::user()->address }}</td></tr>
				</table>		
			</div>
			<div class="table-responsive">
				<h4>Order</h4>
				<table class="table table-striped table-hover table-bordered">
					<tr>
						<th>Product</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Subtotal</th>
						<th>GST</th>
						<th>Grandtotal</th>

					</tr>
					@foreach($cart as $item)
						<tr>
							<td>{{ $item->name }}</td>
							<td>${{ number_format($item->price,2) }}</td>
							<td>{{ $item->quantity }}</td>
							<td>${{ number_format($item->price * $item->quantity,2) }}</td>
							<td>${{ number_format($item->price * $item->quantity*0.15,2) }}</td>
							<td>${{ number_format($item->price * $item->quantity*1.15,2) }}</td>

						</tr>
					@endforeach
				</table><hr>		
				<h4>
					<span class="label label-success">
						Total: ${{ number_format($item->price * $item->quantity*1.15,2) }}
					</span>
				</h4><hr>						
				<p>
					<a href="{{ route('cart-show') }}" class="btn btn-primary">
						<i class="fa fa-chevron-circle-left"></i> Back
					</a>
					<a href=" {{ route('payment') }} " class="btn btn-warning">
						Pay <i class="fa fa-cc-paypal fa-2x"></i>
					</a>						
				</p>				
			</div>

		</div>			
	</div>

@stop