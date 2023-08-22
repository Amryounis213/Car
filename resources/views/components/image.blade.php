<div class="row mb-2">
    <!--begin::Col-->
   
    <div class="col-lg-12">
        <div class="card-body text-center pt-0">
            <!--begin::Image input-->
            <style>
                .image-input-placeholder-{{ $name }} {
                    background-image: url({{ isset($var) && $var->$name ? asset('storage/' . $var->$name) : asset('assets/media/svg/files/pic.jpg') }});
                }

                [data-theme="dark"] .image-input-placeholder-{{ $name }} {
                    background-image: url({{ isset($var) && $var->$name ? asset('storage/' . $var->$name) : asset('assets/media/svg/files/blank-image-dark.svg') }});
                }
            </style>
          
            <div class="image-input image-input-empty image-input-outline image-input-placeholder-{{ $name }} mb-3" data-kt-image-input="true">
                <!--begin::Preview existing avatar-->
                <div class="image-input-wrapper w-{{ $width ?? 500 }}px h-{{ $height ?? 500 }}px" style="background-image: url('{{ isset($var) && $var->$name ? asset('storage/' . $var->$name) : asset('assets/media/svg/files/pic.jpg') }}'); background-size: cover; background-position: center;"></div>
                <!--end::Preview existing avatar-->
                <!--begin::Label-->
                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-kt-initialized="1">
                    <i class="bi bi-pencil-fill fs-7"></i>
                    <!--begin::Inputs-->
                    <input type="file" name="{{ $name }}" accept=".png, .jpg, .jpeg">
                    <input type="hidden" name="image_remove">
                    <!--end::Inputs-->
                </label>
                <!--end::Label-->
                <!--begin::Cancel-->
                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-kt-initialized="1">
                    <i class="bi bi-x fs-2"></i>
                </span>
                <!--end::Cancel-->
                <!--begin::Remove-->
                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-kt-initialized="1">
                    <i class="bi bi-x fs-2"></i>
                </span>
                <!--end::Remove-->
            </div>
            
            <!--end::Image input-->
            <!--begin::Description-->
            <div class="text-muted fs-7">
                {{ $title ?? " "}}
            </div>
            <div class="fv-plugins-message-container invalid-feedback"></div>
            @error( $name )
                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
            @enderror
            <!--end::Description-->
        </div>
    </div>
    <!--end::Col-->

</div>