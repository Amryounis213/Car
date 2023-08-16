<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-12">
    <!--begin::General options-->
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <div class="card-title">
                <h2>{{ __('dashboard.cartype') }}</h2>
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
                        @foreach (config('lang') as $key => $lang)
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">
                                        {{ __('dashboard.cartype') }} ({{ $lang }})
                                    </label>
                                    <div class="col-lg-8">
                                        <input autocomplete="off" type="text" name="name[{{ $key }}]"
                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name"
                                            placeholder="{{ $lang }}"
                                            value="{{ old('name.' . $key, $cartype->getTranslation('name', $key)) }}">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                        @error('name')
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
                    <div class="row fv-plugins-icon-container">
                        <label class="col-lg-2 col-form-label required fw-bold fs-6">{{ __('dashboard.status') }}
                        </label>
                        <div class="col-lg-4 d-flex align-items-center">
                            <div class="form-check form-check-solid form-check-custom form-switch">

                                <input type="hidden" name="status" value="0">
                                <input data-id="{{ $cartype->id }}" class="form-check-input w-45px h-30px sts-fld"
                                    type="checkbox" id="status_{{ $cartype->id }}" name="status" value="1"
                                    {{ old('status', $cartype->status ?? '') == 1 ? 'checked' : '' }}>

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
