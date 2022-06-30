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
    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
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
                                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1" id="generateLink">
                                    {{ $category }}
                                    <!--begin::Separator-->
                                    <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
                                    <!--end::Separator-->
                                    <!--begin::Description-->
                                    {{-- <span class="text-muted fs-7 fw-bold mt-2">#XRS-45670</span> --}}
                                    <!--end::Description-->
                                </h1>
                                <!--end::Title-->
                            </div>
                            <a href="{{ url('/tests') }}" class="btn btn-sm btn-primary">Back</a>
                            <!--end::Page title-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Toolbar-->
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
                                            <span class="card-label fw-bolder fs-3 mb-1">Questions</span>
                                            {{-- <span class="text-muted mt-1 fw-bold fs-7">Over 500 members</span> --}}
                                        </h3>
                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-trigger="hover" title="Click to add a question">
                                            <a href="#" class="btn btn-sm btn-light btn-active-primary"
                                                data-bs-toggle="modal" data-bs-target="#kt_modal_new_question">
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
                                                <!--end::Svg Icon-->New Question
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
                                                    <tr class="fw-bolder text-dark">
                                                        <th class="w-25px">
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="1" data-kt-check="true"
                                                                    data-kt-check-target=".widget-9-check" />
                                                            </div>
                                                        </th>
                                                        <th class="min-w-50px">ID</th>
                                                        <th class="min-w-150px">Questions</th>
                                                        {{-- <th class="min-w-150px text-center">Category</th> --}}
                                                        <th class="min-w-150px text-center">Type</th>
                                                        <th class="min-w-150px text-center">Status</th>
                                                        <th class="min-w-100px text-center">Actions</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    @php $count=1; @endphp
                                                    @foreach ($questions as $val)
                                                        <tr>
                                                            <td>
                                                                <div
                                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                                    <input class="form-check-input widget-9-check"
                                                                        type="checkbox" value="1" />
                                                                </div>
                                                            </td>
                                                            <td style="display: none;">
                                                                <label style="display: none"
                                                                    class="text-dark d-block fs-6">{{ $val->id }}</label>
                                                                {{-- <span class="text-muted fw-bold text-muted d-block fs-7">Web, UI/UX Design</span> --}}
                                                            </td>
                                                            <td>
                                                                <label class="text-dark d-block fs-6">{{ $count }}</label>
                                                                @php $count++ @endphp
                                                                {{-- <span class="text-muted fw-bold text-muted d-block fs-7">Web, UI/UX Design</span> --}}
                                                            </td>
                                                            <td>
                                                                <label class="text-dark d-block fs-6">{{ $val->questions }}</label>
                                                                {{-- <span class="text-muted fw-bold text-muted d-block fs-7">Web, UI/UX Design</span> --}}
                                                            </td>
                                                            {{-- <td>
                                                                <label class="text-muted text-center d-block fs-6">{{ $val->category }}</label>
                                                                <span class="text-muted fw-bold text-muted d-block fs-7">Web, UI/UX Design</span>
                                                            </td> --}}
                                                            <td>
                                                                <label class="text-dark text-center d-block fs-6">{{ ($val->type==1)? 'descriptive' : (($val->type==2) ? 'objective' : (($val->type==3) ? 'code' : 'Not define')) }}</label>
                                                                {{-- <span class="text-muted fw-bold text-muted d-block fs-7">Web, UI/UX Design</span> --}}
                                                            </td>
                                                            <td class="text-center">
                                                                <span
                                                                    @if ($val->status == 1) class="badge badge-light-success" @else class="badge badge-light-danger" @endif>{{ $val->status == 1 ? 'Active' : 'Inactive' }}</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                                    <a href="{{ url('/changequestatus/' . $val->id) }}"
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
                                                                            data-bs-placement="top"
                                                                            title="Edit Question">
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
                                                                        title="Delete Question">
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
                    <div class="row">
                        {{$questions->links()}}
                    </div>
                    <div class="modal fade" id="kt_modal_new_question" tabindex="-1" aria-hidden="true">
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
                                    <form action="{{ url('/addquestion') }}" method="POST" class="form">
                                        @csrf
                                        <!--begin::Heading-->
                                        <div class="mb-13 text-center">
                                            <!--begin::Title-->
                                            <h1 class="mb-3">New Question For {{ $category }}</h1>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Heading-->
                                        <div class="row g-9 mb-8">
                                            <div class="col-md-6 fv-row">
                                                <label class="required fs-6 fw-bold mb-2" style="margin-left: 5px"
                                                    for="inputType">Type</label>
                                                <!--begin::Select2-->
                                                <select name="type" id="inputType"
                                                    class="form-control form-select form-select-solid" required>
                                                    <option value="0" selected>none</option>
                                                    <option value="1">Descriptive</option>
                                                    <option value="2">Objective</option>
                                                    <option value="3">Code</option>
                                                </select>
                                                <!--end::Select2-->
                                                <input type="hidden" name="cat_id" value="{{ $cat_id }}">
                                            </div>
                                        </div>
                                        <div class="row g-9 mb-8">
                                            <div class="col-md-12 fv-row">
                                                <label class="required fs-6 fw-bold mb-2" style="margin-left: 5px"
                                                    for="question">Add
                                                    Question</label>
                                                <textarea type="text" class="form-control form-control-solid w-100 h-100px" name="question" placeholder="Test Question"
                                                    id="question" required></textarea>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Add</button>
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
                    @foreach ($questions as $val)
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
                                        <form action="{{ url('/editquestion') }}" method="POST">
                                            @csrf
                                            <!--begin::Heading-->
                                            <div class="mb-13 text-center">
                                                <!--begin::Title-->
                                                <h1 class="mb-3">Edit {{ $val->category }} Question</h1>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Heading-->
                                            <input type="hidden" name="id" id="cid" value="{{ $val->id }}">
                                            <div class="row g-9 mb-8">
                                                <div class="col-md-6 fv-row">
                                                    <label class="required fs-6 fw-bold mb-2" style="margin-left: 5px"
                                                        for="inputType">Type</label>
                                                    <!--begin::Select2-->
                                                    <select name="type" id="inputType"
                                                        class="form-control form-select form-select-solid" required>
                                                        <option @if ($val->type == '') selected @endif
                                                            value="0">none</option>
                                                        <option @if ($val->type == 1) selected @endif
                                                            value="1">Descriptive</option>
                                                        <option @if ($val->type == 2) selected @endif
                                                            value="2">Objective</option>
                                                        <option @if ($val->type == 3) selected @endif
                                                            value="3">Code</option>
                                                    </select>
                                                    <!--end::Select2-->
                                                    <input type="hidden" name="cat_id" value="{{ $cat_id }}">
                                                </div>
                                            </div>
                                            <div class="row g-9 mb-8">
                                                <div class="col-md-12 fv-row">
                                                    <label class="required fs-6 fw-bold mb-2" style="margin-left: 5px"
                                                        for="question">Edit
                                                        Question</label>
                                                    <textarea type="text" class="form-control form-control-solid w-100 h-100px" name="question" placeholder="Test Question"
                                                        id="question" required>{{ $val->questions }}</textarea>
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary">Update</button>
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
    <script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
    <script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
    <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
    <script src="{{asset('assets/js/custom/widgets.js')}}"></script>
    <script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
    <script src="{{asset('assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
    <script src="{{asset('assets/js/custom/utilities/modals/create-app.js')}}"></script>
    <script src="{{asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".delete").on("click", function() {

                var currentRow = $(this).closest("tr");
                var col1 = currentRow.find("td:eq(1)").text(); // get current row 1st TD value
                var id = col1.trim();
                var string_url = '/deletequestion/' + id;
                console.log(string_url)

                swal({
                    title: "Are you sure!",
                    text: "Do you really want to remove question!",
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
                                    swal("Question successfully deleted!", {
                                        icon: "success",
                                    });
                                    currentRow.remove();
                                } else {
                                    swal("Failed to deleted!", {
                                        icon: "error",
                                    });
                                }

                            }
                        })


                    } else {
                        swal("Question not deleted!", {
                            icon: "error",
                        });
                    }
                });
            });

        });
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
</body>
<!--end::Body-->

</html>
