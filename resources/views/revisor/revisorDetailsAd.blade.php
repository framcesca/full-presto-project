<x-layout>
    <x-slot name='title'>{{__('ui.titledet')}}</x-slot>
    <section class="container-fluid background vh-100">

        {{-- Container Page --}}
        <div class="container padding-top">

            {{-- Row --}}
            <div class="row justify-content-center">

                {{-- Left Col: carousel --}}
                <div class="col-12 col-md-8 offset-md-0 col-lg-6 col-xl-5  m-md-0">

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
                                    <div id="revisorCarUp" class="swiper-slide">
                                        {{-- col tags --}}
                                        <div class="col-3">
                                            <small class="d-block">Tags</small>
                                            @if ($img->labels)
                                                @foreach($img->labels as $label)
                                                    <small class="d-inline">{{$label}},</small>
                                                @endforeach
                                            @endif    
                                        </div>
                                        {{-- col revisione --}}
                                        <div class="col-3">
                                            <small class="fw-bold">{{__('ui.revis')}}</small>
                                            <small class="d-block">{{__('ui.adults')}}<span class="{{$img->adult}}"></span> </small>
                                            <small class="d-block">{{__('ui.satira')}}<span class="{{$img->spoof}}"></span> </small>
                                            <small class="d-block">{{__('ui.medic')}}<span class="{{$img->medical}}"></span> </small>
                                            <small class="d-block">{{__('ui.viole')}} <span class="{{$img->violence}}"></span> </small>
                                            <small class="d-block">{{__('ui.hot')}} <span class="{{$img->racy}}"></span> </small>
                                        </div>
                                        {{-- col img --}}
                                        <div class="col-6">
                                            <img src="{{$img->getUrl(300,300)}}" />
                                        </div>
                                    
                                    </div>
                            @endforeach
                            @endif
                        </div>
                    </div>

                    {{-- Swiper 2: below --}}
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
                                <img src="{{$img->getUrl(300,300)}}" />
                            </div> 
                            @endforeach
                            @endif
                        </div>
                    </div>

                </div> 
                {{-- End Left Col --}}

                {{-- Right Col --}}
                <div class="col-12 col-md-8 offset-md-0 col-lg-6 col-xl-5  d-flex align-items-center mt-5 m-md-0">

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

                                    @case("pt")
                                    {{$ad->category->category_pt}}
                                    @break
                                    
                                    @case("ke")
                                    {{$ad->category->category_ke}}
                                    @break
        
                                    @default
                                        {{$ad->category->category_it}}
                                    @break
                                @endswitch
                            </a>
                            <h2 class='text mb-0 fw-bolder d-none d-md-block'>{{$ad->title}}</h4>
                            <h5 class='text'>{{__('ui.soldby')}}<span class="fst-italic fw-bold text-decoration-none text-primary">{{$ad->user->name}}</span></h5>
                            <p class='text fw-bold mb-0 mt-4'>{{__('ui.detailart')}}</p>
                            <p class="fw-normal">{{$ad->description}}</p>
                            <p class='price fw-bolder'>{{$ad->price}}€</p>
                            <div class="d-flex">
                                <form class="me-3" action="{{route('revisorAcceptAd', $ad,Auth::user()->id)}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn-accept rounded-circle bg-white"><i class="fa-solid fa-check"></i></button>
                                </form>
                                <form action="{{route('revisorRejectAd', $ad,Auth::user()->id)}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn-reject rounded-circle bg-white ml-5"><i class="fa-regular fa-trash-can"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div> {{-- End Right Col --}}

            </div> {{-- End Row --}}

        </div> {{-- End Container --}}

    </section>

</x-layout>


