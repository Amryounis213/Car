<td class="d-flex align-items-center">
    <div class="d-flex align-items-center">
        <!--begin::Thumbnail-->
        <a href="{{route('showEpisodes' , $podcast->id)}}" class="symbol symbol-60px">
            <span class="symbol-label" style="background-image:url({{$podcast->image_path}});"></span>
        </a>
        <!--end::Thumbnail-->
        <div class="ms-5">
            <!--begin::Title-->
            <a href="{{route('showEpisodes' , $podcast->id)}}" 
                class="text-gray-800 text-hover-primary fs-5 fw-bold" 
                >{{$podcast->title}}</a>
            <!--end::Title-->
        </div>
    </div>
</td>