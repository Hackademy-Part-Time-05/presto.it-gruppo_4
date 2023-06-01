
<div class="container-fluid bg-light text-black border-top border-dark">

  <div class="row">

    <h2 class="text-center text-black my-5 animate__animated animate__bounceInDown">ECCO ALCUNE DELLE VOSTRE RECENSIONI:</h2>

    <div class="col-12 col-md-6 card my-5 border-0">
        <div class="card-header rounded-top bg-green text-dark fw-bold border border-dark">
          ECCO COSA DICONO DI NOI:
        </div>
        <div class="card-body bg-dark text-light rounded-bottom border border-dark">
          <blockquote class="blockquote mb-0">
            <p>Cercavo dei prodotti particolari e qui li ho trovati! Non ringraziero mai abbastanza Presto.it e tutti gli utenti da cui ho acquistato ciò che cercavo! </p>
            <footer class="blockquote-footer text-green">Francescus97 utente registrato dal 2022 su presto.it</cite></footer>
          </blockquote>
        </div>
      </div>
    
      <div class="col-12 col-md-6 card my-5 border-0">
        <div class="card-header rounded-top bg-green text-dark fw-bold border border-dark">
          ECCO COSA DICONO DI NOI:
        </div>
        <div class="card-body bg-dark text-light rounded-bottom border border-dark">
          <blockquote class="blockquote mb-0">
            <p>Mi ero stufato dei soliti siti di compra vendita, girando per la rete ho trovato questo sito e me ne sono innamorato! Credo non lo lascerò mai più!  </p>
            <footer class="blockquote-footer text-green">Alfa65 utente registrato dal 2012,  <cite title="Source Title">con più di 40 annunci attivi su presto.it</cite></footer>
          </blockquote>
        </div>
      </div>
    
      <div class="col-12 col-md-6 card my-5 border-0">
        <div class="card-header rounded-top bg-green text-dark fw-bold border border-dark">
          ECCO COSA DICONO DI NOI:
        </div>
        <div class="card-body bg-dark text-light rounded-bottom border border-dark">
          <blockquote class="blockquote mb-0">
            <p>Questa dovrebbe essere una recensione seria, ma dopo le due precedenti, ho momentaneamente esaurito la fantasia. </p>
            <footer class="blockquote-footer text-green">Tina27 utente registrato dal 2017,  <cite title="Source Title">con più di 50 annunci attivi su presto.it</cite></footer>
          </blockquote>
        </div>
      </div>

      <div class="col-12 col-md-6 card my-5 border-0">
        <div class="card-header rounded-top bg-green text-dark fw-bold border border-dark">
          ECCO COSA DICONO DI NOI:
        </div>
        <div class="card-body bg-dark text-light rounded-bottom border border-dark">
          <blockquote class="blockquote mb-0">
            <p>Non riuscivo a liberarmi del mio boomerang, poichè ogni volta che lo lanciavo, ritornava indietro. Grazie a presto.it non solo sono riuscito a liberarmene, ma c'ho persino lucrato sopra. </p>
            <footer class="blockquote-footer text-green">Ursula009 utente registrato dal 2015,  <cite title="Source Title">con più di 27 annunci attivi su presto.it</cite></footer>
          </blockquote>
        </div>
      </div>

  </div>

</div>



  <div class="container-fluid">

    <div>
      <h2 class="my-2 text-center">FACCI SAPERE LA TUA</h2>
    </div>

    <div class="row justify-content-center">

      <form action="#" class="col-12 col-md-6 shadow my-2 bg-green" method="POST">
          @csrf

          <div class="my-3 px-5 px-md-2">
            <label for="name" class="m-2 text-dark">{{__('ui.username')}}</label>
            <input type="text" class="imputRegisterLoginCustom" name="name">
            @error('name') <span class="text-danger fs-5">{{$message}}</span>@enderror
          </div>
          <div class="my-3 px-5 px-md-2">
              <label for="email" class="m-2 text-dark">Email</label>
              <input type="text" class="imputRegisterLoginCustom" name="email">
              @error('email') <span class="text-danger fs-5">{{$message}}</span>@enderror
          </div>
          <div class="my-3 px-5 px-md-2">
              <label class="m-2 text-dark" for="text">Scrivi la tua recensione</label>
              <textarea cols="30" rows="5" type="text" name="text" class="imputRegisterLoginCustom"></textarea>
          </div>
          <div class="d-flex justify-content-center">
              <button class="btn btnDark my-5 fst-italic shadow rounded-pill">INVIA</button>
          </div>
      </form>
  </div>

  </div>




