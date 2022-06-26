<x-layout>
    <x-slot name='title'>{{__('ui.titlenew')}}</x-slot>

    {{-- Container Fluid --}}
    <div class="container-fluid bg-container-fluid">

        {{-- Container Margin --}}
        <div class="container">

            {{-- Wrapping Container Form --}}
            <div class="container-ad-form">
                <h1 class="text-center mb-5">{{__('ui.createad')}}</h1>

                {{-- Row --}}
                <div class="row">

                    {{-- Left Col --}}
                    <div class="form-box col-12 col-md-6 col-lg-5 col-xl-4 ms-auto">
                        <div class="w-100">
                            <livewire:ad-form></livewire:ad-form>
                        </div>
                    </div>

                    {{-- Right Col --}}
                    <div class="col-12 col-md-6 col-lg-5 col-xl-4 m-auto mt-5 mt-md-auto">

                        {{-- Card --}}
                        <div class="card adCard rounded-0 m-auto">

                            @if (true)
                                {{-- Place Holder Images Card Swiper --}}
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
                            @else
                                {{-- User Images Card Swiper --}}
                                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff;" class="swiper mySwiper2">
                                    <div class="swiper-wrapper">
                                        @foreach ($images as $image)
                                        <div class="swiper-slide">
                                            <img src="{{$image}}" />
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            {{-- Card Details --}}
                            @if (true)
                                <span class="adCard-cat z-index-upper">Sport</span>
                            @else
                                <span class="adCard-cat z-index-upper">{{$category}}</span>
                            @endif

                            <div class="card-item d-flex justify-content-between">
                                {{-- Ad Title --}}
                                @if (true)
                                    <small class="adCard-title">Tavola da Surf</small>
                                @else
                                    <small class="adCard-title">{{$title}}</small>
                                @endif
                                
                                {{-- Ad Price --}}
                                @if (true)
                                    <small class="adCard-price text-end">267€</small>
                                @else
                                    <small class="adCard-price text-end">{{$price}}</small>
                                @endif
                            </div>

                            {{-- Ad Author --}}
                            <div class="card-item text-start">
                                <small class="adCard-author">{{Auth::user()->name}}</small>                        
                            </div>

                        </div>

                        @if (true)
                            {{-- Place Holder Images Swiper --}}
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
                        @else
                            {{-- User Images Swiper --}}
                            <div thumbsSlider="" class="swiper mySwiper mt-3">
                                <div class="swiper-wrapper">
                                    @foreach ($images as $image)
                                    <div class="swiper-slide">
                                        <img src="{{$image}}" />
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                    </div> {{-- End Right Col --}}

                </div> {{-- End Row --}}

            </div> {{-- End Wrapping Container Form --}}

        </div> {{-- End Container Fluid --}}

    </div> {{-- End Container Fluid --}}

</x-layout>