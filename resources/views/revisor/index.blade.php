<x-main>
    <div class="container-fluid p-5 bg-gradient bg-success p-5 shadow mb-4">
        <div class="row">
            <div class="col-12 text-light d-flex align-items-center justify-content-center  p-5">
                <h1 class="display-2">
                    {{$announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}
                </h1>
            </div>
        </div>
    </div>
    @if ($announcement_to_check)
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($announcement_to_check->images as $image)
                                @if ($loop->first)
                                    <div class="carousel-item active">
                                    <img src="{{$image->getUrl(400,300)}}" class="d-block w-100 carousel-image" alt="...">
                                    </div>
                                @else
                                    <div class="carousel-item">
                                        <img src="{{$image->getUrl(400,300)}}" class="d-block w-100 carousel-image" alt="...">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
              </div>
            </div>

                    <!----->



                    <div class="container d-flex align-items-center justify-content-center vh-100">
                        <div class="text-center">
                            <h5 class="card-title">Titolo: {{$announcement_to_check->title}}</h5>
                            <p class="card-text">Descrizione: {{$announcement_to_check->body}}</p>
                            <p class="card-footer">Pubblicato il: {{$announcement_to_check->created_at->format('d/m/Y')}}</p>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-12 col-md-6 d-flex align-items-center justify-content-center my-5">
                            <form action="{{route('revisor.accept_announcement', ['announcement'=> $announcement_to_check])}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn rounded-pill btn-success shadow">Accetta</button>
                            </form>
                        </div>
        
                        <div class="col-12 col-md-6 d-flex align-items-center justify-content-center my-5">
                            <form action="{{route('revisor.reject_announcement', ['announcement'=> $announcement_to_check])}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn rounded-pill btn-danger  shadow">Rifiuta</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
                        </div>
                      </div>
                      
















                   
</x-main>