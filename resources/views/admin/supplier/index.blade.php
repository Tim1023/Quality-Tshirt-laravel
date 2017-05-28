@extends('admin.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h2>
				<i class="fa fa-shopping-cart"></i>
				SUPPLIERS <a href=" {{ route('admin.supplier.create') }} " class="btn btn-success"> Add supplier
					<i class="fa fa-plus-circle"></i></a>
			</h2>
		</div>

		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>Edit</th>
						<th>Remove</th>
						<th>Name</th>
						<th>Description</th>
						<th>Modelo</th>
					</tr>
				</thead>
				<tbody>
					@foreach($suppliers as $supplier)
						<tr>
							<td>
								<a href=" {{ route('admin.supplier.edit', $supplier) }} " class="btn btn-primary">
									<i class="fa fa-pencil-square fa-2x"></i>
								</a>
							</td>
							<td>
								{!! Form::open(['route' => ['admin.supplier.destroy', $supplier]]) !!}
									<input type="hidden" name="_method" value="DELETE">
									<button onClick="return confirm('Delete record?')" class="btn btn-danger">
										<i class="fa fa-trash fa-2x"></i>
									</button>
								{!! Form::close() !!}
							</td>
							<td>{{ $supplier->name }}</td>
							<td>{{ $supplier->description }}</td>
							<td>{{ $supplier->modelo }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>

	</div>

@stop




