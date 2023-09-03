@extends('layouts.main')
@section('labels')
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{ __('dashboard.users') }}
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <small class="text-muted fs-7 fw-bold my-1 ms-1">{{ __('dashboard.home') }} / {{ __('dashboard.users') }} / {{ __('dashboard.edit') }}
                    </small>
                    <!--end::Description-->
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-1">
                <!--begin::Wrapper-->
                <div class="me-4">

                </div>
                <!--end::Wrapper-->



            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
@endsection
@section('content')
@section('styles')
@endsection
@if ($errors->any())
    <div class="alert alert-dismissible alert-danger d-flex align-items-center p-5 mb-10">
        <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
        <span class="svg-icon svg-icon-2hx svg-icon-danger me-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3"
                    d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
                    fill="currentColor"></path>
                <path
                    d="M10.5857864,12 L9.17157288,10.5857864 C8.78104858,10.1952621 8.78104858,9.56209717 9.17157288,9.17157288 C9.56209717,8.78104858 10.1952621,8.78104858 10.5857864,9.17157288 L12,10.5857864 L13.4142136,9.17157288 C13.8047379,8.78104858 14.4379028,8.78104858 14.8284271,9.17157288 C15.2189514,9.56209717 15.2189514,10.1952621 14.8284271,10.5857864 L13.4142136,12 L14.8284271,13.4142136 C15.2189514,13.8047379 15.2189514,14.4379028 14.8284271,14.8284271 C14.4379028,15.2189514 13.8047379,15.2189514 13.4142136,14.8284271 L12,13.4142136 L10.5857864,14.8284271 C10.1952621,15.2189514 9.56209717,15.2189514 9.17157288,14.8284271 C8.78104858,14.4379028 8.78104858,13.8047379 9.17157288,13.4142136 L10.5857864,12 Z"
                    fill="currentColor"></path>
            </svg>
        </span>
        <!--end::Svg Icon-->
        <div class="d-flex flex-column pe-0 pe-sm-10">
            <h4 class="mb-1 text-danger">error</h4>


            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach


        </div>

        <button type="button"
            class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
            data-bs-dismiss="alert">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
            <span class="svg-icon svg-icon-2x svg-icon-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none">
                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                        transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                        transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                </svg>
            </span>
            <!--end::Svg Icon-->
        </button>
    </div>
@endif

@if(Session::has('success'))
    <!--begin::Alert-->
    <div class="alert alert-success d-flex flex-column flex-sm-row p-5 my-10">
        <!--begin::Icon-->
        <span class="svg-icon svg-icon-2hx svg-icon-success me-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3"
                      d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                      fill="black"></path>
                <path
                    d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
                    fill="black"></path>
            </svg>
        </span>
        <!--end::Icon-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-column">
            <!--begin::Title-->
            <h4 class="mb-1 text-dark">Success..</h4>
            <!--end::Title-->
            <!--begin::Content-->
            <span>
            @if(is_object(Session::get('success')))
                @foreach (Session::get('success')->all(':message') as $message)
                    {{ $message }}
                @endforeach
            @else
                {{ Session::get('success') }}
            @endif
           </span>
            <!--end::Content-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Close-->
        <button type="button"
                class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
                data-bs-dismiss="alert">
            <span class="svg-icon svg-icon-2x svg-icon-light">x</span>
        </button>
        <!--end::Close-->
    </div>


@endif

<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
        data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">{{ __('dashboard.edit') }} | {{ $admin->name }}</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->
    <!--begin::Content-->
    <div id="kt_account_profile_details" class="collapse show">
        <!--begin::Form-->
        <form id="kt_form_1" action="{{ route('createusers.update', $admin->id) }}" method="POST" class="form"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('admin.createusers._form')
        </form>
        <!--end::Form-->
    </div>
    <!--end::Content-->
</div>
<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
        data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Change Password</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->
    <!--begin::Content-->
    <div id="kt_account_profile_details" class="collapse show">
        <!--begin::Form-->
        <form id="kt_form_1" action="{{ route('createusers.updatepassword', $admin->id) }}" method="POST" class="form"
            enctype="multipart/form-data">
            @csrf
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Col-->
                    <div class="col-lg-12">
                      
                        <!--begin::Row-->
                        <div class="row align-items-center">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row mb-4">
                                <div class="row align-items-center">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-bold fs-6">كلمة السر الجديدة</label>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="col-lg-8">
                                        <input type="password" name="password"
                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                            placeholder="Password" value="" />
                                    </div>
                                    <!--end::Label-->
                                </div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row mb-4">
                                <div class="row align-items-center">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-bold fs-6">تأكيد كلمة السر</label>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="col-lg-8">
                                        <input type="password" name="password_confirmation"
                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                            placeholder="Confirm Password" value="" />
                                    </div>
                                    <!--end::Label-->
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Card body-->
            <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="reset" class="btn btn-light btn-active-light-primary me-2">إلغاء</button>
                <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Content-->

</div>
@endsection

@section('scripts')
<script>
    var avatar2 = new KTImageInput('kt_image_2');
</script>
<script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>

<script>
    var allEditors = document.querySelectorAll('.editor');
    for (var i = 0; i < allEditors.length; ++i) {
        ClassicEditor.create(allEditors[i]);
    }
</script>


<script>
    // document.addEventListener('DOMContentLoaded', function(e) {
    // FormValidation.formValidation(
    //  document.getElementById('kt_form_1'),
    //  {
    //   fields: {
    //     'title[ar]' : {
    //     validators: {
    //      notEmpty: {
    //       message: 'Arabic Title is required'
    //      },
    //     }
    //    },

    //    'title[en]': {
    //     validators: {
    //      notEmpty: {
    //       message: 'English Title is required'
    //      },

    //     }
    //    },

    //    image: {
    //     validators: {
    //      notEmpty: {
    //       message: 'image is required'
    //      },

    //     }
    //    },



    //   },

    //   plugins: {
    //    trigger: new FormValidation.plugins.Trigger(),
    //    // Bootstrap Framework Integration
    //    bootstrap: new FormValidation.plugins.Bootstrap(),
    //    // Validate fields when clicking the Submit button
    //    submitButton: new FormValidation.plugins.SubmitButton(),
    //             // Submit the form when all fields are valid
    //    defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
    //   }
    //  }
    // );

    // });
</script>
@endsection
