<div class="col-lg-{{ $col ?? 6 }}">
    <div class="row fv-plugins-icon-container">
        <label class="col-lg-2 col-form-label required fw-bold fs-6">{{ __('dashboard.status') }}
        </label>
        <div class="col-lg-4 d-flex align-items-center">
            <div class="form-check form-check-solid form-check-custom form-switch fv-row">
                <input data-id="{{ $var->id }}" class="form-check-input  w-45px h-30px sts-fld" type="checkbox"
                    id="status_{{ $var->id }}" name="status" value="1"
                    {{ old('status', $var->status ?? '') == 1 ? 'checked' : '' }} />
                <label class="form-check-label" for="allowmarketing"></label>
            </div>
        </div>
    </div>
</div>
