{{-- <footer class="footer py-3 bg-dark text-light align-self-end w-100">
    <div class="container-fluid">
      <div class="row d-flex justify-content-between">
        <div class="col-12 col-md-4">
          <ul class="list-group list-group-flush w-100">
            <li class="list-group-item bg-dark text-light text-center text-md-center">
              <div class="row d-flex justify-content-center">

                <a href="{{route('become.revisor')}}" class="btn btn-warning text-light shadow my-3 mx-auto d-block ">Vuoi lavorare con noi? Diventa revisore!</a>

              </div>
             
            </li>
            <li class="list-group-item bg-dark text-light text-center text-md-start">   I NOSTRI CONTATTI </li>
            <!--------->
            <div class="d-flex flex-column justify-content-center">
              <div><i class="fa-sharp fa-solid fa-location-dot fa-2xl my-4"></i></div> <span> Via le mani dal naso, 69, 092315, Svervegia</span>
              <div><i class="fa-solid fa-at fa-2xl my-4"></i></div><span> presto@mail.net</span>
              <div><i class="fa-solid fa-phone fa-2xl my-4"></i></div> <span> +39 388756482174</span>
            </div>
            
            
          </ul>
        </div>
        <div class="col-12 col-md-4 d-flex">
          <ul class="list-group list-group-flush w-100">
            <div class="container d-flex my-5">
            <li class="list-group-item bg-dark text-light text-center text-md-end fa-brands fa-facebook fa-2xl my-3"></li> 
            <li class="list-group-item bg-dark text-light text-center text-md-end fa-brands fa-instagram fa-2xl my-3 "></li>
            <li class="list-group-item bg-dark text-light text-center text-md-end fa-brands fa-tiktok fa-2xl my-3 "></li>
            <li class="list-group-item bg-dark text-light text-center text-md-end fa-brands fa-twitter fa-2xl my-3 "></li>
            <li class="list-group-item bg-dark text-light text-center text-md-end fa-brands fa-brands fa-youtube fa-2xl my-3 "></li>
            <li class="list-group-item bg-dark text-light text-center text-md-end fa-brands fa-brands fa-brands fa-linkedin fa-2xl my-3 "></li>
          </ul>
        </div>
      </div>
      <div class="row d-flex justify-content-center text-center my-5">
        <div class="col-12 fst-italic">
          2023 Sito costruito dal team gruppo 4
        </div>
      </div>
    </div>
</footer> --}}

{{-- <footer class="footer py-3 bg-dark text-light">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-12 col-md-4">
        <ul class="list-group list-group-flush">
          <!-- Contenuto del primo colonna -->
          <ul class="list-group list-group-flush w-100">
            <li class="list-group-item bg-dark text-light text-center text-md-center">
              <div class="row d-flex justify-content-center">

                <a href="{{route('become.revisor')}}" class="btn btn-warning text-light shadow my-3 mx-auto d-block ">Vuoi lavorare con noi? Diventa revisore!</a>

              </div>
             
            </li>
            <li class="list-group-item bg-dark text-light text-center text-md-start">   I NOSTRI CONTATTI </li>
            <!--------->
            <div class="d-flex flex-column justify-content-center">
              <div><i class="fa-sharp fa-solid fa-location-dot fa-2xl my-4"></i></div> <span> Via le mani dal naso, 69, 092315, Svervegia</span>
              <div><i class="fa-solid fa-at fa-2xl my-4"></i></div><span> presto@mail.net</span>
              <div><i class="fa-solid fa-phone fa-2xl my-4"></i></div> <span> +39 388756482174</span>
            </div>
            
            
          </ul>
        </ul>
      </div>
      <div class="col-12 col-md-4">
        <ul class="list-group list-group-flush">
          <!-- Contenuto del secondo colonna -->
          <ul class="list-group list-group-flush w-100">
            <div class="container d-flex my-5">
            <li class="list-group-item bg-dark text-light text-center text-md-end fa-brands fa-facebook fa-2xl my-3"></li> 
            <li class="list-group-item bg-dark text-light text-center text-md-end fa-brands fa-instagram fa-2xl my-3 "></li>
            <li class="list-group-item bg-dark text-light text-center text-md-end fa-brands fa-tiktok fa-2xl my-3 "></li>
            <li class="list-group-item bg-dark text-light text-center text-md-end fa-brands fa-twitter fa-2xl my-3 "></li>
            <li class="list-group-item bg-dark text-light text-center text-md-end fa-brands fa-brands fa-youtube fa-2xl my-3 "></li>
            <li class="list-group-item bg-dark text-light text-center text-md-end fa-brands fa-brands fa-brands fa-linkedin fa-2xl my-3 "></li>
          </ul>
        </ul>
      </div>
    </div>
    <div class="row justify-content-center text-center my-3">
      <div class="col-12 fst-italic">
        2023 Sito costruito dal team gruppo 4
      </div>
    </div>
  </div>
</footer> --}}

<footer>
  <section class="container-fluid py-3 bg-dark text-light ">
    <div class="row d-flex">
      <div class="col-6">
        <ul class="list-group list-group-flush d-flex flex-column justify-content-between h-100">
          @php
              $links = [
                '' => 'text-green fst-italic',
                '338 123 45 67' => 'text-light',
                'mail@example.it' => 'text-light',
                'Indirizzo, 00, Citta' => 'text-light',

              ]
          @endphp
          @foreach ($links as $link => $linkClass)
          <li class="list-group list-item bg-dark text-start ms-2 ms-md-5 my-0 my-md-2 {{$linkClass}}">{{$link}}</li>
           @endforeach
        </ul>
      </div>
      <div class="col-6">
        <ul class="list-group list-group-horizontal-md flush my-0 justify-content-end">
          @php
           $social = [
            'facebook' => 'fa-brands fa-facebook',
            'instagram' => 'fa-brands fa-instagram',
            'tiktok' => 'fa-brands fa-tiktok',
            'twiter' => 'fa-brands fa-twitter',
            'youtube' => 'fa-brands fa-youtube',

           ]   
          @endphp
          @foreach ($social as $name => $class)
          <li class="list-group-item bg-dark text-light text-end me-2 {{$class}} fa-l"></li>     
          @endforeach
        </ul>
      </div>

    </div>
  </section>
</footer>
<script>
  let target=document.querySelector('.text-green.fst-italic');
  let link = document.createElement('a');
  link.href=`{{route('become.revisor')}}`;
  link.textContent = `Diventa Revisore!`;
  link.classList.add('text-green','revisorLink')
  target.appendChild(link);
</script>