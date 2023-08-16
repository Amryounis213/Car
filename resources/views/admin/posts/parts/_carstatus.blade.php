<td class="d-flex align-items-center">
    @if($model->car_status == "pending")
        <span class="badge badge-warning">{{ __('dashboard.pending') }}</span>
    @elseif ($model->car_status == "active")
        <span class="badge badge-light-success">{{ __('dashboard.accepted_and_inprogress') }}</span>
    @elseif ($model->car_status == "not_active")
        <span class="badge badge-success">{{ __('dashboard.completed') }}</span>
    @endif
</td>
