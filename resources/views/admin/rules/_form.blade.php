<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-12">
    <!--begin::General options-->
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <div class="card-title">
                <h2>عام</h2>
            </div>
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <div class="row mb-2">
                <!--begin::Col-->
                <div class="col-lg-12">
                    <!--begin::Row-->
                    <div class="row fv-plugins-icon-container">
                        <label class="col-lg-2 col-form-label required fw-bold fs-6">الاسم</label>
                        <div class="col-lg-4">
                            <input type="text" name="name"
                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name"
                                placeholder="الاسم بالكامل" value="{{ old('name'), $rule->name }}">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>

                        <label class="col-lg-2 col-form-label required fw-bold fs-6">{{
__('dashboard.status') }} </label>

                        <div class="col-lg-4 d-flex align-items-center">
                            <div class="form-check form-check-solid form-switch fv-row">
                                <input type="hidden" name="status" value="1">
                                <input class="form-check-input w-45px h-30px" type="checkbox" id="status"
                                    name="status" value="1" checked="">
                                <label class="form-check-label" for="allowmarketing"></label>
                            </div>
                        </div>


                    </div>
                    <div class="sperator py-10"></div>


                     <!--begin::Input group-->
                    <div class="fv-row mb-10 fv-plugins-icon-container">
                        <!--begin::Table wrapper-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5">
                                <!--begin::Table body-->
                                <tbody class="text-gray-600 fw-bold">
                                <!--begin::Table row-->
                                <tr>
                                    <td class="text-gray-800" style="width: 200px;">
                                        <label
                                            class="form-check form-check-sm form-check-custom form-check-solid me-9">
                                            <input class="form-check-input  m-2" type="checkbox" value=""
                                                   id="select_all">
                                            <span class="fw-bolder"
                                                  for="kt_roles_select_all">{{__('Select all')}}</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                               data-bs-toggle="tooltip" title=""
                                               data-bs-original-title="{{__('Allows a full access to the system')}}"
                                               aria-label="__('Allows a full access to the system')}}"></i>
                                        </label>
                                    </td>
                                </tr>
                                <!--end::Table row-->
                                @foreach($roles as $row)
                                    <!--begin::Table row-->
                                    <tr>
                                        <td class="text-gray-800 fw-bolder p-3"
                                            style="background-color: #fbfbfb">{{$row->name}}</td>
                                    </tr>
                                    <!--end::Table row-->
                                    <!--begin::Table row-->
                                    <tr>
                                        <!--begin::Input group-->
                                        <td class="p-7">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex">
                                            @foreach($row->permissions as $item)
                                                <!--begin::Checkbox-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input chbx" type="checkbox"
                                                               id="permissions[]" name="permissions[]" value="{{ $item->name }}">
                                                        <span
                                                            class="form-check-label">{{__(getPermissionName($item->name))}}</span>
                                                    </label>
                                                    <!--end::Checkbox-->
                                                @endforeach
                                            </div>
                                            <!--end::Wrapper-->
                                        </td>
                                        <!--end::Input group-->

                                    </tr>
                                    <!--end::Table row-->
                                @endforeach
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table wrapper-->
                    </div>
                    <!--end::Input group-->
                    <!--end::Row-->
                </div>
                <!--end::Col-->
            </div>

        </div>
        <!--end::Card header-->
    </div>
    <!--end::General options-->


    <div class="d-flex justify-content-center">
        <!--end::Button-->
        <!--begin::Button-->
        <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-dark">
            <span class="indicator-label">حفظ الرتبة</span>
            <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
        <!--end::Button-->
    </div>
</div>
<!--end::Main column-->
