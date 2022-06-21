<x-layout>
    <x-slot name='title'>Annunci</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>I nostri annunci</h1>
            </div>
        </div>

        {{-- search bar --}}
        <div class="col-12 text-center">
            <form action="" method="get" role="search">
                <div class="input-group">
                    <input type="text" name="query" class="form-control" placeholder="Cerca" aria-label="titolo annuncio" aria-describedby="basic-addon2" id="searchBar">
                    <button type="submit" class="input-group-text" id="searchBtn">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>
        </div>


        {{-- da qui va il foreach con dentro questa struttura --}}
        <div class="row">
            <div class="col-12 col-md-3">
                <a href="" class="ad-card">
                    <img src="" class="ad-card-img" alt="">
                    <span>categoria</span>
                    <div class="ad-card-body">
                        <h4 class="ad-card-title">titolo <span class="ms-auto">prezzo</span></h4>
                        <h5 class="ad-card-title">autore </h5>                        
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-layout>