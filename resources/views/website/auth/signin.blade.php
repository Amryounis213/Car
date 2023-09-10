{{-- <!DOCTYPE html>
<html lang="en">
	@include('includes._head')
<body>
	<!-- main content -->
	<main class="main main--sign" data-bg="{{asset('assets/img/bg/bg.png')}}">
		<!-- sign in -->
		<div class="sign">
			<div class="sign__content">
				<!-- authorization form -->
				<form  action="{{route('website.post.login')}}" class="sign__form" method="POST">
					@csrf
					<a href="index.html" class="sign__logo">
						<img src="img/logo.svg" alt="">
					</a>

					<div class="sign__group">
						<input type="text" name="phone" value="{{old('phone')}}" class="sign__input" placeholder="Mobile">
					</div>

					<div class="sign__group">
						<input type="password" name="password" class="sign__input" placeholder="Password">
					</div>

					<div class="sign__group sign__group--checkbox">
						<input id="remember" name="remember" type="checkbox">
						<label for="remember">Remember Me</label>
					</div>
					
					<button class="sign__btn" type="submit"><span>Sign in</span></button>

					<span class="sign__delimiter">or</span>


					<span class="sign__text">Don't have an account? <a href="{{ route('website.register') }}">Sign up!</a></span>

					<span class="sign__text"><a href="forgot.html">Forgot password?</a></span>
				</form>
				<!-- end authorization form -->
			</div>
		</div>
		<!-- end sign in -->
	</main>
	<!-- end main content -->

	@include('includes._script')
</body>
</html> --}}


<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic | Bootstrap HTML, VueJS, React, Angular, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
@php
    $lang = app()->getLocale();
    
@endphp
<html lang="{{ $lang }}" @if($lang == 'ar') dir="rtl" @else dir="ltr" @endif>

<head>

    <base href="../" />
    <title>Alsouq</title>
    <meta lang="{{ $lang }}">
    <meta charset="utf-8" />
    <meta name="description" content="{{ $SETTING->desc }}">
    <meta name="keywords" content="{{ $SETTING->key_words }}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic | Bootstrap HTML, VueJS, React, Angular, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Alsouq | Cars" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    {{-- logo --}}
    <link rel="shortcut icon" href="{{ asset('storage/' . $website->logo) }}" />
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
            <a href="{{ route('website.home') }}" class="d-block d-lg-none mx-auto py-20">
                <img alt="Logo" src="{{ asset('storage/' . $website->logo) }}" class="theme-light-show h-100px" />
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
                        <form class="form w-100" action="{{ route('website.post.login') }}" method="POST">
                            <!--begin::Body-->
                            @csrf
                            <div class="card-body">
                                <!--begin::Heading-->
                                <div class="mb-10">
                                    <!--begin::Title-->
                                    <h1 class="text-dark mb-3 fs-3x" data-kt-translate="sign-in-title">
                                        {{ __('dashboard.login') }}</h1>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <div class="text-gray-400 fw-semibold fs-6" data-kt-translate="general-desc">
                                        {{ __('dashboard.enter_your_details_to_login') }}
                                    </div>
                                    <!--end::Link-->
                                </div>
                                <!--begin::Heading-->
                                <!--begin::Input group=-->
                                <div class="fv-row mb-8">
                                    <!--begin::Email-->
                                    <input type="text" placeholder="{{ __('dashboard.phone') }}" name="phone"
                                        autocomplete="off" data-kt-translate="sign-in-input-email"
                                        class="form-control form-control-solid" />
                                    <!--end::Email-->
                                </div>
                                <!--end::Input group=-->
                                <div class="fv-row mb-7">
                                    <!--begin::Password-->
                                    <input type="password" placeholder="{{ __('dashboard.password') }}" name="password"
                                        autocomplete="off" data-kt-translate="sign-in-input-password"
                                        class="form-control form-control-solid" />
                                    <!--end::Password-->
                                </div>
                                <!--end::Input group=-->
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-10">
                                    <div>
                                        <!--begin::Link-->
                                        <a href="" class="link-secondary text-gray-400 fw-semibold fs-6"
                                            data-kt-translate="sign-in-forgot-password">{{ __('dashboard.forgot_password') }}
                                        </a>
                                        <!--end::Link-->

                                        <!--begin::Link-->
                                        <a href="{{ route('website.register') }}" class="link-primary"
                                            data-kt-translate="sign-in-forgot-password">{{ __('dashboard.signup') }}</a>
                                        <!--end::Link-->
                                    </div>
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Submit-->
                                    <button id="kt_sign_in_submit" class="btn btn-primary me-2 flex-shrink-0">
                                        <!--begin::Indicator label-->
                                        <span class="indicator-label"
                                            data-kt-translate="sign-in-submit">{{ __('dashboard.login') }}</span>
                                        <!--end::Indicator label-->
                                        <!--begin::Indicator progress-->
                                        <span class="indicator-progress">
                                            <span
                                                data-kt-translate="general-progress">{{ __('dashboard.please_wait') }}</span>
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
