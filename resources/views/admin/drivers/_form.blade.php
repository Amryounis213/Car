<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-12">
    <!--begin::General options-->
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <div class="card-title">
                <h2>{{ __('dashboard.general') }}</h2>
            </div>
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <div class="d-flex justify-content-center">

                <div class="row mb-2">
                    <!--begin::Col-->
                    <div class="col-lg-12">
                        <div class="card-body text-center pt-0">
                            <!--begin::Image input-->
                            <!--begin::Image input placeholder-->
                            <style>
                                .image-input-placeholder {
                                    background-image: url({{ asset('storage/'.$driver->image) ? asset('storage/'.$driver->image) : asset('assets/media/svg/files/pic.jpg') }});

                                }

                                [data-theme="dark"] .image-input-placeholder {
                                    background-image: url({{ asset('storage/'.$driver->image) ? asset('storage/'.$driver->image) : asset(('assets/media/svg/files/blank-image-dark.svg')) }});

                                }
                            </style>
                            <!--end::Image input placeholder-->
                            <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                                data-kt-image-input="true">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-100px h-100px"></div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                    aria-label="Change avatar" data-kt-initialized="1">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="image" accept=".png, .jpg, .jpeg">
                                    <input type="hidden" name="image_remove">
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                    aria-label="Cancel avatar" data-kt-initialized="1">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                    aria-label="Remove avatar" data-kt-initialized="1">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7">
                                {{ __('dashboard.edit_driver_image') }}
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                            @error('image')
                                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                            @enderror
                            <!--end::Description-->
                        </div>
                    </div>
                    <!--end::Col-->

                </div>
            </div>
            <div class="row mb-2">
                <!--begin::Col-->
                <div class="col-lg-12">

                    {{-- Name Arabic English --}}

                    <!--begin::Row-->
                    <div class="row">

                        <label
                            class="col-lg-2 col-form-label required fw-bold fs-6">{{ __('dashboard.name') }}</label>
                        <div class="col-lg-4">
                            <input type="text" name="name"
                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name"
                                placeholder="{{ __('dashboard.name') }}"
                                value="{{ $driver->name }}">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        

                        <label
                            class="col-lg-2 col-form-label required fw-bold fs-6">{{ __('dashboard.phone') }}</label>
                        <div class="col-lg-4">
                            <input type="text" name="phone"
                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name"
                                placeholder="{{ __('dashboard.phone') }}"
                                value="{{ $driver->phone }}">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        

                        <label
                            class="col-lg-2 col-form-label required fw-bold fs-6">{{ __('dashboard.email') }}</label>
                        <div class="col-lg-4">
                            <input type="text" name="email"
                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name"
                                placeholder="{{ __('dashboard.email') }}"
                                value="{{ $driver->email }}">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        
                    </div>

                    <!--end::Row-->

                    <!--begin::Row-->


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
