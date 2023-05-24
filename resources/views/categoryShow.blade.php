
@php
    use Illuminate\Support\Facades\Lang;
@endphp

<x-main>
    <section class="container-fluid flex-fill m-0 p-0">
        <div class="container-fluid p-3 gradient1 shadow mb-4">
            <div class="row">
                <div class="col-12 text-light">
                    <h1 class="display-4 ms-5">{{ Lang::get('category.' . $category->name) }}</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-around">
            @forelse ($category->announcements as $index=>$announcement)
                <div class="col-12 col-md-6 col-xl-4 d-flex justify-content-center">
                    <x-announcement_card :$announcement :$index />
                </div>
            @empty
                <div class="col-12">
                    <p class="h1 m-5">{{__('ui.noListingsAvailableForThisCategory')}}</p>
                    <p class="h2 m-5">{{__('ui.publishOne')}}: <a href="{{route('announcement.create')}}" class="btn btn-success shadow rounded-pill">{{__('ui.newAdvertisement')}}</a></p>
                </div>
            @endforelse
        </div>
    </section>
</x-main>