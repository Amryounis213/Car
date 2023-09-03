@extends('layouts.main')
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
                        <li class="breadcrumb-item text-muted">البرامج</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>


                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">




                        <!--begin::Add user-->
                        <a href="{{ route('podcast.create') }}" class="btn btn-dark">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                        rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor"></rect>
                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                        fill="currentColor"></rect>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->اضافة برنامج جديد
                        </a>
                        <!--end::Add user-->
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
                @include('layouts.sessions-messages')
                <div class="row g-5 g-xl-12 mb-5 mb-xl-12">
                    <!--begin::Col-->
                    <div class="col-xl-12">
                        <!--begin::Player widget 1-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-dark">جميع برامجي المحملة</span>
                                    <span class="text-gray-400 mt-1 fw-semibold fs-6">تم التحديث منذ 37 دقيقة</span>
                                </h3>
                                <!--end::Title-->

                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-7">
                                <!--begin::Row-->
                                <div class="row g-5 g-xl-9 mb-5 mb-xl-9">
                                    <!--begin::Col-->
                                    @foreach ($podcasts as $podcast)
                                        <div class="col-sm-2 mb-3 mb-sm-0">
                                            <!--begin::Player card-->
                                            <div class="m-0">
                                                <!--begin::User pic-->
                                                <div class="card-rounded position-relative mb-5">
                                                    <!--begin::Img-->
                                                    <div class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded"
                                                        style="background-image:url({{ $podcast->image_path }})"></div>
                                                    <!--end::Img-->
                                                    <!--begin::Play-->
                                                    <button
                                                        class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0"
                                                        data-kt-element="list-play-button">
                                                        <i class="fonticon-play text-white fs-2x"
                                                            data-kt-element="list-play-icon"></i>
                                                        <i class="fonticon-pause text-white fs-2x d-none"
                                                            data-kt-element="list-pause-icon"></i>
                                                    </button>
                                                    <!--end::Play-->
                                                </div>
                                                <!--end::User pic-->
                                                <!--begin::Info-->
                                                <div class="m-0">
                                                    <!--begin::Title-->
                                                    <a href="{{route('showEpisodes' , $podcast->id)}}"
                                                        class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">{{ $podcast->title }}</a>
                                                    <!--end::Title-->
                                                    <span class="fw-bold fs-6 text-gray-400 d-block lh-1">{{ $podcast->author }}</span>
                                                     
                                                        
                                                    <span class="fw-bold fs-6 text-gray-400 d-block lh-1 py-2">{{ $podcast->episodes_count }} حلقة</span>
                                                    <!--begin::Action=-->
                                                    <td class="text-end m-3">
                                                        <a href="#"
                                                            class="btn btn-light btn-active-light-primary btn-sm"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">خصائص
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                            <span class="svg-icon svg-icon-5 m-0">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                            data-kt-menu="true">
                                                           
															<div class="menu-item px-3">
																<a href="{{ route('podcast.edit', $podcast->id) }}"
																	class="menu-link px-3">تعديل</a>
															</div>	
														
                                            
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3 ">
                                                                <a href="#" class="menu-link px-3 del_rec_btn"
                                                                    data-kt-users-table-filter="delete_row" data-id="{{$podcast->id}}">حذف</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                    </td>
                                                    <!--end::Action=-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Player card-->
                                        </div>
                                        <!--end::Col-->
                                    @endforeach


                                </div>
                                <!--end::Row-->
                                <!--end::Row-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Player widget 1-->
                    </div>
                    <!--end::Col-->

                </div>
                <!--end::Row-->


            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/custom/apps/ecommerce/catalog/save-category.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
          
            $(document).on('click', ".del_rec_btn", function (e) {
                e.preventDefault();
                const id = $(this).data('id');
                let url = "{{ route('podcast.destroy', ":id") }}";
                url = url.replace(':id', id);

                Swal.fire({
                    title: "{{ __('dashboard.warning') }}",
                    text: "{{ __('dashboard.are_you_sure_you_want_to_delete_data') }}",
                    icon: 'warning',
                    confirmButtonText: "{{ __('dashboard.yes_delete') }}",
                    confirmButtonColor: '#d33',
                    cancelButtonText: "{{ __('dashboard.no_cancel') }}",
                    showCancelButton: true,
                }).then((result) => {
                  
                    if (result.value) {
                        $.ajax({
                            type: "DELETE",
                            url: url,
                            success: function (data) {
                                console.log(data);
                                if(data.success == 'false')
                                {
                                    Swal.fire({
                                        title: 'Error!',
                                        text: 'لا يمكن حذف هذا البودكاست لوجود حلقات مرتبطة به',
                                        icon: 'error',
                                        confirmButtonText: 'حسناً',
                                        confirmButtonColor: '#d33',
                                    })
                              
                               
                                }else{
                                    Swal.fire({
                                    title: 'تم الحذف!',
                                    text: 'تم حذف البيانات بنجاح.',
                                    icon: 'success',
                                    confirmButtonText: 'حسناً',
                                    confirmButtonColor: '#5cb85c',
                                }).then((result) => {
                                    if (result.value) {
                                        location.reload();
                                    }
                                });
                                }
                               
                              

                            }
                        });
                    }
                })
            });
        });
    </script>

@endsection
