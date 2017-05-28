@extends('store.template')

@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h3><i class="fa fa-shopping-cart"></i>Shopping cart</h3>
		</div>
		<div class="table-cart">
			@if(count($cart))
				<p>
					<a href=" {{ route('cart-trash') }} " class="btn btn-danger">
						Clear chart <i class="fa fa-trash"></i>
					</a>
				</p>		
					<div class="table-responsive">
						<table class="table table-striped table-hover ">
							<thead>
								<tr>
									<th>Image</th>
									<th>Product</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Subtotal</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($cart as $item)
									<tr>
										<td><img src=" {{ $item->image }} "></td>
										<td>{{ $item->name }}</td>
										<td>{{ number_format($item->price,2) }}</td>
										<td>
											<input 
												type	=	"number"
												min		=	"1" 
												max		=	"100" 
												value	=	"{{$item->quantity}}" 
												id      =	"product_{{$item->id}}" 
											>

											<a 
												href		=	"#" 
												class		=	"btn btn-warning btn-update-item"
												data-href	=	"{{ route('cart-update', $item->slug) }}"
												data-id		=	"{{ $item->id }}"
											>
												<i class="fa fa-refresh"></i>
											</a>

										</td>
										<td>{{ number_format($item->price * $item->quantity,2) }}</td>
										<td>
											<a href=" {{ route('cart-delete', $item->slug) }} " class="btn btn-danger">
												<i class="fa fa-remove"></i>
											</a>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table><hr>						
						<h3>
							<span class="label label-success">
								Total: ${{ number_format($total,2) }}
							</span>
						</h3>
					</div>
			@else
				<h4> <span class="label label-default"> No more products into the cart </span></h4>
			@endif
			<hr>
			<p>
				<a href=" {{ route('home') }} " class="btn btn-primary">
					<i class="fa fa-chevron-circle-left"></i> Keep buying
				</a>
				<a href=" {{ route('order-detail') }} " class="btn btn-primary">
					Continue <i class="fa fa-chevron-circle-right"></i>
				</a>				
			</p>
		</div>
	</div>	<br><br><br>
@stop