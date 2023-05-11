<div>
    <h1>Crea il tuo annuncio</h1>

    @if (session()->has('message'))
        <div class="flex flex-row justify-center my 2 alert alert-success">
            {{session('message')}}
        </div>
    @endif

    <form wire:submit.prevent="store">
        @csrf

        <div class="mb-3">
            <label for="title">Titolo annuncio</label>
            <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror">
            <span class="text-danger">
                @error('title')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="mb-3">
            <label for="title">Descrizione</label>
            <input wire:model="body" type="text" class="form-control @error('body') is-invalid @enderror">
            <span class="text-danger">
                @error('body')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="mb-3">
            <label for="title">Prezzo</label>
            <input wire:model="price" type="text" class="form-control @error('price') is-invalid @enderror">
            <span class="text-danger">
                @error('price')
                {{$message}}
                @enderror
            </span>
        </div>

        <button type="submit" class="btn btn-primary shadow px-4 py-2">Crea</button>
    </form>
</div>
