<!-- NAVBAR -->
<nav id="mainNavbar" class="navbar navbar-expand-xl bg-green shadow py-0 py-md-4">
  <div class="container-fluid">
    <img src="\images\Presto.it-Logo.png" width="60" height="60" alt="">
    <a class="navbar-brand fs-3 fw-bold fst-italic" href="/">PRESTO.IT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="fa-solid fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('announcementIndex')}}">Annunci</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="categoriesDropdown">
              Categorie
          </a>
          <ul class="dropdown-menu rounded-0 m-0" aria-labelledby="categoriesDropdown">
              @foreach ($categories as $category)
                <li><a href="{{route('categoryShow', compact('category'))}}" class="dropdown-item">{{($category->name)}}</a></li>
                <li><hr class="dropdown-divider"></li>
              @endforeach
          </ul>
          </li>
          <li class="nav-item">
          @auth
          <li class="nav-item">
            <a class="nav-link text-nowrap" href="{{route('announcement.create')}}">Nuovo annuncio</a>
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
                 Benvenuto, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-dark ms-2 rounded-pill">Esci</button>
                    </form>
                </li>
              </ul>
            </li>
            @if (Auth::user()->is_revisor)
              <li class="nav-item">
                <a href="{{route('revisor.index')}}" class="nav-link btn-sm position-relative mx-4 buttonAuditorZoneNavbar">
                  Zona Revisore
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    {{App\Models\Announcement::toBeRevisionedCount()}}
                  </span>
                  <span class="visually-hidden">Unread messages</span>
                </a>
              </li>
            @endif
          @endguest
          <form action="{{route('announcements.search')}}" method="GET" class="d-flex">
          <input type="search" name="searched" class="rounded-start imputSearchNavbar" placeholder="Cerca..." aria-label="Search">
          <button class="rounded-end buttonSearchNavbar" type="submit">Cerca</button>
          </form>
          <button class="btn btn-round" id="skinButton"><i class="fa-solid fa-shirt"></i></button>
        </li>
      </ul>
    </div>
  </div>
</nav>