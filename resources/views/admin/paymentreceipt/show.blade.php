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
                            {{ __('dashboard.paymentreceipts_requests') }}</h1>
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
                            <li class="breadcrumb-item text-muted">{{ __('dashboard.paymentreceipts') }}</li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">{{ __('dashboard.paymentreceipts_requests') }}</li>
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
                    {{-- show paymentreceipt --}}
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
                                                style="background-image: url({{ asset('storage/' . $paymentreceipt->User->image) }});">
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
                                                            <td class="text-gray-400">{{ __('dashboard.sender_name') }}</td>
                                                            <td class="text-gray-800">{{ $paymentreceipt->name }}</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-row-fluid mt-3">
                                    <h5>{{ __('dashboard.reciver_bank') }}</h5>
                                    <div class="d-flex flex-row flex-column-fluid">
                                        <div class="d-flex flex-row-fluid ">
                                            <div class="mt-3">
                                                <!--begin::Details-->
                                                <table class="table fs-6 fw-bold gs-0 gy-2 gx-2">
                                                    <tbody>
                                                        <tr class="">
                                                            <td class="text-gray-400">{{ __('dashboard.bank_name') }}
                                                            </td>
                                                            <td class="text-gray-800">
                                                                {{ $paymentreceipt->Bank->bankAccount->name }}
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="text-gray-400">{{ __('dashboard.account_number') }}
                                                            </td>
                                                            <td class="text-gray-800">
                                                                {{ $paymentreceipt->Bank->bankAccount->account_number }}
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="text-gray-400">{{ __('dashboard.iban') }}
                                                            </td>
                                                            <td class="text-gray-800">
                                                                {{ $paymentreceipt->Bank->bankAccount->iban }}
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="imageModal" tabindex="-1" role="dialog"
                                    aria-labelledby="imageModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="imageModalLabel">
                                                    {{ __('dashboard.receipt_image') }}</h5>
                                            </div>
                                            <div class="modal-body">
                                                <div class="spinner-border text-primary" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                                <img id="modalImage" src="" alt="" class="img-fluid d-none">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary"
                                                    onclick="printImage()">{{ __('dashboard.print') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-row-fluid mt-3">
                                    <h5 class="modal-title" id="imageModalLabel">
                                        {{ __('dashboard.receipt_image') }}</h5>
                                    <div class="d-flex flex-row flex-column-fluid">
                                        <div class="d-flex flex-row-fluid ">
                                            <div class="mt-3">
                                                <div class="image-input-wrapper w-200px h-200px"
                                                    style="background-image: url({{ $paymentreceipt->image_path }}); background-size: cover; background-position: center;"
                                                    onclick="showImageModal('{{ $paymentreceipt->image_path }}')"
                                                    title="This is the receipt image.">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                         
                        </div>
                        <!--end::General options-->
                        <div class="d-flex justify-content-center">
                            <!--end::Button-->
                            @include('admin.paymentreceipt.parts._status')
                        </div>
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
    {{-- {{ $dataTable->scripts() }} --}}
    <script>
        $('input[name=account_podcast]').on('click', function() {
            if ($(this).val() == 'limited') {
                $('#limit').show();
            } else {
                $('#limit').hide();
            }
        });
    </script>
    <script src="{{ asset('assets/js/custom/apps/ecommerce/catalog/save-product.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>

    <script>
        function showImageModal(imageSrc) {
            var modalImage = $('#modalImage');
            var spinner = modalImage.siblings('.spinner-border');
            modalImage.on('load', function() {
                spinner.hide();
                modalImage.removeClass('d-none');
            });
            modalImage.attr('src', imageSrc);
            $('#imageModal').modal('show');
            // windows.print();
        }

        // Define a function to print an image
        function printImage() {
            // Get the image source and title from the modal dialog
            var modalImage = $('#modalImage');
            var imgSrc = modalImage.attr('src');
            var imgTitle = modalImage.attr('alt');

            // Open a new window for printing
            var imgWindow = window.open('', 'PRINT', 'height=600,width=800');

            // Write HTML to the new window, including the image and its title
            imgWindow.document.write('<html><head><title>' + imgTitle + '</title>');
            imgWindow.document.write('</head><body><img src="' + imgSrc + '" /></body></html>');

            // Close the HTML document and focus on the new window
            imgWindow.document.close(); // necessary for IE >= 10
            imgWindow.focus(); // necessary for IE >= 10

            // Print the new window and close it
            imgWindow.print();
            imgWindow.close();
        }
    </script>

    
    {{-- update status status --}}
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '.accept-fld', function(e) {
            const status = $(this).data('status');
            const id = "{{ $id }}";
            const statusCheckbox = $(`#status_${id}`);
            
            Swal.fire({
                title: 'enter amount',
                input: 'text',
                inputAttributes: {
                    autocapitalize: 'off'
                },
                showCancelButton: true,
                confirmButtonText: 'Confirm',
                showLoaderOnConfirm: true,
                preConfirm: (amount) => {

                    $.ajax({
                        type: "POST",
                        url: "{{ route('paymentreceipts.status') }}",
                        data: {
                            'id': id,
                            'status': status,
                            'amount': amount
                        },
                        success: function(data) {



                        }
                    });

                },
                allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
                if (result.isConfirmed) {
                    toastr.options.positionClass = 'toast-top-left';
                    toastr['success']('{{ __('dashboard.the_amount_converted_succ') }}');
                    // if (data.status === 'success') {
                        setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    // }
                }
            })


        });
    </script>
@endsection
