<x-layout>
    <x-slot name='title'>Register</x-slot>

    <div class="container-fluid">
        <h1>Registrati</h1>
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <form action="{{route('register')}}" method="POST">
                    @csrf
                        <div class="mb-3">
                          <label class="form-label">Inserisci username</label>
                          <input type="text" class="form-control"  aria-describedby="emailHelp" name="name" >
                        </div>
                        <div class="mb-3">
                          <label  class="form-label">Insersci la mail</label>
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