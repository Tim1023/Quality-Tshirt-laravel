@extends('admin.template')

@section('content')

    <div class="container text-center">
        <div class="page-header ">
            <h3>
                <i class="fa fa-shopping-cart">
                    Suppliers <small>[Edit supplier]</small>
                </i>
            </h3>
        </div>
    </div>

    <div class="container-fluid">
        <div class="col-md-offset-3 col-md-6">
            <div class="page">

                @if(count($errors) > 0)
                    @include('admin.partials.errors')
                @endif

                {!! Form::model($supplier, array('route' => array('admin.supplier.update', $supplier))) !!}

                    <input type="hidden" name="_method" value="PUT">

                <div class="form-group">
                    <label for="name" >Name:</label>

                    {!!
                        Form::text(
                            'name',
                            null,
                            array(
                                'class' => 'form-control',
                                'placeholder' => 'Add the name of the supplier',
                                'autofocus' => 'autofocus'
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
                    <label for="modelo"> Modelo </label>
                    <input type="text" name="modelo" class="form-control"
                    value=" {{ isset($supplier->modelo) ? $supplier->modelo: null}} ">
                </div>

                <div class="form-group">
                    {!!Form::submit('Submit',array('class' => 'btn btn-primary'))!!}
                    <a href=" {{ route('admin.supplier.index')  }} " class="btn btn-warning">Cancel</a>
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>

@stop