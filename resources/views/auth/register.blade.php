<x-main>
    <section class="container my-5">
        <div class="row justify-content-center">
            <form action="/register" class="col-6 bg-green shadow my-5" method="POST">
                @csrf
                <h1 class="mt-4 fst-italic fw-bold">REGISTRATI</h1>
                <div class="my-3">
                    <label for="name" class="m-2">Username</label>
                    <input type="text" class="form-control" name="name">
                    @error('name') <span class="danger">{{$message}}</span>@enderror
                </div>
                <div class="my-3">
                    <label for="email" class="m-2">Email</label>
                    <input type="text" class="form-control" name="email">
                    @error('email') <span class="danger">{{$message}}</span>@enderror
                </div>
                <div>
                    <label class="m-2" for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div>
                    <label class="m-2" for="password_confirmation">Conferma Password</label>
                    <input type="password" class="form-control" name="password_confirmation">
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary my-5 fst-italic shadow">Registrati</button>
                </div>
            </form>
        </div>
    </section>
</x-main>