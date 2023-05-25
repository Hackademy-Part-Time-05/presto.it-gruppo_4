<x-main>
    <section class="container my-5">
        <div class="row justify-content-center">
            <form action="/register" class="col-6 gradient0 shadow my-5" method="POST">
                @csrf
                <h1 class="mt-4 fst-italic fw-bold">{{__('ui.REGISTER')}}</h1>
                <div class="my-3">
                    <label for="name" class="m-2">{{__('ui.username')}}</label>
                    <input type="text" class="imputRegisterLoginCustom" name="name">
                    @error('name') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="my-3">
                    <label for="email" class="m-2">Email</label>
                    <input type="text" class="imputRegisterLoginCustom" name="email">
                    @error('email') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div>
                    <label class="m-2" for="password">{{__('ui.password')}}</label>
                    <input type="password" class="imputRegisterLoginCustom" name="password">
                    @error('password') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div>
                    <label class="m-2" for="password_confirmation">{{__('ui.confirmpassword')}}</label>
                    <input type="password" class="imputRegisterLoginCustom" name="password_confirmation">
                    @error('password_confirmation') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-dark my-5 fst-italic shadow rounded-pill">{{__('ui.register')}}</button>
                </div>
            </form>
        </div>
    </section>
</x-main>