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
                                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Assessment
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
                                    <!--begin::Tables Widget 9-->
                                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bolder fs-3 mb-1">Candidates</span>
                                                {{-- <span class="text-muted mt-1 fw-bold fs-7">Over 500 members</span> --}}
                                            </h3>
                                            @if ($flag == 1)
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
                                            @endif
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
                                                            @if($flag==1)
                                                            <th class="min-w-150px">Company</th>
                                                            @endif
                                                            <th class="min-w-150px">Test Link</th>
                                                            <th class="min-w-150px">IP address</th>
                                                            <th class="min-w-150px">start at</th>
                                                            <th class="min-w-150px">end at</th>
                                                            <th class="min-w-150px">Test</th>
                                                            <th class="min-w-150px text-center">Result</th>
                                                            <th class="min-w-100px text-center">Actions</th>
                                                            <th class="min-w-150px text-center">Resume</th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        @php $count=1; @endphp
                                                        @foreach ($candidates as $val)
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                                        <input class="form-check-input widget-9-check"
                                                                            type="checkbox" value="1" />
                                                                    </div>
                                                                </td>
                                                                <td style="display:none;">
                                                                    <label href="#"
                                                                        class="text-muted fw-bolder d-block fs-6">{{ $val->id }}</label>
                                                                </td>
                                                                <td>
                                                                    <label href="#"
                                                                        class="text-muted fw-bolder d-block fs-6">{{ $count }}</label>
                                                                </td>
                                                                <td>
                                                                    <a href="{{ url('/getqueans/' . $val->candidate_id) }}"
                                                                        class="text-dark text-hover-primary fw-bolder d-block fs-6">{{ $val->name }}</a>
                                                                </td>
                                                                <td>
                                                                    <label href="#"
                                                                        class="text-muted fw-bolder d-block fs-6">{{ $val->email }}</label>
                                                                </td>
                                                                <td>
                                                                    <label href="#"
                                                                        class="text-muted fw-bolder d-block fs-6">{{ $val->mobile }}</label>
                                                                </td>
                                                                <td>
                                                                    <label href="#"
                                                                        class="text-muted fw-bolder d-block fs-6">{{ $val->category }}</label>
                                                                </td>
                                                                @if($flag==1)
                                                                <td>
                                                                    <label href="#"
                                                                        class="text-muted fw-bolder d-block fs-6">{{ $val->cname }}</label>
                                                                </td>
                                                                @endif
                                                                <td>
                                                                    <label href="#"
                                                                        class="text-muted fw-bolder d-block fs-6">{{ url($val->link) }}</label>
                                                                </td>
                                                                <td>
                                                                    <label href="#"
                                                                        class="text-muted fw-bolder d-block fs-6">{{ $val->ip }}</label>
                                                                </td>
                                                                <td>
                                                                    <label href="#"
                                                                        class="text-muted fw-bolder d-block fs-6">{{ $val->start_date_time }}</label>
                                                                </td>
                                                                <td>
                                                                    <label href="#"
                                                                        class="text-muted fw-bolder d-block fs-6">{{ $val->end_date_time }}</label>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        @if ($val->status == 1) class="badge badge-light-success" @else class="badge badge-light-danger" @endif>{{ $val->status == 1 ? 'complete' : 'In-complete' }}</span>
                                                                </td>
                                                                <td>
                                                                    <a
                                                                        href="{{ url('/getqueans/' . $val->candidate_id) }}">
                                                                        <div class="text-center"><span
                                                                                @if ($val->result == 1) class="badge badge-light-success" @elseif($val->result == 2) class="badge badge-light-danger" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                            title="{{ $val->feedback }}" @else class="badge badge-light-warning" @endif>
                                                                                @php
                                                                                    if ($val->result == 1) {
                                                                                        echo 'Pass';
                                                                                    } elseif ($val->result == 2) {
                                                                                        echo 'Fail';
                                                                                    } else {
                                                                                        echo 'Pending...';
                                                                                    }
                                                                                @endphp</span>
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="d-flex justify-content-end flex-shrink-0">
                                                                        <a id="viewanswers"
                                                                            href="{{ url('/getqueans/' . $val->candidate_id) }}"
                                                                            type="button"
                                                                            class="btn btn-sm btn-icon btn-light btn-active-color-primary btn-sm me-1"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            title="view Answers">
                                                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                                                            <span
                                                                                class="svg-icon svg-icon-2 svg-icon-gray-400">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none">
                                                                                    <path
                                                                                        d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                                                        fill="currentColor" />
                                                                                    <path opacity="0.3"
                                                                                        d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                                                        fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                        </a>
                                                                        <a href="{{ url('/changeStatuscan/' . $val->id) }}"
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
                                                                            data-bs-target="#kt_modal_edit_link_{{ $val->id }}">
                                                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                            <span class="svg-icon svg-icon-3"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top"
                                                                                title="Edit Candidate Details">
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
                                                                            title="Delete Candidate">
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
                                                                <td>
                                                                    <div
                                                                        class="d-flex justify-content-center flex-shrink-0">
                                                                        <a
                                                                            @if (isset($val->resume) && !empty($val->resume)) href={{ url('') . $val->resume }}  target="_blank" @endif>
                                                                            <?php if (isset($val->resume) && !empty($val->resume)) {?>
                                                                            {{-- <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="30" height="30"
                                                                                fill={{"red"}}
                                                                                class="bi bi-filetype-pdf"
                                                                                viewBox="0 0 20 20">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z" />
                                                                            </svg> --}}
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="30" height="30"
                                                                                fill={{ 'red' }}
                                                                                class="bi bi-download"
                                                                                viewBox="0 0 20 20">
                                                                                <path
                                                                                    d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                                                <path
                                                                                    d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                                                            </svg>
                                                                            <?php }else{ echo "NA";}?>
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
                        @if ($flag == 0)
                            @foreach ($candidates as $val)
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
                                                <form action="{{ url('/edit_can') }}" method="POST">
                                                    @csrf
                                                    <!--begin::Heading-->
                                                    <div class="mb-13 text-center">
                                                        <!--begin::Title-->
                                                        <h1 class="mb-3">Candidate Details</h1>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Heading-->
                                                    <input type="hidden" name="id" id="cid"
                                                        value="{{ $val->id }}">
                                                    <div class="d-flex flex-column mb-8 fv-row">
                                                        <label class="required fs-6 fw-bold mb-2"
                                                            style="margin-left: 5px" for="cname">Name</label>
                                                        <input type="text" class="form-control form-control-solid mb-8"
                                                            name="name" id="cname" placeholder="Name"
                                                            value="{{ empty($val->name) ? '' : $val->name }}"
                                                            required>
                                                        <input type="hidden" name="company_id"
                                                            value="{{ $company_id }}">

                                                        <label class="required fs-6 fw-bold mb-2"
                                                            style="margin-left: 5px" for="inputEmail4">Email</label>
                                                        <input type="email" class="form-control form-control-solid"
                                                            name="email" id="cemail" placeholder="Email"
                                                            value="{{ empty($val->email) ? '' : $val->email }}"
                                                            required>
                                                    </div>
                                                    <div class="row g-9 mb-8">
                                                        <div class="col-md-6 fv-row">
                                                            <label class="required fs-6 fw-bold mb-2"
                                                                style="margin-left: 5px" for="phone">Phone</label>
                                                            <input type="text"
                                                                class="form-control form-control-solid mb-8"
                                                                name="phone" id="cphone" placeholder="phone"
                                                                value="{{ empty($val->mobile) ? '' : $val->mobile }}"
                                                                required>
                                                        </div>
                                                        <div class="col-md-6 fv-row">
                                                            <label class="required fs-6 fw-bold mb-2"
                                                                style="margin-left: 5px" for="">Category</label>
                                                            <!--begin::Select2-->
                                                            <select name="category" disabled id="inputnCategory"
                                                                class="form-control form-select form-select-solid mb-8"
                                                                required>
                                                                @php $i=1; @endphp
                                                                @foreach ($categories as $value)
                                                                    @if ($val->category_id == $value->id)
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
                                                            <button type="submit" class="btn btn-primary mt-5">Update Candidate Details</button>
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
                        @elseif($flag == 1)
                            @foreach ($candidates as $val)
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
                                                <form action="{{ url('/edit_can') }}" method="POST">
                                                    @csrf
                                                    <!--begin::Heading-->
                                                    <div class="mb-13 text-center">
                                                        <!--begin::Title-->
                                                        <h1 class="mb-3">Candidate Details</h1>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Heading-->
                                                    <input type="hidden" name="id" id="cid"
                                                        value="{{ $val->id }}">
                                                    <div class="d-flex flex-column mb-8 fv-row">
                                                        <label class="required fs-6 fw-bold mb-2"
                                                            style="margin-left: 5px" for="cname">Name</label>
                                                        <input type="text" class="form-control form-control-solid"
                                                            name="name" id="cname" placeholder="Name"
                                                            value="{{ empty($val->name) ? '' : $val->name }}"
                                                            required>
                                                    </div>
                                                    <div class="row g-9 mb-8">
                                                        <div class="col-md-6 fv-row">
                                                            <label class="required fs-6 fw-bold mb-2"
                                                                style="margin-left: 5px" for="inputEmail4">Email</label>
                                                            <input type="email" class="form-control form-control-solid"
                                                                name="email" id="cemail" placeholder="Email"
                                                                value="{{ empty($val->email) ? '' : $val->email }}"
                                                                required>
                                                        </div>
                                                        <div class="col-md-6 fv-row">
                                                            <label class="required fs-6 fw-bold mb-2"
                                                                for="phone">Phone</label>
                                                            <input type="text" class="form-control form-control-solid"
                                                                name="phone" id="cphone" placeholder="phone"
                                                                value="{{ empty($val->mobile) ? '' : $val->mobile }}"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="row g-9 mb-8">
                                                        <div class="col-md-6 fv-row">
                                                            <label class="required fs-6 fw-bold mb-2"
                                                                style="margin-left: 5px" for="company">Company</label>
                                                            <!--begin::Select2-->
                                                            <select name="company_id" style="cursor: pointer;"
                                                                class="form-control form-select form-select-solid"
                                                                required>
                                                                <option value="">Choose Company...</option>
                                                                @foreach ($companies as $value)
                                                                    @if ($val->company_id == $value->id)
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
                                                        <div class="col-md-6 fv-row">
                                                            <label class="required fs-6 fw-bold mb-2"
                                                                for="">Category</label>
                                                            <!--begin::Select2-->
                                                            <select name="category" disabled id="inputnCategory"
                                                                class="form-control form-select form-select-solid"
                                                                required>
                                                                @php $i=1; @endphp
                                                                @foreach ($categories as $value)
                                                                    @if ($val->category_id == $value->id)
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
                                                            <button type="submit" class="btn btn-primary mt-5">Update Candidate Details</button>
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
                        @endif
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".delete").on("click", function() {

                var currentRow = $(this).closest("tr");
                var col1 = currentRow.find("td:eq(1)").text(); // get current row 1st TD value
                var id = col1.trim();
                var string_url = '/deletecan/' + id;
                console.log(string_url)

                swal({
                    title: "Are you sure!",
                    text: "Do you really want to remove candidate!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    console.log(id)
                    if (willDelete) {
                        $.ajax({
                            type: "get",
                            url: string_url,
                            data: "",
                            success: function(data) {
                                console.log(data);
                                if (data == 1) {
                                    swal("candidate successfully deleted!", {
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
                        swal("Your candidate is safe!", {
                            icon: "error",
                        });
                    }
                });
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
                    url: "assessment",
                    data: {
                        'company_id': company_id
                    },
                    success: function(response) {
                        console.log(response);
                        $('#mytable').empty();
                        $('#mytable').html(response);

                    },
                    error: function(e) {
                        console.log(e)
                    }
                });
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
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
