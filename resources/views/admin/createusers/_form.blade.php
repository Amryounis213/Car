<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-12">
    <!--begin::General options-->
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <div class="card-title">
                <h2>New User</h2>
            </div>
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Input group-->
            <div class="row mb-6">
                <!--begin::Col-->
                <div class="col-lg-12">
                    <!--begin::Row-->
                    <div class="row align-items-center">
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row mb-4">
                            <div class="row align-items-center">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">Username</label>
                                <!--end::Label-->
                                <!--begin::Label-->
                                <div class="col-lg-8">
                                    <input type="text" name="name"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="Name" value="{{ old('name', $user->name) }}" />
                                </div>
                                <!--end::Label-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row mb-4">
                            <div class="row align-items-center">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">First Name</label>
                                <!--end::Label-->
                                <!--begin::Label-->
                                <div class="col-lg-8">
                                    <input type="text" name="firstname"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="First Name" value="{{ old('firstname', $user->firstname) }}" />
                                </div>
                                <!--end::Label-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row mb-4">
                            <div class="row align-items-center">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">Last Name</label>
                                <!--end::Label-->
                                <!--begin::Label-->
                                <div class="col-lg-8">
                                    <input type="text" name="lastname"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="Last Name" value="{{ old('lastname', $user->lastname) }}" />
                                </div>
                                <!--end::Label-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row mb-4">
                            <div class="row align-items-center">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">Email</label>
                                <!--end::Label-->
                                <!--begin::Label-->
                                <div class="col-lg-8">
                                    <input type="text" name="email"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="example@gmail.com" value="{{ old('email', $user->email) }}" />
                                </div>
                                <!--end::Label-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <div class="col-lg-6 fv-row mb-4">
                            <div class="row align-items-center">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">Phone</label>
                                <!--end::Label-->
                                <!--begin::Label-->
                                <div class="col-lg-8">
                                    <input type="text" name="phone"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="phone number" value="{{ old('phone', $user->phone) }}" />
                                </div>
                                <!--end::Label-->
                            </div>
                        </div>
                        <!--end::Col-->
                        
                        @if (Str::contains(Route::currentRouteName(), 'create'))
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row mb-4">
                                <div class="row align-items-center">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-bold fs-6">Password</label>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="col-lg-8">
                                        <input type="password" name="password"
                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                            placeholder="{{ __('dashboard.password') }}" value="{{ old('password', $user->password) }}" />
                                    </div>
                                    <!--end::Label-->
                                </div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row mb-4">
                                <div class="row align-items-center">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-bold fs-6">Password Confirmation</label>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="col-lg-8">
                                        <input type="password" name="password_confirmation"
                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                            placeholder="{{ __('dashboard.password_confirmation') }}"
                                            value="{{ old('password', $user->password) }}" />
                                    </div>
                                    <!--end::Label-->
                                </div>
                            </div>
                            <!--end::Col-->
                        @endif

                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
        </div>
    </div>
</div>
<!--begin::Actions-->
<div class="card-footer d-flex justify-content-end py-6 px-9">
    {{-- <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button> --}}
    <button type="submit" class="btn btn-primary">Save</button>
</div>
<!--end::Actions-->

</div>
<!--end::Card body-->
