<x-layout>
  <x-slot name='title'> Login</x-slot>
  @if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>   
  @endif
  
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 offeset-md-3">
        <h1>Accedi</h1>
      </div>
      <div class="col-12 col-md-6 offset-md-3">
        <form method="POST" action="{{route('login')}}">
          @csrf
          
          <div class="mb-3">
            <label  class="form-label">Inserisci la mail</label>
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