<td class="d-flex align-items-center">
    <div class="d-flex align-items-center">
        <!--begin::Thumbnail-->
        <a href="javascript:void(0)" class="symbol symbol-60px">
            <span class="symbol-label {{ $model->icon }}" style="background-image:url( {{ $model->icon_path }} );"></span>
        </a>
        <!--end::Thumbnail-->
        <div class="ms-5">
            <!--begin::Title-->
            <a href="{{-- route('showEpisodes' , $driver->id) --}}" class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $model->name }}</a>
            <!--end::Title-->
        </div>
    </div>
</td>
