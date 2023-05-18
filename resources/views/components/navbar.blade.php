<!-- NAVBAR -->
<nav id="mainNavbar" class="navbar navbar-expand-lg bg-green shadow py-0 py-md-4">
  <div class="container-fluid">
    <img src="\images\logo apple.jpg" width="30" height="30" alt="">
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
<script>
  let toggleSkin = document.getElementById('skinButton');
  toggleSkin.addEventListener('click',function()
    {
      let targetGreen = Array.from(document.getElementsByClassName('bg-green'));
      targetGreen.forEach(function(target)
      {
        target.classList.toggle('bg-green');
        target.classList.toggle('bg-pink');
      });
      let targetBlue = Array.from(document.getElementsByClassName('bg-blue'));
      targetBlue.forEach(function(target)
      {
        target.classList.toggle('bg-blue');
        target.classList.toggle('bg-lightblue');
      });
      let targetGradient0 = Array.from(document.getElementsByClassName('gradient0'))
      targetGradient0.forEach(function(target)
      {
        target.classList.toggle('gradient0');
        target.classList.toggle('gradient2');
      });
      let targetGradient1 = Array.from(document.getElementsByClassName('gradient1'))
      targetGradient1.forEach(function(target)
      {
        target.classList.toggle('gradient1');
        target.classList.toggle('gradient3');
      });
    });
</script>