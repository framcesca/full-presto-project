<div>
    @if (session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif
    <form wire:submit.prevent="submitAd">
        @csrf
        <div class="form-floating mb-3">
            <label for="floatingInput">Titolo</label>
            <input type="text" class="form-control" id="floatingInput" placeholder=" " wire:model="title">
            @error('title') <span class="error">{{$message}}</span> @enderror
        </div>
        <div class="form-floating">
            <label for="floatingPassword">Descrizione</label>
            <input type="text" class="form-control" id="floatingPassword" placeholder=" " wire:model="description">
            @error('description') <span class="error">{{$message}}</span> @enderror
        </div>
        <div class="form-floating">
            <label for="floatingPassword">Prezzo</label>
            <input type="text" class="form-control" id="floatingPassword" placeholder=" " wire:model="price">
            @error('price') <span class="error">{{$message}}</span> @enderror
        </div>
        <div class="form-floating">
            <select class="form-select" id="floatingSelectGrid" wire:model.defer="category">
                <option hidden selected value="{{$category = ""}}">Seleziona categoria</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category}}</option>
                @endforeach
            </select>
            <label for="floatingSelectGrid">Categoria</label>
            @error('category') <span class="error">{{$message}}</span> @enderror
        </div>
        <div>
            <button type="submit">Crea</button>
        </div>
    </form>
</div>