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
    @php
        $user=auth()->user();
    @endphp
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <x-sidebar/>
            <!--end::Aside-->

            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <x-header/>
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
                                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Dashboard
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
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container-->
                        <div id="kt_content_container" class="container-xxl">
                            <!--begin::Row-->
                            <div class="row gy-5 g-xl-8">
                                <!--begin::Col-->
                                <div class="col-xl-12">
                                    <!--begin::Mixed Widget 2-->
                                    <div class="card card-xl-stretch">
                                        <!--begin::Body-->
                                        <div class="card-body p-0">
                                            <!--begin::Stats-->
                                            <div class="card-p mt-n20 position-relative">
                                                <!--begin::Row-->
                                                <div class="row g-0">
                                                    <!--begin::Col-->
                                                    <div class="col bg-light-warning px-6 py-8 rounded-2 me-3 mb-7">
                                                        <div class="col-12 text-center mt-5"><a
                                                                href="{{ url('/tests') }}"
                                                                class="text-warning fw-bold fs-3">{{ empty($cat) ? 0 : $cat }}</a>
                                                        </div>
                                                        <div class="col-12 text-center"><a
                                                                href="{{ url('/tests') }}"
                                                                class="text-warning fw-bold fs-6">Tests</a></div>
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col bg-light-primary px-6 py-8 rounded-2 me-3 mb-7">
                                                        <div class="col-12 text-center mt-5"><a
                                                                href="{{ url('/assessment') }}"
                                                                class="text-primary fw-bold fs-3">{{ empty($can) ? 0 : $can }}</a>
                                                        </div>
                                                        <div class="col-12 text-center"><a
                                                                href="{{ url('/assessment') }}"
                                                                class="text-primary fw-bold fs-6">Assessment</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col bg-light-danger px-6 py-8 rounded-2 mb-7">
                                                        <a href="#" class="text-danger fw-bold fs-3 mt-2"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_new_category">
                                                            <div class="card"
                                                                style="width: 35px;height: 29px;margin: auto;margin-bottom: 8px;">
                                                                <div class="col-12 text-center mt-auto">+</div>
                                                            </div>
                                                        </a>
                                                        <div class="col-12 text-center"><a href="#"
                                                                class="text-danger fw-bold fs-6 mt-2"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_new_category">New Test</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Mixed Widget 2-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <div class="modal fade" id="kt_modal_new_category" tabindex="-1" aria-hidden="true">
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
                                        @if($flag==1)
                                            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                                                <form action="{{ url('/addcategory') }}" method="POST"
                                                    class="form">
                                                    @csrf
                                                    <!--begin::Heading-->
                                                    <div class="mb-13 text-center">
                                                        <!--begin::Title-->
                                                        <h1 class="mb-3">New Test</h1>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Heading-->
                                                    <div class="d-flex flex-column mb-8 fv-row">
                                                        <label class="required fs-6 fw-bold mb-2" for="cname"
                                                            style="margin-left: 5px">Test Name</label>
                                                        <input type="text" class="form-control form-control-solid mb-8"
                                                            name="name" id="cname" placeholder="Name" required>
                                                    </div>
                                                    <div class="row g-9 mb-8">
                                                        <div class="col-md-6 fv-row">
                                                            <label class="required fs-6 fw-bold mb-2" style="margin-left: 5px"
                                                            for="duration">Test
                                                            Duration (in minutes)</label>
                                                            <input type="number" class="form-control form-control-solid"
                                                            name="duration" id="duration" placeholder="Test Duration"
                                                            required> 
                                                        </div>
                                                        <div class="col-md-6 fv-row">
                                                            <label class="required fs-6 fw-bold mb-2" style="margin-left: 5px"
                                                                for="company">Company</label>
                                                            <!--begin::Select2-->
                                                            <select name="company_id" id="company_id" style="cursor: pointer;"
                                                                class="form-control form-select form-select-solid" required>
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
                                                        <div class="col-md-12 fv-row">
                                                            <label class="required fs-6 fw-bold mb-2"
                                                                style="margin-left: 5px"
                                                                for="description">Description</label>
                                                            <textarea type="text" class="form-control form-control-solid w-100 h-100px" name="description"
                                                                placeholder="Test Description" id="description" required></textarea>
                                                        </div>
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-primary">Add</button>
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        @elseif($flag==0)
                                            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                                                <form action="{{ url('/addcategory') }}" method="POST"
                                                    class="form">
                                                    @csrf
                                                    <!--begin::Heading-->
                                                    <div class="mb-13 text-center">
                                                        <!--begin::Title-->
                                                        <h1 class="mb-3">New Test</h1>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Heading-->
                                                    <div class="d-flex flex-column mb-8 fv-row">
                                                        <label class="required fs-6 fw-bold mb-2" for="cname"
                                                            style="margin-left: 5px">Test Name</label>
                                                        <input type="text" class="form-control form-control-solid"
                                                            name="name" id="cname" placeholder="Name" required>
                                                            <input type="hidden" name="company_id" value="{{$user->company_id}}">
                                                    </div>
                                                    <div class="row g-9 mb-8">
                                                        <div class="col-md-12 fv-row">
                                                            <label class="required fs-6 fw-bold mb-2" style="margin-left: 5px"
                                                            for="duration">Test
                                                            Duration (in minutes)</label>
                                                            <input type="number" class="form-control form-control-solid"
                                                            name="duration" id="duration" placeholder="Test Duration"
                                                            required> 
                                                        </div>
                                                    </div>
                                                    <div class="row g-9 mb-8">
                                                        <div class="col-md-12 fv-row">
                                                            <label class="required fs-6 fw-bold mb-2"
                                                                style="margin-left: 5px"
                                                                for="description">Description</label>
                                                            <textarea type="text" class="form-control form-control-solid w-100 h-100px" name="description"
                                                                placeholder="Test Description" id="description" required></textarea>
                                                        </div>
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-primary">Add</button>
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        @endif
                                        <!--end::Modal body-->
                                    </div>
                                    <!--end::Modal content-->
                                </div>
                                <!--end::Modal dialog-->
                            </div>
                        </div>
                        <!--end::Container-->
                    </div>
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
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
