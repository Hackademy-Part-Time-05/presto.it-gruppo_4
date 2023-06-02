
<!--da questa pagina si richiama il contenuto di $this-->


<x-main>
    <x-header />
    
    <x-statistic/>


    <section class="container-fluid flex-grow-1 border-top border-dark">

        <div>
            <h2 class="fw-bold text-center mt-4">
                {{__('ui.recentAds')}}
            </h2>
        </div>

        <div class="row justify-content-center d-flex">
            @foreach ($announcements->take(5) as $announcement)
            <div class="col-12 col-md-2 d-flex justify-content-center my-0">
                <x-announcement_card :$announcement />
            </div>
            @endforeach
        </div>
    </section>
    
    <x-recensioni/>

    {{-- <section class="container-fluid flex-grow-1">
        <div class="row h-100">
            <div class="col-12 bg-blue">
                <h2 class="display-2 text-light">
                    Il modo più veloce per vendere le tue cose
                </h2>
            </div>
        </div>
        <div class="row h-100">
            <div class="col-12 bg-green">
                <h2 class="display-2 text-dark">Vendi in sicurezza in tutto il mondo</h2>
            </div>
        </div>
    </section> --}}
    {{-- <div class="container my-2 my-md-5">
        <h1 class="fw-bold">Annunci</h1>
                <div class="row justify-content-start">
                    @foreach ($announcements as $announcement)
                    <div class="col-12 col-md-6 col-xl-4 d-flex justify-content-center">
                        <x-announcement_card :$announcement />
                    </div>
                    @endforeach
                </div>
    </div> --}}
</x-main>