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
    <td class="text-end pe-0" data-order="accepted">
        <!--begin::Badges-->
        <div class="badge badge-light-secondary">{{ __('dashboard.pending') }}</div>
        <!--end::Badges-->
    </td>
@endif
