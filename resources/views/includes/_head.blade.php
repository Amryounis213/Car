<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/splide.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slimselect.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/sass/style.css') }}">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{ asset('assets/icon/favicon-32x32.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" href="{{ asset('assets/icon/favicon-32x32.png') }}">

    <meta name="description" content="{{ $SETTING->desc }}">
    <meta name="keywords" content="{{ $SETTING->key_words }}">
    <meta name="author" content="Dmitry Volkov">
    <title>{{ $SETTING->title }}</title>
   
   @php
        $lang = app()->getLocale();
    @endphp

    @if ($lang == 'ar')
        <style>
			body {
				direction: rtl;
			}

		</style>
    @endif

    @yield('style')
</head>
