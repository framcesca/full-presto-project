<x-layout>
    <x-slot name='title'>Dettagli annuncio</x-slot>
    <section class="container-fluid background">

        {{-- Container Page --}}
        <div class="container padding-top">

            {{-- Row --}}
            <div class="row justify-content-center">

                {{-- Left Col --}}
                <div class="col-12 col-md-6 col-lg-5 col-xl-4">

                    {{-- Swiper 1 --}}
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff;" class="swiper mySwiper2">
                        <div class="swiper-wrapper">
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
                        </div>
                    </div>

                    {{-- Swiper 2 --}}
                    <div thumbsSlider="" class="swiper mySwiper mt-3">
                        <div class="swiper-wrapper">
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
                        </div>
                    </div>

                </div> {{-- End Left Col --}}

                {{-- Right Col --}}
                <div class="col-12 col-md-6 col-lg-5 col-xl-4 d-flex align-items-center">

                    <div class="m-auto">
                        <a class='text' href='{{$ad->category->category}}'>
                            <a href="{{route('categoryAds', $ad->category)}}" class='text'>{{$ad->category->category}}</a>
                            <h3 class='text fw-bolder'>{{$ad->title}}</h4>
                            <h5 class='text'>Venduto da <span class="fst-italic fw-bold">{{$ad->user->name}}</span></h5>
                            <p class='text fw-bold'>Dettagli articolo:<span class="fw-normal"><br>{{$ad->description}}</span></p>
                            <p class='price fw-bolder'>{{$ad->price}}€</p>
                            {{-- <button class="btn btn-warning px-5">Contatta il venditore</button> --}}
                        </a>
                    </div>

                </div> {{-- End Right Col --}}

            </div> {{-- End Row --}}

        </div> {{-- End Container --}}

    </section>

</x-layout>