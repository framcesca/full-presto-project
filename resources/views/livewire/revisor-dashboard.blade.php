<div>
    <div class="container">
        <div class="row margin-up justify-content-center text-center">
            <div class="col-4">
                <p>{{__('ui.anre')}}: {{App\Models\Ad::toBeRevisionedCount()}}</p>
            </div>
            <div class="col-4">
                <p>{{__('ui.accet')}}: {{App\Models\Ad::AcceptedCount()}}</p>
            </div>
            <div class="col-4">
                <p>{{__('ui.rif')}}: {{App\Models\Ad::notAcceptedCount()}}</p>
            </div>
        </div>
        {{-- tabella da revisionare --}}
        <div class="row mt-4">
            <table class="table">
                <h2>{{__('ui.anre')}}:</h2>
                <thead>
                    <tr>
                        {{-- <th scope="col">icona</th> --}}
                        <th scope="col">{{__('ui.tit')}}</th>
                        <th scope="col">{{__('ui.user')}}</th>
                        <th scope="col">{{__('ui.data')}}</th>
                    </tr>
                </thead>
            @forelse ($ads_to_revise as $ad)
            <tbody wire:key="{{ $loop->index }}">
                <tr>
                    <td>
                        <a href="{{route('revisorDetailAd',compact('ad'))}}">{{$ad->title}}</a>
                    </td>
                    <td>
                        <p>{{$ad->user->name}}</p>
                    </td>
                    <td>
                        <p>{{$ad->created_at}}</p>
                    </td>
                </tr>
                        @empty
                        <div class="col-12 mt-3 text-center">
                            <h2>{{__('ui.nhadr')}}</h2>
                        </div>
                        @endforelse    
                    </tr>
                </tbody>  
            </table>
        </div>
    </div>
    {{-- tabella annunci rifiutati --}}
    <div class="container">
        <div class="row">
            <table class="table margin-up">
                <h2>{{__('ui.rif')}}</h2>
                <thead>
                    <tr>
                        {{-- <th scope="col">icona</th> --}}
                        <th scope="col">{{__('ui.tit')}}</th>
                        <th scope="col">{{__('ui.user')}}</th>
                        <th scope="col">{{__('ui.data')}}</th>
                        <th scope="col">{{__('ui.nono')}}</th>
                    </tr>
                </thead>
                @forelse($ads_rejected as $ad)
                <tbody wire:key="{{ $loop->index }}">
                    <tr>
                        <td>
                            <a href="{{route('revisorDetailAd',compact('ad'))}}">{{$ad->title}}</a>
                        </td>
                        <td>
                            <p>{{$ad->user->name}}</p>
                        </td>
                        <td>
                            <p>{{$ad->created_at}}</p>
                        </td>
                        <td>
                            <button wire:click.prevent="setToRevise({{$ad}})" class="btn btn-warning">{{__('ui.nono')}}</button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3"></td>
                        <td></td>
                    @endforelse    
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    {{-- tabella  --}}
    <div class="container">
        <div class="row">
            <table class="table margin-up">
                <h2>{{__('ui.catadsno')}}</h2>
                <thead>
                    <tr>
                        {{-- <th scope="col">icona</th> --}}
                        <th scope="col">{{__('ui.tit')}}</th>
                        <th scope="col"{{__('ui.user')}}></th>
                        <th scope="col">{{__('ui.data')}}</th>
                        <th scope="col">{{__('ui.nono')}}</th>
                    </tr>
                </thead>
                @forelse($ads_accepted as $ad)
                <tbody wire:key="{{ $loop->index }}">
                    <tr>
                        <td>
                            <a href="{{route('revisorDetailAd',compact('ad'))}}">{{$ad->title}}</a>
                        </td>
                        <td>
                            <p>{{$ad->user->name}}</p>
                        </td>
                        <td>
                            <p>{{$ad->created_at}}</p>
                        </td>
                        <td>
                            <button wire:click.prevent="setToRevise({{$ad}})" class="btn btn-warning">{{__('ui.nono')}}</button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3"></td>
                        <td></td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
