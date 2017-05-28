<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header" id="nav">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {!! link_to('admin/home', "Store", $attributes = array('class' => 'navbar-brand main-title')) !!}
            
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <p class="navbar-text">Admin | <i class="fa fa-dashboard"></i></p>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('admin.order.index') }}">Orders</a></li>
                <li><a href="{{ route('admin.product.index') }}">Products</a></li>
                <li><a href="{{ route('admin.user.index') }}">Users</a></li>
                <li><a href="{{ route('admin.category.index') }}">Categories</a></li>
                <li><a href="{{ route('admin.supplier.index') }}">Supplier</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
                        <i class="fa fa-user"></i> {{ Auth::user()->user }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href=" {{ route('logout') }} ">Sign off</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>