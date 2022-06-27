<div class="row h-100">

    @foreach ($ads as $ad)

        @if ($ad->is_accepted == 1)

            {{-- Ad Col --}}
            <div class="col-6">
                <div class="authorAdCard d-flex my-3">
                    <div class="me-3">
                        <img src="https://picsum.photos/100">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <a href="{{route("detailsAd", compact("ad"))}}" class="fw-bold fs-5 authorAd-link">{{$ad->title}}</a>
                        <h5>{{$ad->price}}€</h5>
                        <small class="text-secondary">Pubblicato il {{$ad->created_at}}</small>
                    </div>
                </div>
            </div>

        @endif

    @endforeach

    <div class="d-flex justify-content-center">{{$ads->links()}}</div>

</div>