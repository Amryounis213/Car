<!DOCTYPE html>
@php
    $lang = app()->getLocale();
    
@endphp
<html lang="en">
@include('includes._head')

<body>
    <!-- header -->
    <header class="header" style="background-color: white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header__content">
                        <div class="header__logo">
                            <a href="{{ route('website.home') }}">
                                <img style="height: 50px" src="{{ asset('storage/' . $website->logo) }}" alt="">
                            </a>
                        </div>

                        <div class="header__menu">
                            <ul class="header__nav">
                                <li class="header__nav-item">
                                    <a class="header__nav-link"
                                        href="{{ route('website.home') }}">{{ __('dashboard.home') }}</a>
                                </li>
                                <li class="header__nav-item">
                                    <a class="header__nav-link"
                                        href="{{ route('search') }}">{{ __('dashboard.buy') }}</a>
                                </li>
                                <li class="header__nav-item">
                                    <a class="header__nav-link"
                                        href="{{ route('post.create') }}">{{ __('dashboard.sell') }}</a>
                                </li>
                                {{-- <li class="header__nav-item">
                                    <a class="header__nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">{{ __('dashboard.models') }}<svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z" />
                                        </svg></a>

                                    <ul class="dropdown-menu header__nav-menu">
                                        @foreach (\App\Models\Brand::get() as $models)
                                            <li><a href="{{ route('cars', $models->id) }}">{{ $models->name }}</a></li>
                                        @endforeach

                                    </ul>
                                </li> --}}
                                <li class="header__nav-item">
                                    <a href="{{ route('contactus') }}"
                                        class="header__nav-link">{{ __('dashboard.contact_us') }}</a>
                                </li>
                                <li class="header__nav-item">
                                    <a class="header__nav-link"
                                        href="{{ route('aboutus') }}">{{ __('dashboard.about_us') }}</a>
                                </li>

                            </ul>
                        </div>

                        <div class="header__actions">
                            <div class="header__phone">
                                <a href="tel:88002345678">{{ $SETTING->whatsapp ?? '' }}</a>
                                <span>Mom - Sat: 9:00 am - 6:00 pm</span>
                            </div>

                            <div class="header__action">
                                <a class="header__action-btn" href="{{ route('post.create') }}">
                                    <span>{{ __('dashboard.post_your_product') }}</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M6.62,13.08a.9.9,0,0,0-.54.54,1,1,0,0,0,1.3,1.3,1.15,1.15,0,0,0,.33-.21,1.15,1.15,0,0,0,.21-.33A.84.84,0,0,0,8,14a1.05,1.05,0,0,0-.29-.71A1,1,0,0,0,6.62,13.08Zm13.14-4L18.4,5.05a3,3,0,0,0-2.84-2H8.44A3,3,0,0,0,5.6,5.05L4.24,9.11A3,3,0,0,0,2,12v4a3,3,0,0,0,2,2.82V20a1,1,0,0,0,2,0V19H18v1a1,1,0,0,0,2,0V18.82A3,3,0,0,0,22,16V12A3,3,0,0,0,19.76,9.11ZM7.49,5.68A1,1,0,0,1,8.44,5h7.12a1,1,0,0,1,1,.68L17.61,9H6.39ZM20,16a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H19a1,1,0,0,1,1,1Zm-3.38-2.92a.9.9,0,0,0-.54.54,1,1,0,0,0,1.3,1.3.9.9,0,0,0,.54-.54A.84.84,0,0,0,18,14a1.05,1.05,0,0,0-.29-.71A1,1,0,0,0,16.62,13.08ZM13,13H11a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Z" />
                                    </svg>
                                </a>
                            </div>
                            @if (auth()->check())
                                <div class="header__action">
                                    <a class="header__profile-btn" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M15.71,12.71a6,6,0,1,0-7.42,0,10,10,0,0,0-6.22,8.18,1,1,0,0,0,2,.22,8,8,0,0,1,15.9,0,1,1,0,0,0,1,.89h.11a1,1,0,0,0,.88-1.1A10,10,0,0,0,15.71,12.71ZM12,12a4,4,0,1,1,4-4A4,4,0,0,1,12,12Z" />
                                        </svg>
                                    </a>

                                    <ul class="dropdown-menu header__profile-menu">
                                        <li>
                                            <a href="{{ route('account.index') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path
                                                        d="M15.71,12.71a6,6,0,1,0-7.42,0,10,10,0,0,0-6.22,8.18,1,1,0,0,0,2,.22,8,8,0,0,1,15.9,0,1,1,0,0,0,1,.89h.11a1,1,0,0,0,.88-1.1A10,10,0,0,0,15.71,12.71ZM12,12a4,4,0,1,1,4-4A4,4,0,0,1,12,12Z" />
                                                </svg>
                                                <span>{{ __('dashboard.my_account') }}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a onclick="document.getElementById('logout-form').submit()">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path
                                                        d="M4,12a1,1,0,0,0,1,1h7.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76,1,1,0,0,0-.21-.33l-4-4a1,1,0,1,0-1.42,1.42L12.59,11H5A1,1,0,0,0,4,12ZM17,2H7A3,3,0,0,0,4,5V8A1,1,0,0,0,6,8V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V16a1,1,0,0,0-2,0v3a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V5A3,3,0,0,0,17,2Z" />
                                                </svg>
                                                <span>{{ __('dashboard.sign_out') }}</span>
                                            </a>
                                        </li>
                                        <form id="logout-form" action="{{ route('website.logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </ul>
                                </div>
                            @else
                                <div class="header__action">
                                    <a class="header__profile-btn" href="{{ route('website.login') }}" role="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24" id="login">
                                            <path fill="url(#paint0_linear_1233_4795)" fill-rule="evenodd"
                                                d="M8 4C8 3.44772 8.44772 3 9 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H9C8.44772 21 8 20.5523 8 20V17C8 16.4477 8.44772 16 9 16C9.55228 16 10 16.4477 10 17V19H20V5H10V7C10 7.55228 9.55228 8 9 8C8.44772 8 8 7.55228 8 7V4ZM10.7929 7.79289C11.1834 7.40237 11.8166 7.40237 12.2071 7.79289L15.7071 11.2929C16.0976 11.6834 16.0976 12.3166 15.7071 12.7071L12.2071 16.2071C11.8166 16.5976 11.1834 16.5976 10.7929 16.2071C10.4024 15.8166 10.4024 15.1834 10.7929 14.7929L12.5858 13H3C2.44772 13 2 12.5523 2 12C2 11.4477 2.44772 11 3 11H12.5858L10.7929 9.20711C10.4024 8.81658 10.4024 8.18342 10.7929 7.79289Z"
                                                clip-rule="evenodd"></path>
                                            <defs>
                                                <linearGradient id="paint0_linear_1233_4795" x1="12"
                                                    x2="12" y1="3" y2="21"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#57EAEA"></stop>
                                                    <stop offset="1" stop-color="#2BC9FF"></stop>
                                                </linearGradient>
                                            </defs>
                                        </svg>

                                    </a>
                                </div>
                            @endif

                        </div>

                        <button class="header__btn" type="button">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->

    @yield('content')

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-8 col-md-6 col-lg-6 col-xl-6 order-4 order-md-1 order-lg-4 order-xl-1">
                    <div class="footer__logo">
                        <img src="{{ asset('storage/' . $website->logo) }}" alt="">
                    </div>

                    <p class="footer__tagline">{{ $SETTING->desc }}</p>

                    <div class="footer__lang">
                        @if ($lang == 'en')
                            <a class="footer__lang-btn" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="{{ asset('assets/img/flags/uk.svg') }}" alt="">
                                <span>English</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z" />
                                </svg>
                            </a>
                        @elseif ($lang == 'fr')
                            <a class="footer__lang-btn" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="{{ asset('assets/img/flags/france.svg') }}" alt="">
                                <span>French</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z" />
                                </svg>
                            </a>
                        @elseif ($lang == 'ar')
                            <a class="footer__lang-btn" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="{{ asset('assets/img/flags/Flag_of_Algeria.svg.png') }}" alt="">
                                <span>Arabic</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z" />
                                </svg>
                            </a>
                        @endif



                        @if ($lang == 'en')
                            <ul class="dropdown-menu footer__lang-dropdown">
                                <li>
                                    <a href="{{ LaravelLocalization::getLocalizedURL('fr', null, [], true) }}"><img
                                            src="{{ asset('assets/img/flags/france.svg') }}"
                                            alt=""><span>French</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}"><img
                                            src="{{ asset('assets/img/flags/Flag_of_Algeria.svg.png') }}"
                                            alt=""><span>Arabic</span>
                                    </a>
                                </li>
                            </ul>
                        @elseif ($lang == 'fr')
                            <ul class="dropdown-menu footer__lang-dropdown">
                                <li>
                                    <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}"><img
                                            src="{{ asset('assets/img/flags/uk.svg') }}"
                                            alt=""><span>English</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}"><img
                                            src="{{ asset('assets/img/flags/Flag_of_Algeria.svg.png') }}"
                                            alt=""><span>Arabic</span>
                                    </a>
                                </li>
                            </ul>
                        @elseif ($lang == 'ar')
                            <ul class="dropdown-menu footer__lang-dropdown">
                                <li>
                                    <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}"><img
                                            src="{{ asset('assets/img/flags/uk.svg') }}"
                                            alt=""><span>English</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ LaravelLocalization::getLocalizedURL('fr', null, [], true) }}"><img
                                            src="{{ asset('assets/img/flags/france.svg') }}"
                                            alt=""><span>French</span>
                                    </a>
                                </li>
                            </ul>
                        @endif



                    </div>
                </div>

                <div
                    class="col-6 col-md-6 col-lg-6 col-xl-2 order-1 order-md-2 order-lg-2 order-xl-3 offset-md-2 offset-lg-0">
                    <h6 class="footer__title">{{ __('dashboard.pages') }}</h6>
                    <div class="footer__nav">
                        <a href="{{ route('aboutus') }}">{{ __('dashboard.about_us') }}</a>
                        <a href="{{ route('helpcenter') }}">{{ __('dashboard.help_center') }}</a>
                        <a href="{{ route('contactus') }}">{{ __('dashboard.ask_question') }}</a>
                        <a href="{{ route('website.terms') }}">{{ __('dashboard.terms_conditions') }}</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="footer__content">
                        <div class="footer__social">
                            <a href="{{ $SETTING->facebook }}" target="_blank"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M20.9,2H3.1A1.1,1.1,0,0,0,2,3.1V20.9A1.1,1.1,0,0,0,3.1,22h9.58V14.25h-2.6v-3h2.6V9a3.64,3.64,0,0,1,3.88-4,20.26,20.26,0,0,1,2.33.12v2.7H17.3c-1.26,0-1.5.6-1.5,1.47v1.93h3l-.39,3H15.8V22h5.1A1.1,1.1,0,0,0,22,20.9V3.1A1.1,1.1,0,0,0,20.9,2Z" />
                                </svg>
                            </a>

                            <a href="{{ $SETTING->instagram }}" target="_blank"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M17.34,5.46h0a1.2,1.2,0,1,0,1.2,1.2A1.2,1.2,0,0,0,17.34,5.46Zm4.6,2.42a7.59,7.59,0,0,0-.46-2.43,4.94,4.94,0,0,0-1.16-1.77,4.7,4.7,0,0,0-1.77-1.15,7.3,7.3,0,0,0-2.43-.47C15.06,2,14.72,2,12,2s-3.06,0-4.12.06a7.3,7.3,0,0,0-2.43.47A4.78,4.78,0,0,0,3.68,3.68,4.7,4.7,0,0,0,2.53,5.45a7.3,7.3,0,0,0-.47,2.43C2,8.94,2,9.28,2,12s0,3.06.06,4.12a7.3,7.3,0,0,0,.47,2.43,4.7,4.7,0,0,0,1.15,1.77,4.78,4.78,0,0,0,1.77,1.15,7.3,7.3,0,0,0,2.43.47C8.94,22,9.28,22,12,22s3.06,0,4.12-.06a7.3,7.3,0,0,0,2.43-.47,4.7,4.7,0,0,0,1.77-1.15,4.85,4.85,0,0,0,1.16-1.77,7.59,7.59,0,0,0,.46-2.43c0-1.06.06-1.4.06-4.12S22,8.94,21.94,7.88ZM20.14,16a5.61,5.61,0,0,1-.34,1.86,3.06,3.06,0,0,1-.75,1.15,3.19,3.19,0,0,1-1.15.75,5.61,5.61,0,0,1-1.86.34c-1,.05-1.37.06-4,.06s-3,0-4-.06A5.73,5.73,0,0,1,6.1,19.8,3.27,3.27,0,0,1,5,19.05a3,3,0,0,1-.74-1.15A5.54,5.54,0,0,1,3.86,16c0-1-.06-1.37-.06-4s0-3,.06-4A5.54,5.54,0,0,1,4.21,6.1,3,3,0,0,1,5,5,3.14,3.14,0,0,1,6.1,4.2,5.73,5.73,0,0,1,8,3.86c1,0,1.37-.06,4-.06s3,0,4,.06a5.61,5.61,0,0,1,1.86.34A3.06,3.06,0,0,1,19.05,5,3.06,3.06,0,0,1,19.8,6.1,5.61,5.61,0,0,1,20.14,8c.05,1,.06,1.37.06,4S20.19,15,20.14,16ZM12,6.87A5.13,5.13,0,1,0,17.14,12,5.12,5.12,0,0,0,12,6.87Zm0,8.46A3.33,3.33,0,1,1,15.33,12,3.33,3.33,0,0,1,12,15.33Z" />
                                </svg></a>

                            <a href="{{ $SETTING->twitter }}" target="_blank"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M22,5.8a8.49,8.49,0,0,1-2.36.64,4.13,4.13,0,0,0,1.81-2.27,8.21,8.21,0,0,1-2.61,1,4.1,4.1,0,0,0-7,3.74A11.64,11.64,0,0,1,3.39,4.62a4.16,4.16,0,0,0-.55,2.07A4.09,4.09,0,0,0,4.66,10.1,4.05,4.05,0,0,1,2.8,9.59v.05a4.1,4.1,0,0,0,3.3,4A3.93,3.93,0,0,1,5,13.81a4.9,4.9,0,0,1-.77-.07,4.11,4.11,0,0,0,3.83,2.84A8.22,8.22,0,0,1,3,18.34a7.93,7.93,0,0,1-1-.06,11.57,11.57,0,0,0,6.29,1.85A11.59,11.59,0,0,0,20,8.45c0-.17,0-.35,0-.53A8.43,8.43,0,0,0,22,5.8Z" />
                                </svg></a>

                            <a href="https://t.me/{{ $SETTING->telegram }}" target="_blank"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M22.26465,2.42773a2.04837,2.04837,0,0,0-2.07813-.32421L2.26562,9.33887a2.043,2.043,0,0,0,.1045,3.81836l3.625,1.26074,2.0205,6.68164A.998.998,0,0,0,8.134,21.352c.00775.012.01868.02093.02692.03259a.98844.98844,0,0,0,.21143.21576c.02307.01758.04516.03406.06982.04968a.98592.98592,0,0,0,.31073.13611l.01184.001.00671.00287a1.02183,1.02183,0,0,0,.20215.02051c.00653,0,.01233-.00312.0188-.00324a.99255.99255,0,0,0,.30109-.05231c.02258-.00769.04193-.02056.06384-.02984a.9931.9931,0,0,0,.20429-.11456,250.75993,250.75993,0,0,1,.15222-.12818L12.416,18.499l4.03027,3.12207a2.02322,2.02322,0,0,0,1.24121.42676A2.05413,2.05413,0,0,0,19.69531,20.415L22.958,4.39844A2.02966,2.02966,0,0,0,22.26465,2.42773ZM9.37012,14.73633a.99357.99357,0,0,0-.27246.50586l-.30951,1.504-.78406-2.59307,4.06525-2.11695ZM17.67188,20.04l-4.7627-3.68945a1.00134,1.00134,0,0,0-1.35352.11914l-.86541.9552.30584-1.48645,7.083-7.083a.99975.99975,0,0,0-1.16894-1.59375L6.74487,12.55432,3.02051,11.19141,20.999,3.999Z" />
                                </svg></a>

                            <a href="{{ $SETTING->linkedin }}" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"
                                    id="linkedin">
                                    <path
                                        d="M17.5,8.999a5.41868,5.41868,0,0,0-2.56543.64453A.99918.99918,0,0,0,14,8.999H10a.99943.99943,0,0,0-1,1v12a.99942.99942,0,0,0,1,1h4a.99942.99942,0,0,0,1-1v-5.5a1,1,0,1,1,2,0v5.5a.99942.99942,0,0,0,1,1h4a.99942.99942,0,0,0,1-1v-7.5A5.50685,5.50685,0,0,0,17.5,8.999Zm3.5,12H19v-4.5a3,3,0,1,0-6,0v4.5H11v-10h2v.70313a1.00048,1.00048,0,0,0,1.78125.625A3.48258,3.48258,0,0,1,21,14.499Zm-14-12H3a.99943.99943,0,0,0-1,1v12a.99942.99942,0,0,0,1,1H7a.99942.99942,0,0,0,1-1v-12A.99943.99943,0,0,0,7,8.999Zm-1,12H4v-10H6ZM5.01465,1.542A3.23283,3.23283,0,1,0,4.958,7.999h.02832a3.23341,3.23341,0,1,0,.02832-6.457ZM4.98633,5.999H4.958A1.22193,1.22193,0,0,1,3.58887,4.77051c0-.7461.55957-1.22852,1.42578-1.22852A1.2335,1.2335,0,0,1,6.41113,4.77051C6.41113,5.5166,5.85156,5.999,4.98633,5.999Z">
                                    </path>
                                </svg>
                            </a>

                            <a href="mailto:{{ $SETTING->email }}" target="_blank"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M19,4H5A3,3,0,0,0,2,7V17a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V7A3,3,0,0,0,19,4Zm-.41,2-5.88,5.88a1,1,0,0,1-1.42,0L5.41,6ZM20,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V7.41l5.88,5.88a3,3,0,0,0,4.24,0L20,7.41Z" />
                                </svg></a>

                            <a href="https://wa.me/{{ $SETTING->whatsapp }}" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="2489" height="2500"
                                    viewBox="0 0 737.509 740.824" id="whatsapp">
                                    <path fill-rule="evenodd"
                                        d="M630.056 107.658C560.727 38.271 468.525.039 370.294 0 167.891 0 3.16 164.668 3.079 367.072c-.027 64.699 16.883 127.855 49.016 183.523L0 740.824l194.666-51.047c53.634 29.244 114.022 44.656 175.481 44.682h.151c202.382 0 367.128-164.689 367.21-367.094.039-98.088-38.121-190.32-107.452-259.707m-259.758 564.8h-.125c-54.766-.021-108.483-14.729-155.343-42.529l-11.146-6.613-115.516 30.293 30.834-112.592-7.258-11.543c-30.552-48.58-46.689-104.729-46.665-162.379C65.146 198.865 202.065 62 370.419 62c81.521.031 158.154 31.81 215.779 89.482s89.342 134.332 89.311 215.859c-.07 168.242-136.987 305.117-305.211 305.117m167.415-228.514c-9.176-4.591-54.286-26.782-62.697-29.843-8.41-3.061-14.526-4.591-20.644 4.592-6.116 9.182-23.7 29.843-29.054 35.964-5.351 6.122-10.703 6.888-19.879 2.296-9.175-4.591-38.739-14.276-73.786-45.526-27.275-24.32-45.691-54.36-51.043-63.542-5.352-9.183-.569-14.148 4.024-18.72 4.127-4.11 9.175-10.713 13.763-16.07 4.587-5.356 6.116-9.182 9.174-15.303 3.059-6.122 1.53-11.479-.764-16.07-2.294-4.591-20.643-49.739-28.29-68.104-7.447-17.886-15.012-15.466-20.644-15.746-5.346-.266-11.469-.323-17.585-.323-6.117 0-16.057 2.296-24.468 11.478-8.41 9.183-32.112 31.374-32.112 76.521s32.877 88.763 37.465 94.885c4.587 6.122 64.699 98.771 156.741 138.502 21.891 9.45 38.982 15.093 52.307 19.323 21.981 6.979 41.983 5.994 57.793 3.633 17.628-2.633 54.285-22.19 61.932-43.616 7.646-21.426 7.646-39.791 5.352-43.617-2.293-3.826-8.41-6.122-17.585-10.714"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>

                        <small class="footer__copyright">© Alsoq, 2023</small>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    
    @include('includes._script')
    @yield('scripts')

</body>

</html>
