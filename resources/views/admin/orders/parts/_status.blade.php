<td class="d-flex align-items-center">
    @if($model->status == "pending")
        <span class="badge badge-warning">{{ __('dashboard.pending') }}</span>
    @elseif ($model->status == "accepted")
        <span class="badge badge-light-success">{{ __('dashboard.accepted_and_inprogress') }}</span>
    @elseif ($model->status == "done")
        <span class="badge badge-success">{{ __('dashboard.completed') }}</span>
    @endif
</td>