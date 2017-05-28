@extends('store.template')
@section('content')
@include('store.partials.slider')

<div class="container text-center">
	<div id="products">

		@foreach($products as $product)

			<div class="product white-panel">
				<h6> {{ $product->name }} </h6>
				<img src=" {{ $product->image }} " class="img-responsive" >				

				<div class="product-info ">
					<p> {{ $product->extract }} </p>
					<p><span class="btn btn-default btn-sm">Price:${{ number_format($product->price,2)}}</span></p>
					<p>
						<a class="btn btn-primary btn-sm" href=" {{ route('cart-add', $product->slug) }} "> 
							<i class="fa fa-cart-plus"></i> Buy
						</a>
						<a class="btn btn-success btn-sm" href=" {{ route('product-detail',$product->slug) }} "> 
						<i class="fa fa-chevron-circle-right"></i> Details </a>
					</p>
				</div>
			</div>
		@endforeach
	</div>
	{!! $products->render() !!}

</div>
@stop
