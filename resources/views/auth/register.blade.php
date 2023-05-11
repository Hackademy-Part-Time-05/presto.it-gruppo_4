<x-main>
<div class="container mt-5">
    <div class="row">
        <div class="col-6 mx-auto ">
            <h1 class="text-center">REGISTRATI</h1>
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-12">
                        <label for="name">inserisci il tuo username</label>
                        <input type="text" name="name" id="name" class="form-control">
                        <span class="text-danger">
                            @error('name')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="col-12">
                        <label for="email">inserisci la tua Email</label>
                        <input type="text" name="email" class="form-control">
                        <span class="text-danger">
                            @error('email')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="col-12">
                        <label for="password">inserisci la tua Password</label>
                        <input type="password" name="password" class="form-control">
                        <span class="text-danger">
                            @error('password')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="col-12">
                        <label for="password_confirmation">conferma la tua Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                        <span class="text-danger">
                            @error('password_confirmation')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div><button type="submit" class="btn btn-primary">registrati</button></div>
                </div>
            
            </form>
        </div>
    </div>
   
</div>
</x-main>