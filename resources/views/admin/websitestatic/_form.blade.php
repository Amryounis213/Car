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

            <div class="row mb-2">
                <div class="d-flex justify-content-center">
                    <div class="row mb-2">
                        <!--begin::Col-->
                        <div class="col-lg-12">
                            <div class="card-body text-center pt-0">
                                <!--begin::Image input-->
                                <!--begin::Image input placeholder-->
                                <style>
                                    .image-input-placeholder-splash {
                                        background-image: url({{ isset($websitestatic) && $websitestatic->image ? asset('storage/' . $websitestatic->image) : asset('assets/media/svg/files/pic.jpg') }});
                                    }

                                    [data-theme="dark"] .image-input-placeholder-splash {
                                        background-image: url({{ isset($websitestatic) && $websitestatic->image ? asset('storage/' . $websitestatic->image) : asset('assets/media/svg/files/blank-image-dark.svg') }});
                                    }
                                </style>

                                <!--end::Image input placeholder-->
                                <div class="image-input image-input-empty image-input-outline image-input-placeholder-splash mb-3"
                                    data-kt-image-input="true">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-300px h-500px "
                                        style="background-position-x : center;"></div>
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
                                    Edit Website Main Image .. jpg * jpeg * png
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
                    <div class="row mb-2">
                        <!--begin::Col-->
                        <div class="col-lg-12">
                            <div class="card-body text-center pt-0">
                                <!--begin::Image input-->
                                <style>
                                    .image-input-placeholder-icon {
                                        background-image: url({{ isset($websitestatic) && $websitestatic->logo ? asset('storage/' . $websitestatic->logo) : asset('assets/media/svg/files/pic.jpg') }});
                                    }

                                    [data-theme="dark"] .image-input-placeholder-icon {
                                        background-image: url({{ isset($websitestatic) && $websitestatic->logo ? asset('storage/' . $websitestatic->logo) : asset('assets/media/svg/files/blank-image-dark.svg') }});
                                    }
                                </style>
                                <div class="image-input image-input-empty image-input-outline image-input-placeholder-icon mb-3"
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
                                        <input type="file" name="logo" accept=".png, .jpg, .jpeg">
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
                                    Edit Website Logo .. jpg * jpeg * png
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
            </div>
            <div class="row mb-2">
                <!--begin::Col-->
                <div class="col-lg-12">

                    {{-- Name Arabic English --}}

                    <!--begin::Row-->
                    <div class="row">
                        @foreach (config('lang') as $key => $lang)
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">
                                        Website Header{{ $lang }}
                                    </label>
                                    <div class="col-lg-8">
                                        <input autocomplete="off" type="text" name="title[{{ $key }}]"
                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name"
                                            placeholder="{{ $lang }}"
                                            value="{{ old('title.' . $key, $websitestatic->getTranslation('title', $key)) }}">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                        @error('title')
                                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">
                                        Website Sub Header {{ $lang }}
                                    </label>
                                    <div class="col-lg-8">
                                        <input autocomplete="off" type="text" name="sub_title[{{ $key }}]"
                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name"
                                            placeholder="{{ $lang }}"
                                            value="{{ old('sub_title.' . $key, $websitestatic->getTranslation('sub_title', $key)) }}">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                        @error('sub_title')
                                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        @endforeach

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
