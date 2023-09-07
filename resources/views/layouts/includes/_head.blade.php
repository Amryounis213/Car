<!--begin::Head-->

@php
$lang = app()->getLocale();
$dir = ($lang == 'ar') ? 'rtl' : 'ltr';
@endphp
<head><base href="../"/>
    <title>Alsouq</title>
    <meta dir="rtl" lang="ar">
    <meta charset="utf-8" />
    <meta name="description" content="{{ $SETTING->desc }}">
    <meta name="keywords" content="{{ $SETTING->key_words }}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="cars" />
    <meta property="og:title" content="{{ $SETTING->desc }}" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Alsouq | Cars" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    {{-- logo --}}
    <link rel="shortcut icon" href="{{ asset('storage/'. $website->logo) }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />

    @if ($lang == 'ar')
    <link href="{{asset('assets/css/style.rtl.bundle.css')}}" rel="stylesheet" type="text/css" />
    @else
    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />

    @endif

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400&amp;display=swap" rel="stylesheet">
    <style>
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
          background: none;
          color: black!important;
         
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button:active {
          background: none;
          color: black!important;
        }
       
    </style>
   
    <!--end::Global Stylesheets Bundle-->
</head>