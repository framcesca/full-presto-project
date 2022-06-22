<x-layout class="">
    <x-slot name='title'>{{$category->category}}</x-slot>

    

    <div class="container mt-5">
        <div class="row mt-100">
            <h1>{{$category->category}}</h1>
            @forelse ($category->ads as $ad)
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
            <h2>Non ci sono annunci per questa categoria</h2>
            <a class="btn btn-danger" href="{{route('createAd')}}">Nuovo annuncio</a>
            @endforelse
            </div>
        </div>
    </div>

</x-layout>