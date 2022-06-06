<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top ">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item mx-3">
          <a class="nav-link" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="{{route('studentCreatePage')}}">Registration</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="{{route('studentLoginPage')}}">Login</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="{{route('ContactView')}}">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
