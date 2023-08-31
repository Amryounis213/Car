<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-12">
    <!--begin::General options-->
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <div class="card-title">
                <h2>{{ __('dashboard.whous') }}</h2>
            </div>
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">

            {{-- <div class="row mb-2">
                <div class="d-flex justify-content-center">
                    <x-image title="{{ __('dashboard.image') }}" name="image" :var="$whous" width="450"
                        height="200" />
                    <x-image title="{{ __('dashboard.website_icon') }}" name="icon" :var="$whous" width="100"
                        height="100" />
                </div>
            </div> --}}
            <div class="row mb-2">
                <!--begin::Col-->
                <div class="col-lg-12">

                    {{-- Name Arabic English --}}
                    @foreach (config('lang') as $key => $lang)
                        <div class="row mb-6">
                            @if ($key == 'fr')
                                <label for="text" class="col-md-3 col-form-label text-md-right">Paragraph Text
                                    {{ $lang }}
                                </label>
                                <div class="col-md-6">
                                    <textarea id="editor" class="form-control @error('text') is-invalid @enderror" name="text[{{ $key }}]">{{ old('text.fr', $whous->getTranslation('text', $key) ?? '') }}</textarea>

                                    @error('text')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            @elseif ($key == 'en')
                                <label for="text" class="col-md-3 col-form-label text-md-right">Paragraph Text
                                    {{ $lang }}
                                </label>
                                <div class="col-md-6">
                                    <textarea id="editor2" class="form-control @error('text') is-invalid @enderror" name="text[{{ $key }}]">{{ old('text.en', $whous->getTranslation('text', $key) ?? '') }}</textarea>

                                    @error('text')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            @elseif ($key == 'ar')
                                <label for="text" class="col-md-3 col-form-label text-md-right">Paragraph Text
                                    {{ $lang }}
                                </label>
                                <div class="col-md-6">
                                    <textarea id="editor3" class="form-control @error('text') is-invalid @enderror" name="text[{{ $key }}]">{{ old('text.en', $whous->getTranslation('text', $key) ?? '') }}</textarea>

                                    @error('text')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            @endif
                            {{-- <label for="text" class="col-md-3 col-form-label text-md-right">Paragraph Text
                            ({{ $lang }})
                        </label>
                        <div class="col-md-6">
                            <textarea id="editor" class="form-control @error('text') is-invalid @enderror" name="text[{{ $key }}]">{{ old('text.'. $key, $whous->getTranslation('text', $key)) }}</textarea>
                            
                            @error('text')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> --}}
                        </div>
                    @endforeach
                    {{-- <!--begin::Row-->
                    <div class="row">
                        @foreach (config('lang') as $key => $lang)
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">
                                        {{ __('dashboard.upper_text') }} ({{ $lang }})
                                    </label>
                                    <div class="col-lg-8">
                                        <input autocomplete="off" type="text" name="upper_text[{{ $key }}]"
                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name"
                                            placeholder="{{ $lang }}"
                                            value="{{ old('upper_text.' . $key, $whous->getTranslation('upper_text', $key)) }}">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                        @error('upper_text')
                                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">
                                        {{ __('dashboard.text') }} ({{ $lang }})
                                    </label>
                                    <div class="col-lg-8">
                                        <textarea autocomplete="off" type="text" name="text[{{ $key }}]"
                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name"
                                            placeholder="{{ $lang }}"
                                            value="{{ old('text.' . $key, $whous->getTranslation('text', $key)) }}"></textarea>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                        @error('text')
                                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                    <!--end::Row--> --}}
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
