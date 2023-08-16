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
                <!--begin::Col-->
                <div class="col-lg-12">

                    <!--begin::Row-->
                    <div class="row">
                        @foreach (config('lang') as $key => $lang)
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">
                                        {{ __('dashboard.title') }} ({{ $key }})
                                    </label>
                                    <div class="col-lg-8">
                                        <input autocomplete="off" type="text" name="title[{{ $key }}]"
                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name"
                                            placeholder="{{ $lang }} "
                                            value="{{ old('title.' . $key, $common->getTranslation('title', $key)) }}">
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
                                        {{ __('dashboard.desc') }} ({{ $key }})
                                    </label>
                                    <div class="col-lg-8">
                                        <textarea autocomplete="off" name="desc[{{ $key }}]"
                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name" placeholder="{{ $lang }}">{{ old('desc.' . $key, $common->getTranslation('desc', $key)) }}</textarea>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                        @error('desc')
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
