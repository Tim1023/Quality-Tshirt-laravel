@extends('admin.template')
@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h3>
                <i class="fa fa-users"></i> USERS <small>[ Add user ]</small>
            </h3>
        </div>
        <div class="row">
            <div class="col-md-offset-3 col-md-6">

                <div class="page">

                    @if (count($errors) > 0)
                        @include('admin.partials.errors')
                    @endif

                    {!! Form::open(['route'=>'admin.user.store']) !!}

                    <div class="form-group">
                        <label for="name">Name:</label>
                        {!!
                            Form::text(
                                'name',
                                null,
                                array(
                                    'class'=>'form-control',
                                    'placeholder' => 'Enter the name...',
                                    'autofocus' => 'autofocus',
                                    //'required' => 'required'
                                )
                            )
                        !!}
                    </div>

                    <div class="form-group">
                        <label for="last_name">Last name:</label>
                        {!!
                            Form::text(
                                'last_name',
                                null,
                                array(
                                    'class'=>'form-control',
                                    'placeholder' => 'Enter lastname...',
                                    //'required' => 'required'
                                )
                            )
                        !!}
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        {!!
                            Form::text(
                                'email',
                                null,
                                array(
                                    'class'=>'form-control',
                                    'placeholder' => 'Enter Email...',
                                    //'required' => 'required'
                                )
                            )
                        !!}
                    </div>
                    <div class="form-group">
                        <label for="user">Username:</label>

                        {!!
                            Form::text(
                                'user',
                                null,
                                array(
                                    'class'=>'form-control',
                                    'placeholder' => 'Enter username...',
                                    //'required' => 'required'
                                )
                            )
                        !!}
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        {!!
                            Form::password(
                                'password',
                                array(
                                    'class'=>'form-control',
                                    'placeholder' => 'password'
                                    //'required' => 'required'
                                )
                            )
                        !!}
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password:</label>
                        {!!
                            Form::password(
                                'password_confirmation',
                                array(
                                    'class'=>'form-control',
                                    'placeholder' => 'Confirm the password'
                                    //'required' => 'required'
                                )
                            )
                        !!}
                    </div>

                        <div class="form-group">
                            <label for="state">State:</label>
                            {!!
                                Form::text(
                                    'state',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Enter the state'
                                        //'required' => 'required'
                                    )
                                )
                            !!}
                        </div>
                    <div class="form-group">
                        <label for="city">City:</label>
                        {!!
                            Form::text(
                                'city',
                                null,
                                array(
                                    'class' =>  'form-control',
                                    'placeholder'   =>  'Enter the city'
                                )
                            )
                         !!}
                    </div>
                    <div class="form-group">
                        <label for="cp">Postal code</label>
                        {!!
                            Form::text(
                                'cp',
                                 null,
                                 array(
                                    'class' =>  'form-control',
                                    'placeholder' =>  'Enter the Postal code'
                                 )
                             )
                         !!}
                    </div>    
                    <div class="form-group">
                        <label for="type">Type:</label>

                        {!! Form::radio('type', 'user', true) !!} User
                        {!! Form::radio('type', 'admin') !!} Admin
                    </div>

                    <div class="form-group">
                        <label for="homephone">Home phone:</label>
                        {!!
                            Form::text(
                                'homephone',
                                null,
                                array(
                                    'class'=>'form-control',
                                    'placeholder' =>  'Enter home phone'
                                )
                            )
                        !!}
                    </div>
                        <div class="form-group">
                            <label for="mobilephone">Mobile phone:</label>
                            {!!
                                Form::text(
                                    'mobilephone',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' =>  'Enter mobile phone'
                                    )
                                )
                            !!}
                        </div>
                        <div class="form-group">
                            <label for="workphone">workphone:</label>
                            {!!
                                Form::text(
                                    'workphone',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' =>  'Enter work phone'
                                    )
                                )
                            !!}
                        </div>
                    <div class="form-group">
                        <label for="active">Active:</label>

                        {!! Form::checkbox('active', null, true) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Submit', array('class'=>'btn btn-primary')) !!}
                        <a href="{{ route('admin.user.index') }}" class="btn btn-warning">Cancel</a>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop