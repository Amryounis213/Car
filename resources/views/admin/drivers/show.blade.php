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
                            {{ __('dashboard.show_drivers') }}</h1>
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
                            <li class="breadcrumb-item text-muted">{{ __('dashboard.drivers') }}</li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">{{ __('dashboard.show_drivers') }}</li>
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
                    {{-- show driver --}}
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
                                                                style="background-image: url({{$driver->image_path }})">
                                                            </div>
                                                            <!--end::Image preview wrapper-->
                                                        </div>
                                                        <!--end::Image input-->
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-column flex-row-fluid mt-3">
                                                    <h5>{{ __('dashboard.driver') }} </h5>
                                                    <div class="d-flex flex-row flex-column-fluid">
                                                        <div class="d-flex flex-row-fluid ">
                                                            <div class="mt-3">
                                                                <!--begin::Details-->
                                                                <table class="col-lg-6 table fs-6 fw-bold gs-0 gy-2 gx-2">
                                                                    <tbody>
                                                                        <tr class="">
                                                                            <td class="text-gray-400">
                                                                                {{ __('dashboard.name') }}</td>
                                                                            <td class="text-gray-800">{{ $driver->name }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="">
                                                                            <td class="text-gray-400">
                                                                                {{ __('dashboard.phone') }}</td>
                                                                            <td class="text-gray-800">{{ $driver->phone }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="">
                                                                            <td class="text-gray-400">
                                                                                {{ __('dashboard.gender') }}</td>
                                                                            <td class="text-gray-800">{{ $driver->gender }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="">
                                                                            <td class="text-gray-400">
                                                                                {{ __('dashboard.id_number') }}</td>
                                                                            <td class="text-gray-800">
                                                                                {{ $driver->id_number }}</td>
                                                                        </tr>
                                                                        <tr class="">
                                                                            <td class="text-gray-400">
                                                                                {{ __('dashboard.license_number') }}</td>
                                                                            <td class="text-gray-800">
                                                                                {{ $driver->license_number }}</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="d-flex flex-root">
                                                    <div class="d-flex flex-column flex-row-auto w-200px">
                                                        <div class="d-flex flex-column-fluid">
                                                            <!--begin::Image input-->
                                                            <div class="image-input" data-kt-image-input="true">
                                                                <!--begin::Image preview wrapper-->
                                                                <div class="image-input-wrapper w-125px h-180px"
                                                                    style="background-image: url({{ asset('storage/' . $driver->car_image) }})">
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
                                                                    <table
                                                                        class="col-lg-6 table fs-6 fw-bold gs-0 gy-2 gx-2">
                                                                        <tbody>
                                                                            <tr class="" class="py-4">
                                                                                <td class="text-gray-400">
                                                                                    {{ __('dashboard.balance') }}</td>
                                                                                <td class="text-gray-800">
                                                                                   
                                                                                    <div class="d-flex align-items-center">
                                                                                       
                                                                                        <!--begin::Amount-->
                                                                                        <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">{{$driver->Wallet->balance}}</span>
                                                                                        <!--end::Amount-->
                                                                                         <!--begin::Currency-->
                                                                                         <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">{{__('dashboard.currency')}}</span>
                                                                                         <!--end::Currency-->
                                                                                       
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            {{-- <tr class="">
                                                                                <td class="text-gray-400">
                                                                                    {{ __('dashboard.transactions_count') }}</td>
                                                                                <td class="text-gray-800">
                                                                                    {{ $driver->Wallet->transactions_count }}
                                                                                </td>
                                                                            </tr>
                                                                            --}}
                                                                        </tbody>
                                                                    </table>
                                                                </div>
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
                    {{-- show driver --}}
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
                                                    {{-- <h5>{{ __('dashboard.service_details') }}</h5> --}}
                                                    <div class="d-flex flex-row flex-column-fluid">
                                                        <div class="d-flex flex-row-fluid justify-content-start ">
                                                            <div class="">
                                                                <div class="table-responsive">
                                                                    <!--begin::Table-->
                                                                    <table class="table align-middle gs-0 gy-4 my-0">
                                                                        <!--begin::Table head-->
                                                                        <thead>
                                                                            <tr class="fs-7 fw-bold text-gray-500">
                                                                                <th class="p-0 min-w-150px d-block pt-3">Features</th>
                                                                                <th class="text-end min-w-140px pt-3">STATUS</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <!--end::Table head-->
                                                                        <!--begin::Table body-->
                                                                        {{--
                                                                                     <tr class="">
                                                                                <td class="text-gray-400">
                                                                                    {{ __('dashboard.car_make') }}</td>
                                                                                <td class="text-gray-800">
                                                                                    {{ $driver->car_make }}</td>
                                                                            </tr>
                                                                            <tr class="">
                                                                                <td class="text-gray-400">
                                                                                    {{ __('dashboard.car_model') }}</td>
                                                                                <td class="text-gray-800">
                                                                                    {{ $driver->car_model }}</td>
                                                                            </tr>
                                                                            <tr class="">
                                                                                <td class="text-gray-400">
                                                                                    {{ __('dashboard.year') }}</td>
                                                                                <td class="text-gray-800">
                                                                                    {{ $driver->year }}</td>
                                                                            </tr>
                                                                            <tr class="">
                                                                                <td class="text-gray-400">
                                                                                    {{ __('dashboard.car_color') }}</td>
                                                                                <td class="text-gray-800">
                                                                                    {{ $driver->car_color }}</td>
                                                                            </tr>
                                                                            <tr class="">
                                                                                <td class="text-gray-400">
                                                                                    {{ __('dashboard.plate_number') }}</td>
                                                                                <td class="text-gray-800">
                                                                                    {{ $driver->plate_number }}</td>
                                                                            </tr>--}}
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">   {{ __('dashboard.car_make') }} </a>
                                                                                </td>
                                                                                <td class="text-end">
                                                                                    <span class="badge badge-light-success fs-7 fw-bold"> {{ $driver->car_make ?? '----' }}</span>
                                                                                </td>
                                                                              
                                                                            </tr>

                                                                            <tr>
                                                                                <td>
                                                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">   {{ __('dashboard.car_model') }} </a>
                                                                                </td>
                                                                                <td class="text-end">
                                                                                    <span class="badge badge-light-success fs-7 fw-bold"> {{ $driver->car_model ?? '----' }}</span>
                                                                                </td>
                                                                              
                                                                            </tr>


                                                                            <tr>
                                                                                <td>
                                                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">   {{ __('dashboard.year') }} </a>
                                                                                </td>
                                                                                <td class="text-end">
                                                                                    <span class="badge badge-light-success fs-7 fw-bold"> {{ $driver->year ?? '----' }}</span>
                                                                                </td>
                                                                              
                                                                            </tr>


                                                                            <tr>
                                                                                <td>
                                                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">   {{ __('dashboard.plate_number') }} </a>
                                                                                </td>
                                                                                <td class="text-end">
                                                                                    <span class="badge badge-light-success fs-7 fw-bold"> {{ $driver->plate_number ?? '----' }}</span>
                                                                                </td>
                                                                              
                                                                            </tr>


                                                                            <tr>
                                                                                <td>
                                                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">   {{ __('dashboard.car_model') }} </a>
                                                                                </td>
                                                                                <td class="text-end">
                                                                                    <span class="badge badge-light-success fs-7 fw-bold"> {{ $driver->car_model ?? '----' }}</span>
                                                                                </td>
                                                                              
                                                                            </tr>
                                                                          
                                                                        </tbody>
                                                                        <!--end::Table body-->
                                                                    </table>
                                                                    <!--end::Table-->
                                                                </div>
                                                            </div>

                                                            <div class="ms-10">
                                                                <div class="table-responsive">
                                                                    <!--begin::Table-->
                                                                    <table class="table align-middle gs-0 gy-4 my-0">
                                                                        <!--begin::Table head-->
                                                                        <thead>
                                                                            <tr class="fs-7 fw-bold text-gray-500">
                                                                                <th class="p-0 min-w-150px d-block pt-3">Features</th>
                                                                                <th class="text-end min-w-140px pt-3">STATUS</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <!--end::Table head-->
                                                                        <!--begin::Table body-->
                                                                        {{--
                                                                                     <tr class="">
                                                                                <td class="text-gray-400">
                                                                                    {{ __('dashboard.car_make') }}</td>
                                                                                <td class="text-gray-800">
                                                                                    {{ $driver->car_make }}</td>
                                                                            </tr>
                                                                            <tr class="">
                                                                                <td class="text-gray-400">
                                                                                    {{ __('dashboard.car_model') }}</td>
                                                                                <td class="text-gray-800">
                                                                                    {{ $driver->car_model }}</td>
                                                                            </tr>
                                                                            <tr class="">
                                                                                <td class="text-gray-400">
                                                                                    {{ __('dashboard.year') }}</td>
                                                                                <td class="text-gray-800">
                                                                                    {{ $driver->year }}</td>
                                                                            </tr>
                                                                            <tr class="">
                                                                                <td class="text-gray-400">
                                                                                    {{ __('dashboard.car_color') }}</td>
                                                                                <td class="text-gray-800">
                                                                                    {{ $driver->car_color }}</td>
                                                                            </tr>
                                                                            <tr class="">
                                                                                <td class="text-gray-400">
                                                                                    {{ __('dashboard.plate_number') }}</td>
                                                                                <td class="text-gray-800">
                                                                                    {{ $driver->plate_number }}</td>
                                                                            </tr>--}}
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">   {{ __('dashboard.car_make') }} </a>
                                                                                </td>
                                                                                <td class="text-end">
                                                                                    <span class="badge badge-light-success fs-7 fw-bold"> {{ $driver->car_make ?? '----' }}</span>
                                                                                </td>
                                                                              
                                                                            </tr>

                                                                            <tr>
                                                                                <td>
                                                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">   {{ __('dashboard.car_model') }} </a>
                                                                                </td>
                                                                                <td class="text-end">
                                                                                    <span class="badge badge-light-success fs-7 fw-bold"> {{ $driver->car_model ?? '----' }}</span>
                                                                                </td>
                                                                              
                                                                            </tr>


                                                                            <tr>
                                                                                <td>
                                                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">   {{ __('dashboard.year') }} </a>
                                                                                </td>
                                                                                <td class="text-end">
                                                                                    <span class="badge badge-light-success fs-7 fw-bold"> {{ $driver->year ?? '----' }}</span>
                                                                                </td>
                                                                              
                                                                            </tr>


                                                                            <tr>
                                                                                <td>
                                                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">   {{ __('dashboard.plate_number') }} </a>
                                                                                </td>
                                                                                <td class="text-end">
                                                                                    <span class="badge badge-light-success fs-7 fw-bold"> {{ $driver->plate_number ?? '----' }}</span>
                                                                                </td>
                                                                              
                                                                            </tr>


                                                                            <tr>
                                                                                <td>
                                                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">   {{ __('dashboard.car_model') }} </a>
                                                                                </td>
                                                                                <td class="text-end">
                                                                                    <span class="badge badge-light-success fs-7 fw-bold"> {{ $driver->car_model ?? '----' }}</span>
                                                                                </td>
                                                                              
                                                                            </tr>
                                                                          
                                                                        </tbody>
                                                                        <!--end::Table body-->
                                                                    </table>
                                                                    <!--end::Table-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                    <div>
                        <h3></h3>
                    </div>
                    {{-- show driver --}}
                    <div class="form d-flex flex-column flex-lg-row">
                        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-12">
                            <!--begin::General options-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>{{ __('dashboard.related_images') }}</h2>
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
                                                <div class="d-flex flex-column flex-row-fluid mt-3">
                                                    <div class="d-flex flex-row flex-column-fluid">
                                                        <div class="container d-flex justify-content-center">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="image-input mb-5"
                                                                        data-kt-image-input="true">
                                                                        <!--begin::Image preview wrapper-->
                                                                        <div class="image-input-wrapper w-550px h-500px"
                                                                            style="background-image: url({{ asset('storage/' . $driver->license_image) }})">
                                                                        </div>
                                                                        <!--end::Image preview wrapper-->
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="image-input mb-5"
                                                                        data-kt-image-input="true">
                                                                        <!--begin::Image preview wrapper-->
                                                                        <div class="image-input-wrapper w-550px h-500px"
                                                                            style="background-image: url({{ asset('storage/' . $driver->id_image) }})">
                                                                        </div>
                                                                        <!--end::Image preview wrapper-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
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



                    <div class="form d-flex flex-column flex-lg-row">
                        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-12">
                            <!--begin::General options-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>{{ __('dashboard.car_images') }}</h2>
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
                                                <div class="d-flex flex-column flex-row-fluid mt-3">
                                                    <div class="d-flex flex-row flex-column-fluid">
                                                        <div class="container d-flex justify-content-center">
                                                            <div class="row">
                                                                @foreach ($driver->CarImages as $image)
                                                                <div class="col-md-6">
                                                                    <div class="image-input mb-5"
                                                                        data-kt-image-input="true">
                                                                        <!--begin::Image preview wrapper-->
                                                                        <div class="image-input-wrapper w-550px h-500px"
                                                                            style="background-image: url({{ asset('storage/' . $image->image) }})">
                                                                        </div>
                                                                        <!--end::Image preview wrapper-->
                                                                    </div>
                                                                </div>
                                                                @endforeach
                                                               
                                                             
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
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
                    <div>
                        <h3></h3>
                    </div>
                    <!--end::Main column-->
                    <div class="form d-flex flex-column flex-lg-row">
                        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-12">
                            <!--begin::General options-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>{{ __('dashboard.service_details') }}</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0 pt-6">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <!--begin::Search-->
                                            <div class="d-flex align-items-center position-relative my-1">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                                            rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                                        <path
                                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <input type="text" id="search" class="form-control form-control-solid w-250px ps-14"
                                                    placeholder="{{ __('dashboard.search') }}" />
                                            </div>
                                            <!--end::Search-->
                                        </div>
                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            <!--begin::Toolbar-->
                                            
                                            <!--end::Toolbar-->
                
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body py-4">
                                        {{ $dataTable->table() }}
                                    </div>
                                    <!--end::Card body-->
                                </div>

                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::General options-->
                    </div>



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
    <script src="{{ asset('assets/js/custom/apps/ecommerce/catalog/save-driver.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
@endsection
