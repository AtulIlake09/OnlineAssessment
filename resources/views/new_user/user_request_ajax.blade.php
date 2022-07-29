@php
    $user=auth()->user();
@endphp
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
                <th class="min-w-150px">User Email</th>
                <th class="min-w-150px">Phone</th>
                <th class="min-w-150px">Company</th>
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
                    @if($user->user==1)
                    <td>
                        <label href="#"
                            class="text-muted fw-bolder d-block fs-6">{{ $val['company'] }}</label>
                    </td>
                    @endif
                    <td>
                        <label href="#"
                            class="text-muted fw-bolder d-block fs-6">{{$val['position']}}</label>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center flex-shrink-0">
                            <a href="{{ url('/approved_user_request/'.$val['id']) }}"
                                class="btn btn-icon btn-bg-success btn-color-light btn-active-color-primary btn-sm me-1">
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