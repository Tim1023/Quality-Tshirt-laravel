@extends('admin.template')

@section('content')

    <div class="container text-center">
        <div class="page-header ">
            <h3>
                <i class="fa fa-shopping-cart">
                    Products <small>[Add product]</small>
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

                {!! Form::open(['route' => 'admin.product.store']) !!}

                <div class="form-group">
                    <label class="control-label" for="category_id"> Category </label>
                    {!! Form::select('category_id', $categories, null,['class' => 'form-control']) !!}
                </div>
                    <div class="form-group">
                        <label class="control-label" for="supplier_id"> Supplier </label>
                        {!! Form::select('supplier_id', $suppliers, null,['class' => 'form-control']) !!}
                    </div>
                <div class="form-group">
                    <label for="name" >Name:</label>

                    {!!
                           Form::text(
                              'name',
                               null,
                               array(
                                   'class'       => 'form-control',
                                   'required'    => 'required',
                                   'placeholder' => 'Enter the name',
                                   'autofocus'   =>  'autofocus'
                               )
                           )
                    !!}
                </div>

                <div class="form-group">
                    <label for="extract"> Extract: </label>

                    {!!
                        Form::text(
                            'extract',
                            null,
                            array(
                               'class'       => 'form-control',
                               'required'    => 'required',
                               'placeholder' => 'Enter the extract',
                               'autofocus'   =>  'autofocus'
                            )
                        )
                     !!}

                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    {!!
                        Form::textarea(
                            'description',
                            null,
                            array(
                                'class' => 'form-control',
                                'required'    => 'required',
                                'autofocus'   =>  'autofocus'
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
                                'required'    => 'required',
                                'placeholder' => 'Enter the price',
                                'autofocus'   =>  'autofocus'
                            )
                        )
                     !!}
                </div>

                <div class="form-group">
                    <label for="image">Image:</label>
                    {!!
                        Form::text(
                            'image',
                            null,
                            array(
                                'class' => 'form-control',
                                'required'    => 'required',
                                'placeholder' => 'Enter the img URL'
                            )
                        )
                     !!}
                </div>

                <div class="form-group">
                    <label for="visible">Visible</label>
                    {!!
                        Form::checkbox(
                            'visible',
                            null,
                            array(
                                'required'    => 'required',
                                'class' =>  'form-control'
                            )
                        )
                     !!}
                </div>

                <div class="form-group">
                    {!!Form::submit('Save',array('class' => 'btn btn-primary'))!!}
                    <a href=" {{ route('admin.product.index')  }} " class="btn btn-warning">Cancel</a>
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>

@stop