@extends('admin.template')

@section('content')

    <div class="container text-center">
        <div class="page-header ">
            <h3>
                <i class="fa fa-shopping-cart">
                    Products <small>[Edit product]</small>
                </i>
            </h3>
        </div>
    </div>

    <div class="container-fluid text-center">
        <div class="col-md-offset-3 col-md-6">
            <div class="page">

                @if(count($errors) > 0)
                    @include('admin.partials.errors')
                @endif

                {!! Form::model($product, array('route' => array('admin.product.update', $product->slug))) !!}

                <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                        <label class="control-label" for="category_id">Category</label>
                        {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="supplier_id">Supplier</label>
                        {!! Form::select('supplier_id', $suppliers, null, ['class' => 'form-control']) !!}
                    </div>

                <div class="form-group">
                    <label for="name" >Name:</label>

                    {!!
                        Form::text(
                            'name',
                            null,
                            array(
                                'class' => 'form-control',
                                'placeholder' => 'Enter the name',
                                'autofocus' => 'autofocus'
                            )
                        )
                     !!}
                </div>

                <div class="form-group">
                    <label for="name" >Extract:</label>

                    {!!
                           Form::text(
                               'extract',
                               null,
                               array(
                                   'class' => 'form-control',
                                   'placeholder' => 'Enter the extract'
                               )
                           )
                    !!}
                </div>

                <div class="form-group">
                     <label for="name" >Description:</label>

                     {!!
                          Form::textarea(
                              'description',
                              null,
                              array(
                              'class' => 'form-control'
                             )
                          )
                     !!}
                </div>

                <div class="form-group">
                    <label for="price">Price:</label>
                    {!!
                        Form::text(
                            'price',
                             null,
                            array(
                               'class' => 'form-control',
                               'placeholder' => 'Enter the price'
                            )
                        )
                     !!}
                </div>

                <div class="form-group">
                    <label for="image">Image: </label>
                    {!!
                        Form::text(
                            'image',
                            null,
                            array(
                               'class' => 'form-control',
                               'placeholder' => 'Enter the img URL'
                            )
                        )
                     !!}
                </div>

                <div class="form-group">
                    <label for="visible">Visible:</label>
                    <input type="checkbox" name="visible" {{ $product->visible == 1 ? "checked = 'checked' " :'' }} >
                </div>

                <div class="form-group">
                    {!!Form::submit('Submit',array('class' => 'btn btn-primary'))!!}
                    <a href=" {{ route('admin.product.index')  }} " class="btn btn-warning">Cancelar</a>
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>

@stop