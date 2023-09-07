{{-- <html lang="en">
@include('includes._head')

<body>
    <!-- main content -->
    <main class="main main--sign" data-bg="{{ asset('assets/img/bg/bg.png') }}">
        <!-- registration form -->
        <div class="sign">
            <div class="sign__content">
                <form action="{{ route('website.post.register') }}" method="POST" class="sign__form">
                    @csrf
                    <a href="index.html" class="sign__logo">
                        <img src="{{$website->logo}}" alt="">
                    </a>

                    <div class="sign__group">
                        <input type="text" name="username" value="{{ old('username') }}" class="sign__input"
                            placeholder="User name ex:moh_20">
                            @error('username')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>

                    <div class="sign__group">
                        <input type="text" name="phone" value="{{ old('phone') }}" class="sign__input"
                            placeholder="Phone">
                            @error('phone')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>

                    <div class="sign__group">
                        <input type="password" name="password" class="sign__input" placeholder="Password">
                        @error('password')
                            <span class="text-danger">{{$message}}</span>   
                        @enderror
                    </div>
                    <div class="sign__group">
                        <input type="password" name="password_confirmation" class="sign__input"
                            placeholder="Password Confirmation">
                    </div>

                    <div class="sign__group sign__group--checkbox">
                        <input id="privacy" name="privacy" type="checkbox">
                        <label for="privacy">I agree to the <a href="{{route('website.terms')}}">Terms & Conditions</a></label>
                    </div>

                    <button class="sign__btn" type="submit"><span>Sign up</span></button>

                    <span class="sign__delimiter">or</span>



                    <span class="sign__text">Already have an account? <a href="{{ route('website.login') }}">Sign
                            in!</a></span>
                </form>
            </div>
        </div>
        <!-- end registration form -->
    </main>
    <!-- end main content -->
    <!-- scripts -->
    @include('includes._script')

</body>

</html> --}}
<html lang="en" dir="ltr">

<head>
    <base href="../" />
    <title>ميثاق</title>
    <meta lang="ar">
    <meta charset="utf-8" />
    <meta name="description" content="{{ $SETTING->desc }}">
    <meta name="keywords" content="{{ $SETTING->key_words }}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Alsouq | Cars" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    {{-- logo --}}
    <link rel="shortcut icon" href="{{ asset('storage/'.$website->logo) }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />


    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />


    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400&amp;display=swap" rel="stylesheet">

    <style>
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background: none;
            color: black !important;

        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:active {
            background: none;
            color: black !important;
        }
    </style>

    <!--end::Global Stylesheets Bundle-->
</head>
<!--begin::Body-->

<body id="kt_body" class="app-blank app-blank">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-theme-mode");
            } else {
                if (localStorage.getItem("data-theme") !== null) {
                    themeMode = localStorage.getItem("data-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Logo-->
            <a href="../../demo1/dist/index.html" class="d-block d-lg-none mx-auto py-20">
                <img alt="Logo" src="assets/media/logos/default.svg" class="theme-light-show h-25px" />
                <img alt="Logo" src="assets/media/logos/default-dark.svg" class="theme-dark-show h-25px" />
            </a>
            <!--end::Logo-->
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
                <!--begin::Wrapper-->
                <div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
                    <!--begin::Header-->
                    <div class="d-flex flex-stack py-2">
                        <!--begin::Back link-->
                        <div class="me-2"></div>
                        <!--end::Back link-->

                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="py-20">
                        <!--begin::Form-->
                        @include('layouts.sessions-messages')

                        <!--begin::Form-->
                        <form class="form w-100" action="{{ route('website.post.register') }}" method="POST">
                            <!--begin::Body-->
                            @csrf
                            <div class="card-body">
                                <!--begin::Heading-->
                                <div class="text-start mb-10">
                                    <!--begin::Title-->
                                    <h1 class="text-dark mb-3 fs-3x" data-kt-translate="sign-in-title">Join with Us</h1>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <div class="text-gray-400 fw-semibold fs-6" data-kt-translate="general-desc">
                                        Enter your details to register to your account:
                                    </div>
                                    <!--end::Link-->
                                </div>
                                <!--begin::Heading-->
                                <!--begin::Input group=-->
                                <div class="fv-row mb-8">
                                    <!--begin::Email-->
                                    <input type="text" placeholder="First Name" name="firstname" value="{{old('firstname')}}" autocomplete="off"
                                        data-kt-translate="sign-in-input-email"
                                        class="form-control form-control-solid" />
                                    <!--end::Email-->
                                    @error('firstname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!--end::Input group=-->
                                <!--begin::Input group=-->
                                <div class="fv-row mb-8">
                                    <!--begin::Email-->
                                    <input type="text" placeholder="Last Name" name="lastname" value="{{old('lastname')}}" autocomplete="off"
                                        data-kt-translate="sign-in-input-email"
                                        class="form-control form-control-solid" />
                                    <!--end::Email-->
                                    @error('lastname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!--end::Input group=-->
                                <!--begin::Input group=-->
                                <div class="fv-row mb-8">
                                    <!--begin::Email-->
                                    <input type="text" placeholder="Username" name="username" value="{{old('username')}}" autocomplete="off"
                                        data-kt-translate="sign-in-input-email"
                                        class="form-control form-control-solid" />
                                    <!--end::Email-->
                                    @error('username')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!--end::Input group=-->
                                <div class="fv-row mb-8">
                                    <!--begin::Email-->
                                    <input type="text" placeholder="Phone" name="phone" value="{{old('phone')}}" autocomplete="off"
                                        data-kt-translate="sign-in-input-email"
                                        class="form-control form-control-solid" />
                                    <!--end::Email-->
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="fv-row mb-7">
                                    <!--begin::Password-->
                                    <input type="password" placeholder="Password" name="password" autocomplete="off"
                                        data-kt-translate="sign-in-input-password"
                                        class="form-control form-control-solid" />

                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <!--end::Password-->
                                </div>
                                <!--end::Input group=-->


                                <div class="fv-row mb-7">
                                    <!--begin::Password-->
                                    <input type="password" placeholder="Confirm password" name="password_confirmation"
                                        autocomplete="off" data-kt-translate="sign-in-input-password"
                                        class="form-control form-control-solid" />

                                    
                                    <!--end::Password-->
                                </div>
                                <!--end::Input group=-->


                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-10">
                                    <div></div>
                                    <!--begin::Link-->
                                    <a href="{{route('website.login')}}" class="link-primary"
                                        data-kt-translate="sign-in-forgot-password">already have account  ? </a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Submit-->
                                    <button id="kt_sign_in_submit" class="btn btn-primary me-2 flex-shrink-0">
                                        <!--begin::Indicator label-->
                                        <span class="indicator-label" data-kt-translate="sign-in-submit">Create Account</span>
                                        <!--end::Indicator label-->
                                        <!--begin::Indicator progress-->
                                        <span class="indicator-progress">
                                            <span data-kt-translate="general-progress">Please wait...</span>
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                        <!--end::Indicator progress-->
                                    </button>
                                    <!--end::Submit-->

                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--begin::Body-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Body-->

                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Aside-->
            <!--begin::Body-->
            <div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat"
                style="background-image: url({{ asset('assets/car.jpg') }}); background-position: center; object-fit:cover">
            </div>
            <!--begin::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="assets/js/custom/authentication/sign-in/general.js"></script>
    <script src="assets/js/custom/authentication/sign-in/i18n.js"></script>
    <!--end::Custom Javascript-->
</body>
<!--end::Body-->

</html>
