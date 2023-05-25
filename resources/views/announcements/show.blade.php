<x-main>
   
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-inner">
                          @foreach ($announcement->images as $key => $image)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                              <img src="{{$image->getUrl(400,300)}}" class="d-block w-100 carousel-image" alt="...">
                            </div>
                          @endforeach
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
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder">{{$announcement->title}}</h1>
                    <div class="fs-5 mb-5">
                        <span class="text-decoration-line-through"></span>
                        <span class="h3">{{$announcement->price}}€</span>
                    </div>
                    <p class="lead text-break">{{$announcement->body}}</p>
                    <a href="{{route('categoryShow', ['category' => $announcement->category])}}" class="my-2 border-top pt-2 border-dark card-link shadow btn linkCategoryAnnouncementShow" id="linkCategoryAnnouncementShow">{{__('ui.category')}}: {{$announcement->category->name}}</a>
                    <p class="lead">{{__('ui.postedOn')}}: {{$announcement->created_at->format('d/m/Y')}} - {{__('ui.author')}} {{$announcement->user->name ?? ''}}</p>
                    <div class="d-flex">
                        <input class="text-center me-3 inputCostum" id="inputQuantity" type="number" value="1" style="max-width: 3rem" />
                        <button class="btn btn-outline-dark flex-shrink-0 buttonAddCartCustom" id="buttonAddCartAnnouncementsShow" type="button">
                            <i class="bi-cart-fill me-1"></i>
                            {{__('ui.addToCart')}}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    

</x-main>