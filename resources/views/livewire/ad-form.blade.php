<div>
    @if (session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif
    <form wire:submit.prevent="submitAd">
        @csrf
        {{-- Input Title --}}
        <h6 class="input-title">Titolo del tuo annuncio</h6>
        <div class="form-floating mb-4">
            <input type="text" class="form-control" id="floatingInput" placeholder=" " wire:model="title">
            <label for="floatingInput">Titolo</label>
            @error('title') <span class="error">{{$message}}</span> @enderror
        </div>
        {{-- Input Details --}}
        <h6 class="input-title">Dettagli</h6>
        <div class="form-floating mb-4">
            <input type="text" class="form-control" id="floatingDescription" placeholder=" " wire:model="description">
            <label for="floatingDescription">Descrizione</label>
            @error('description') <span class="error">{{$message}}</span> @enderror
        </div>
        {{-- Input Category --}}
        <h6 class="input-title">Categoria</h6>
        <div class="form-floating mb-4">
            <select class="form-select" id="floatingCategories" wire:model.defer="category">
                <option hidden selected value="{{$category = ""}}">Seleziona categoria</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category}}</option>
                @endforeach
            </select>
            <label for="floatingCategories">Categoria</label>
            @error('category') <span class="error">{{$message}}</span> @enderror
        </div>
        {{-- Input Image --}}
        {{-- <div class="mb-4">
            <input class="form-control form-control-lg" id="formFile" type="file">
        </div> --}}
        {{-- Input Price --}}
        <h6 class="input-title">Prezzo</h6>
        <div class="form-floating mb-4">
            <input type="text" class="form-control" id="floatingPrice" placeholder=" " wire:model="price">
            <label for="floatingPrice">Prezzo</label>
            @error('price') <span class="error">{{$message}}</span> @enderror
        </div>
        {{-- Submit Form Button --}}
        <div>
            <button class="form-btn" type="submit">Crea Annuncio</button>
        </div>
    </form>
</div>