@extends('new_user.newuserregistration')
@section('content')
    <div class="container">
        <div class="row d_flex justify-content-md-center">
            <div class="mx-auto">
                <form action="{{ url('/new_user_registration_step2') }}" method="POST" class="main_form" style="width: 50vmax;">
                    <h2 style="color: #03045e; font-family: Poppins; font-weight: bold;text-align: center;">Company Details
                    </h2>
                    @csrf
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                        <li style="color: red">{{$error}}</li>
                        @endforeach
                    @endif
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="required fs-6 fw-bold mb-2" for="name"
                            style="margin-left: 5px"></label>
                        <input type="text" class="form-control form-control-solid mb-8"
                            name="name" id="uname" placeholder="User Name" required>
                    </div>
                    <div class="row g-9 mb-8">
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-bold mb-2" for="email"
                                style="margin-left: 5px"></label>
                            <input type="email"
                                class="form-control form-control-solid mb-8" name="email"
                                id="uemail" placeholder="User Email" required>
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-bold mb-2" for="company"
                            style="margin-left: 5px"></label>
                            <input type="text" readonly
                            class="form-control form-control-solid mb-8" name="company"
                            id="ucompany" placeholder="User Company" value="{{$company_name}}" required>
                        </div>
                    </div>
                    <div class="row g-9 mb-8">
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-bold mb-2"
                                style="margin-left: 5px" for="phone"></label>
                            <input type="number" class="form-control form-control-solid"
                                name="phone" style="cursor: pointer;" placeholder="phone"
                                id="phone" required>
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-bold" for="password"
                                style="margin-left: 5px"></label>
                                <div class="input-group">
                                    <input type="password"
                                        class="form-control form-control-solid" name="password"
                                        id="upassword" placeholder="User Password"
                                        aria-label="User Password"
                                        aria-describedby="basic-addon2" required />
                                </div>
                                <div class="input-group " style="margin-left: 8px">
                                    <input id="passcheckbox" type="checkbox"
                                        onclick="showpass()" style="margin-right: 5px">Show
                                    Password
                                </div>
                        </div>
                    </div>
                    <div class="row g-9 mb-8">
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-bold mb-2" for="address"
                                style="margin-left: 5px"></label>
                            <textarea type="text" class="form-control form-control-solid" name="address" id="address"
                                placeholder="Enter User Address" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit"
                                class="btn btn-primary mt-5">Add
                                User</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
