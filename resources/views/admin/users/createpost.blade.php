@extends('layouts.main')

@section('styles')
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
    <style>
        .custom-file-input {
            width: calc(100% - 0.5em);
        }
    </style>
@endsection

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
                            Add Ad</h1>
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
                            <li class="breadcrumb-item text-muted">Users</li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Add Ad</li>
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
                    <form id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row"
                        action="{{ route('users.storePost') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @include('admin.users._createpostform')
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
    {{--  --}}


    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js">
    </script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.js"></script>

    <script>
        FilePond.registerPlugin(
            FilePondPluginFileValidateSize,
            FilePondPluginFileValidateType,
            FilePondPluginImageExifOrientation,
            FilePondPluginImagePreview,
            FilePondPluginImageCrop,
            FilePondPluginImageResize,
            FilePondPluginImageTransform,
            // FilePondPluginImageEdit

        );

        // Get a reference to the file input element
        const inputElement = document.querySelector('#images');
        // Create a FilePond instance
        const pond = FilePond.create(inputElement, {

            allowFileSizeValidation: true,
            labelFileWaitingForSizeValidation: 'انتظر حتى يتم التحقق من حجم الملف',
            labelFileSizeNotAvailable: 'حجم الملف غير متوفر',
            labelFileLoading: 'جاري التحميل',
            labelFileLoadError: 'حدث Error أثناء التحميل',
            labelFileProcessing: 'جاري التحميل',
            labelFileProcessingComplete: 'تم التحميل',
            labelFileProcessingAborted: 'تم إلغاء التحميل',
            labelMaxFileSizeExceeded: 'حجم الملف كبير جدا',
            maxFileSize: '100MB',
            minFileSize: '1b',
            labelMinFileSizeNotMet: 'حجم الملف صغير جدا',
            // acceptedFileTypes : ['audio/*'], 
            labelFileTypeNotAllowed: 'نوع الملف يجب ان يكون mp3 او wav',
        });


        FilePond.setOptions({
            server: {
                process: '/upload',
                revert: "{{-- route('revertFile') --}}",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }
        });
    </script>


    <script>
        const currentYear = new Date().getFullYear();
        document.getElementById('year-input').setAttribute('max', currentYear);
    </script>

    <script>
        const fileInput = document.querySelector('.custom-file-input');
        const imagePreviewContainer = document.querySelector('.image-preview-container');

        fileInput.addEventListener('change', handleFileUpload);

        function handleFileUpload(event) {
            imagePreviewContainer.innerHTML = ''; // Clear existing previews

            const files = event.target.files;
            for (let i = 0; i < Math.min(files.length, 6); i++) {
                const imagePreview = document.createElement('div');
                imagePreview.className = 'image-preview';
                const image = document.createElement('img');
                image.src = URL.createObjectURL(files[i]);
                imagePreview.appendChild(image);
                imagePreviewContainer.appendChild(imagePreview);
            }
        }
    </script>
@endsection
