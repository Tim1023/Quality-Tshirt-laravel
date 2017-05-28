@extends('admin.template')

    @section('content')

        <div class="container text-center">
            <div class="page-header ">
                <h3>
                    <i class="fa fa-shopping-cart">
                        Suppliers <small>[Add supplier]</small>
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

                    {!! Form::open(['route' => 'admin.supplier.store']) !!}

                        <div class="form-group">
                            <label for="name" >Name:</label>

                            {!!
                                Form::text(
                                    'name',
                                    null,
                                    array(
                                        'class' => 'form-control',
                                        'required'    => 'required',
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
                                            'required'    => 'required',
                                            'class' => 'form-control'
                                        )
                                    )
                             !!}
                        </div>

                        <div class="form-group">
                            <label for="modelo"> Modelo </label>
                            <input type="text" name="modelo" class="form-control">
                        </div>

                        <div class="form-group">
                            {!!Form::submit('Save',array('class' => 'btn btn-primary'))!!}
                            <a href=" {{ route('admin.supplier.index')  }} " class="btn btn-warning">Cancel</a>
                        </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>

@stop