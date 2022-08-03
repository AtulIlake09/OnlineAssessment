<div class="table-responsive">
<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
    <!--begin::Table head-->
    <thead>
        <tr class="fw-bolder text-dark">
            <th class="w-25px">
                <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1" data-kt-check="true"
                        data-kt-check-target=".widget-9-check" />
                </div>
            </th>
            <th class="min-w-50px">ID</th>
            <th class="min-w-150px">Name</th>
            <th class="min-w-150px">Email</th>
            <th class="min-w-150px">Phone</th>
            <th class="min-w-150px">Tests</th>
            <th class="min-w-150px">Test Link</th>
            <th class="min-w-150px">start at</th>
            <th class="min-w-150px">end at</th>
            <th class="min-w-50px text-center">Status</th>
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
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input widget-9-check" type="checkbox" value="1" />
                    </div>
                </td>
                <td style="display:none;">
                    <label href="#" class="text-dark d-block fs-6">{{ $val->id }}</label>
                </td>
                <td>
                    <label href="#" class="text-dark d-block fs-6">{{ $count }}</label>
                </td>
                <td>
                    <a href="{{ url('/getqueans/' . $val->candidate_id) }}"
                        class="text-dark text-hover-primary d-block fs-6">{{ $val->name }}</a>
                </td>
                <td>
                    <label href="#" class="text-dark d-block fs-6">{{ $val->email }}</label>
                </td>
                <td>
                    <label href="#" class="text-dark d-block fs-6">{{ $val->mobile }}</label>
                </td>
                <td>
                    <label href="#" class="text-dark d-block fs-6">{{ $val->category }}</label>
                </td>
                <td>
                    <label href="#" class="text-dark d-block fs-6">{{ url($val->link) }}</label>
                </td>
                <td>
                    <label href="#" class="text-dark d-block fs-6">{{ $val->start_date_time }}</label>
                </td>
                <td>
                    <label href="#" class="text-dark d-block fs-6">{{ $val->end_date_time }}</label>
                </td>
                <td>
                    <span
                        @if ($val->status == 1) class="badge badge-light-success" @else class="badge badge-light-danger" @endif>{{ $val->status == 1 ? 'complete' : 'In-complete' }}</span>
                </td>
                <td>
                    <a href="{{ url('/getqueans/' . $val->candidate_id) }}">
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
                    <div class="d-flex justify-content-end flex-shrink-0">
                        <a id="viewanswers" href="{{ url('/getqueans/' . $val->candidate_id) }}" type="button"
                            class="btn btn-sm btn-icon btn-light btn-active-color-primary btn-sm me-1"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="view Answers">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                            <span class="svg-icon svg-icon-2 svg-icon-gray-400">
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
                        </a>
                        {{-- <a href="{{ url('/changeStatuscan/' . $val->id) }}"
                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Change Status">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
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
                        </a> --}}
                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                            data-bs-toggle="modal" data-bs-target="#kt_modal_edit_link_{{ $val->id }}">
                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                            <span class="svg-icon svg-icon-3" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Edit Candidate Details">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
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
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Candidate">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
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
                <td>
                    <div class="d-flex justify-content-center flex-shrink-0">
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill={{ 'red' }}
                                class="bi bi-download" viewBox="0 0 20 20">
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
</div>
@if (empty($candidates->all()))
<div class="row mt-5 text-center">
    <span>Record not found</span>
</div>
@endif
