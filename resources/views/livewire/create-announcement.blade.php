<div>

    <form wire:submit.prevent="store">
        @csrf

        <div class="mb-3">
            <label for="title">Titolo annuncio</label>
            <input wire:model="title" type="text" id="inputTitleCreateAnnouncement" class="inputCostum @error('title') is-invalid @enderror">
            <span class="text-danger">
                @error('title')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="mb-3">
            <label for="title">Descrizione</label>
            <input wire:model="body" type="text" id="inputBodyCreateAnnouncement" class="inputCostum @error('body') is-invalid @enderror">
            <span class="text-danger">
                @error('body')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="mb-3">
            <label for="title">Prezzo</label>
            <input wire:model="price" type="text" id="inputPriceCreateAnnouncement" class="inputCostum @error('price') is-invalid @enderror">
            <span class="text-danger">
                @error('price')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="mb-3">
            <label for="category">Categoria</label>
            <select wire:model.defer="category" id="category" class="inputCostum">
                <option value="">Scegli la categoria</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-dark shadow px-4 py-2 rounded-pill my-3">Crea</button>
    </form>
      </div>
    
</div>
