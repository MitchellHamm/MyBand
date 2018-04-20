<div class="{{ $container }}">
     <div class="top-left {{ $linkStyle }}">
         @if (Auth::check())
             <a href="{{ url('/logout') }}">Logout</a>
         @else
             <a href="{{ url('/login') }}">Login</a>
             <a href="{{ url('/register') }}">Register</a>
         @endif
     </div>
     <div class="top-right {{ $linkStyle }}">
         <a href="{{ url('/') }}">MyBand</a>
     </div>
 </div>