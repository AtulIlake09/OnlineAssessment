    @php $count=1; @endphp
    @foreach ($companies as $val)
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
                    class="text-dark d-block fs-6">{{ $val['id'] }}</label>
            </td>
            <td>
                <label href="#"
                    class="text-dark d-block fs-6">{{ $count }}</label>
            </td>
            <td>
                <a href="{{ url('/cusers/' . $val['id']) }}"
                    class="text-dark text-hover-primary fw-bolder d-block fs-6"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="view users">{{ $val['company'] }}</a>
            </td>
            <td>
                <label href="#"
                    class="text-dark d-block fs-6">{{ $val['email'] }}</label>
            </td>
            <td>
                <label href="#"
                    class="text-dark d-block fs-6">{{ $val['address'] }}</label>
            </td>
            <td class="text-center">
                <span
                    @if ($val['status'] == 1) class="badge badge-light-success" @else class="badge badge-light-danger" @endif>{{ $val['status'] == 1 ? 'Active' : 'Inactive' }}</span>
            </td>
            <td>
                <div
                    class="d-flex justify-content-end flex-shrink-0">
                    <a id="viewques"
                        href="{{ url('/cusers/' . $val['id']) }}"
                        type="button"
                        class="btn btn-sm btn-icon btn-light btn-active-color-primary btn-sm me-1"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="view users">
                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                        <span
                            class="svg-icon svg-icon-2 svg-icon-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24"
                                viewBox="0 0 24 24"
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
                    </a>
                    <a href="{{ url('/company_status/' . $val['id']) }}"
                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="Change Status">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                        <span class="svg-icon svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24"
                                viewBox="0 0 24 24"
                                fill="none">
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
                        data-bs-target="#kt_modal_edit_company_{{ $val['id'] }}">
                        <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                        <span class="svg-icon svg-icon-3"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Edit Comapny Details">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24"
                                viewBox="0 0 24 24"
                                fill="none">
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
                        title="Delete Company">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                        <span class="svg-icon svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24"
                                viewBox="0 0 24 24"
                                fill="none">
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
