<div>
    @if (session('message'))
        <div class="alert alert-success">
            <small>{{session('message')}}</small>
        </div>
    @endif
    <form wire:submit.prevent="submitAd">
        @csrf
        {{-- Input Title --}}
        <h6 class="input-title">{{__('ui.titad')}}</h6>
        <div class="form-floating mb-4">
            <input type="text" class="form-control" id="floatingInput" placeholder=" " wire:model="title">
            <label for="floatingInput">{{__('ui.titad')}}</label>
            @error('title') <span class="error">{{$message}}</span> @enderror
        </div>
        {{-- Input Details --}}
        <h6 class="input-title">{{__('ui.det')}}</h6>
        <div class="form-floating mb-4">
            <input type="text" class="form-control" id="floatingDescription" placeholder=" " wire:model="description">
            <label for="floatingDescription">{{__('ui.desc')}}</label>
            <small class="text-primary ps-1 d-block">* {{__('ui.descg')}}</small>
            @error('description') <span class="error">{{$message}}</span> @enderror
        </div>
        {{-- Input Category --}}
        <h6 class="input-title">{{__('ui.cate')}}</h6>
        <div class="form-floating mb-4">
            <select class="form-select" id="floatingCategories" wire:model.defer="category">
                <option hidden selected value="{{$category = ""}}">{{__('ui.selcate')}}</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category}}</option>
                @endforeach
            </select>
            <label for="floatingCategories">{{__('ui.cate')}}</label>
            @error('category') <span class="error">{{$message}}</span> @enderror
        </div>
        {{-- Input Image --}}
        <h6 class="input-title">{{__('ui.insim')}}</h6>
        <div class="mb-4">
            <input class="form-control form-control-lg" id="formFile" type="file">
        </div>
        {{-- Input Price --}}
        <h6 class="input-title">{{__('ui.pri')}}</h6>
        <div class="form-floating mb-4">
            <input type="text" class="form-control" id="floatingPrice" placeholder=" " wire:model="price">
            <label for="floatingPrice">[{{__('ui.pri')}}</label>
            @error('price') <span class="error">{{$message}}</span> @enderror
        </div>
        {{-- Submit Form Button --}}
        <div>
            <button class="form-btn" type="submit">[{{__('ui.titlenew')}}</button>
        </div>
    </form>
</div>