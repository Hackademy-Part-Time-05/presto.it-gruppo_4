
@section('title')
    Presto.it - {{__('ui.login')}}
@endsection

<x-main>
    <section class="container-sm my-5">
        <div class="row justify-content-center">
            <form action="/login" class="col-12 col-md-6 gradient0 shadow my-5" method="POST">
                @csrf
                <h1 class="mt-4 fst-italic fw-bold px-5 px-md-2">{{__('ui.LOGIN')}}</h1>
                <div class="my-3 px-5 px-md-2">
                    <label for="email" class="m-2">Email</label>
                    <input type="text" class="imputRegisterLoginCustom" name="email">
                    @error('email') <span class="text-danger fs-5">{{$message}}</span>@enderror
                </div>
                <div class="px-5 px-md-2">
                    <label class="m-2" for="password">{{__('ui.password')}}</label>
                    <input type="password" class="imputRegisterLoginCustom" name="password">
                    @error('password') <span class="fs-5 text-danger">{{$message}}</span>@enderror
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-dark my-5 fst-italic shadow rounded-pill">{{__('ui.login')}}</button>
                </div>
            </form>
        </div>
    </section>
</x-main>