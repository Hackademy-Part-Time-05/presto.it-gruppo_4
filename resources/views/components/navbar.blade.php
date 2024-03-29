
@php
    use Illuminate\Support\Facades\Lang;
@endphp

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
          <a class="nav-link" href="{{route('announcementIndex')}}">{{__('ui.announcements')}}</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="categoriesDropdown">
            {{__('ui.categories')}}
          </a>
          <ul class="dropdown-menu rounded-0 m-0 p-0" aria-labelledby="categoriesDropdown">
              @foreach ($categories as $category)
                <li><a href="{{route('categoryShow', compact('category'))}}" class="dropdown-item dropdownBackground dropdownNavbarText">{{ Lang::get('category.' . $category->name) }}</a></li>
                <li><hr class="dropdown-divider dropdownBackground m-0"></li>
              @endforeach
          </ul>
          </li>

          <li class="nav-item">
          @auth
          <li class="nav-item">
            <a class="nav-link text-nowrap" href="{{route('announcement.create')}}">{{__('ui.newAdvertisement')}}</a>
          </li>
          @endauth

          @guest
          <li class="nav-item">
            <a class="nav-link" href="/login">{{__('ui.login')}}</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/register">{{__('ui.register')}}</a>
          </li>
          @else
            <li class="nav-item dropdown">
              @if ((Auth::user()->is_revisor) && (App\Models\Announcement::toBeRevisionedCount()!=0))
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">!
                </span>
              @endif
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{__('ui.welcome')}}, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu">
                @if (Auth::user()->is_revisor)
                <li>  
                  <a href="{{route('revisor.index')}}" class="nav-link position-relative me-4 ms-1 my-3 auditorZoneDropdown text-dark">
                  {{__('ui.auditorZone')}}
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    {{App\Models\Announcement::toBeRevisionedCount()}}
                  </span>
                  <span class="visually-hidden">Unread messages</span>
                  </a>
                </li>
                @endif
                <li> 
              <form action="{{route('logout')}}" method="POST">
                @csrf
                  <button type="submit" class="btn btn-bg btn-dark ms-2 rounded-pill float-end mx-2">{{__('ui.logout')}}</button>
              </form>
                </li>
              </ul>
            </li>
            
          @endguest
          <form action="{{route('announcements.search')}}" method="GET" class="d-flex ms-3">
          <input type="search" name="searched" class="rounded-start imputSearchNavbar" placeholder="{{__('ui.search...')}}" aria-label="Search">
          <button class="rounded-end buttonSearchNavbar" type="submit"><i class="fas fa-search"></i></button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>