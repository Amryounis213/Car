<td class="d-flex align-items-center">
    @if ($model->status == 'free')
        <span class="badge badge-light-success">{{ __('dashboard.free') }}</span>
    @elseif ($model->status == 'closed')
        <span class="badge badge-light-secondary">{{ __('dashboard.closed') }}</span>
    @else
        <span class="badge badge-danger">{{ __('dashboard.busy') }}</span>
    @endif
</td>