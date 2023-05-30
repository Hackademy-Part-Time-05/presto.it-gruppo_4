
@php
    use Illuminate\Support\Facades\Lang;
@endphp

<x-main>
    <div class="container-fluid p-5 gradient0 p-5 shadow mb-4">
        <div class="row">
            <div class="col-12 text-light d-flex align-items-center justify-content-center  p-5">
                <h1 class="display-2">
                    {{ $announcement_to_check ?  __('ui.hereIsTheAdvertisementToReview') : __('ui.thereAreNoAdvertisementsToReview') }}
                </h1>
            </div>
        </div>
    </div>
    @if ($announcement_to_check)
    <div class="container">
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
            <div class="col-md-6 d-flex align-items-center">
                <div class="card-body mx-3">
                    <h5 class="tc-accent fw-bold text-dark">Revisione immagini</h5>
                    <p class="ms-2">Adulti: <span class="{{ $image->adult }}"></span></p>
                    <p class="ms-2">Satira: <span class="{{ $image->spoof }}"></span></p>
                    <p class="ms-2">Medicina: <span class="{{ $image->medical }}"></span></p>
                    <p class="ms-2">Violenza: <span class="{{ $image->violence }}"></span></p>
                    <p class="ms-2">Contenuti espliciti: <span class="{{ $image->racy }}"></span></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 my-3">
            <h5 class="tc-accent fw-bold text-dark">Tag</h5>
            <div class="text-dark">
                @if ($image->labels)
                    @foreach ($image->labels as $label)

                        <p class="d-inline">{{$label}},</p>
                        
                    @endforeach
                @endif
            </div>
        </div>
    </div>

                    <!----->



                    <div class="container d-flex align-items-center justify-content-center vh-100">
                        <div class="col-12 col-md-6">
                            <div class="text-center">
                                <h5 class="card-title fs-3 my-3 text-dark"><span class="fw-bold text-uppercase">{{__('ui.title')}}: </span> {{$announcement_to_check->title}}</h5>
                                <p class="card-text fs-5 my-3"><span class=" text-dark fw-bold text-uppercase">{{__('ui.description')}}: </span> {{$announcement_to_check->body}}</p>
                                <p class="card-footer fs-5 my-3"><span class=" text-dark fw-bold text-uppercase">{{__('ui.postedOn')}}: </span> {{$announcement_to_check->created_at->format('d/m/Y')}}</p>
                            </div>
                        </div>
                    </div>
        
                    {{-- <div class="row">
                        <div class="col-12 col-md-6 d-flex align-items-center justify-content-center my-5">
                            <form action="{{route('revisor.accept_announcement', ['announcement'=> $announcement_to_check])}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn rounded-pill btn-success shadow">{{__('ui.accept')}}</button>
                            </form>
                        </div>
        
                        <div class="col-12 col-md-6 d-flex align-items-center justify-content-center my-5">
                            <form action="{{route('revisor.reject_announcement', ['announcement'=> $announcement_to_check])}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn rounded-pill btn-danger  shadow">{{__('ui.reject')}}</button>
                            </form>
                        </div>
                    </div> --}}

                    <div class="row">
                        <div class="col-12 col-md-6 d-flex align-items-center justify-content-center my-5">
                            <form action="{{route('revisor.accept_announcement', ['announcement'=> $announcement_to_check])}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="button" class="btn rounded-pill btn-success shadow" data-bs-toggle="modal" data-bs-target="#acceptModal">{{__('ui.accept')}}</button>
                            </form>
                        </div>
                    
                        <div class="col-12 col-md-6 d-flex align-items-center justify-content-center my-5">
                            <form action="{{route('revisor.reject_announcement', ['announcement'=> $announcement_to_check])}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="button" class="btn rounded-pill btn-danger shadow" data-bs-toggle="modal" data-bs-target="#rejectModal">{{__('ui.reject')}}</button>
                            </form>
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
                      

</x-main>