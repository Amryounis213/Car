@extends('layouts.website')


@section('content')
    <!-- main content -->
    <main class="main">
        <div class="container">
            <div class="row">
                <!-- breadcrumb -->
                <div class="col-12">
                    <ul class="breadcrumbs">
                        <li class="breadcrumbs__item"><a href="{{ route('website.home') }}">{{ __('dashboard.home') }}</a></li>
                        <li class="breadcrumbs__item breadcrumbs__item--active">{{ __('dashboard.about_us') }}</li>
                    </ul>
                </div>
                <!-- end breadcrumb -->

                <!-- title -->
                <div class="col-12 col-xl-11">
                    <div class="main__title main__title--page">
                        {!! $about->text !!}
                    </div>
                </div>
                <!-- end title -->
            </div>
        </div>
    </main>
    <!-- end main content -->
@endsection

