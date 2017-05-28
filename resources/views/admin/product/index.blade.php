@extends('admin.template')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h2>
                <i class="fa fa-shopping-cart"></i>
                PRODUCTS <a href=" {{ route('admin.product.create') }} " class="btn btn-success"> Add    <i class="fa fa-plus-circle">Product</i></a>
            </h2>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>Edit</th>
                    <th>Remove</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Supplier</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Visible</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>
                            <a href=" {{ route('admin.product.edit', $product->slug) }} " class="btn btn-primary">
                                <i class="fa fa-pencil-square-o"></i>
                            </a>
                        </td>
                        <td>
                            {!! Form::open(['route' => ['admin.product.destroy', $product->slug ]]) !!}
                            <input type="hidden" name="_method" value="DELETE">
                            <button onClick="return confirm('Delete record?')" class="btn btn-danger">
                                <i class="fa fa-trash-o"></i>
                            </button>
                            {!! Form::close() !!}
                        </td>
                        <td><img src="{{ $product->image }}"  width="45px"></td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ $product->supplier->name }}</td>
                        <td>{{ $product->extract }}</td>
                        <td>{{ number_format($product->price,2) }}</td>
                        <td>{{ $product->visible == 1 ? "Yes" : "No" }}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <hr>

        <?php echo $products->render();?>

    </div>

@stop
