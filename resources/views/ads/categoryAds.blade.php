<x-layout class="">
    <x-slot name='title'>{{$category->category}}</x-slot>

    

    <div class="container mt-5">
        <div class="row mt-5">
            <h1>{{$category->category}}</h1>
            @forelse ($category->ads as $ad)
            <div class="col-12 col-md-3 ">
                <a href="{{route("detailsAd", $ad)}}" class="card">
                    <img src="https://picsum.photos/180/180" class="card-img" alt="">
                    <span class="card-cat">{{$category->category}}</span>
                    <div class="card-item d-flex justify-content-between">
                        <h4 class="ad-card-title">{{$ad->title}}</h4> 
                        <p class="text-end">{{$ad->price}}</p>
                    </div>
                    <div class="card-item">
                        <h5 class="ad-card-author">{{$ad->user->name}} </h5>                        
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