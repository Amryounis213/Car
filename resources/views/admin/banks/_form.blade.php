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
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">
                                    {{ __('dashboard.bank_name') }}
                                </label>
                                <div class="col-lg-8">
                                    <input autocomplete="off" type="text" name="title"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name"
                                        placeholder="{{ __('dashboard.bank_name') }}"
                                        value="{{ old('title', $bank->title) }}">
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
                                    {{ __('dashboard.bank_desc') }}
                                </label>
                                <div class="col-lg-8">
                                    <input autocomplete="off" type="text" name="desc"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name"
                                        placeholder="{{ __('dashboard.bank_desc') }}"
                                        value="{{ old('desc', $bank->desc) }}">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                    @error('desc')
                                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">
                                    {{ __('dashboard.account_name') }}
                                </label>
                                <div class="col-lg-8">
                                    <input autocomplete="off" type="text" name="name"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name"
                                        placeholder="{{ __('dashboard.account_name') }}"
                                        value="{{ old('name', $bankAccount->name) }}">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                    @error('account_name')
                                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">
                                    {{ __('dashboard.account_number') }}
                                </label>
                                <div class="col-lg-8">
                                    <input autocomplete="off" type="text" name="account_number"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name"
                                        placeholder="{{ __('dashboard.account_number') }}"
                                        value="{{ old('account_number', $bankAccount->account_number) }}">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                    @error('account_number')
                                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">
                                    {{ __('dashboard.iban') }}
                                </label>
                                <div class="col-lg-8">
                                    <input autocomplete="off" type="text" name="iban"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name"
                                        placeholder="{{ __('dashboard.iban_placeholder') }}"
                                        value="{{ old('iban', $bankAccount->iban) }}">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                    @error('iban')
                                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                        </div>
                                    @enderror
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
        <button type="submit" class="btn btn-dark" id="submit-btn">
            <span class="indicator-label">{{ __('dashboard.save') }} </span>
            <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
        <!--end::Button-->
    </div>
</div>
<!--end::Main column-->
