@extends('layouts.main')
@section('content')
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">اضافة
                            منتج جديد</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="" class="text-muted text-hover-primary">{{ __('dashboard.mainPage') }}</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">المنتج</li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">اضافة منتج جديد</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
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

                    @include('layouts.sessions-messages')
                    <form id="kt_ecommerce_add_category_form" 
                        class="form d-flex flex-column flex-lg-row"
                        action="{{ route('countries.store') }}" 
                        method="POST"
                        enctype="multipart/form-data"
                        >
                        @csrf
                        
                        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-12">
                            <!--begin::General options-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>عام</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <div class="row mb-2">
                                        <!--begin::Col-->
                                        <div class="col-lg-12">
                                            <!--begin::Row-->
                                            <div class="row fv-plugins-icon-container">
                                                <label class="col-lg-2 col-form-label required fw-bold fs-6">الاسم</label>
                                                <div class="col-lg-4">
                                                    <input type="text" name="name"
                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name"
                                                        placeholder="اسم المنتج" value="{{$product->name}}">
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                        
                        
                                                <label class="col-lg-2 col-form-label required fw-bold fs-6">صورة المنتج</label>
                                                <div class="col-lg-4">
                                                    <input type="file" name="icon"
                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name"
                                                        placeholder="اسم المنتج" value="{{$product->name}}">
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                        
                        
                        
                                            </div>
                                            <!--end::Row-->
                        
                                            <!--begin::Row-->
                                            <div class="row fv-plugins-icon-container">
                                               
                                                
                        
                                                <label class="col-lg-2 col-form-label required fw-bold fs-6">{{
__('dashboard.status') }} </label>
                        
                                                <div class="col-lg-4 d-flex align-items-center">
                                                    <div class="form-check form-check-solid form-switch fv-row">
                                                        <input type="hidden" name="status" value="1">
                                                        <input class="form-check-input w-45px h-30px" type="checkbox" id="status" name="status" value="1" checked="">
                                                        <label class="form-check-label" for="allowmarketing"></label>
                                                    </div>
                                                </div>
                        
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                  
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::General options-->
                           
                        
                            <div class="d-flex justify-content-center">
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button type="submit" class="btn btn-dark">
                                    <span class="indicator-label">حفظ المنتج</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Button-->
                            </div>
                        </div>
                        <!--end::Main column-->
                     
                    </form>
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->

    </div>
    <!--end:::Main-->
@endsection
@section('scripts')
    <script>
        $('input[name=account_podcast]').on('click', function() {
            if ($(this).val() == 'limited') {
                $('#limit').show();
            } else {
                $('#limit').hide();
            }
        });
    </script>
    <script src="{{ asset('assets/js/custom/apps/ecommerce/catalog/save-category.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
@endsection
