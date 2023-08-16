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
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            {{ __('dashboard.show_contact_us') }}</h1>
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
                            <li class="breadcrumb-item text-muted">{{ __('dashboard.contactus') }}</li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">{{ __('dashboard.show_contact_us') }}</li>
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
                <div id="kt_app_content" class="app-content flex-column-fluid">
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container container-xxl">

                        @include('layouts.sessions-messages')
                        {{-- show model --}}
                        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-12">
                            <!--begin::General options-->
                            <div class="card card-flush py-4">
                                <!--end::Card header-->
                                <div class="d-flex flex-root">
                                    <div class="d-flex flex-column flex-row-auto w-200px">
                                        <div class="d-flex flex-column-fluid">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-circle" data-kt-image-input="true">
                                                <!--begin::Image preview wrapper-->
                                                <div class="image-input-wrapper w-125px h-125px"
                                                    style="background-image: url({{ asset('storage/' . $model->User->image) }});">
                                                </div>
                                                <!--end::Image preview wrapper-->
                                            </div>
                                            <!--end::Image input-->
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column flex-row-fluid mt-3">
                                        <h5>{{ __('dashboard.user_details') }}</h5>
                                        <div class="d-flex flex-row flex-column-fluid">
                                            <div class="d-flex flex-row-fluid ">
                                                <div class="mt-3">
                                                    <!--begin::Details-->
                                                    <table class="table fs-6 fw-bold gs-0 gy-2 gx-2">
                                                        <tbody>
                                                            <tr class="">
                                                                <td class="text-gray-400">{{ __('dashboard.username') }}
                                                                </td>
                                                                <td class="text-gray-800">{{ $model->User->name }}</td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column flex-row-fluid mt-3">
                                        <h5>{{ __('dashboard.request_details') }}</h5>
                                        <div class="d-flex flex-row flex-column-fluid">
                                            <div class="d-flex flex-row-fluid ">
                                                <div class="mt-3">
                                                    <!--begin::Details-->
                                                    <table class="table fs-6 fw-bold gs-0 gy-2 gx-2">
                                                        <tbody>
                                                            <tr class="">
                                                                <td class="text-gray-400">{{ __('dashboard.title') }}
                                                                </td>
                                                                <td class="text-gray-800">
                                                                    {{ $model->title }}
                                                                </td>
                                                            </tr>
                                                            <tr class="">
                                                                <td class="text-gray-400">{{ __('dashboard.phone') }}
                                                                </td>
                                                                <td class="text-gray-800">
                                                                    {{ $model->User->phone }}
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column flex-row-fluid mt-3">
                                        <h5 class="modal-title" id="imageModalLabel">
                                            {{ __('dashboard.message') }}</h5>
                                        <div class="d-flex flex-row flex-column-fluid">
                                            <div class="d-flex flex-row-fluid ">
                                                <div class="mt-3">
                                                    <div class="image-input-wrapper w-200px h-200px">
                                                        <p>{{ $model->message }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::General options-->
                            <div class="d-flex justify-content-center">
                                <!--end::Button-->
                                @include('admin.communications.parts._status')
                            </div>
                        </div>
                    </div>
                    {{--  Show Driver --}}
                </div>
                {{--  Show Driver --}}
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
    <script src="{{ asset('assets/js/custom/apps/ecommerce/catalog/save-model.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        });
    </script>
    {{-- //update status status --}}
    <script>
        $(document).on('click', '.sts-fld', function(e) {
            //e.preventDefault();
            const id = $(this).data('id');
            const checkedValue = $(this).is(":checked");
            $.ajax({
                type: "POST",
                url: "{{ route('communications.status') }}",
                data: {
                    'id': id
                },
                success: function(data) {
                    if (data.type === 'yes') {
                        $(this).prop("checked", checkedValue);
                    } else if (data.type === 'no') {
                        $(this).prop("checked", !checkedValue);
                    }
                    toastr.options.positionClass = 'toast-top-left';
                    toastr[data.status](data.message);
                }
            });
        });
    </script>
@endsection
