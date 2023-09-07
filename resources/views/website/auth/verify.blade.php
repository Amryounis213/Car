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
    <title>Alsouq</title>
    <meta lang="ar">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />

    <meta name="description" content="{{ $SETTING->desc }}">
    <meta name="keywords" content="{{ $SETTING->key_words }}">

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
        <!--begin::Authentication - Two-stes -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                <!--begin::Form-->
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    @if (Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <!--begin::Wrapper-->
                    <div class="w-lg-500px p-10">
                        <!--begin::Form-->
                        <form class="form w-100 mb-13" method="POST" action="{{ route('website.verifyphone') }}"
                            id="kt_sing_in_two_steps_form">
                            @csrf

                            <!--begin::Icon-->
                            <div class="text-center mb-10">
                                <img alt="Logo" class="mh-125px" src="assets/media/svg/misc/smartphone-2.svg" />
                            </div>
                            <!--end::Icon-->
                            <!--begin::Heading-->
                            <div class="text-center mb-10">
                                <!--begin::Title-->
                                <h1 class="text-dark mb-3">Verify Code</h1>
                                <!--end::Title-->
                                <!--begin::Sub-title-->
                                <div class="text-muted fw-semibold fs-5 mb-5">Enter the verification code we sent to
                                </div>
                                <!--end::Sub-title-->
                                <!--begin::Mobile no-->
                                <div class="fw-bold text-dark fs-3">{{ Session::get('user_phone') }}</div>
                                <!--end::Mobile no-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Section-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <div class="fw-bold text-start text-dark fs-6 mb-1 ms-1">Type your 4 digit security code
                                </div>
                                <!--end::Label-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-wrap flex-stack">
                                    <input type="text" name="code[]" data-inputmask="'mask': '9', 'placeholder': ''"
                                        maxlength="1"
                                        class="form-control bg-transparent h-60px w-60px fs-2qx text-center  my-2"
                                        value="" />
                                    <input type="text" name="code[]" data-inputmask="'mask': '9', 'placeholder': ''"
                                        maxlength="1"
                                        class="form-control bg-transparent h-60px w-60px fs-2qx text-center  my-2"
                                        value="" />
                                    <input type="text" name="code[]" data-inputmask="'mask': '9', 'placeholder': ''"
                                        maxlength="1"
                                        class="form-control bg-transparent h-60px w-60px fs-2qx text-center  my-2"
                                        value="" />
                                    <input type="text" name="code[]" data-inputmask="'mask': '9', 'placeholder': ''"
                                        maxlength="1"
                                        class="form-control bg-transparent h-60px w-60px fs-2qx text-center  my-2"
                                        value="" />

                                </div>
                                <!--begin::Input group-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Submit-->
                            <div class="d-flex flex-center">
                                <button type="submit" id="kt_sing_in_two_steps_submit"
                                    class="btn btn-lg btn-primary fw-bold">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                            <!--end::Submit-->
                        </form>
                        <!--end::Form-->
                        <!--begin::Notice-->
                        <div class="text-center fw-semibold fs-5">
                            <span class="text-muted me-1">Didn’t get the code ?</span>
                            <a href="#" class="link-primary fs-5 me-1">Resend</a>

                        </div>
                        <!--end::Notice-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Form-->

            </div>
            <!--end::Body-->

        </div>
        <!--end::Authentication - Two-stes-->
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
