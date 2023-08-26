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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">الطلبات
                    </h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">الرئيسية</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">مشاهدة الطلب</li>
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

                <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>الطلب رقم {{ $order->order_num }}</h2>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <!--end::Card header-->
                        <div class="d-flex flex-root">
                            <div class="d-flex flex-column flex-row-auto w-200px">
                                <div class="d-flex flex-column-fluid">
                                    <!--begin::Image input-->
                                    <div class="image-input image-input-circle" data-kt-image-input="true">
                                        <!--begin::Image preview wrapper-->
                                        <div class="image-input-wrapper w-125px h-125px"
                                            style="background-image: url({{ $order->User->image_path }})">
                                        </div>
                                        <!--end::Image preview wrapper-->
                                    </div>
                                    <!--end::Image input-->
                                </div>
                            </div>

                            <div class="d-flex flex-column flex-row-fluid mt-3">
                                <h5>تفاصيل المستخدم</h5>
                                <div class="d-flex flex-row flex-column-fluid">
                                    <div class="d-flex flex-row-fluid ">
                                        <div class="mt-3">
                                            <!--begin::Details-->
                                            <table class="table fs-6 fw-bold gs-0 gy-2 gx-2">
                                                <tbody>
                                                    <tr class="">
                                                        <td class="text-gray-400">الاسم</td>
                                                        <td class="text-gray-800">{{ $order->user->name }}</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class="text-gray-400">الايميل</td>
                                                        <td class="text-gray-800">{{ $order->user->email }}</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class="text-gray-400">رقم الجوال</td>
                                                        <td class="text-gray-800">{{ $order->user->phone }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            @if ($order->Driver)
                                <div class="d-flex flex-column flex-row-auto w-200px">
                                    <div class="d-flex flex-column-fluid">
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-circle" data-kt-image-input="true">
                                            <!--begin::Image preview wrapper-->
                                            <div class="image-input-wrapper w-125px h-125px"
                                                style="background-image: url({{ $order->Driver->image_path }})">
                                            </div>
                                            <!--end::Image preview wrapper-->
                                        </div>
                                        <!--end::Image input-->
                                    </div>
                                </div>

                                <div class="d-flex flex-column flex-row-fluid mt-3">
                                    <h5>تفاصيل السائق</h5>
                                    <div class="d-flex flex-row flex-column-fluid">
                                        <div class="d-flex flex-row-fluid ">
                                            <div class="mt-3">
                                                <!--begin::Details-->
                                                <table class="table fs-6 fw-bold gs-0 gy-2 gx-2">
                                                    <tbody>
                                                        <tr class="">
                                                            <td class="text-gray-400">الاسم</td>
                                                            <td class="text-gray-800">{{ $order->Driver->name }}</td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="text-gray-400">الايميل</td>
                                                            <td class="text-gray-800">
                                                                {{ $order->Driver->email ?? 'غير مسجل' }}</td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="text-gray-400">رقم الجوال</td>
                                                            <td class="text-gray-800">{{ $order->Driver->phone }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <div class="separator separator-dashed mt-5 mb-4"></div>


                        <div class="m-0">
                            <!--begin::Timeline-->
                            <div class="timeline ms-n1">
                                <!--begin::Timeline item-->
                                <div class="timeline-item align-items-center mb-4">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-success">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor"></path>
                                                <path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content m-0">
                                        <!--begin::Label-->
                                        <span class="fs-8 fw-bolder text-success text-uppercase">Start Address</span>
                                        <!--begin::Label-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">{{$order->start_address}}</a>
                                        <!--end::Title-->
                                        <!--begin::Title-->
                                        <span class="fw-semibold text-gray-400"></span>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                @if ($order->end_address)
                                <div class="timeline-item align-items-center">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-20px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-info">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor"></path>
                                                <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content m-0">
                                        <!--begin::Label-->
                                        <span class="fs-8 fw-bolder text-info text-uppercase">End Address</span>
                                        <!--begin::Label-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">{{$order->end_address}}</a>
                                        <!--end::Title-->
                                        <!--begin::Title-->
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                @endif
                               
                            </div>
                            <!--end::Timeline-->
                        </div>

                        <div class="separator separator-dashed mt-5 mb-4"></div>

                        <h5>العرض المرسل</h5>
                        <div class="d-flex flex-row flex-column-fluid">
                            <div class="d-flex flex-row-fluid ">
                                <div class="mt-3">
                                    <!--begin::Details-->
                                    <table class="table fs-6 fw-bold gs-0 gy-2 gx-2">
                                        <tbody>
                                            <tr class="">
                                                <td class="text-gray-400">السعر المقدم من طرف الزبون</td>
                                                <td class="text-gray-800">{{ $order->initil_price }}</td>
                                            </tr>


                                            <tr class="">
                                                <td class="text-gray-400">الحالة</td>

                                                <td class="text-gray-800">

                                                    <span
                                                        class="badge badge-light-primary">{{ __('dashboard.' . $order->status) }}</span>
                                                </td>
                                            </tr>


                                            <tr class="">
                                                <td class="text-gray-400">حالة الدفع</td>
                                                <td class="text-gray-800">
                                                    <span class="badge badge-light-primary">{{ $order->is_paid == 0 ? __('dashboard.unpid') : __('dashboard.paid') }}</span>
                                                </td>
                                            </tr>

                                            @if ($order->rate)
                                                <tr class="">
                                                    <td class="text-gray-400">التقييم</td>
                                                    <td class="text-gray-800">
                                                        {{ $order->rate }}
                                                        <div class="rating">

                                                            <div class="rating-label checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                           
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {{-- 'category_id' => 'required|exists:categories,id',
                        'start_lng' => 'required',
                        'start_lat' => 'required',
                        'initil_price'=> 'required',
            
                        'end_lng' => [Rule::requiredIf(in_array($request->get('category_id'), config('categories_has_secondlng')))],
                        'end_lat' => [Rule::requiredIf(in_array($request->get('category_id'), config('categories_has_secondlng')))],
            
                        // توصيل طلبات
                        'order_type_id' => [Rule::requiredIf($request->get('category_id') == 1)],
            
                        // مراجع 
                        'revision_type_id' => [Rule::requiredIf($request->get('category_id') == 2)],
            
                        // متسوق شخصي 
                        'shopping_type_id' => [Rule::requiredIf($request->get('category_id') == 3)],
            
                        //  جولة
                        'tour_type_id' => [Rule::requiredIf($request->get('category_id') == 4)],
                        'tour_type' => [Rule::requiredIf($request->get('category_id') == 4), Rule::in('training', 'entertainment')],
            
                        //مشوار
                        'car_type_id' => [Rule::requiredIf($request->get('category_id') == 5)],
                        'driver_gender' => [Rule::requiredIf($request->get('category_id') == 5)],
                        'nav_range_id' => [Rule::requiredIf($request->get('category_id') == 5)],
                        'mishwar_type_id' => [Rule::requiredIf($request->get('category_id') == 5)],
                        'pick_type' => [Rule::requiredIf($request->get('category_id') == 5)],
                        'seats_number' => [Rule::requiredIf($request->get('category_id') == 5)], --}}

                        <div class="d-flex flex-root">
                            <div class="d-flex flex-column flex-row-fluid">
                                <div class="d-flex flex-row flex-column-fluid">
                                    <div class="d-flex flex-row-fluid ">
                                        <div class="mt-5" style="width: 100%">
                                            <!--begin::Details-->
                                            <h5>تفاصيل اضافية</h5>
                                            <table class="table fs-6 fw-bold gs-0 gy-2 gx-2">
                                                <tbody>


                                                    @if ($order->category_id == 1)
                                                        <tr class="text-start">
                                                            <td class="text-gray-400">نوع الطلب</td>
                                                            <td class="text-gray-800">
                                                                <span
                                                                    class="badge py-3 px-4 fs-7 badge-light-primary">{{ $order->OrderTypes ? $order->OrderTypes->name : '' }}</span>
                                                            </td>

                                                        </tr>
                                                    @endif

                                                    @if ($order->category_id == 2)
                                                        <tr class="">
                                                            <td class="text-gray-400">نوع المراجعة</td>
                                                            <td class="text-gray-800">
                                                                <span class="badge py-3 px-4 fs-7 badge-light-primary">
                                                                    {{ $order->revisionType ? $order->revisionType->name : '' }}
                                                                </span>

                                                            </td>
                                                        </tr>
                                                    @endif

                                                    @if ($order->category_id == 3)
                                                        <tr class="">
                                                            <td class="text-gray-400">نوع المتسوق</td>
                                                            <td class="text-gray-800">

                                                                <span
                                                                    class="badge py-3 px-4 fs-7 badge-light-primary">{{ $order->shoppingType ? $order->shoppingType->name : '' }}
                                                                </span>

                                                            </td>
                                                        </tr>
                                                    @endif

                                                    @if ($order->category_id == 4)
                                                        <tr class="">
                                                            <td class="text-gray-400">نوع الجولة</td>
                                                            <td class="text-gray-800">
                                                                <span class="badge py-3 px-4 fs-7 badge-light-primary">
                                                                    {{ $order->tourType ? $order->tourType->name : '' }}
                                                                </span>
                                                            </td>

                                                            <td class="text-gray-400">نوع الجولة</td>

                                                            <td class="text-gray-800">{{ $order->tour_type }}</td>
                                                        </tr>
                                                    @endif

                                                    @if ($order->category_id == 5)
                                                        <tr class="">
                                                            <td class="text-gray-400">نوع المشوار</td>
                                                            <td class="text-gray-800">
                                                                <span class="badge py-3 px-4 fs-7 badge-light-primary">
                                                                    {{ $order->mishwarType ? $order->mishwarType->name : '' }}
                                                                </span>
                                                            </td>

                                                            <td class="text-gray-400">نوع السيارة</td>
                                                            <td class="text-gray-800">
                                                                <span class="badge py-3 px-4 fs-7 badge-light-primary">
                                                                    {{ $order->carType ? $order->carType->name : '' }}
                                                                </span>
                                                            </td>

                                                        </tr>
                                                        <tr class="">
                                                            <td class="text-gray-400">نطاق التنقل</td>
                                                            <td class="text-gray-800">
                                                                <span class="badge py-3 px-4 fs-7 badge-light-primary">
                                                                    {{ $order->navRange ? $order->navRange->name : '' }}
                                                                </span>
                                                            </td>

                                                            <td class="text-gray-400">نوع </td>
                                                            <td class="text-gray-800">{{ $order->pick_type }}</td>
                                                        </tr>
                                                        <td class="text-gray-400">عدد المقاعد</td>
                                                        <td class="text-gray-800">{{ $order->seats_number }}</td>
                                                    @endif





                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="card-body">
                            <!--begin::Scroll-->
                            <div class="hover-scroll-overlay-y  pe-6 me-n6" style="height: 415px">

                                <h5>العروض المقدمة</h5>
                                <div class="row g-5 g-xl-8">
                                    @foreach ($order->Offers as $offer)
                                        <!--begin::Item-->
                                        <div class="col-md-6 @if ($offer->driver_id == $order->driver_id) bg-light-success @endif">
                                            <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                                <!--begin::Info-->
                                                <div class="d-flex flex-stack mb-3">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-3">
                                                        <!--begin::Icon-->
                                                        <img src="{{ $offer->Driver->image_path }}"
                                                            class="w-90px rounded ms-n1 me-1" alt="">
                                                        <!--end::Icon-->
                                                        <!--begin::Title-->
                                                        <a href="{{ route('drivers.show', $offer->Driver->id) }}"
                                                            class="text-gray-800 text-hover-primary fw-bold">{{ $offer->Driver->name }}</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Wrapper-->

                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Customer-->
                                                <div class="d-flex flex-stack justify-content-start">
                                                    <!--begin::Name-->

                                                    <span class="text-gray-400 fw-bold m-4">Tax :
                                                        <a href="javascript::void(0)"
                                                            class="text-gray-800 text-hover-primary fw-bold">{{ $offer->tax }}$</a></span>

                                                    <span class="text-gray-400 fw-bold m-4">Price :
                                                        <a href="javascript::void(0)"
                                                            class="text-gray-800 text-hover-primary fw-bold">{{ $offer->price }}$</a></span>

                                                    <span class="text-gray-400 fw-bold m-4">Created at :
                                                        <a href="javascript::void(0)"
                                                            class="text-gray-800 text-hover-primary fw-bold">{{ $offer->created_at->diffforhumans() }}</a></span>


                                                </div>
                                                <!--end::Customer-->
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!--end::Scroll-->
                        </div>

                    </div>
                    <!--end::Card body-->
                </div>
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    {{-- <script src="{{asset('assets/js/custom/apps/user-management/users/list/table.js')}}"></script> --}}
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
@endsection
