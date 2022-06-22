<x-layout>
    <x-slot name='title'> Form</x-slot>
  
  
  
  
  <div class="container-fluid bg-login min-vh-100 ">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="mt-150 mb-4 fw-bold">Diventa revisore!</h1>           
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
                  <form action="{{route('becameRevisor')}}" >
                      @csrf
                          <h5 class="mt-3 fw-bold">Descrizione</h5>
                          <div class="form-floating mb-3">
                            <input type="text" id="revisorForm"  class="form-control input-register" name="description" placeholder=" ">
                            <label for="revisorForm" class="form-label text-black-50">Description</label>
                          </div>
                          <button type="submit" class="form-btn w-100">Invia</button>
                  </form>
                </div>
              </div>
          </div>
      </div>
</x-layout>