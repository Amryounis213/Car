<td class="d-flex align-items-center">
    @if($model->status == 1)
        <span class="badge badge-light-success">{{ __('dashboard.active') }}</span>
    @else
        <span class="badge badge-light-info">{{ __('dashboard.not_active') }}</span>
    @endif
</td>