@extends('new_user.newuserregistration')
@section('content')

    <div class="container">
        <div class="row d_flex justify-content-md-center">
            <div class="mx-auto">
                <form action="{{url('/new_user_registration_step1')}}" method="POST" id="request" class="main_form"
                    style="width: 33vmax;">
                    <h2 style="color: #03045e; font-family: Poppins; font-weight: bold;text-align: center;">Comapany Details</h2>
                    @csrf
                    <div class="row">
                        <div class="col-md-12 Icon-inside">
                            <i class="fa fa-building fa-lg fa-fw" aria-hidden="true"></i>
                            <input class="contactus input100" placeholder="Company Email" type="email" name="company_email"
                                style=" margin-bottom: 0px;" required>
                            <span style="color: rgb(230, 33, 33)">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-md-12 Icon-inside">
                        </div>
                        <div class="col-sm-12 mb-3">
                            <button type="submit" class="send_btn" style="font-family: Poppins; margin-top: 20px;">Next</button>
                        </div>
                        <div class="col-sm-12" style='text-align: center'>
                            <p>Already have account?<a href="{{url('/adminlogin')}}">Log in</a> </p>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>

@endsection
