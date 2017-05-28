@extends('store.template')

@section('content')
    <div class="container text-center">        
          <h3><i class="fa fa-user-plus"></i> Registrarse</h3>     
        <div class="row fluid">
            <div class="col-md-offset-2 col-md-8">
                <div class="page">

                @include('store.partials.errors')

                    <form method="POST" action="/auth/register">
                        {!! csrf_field() !!}

                        <div class="col-xs-6 form-group">
                            <label for="name">Name</label>
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                        </div>

                        <div class="col-xs-6 form-group">
                            <label for="last_name">Last name</label>
                            <input class="form-control" type="text" name="last_name" value=" {{ old('last_name') }} ">
                        </div>

                        <div class="col-xs-6 form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="col-xs-6 form-group">
                            <label for="user">User</label>
                            <input class="form-control" type="text" name="user" value="{{ old('user') }}">
                        </div>

                        <div class="col-xs-6 form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" name="password">
                        </div>

                        <div class="col-xs-6 form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input class="form-control" type="password" name="password_confirmation">
                        </div>

                        <div class="col-xs-6 form-group">
                            <label for="state">State</label>
                            <input class="form-control" type="text" name="state" value=" {{ old('state') }} ">
                        </div>   

                        <div class="col-xs-6 form-group">
                            <label for="city">City</label>
                            <input class="form-control" type="text" name="city" value=" {{ old('city') }} ">
                        </div>                                                                     

                        <div class="col-xs-6 form-group">
                            <label for="cp">Postal Code</label>
                            <input class="form-control" type="text" name="cp" value=" {{ old('cp') }} ">
                        </div>

                        <div class="col-xs-6 form-group">
                            <label for="adrress">Address</label>
                            <input class="form-control" name="address" value=" {{ old('address') }} ">
                        </div>
                        <div class="col-xs-6 form-group">
                            <label for="adrress">Home phone</label>
                            <input class="form-control" name="homephone" value=" {{ old('homephone') }} ">
                        </div>
                        <div class="col-xs-6 form-group">
                            <label for="adrress">Work phone</label>
                            <input class="form-control" name="workphone" value=" {{ old('workphone') }} ">
                        </div>
                        <div class="col-xs-6 form-group">
                            <label for="adrress">Mobile phone</label>
                            <input class="form-control" name="mobilephone" value=" {{ old('mobilephone') }} ">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@stop
