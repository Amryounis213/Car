<td class="d-flex align-items-center">
    <div class="d-flex align-items-center">
        <!--begin::Thumbnail-->
        <a href="javascript::void(0)" class="symbol symbol-60px">
            <span class="symbol-label" style="background-image:url({{$modal->User ? $modal->User->image_path : '' }});"></span>
        </a>
        <!--end::Thumbnail-->
        <div class="ms-5">
            <!--begin::Title-->
            <a href="javascript::void(0)" 
                class="text-gray-800 text-hover-primary fs-5 fw-bold" 
                >{{$modal->User ? $modal->User->name : ''}}</a>
            <!--end::Title-->
        </div>
    </div>
</td>

