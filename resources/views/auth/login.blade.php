<x-main>
<h1> LOGIN </h1>

<div class="container mt-5">
    <div class="row">
        <div class="col-6 mx-auto ">
            <form action="/login" method="POST">
                <div class="row g-3">
                    <div class="col-12">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="col-12">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>
            
            </form>
        </div>
    </div>
   
</div>

</x-main>