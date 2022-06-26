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
        <div class="row">

            @foreach ($categories as $category)     
            <div class="col-12 col-md-6 col-lg-3 p-0 cat-card">
                <a href="{{route('categoryAds',compact('category'))}}">
                    <div class="cat-card1" style="background: url({{$category->img}});">
                        {{-- <img src="media/categoryLibri.png" alt="" class="category-card-img"> --}}
                        <div class="cat-card2" style="background: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url({{$category->img}});">
                            {{-- inserire categoria --}}
                           <h3 class="cat-card2-title">{{$category->category}}</h3> 
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            
        </div>
    </section>

    {{-- Swiper Section --}}
    <section class="container swiper-home-section">

        {{-- Row --}}
        <div class="row">

            {{-- Col --}}
            <div class="col-12">

                {{-- Section Title --}}
                <h2 class="text-center">Scopri gli ultimi annunci</h2>

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
                                    <img src="./storage/{{$ad->images()->first()->path}}" class="card-img rounded-0">
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