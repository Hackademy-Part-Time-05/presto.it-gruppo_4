

<div class="fixed-top d-flex justify-content-end gradient0">
  <button class="btn border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" id="offcanvasButton"><i class="text-light fa-solid fa-language fa-2xl"></i></button>
</div>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header accordionCustom">
    <h5 class="offcanvas-title accordionCustom" id="offcanvasScrollingLabel">SELEZIONA LA TUA LINGUA</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body accordionCustom d-flex flex-column">
    <div class="d-flex justify-content-around">
      <div class="border-bottom rounded">
        <x-_locale lang="it"/>
      </div>
      <div class="border-bottom rounded">
        <x-_locale lang="es"/>
      </div>
      <div class="border-bottom rounded">
        <x-_locale lang="en"/>  
      </div>
      <button class="btn btn-round border-bottom" id="skinButton"><i class="fa-solid fa-shirt"></i></button>
    </div>
  </div>
</div>