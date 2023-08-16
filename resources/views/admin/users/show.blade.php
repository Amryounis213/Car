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
                            {{ __('dashboard.show_users') }}</h1>
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
                            <li class="breadcrumb-item text-muted">{{ __('dashboard.show_users') }}</li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">{{ __('dashboard.user_details') }}</li>
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
                    {{-- show user --}}
                    <div class="form d-flex flex-column flex-lg-row">
                        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-12">
                            <!--begin::General options-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>{{ __('dashboard.general') }}</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">

                                    <div class="row mb-2">
                                        <!--begin::Col-->
                                        <div class="col-lg-12">
                                            <!--begin::Row-->
                                            <div class="d-flex flex-root">
                                                <div class="d-flex flex-column flex-row-auto w-200px">
                                                    <div class="d-flex flex-column-fluid">
                                                        <!--begin::Image input-->
                                                        <div class="image-input" data-kt-image-input="true">
                                                            <!--begin::Image preview wrapper-->
                                                            <div class="image-input-wrapper w-125px h-180px"
                                                                style="background-image: url('{{ $user->image_path }}')">
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
                                                                <table class="col-lg-6 table fs-6 fw-bold gs-0 gy-2 gx-2">
                                                                    <tbody>
                                                                        <tr class="">
                                                                            <td class="text-gray-400">
                                                                                {{ __('dashboard.name') }}</td>
                                                                            <td class="text-gray-800">{{ $user->name }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="">
                                                                            <td class="text-gray-400">
                                                                                {{ __('dashboard.id_number') }}</td>
                                                                            <td class="text-gray-800">{{ $user->id_number }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="">
                                                                            <td class="text-gray-400">
                                                                                {{ __('dashboard.birth_date') }}</td>
                                                                            <td class="text-gray-800">{{ $user->birth_date }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="">
                                                                            <td class="text-gray-400">
                                                                                {{ __('dashboard.phone') }}</td>
                                                                            <td class="text-gray-800">{{ $user->phone }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="">
                                                                            <td class="text-gray-400">
                                                                                {{ __('dashboard.gender') }}</td>
                                                                            <td class="text-gray-800">{{ $user->gender }}
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--begin::Row-->
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Col-->
                                </div>

                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::General options-->
                    </div>
                    <!--end::Main column-->
                    <div>
                        <h3></h3>
                    </div>
                    {{-- show user --}}
                    <div class="form d-flex flex-column flex-lg-row">
                        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-12">
                            <!--begin::General options-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>{{ __('dashboard.wallet_details') }}</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">

                                    <div class="row mb-2">
                                        <!--begin::Col-->
                                        <div class="col-lg-12">
                                            <!--begin::Row-->
                                            <div class="d-flex flex-root">
                                                <div class="d-flex flex-column flex-row-auto w-200px">
                                                    <div class="d-flex flex-column-fluid">
                                                        <!--begin::Image input-->
                                                        <div class="image-input" data-kt-image-input="true">
                                                            <!--begin::Image preview wrapper-->
                                                            <div class="image-input-wrapper w-125px h-180px">
                                                            </div>
                                                            <!--end::Image preview wrapper-->
                                                        </div>
                                                        <!--end::Image input-->
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-column flex-row-fluid mt-3">
                                                    <h5>{{ __('dashboard.wallet_details') }}</h5>
                                                    <div class="d-flex flex-row flex-column-fluid">
                                                        <div class="d-flex flex-row-fluid ">
                                                            <div class="mt-3">
                                                                <!--begin::Details-->
                                                                <table class="col-lg-6 table fs-6 fw-bold gs-0 gy-2 gx-2">
                                                                    <tbody>
                                                                        <tr class="">
                                                                            <td class="text-gray-400">
                                                                                {{ __('dashboard.balance') }}</td>
                                                                            <td class="text-gray-800">{{ $wallet->balance }}
                                                                            </td>
                                                                        </tr>
                                                                        {{-- <tr class="">
                                                                            <td class="text-gray-400">
                                                                                {{ __('dashboard.transactions_count') }}</td>
                                                                            <td class="text-gray-800">{{ $user->name }}
                                                                            </td>
                                                                        </tr> --}}
                                                                        
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                </div>

                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::General options-->
                    </div>
                    <div>
                        <h3></h3>
                    </div>
                    {{-- show user --}}
                    <div class="form d-flex flex-column flex-lg-row">
                        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-12">
                            <!--begin::General options-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>{{ __('dashboard.transactions') }}</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body py-4">
                                    {{ $dataTable->table() }}
                                </div>
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::General options-->
                    </div>
                    <!--end::Main column-->

                </div>
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
{{ $dataTable->scripts() }}
    <script>
        $('input[name=account_podcast]').on('click', function() {
            if ($(this).val() == 'limited') {
                $('#limit').show();
            } else {
                $('#limit').hide();
            }
        });
    </script>
    <script src="{{ asset('assets/js/custom/apps/ecommerce/catalog/save-user.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/user-search.js') }}"></script>
@endsection
