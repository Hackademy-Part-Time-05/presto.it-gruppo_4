<x-main>
    <div class="container-fluid p-5 gradient1 shadow mb-4">
        <div class="row">
            <div class="col-12 text-light">
                <h1 class="display-2">Annunci</h1>
            </div>
        </div>
    </div>
    <section class="container">
        <div class="row justify-content-center d-flex">
            @foreach ($announcements as $announcement)
            <div class="col-4">
                <x-announcement_card :$announcement />
            </div>
            @endforeach
        </div>
    </section>
</x-main>