
<footer>
  <section class="container-fluid py-3 bg-dark text-light ">
    <div class="row d-flex">
      <div class="col-12 text-start">
        <p class="text-green"><a href="#" class="btn btn-bg btnDark fs-5" data-bs-toggle="modal" data-bs-target="#confirmationRevisorZoneModal">{{__('ui.becomeaReviewer')}}</a></p>
      </div>

      <!-- Modal di conferma -->
<div class="modal fade" id="confirmationRevisorZoneModal" tabindex="-1" aria-labelledby="confirmationRevisorZoneModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header modalHeaderCustom">
        <h5 class="modal-title text-dark fw-bold text-uppercase" id="confirmationRevisorZoneModalLabel">{{__('ui.acceptConfirmation')}}</h5>
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


      <div class="col-12 col-md-6">
        <ul class="list-group list-unstyled list-group-flush d-flex flex-column justify-content-between h-100">
          <li class="text-light fs-5"><i class="bi bi-phone fs-3 mx-1"></i>338 123 45 67</li>
          <li class="text-light fs-5"><i class="bi bi-envelope-at fs-3 mx-1"></i>mail@example.it</li>
          <li class="text-light fs-5"><i class="bi bi-geo-alt fs-3 mx-1"></i>{{__('ui.address')}}, 00, {{__('ui.city')}}</li>
        </ul>
      </div>
      <div class="col-12 col-md-6 d-flex justify-content-md-end justify-content-center">
        <ul class="list-group list-unstyled list-group-ho-md list-group-horizontal flush my-2 justify-content-end align-items-center mx-3">
          <li class="text-light fs-3 mx-2"><i class="bi bi-facebook"></i></li>
          <li class="text-light fs-3 mx-2"><i class="bi bi-instagram"></i></li>
          <li class="text-light fs-3 mx-2"><i class="bi bi-twitter"></i></li>
          <li class="text-light fs-3 mx-2"><i class="bi bi-tiktok"></i></li>
          <li class="text-light fs-3 mx-2"><i class="bi bi-youtube"></i></li>
        </ul>
      </div>
    </div>
    <div class="col-12 text-center">
      <p class="text-light fs-5 mx-1">©2023 Presto.it by Gruppo 4 | VU | DS | AF | GMC | GA | {{__('ui.privacyPolicy')}}</p>
    </div>
  </section>
</footer>