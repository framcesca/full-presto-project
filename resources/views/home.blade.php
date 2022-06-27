<x-layout>
    <x-slot name='title'>Home</x-slot>
    @if (\Session::has('access.denied'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('access.denied') !!}</li>
        </ul>
    </div>
@endif
    {{-- hero --}}
    <section class="container-fluid hero-welcome">
        <div class="container">
            <div class="row align-items-center justify-content-center vh-100">
                <div class="col-12">
                    <h1 class="display-2 fw-semibold">{{__('ui.fatto')}}</h1>
                    <h2 class="fs-3 fw-semibold">{{__('ui.sell')}}</h2>
                    <a href="{{route('createAd')}}" class="btn hero-btn">{{__('ui.entry')}}</a>
                </div>

                <div class="col-12 align-self-end text-center mt-0 pt-0">
                    <h2 class="cat-title">{{__('ui.categ')}}</h2>
                </div>
            </div>

        </div>
    </section>


    <section class="container-fluid">
         <livewire:category-selector/>
    </section>

    {{-- Swiper Section --}}
    <section class="container swiper-home-section">

        {{-- Row --}}
        <div class="row">

            {{-- Col --}}
            <div class="col-12">

                {{-- Section Title --}}
                <h2 class="text-center">{{__('ui.discover')}}</h2>

                {{-- Swiper --}}
                <div class="swiper swiper-home">

                    {{-- Swiper Wrapper --}}
                    <div class="swiper-wrapper">
                        
                        {{-- Swiper Pages --}}
                        @foreach ($ads as $ad)
                            <div class="swiper-slide">
                                <a href="{{route("detailsAd", $ad)}}" class="card adCard rounded-0 w-100">
                                    @if (!$ad->images()->first())
                                    <img src="https://picsum.photos/180/180" class="card-img rounded-0">
                                    @else
                                    <img src="{{$ad->images()->first()->getUrl(300,300)}}" class="card-img rounded-0">
                                    @endif

                                    @switch(Lang::locale())
                                        @case("en")
                                            <span class="adCard-cat">{{$ad->category->category_en}}</span>
                                        @break
            
                                        @case("es")
                                            <span class="adCard-cat">{{$ad->category->category_es}}</span>
                                        @break
            
                                        @case("fr")
                                            <span class="adCard-cat">{{$ad->category->category_fr}}</span>
                                        @break
            
                                        @default
                                            <span class="adCard-cat">{{$ad->category->category_it}}</span>
                                        @break
                                    @endswitch
                                    
                                    <div class="card-item d-flex justify-content-between">
                                        <small class="adCard-title">{{$ad->title}}</small> 
                                        <small class="adCard-price text-end">{{$ad->price}}€</small>
                                    </div>
                                    <div class="card-item text-start">
                                        <small class="adCard-author">{{$ad->user->name}}</small>                        
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div> {{-- End Swiper Wrapper --}}

                    {{-- Pagination --}}
                    <div class="swiper-pagination"></div>

                    {{-- Navigation Buttons --}}
                    <div class="swiper-button-prev d-none d-md-flex"></div>
                    <div class="swiper-button-next d-none d-md-flex"></div>

                </div> {{-- End Swiper --}}
                
            </div> {{-- End Col --}}

        </div>
    </section>
</x-layout>