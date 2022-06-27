<x-layout>
    <x-slot name='title'>{{__('ui.titledet')}}</x-slot>
    <section class="container-fluid background">

        {{-- Container Page --}}
        <div class="container padding-top">

            {{-- Row --}}
            <div class="row justify-content-center">

                {{-- Left Col --}}
                <div class="col-12 col-sm-8 offset-md-0 col-md-6 col-lg-5 col-xl-4 m-md-0">

                    {{-- Swiper 1 --}}
                    <h2 class='text fw-bolder d-md-none'>{{$ad->title}}</h4>
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff;" class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            @if (!$ad->images()->first())
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                            </div>
                            @else
                            @foreach ($ad->images()->get() as $img)
                            <div class="swiper-slide">
                                <img src="{{$img->getUrl(300,300)}}" />
                            </div> 
                            @endforeach
                            @endif
                        </div>
                    </div>

                    {{-- Swiper 2 --}}
                    <div thumbsSlider="" class="swiper mySwiper mt-3">
                        <div class="swiper-wrapper">
                            @if (!$ad->images()->first())
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                            </div>
                            @else
                            @foreach ($ad->images()->get() as $img)
                            <div class="swiper-slide">
                                <img src="/../storage/{{$img->path}}" />
                            </div> 
                            @endforeach
                            @endif
                        </div>
                    </div>

                </div> {{-- End Left Col --}}

                {{-- Right Col --}}
                <div class="col-12 col-sm-8 offset-md-0 col-md-6 col-lg-5 col-xl-4 d-flex align-items-center mt-5 m-md-0">

                    <div class="ps-0 ps-md-4 mt-3">
                        <div>
                            <a class='text a-details btn rounded-pill' href='{{route('categoryAds', $ad->category)}}'>
                                <i class="fa-solid fa-tag"></i>
                                @switch(Lang::locale())
                                    @case("en")
                                        {{$ad->category->category_en}}
                                    @break
        
                                    @case("es")
                                        {{$ad->category->category_es}}
                                    @break
        
                                    @case("fr")
                                         {{$ad->category->category_fr}}
                                    @break
        
                                    @default
                                        {{$ad->category->category_it}}
                                    @break
                                @endswitch
                            </a>
                            <h2 class='text fw-bolder d-none d-md-block'>{{$ad->title}}</h4>
                            <h5 class='text'>{{__('ui.soldby')}}<span class="fst-italic fw-bold">{{$ad->user->name}}</span></h5>
                            <p class='text fw-bold'>{{__('ui.detailart')}}</p>
                            <p class="fw-normal">{{$ad->description}}</p>
                            <p class='price fw-bolder'>{{$ad->price}}€</p>
                            {{-- <button class="btn btn-warning px-5">Contatta il venditore</button> --}}
                        </div>
                    </div>

                </div> {{-- End Right Col --}}

            </div> {{-- End Row --}}

        </div> {{-- End Container --}}

    </section>

</x-layout>