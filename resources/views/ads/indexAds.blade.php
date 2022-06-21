<x-layout>
    <x-slot name='title'>Annunci</x-slot>
    
    <div class="container padding">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-5">I nostri annunci</h1>
            </div>
            <!-- search bar -->
            <div class="col-12 col-md-6 offset-md-3 mt-2">
                <form action="" method="get" role="search">
                    <div class="input-group">
                        <input type="text" name="query" class="form-control" placeholder="Cerca" aria-label="titolo annuncio" aria-describedby="basic-addon2" id="searchBar">
                        <button type="submit" class="input-group-text" id="searchBtn">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- da qui va il foreach con dentro questa struttura --}}
        <div class="row mt-5">
            @foreach ($ads as $ad)
            <div class="col-12 col-md-3">
                <a href="{{route("detailsAd", $ad)}}" class="card">
                    <img src="https://picsum.photos/180/180" class="card-img" alt="">
                    <span class="card-cat">{{$ad->category->category}}</span>
                    <div class="card-item d-flex justify-content-between">
                        <h4 class="ad-card-title">{{$ad->title}}</h4> 
                        <p class="text-end">{{$ad->price}}€</p>
                    </div>
                    <div class="card-item">
                        <h5 class="">{{$ad->user->name}}</h5>                        
                    </div>
                </a>
            </div>
            @endforeach
            {{$ads->links()}}
        </div>
    </div>
</x-layout>