@extends('default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form id="reset_pass" action="{{url('/resetpassword_step2')}}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header"><h1 class="mx-auto my-auto">Create New Password</h1></div>
                    <div class="card-body">
                       <div class="row g-9 mb-8">
                        <div class="col-md-12 fv-row">
                           <label class="required fs-6 fw-bold mb-2" style="margin-left: 5px"
                               for="password">New Password</label>
                           <input class="form-control form-control-lg form-control-solid" id="password" placeholder="Password" type="password" name="password" autocomplete="off">
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
                       <div class="row g-9">
                             <div class="col-md-12 fv-row">
                              <label class="required fs-6 fw-bold mb-2" style="margin-left: 5px"
                                   for="confirm_password">Confirm Password</label>
                              <input class="form-control form-control-lg form-control-solid" id="cpassword" placeholder="Confirm Password" type="password" name="confirm_password" autocomplete="off">
                              <span class="btn btn-sm btn-icon position-absolute translate-middle end-0 me-n2" 
                              style="margin-top: -20px; padding-right: 16px;" data-kt-password-meter-control="visibility">
                                 <i class="bi bi-eye-slash fs-2" id="ctogglePassword"></i>
                                 <i class="bi bi-eye fs-2 d-none"></i>
                              </span>
                              <span style="color: rgb(230, 33, 33)">
                                 @error('confirm_password')
                                       {{ $message }}
                                 @enderror
                              </span>
                             </div>
                       </div>
                    </div>
                    <div class="card-footer text-right mx-auto p-0">
                        <button type="submit" id="save_password" class="btn btn-primary">Save</button>
                        <a class="btn btn-secondary" href="{{ url('dashboard')}}">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>  
</div>
@endsection