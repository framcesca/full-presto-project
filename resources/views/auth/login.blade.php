<x-layout>
    <x-slot name='title'>Login</x-slot>
    
    <div class="container">
        <h1>Accedi</h1>
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    
                    <div class="mb-3">
                      <label  class="form-label">Insersci la mail</label>
                      <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Inserisci la password</label>
                        <input type="password" class="form-control" name="password" >
                      </div>
                      
                      

                    <button type="submit" class="btn btn-primary">Accedi</button>
                  </form>
            </div>
        </div>
    </div>

</x-layout>