<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-12">
    <!--begin::General options-->
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <div class="card-title">
                <h2>Terms & Conditions </h2>
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
                            @if ($key == 'ar')
                                <label for="text" class="col-md-3 col-form-label text-md-right">Paragraph Text
                                    ({{ $lang }})
                                </label>
                                <div class="col-md-6">
                                    <textarea id="editor" class="form-control @error('text') is-invalid @enderror" name="text[{{ $key }}]">{{ old('text.ar', $terms->getTranslation('text', $key) ?? '') }}</textarea>

                                    @error('text')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            @elseif ($key == 'en')
                                <label for="text" class="col-md-3 col-form-label text-md-right">Paragraph Text
                                    ({{ $lang }})
                                </label>
                                <div class="col-md-6">
                                    <textarea id="editor2" class="form-control @error('text') is-invalid @enderror" name="text[{{ $key }}]">{{ old('text.en', $terms->getTranslation('text', $key) ?? '') }}</textarea>

                                    @error('text')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            @endif
                        </div>
                    @endforeach
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
