<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top ">
    <div class="container-fluid ">
      <a class="navbar-brand " href="#">IlMondoDelMobile</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container d-flex justify-content-end me-0">
        <div class="row">
          <div class="col-12 d-flex justify-content-end ">
      {{-- <div class="collapse navbar-collapse " id="navbarNav"> --}}
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Articoli</a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link active" href="/register" >Registrati</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/login">Login</a>
          </li>
          @endguest
         

          @auth
              
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
               
                <li class='dropdown-item'>
                    <form method="POST" action="/logout">
                        @csrf
                        <button class='nav-link active' type='submit'>Logout</button>
                    </form>
                </li>
            </ul>
          </li>
          @endauth
        </ul>
      </div>
    </div>
</div>
</div>
  </nav>