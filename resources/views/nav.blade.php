<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="{{route('home')}}">Home</a>
      </li>
      
      @if(Auth::guard("admin")->check())
      <li class="nav-item">
          <a class="nav-link" href="{{route('admin.home')}}">Home</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="{{route('admin.profile')}}">Profile</a>
      </li>
      @else
      <li class="nav-item">
            <a class="nav-link" href="{{route('admin.register')}}">Register</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.login')}}">Login</a>
       </li>
      @endif
    </ul>
  </nav>
  <br>