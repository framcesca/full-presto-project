<x-layout>
    <x-slot name='title'>Dettagli annuncio</x-slot>
    <section class="container-fluid background">
        <div class="container paddingtop">
            <x-gmdi-arrow-back-ios-new-s class="arrow"/>Torna agli annunci
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <img class="img-fluid" src="https://picsum.photos/500/500" alt="image">
                </div>
                <div class="col-md-5">
                    <div>
                        <br>
                    </div>
                    <a class='text' href='{{$ad->category->category}}'>
                    <h4 class='text'>{{$ad->title}}</h3>
                    <h5 class='text'>Venduta da {{$ad->user->name}}</h5>
                    <p class='text'>{{$ad->description}}</p>
                    <p class='price'>{{$ad->price}} Euro</p>
                    <button class="btn btn-warning px-5">Contatta il venditore</button>
                </div>                        
            </div>
        </div>
</section>
</x-layout>

