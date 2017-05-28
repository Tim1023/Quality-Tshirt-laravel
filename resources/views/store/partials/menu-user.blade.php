@if(Auth::check())
	<li class="dropdown">
	  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
	    <i class="fa fa-user"></i> {{ Auth::user()->user }} <span class="caret"></span>      
	  </a>
	  <ul class="dropdown-menu" role="menu">
	    <li><a href=" {{ route('logout') }} ">Sign off</a></li>
	  </ul>
	</li>
@else
	<li class="dropdown">
	  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
	    <i class="fa fa-user"><span class="caret"></span></i>      
	  </a>
	  <ul class="dropdown-menu" role="menu">
	    <li> <a href=" {{ route('login-get') }} ">Log in</a></li>
	    <li> <a href=" {{ route('register-get') }} ">Create an account</a></li>
	  </ul>
	</li>
@endif




