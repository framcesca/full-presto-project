<x-layout>
    <x-slot name='title'>Profilo di {{$author->name}}</x-slot>

    {{-- Container View --}}
    <div class="container">

        {{-- Padding Top --}}
        <div class="authorProfile-padding-top">

            {{-- Main Row --}}
            <div class="row">

                {{-- Left Col --}}
                <div class="col-12 col-lg-4">

                    {{-- Section Basic Informations --}}
                    <section class="row authorProfile-boxModel d-flex px-4 py-3 m-0">
                        <div class="col-12 col-xl-4 d-flex justify-content-center">
                            @if($author->profile != null && $author->profile->avatar_profile)
                                <img class="avatarAuthorProfile" src="/storage/{{$author->profile->avatar_profile}}">
                            @else
                                <img class="avatarAuthorProfile" src="/media/avatarProfile.jpg">
                            @endif
                        </div>
                        <div class="col-12 col-xl-8 authorProfile-details d-flex flex-column justify-content-center mt-3 mt-xl-0">
                            <h5 class="m-0 fw-bold text-center text-xl-start">{{$author->name}}</h5>
                            <p class="m-0 text-center text-xl-start">{{$author->profile->city}}, {{$author->profile->country}}</p>
                        </div>
                    </section>

                    {{-- Section Bio --}}
                    <section class="revisor-card p-4 mt-4">
                        <div class="authorProfile-bio">
                            <h5 class="fw-bold">Bio</h5>
                            <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, aspernatur iste consequatur ab mollitia autem quis nihil ducimus esse officiis.</p>
                        </div>
                    </section>

                    {{-- Section Contacts --}}
                    <section class="revisor-card p-4 mt-4">
                        <div class="authorProfile-contacts">
                            <h5 class="fw-bold">Contatti</h5>
                            <h6 class="mt-3"><span class="me-3"><i class="fa-solid fa-phone"></i></span>+39 358 482 8799</h6>
                            <h6 class="mt-3"><span class="me-3"><i class="fa-solid fa-envelope"></i></span>{{$author->email}}</h6>
                        </div>
                    </section>

                </div> {{-- End Left Col --}}

                {{-- Right Col --}}
                <div class="col-12 col-lg-8 mt-5 mt-lg-0">

                    {{-- Section Ads --}}
                    <section class="revisor-card h-100">

                        {{-- Title Section --}}
                        <div>
                            <h2 class="text-center py-2 ">Annunci pubblicati</h2>
                        </div>

                            {{-- Livewie Pagination --}}
                            <livewire:author-ads :author="$author"></livewire:author-ads>

                    </section> {{-- End Section Ads --}}

                </div> {{-- End Right Col --}}

            </div> {{-- End Main Row --}}

        </div> {{-- Padding Top --}}

    </div> {{-- Container View --}}

</x-layout>