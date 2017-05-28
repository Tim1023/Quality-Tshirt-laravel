@extends('store.template')
@section('content')
<div class="container-fluid text-center">
	<div class="">
	  <h4> <i class="fa shopping-cart"></i>Product Details</h4>
	</div>
	<div class="container-fluid">
		<div class="col-md-6">
			<div class="product-block">
				<img src=" {{ $product->image }}" >
			</div>			
		</div>
		<div class="col-md-6">
			<div class="product-block">
				<h4> {{ $product->name }} </h4> <br>
				<div class="product-info panel">
					<p> {{ $product->description }} </p>	
					<h3> <span class="btn btn-primary">Price: ${{ number_format($product->price,2) }}</span></h3>
					<p>
						<a class="btn btn-success btn-block" href=" {{ route('cart-add', $product->slug) }} ">
							 Add to cart <i class="fa fa-cart-plus fa-2x"></i>
						</a> 
					</p>
				</div>		
			</div>			
		</div>
	</div><hr>		
	<p><a class="btn btn-primary" href=" {{ route('home') }} "> 
		<i class="fa fa-chevron-circle-left"></i>  Back </a>
	</p>
	</div>

@stop	