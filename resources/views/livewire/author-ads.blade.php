<div class="container">
    <div class="row">
        
        @foreach ($ads as $ad)
        
            {{-- Ad Col --}}
            <div class="col-12 col-lg-6">

                {{-- Ad Card --}}
                <a href="{{route("detailsAd", compact("ad"))}}" class="authorAdCard d-flex my-3">

                    <div class="me-3">
                        <img class="authorAd-ad-image" src="{{$ad->images()->first()->getUrl(300,300)}}">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <h5 class="fw-bold fs-5 authorAd-link">{{$ad->title}}</h5>
                        <h5>{{$ad->price}}€</h5>
                        {{-- Seconds Check --}}
                        @if ($this->now->diffInSeconds($ad->updated_at) < 60)
                            <small>Pubblicato {{$this->now->diffInSeconds($ad->updated_at)}} secondi fa</small>
                        {{-- Minutes Check --}}
                        @elseif ($this->now->diffInMinutes($ad->updated_at) < 60)
                            @if ($this->now->diffInMinutes($ad->updated_at) == 1)
                                <small>Pubblicato {{$this->now->diffInMinutes($ad->updated_at)}} minuto fa</small>
                            @else
                                <small>Pubblicato {{$this->now->diffInMinutes($ad->updated_at)}} minuti fa</small>
                            @endif
                        {{-- Hours Check --}}
                        @elseif ($this->now->diffInHours($ad->updated_at) < 24)
                            @if ($this->now->diffInHours($ad->updated_at) == 1)
                                <small>Pubblicato {{$this->now->diffInHours($ad->updated_at)}} ora fa</small>
                            @else
                                <small>Pubblicato {{$this->now->diffInHours($ad->updated_at)}} ore fa</small>
                            @endif
                        {{-- Days Check --}}
                        @elseif ($this->now->diffInDays($ad->updated_at) >= 1 && $this->now->diffInYears($ad->updated_at) == 0)
                            @if ($this->now->diffInDays($ad->updated_at) == 1)
                                <small>Pubblicato {{$this->now->diffInDays($ad->updated_at)}} giorno fa</small>
                            @else
                                <small>Pubblicato {{$this->now->diffInDays($ad->updated_at)}} giorni fa</small>
                            @endif
                        {{-- Years Check --}}
                        @elseif ($this->now->diffInYears($ad->updated_at) >= 1)
                            @if ($this->now->diffInYears($ad->updated_at) == 1)
                                <small>Pubblicato {{$this->now->diffInYears($ad->updated_at)}} anno fa</small>
                            @else
                                <small>Pubblicato {{$this->now->diffInYears($ad->updated_at)}} anni fa</small>
                            @endif
                        @endif
                    </div>

                </a> {{-- End Ad Card --}}

            </div>{{-- End Col --}}

        @endforeach
    
    </div>

    <div class="d-flex justify-content-center">{{$ads->links()}}</div>
    
</div>