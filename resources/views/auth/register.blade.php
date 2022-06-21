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


    <div class="container-fluid bg-register min-vh-100 ">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="mt-150 mb-4 fw-bold">Registrati</h1>           
          </div>
            <div class="col-12 col-md-4 col-lg-4 offset-md-4 bg-register-form d-flex justify-content-center pt-4 pb-5">
              <div class="register-form-container">
                <form action="{{route('register')}}" method="POST">
                    @csrf
                        <h5 class="mt-3 fw-bold">Nome e Cognome</h5>
                        <div class="form-floating mb-3">
                          <input type="text" id="registerTitle" class="form-control input-register"  aria-describedby="emailHelp" name="name" placeholder="Nome e Cognome">
                          <label for="registerTitle" class="form-label text-black-50">Nome e Cognome</label>
                        </div>
                        <h5 class="mt-3 fw-bold">Email</h5>
                        <div class="form-floating mb-3">
                          <input type="email" id="registerEmail"  class="form-control input-register" name="email" placeholder="name@example.com">
                          <label for="registerEmail" class="form-label text-black-50">Email</label>
                        </div>
                        <h5 class="mt-3 fw-bold">Password</h5>
                        <div class="form-floating mb-3">
                          <input type="password" id="registerPassword" class="form-control input-register" name="password" placeholder="exemple">
                          <label  for="registerPassword" class="form-label text-black-50">Password</label>
                        </div>
                        <h5 class="mt-3 fw-bold">Conferma Password</h5>
                        <div class="form-floating mb-3">
                          <input type="password" id="registerPasswordConf" class="form-control input-register" name="password_confirmation" placeholder="exemple">
                          <label for="registerPasswordConf" class="form-label text-black-50" >Conferma password</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Registrati</button>
                </form>
              </div>
            </div>
        </div>
    </div>
</x-layout>