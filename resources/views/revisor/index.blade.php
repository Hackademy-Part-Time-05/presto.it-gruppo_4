
@php
    use Illuminate\Support\Facades\Lang;
@endphp

<x-main>
    <div class="container-fluid px-5 py-4 gradient0 shadow mb-4">
        <div class="row">
            <div class="col-12 text-dark d-flex justify-content-start p-0 m-0">
                <h1 class="text-uppercase fst-italic fw-bold">
                    {{ $announcement_to_check ?  __('ui.hereIsTheAdvertisementToReview') : __('ui.thereAreNoAdvertisementsToReview') }}
                </h1>
            </div>
        </div>
    </div>
    @if ($announcement_to_check)
    <div class="container border">
        <div class="row d-flex justify-content-between bg-dark p-3 mb-5">
            <div class="col-4 fs-1 fw-bold text-light shadow">{{__('ui.title')}}: {{$announcement_to_check->title}}</div>
            <div class="col-4 fs-5 text-light my-auto fst-italic">{{__('ui.postedOn')}}: {{$announcement_to_check->created_at->format('d/m/Y')}}</div>
            <form class="col-2 my-auto d-flex justify-content-end" action="{{route('revisor.accept_announcement', ['announcement'=> $announcement_to_check])}}" method="POST">
                @csrf @method('PATCH')
                <button type="button" class="btn rounded-pill btn-success shadow" data-bs-toggle="modal" data-bs-target="#acceptModal">{{__('ui.accept')}}</button>
            </form>
            <form class="col-2 my-auto" action="{{route('revisor.reject_announcement', ['announcement'=> $announcement_to_check])}}" method="POST">
                @csrf @method('PATCH')
                <button type="button" class="btn rounded-pill btn-danger shadow" data-bs-toggle="modal" data-bs-target="#rejectModal">{{__('ui.reject')}}</button>
            </form>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($announcement_to_check->images as $key => $image)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <img src="{{$image->getUrl(400,300)}}" class="d-block w-100 carousel-image" alt="...">
                            </div>
                        @endforeach
                    </div>
                    @if (count($announcement_to_check->images) > 1)
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                    @endif
                </div>
            </div>
                <div class="col-md-6">
                    <div class="row">
                        <p class="card-text fs-5 my-3 text-break"><span class=" text-dark fw-bold text-uppercase">{{__('ui.description')}}: </span> {{$announcement_to_check->body}}</p>
                    </div>
                    <div class="row">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Adulti:</td>
                                    <td><span class="{{$image->adult}}"></span></td>
                                </tr>
                                <tr>
                                    <td>Satira:</td>
                                    <td><span class="{{$image->spoof}}"></span></td>
                                </tr>
                                <tr>
                                    <td>Medicina:</td>
                                    <td><span class="{{$image->medical}}"></span></td>
                                </tr>
                                <tr>
                                    <td>Violenza:</td>
                                    <td><span class="{{$image->violence}}"></span></td>
                                </tr>
                                <tr>
                                    <td>Contenuti espliciti:</td>
                                    <td><span class="{{$image->racy}}"></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <h5 class="tc-accent fw-bold text-dark">Tag</h5>
                        <div class="text-dark">
                            @if ($image->labels)
                                @foreach ($image->labels as $label)
                                    <p class="fst-italic d-inline">#{{$label}},</p>
                                @endforeach
                            @endif            
                        </div>
                    </div>
                </div>
        </div>
    </div>


    <!-- Modal di conferma per l'accettazione -->

<div class="modal fade" id="acceptModal" tabindex="-1" aria-labelledby="acceptModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header modalHeaderCustom">
                <h5 class="modal-title text-dark fw-bold text-uppercase" id="acceptModalLabel">{{__('ui.acceptConfirmation')}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modalBodyCustom fw-bold">
                {{__('ui.acceptConfirmationMessage')}}
            </div>
            <div class="modal-footer modalFooterCustom">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">{{__('ui.cancel')}}</button>
                <form action="{{route('revisor.accept_announcement', ['announcement'=> $announcement_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success">{{__('ui.accept')}}</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal di conferma per il rifiuto -->

<div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="rejectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header modalHeaderCustom">
                <h5 class="modal-title text-dark fw-bold text-uppercase" id="rejectModalLabel">{{__('ui.rejectConfirmation')}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modalBodyCustom fw-bold">
                {{__('ui.rejectConfirmationMessage')}}
            </div>
            <div class="modal-footer modalFooterCustom">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">{{__('ui.cancel')}}</button>
                <form action="{{route('revisor.reject_announcement', ['announcement'=> $announcement_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger">{{__('ui.reject')}}</button>
                </form>
            </div>
        </div>
    </div>
</div>
                </div>
            @endif
                        </div>
                      </div>                  
            

<div class="container flex-grow-1 my-5">
    <table class="table">
        <tr>
            <th>Titolo</th>
            <th>Categoria</th>
            <th>Prezzo</th>
            <th>Data di creazione</th>
            <th>Data di revisione</th>
            <th>Azione</th>
        </tr>
        @foreach ($announcements_checked as $announcement)
            <tr>
                <th>{{$announcement->title}}</th>
                <th>{{$announcement->category->name}}</th>
                <th>{{$announcement->price}}</th>
                <th>{{$announcement->created_at}}</th>
                <th>{{$announcement->updated_at}}</th>
                <th>
                    <div class="row">
                        <div class="col-12 col-md-6 d-flex align-items-center justify-content-center my-5">
                            <form action="{{route('revisor.reset_announcement', ['announcement'=> $announcement])}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn rounded-pill btn-success shadow">Rimetti in coda</button>
                            </form>
                        </div>
                </th>
            </tr>
        @endforeach
    </table>
</div>

</x-main>