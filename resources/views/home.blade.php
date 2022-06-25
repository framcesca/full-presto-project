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
                    <h1 class="display-2 fw-semibold">È presto fatto!</h1>
                    <h2 class="fs-3 fw-semibold">Vendi & Compra le cose che non usi più.</h2>
                    <a href="{{route('createAd')}}" class="btn hero-btn">Entra in presto</a>
                </div>

                <div class="col-12 align-self-end text-center mt-0 pt-0">
                    <h2 class="cat-title">Le categorie</h2>
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

    <section class="container">
        <!-- Slider main container -->
        <div>
            <h1 class="text-center my-5">Scopri gli ultimi annunci</h1>
        </div>
        <div class="row my-1 my-md-5">
            <div class="col-12">
                <div class="swiper swiper-home p-5">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @foreach ($ads as $ad)
                        <div class="swiper-slide">
                            <div class="col-12">
                                <a href="{{route("detailsAd", $ad)}}" class="card adCard rounded-0">
                                    <img src="https://picsum.photos/180/180" class="card-img rounded-0" alt="">
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
                        </div>
                        @endforeach
                    </div>
                
                    
                    
                    <!--  pagination -->
                    <div class="swiper-pagination"></div>
                    <!--  navigation buttons -->
                    <div class="swiper-button-prev d-none d-md-flex"></div>
                    <div class="swiper-button-next d-none d-md-flex"></div>
                </div>              
            </div>
        </div>
    </section>
</x-layout>