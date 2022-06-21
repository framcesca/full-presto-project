<x-layout>
    <x-slot name='title'>Home</x-slot>

    {{-- hero --}}
    <section class="container-fluid hero-welcome">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>È presto fatto!</h1>
                    <h2>Vendi & Compre le cose che non usi più.</h2>
                    <a href="{{route('createAd')}}">Entra in presto</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h2>Le categorie</h2>
                </div>
            </div>
        </div>
    </section>


    <section class="container-fluid">
        <div class="row">
            @foreach ($categories as $category)               
            <div class="col-12 col-md-6 col-lg-3 p-0">
                <a href="">
                    <div class="category-card">
                        <img src="media/categoryLibri.png" alt="">
                    </div>
                    <div class="card-hover">
                        {{-- inserire categoria --}}
                       <h3>{{$category->category}}</h3> 
                    </div>
                </a>
            </div>
            @endforeach
            
        </div>
    </section>

    <section class="container">
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="col-12 ">
                        <a href="" class="card ad-card">
                            <img src="https://picsum.photos/180/180" class="card-img" alt="">
                            <span class="card-cat">categoria</span>
                            <div class="card-item d-flex justify-content-between">
                                <h4 class="ad-card-title">titolo</h4> 
                                <p class="text-end">prezzo</p>
                            </div>
                            <div class="card-item">
                                <h5 class="ad-card-author">autore </h5>                        
                            </div>
                        </a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="col-12 ">
                        <a href="" class="card ad-card">
                            <img src="https://picsum.photos/180/180" class="card-img" alt="">
                            <span class="card-cat">categoria</span>
                            <div class="card-item d-flex justify-content-between">
                                <h4 class="ad-card-title">titolo</h4> 
                                <p class="text-end">prezzo</p>
                            </div>
                            <div class="card-item">
                                <h5 class="ad-card-author">autore </h5>                        
                            </div>
                        </a>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="col-12 ">
                        <a href="" class="card ad-card">
                            <img src="https://picsum.photos/180/180" class="card-img" alt="">
                            <span class="card-cat">categoria</span>
                            <div class="card-item d-flex justify-content-between">
                                <h4 class="ad-card-title">titolo</h4> 
                                <p class="text-end">prezzo</p>
                            </div>
                            <div class="card-item">
                                <h5 class="ad-card-author">autore </h5>                        
                            </div>
                        </a>
                    </div>
                </div>

            

                <div class="swiper-slide">
                    <div class="col-12 ">
                        <a href="" class="card ad-card">
                            <img src="https://picsum.photos/180/180" class="card-img" alt="">
                            <span class="card-cat">categoria</span>
                            <div class="card-item d-flex justify-content-between">
                                <h4 class="ad-card-title">titolo</h4> 
                                <p class="text-end">prezzo</p>
                            </div>
                            <div class="card-item">
                                <h5 class="ad-card-author">autore </h5>                        
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        
            
            
            <!--  pagination -->
            <div class="swiper-pagination"></div>
            <!--  navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>
</x-layout>