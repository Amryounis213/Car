
@if ($model->status == 'rejected')
    <td class="text-end pe-0" data-order="rejected">
        <!--begin::Badges-->
        <div class="badge badge-light-danger">{{ __('dashboard.rejected') }}</div>
        <!--end::Badges-->
    </td>
@elseif($model->status == 'accepted')
    <td class="text-end pe-0" data-order="accepted">
        <!--begin::Badges-->
        <div class="badge badge-light-success">{{ __('dashboard.accepted') }}</div>
        <!--end::Badges-->
    </td>
@else
    <td class="text-center">
        <div class="btn-group" role="group">
            <button type="button" data-id="{{ $model->id }}" id="status_{{ $model->id }}" name="status"
                value="1" {{ old('status', $model->status ?? '') == 1 ? 'checked' : '' }} data-status="accepted"
                class="accept-fld btn btn-success btn-sm rounded-pill me-2 ">
                <i class="flaticon2-checkmark icon-xs"></i> {{ __('dashboard.accept') }}
            </button>

            <button type="button" data-id="{{ $model->id }}" id="status_{{ $model->id }}" name="status"
                value="1" {{ old('status', $model->status ?? '') == 1 ? 'checked' : '' }} data-status="rejected"
                class="accept-fld btn btn-danger btn-sm rounded-pill ">
                <i class="flaticon2-cancel-music icon-xs"></i> {{ __('dashboard.reject') }}
            </button>
        </div>
    </td>
@endif

