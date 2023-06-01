@section('title')
    Presto.it - {{__('ui.announcements')}}
@endsection

<x-main>
    <div class="container-fluid p-3 gradient1 shadow mb-4">
        <div class="row">
            <div class="col-12 text-light">
                <h1 class="display-4 ms-5">{{__('ui.announcements')}}</h1>
            </div>
        </div>
    </div>
    <section class="container flex-grow-1">
        <div class="row justify-content-center d-flex">
            @foreach ($announcements as $announcement)
            <div class="col-12 col-md-6 col-xl-4 d-flex justify-content-center my-0">
                <x-announcement_card :$announcement />
            </div>
            @endforeach
        </div>
    </section>
</x-main>