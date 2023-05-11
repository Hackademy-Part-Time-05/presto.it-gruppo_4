<!-- NAVBAR -->
<nav id="mainNavbar" class="navbar navbar-expand-lg border-bottom p-0">
  <div class="container-fluid">
    <a class="navbar-brand fs-3 fw-bold" href="/"><i class="fa-solid fa-cart-shopping me-2"></i>presto.it</a>
    <button class="navbar-toggler text-presto" type="button" data-bs-toggle="collapse"
    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="fa-solid fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Annunci
          </a>
          <ul class="dropdown-menu rounded-0 m-0">
          <li><a class="dropdown-item" href="">Ricerca</a></li>
            <li><a class="dropdown-item" href="">Ultimi</a></li>
          </ul>
          </li>
          <li class="nav-item">
          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{route('announcement.create')}}">Inserisci annuncio</a>
          </li>
          @endauth

          @guest
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/register">Registrati</a>
          </li>
          @else
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->email }}
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger ms-2">Esci</button>
                    </form>
                </li>
              </ul>
            </li>
          @endguest
        </li>
      </ul>
    </div>
  </div>
</nav>