<x-layout>
  <x-slot name='title'>Registrati</x-slot>
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>   
  @endif

    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-md-6 offeset-md-3">
          <h1>Registrati</h1>           
          </div>
            <div class="col-12 col-md-6 offset-md-3">
                <form action="{{route('register')}}" method="POST">
                    @csrf
                        <div class="mb-3">
                          <label class="form-label">Inserisci username</label>
                          <input type="text" class="form-control"  aria-describedby="emailHelp" name="name" >
                        </div>
                        <div class="mb-3">
                          <label  class="form-label">Inserisci la mail</label>
                          <input type="email" class="form-control" name="email">
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Inserisci la password</label>
                            <input type="password" class="form-control" name="password" >
                          </div>
                          <div class="mb-3">
                            <label  class="form-label">Conferma password</label>
                            <input type="password" class="form-control" name="password_confirmation" >
                          </div>
                        <button type="submit" class="btn btn-primary">Registrati</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>