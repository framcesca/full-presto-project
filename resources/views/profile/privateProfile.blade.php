<x-layout>
    <x-slot name='title'>Il tuo profilo</x-slot>

    <div class="container">

        <div class="privateProfile-padding-top">

            <div class="row">

                {{-- Left Col --}}
                <div class="col-12 col-lg-4">
                    
                    {{-- Basic Profile Settings --}}
                    <section class="privateProfile-boxModel px-4 py-4">

                        {{-- Basic Settings Form --}}
                        <form method="POST" action="{{route("editBasicSettings", $user)}}">
                            @csrf

                            {{-- Row--}}
                            <div class="row">

                                {{-- Avatar Icon --}}
                                <div class="col-12 col-xxl-4">
                                    <div class="privateProfile-avatar d-flex justify-content-center">
                                        {{-- {{dd($user->profile == null)}} --}}
                                        @if($user->profile != null && $user->profile->avatar_profile)
                                            <img class="avatarPrivateProfile" src="/storage/{{$user->profile->avatar_profile}}">
                                        @else
                                            <img class="avatarPrivateProfile" src="/media/avatarProfile.jpg">
                                        @endif
                                    </div>
                                </div>

                                {{-- User Name --}}
                                <div class="col-12 col-xxl-8 d-flex align-items-center mt-3 mt-xxl-0">
                                    <input class="privateProfile-input-form" type="text" value="{{$user->name}}" name="name">
                                </div>

                                {{-- User Email --}}
                                <div class="col-12">
                                    <div class="pt-3">
                                        <h6 class="text-center text-lg-start fw-bold">La tua email</h6>
                                        <input class="privateProfile-input-form" type="email" value="{{$user->email}}" name="email">
                                    </div>
                                </div>

                                {{-- Form Button --}}
                                <div class="col-12 d-flex justify-content-center pt-4">
                                    <button class="privateProfile-button-form" type="submit">Salva impostazioni</button>
                                </div>

                            </div> {{-- End Row --}}

                        </form> {{-- Basic Settings Form --}}

                    </section> {{-- End Basic Profile Settings --}}

                    {{-- Extra Profile Settings --}}
                    <section class="privateProfile-boxModel px-4 py-4 mt-4">
                        @if ($user->profile == null)
                        <form method="POST" action="{{route("addExtraSettings", $user)}}" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="row">
                                <div class="col-12">
                                    <input class="privateProfile-input-form my-2" type="file" name="avatar_profile">
                                    <input class="privateProfile-input-form my-2" type="text" name="city" placeholder="Città">
                                    <input class="privateProfile-input-form my-2" type="text" name="street" placeholder="Via">
                                    <input class="privateProfile-input-form my-2" type="number" name="cap" placeholder="CAP">
                                    <input class="privateProfile-input-form my-2" type="text" name="country" placeholder="Regione">
                                    <input class="privateProfile-input-form my-2" type="number" name="phone_number" placeholder="Numero di telefono">
                                    <input class="privateProfile-input-form my-2" type="text" name="bio" placeholder="Bio">
                                    <div class="d-flex justify-content-center pt-4">
                                        <button class="privateProfile-button-form" type="submit">Inserisci impostazioni</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @else
                            <form method="POST" action="{{route("editExtraSettings", $user)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <input class="privateProfile-input-form my-2" type="file" name="avatar_profile">
                                        <input class="privateProfile-input-form my-2" type="text" value="{{$user->profile->city}}" name="city" placeholder="Città">
                                        <input class="privateProfile-input-form my-2" type="text" value="{{$user->profile->street}}" name="street" placeholder="Via">
                                        <input class="privateProfile-input-form my-2" type="number" value="{{$user->profile->cap}}" name="cap" placeholder="CAP">
                                        <input class="privateProfile-input-form my-2" type="tetx" value="{{$user->profile->country}}" name="country" placeholder="Regione">
                                        <input class="privateProfile-input-form my-2" type="number" value="{{$user->profile->phone_number}}" name="phone_number" placeholder="Numero di telefono">
                                        <input class="privateProfile-input-form my-2" type="text" value="{{$user->profile->bio}}" name="bio" placeholder="Bio">
                                        <div class="d-flex justify-content-center pt-4">
                                            <button class="privateProfile-button-form" type="submit">Salva impostazioni</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endif
                    </section> {{-- Extra Profile Settings --}}

                </div> {{-- End Left Col --}}

                {{-- Right Col --}}
                <div class="col-12 col-lg-8">
                    <section class="privateProfile-boxModel p-2 h-100">
                    </section>
                </div>

            </div>

        </div>

    </div>

</x-layout>