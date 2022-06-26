<x-layout class="">
    <x-slot name='title'>{{$category->category}}</x-slot>

    

    <div class="container mt-5">
        <div class="row mt-100">
            <div class="col-12 text-center">
                <h1 class="display-5">{{__('ui.catadsin')}} {{$category->category}}</h1>
            </div>
                        <!-- search bar -->
            {{-- <div class="col-12 col-md-6 offset-md-3 mt-2">
                <form action="{{route('searchCategoryAds',compact('category'))}}" method="get" role="search">
                    <div class="input-group">
                        <input type="text" name="searched" class="form-control" placeholder="Cerca in {{$category->category}}" aria-label="titolo annuncio" aria-describedby="basic-addon2" id="searchBar">
                        <button type="submit" class="input-group-text" id="searchBtn">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>
            </div> --}}
        </div>    
        <div class="row mt-5 ">
            @forelse ($ads as $ad)
            {{-- @dd($ad->images()->first()->path) --}}
            <div class="col-12 col-md-3 my-3">
                <a href="{{route("detailsAd", $ad)}}" class="card adCard rounded-0">
                    @if (!$ad->images()->first())
                    <img src="https://picsum.photos/180/180" class="card-img rounded-0">
                    @else
                    <img src="/../storage/{{$ad->images()->first()->path}}" class="card-img rounded-0">
                    @endif
                    <span class="adCard-cat">{{$ad->category->category}}</span>
                    <div class="card-item d-flex justify-content-between">
                        <small class="adCard-title">{{$ad->title}}</small> 
                        <small class="adCard-price text-end">{{$ad->price}}€</small>
                    </div>
                    <div class="card-item text-start">
                        <small class="adCard-author">{{$ad->user->name}}</small>                        
                    </div>
                </a>
            </div>
            @empty
            <div>
            <h2>{{__('ui.catadsno')}}</h2>
            <a class="btn btn-danger" href="{{route('createAd')}}">{{__('ui.catadsnew')}}</a>
            @endforelse
            </div>
        </div>
    </div>

</x-layout>