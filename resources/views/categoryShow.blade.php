{{-- <x-main>
    <div class="container my-5">
        <h1 class="fw-bold">Esplora la categoria {{$category->name}}</h1>
                <div class="row justify-content-start">
                    @forelse ($category->announcements as $announcement)
                    <div class="col-12 col-md-6 col-xl-3">
                        <x-announcement_card :$announcement />
                    </div>
                    @empty
                    <div class="col-12">
                    <p class="h1">Non sono presenti annunci per questa categoria!</p>
                    <p class="h2">Pubblicane uno: <a href="{{route('announcement.create')}}" class="btn btn-success shadow">Nuovo annuncio</a></p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-main> --}}
{{-- <x-main>
    
    <x-rack :$category />
</x-main> --}}
<x-main>
    <section class="container my-5">
        <h1 class="fw-bold">Titolo</h1>
        <div class="row justify-content-start">
            @forelse ($category->announcements as $index=>$announcement)
                        <div class="col-12 col-md-6 col-xl-4 d-flex justify-content-center">
                            <x-announcement_card :$announcement :$index />
                        </div>
                        @empty
                        <div class="col-12">
                        <p class="h1">Non sono presenti annunci per questa categoria!</p>
                        <p class="h2">Pubblicane uno: <a href="{{route('announcement.create')}}" class="btn btn-success shadow">Nuovo annuncio</a></p>
                        </div>
                        @endforelse
        </div>
    </section>
</x-main>