<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-12">
    <!--begin::General options-->
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <div class="card-title">
                <h2>Add Attempts To This Number {{ $user->phone }}</h2>
            </div>
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">

            <div class="row mb-2">
                <!--begin::Col-->
                <div class="col-lg-12">

                    {{-- Name Arabic English --}}

                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">
                                    Post Attempts
                                </label>
                                <div class="col-lg-8">
                                    <input autocomplete="off" type="number" min="0" name="post_attempts"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name"
                                        placeholder="Add Attempts">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                    @error('post_attempts')
                                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-labe fw-bold fs-6">
                                    User's Post Attempts
                                </label>
                                <div class="col-lg-8">
                                    <h6 class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name">
                                        {{ $user->post_attempts }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
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
        <button type="submit" class="btn btn-dark">
            <span class="indicator-label">{{ __('dashboard.save') }} </span>
            <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
        <!--end::Button-->
    </div>
</div>
<!--end::Main column-->
