<!-- resources/views/auth/login.blade.php -->

@extends('store.template')
@section('content')<br>
    <div class="container text-center">
        <div class="page-header">
            <h3> <i class="fa fa-user"> Log in </i> </h3>
        </div>

        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="page">
                    @include ('store.partials.errors')
                    <form method="POST" action="/auth/login" class="form-horizontal">
                        {!! csrf_field() !!}

                        <div class="form-group">
                          <label for="email" class="col-lg-2 control-label">Email</label>
                          <div class="col-lg-10">
                                <input  class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Email">
                          </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-lg-2 control-label">Password</label>
                              <div class="col-lg-10">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                              </div>
                        </div>

                        <div class="col-lg-10 col-lg-offset-2">
                            <input type="checkbox" name="remember"> Remember me
                        </div><br>
                        <br>
                        <div class="form-group">     
                            <div class="col-lg-10 col-lg-offset-2">                                                       
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button><br>
                            </div>
                        </div>
                    </form>                    
                </div>
            </div>
        </div>
    </div><br><br><br><br>
@stop

