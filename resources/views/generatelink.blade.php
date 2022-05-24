<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>MetricoidTech</title>
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
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
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
            <div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
                data-kt-drawer-toggle="#kt_aside_mobile_toggle">
                <!--begin::Brand-->
                <div class="aside-logo flex-column-auto" id="kt_aside_logo">
                    <!--begin::Logo-->
                    <a href="{{ url('/dashboard') }}">
                        <img alt="Logo" src="{{ url('images/metricoidlogo.png') }}" class="h-35px logo" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Aside toggler-->
                    <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
                        data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                        data-kt-toggle-name="aside-minimize">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
                        <span class="svg-icon svg-icon-1 rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path opacity="0.5"
                                    d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                                    fill="currentColor" />
                                <path
                                    d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Aside toggler-->
                </div>
                <!--end::Brand-->
                <!--begin::Aside menu-->
                <div class="aside-menu flex-column-fluid">
                    <!--begin::Aside Menu-->
                    <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
                        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
                        data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
                        data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
                        <!--begin::Menu-->
                        <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                            id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
                            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
                                                <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                                    fill="currentColor" />
                                                <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                                    fill="currentColor" />
                                                <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Dashboards</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                    <div class="menu-item">
                                        <a class="menu-link active" href="{{ url('/generatelink') }}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Generate Link</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ url('/assessment') }}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Assessment</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ url('/categories') }}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Categories</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-content">
                                    <div class="separator mx-1 my-4"></div>
                                </div>
                            </div>
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Aside Menu-->
                </div>
                <!--end::Aside menu-->
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
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
                            <a href="../../demo1/dist/index.html" class="d-lg-none">
                                <img alt="Logo" src="assets/media/logos/logo-2.svg" class="h-30px" />
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
                                                    <a class="menu-link active py-3"
                                                        href="{{ url('/generatelink') }}">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Generate Link</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3" href="{{ url('/assessment') }}">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Assessment</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3" href="{{ url('/categories') }}">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Categories</span>
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
                                <div class="mt-4">
                                    <a href="{{ url('/logout') }}" class="btn btn-sm btn-primary">
                                        <span class="menu-link py-3">
                                            <span class="menu-title">Sign Out</span>
                                            <span class="menu-arrow d-lg-none"></span>
                                        </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Toolbar wrapper-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
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
                                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1" id="generateLink">
                                    Generate Link
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
                    <!--begin::Container-->
                    <div id="kt_content_container" class="container-xxl">
                        <div class="row gy-5 g-xl-8">
                            <!--begin::Col-->
                            <div class="col-xl-12">
                                <!--begin::Tables Widget 9-->
                                <div class="card card-xl-stretch mb-5 mb-xl-8">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder fs-3 mb-1">Candidates Links</span>
                                            {{-- <span class="text-muted mt-1 fw-bold fs-7">Over 500 members</span> --}}
                                        </h3>
                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-trigger="hover" title="Click to Generate Link">
                                            <a href="#" class="btn btn-sm btn-light btn-active-primary"
                                                data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                                            rx="1" transform="rotate(-90 11.364 20.364)"
                                                            fill="currentColor" />
                                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->Generate Link
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body py-3">
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
                                                        <th class="min-w-150px">Phone</th>
                                                        <th class="min-w-150px">category</th>
                                                        <th class="min-w-100px">Link</th>
                                                        <th class="min-w-150px text-center">Status</th>
                                                        <th class="min-w-100px text-center">Actions</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    @php $count=1; @endphp
                                                    @foreach ($data as $val)
                                                        <tr>
                                                            <td>
                                                                <div
                                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                                    <input class="form-check-input widget-9-check"
                                                                        type="checkbox" value="1" />
                                                                </div>
                                                            </td>
                                                            <td style="display:none;">
                                                                <label
                                                                    class="text-muted fw-bolder d-block fs-6">{{ $val->id }}</label>
                                                            </td>
                                                            <td>
                                                                <label href="#"
                                                                    class="text-muted fw-bolder d-block fs-6">{{ $count }}</label>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div
                                                                        class="d-flex justify-content-start flex-column">
                                                                        <a href="#"
                                                                            class="text-dark fw-bolder text-hover-primary fs-6">{{ $val->name }}</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <label href="#"
                                                                    class="text-muted fw-bolder d-block fs-6">{{ $val->email }}</label>
                                                            </td>
                                                            <td>
                                                                <label href="#"
                                                                    class="text-muted fw-bolder d-block fs-6">{{ $val->phone }}</label>
                                                            </td>
                                                            <td>
                                                                <label href="#"
                                                                    class="text-muted fw-bolder d-block fs-6">{{ $val->category }}</label>
                                                            </td>
                                                            <td>
                                                                <label href="#"
                                                                    class="text-muted fw-bolder d-block fs-6">{{ url($val->link) }}</label>
                                                            </td>
                                                            <td class="text-center">
                                                                <span
                                                                    @if ($val->status == 1) class="badge badge-light-success" @else class="badge badge-light-danger" @endif>{{ $val->status == 1 ? 'Active' : 'Inactive' }}</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                                    <a href="{{ url('/changeStatusglink/' . $val->id) }}"
                                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
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
                                                                    <a href=""
                                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#kt_modal_edit_link_{{ $val->id }}">
                                                                        <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                        <span class="svg-icon svg-icon-3"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Edit Link">
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
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="Delete Link">
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
                    </div>
                    <!--end::Container-->
                    <div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog mw-650px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header pb-0 border-0 justify-content-end">
                                    <!--begin::Close-->
                                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
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
                                    <form action="{{ url('/linkgenerate') }}" method="POST" class="form">
                                        @csrf
                                        <!--begin::Heading-->
                                        <div class="mb-13 text-center">
                                            <!--begin::Title-->
                                            <h1 class="mb-3">Candidate Details</h1>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Heading-->
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="required fs-6 fw-bold mb-2" for="cname">Name</label>
                                            <input type="text" class="form-control form-control-solid" name="name"
                                                id="cname" placeholder="Name" required>

                                            <label class="required fs-6 fw-bold mb-2" for="inputEmail4">Email</label>
                                            <input type="email" class="form-control form-control-solid" name="email"
                                                id="inputEmail4" placeholder="Email" required>
                                        </div>
                                        <div class="row g-9 mb-8">
                                            <div class="col-md-6 fv-row">
                                                <label class="required fs-6 fw-bold mb-2" for="phone">Phone</label>
                                                <input type="number" class="form-control form-control-solid"
                                                    name="phone" placeholder="phone" id="phone" required>
                                            </div>
                                            <div class="col-md-6 fv-row">
                                                <label class="required fs-6 fw-bold mb-2"
                                                    for="inputCategory">Category</label>
                                                <!--begin::Select2-->
                                                <select name="category" id="inputCategory"
                                                    class="form-control form-select form-select-solid" required>
                                                    <option selected>Choose...</option>

                                                    @php $i=1; @endphp
                                                    @foreach ($categories as $val)
                                                        <option value="{{ $i }}">{{ $val->category }}
                                                        </option>
                                                        @php $i++; @endphp
                                                    @endforeach

                                                </select>
                                                <!--end::Select2-->
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary mt-5">Generate
                                                    Link</button>
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
                    @foreach ($data as $val)
                        <div class="modal fade" id="kt_modal_edit_link_{{ $val->id }}" tabindex="-1"
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
                                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                        transform="rotate(-45 6 17.3137)" fill="currentColor" />
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
                                        <form action="{{ url('/edit_link') }}" method="POST">
                                            @csrf
                                            <!--begin::Heading-->
                                            <div class="mb-13 text-center">
                                                <!--begin::Title-->
                                                <h1 class="mb-3">Candidate Details</h1>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Heading-->
                                            <input type="hidden" name="id" id="cid" value="{{ $val->id }}">
                                            <div class="d-flex flex-column mb-8 fv-row">
                                                <label class="required fs-6 fw-bold mb-2" for="cname">Name</label>
                                                <input type="text" class="form-control form-control-solid" name="name"
                                                    id="cname" placeholder="Name"
                                                    value="{{ empty($val->name) ? '' : $val->name }}" required>

                                                <label class="required fs-6 fw-bold mb-2"
                                                    for="inputEmail4">Email</label>
                                                <input type="email" class="form-control form-control-solid"
                                                    name="email" id="cemail" placeholder="Email"
                                                    value="{{ empty($val->email) ? '' : $val->email }}" required>
                                            </div>
                                            <div class="row g-9 mb-8">
                                                <div class="col-md-6 fv-row">
                                                    <label class="required fs-6 fw-bold mb-2" for="phone">Phone</label>
                                                    <input type="number" class="form-control form-control-solid"
                                                        name="phone" id="cphone" placeholder="phone"
                                                        value="{{ empty($val->phone) ? '' : $val->phone }}" required>
                                                </div>
                                                <div class="col-md-6 fv-row">
                                                    <label class="required fs-6 fw-bold mb-2" for="">Category</label>
                                                    <!--begin::Select2-->
                                                    <select name="category" id="inputnCategory"
                                                        class="form-control form-select form-select-solid" required>
                                                        @php $i=1; @endphp
                                                        @foreach ($categories as $value)
                                                            @if ($val->test_category_id == $value->id)
                                                                <option value="{{ $i }}" selected>
                                                                    {{ $value->category }}</option>
                                                            @else
                                                                <option value="{{ $i }}">
                                                                    {{ $value->category }}</option>
                                                            @endif
                                                            @php $i++; @endphp
                                                        @endforeach
                                                    </select>
                                                    <!--end::Select2-->
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary mt-5">Update
                                                        Link</button>
                                                    <button type="submit" id='sharelinkbtn'
                                                        class="btn btn-primary mt-5"
                                                        formaction="{{ url('/sharelink') }}">Share
                                                        Link</button>
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
    <!--end::Main-->

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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--end::Javascript-->

    <script type="text/javascript">
        $(document).ready(function() {
            $(".delete").on("click", function() {

                var currentRow = $(this).closest("tr");
                var col1 = currentRow.find("td:eq(1)").text(); // get current row 1st TD value
                var id = col1.trim();
                var string_url = '/deletelink/' + id;
                console.log(string_url)

                swal({
                    title: "Are you sure!",
                    text: "Do you really want to remove user!",
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

                            }
                        })
                        swal("Yaa! User successfully deleted!", {
                            icon: "success",
                        });
                        window.location.reload();
                    } else {
                        swal("User not deleted your user is safe!", {
                            icon: "error",
                        });
                    }
                });
            });

        });
    </script>

    <?php
        if (session()->has('msg')) {
            $msg = session()->get('msg');

            if($msg==1)
            {
    ?>
    <script>
        $(document).ready(function() {

            swal("Link Send!", "Link shared successfully!", "success");

        });
    </script>
    <?php
            }
            else
            {
        ?>
    <script>
        $(document).ready(function() {

            swal("Link not send!", "Please check link active or not", "error");

        });
    </script>
    <?php
            }
        }
    ?>


</body>
<!--end::Body-->

</html>
