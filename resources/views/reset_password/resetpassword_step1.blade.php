@extends('default')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-6">
          <form action="{{url('/resetpassword_step1')}}" method="POST">
              @csrf
              <div class="card">
                  <div class="card-header"><h1 class="mx-auto my-auto">Login Details</h1></div>
                  <div class="card-body">
                     <div class="row g-9 mb-8">
                           <div class="col-md-12 fv-row">
                              <label class="required fs-6 fw-bold mb-2" style="margin-left: 5px"
                                 for="email">Email</label>
                              <input type="email" class="form-control form-control-solid" name="email"
                                 id="email" placeholder="Email" required>
                              <span style="color: rgb(230, 33, 33)">
                                 @error('email')
                                       {{ $message }}
                                 @enderror
                              </span>
                           </div>
                     </div>
                     <div class="row g-9">
                           <div class="col-md-12 fv-row">
                              <label class="required fs-6 fw-bold mb-2" style="margin-left: 5px"
                                 for="password">Password</label>
                              <input class="form-control form-control-lg form-control-solid" id="password" placeholder="Password" style="padding: 0.75rem 1rem;" type="password" name="password" autocomplete="off">
                              <span class="btn btn-sm btn-icon position-absolute translate-middle end-0 me-n2" 
                              style="margin-top: -20px; padding-right: 16px;" data-kt-password-meter-control="visibility">
                                 <i class="bi bi-eye-slash fs-2" id="togglePassword"></i>
                                 <i class="bi bi-eye fs-2 d-none"></i>
                              </span>
                              <span style="color: rgb(230, 33, 33)">
                                 @error('password')
                                       {{ $message }}
                                 @enderror
                              </span>
                           </div>
                     </div>
                  </div>
                  <div class="card-footer text-right mx-auto p-0">
                      <button type="submit" class="btn btn-primary">Next</button>
                      <a class="btn btn-secondary" href="{{ url('dashboard') }}">Cancel</a>
                  </div>
              </div>
          </form>
      </div>
   </div> 
</div>
@endsection

