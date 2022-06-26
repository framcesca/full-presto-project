<div class="row">
    {{-- Left Col --}}
    <div class="form-box col-12 col-md-6 col-lg-5 col-xl-4 ms-auto">
        <div class="w-100">
            <div>
                @if (session('message'))
                    <div class="alert alert-success">
                        <small>{{session('message')}}</small>
                    </div>
                @endif
                <form wire:submit.prevent="submitAd">
                    @csrf
                    {{-- Input Title --}}
                    <h6 class="input-title">{{__('ui.titad')}}</h6>
                    <div class="form-floating mb-4">
                        <input wire:change="restartCarousel" type="text" class="form-control" id="floatingInput" placeholder=" " wire:model="title">
                        <label for="floatingInput">{{__('ui.tit')}}</label>
                        @error('title') <span class="error">{{$message}}</span> @enderror
                    </div>
                    {{-- Input Details --}}
                    <h6 class="input-title">{{__('ui.det')}}</h6>
                    <div class="form-floating mb-4">
                        <input wire:change="restartCarousel" type="text" class="form-control" id="floatingDescription" placeholder=" " wire:model="description">
                        <label for="floatingDescription">{{__('ui.desc')}}</label>
                        <small class="text-primary ps-1 d-block">* {{__('ui.descg')}}</small>
                        @error('description') <span class="error">{{$message}}</span> @enderror
                    </div>
                    {{-- Input Category --}}
                    <h6 class="input-title">{{__('ui.cate')}}</h6>
                    <div class="form-floating mb-4">
                        <select wire:change="restartCarousel" class="form-select" id="floatingCategories" wire:model.defer="category">
                            <option hidden selected value="{{$category = ""}}">{{__('ui.selcate')}}</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->category}}</option>
                            @endforeach
                        </select>
                        <label for="floatingCategories">{{__('ui.cate')}}</label>
                        @error('category') <span class="error">{{$message}}</span> @enderror
                    </div>
                    {{-- Input Image --}}
                    <h6 class="input-title">{{__('ui.insim')}}</h6>
                    <div class="mb-4">
                        <input wire:change="restartCarousel" wire:model="temporary_images" name="images" multiple class="form-control form-control-lg @error('temporary_images.*') is-invalid @enderror" id="formFile" type="file">
                        @error('temporary_images.*')
                            <span class="error">{{$message}}</span>
                        @enderror
                    </div>
                    {{-- Input Price --}}
                    <h6 class="input-title">{{__('ui.pri')}}</h6>
                    <div class="form-floating mb-4">
                        <input wire:change="restartCarousel" type="text" class="form-control" id="floatingPrice" placeholder=" " wire:model="price">
                        <label for="floatingPrice">{{__('ui.pri')}}</label>
                        @error('price') <span class="error">{{$message}}</span> @enderror
                    </div>
                    {{-- Submit Form Button --}}
                    <div>
                        <button class="form-btn" type="submit">{{__('ui.titlenew')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Right Col --}}
    <div class="col-12 col-md-6 col-lg-5 col-xl-4 m-auto mt-5 mt-md-auto">

        {{-- Card --}}
        <div class="card adCard rounded-0 m-auto">

            @if(empty($images))
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
                        @foreach($images as $key=> $image)
                        <div class="swiper-slide">
                            <img class="img-fluid" src="{{$image->temporaryUrl()}}" />
                        </div>
                        @endforeach
                    </div>
                </div>
            @endif
            {{-- Card Details --}}
            @if(!$this->category)
                <span class="adCard-cat z-index-upper">Sport</span>
            @else
                <span class="adCard-cat z-index-upper">{{App\Models\Category::find($this->category)->category}}</span>
            @endif

            <div class="card-item d-flex justify-content-between">
                {{-- Ad Title --}}
                @if (!$this->title)
                    <small class="adCard-title">Tavola da Surf</small>
                @else
                    <small class="adCard-title">{{$title}}</small>
                @endif
                
                {{-- Ad Price --}}
                @if (!$this->price)
                    <small class="adCard-price text-end">267€</small>
                @else
                    <small class="adCard-price text-end">{{$price}}€</small>
                @endif
            </div>

            {{-- Ad Author --}}
            <div class="card-item text-start">
                <small class="adCard-author">{{Auth::user()->name}}</small>                        
            </div>

        </div>

        @if(empty($images))
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
                    @foreach($images as $key => $image)
                    <div class="swiper-slide d-flex flex-column">
                        <img class="img-fluid mb-2" src="{{$image->temporaryUrl()}}" />
                        <button wire:click="removeImage({{$key}})" type="button" class="btn-reject rounded-circle bg-white ml-5"><i class="fa-regular fa-trash-can"></i></button>
                    </div>
                    @endforeach
                </div>
            </div>
        @endif

    </div> {{-- End Right Col --}}
</div>