<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header" id="nav">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      {!! link_to('admin/home', "", $attributes = array('class' => 'navbar-brand main-title')) !!}
      <a class="navbar-brand" href=" {{ route('home')   }} "> <img src="https://www.kinkbmx.com/wp-content/uploads/2014/02/TWITTER-ICON-small.png"> </a>
        <a class="navbar-brand" href=" {{ route('home')   }} "><p>Quality T-Shirts</p></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">      
        <ul class="nav navbar-nav navbar-right">          
            <li class="faa"><a href=" {{ route('cart-show') }} "><i class="fa fa-shopping-cart fa" ></i>View my cart</a></li>
            @include('store.partials.menu-user')            
        </ul>
    </div>
  </div>
</nav>

