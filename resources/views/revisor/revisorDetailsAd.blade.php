<x-layout>
    
    <x-slot name='title'>Dettagli annuncio revisore</x-slot>
    <section class="container-fluid background">
        <div class="container paddingtop">
            {{-- <x-gmdi-arrow-back-ios-new-s class="arrow"/>Torna agli annunci --}}
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h1>
                        {{$ad ? 'Annuncio da revisionare': 'Non ci sono annunci da revisionare'}}
                    </h1>
                </div>
                @if($ad)
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div
                            style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff;"
                            class="swiper mySwiper2">
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
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper">
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
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <a class='text' href='{{$ad->category->category}}'>
                            <a href="{{route('categoryAds', $ad->category)}}" class='text'>{{$ad->category->category}}</a>
                            <h4 class='text'>{{$ad->title}}</h4>
                            <h5 class='text'>Venduta da {{$ad->user->name}}</h5>
                            <p class='text'>{{$ad->description}}</p>
                            <p class='price'>{{$ad->price}} Euro</p>
                            <form action="{{route('revisorAcceptAd', $ad)}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-warning px-5">Accetta annuncio</button>
                            </form>
                            <form action="{{route('revisorRejectAd', $ad)}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-danger px-5">Rifiuta annuncio</button>
                            </form>
                        </a>                        
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
</x-layout>