@extends('new_user.newuserregistration')
@section('content')

    <div class="container">
        <div class="row d_flex justify-content-md-center">
            <div class="mx-auto">
                <form action="{{url('/new_company_registration')}}" method="POST" class="main_form"
                    style="width: 33vmax;">
                    <h2 style="color: #03045e; font-family: Poppins; font-weight: bold;text-align: center;">Company Details</h2>
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <span style="color: rgb(230, 33, 33)">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                            {{-- <i class="fa fa-building fa-lg fa-fw" aria-hidden="true"></i> --}}
                            <input class="registration_form form-control form-control-solid mb-2" style="color: #03045e; font-family: Poppins; font-weight: bold;" 
                            placeholder="Company Name" type="text" name="name" value="" required>
                            <input type="hidden" name="email" value="{{$company_email}}" required >
                        </div>
                        {{-- <div class="col-md-12">
                            <span style="color: rgb(230, 33, 33)">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span> --}}
                            {{-- <i class="fa fa-building fa-lg fa-fw" aria-hidden="true"></i> --}}
                            {{-- <input class="registration_form form-control form-control-solid" readonly style="color: #03045e; font-family: Poppins; font-weight: bold;" 
                            placeholder="Company Email" type="email" name="email" value="{{$company_email}}" required>
                        </div> --}}
                        <div class="col-md-12">
                            {{-- <i class="fa fa-building fa-lg fa-fw" aria-hidden="true"></i> --}}
                            <span style="color: rgb(230, 33, 33)">
                                @error('address')
                                    {{ $message }}
                                @enderror
                            </span>
                            <textarea type="text" class="registration_form form-control form-control-solid mt-3" style="color: #03045e; font-family: Poppins; font-weight: bold;" name="address" 
                                placeholder="Company Address" required></textarea>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <button type="submit" class="send_btn" style="font-family: Poppins; margin-top: 20px;">Next</button>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>

@endsection
