<div>
    <div class="container">

        <div class="row margin-up justify-content-center text-center">
            <div class="col-12 col-md-3 revisor-card py-3 my-3">
                <div class="card-body">
                    <h5 class="card-title">Annunci da revisionare:</h5>
                    <p class="card-text fs-1 fw-bold">{{App\Models\Ad::toBeRevisionedCount()}}</p>
                </div>
            </div>
            <div class="col-12 col-md-3 offset-md-1 revisor-card py-3 my-3">
                <div class="card-body">
                    <h5 class="card-title">Annunci accettati:</h5>
                    <p class="card-text fs-1 fw-bold text-success">{{App\Models\Ad::AcceptedCount()}}</p>
                </div>
            </div>
            <div class="col-12 col-md-3 offset-md-1 revisor-card py-3 my-3">
                <div class="card-body">
                    <h5 class="card-title">Annunci rifiutati:</h5>
                    <p class="card-text fs-1 fw-bold text-danger">{{App\Models\Ad::notAcceptedCount()}}</p>
                </div>
            </div>

        {{-- tabella da revisionare --}}
        <div class="row my-4">
            <div class="col-10 offset-md-1 revisor-card my-5">
                <div class="card-body">
                    <table class="table">
                        @forelse ($ads_to_revise as $ad)
                        <h2 class="text-center">Annunci da revisionare</h2>
                        <thead>
                            <tr>
                                {{-- <th scope="col">icona</th> --}}
                                <th scope="col" class="w-title">Titolo</th>
                                <th scope="col" class="w-user">Utente</th>
                                <th scope="col" class="w-date">Data</th>
                            </tr>
                        </thead>
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
                            <tr>
                                @empty
                                <div class="col-10 offset-md-1 mt-3 text-center">
                                    <h2 class="text-center">Non hai annunci da revisionare</h2>
                                </div>
                                @endforelse    
                            </tr>
                        </tbody>  
                    </table>
                </div>                
            </div>
        </div>
    </div>
    {{-- tabella annunci rifiutati --}}
        <div class="row my-4">
            <div class="col-10 offset-md-1  revisor-card py-3 my-5">
                <div class="card-body">
                    
                    <table class="table margin-up">
                        <h2 class="text-center">Annunci rifiutati</h2>
                        <thead>
                            <tr>
                                {{-- <th scope="col">icona</th> --}}
                                <th scope="col" class="w-title">Titolo</th>
                                <th scope="col" class="w-user">Utente</th>
                                <th scope="col" class="w-date">Data</th>
                                <th scope="col" class="w-botton"></th>
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
        </div>
    {{-- tabella annunci accettati --}}
        <div class="row my-4">
            <div class="col-10 offset-md-1  revisor-card py-3 my-5">
                <div class="card-body">
                    <table class="table margin-up">
                        <h2 class="text-center">Annunci accettati</h2>
                        <thead>
                            <tr>
                                {{-- <th scope="col">icona</th> --}}
                                <th scope="col" class="w-title">Titolo</th>
                                <th scope="col" class="w-user">Utente</th>
                                <th scope="col" class="w-date">Data</th>
                                <th scope="col" class="w-botton"></th>
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
</div>
