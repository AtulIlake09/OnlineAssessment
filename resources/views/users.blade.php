<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>Metricoid Technology Solutions</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/logometricoid.png" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <x-sidebar />
            <!--end::Aside-->

            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <x-header />
                <!--end::Header-->

                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Toolbar-->
                    <div class="toolbar" id="kt_toolbar">
                        <!--begin::Container-->
                        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                            <!--begin::Page title-->
                            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                                <!--begin::Title-->
                                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Users
                                    <!--begin::Separator-->
                                    <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
                                    <!--end::Separator-->
                                    <!--begin::Description-->
                                    {{-- <span class="text-muted fs-7 fw-bold mt-2">#XRS-45670</span> --}}
                                    <!--end::Description-->
                                </h1>
                                <!--end::Title-->
                            </div>
                            <!--end::Page title-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Post-->
                    @if ($flag == 1)
                        <div class="post d-flex flex-column-fluid" id="kt_post">
                            <!--begin::Container-->
                            <div id="kt_content_container" class="container-xxl">
                                <!--begin::Row-->
                                <div class="row gy-5 g-xl-8">
                                    <!--begin::Col-->
                                    <div class="col-xl-12">
                                        <!--begin::Tables Widget 9-->
                                        <div class="card card-xl-stretch mb-5 mb-xl-8">
                                            <!--begin::Header-->
                                            <div class="card-header border-0 pt-5">
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bolder fs-3 mb-1">All Users</span>
                                                </h3>
                                                <div class="card-toolbar" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-trigger="hover"
                                                    title="Choose company name">
                                                    <input type="hidden" name="company" id="tempcomid"
                                                        value="{{ empty($id) ? '0' : $id }}">
                                                    <select name="company_id" id="company" style="cursor: pointer;"
                                                        class="form-control form-select form-select-solid" required>
                                                        <option value="0">Filter By Company...</option>
                                                        @foreach ($companies as $val)
                                                            <option value="{{ $val->id }}">
                                                                {{ $val->cname }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="card-toolbar" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-trigger="hover"
                                                    title="Click to Add User">
                                                    <a href="#" class="btn btn-sm btn-light btn-active-primary"
                                                        data-bs-toggle="modal" data-bs-target="#kt_modal_users">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="11.364" y="20.364" width="16"
                                                                    height="2" rx="1"
                                                                    transform="rotate(-90 11.364 20.364)"
                                                                    fill="currentColor" />
                                                                <rect x="4.36396" y="11.364" width="16" height="2"
                                                                    rx="1" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->Add User
                                                    </a>
                                                </div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body py-3" id="users_table">
                                                <!--begin::Table container-->
                                                <div id="mytable" class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table
                                                        class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                            <tr class="fw-bolder text-muted">
                                                                <th class="w-25px">
                                                                    <div
                                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="1" data-kt-check="true"
                                                                            data-kt-check-target=".widget-9-check" />
                                                                    </div>
                                                                </th>
                                                                <th class="min-w-50px">ID</th>
                                                                <th class="min-w-150px">Name</th>
                                                                <th class="min-w-150px">Email</th>
                                                                <th class="min-w-200px">Company</th>
                                                                <th class="min-w-100px">Position</th>
                                                                <th class="min-w-150px text-center">Status</th>
                                                                <th class="min-w-100px text-center">Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody>
                                                            @php $count=1; @endphp
                                                            @foreach ($users as $val)
                                                                <tr>
                                                                    <td>
                                                                        <div
                                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                                            <input
                                                                                class="form-check-input widget-9-check"
                                                                                type="checkbox" value="1" />
                                                                        </div>
                                                                    </td>
                                                                    <td style="display:none;">
                                                                        <label href="#"
                                                                            class="text-muted fw-bolder d-block fs-6">{{ $val['id'] }}</label>
                                                                    </td>
                                                                    <td>
                                                                        <label href="#"
                                                                            class="text-muted fw-bolder d-block fs-6">{{ $count }}</label>
                                                                    </td>
                                                                    <td>
                                                                        <label href="#"
                                                                            class="text-dark text-hover-primary fw-bolder d-block fs-6">{{ $val['name'] }}</label>
                                                                    </td>
                                                                    <td>
                                                                        <label href="#"
                                                                            class="text-muted fw-bolder d-block fs-6">{{ $val['email'] }}</label>
                                                                    </td>
                                                                    <td>
                                                                        <label href="#"
                                                                            class="text-muted fw-bolder d-block fs-6">{{ $val['company'] }}</label>
                                                                    </td>
                                                                    <td>
                                                                        <label href="#"
                                                                            class="text-muted fw-bolder d-block fs-6">{{$val['position']}}</label>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <span
                                                                            @if ($val['status'] == 1) class="badge badge-light-success" @else class="badge badge-light-danger" @endif>{{ $val['status'] == 1 ? 'Active' : 'Inactive' }}</span>
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="d-flex justify-content-end flex-shrink-0">
                                                                            <a href="{{ url('/user_status/' . $val['id']) }}"
                                                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top"
                                                                                title="Change Status">
                                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                                                <span class="svg-icon svg-icon-3">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none">
                                                                                        <path
                                                                                            d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                                            fill="currentColor" />
                                                                                        <path opacity="0.3"
                                                                                            d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                                            fill="currentColor" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </a>
                                                                            <a href="#"
                                                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#kt_modal_edit_user_{{ $val['id'] }}">
                                                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                                <span class="svg-icon svg-icon-3"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    title="Edit User Details">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none">
                                                                                        <path opacity="0.3"
                                                                                            d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                                            fill="currentColor" />
                                                                                        <path
                                                                                            d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                                            fill="currentColor" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </a>
                                                                            <a class="delete btn btn-icon btn-bg-light btn-active-color-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top"
                                                                                title="Delete User">
                                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                                                <span class="svg-icon svg-icon-3">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none">
                                                                                        <path
                                                                                            d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                            fill="currentColor" />
                                                                                        <path opacity="0.5"
                                                                                            d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                            fill="currentColor" />
                                                                                        <path opacity="0.5"
                                                                                            d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                            fill="currentColor" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                @php $count++; @endphp
                                                            @endforeach
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Table container-->
                                            </div>
                                            <!--begin::Body-->
                                        </div>
                                        <!--end::Tables Widget 9-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Container-->
                            <div class="modal fade" id="kt_modal_users" tabindex="-1" aria-hidden="true">
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
                                            <form id="add_form" action="{{ url('/add_users') }}" method="POST">
                                                @csrf
                                                <!--begin::Heading-->
                                                <div class="mb-13 text-center">
                                                    <!--begin::Title-->
                                                    <h1 class="mb-3">User Details</h1>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Heading-->
                                                <div class="d-flex flex-column mb-8 fv-row">
                                                    <label class="required fs-6 fw-bold mb-2" for="name"
                                                        style="margin-left: 5px">Name</label>
                                                    <input type="text" class="form-control form-control-solid"
                                                        name="name" id="uname" placeholder="User Name" required>
                                                </div>
                                                <div class="row g-9 mb-8">
                                                    <div class="col-md-12 fv-row">
                                                        <label class="required fs-6 fw-bold mb-2" for="email"
                                                            style="margin-left: 5px">Email</label>
                                                        <input type="email"
                                                            class="form-control form-control-solid" name="email"
                                                            id="uemail" placeholder="User Email" required>
                                                    </div>
                                                </div>
                                                <div class="row g-9 mb-8">
                                                    <div class="col-md-6 fv-row">
                                                        <label class="required fs-6 fw-bold mb-2" for="password"
                                                            style="margin-left: 5px">Password</label>
                                                        <div class="input-group">
                                                            <input type="password"
                                                                class="form-control form-control-solid" name="password"
                                                                id="upassword" placeholder="User Password"
                                                                value="{{ rand(0000000, 9999999) }}"
                                                                aria-label="User Password"
                                                                aria-describedby="basic-addon2" required />
                                                            <div class="input-group-append">
                                                                <button type="button" id="copypassword"
                                                                    class="btn form-control form-control-solid"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Copy Password"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-clipboard" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                                                        <path
                                                                            d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                                                                    </svg></button>
                                                            </div>
                                                        </div>
                                                        <div class="input-group" style="margin-left: 8px">
                                                            <input id="passcheckbox" type="checkbox"
                                                                onclick="showpass()" style="margin-right: 5px">Show
                                                            Password
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 fv-row">
                                                        <label class="required fs-6 fw-bold mb-2"
                                                            style="margin-left: 5px" for="company">Company</label>
                                                        <!--begin::Select2-->
                                                        <select name="company_id" id="company_id"
                                                            style="cursor: pointer;"
                                                            class="form-control form-select form-select-solid"
                                                            required>
                                                            <option value="">Choose Company...</option>
                                                            @foreach ($companies as $val)
                                                                <option value="{{ $val->id }}">
                                                                    {{ $val->cname }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <!--end::Select2-->
                                                    </div>
                                                </div>
                                                <div class="row g-9 mb-8">
                                                    <div class="col-md-6 fv-row">
                                                        <label class="required fs-6 fw-bold mb-2"
                                                            style="margin-left: 5px" for="phone">Phone</label>
                                                        <input type="number" class="form-control form-control-solid"
                                                            name="phone" style="cursor: pointer;" placeholder="phone"
                                                            id="phone" required>
                                                    </div>
                                                    <div class="col-md-6 fv-row">
                                                        <label class="required fs-6 fw-bold mb-2"
                                                            style="margin-left: 5px" for="position">Position</label>
                                                        <!--begin::Select2-->
                                                        <select name="position" id="position"
                                                            style="cursor: pointer;"
                                                            class="form-control form-select form-select-solid"
                                                            required>
                                                            <option value="">Choose Position...</option>
                                                            <option value="0">Admin</option>
                                                            <option value="2">Recruiter</option>
                                                            <option value="3">Hiring Manager</option>
                                                        </select>
                                                        <!--end::Select2-->
                                                    </div>
                                                    <div class="col-md-12 fv-row">
                                                        <label class="required fs-6 fw-bold mb-2" for="caddress"
                                                            style="margin-left: 5px">Address</label>
                                                        <textarea type="text" class="form-control form-control-solid" name="address" id="address"
                                                            placeholder="Enter User Address" required></textarea>
                                                    </div>
                                                    <div class="text-center">
                                                        <button id="adduser" type="submit"
                                                            class="btn btn-primary mt-5">Add
                                                            User</button>
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
                            @foreach ($users as $val)
                                <div class="modal fade" id="kt_modal_edit_user_{{ $val['id'] }}" tabindex="-1"
                                    aria-hidden="true">
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
                                                <form action="{{ url('/edit_users') }}"
                                                    method="POST">
                                                    @csrf
                                                    <!--begin::Heading-->
                                                    <div class="mb-13 text-center">
                                                        <!--begin::Title-->
                                                        <h1 class="mb-3">User Details</h1>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Heading-->
                                                    <input type="hidden" name="id" id="id" value="{{ $val['id'] }}">
                                                    <div class="d-flex flex-column mb-8 fv-row">
                                                        <label class="required fs-6 fw-bold mb-2"
                                                            style="margin-left: 5px" for="name">Name</label>
                                                        <input type="text" class="form-control form-control-solid"
                                                            name="name" id="name" placeholder="Name"
                                                            value="{{ empty($val['name']) ? '' : $val['name'] }}"
                                                            required>
                                                    </div>
                                                    <div class="row g-9 mb-8">
                                                        <div class="col-md-6 fv-row">
                                                            <label class="required fs-6 fw-bold mb-2"
                                                                style="margin-left: 5px" for="inputEmail4">Email</label>
                                                            <input type="email" class="form-control form-control-solid" name="email"
                                                                id="email" placeholder="Email"
                                                                value="{{ empty($val['email']) ? '' : $val['email'] }}"
                                                                required>
                                                        </div>
                                                        <div class="col-md-6 fv-row">
                                                            <label class="required fs-6 fw-bold mb-2"
                                                                style="margin-left: 5px" for="company">Company</label>
                                                            <!--begin::Select2-->
                                                            <select name="company_id" id="userscompany_id"
                                                                style="cursor: pointer;"
                                                                class="form-control form-select form-select-solid"
                                                                required>
                                                                @foreach ($companies as $value)
                                                                    @if ($value->id == $val['company_id'])
                                                                        <option selected value="{{ $value->id }}">
                                                                            {{ $value->cname }}
                                                                        </option>
                                                                    @else
                                                                        <option value="{{ $value->id }}">
                                                                            {{ $value->cname }}
                                                                        </option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                            <!--end::Select2-->
                                                        </div>
                                                    </div>
                                                    <div class="row g-9 mb-8">
                                                        <div class="col-md-6 fv-row">
                                                            <label class="required fs-6 fw-bold mb-2"
                                                                style="margin-left: 5px" for="phone">Phone</label>
                                                            <input type="number"
                                                                class="form-control form-control-solid" name="phone"
                                                                style="cursor: pointer;" placeholder="phone"
                                                                id="user_phone"
                                                                value="{{ empty($val['phone']) ? '' : $val['phone'] }}"
                                                                required>
                                                        </div>
                                                        <div class="col-md-6 fv-row">
                                                            <label class="required fs-6 fw-bold mb-2"
                                                                style="margin-left: 5px" for="company">Position</label>
                                                            <!--begin::Select2-->
                                                            <select name="position" id="position"
                                                                style="cursor: pointer;"
                                                                class="form-control form-select form-select-solid"
                                                                required>
                                                                <option value="">Choose Position...</option>
                                                                <option @if($val['position_id']==0) selected @endif value="0">Admin</option>
                                                                <option @if($val['position_id']==2) selected @endif value="2">Recruiter</option>
                                                                <option @if($val['position_id']==3) selected @endif value="3">Hiring Manager</option>
                                                            </select>
                                                            <!--end::Select2-->
                                                        </div>
                                                        <div class="col-md-12 fv-row">
                                                            <label class="required fs-6 fw-bold mb-2" for="address"
                                                                style="margin-left: 5px">Address</label>
                                                            <textarea type="text" class="form-control form-control-solid" name="address" id="user_address"
                                                                placeholder="Enter User Address" required>{{ empty($val['address']) ? '' : $val['address'] }}</textarea>
                                                        </div>
                                                        <div class="text-center">
                                                            <button type="submit"
                                                                class="update btn btn-primary mt-5">Update
                                                                User</button>
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
                            @endforeach
                        </div>
                    @elseif($flag == 0)
                        <div class="post d-flex flex-column-fluid" id="kt_post">
                            <!--begin::Container-->
                            <div id="kt_content_container" class="container-xxl">
                                <!--begin::Row-->
                                <div class="row gy-5 g-xl-8">
                                    <!--begin::Col-->
                                    <div class="col-xl-12">
                                        <!--begin::Tables Widget 9-->
                                        <div class="card card-xl-stretch mb-5 mb-xl-8">
                                            <!--begin::Header-->
                                            <div class="card-header border-0 pt-5">
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bolder fs-3 mb-1">All Users</span>
                                                </h3>
                                                <div class="card-toolbar" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-trigger="hover"
                                                    title="Click to Add User">
                                                    <a href="#" class="btn btn-sm btn-light btn-active-primary"
                                                        data-bs-toggle="modal" data-bs-target="#kt_modal_users">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="11.364" y="20.364" width="16"
                                                                    height="2" rx="1"
                                                                    transform="rotate(-90 11.364 20.364)"
                                                                    fill="currentColor" />
                                                                <rect x="4.36396" y="11.364" width="16" height="2"
                                                                    rx="1" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->Add User
                                                    </a>
                                                </div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body py-3">
                                                <!--begin::Table container-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table
                                                        class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                            <tr class="fw-bolder text-muted">
                                                                <th class="w-25px">
                                                                    <div
                                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="1" data-kt-check="true"
                                                                            data-kt-check-target=".widget-9-check" />
                                                                    </div>
                                                                </th>
                                                                <th class="min-w-50px">ID</th>
                                                                <th class="min-w-150px">Name</th>
                                                                <th class="min-w-150px">Email</th>
                                                                <th class="min-w-150px">Phone</th>
                                                                <th class="min-w-100px">Position</th>
                                                                <th class="min-w-150px text-center">Status</th>
                                                                <th class="min-w-100px text-center">Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody>
                                                            @php $count=1; @endphp
                                                            @foreach ($users as $val)
                                                                <tr>
                                                                    <td>
                                                                        <div
                                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                                            <input
                                                                                class="form-check-input widget-9-check"
                                                                                type="checkbox" value="1" />
                                                                        </div>
                                                                    </td>
                                                                    <td style="display:none;">
                                                                        <label href="#"
                                                                            class="text-muted fw-bolder d-block fs-6">{{ $val['id'] }}</label>
                                                                    </td>
                                                                    <td>
                                                                        <label href="#"
                                                                            class="text-muted fw-bolder d-block fs-6">{{ $count }}</label>
                                                                    </td>
                                                                    <td>
                                                                        <label href="#"
                                                                            class="text-dark text-hover-primary fw-bolder d-block fs-6">{{ $val['name'] }}</label>
                                                                    </td>
                                                                    <td>
                                                                        <label href="#"
                                                                            class="text-muted fw-bolder d-block fs-6">{{ $val['email'] }}</label>
                                                                    </td>
                                                                    <td>
                                                                        <label href="#"
                                                                            class="text-muted fw-bolder d-block fs-6">{{ $val['phone'] }}</label>
                                                                    </td>
                                                                    <td>
                                                                        <label href="#"
                                                                            class="text-muted fw-bolder d-block fs-6">{{$val['position']}}</label>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <span
                                                                            @if ($val['status'] == 1) class="badge badge-light-success" @else class="badge badge-light-danger" @endif>{{ $val['status'] == 1 ? 'Active' : 'Inactive' }}</span>
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="d-flex justify-content-end flex-shrink-0">
                                                                            <a href="{{ url('/user_status/' . $val['id']) }}"
                                                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top"
                                                                                title="Change Status">
                                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                                                <span class="svg-icon svg-icon-3">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none">
                                                                                        <path
                                                                                            d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                                            fill="currentColor" />
                                                                                        <path opacity="0.3"
                                                                                            d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                                            fill="currentColor" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </a>
                                                                            <a href="#"
                                                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#kt_modal_edit_user_{{ $val['id'] }}">
                                                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                                <span class="svg-icon svg-icon-3"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    title="Edit User Details">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none">
                                                                                        <path opacity="0.3"
                                                                                            d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                                            fill="currentColor" />
                                                                                        <path
                                                                                            d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                                            fill="currentColor" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </a>
                                                                            <a class="delete btn btn-icon btn-bg-light btn-active-color-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top"
                                                                                title="Delete User">
                                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                                                <span class="svg-icon svg-icon-3">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none">
                                                                                        <path
                                                                                            d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                            fill="currentColor" />
                                                                                        <path opacity="0.5"
                                                                                            d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                            fill="currentColor" />
                                                                                        <path opacity="0.5"
                                                                                            d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                            fill="currentColor" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                @php $count++; @endphp
                                                            @endforeach
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Table container-->
                                            </div>
                                            <!--begin::Body-->
                                        </div>
                                        <!--end::Tables Widget 9-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Container-->
                            <div class="modal fade" id="kt_modal_users" tabindex="-1" aria-hidden="true">
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
                                            <form id="add_form" action="{{ url('/add_users') }}" method="POST">
                                                @csrf
                                                <!--begin::Heading-->
                                                <input type="hidden" name="company_id" value="{{ $id }}">
                                                <div class="mb-13 text-center">
                                                    <!--begin::Title-->
                                                    <h1 class="mb-3">User Details</h1>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Heading-->
                                                <div class="d-flex flex-column mb-8 fv-row">
                                                    <label class="required fs-6 fw-bold mb-2" for="name"
                                                        style="margin-left: 5px">Name</label>
                                                    <input type="text" class="form-control form-control-solid mb-8"
                                                        name="name" id="uname" placeholder="User Name" required>
                                                </div>
                                                <div class="row g-9 mb-8">
                                                    <div class="col-md-6 fv-row">
                                                        <label class="required fs-6 fw-bold mb-2" for="email"
                                                            style="margin-left: 5px">Email</label>
                                                        <input type="email"
                                                            class="form-control form-control-solid mb-8" name="email"
                                                            id="uemail" placeholder="User Email" required>
                                                    </div>
                                                    <div class="col-md-6 fv-row">
                                                        <label class="required fs-6 fw-bold mb-2" for="password"
                                                            style="margin-left: 5px">Password</label>
                                                        <div class="input-group mb-3">
                                                            <input type="password"
                                                                class="form-control form-control-solid" name="password"
                                                                id="upassword" placeholder="User Password"
                                                                value="{{ rand(0000000, 9999999) }}"
                                                                aria-label="User Password"
                                                                aria-describedby="basic-addon2" required />
                                                            <div class="input-group-append">
                                                                <button type="button" id="copypassword"
                                                                    class="btn form-control form-control-solid"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Copy Password"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-clipboard" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                                                        <path
                                                                            d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                                                                    </svg></button>
                                                            </div>
                                                        </div>
                                                        <div class="input-group mb-3" style="margin-left: 8px">
                                                            <input id="passcheckbox" type="checkbox"
                                                                onclick="showpass()" style="margin-right: 5px">Show
                                                            Password
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-9 mb-8">
                                                    <div class="col-md-6 fv-row">
                                                        <label class="required fs-6 fw-bold mb-2"
                                                            style="margin-left: 5px" for="phone">Phone</label>
                                                        <input type="number" class="form-control form-control-solid"
                                                            name="phone" style="cursor: pointer;" placeholder="phone"
                                                            id="phone" required>
                                                    </div>
                                                    <div class="col-md-6 fv-row">
                                                        <label class="required fs-6 fw-bold mb-2"
                                                            style="margin-left: 5px" for="company">Position</label>
                                                        <!--begin::Select2-->
                                                        <select name="position" id="position"
                                                            style="cursor: pointer;"
                                                            class="form-control form-select form-select-solid"
                                                            required>
                                                            <option value="">Choose Position...</option>
                                                            <option value="0">Admin</option>
                                                            <option value="2">Recruiter</option>
                                                            <option value="3">Hiring Manager</option>
                                                        </select>
                                                        <!--end::Select2-->
                                                    </div>
                                                </div>
                                                <div class="row g-9 mb-8">
                                                    <div class="col-md-12 fv-row">
                                                        <label class="required fs-6 fw-bold mb-2" for="address"
                                                            style="margin-left: 5px">Address</label>
                                                        <textarea type="text" class="form-control form-control-solid" name="address" id="address"
                                                            placeholder="Enter User Address" required></textarea>
                                                    </div>
                                                    <div class="text-center">
                                                        <button id="adduser" type="submit"
                                                            class="btn btn-primary mt-5">Add
                                                            User</button>
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
                            @foreach ($users as $val)
                                <div class="modal fade" id="kt_modal_edit_user_{{ $val['id'] }}" tabindex="-1"
                                    aria-hidden="true">
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
                                                <form action="{{ url('/edit_users') }}"
                                                    method="POST">
                                                    @csrf
                                                    <!--begin::Heading-->
                                                    <div class="mb-13 text-center">
                                                        <!--begin::Title-->
                                                        <h1 class="mb-3">User Details</h1>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Heading-->
                                                    <input type="hidden" name="id" id="user_id"
                                                        value="{{ $val['id'] }}">
                                                    <input type="hidden" name="company_id" value="{{ $id }}">
                                                    <div class="d-flex flex-column mb-8 fv-row">
                                                        <label class="required fs-6 fw-bold mb-2"
                                                            style="margin-left: 5px" for="name">Name</label>
                                                        <input type="text" class="form-control form-control-solid mb-8"
                                                            name="name" id="name" placeholder="Name"
                                                            value="{{ empty($val['name']) ? '' : $val['name'] }}"
                                                            required>

                                                        <label class="required fs-6 fw-bold mb-2"
                                                            style="margin-left: 5px" for="inputEmail4">Email</label>
                                                        <input type="email" class="form-control form-control-solid" name="email"
                                                            id="user_email" placeholder="Email"
                                                            value="{{ empty($val['email']) ? '' : $val['email'] }}"
                                                            required>
                                                    </div>
                                                    <div class="row g-9 mb-8">
                                                        <div class="col-md-6 fv-row">
                                                            <label class="required fs-6 fw-bold mb-2"
                                                                style="margin-left: 5px" for="phone">Phone</label>
                                                            <input type="number"
                                                                class="form-control form-control-solid" name="phone"
                                                                style="cursor: pointer;" placeholder="phone"
                                                                id="user_phone"
                                                                value="{{ empty($val['phone']) ? '' : $val['phone'] }}"
                                                                required>
                                                        </div>
                                                        <div class="col-md-6 fv-row">
                                                            <label class="required fs-6 fw-bold mb-2"
                                                                style="margin-left: 5px" for="company">Position</label>
                                                            <!--begin::Select2-->
                                                            <select name="position" id="position"
                                                                style="cursor: pointer;"
                                                                class="form-control form-select form-select-solid"
                                                                required>
                                                                <option value="">Choose Position...</option>
                                                                <option @if($val['position_id']==0) selected @endif value="0">Admin</option>
                                                                <option @if($val['position_id']==2) selected @endif value="2">Recruiter</option>
                                                                <option @if($val['position_id']==3) selected @endif value="3">Hiring Manager</option>
                                                            </select>
                                                            <!--end::Select2-->
                                                        </div>
                                                    </div>
                                                    <div class="row g-9 mb-8">
                                                        <div class="col-md-12 fv-row">
                                                            <label class="required fs-6 fw-bold mb-2" for="address"
                                                                style="margin-left: 5px">Address</label>
                                                            <textarea type="text" class="form-control form-control-solid" name="address" id="user_address"
                                                                placeholder="Enter User Address" required>{{ empty($val['address']) ? '' : $val['address'] }}</textarea>
                                                        </div>
                                                        <div class="text-center">
                                                            <button type="submit" 
                                                                class="update btn btn-primary mt-5">Update User</button>
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
                            @endforeach
                        </div>
                    @endif
                    <!--end::Post-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <x-footer />
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Page Custom Javascript-->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $("#copypassword").hide();
        function showpass() {
            var x = document.getElementById("upassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }

            $("#copypassword").prop('disabled', true);

            if (x.type == "text") {
                $("#copypassword").show();
                $("#copypassword").prop('disabled', false);
                $("#copypassword").click(function(e) {
                    e.preventDefault();
                    var pass = $('#upassword');
                    pass.select();
                    document.execCommand("copy");

                    console.log($(this).tooltip('hide').attr('title', 'Link Copied').tooltip('show'));
                });
            }
            else{

                $("#copypassword").hide();
            }
        }
    </script>

    <script>
        $(document).ready(function(){
            $("#mytable").mousewheel(function(event, delta) {
        
                //The "30" represents speed. preventDefault ensures the page won't scroll down.
                this.scrollLeft -= (delta * 30);
                event.preventDefault();
        
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#company').change(function(e) {
                e.preventDefault();
                var company_id = $(this).val();

                $.ajax({
                    type: "get",
                    url: "users",
                    data: {
                        'company_id': company_id
                    },
                    success: function(response) {
                        console.log(response);
                        $('#users_table').empty();
                        $('#users_table').html(response);

                    },
                    error: function(e) {
                        console.log(e)
                    }
                });
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".delete").on("click", function() {

                var currentRow = $(this).closest("tr");
                var col1 = currentRow.find("td:eq(1)").text(); // get current row 1st TD value
                var id = col1.trim();
                var string_url = '/deleteuser/' + id;
                console.log(string_url)

                swal({
                    title: "Are you sure!",
                    text: "Do you really want to remove User!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            type: "get",
                            url: string_url,
                            data: "",
                            success: function(data) {
                                console.log(data);
                                if (data == 1) {
                                    swal("User successfully deleted!", {
                                        icon: "success",
                                    });
                                    currentRow.remove();
                                } else {
                                    swal("User not deleted!", {
                                        icon: "error",
                                    });
                                }
                            }
                        })

                    } else {
                        swal("User is safe!", {
                            icon: "error",
                        });
                    }
                });
            });

        });
    </script>

    {{-- <script type="text/javascript">
        $(document).ready(function() {
            $(".update").on("click", function(e) {

                e.preventDefault();

                swal({
                    title: "Are you sure!",
                    text: "Do you really want to update user Details!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willupdate) => {
                    console.log(id)
                    if (willupdate) {

                        $('.update_form').submit();

                    } else {
                        swal("Update cancel!", {
                            icon: "error",
                        });
                    }
                });
            });


        });
    </script> --}}
    <!--end::Javascript-->
    @if (session()->has('success_msg'))
        @php $msg=session()->get('success_msg'); @endphp
        <script>
            var success_msg = "<?php echo "$msg"; ?>";
            console.log(success_msg);
            swal(success_msg, {
                icon: "success",
            });
        </script>
    @elseif(session()->has('error_msg'))
        @php $msg=session()->get('error_msg'); @endphp
        <script>
            var error_msg = "<?php echo "$msg"; ?>";
            console.log(error_msg);
            swal(error_msg, {
                icon: "error",
            });
        </script>
    @endif

    @error('email')
        <script>
            var error = "<?php echo "$message"; ?>";
            swal(error, {
                icon: "error",
            });
        </script>
    @enderror

    @error('name')
        <script>
            var error = "<?php echo "$message"; ?>";
            swal(error, {
                icon: "error",
            });
        </script>
    @enderror
    @error('usertype')
        <script>
            var error = "<?php echo "$message"; ?>";
            swal(error, {
                icon: "error",
            });
        </script>
    @enderror
    @error('company_id')
        <script>
            var error = "<?php echo "$message"; ?>";
            swal(error, {
                icon: "error",
            });
        </script>
    @enderror
    @error('position')
    <script>
        var error = "<?php echo "$message"; ?>";
        swal(error, {
            icon: "error",
        });
    </script>
    @enderror

    {{-- <script>
        var id = $('#tempcomid').val();
        $("#company").val(id);
    </script> --}}
</body>
<!--end::Body-->

</html>
