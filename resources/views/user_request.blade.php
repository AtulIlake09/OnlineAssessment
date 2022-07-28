@extends('default')
@section('content')
<div class="row gy-5 g-xl-8">
    <!--begin::Col-->
    <div class="col-xl-12">
        <!--begin::Tables Widget 9-->
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Users Requests</span>
                </h3>
                {{-- <div class="card-toolbar" data-bs-toggle="tooltip"
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
                </div> --}}
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
                                    {{-- <td class="text-center">
                                        <span
                                            @if ($val['status'] == 1) class="badge badge-light-success" @else class="badge badge-light-danger" @endif>{{ $val['status'] == 1 ? 'Active' : 'Inactive' }}</span>
                                    </td> --}}
                                    <td>
                                        <div class="d-flex justify-content-center flex-shrink-0">
                                            <a href="{{ url('/approved_user_request/'.$val['id']) }}"
                                                class="btn btn-icon btn-bg-success btn-color-light btn-active-color-primary btn-sm me-1">
                                                {{-- data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_edit_user_{{ $val['id'] }}"> --}}
                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                <span class="svg-icon svg-icon-3"
                                                    data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    title="Approved">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <a href="{{ url('/decline_user_request/'.$val['id']) }}" class="delete btn btn-icon btn-bg-danger btn-color-light btn-active-color-primary btn-sm"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                title="Decline">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor"></rect>
                                                        <rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor"></rect>
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
                <form action="{{ url('/approved_user_request') }}"
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
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-bold mb-2"
                                style="margin-left: 5px" for="inputEmail4">Email</label>
                            <input type="email" class="form-control form-control-solid" name="email"
                                id="email" placeholder="Email"
                                value="{{ empty($val['email']) ? '' : $val['email'] }}"
                                required>
                        </div>
                        {{-- <div class="col-md-6 fv-row">
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
                        </div> --}}
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
                                class="update btn btn-primary mt-5">Approved</button>
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
@endsection