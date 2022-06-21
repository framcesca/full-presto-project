<div>
    @if (session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif
    <form wire:submit.prevent="submitAd">
        <div class="form-floating mb-3">
            <label for="floatingInput">Titolo</label>
            <input type="text" class="form-control" id="floatingInput" placeholder=" " wire:model="title">
        </div>
        <div class="form-floating">
            <label for="floatingPassword">Descrizione</label>
            <input type="text" class="form-control" id="floatingPassword" placeholder=" " wire:model="description">
        </div>
        <div class="form-floating">
            <label for="floatingPassword">Prezzo</label>
            <input type="text" class="form-control" id="floatingPassword" placeholder=" " wire:model="price">
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