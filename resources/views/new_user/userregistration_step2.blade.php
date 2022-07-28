@extends('new_user.newuserregistration')
@section('content')
    <div class="container">
        <div class="row d_flex justify-content-md-center">
            <div class="mx-auto">
                <form action="{{ url('/new_user_registration_step2') }}" method="POST" class="main_form"
                    style="width: 50vmax;">
                    <h2
                        style="color: #03045e; margin-bottom: 8px; font-family: Poppins; font-weight: bold;text-align: center;">
                        Registration Form</h2>
                    @csrf
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <li style="color: red">{{ $error }}</li>
                        @endforeach
                    @endif
                    <div class="row g-9 mb-8">
                        <div class="col-md-12 fv-row Icon-inside">
                            <i class="fa fa-building fa-lg fa-fw" aria-hidden="true"></i>
                            <input type="text" readonly class="contactus input100 form-control form-control-solid mb-8"
                                name="company" id="ucompany" placeholder="Company" value="{{ $company_name }}"
                                required>
                        </div>
                        <div class="col-md-12 fv-row Icon-inside">
                            <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                            <input type="text" class="contactus input100 form-control form-control-solid mb-8"
                                name="name" id="uname" placeholder="Name" required>
                        </div>
                        <div class="col-md-12 fv-row Icon-inside">
                            <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
                            <input type="email" class="contactus input100 form-control form-control-solid mb-8"
                                name="email" id="uemail" placeholder="Email" required>
                        </div>
                        <div class="col-md-6 fv-row Icon-inside">
                            <i class="fa fa-phone fa-lg fa-fw" aria-hidden="true"></i>
                            <input type="number" class="contactus input100 form-control form-control-solid" name="phone"
                                style="cursor: pointer;" placeholder="Phone" id="phone" required>
                        </div>
                        <div class="col-md-6 fv-row Icon-inside">
                            <div class="input-group">
                                <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
                                <input type="password" class="contactus input100 form-control form-control-solid"
                                    name="password" id="upassword" placeholder="Password" aria-label="Password"
                                    aria-describedby="basic-addon2" required />
                            </div>
                            {{-- <div class="input-group " style="margin-left: 8px">
                                    <input id="passcheckbox" type="checkbox"
                                        onclick="showpass()" style="margin-right: 5px">Show
                                    Password
                                </div> --}}
                        </div>
                        <div class="col-md-12 fv-row Icon-inside">
                            <i class="fa fa-address-card fa-lg fa-fw" aria-hidden="true"></i>
                            <textarea type="text" style="padding-top: 10px;" class="contactus input100 form-control form-control-solid"
                                name="address" id="address" placeholder="Address" required></textarea>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <button type="submit" class="send_btn"
                                style="font-family: Poppins; margin-top: 20px;">Submit</button>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <a href="{{ url('/new_user_registration_step1') }}" class="send_btn"
                                style="font-family: Poppins; text-align: center; margin-top: 20px;">Cancel</a>
                        </div>
                        {{-- <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-5">Submit</button>
                        </div> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
