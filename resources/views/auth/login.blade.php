<x-layout>
  <x-slot name='title'> Login</x-slot>
  
  
  
  
  <div class="container-fluid bg-login min-vh-100 ">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="mt-150 mb-4 fw-bold">Log-in</h1>           
        @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>   
        @endif
      </div>
      <div class="col-12 col-md-4 col-lg-4 offset-md-4 bg-register-form d-flex justify-content-center pt-4 pb-5">
                <div class="register-form-container">
                  <form action="{{route('login')}}" method="POST">
                      @csrf
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
                          <button type="submit" class="form-btn w-100">Accedi</button>
                  </form>
                </div>
              </div>
          </div>
      </div>
</x-layout>