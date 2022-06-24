<div>
    <div class="container">
        <div class="row margin-up justify-content-center text-center">
            <div class="col-4">
                <p>Annunci da revisionare: {{App\Models\Ad::toBeRevisionedCount()}}</p>
            </div>
            <div class="col-4">
                <p>Annunci accettati: {{App\Models\Ad::AcceptedCount()}}</p>
            </div>
            <div class="col-4">
                <p>Annunci rifiutati: {{App\Models\Ad::notAcceptedCount()}}</p>
            </div>
        </div>
        {{-- tabella da revisionare --}}
        <div class="row mt-4">
            <table class="table">
                <h2>Annunci da revisionare</h2>
                <thead>
                    <tr>
                        {{-- <th scope="col">icona</th> --}}
                        <th scope="col">Titolo</th>
                        <th scope="col">Utente</th>
                        <th scope="col">Data</th>
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
                            <h2>Non hai annunci da revisionare</h2>
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
                <h2>Annunci rifiutati</h2>
                <thead>
                    <tr>
                        {{-- <th scope="col">icona</th> --}}
                        <th scope="col">Titolo</th>
                        <th scope="col">Utente</th>
                        <th scope="col">Data</th>
                        <th scope="col">Annulla</th>
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
                            <button wire:click.prevent="setToRevise({{$ad}})" class="btn btn-warning">Annulla</button>
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
    {{-- tabella annunci accettati --}}
    <div class="container">
        <div class="row">
            <table class="table margin-up">
                <h2>Annunci accettati</h2>
                <thead>
                    <tr>
                        {{-- <th scope="col">icona</th> --}}
                        <th scope="col">Titolo</th>
                        <th scope="col">Utente</th>
                        <th scope="col">Data</th>
                        <th scope="col">Annulla</th>
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
                            <button wire:click.prevent="setToRevise({{$ad}})" class="btn btn-warning">Annulla</button>
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
