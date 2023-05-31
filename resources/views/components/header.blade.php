{{-- <header class="container-fluid flex-fill d-flex flex-column justify-content-center gradient0">
  <div class="row my-5">
    <div class="col-12">
      <div class="d-flex flex-column align-items-center mt-3">
        <h2 class="display-2 text-light animate__animated animate__fadeInRightBig">{{__('ui.sell')}}</h2>
        <h2 class="display-2 text-dark animate__animated animate__fadeInLeftBig">{{__('ui.immediately')}}</h2>
      </div>
      <div class="text-center mt-4">
        <p class=" h3 text-dark animate__bounceIn">{{__('ui.do you wonna sell it now? rapid and fast?')}} </p> <p class="h3 text-light animate__bounceIn">{{__('ui.create your announcements')}}</p>
        <a href="{{route('announcement.create')}}" class="btn btn-lg rounded btnDark border-0 animate__bounceIn">{{__('ui.create your announcements')}}</a>
      </div>
    </div>
  </div>
</header> --}}


<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <header class="container-fluid flex-fill d-flex flex-column justify-content-center gradient1">
        <div class="row my-5">
          <div class="col-12">
            <div class="d-flex flex-column align-items-center mt-3">
              <h2 class="display-2 text-light animate__animated animate__fadeInRightBig">{{__('ui.sell')}}</h2>
              <h2 class="display-2 text-dark animate__animated animate__fadeInLeftBig">{{__('ui.immediately')}}</h2>
            </div>
            <div class="text-center mt-4">
              <p class=" h3 text-dark animate__bounceIn">{{__('ui.do you wonna sell it now? rapid and fast?')}} </p> <p class="h3 text-light animate__bounceIn">{{__('ui.create your announcements')}}</p>
              <a href="{{route('announcement.create')}}" class="btn btn-lg rounded btnDark border-0 animate__bounceIn">{{__('ui.create your announcements')}}</a>
            </div>
          </div>
        </div>
      </header>
    </div>
    <div class="carousel-item">
      <header class="container-fluid flex-fill d-flex flex-column justify-content-center bg-blue">
        <div class="row my-5">
          <div class="col-12">
            <div class="d-flex flex-column align-items-center mt-3">
              <h2 class="display-2 text-dark animate__animated animate__fadeInRightBig">{{__('ui.buy')}}</h2>
              <h2 class="display-2 text-light animate__animated animate__fadeInLeftBig">{{__('ui.immediately')}}</h2>
            </div>
            <div class="text-center mt-4">
              <p class=" h3 text-light animate__bounceIn">{{__('ui.doYouWantSomethingSearchForItQuicklyAndEasily')}} </p> 
              <p class="h3 text-dark animate__bounceIn">{{__('ui.viewourads')}}</p>
              <a href="{{route('announcementIndex')}}" class="btn btn-lg rounded btnDark border-0 animate__bounceIn">{{__('ui.viewourads')}}</a>
            </div>
          </div>
        </div>
      </header>
    </div>
    <div class="carousel-item">
      <header class="container-fluid flex-fill d-flex flex-column justify-content-center bg-dark">
        <div class="row my-5">
          <div class="col-12">
            <div class="d-flex flex-column align-items-center mt-3">
              <h2 class="display-2 text-light animate__animated animate__fadeInRightBig">{{__('ui.workWith')}}</h2>
              <h2 class="display-2 text-green animate__animated animate__fadeInLeftBig">{{__('ui.us')}}</h2>
            </div>
            <div class="text-center mt-4">
              <p class=" h3 text-light animate__bounceIn">{{__('ui.quicklyAskTo')}} </p> 
              <p class="h3 text-green animate__bounceIn">{{__('ui.becomeaReviewerHeader')}}</p>
              <a href="{{route('become.revisor')}}" class="btn btn-lg rounded btnDark border-0 animate__bounceIn" data-bs-toggle="modal" data-bs-target="#confirmationRevisorZoneHeaderModal">{{__('ui.becomeaReviewerHeader')}}</a>
                
              <!-- Modal di conferma -->
<div class="modal fade" id="confirmationRevisorZoneHeaderModal" tabindex="-1" aria-labelledby="confirmationRevisorZoneModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header modalHeaderCustom">
        <h5 class="modal-title text-dark fw-bold text-uppercase" id="confirmationRevisorZoneHeaderModal">{{__('ui.acceptConfirmation')}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body modalBodyCustom fw-bold">
        <p>{{__('ui.areYouSureYouWantToSubmitTheRequestToBecomeaReviewer')}}</p>
      </div>
      <div class="modal-footer modalFooterCustom">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">{{__('ui.cancel')}}</button>
        <button type="button" class="btn btn-success"> <a href="{{route('become.revisor')}}" class="text-decoration-none text-light"> {{__('ui.confirm')}}</a></button>
      </div>
    </div>
  </div>
</div>
            </div>
          </div>
        </div>
      </header>
    </div>
  </div>
</div>
