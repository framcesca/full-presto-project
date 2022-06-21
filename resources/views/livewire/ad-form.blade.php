<div>
    <form wire:submit.prevent="submitAd">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder=" " wire:model="title">
            <label for="floatingInput">Titolo</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingPassword" placeholder=" " wire:model="description">
            <label for="floatingPassword">Descrizione</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingPassword" placeholder=" " wire:model="price">
            <label for="floatingPassword">Prezzo</label>
        </div>
        <div class="form-floating">
            <select class="form-select" id="floatingSelectGrid" wire:model.defer="category">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category}}</option>
                @endforeach
            </select>
            <label for="floatingSelectGrid">Categoria</label>
        </div>
        <div>
            <button type="submit">Crea</button>
        </div>
    </form>
</div>