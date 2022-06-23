<x-layout>
    <x-slot name='title'>Annunci</x-slot>
    
    <div class="container padding">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-5">I nostri annunci</h1>
            </div>
            <!-- search bar -->
            <div class="col-12 col-md-6 offset-md-3 mt-2">
                <form action="{{route('searchAds')}}" method="get" role="search">
                    <div class="input-group">
                        <input type="text" name="searched" class="form-control" placeholder="Cerca" aria-label="titolo annuncio" aria-describedby="basic-addon2" id="searchBar">
                        <button type="submit" class="input-group-text" id="searchBtn">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- da qui va il foreach con dentro questa struttura --}}
        <div class="row mt-5 ">
            @forelse ($ads as $ad)
                <div class="col-12 col-md-3 my-3">
                    <a href="{{route("detailsAd", $ad)}}" class="card adCard rounded-0">
                        <img src="https://picsum.photos/180/180" class="card-img rounded-0" alt="">
                        <span class="adCard-cat">{{$ad->category->category}}</span>
                        <div class="card-item d-flex justify-content-between">
                            <small class="adCard-title">{{$ad->title}}</small> 
                            <small class="adCard-price text-end">{{$ad->price}}€</small>
                        </div>
                        <div class="card-item">
                            <small class="adCard-author text-start">{{$ad->user->name}}</small>                        
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-12">
                    <h2>La ricerca non ha prodotto risultati</h2>
                </div>
            @endforelse
            {{$ads->links()}}
        </div>
    </div>
</x-layout>
