<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">MyBand</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    @if (!Auth::check())
      <li><a href="{{ url('/register') }}">Sign Up</a></li>
      <li><a href="{{ url('/login') }}">Login</a></li>
    @else
      <li><a href="{{ url('/logout') }}">Logout</a></li>  
    @endif  
    </ul>
  </div>
</nav>