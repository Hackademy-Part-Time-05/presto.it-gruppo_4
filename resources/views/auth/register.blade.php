<x-main>


<div class="container mt-5">
    
    <div class="row">
        <h1 class="text-center">REGISTRATI</h1>
        <div class="col-6 mx-auto ">
            <form action="/login" method="POST">
                <div class="row g-3">
                    
                    <div class="col-12">
                        <label for="name">inserisci il tuo username</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="col-12">
                        <label for="email">inserisci la tua Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="col-12">
                        <label for="password">inserisci la tua Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="col-12">
                        <label for="password_confirmation">conferma la tua Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                    </div>
                    <div><button type="submit" class="btn btn-primary">registrati</button></div>
                </div>
            
            </form>
        </div>
    </div>
   
</div>

</x-main>