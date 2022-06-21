<x-layout>
    <x-slot name='title'>Dettagli annuncio</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p>{{$ad->title}}</p>
                <p>{{$ad->price}}</p>
                <p>{{$ad->description}}</p>
                <p>{{$ad->user->name}}</p>
                <p>{{$ad->category->category}}</p>
            </div>
        </div>
    </div>
</x-layout>