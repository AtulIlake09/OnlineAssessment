<!--begin::Header-->
<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>
@php 
$user=auth()->user(); 
$flag=$user->user; 
@endphp
<div id="kt_header" style="" class="header align-items-stretch">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Aside mobile toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
            <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                id="kt_aside_mobile_toggle">
                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                <span class="svg-icon svg-icon-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <path
                            d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                            fill="currentColor" />
                        <path opacity="0.3"
                            d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
        </div>
        <!--end::Aside mobile toggle-->
        <!--begin::Mobile logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="{{ url('/dashboard') }}" class="d-lg-none">
                <img alt="Logo" src="{{asset('images/logometricoid.png')}}" class="h-30px" />
            </a>
        </div>
        <!--end::Mobile logo-->
        <!--begin::Wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
            <!--begin::Navbar-->
            <div class="d-flex align-items-stretch" id="kt_header_nav">
                <!--begin::Menu wrapper-->
                <div class="header-menu align-items-stretch" data-kt-drawer="true"
                    data-kt-drawer-name="header-menu"
                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                    data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                    data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle"
                    data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                    <!--begin::Menu-->
                    <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch"
                        id="#kt_header_menu" data-kt-menu="true">
                        <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
                            class="menu-item here show menu-lg-down-accordion me-lg-1">
                            <span class="menu-link py-3">
                                <span class="menu-title">Dashboards</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                <div class="menu-item">
                                    <a class="menu-link py-3 {{ (request()->is('dashboard')) ? 'active' : '' }}" href="{{ url('/dashboard') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Home</span>
                                    </a>
                                </div>
                                @if ($flag == 1)
                                    <div class="menu-item">
                                        <a class="menu-link py-3 {{ (request()->is('companies')) ? 'active' : '' }}" href="{{ url('/companies') }}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Companies</span>
                                        </a>
                                    </div>
                                @endif
                                @if($flag==1 || $flag==0)
                                <div class="menu-item">
                                    <a class="menu-link py-3 {{ (request()->is('users')) ? 'active' : '' }}" href="{{ url('/users') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Users</span>
                                    </a>
                                </div>
                                @endif
                                <div class="menu-item">
                                    <a class="menu-link py-3 {{ (request()->is('generatelink')) ? 'active' : '' }}" href="{{ url('/generatelink') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Generate Link</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-3 {{ (request()->is('assessment') || request()->is('assessment/answers') ) ? 'active' : '' }}" href="{{ url('/assessment') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Assessment</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-3 {{ (request()->is('tests') || request()->is('tests/questions')) ? 'active' : '' }}" href="{{ url('/tests') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Tests</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Menu wrapper-->
            </div>
            <!--end::Navbar-->
            <!--begin::Toolbar wrapper-->
            <div class="d-flex align-items-stretch flex-shrink-0 ">
                <!--begin::Menu item-->
                <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false" style="margin-top: 5px;">
                    <img class="img-xs rounded-circle" src="{{(!empty($user->avatar))? $user->avatar : url('images/userlogo.png')}}" style="width: 40px; height: 40px;" alt="Profile image"> </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                    <a href="#" class="text-danger fw-bold fs-3 mt-2"
                        data-bs-toggle="modal"
                        data-bs-target="#kt_modal_user_profile">
                        <img class="img-md rounded-circle" data-bs-toggle="tooltip"
                        data-bs-placement="top" data-bs-trigger="hover"
                        title="View Profile" src="{{(!empty($user->avatar))? $user->avatar : url('images/userlogo.png')}}" style="width: 40px; height: 40px;" alt="Profile image">
                    </a>
                      <p class="mb-1 mt-3 font-weight-semibold">{{$user->name}}</p>
                      <p class="fw-light text-muted mb-0">{{$user->email}}</p>
                    </div>
                    <a class="dropdown-item" href="{{ url('/logout') }}"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
                  </div>
                {{-- <div class="mt-4">
                    <a href="{{ url('/logout') }}" class="btn btn-sm btn-primary">
                        <span class="menu-link py-3">
                            <span class="menu-title">Sign Out</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </span>
                    </a>
                </div> --}}
                <!--end::Menu item-->
            </div>
            <!--end::Toolbar wrapper-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Container-->
</div>

<div class="modal fade" id="kt_modal_user_profile" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary"
                    data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                rx="1" transform="rotate(-45 6 17.3137)"
                                fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <form action="{{url('/edit_users')}}" method="POST" class="form">
                    @csrf
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">User Profile</h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="required fs-6 fw-bold mb-2" for="uname"
                            style="margin-left: 5px">Name</label>
                        <input type="text" @if($user->user == 1)  @else readonly @endif class="form-control form-control-solid"
                            name="name" id="uname" placeholder="Name" value="{{$user->name}}" required>
                            <input type="hidden" name="company_id" value="{{$user->company_id}}">
                            <input type="hidden" name="id" value="{{$user->id}}">

                    </div>
                    <div class="row g-9 mb-8">
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-bold mb-2" style="margin-left: 5px"
                            for="email">Email</label>
                            <input @if($user->user == 1)  @else readonly @endif type="email" class="form-control form-control-solid"
                            name="email" id="email" placeholder="Email" value="{{$user->email}}"
                            required> 
                        </div>
                    </div>
                    <div class="row g-9 mb-8">
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-bold mb-2" style="margin-left: 5px"
                                for="phone">Phone</label>
                            <input type="number" @if($user->user == 1)  @else readonly @endif class="form-control form-control-solid"
                            name="phone" id="phone" placeholder="Phone" value="{{$user->phone}}"
                            required> 
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-bold mb-2"
                                style="margin-left: 5px" for="position">Position</label>
                            <input type="text" readonly class="form-control form-control-solid" id="position" placeholder="Position" 
                            value="{{($user->user==1)? "Super Admin" : (($user->user==0)? "Admin" : (($user->user==2)? "Recruiter" : (($user->user==3)? "Hiring Manager" : "")))}}" required>
                            <input type="hidden" name="position" value="{{$user->user}}">
                        </div>
                    </div>
                    <div class="row g-9 mb-8">
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-bold mb-2"
                                style="margin-left: 5px"
                                for="address">Address</label>
                            <textarea type="text" @if($user->user == 1)  @else readonly @endif class="form-control form-control-solid w-100 h-100px" name="address"
                                placeholder="Address" id="address" required>{{$user->address}}</textarea>
                        </div>
                        <div class="text-center">
                            @if($user->user==1)
                                <button type="submit" class="btn btn-primary">Update</button>
                            @endif
                            <a href="{{url('/resetpassword_step1')}}" class="btn btn-primary">Change Password</a>
                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Header-->
