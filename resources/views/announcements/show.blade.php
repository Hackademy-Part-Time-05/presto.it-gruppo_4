<x-main>
   
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <div class="carousel slide" data-bs-ride="carousel" id="showCarousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://picsum.photos/500/500" alt="" class="img-fluid p-3 rounded">
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/500/500" alt="" class="img-fluid p-3 rounded">
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/500/500" alt="" class="img-fluid p-3 rounded">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#showCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder">{{$announcement->title}}</h1>
                    <div class="fs-5 mb-5">
                        <span class="text-decoration-line-through"></span>
                        <span>{{$announcement->price}}</span>
                    </div>
                    <p class="lead">{{$announcement->body}}</p>
                    <a href="{{route('categoryShow', ['category' => $announcement->category])}}" class="my-2 border-top pt-2 border-dark card-link shadow btn btn-succcess">Categoria: {{$announcement->category->name}}</a>
                    <p class="lead">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}} - Autore {{$announcement->user->name ?? ''}}</p>
                    <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                        <button class="btn btn-outline-dark flex-shrink-0" type="button">
                            <i class="bi-cart-fill me-1"></i>
                            Aggiungi al carrello
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    

</x-main>