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
            {{-- <x-input nameInputDistance="1" title="العنوان الرئيسي" name="title" type="text" :var="$setting" col="12"/> --}}
            <x-form-input title="{{ __('dashboard.yourwebsitename') }}" col="12" name="title" type="text" :var="$website"/>

            <!--end::Col-->
            <x-form-input title="{{ __('dashboard.desc') }}" col="12" rows="10" name="desc" type="desc" :var="$website"/>



            <div class="form-group row">
                <label class="col-lg-2 col-form-label required fw-bold fs-6">
                    {{ __('dashboard.keywords') }}
                </label>

                <div class="col-lg-10">
                    <!--begin::Label-->
                   
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <input id="kt_ecommerce_add_category_meta_keywords" name="key_words" class="form-control mb-2"
                        value="{{ $website->key_words != null ? $website->key_words : '' }}" />
                    <!--end::Editor-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7">{{ __('dashboard.keywordssantance') }}<code>{{ __('dashboard.period') }}</code> {{ __('dashboard.or') }}
                        <code>enter</code>{{ __('dashboard.betweenwordandword') }}
                    </div>
                    <!--end::Description-->
                </div>


            </div>


            <div class="separator separator-dashed my-5"></div>


          


          
            <h2 class="py-5">{{ __('dashboard.otherinfo') }}</h2>

            <div class="row mb-2">
                <!--begin::Col-->
                <div class="col-lg-12 ">
                    <!--begin::Row-->
                    <label class="form-label">{{ __('dashboard.facebook') }}</label>
                    <div class="col-lg-12 fv-row mb-3">
                        <input type="text" name="facebook"
                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0  "
                            placeholder="{{ __('dashboard.facebookpageurl') }}" value="{{ old('facebook', $website->facebook) }}" />
                    </div>


                </div>
                <!--end::Row-->



            </div>
            <!--end::Col-->


            <div class="row mb-2">
                <!--begin::Col-->
                <div class="col-lg-12 ">
                    <!--begin::Row-->
                    <label class="form-label">{{ __('dashboard.twitter') }}</label>
                    <div class="col-lg-12 fv-row mb-3">
                        <input type="text" name="twitter"
                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0  "
                            placeholder="{{ __('dashboard.twitterurl') }}" value="{{ old('twitter', $website->twitter) }}" />
                    </div>


                </div>
                <!--end::Row-->
            </div>
            <!--end::Col-->


            <div class="row mb-2">
                <!--begin::Col-->
                <div class="col-lg-12 ">
                    <!--begin::Row-->
                    <label class="form-label">{{ __('dashboard.instagram') }}</label>
                    <div class="col-lg-12 fv-row mb-3">
                        <input type="text" name="instagram"
                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0  "
                            placeholder="{{ __('dashboard.instagramurl') }}" value="{{ old('instagram', $website->instagram) }}" />
                    </div>


                </div>
                <!--end::Row-->
            </div>
            <!--end::Col-->
            
            <div class="row mb-2">
                <!--begin::Col-->
                <div class="col-lg-12 ">
                    <!--begin::Row-->
                    <label class="form-label">{{ __('dashboard.tiktok') }}</label>
                    <div class="col-lg-12 fv-row mb-3">
                        <input type="text" name="tiktok_url"
                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0  "
                            placeholder="{{ __('dashboard.tiktok') }}" value="{{ old('tiktok_url', $website->tiktok_url) }}" />
                    </div>


                </div>
                <!--end::Row-->
            </div>
            <!--end::Col-->


            <div class="row mb-2">
                <!--begin::Col-->
                <div class="col-lg-12 ">
                    <!--begin::Row-->
                    <label class="form-label">{{ __('dashboard.youtube') }}</label>
                    <div class="col-lg-12 fv-row mb-3">
                        <input type="text" name="youtube"
                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0  "
                            placeholder="{{ __('dashboard.youtubeurl') }}" value="{{ old('youtube', $website->youtube) }}" />
                    </div>


                </div>
                <!--end::Row-->
            </div>
            <!--end::Col-->


            <div class="row mb-2">
                <!--begin::Col-->
                <div class="col-lg-12 ">
                    <!--begin::Row-->
                    <label class="form-label">{{ __('dashboard.linkedin') }}</label>
                    <div class="col-lg-12 fv-row mb-3">
                        <input type="text" name="linkedin"
                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0  "
                            placeholder="{{ __('dashboard.linkedinurl') }}" value="{{ old('linkedin', $website->linkedin) }}" />
                    </div>


                </div>
                <!--end::Row-->
            </div>
            <!--end::Col-->


            <div class="row mb-2">
                <!--begin::Col-->
                <div class="col-lg-12 ">
                    <!--begin::Row-->
                    <label class="form-label">{{ __('dashboard.email') }}</label>
                    <div class="col-lg-12 fv-row mb-3">
                        <input type="text" name="email"
                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0  " placeholder="{{ __('dashboard.email') }}"
                            value="{{ old('email', $website->email) }}" />
                    </div>


                </div>
                <!--end::Row-->
            </div>
            <!--end::Col-->


            <div class="row mb-2">
                <!--begin::Col-->
                <div class="col-lg-12 ">
                    <!--begin::Row-->
                    <label class="form-label">{{ __('dashboard.phone') }}</label>
                    <div class="col-lg-12 fv-row mb-3">
                        <input type="text" name="tel"
                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0  " placeholder="{{ __('dashboard.phone') }}"
                            value="{{ old('tel', $website->tel) }}" />
                    </div>


                </div>
                <!--end::Row-->
            </div>
            <!--end::Col-->


            <div class="row mb-2">
                <!--begin::Col-->
                <div class="col-lg-12 ">
                    <!--begin::Row-->
                    <label class="form-label">{{ __('dashboard.whatsapp') }}</label>
                    <div class="col-lg-12 fv-row mb-3">
                        <input type="text" name="whatsapp"
                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0  "
                            placeholder="{{ __('dashboard.whatsapp') }}" value="{{ old('whatsapp', $website->whatsapp) }}" />
                    </div>


                </div>
                <!--end::Row-->
            </div>
            <!--end::Col-->
          

            <div class="row mb-2">
                <!--begin::Col-->
                <div class="col-lg-12 ">
                    <!--begin::Row-->
                    <label class="form-label">{{ __('dashboard.address') }} </label>
                    <div class="col-lg-12 fv-row mb-3">
                        <input type="text" name="location"
                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0  "
                            placeholder="{{ __('dashboard.address') }}" value="{{ old('location', $website->location) }}" />
                    </div>


                </div>
                <!--end::Row-->
            </div>
            <!--end::Col-->

        </div>
    </div>






</div>
<!--end::Card header-->
</div>
<!--end::General options-->


<div class="d-flex justify-content-center">
    <!--end::Button-->
    <!--begin::Button-->
    <button type="submit" class="btn btn-primary mt-10 mb-5">
        <span class="indicator-label">{{ __("dashboard.update") }}</span>
        <span class="indicator-progress">Please wait...
            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
    </button>
    <!--end::Button-->
</div>
</div>
<!--end::Main column-->