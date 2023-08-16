@extends('layouts.main')
@section('styles')
{{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}

@endsection
@section('content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">البرامج
                    </h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{route('dashboard')}}" class="text-muted text-hover-primary">{{ __('dashboard.mainPage') }}</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">جميع  البرامج</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>


                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                    </div>
                    <!--end::Toolbar-->


                </div>



                <!--end::Page title-->

            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
               <Podcast />
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection
@section('scripts')
    @vite('resources/js/app.js')

   
    {{-- <script src="{{ asset('assets/js/custom/apps/ecommerce/catalog/save-category.js') }}"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}

    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script type="text/javascript">
      
// $('.js-example-basic-multiple').select2({
//     placeholder: "اختر المستخدمين",
//     allowClear: false ,
//     ajax: {
//     url: "{{route('api-get-users-select2')}}",
//     data : function(params){
//         return {
//             name : params.term
//         }
//     },
//     dataType: 'json',
//     delay: 250,
//     processResults: function (data, params) {
//         console.log(data);
//         return {
//             results: data
//         };
//     },
//     cache: true
//     },
//     minimumInputLength: 1,
//     maximumSelectionLength: 1,
//     templateResult : function(data){
//         if(data.loading){
//             return data.text;
//         }
//         return data.name;
//     },
// });
    </script>
@endsection
