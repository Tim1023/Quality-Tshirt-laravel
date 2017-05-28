@extends('admin.template')
@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h2>Welcome {{ Auth::user()->user  }} to the admin panel</h2>
        </div>

        <div class="row">

            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-list-alt icon-home"></i>
                    <a href="{{ route('admin.category.index') }}" class="btn btn-success btn-block btn-home-admin">
                        Categories
                    </a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-shopping-cart icon-home"></i>
                    <a href="{{ route('admin.product.index') }}" class="btn btn-success btn-block btn-home-admin"> Products </a>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-cc-paypal icon-home"></i>
                    <a href="{{ route('admin.order.index') }}" class="btn btn-success btn-block btn-home-admin"> Orders </a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-users icon-home"></i>
                    <a href="{{ route('admin.user.index') }}" class="btn btn-success btn-block btn-home-admin"> Users </a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-users icon-home"></i>
                    <a href="{{ route('admin.supplier.index') }}" class="btn btn-success btn-block btn-home-admin"> Supplier </a>
                </div>
            </div>
        </div>
    </div>
@stop