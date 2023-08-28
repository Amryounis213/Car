@extends('layouts.website')


@section('content')
    <!-- main content -->
    <main class="main">
        <div class="container">
            <div class="row">
                <!-- breadcrumb -->
                <div class="col-12">
                    <ul class="breadcrumbs">
                        <li class="breadcrumbs__item"><a href="{{ route('website.home') }}">Home</a></li>
                        <li class="breadcrumbs__item breadcrumbs__item--active">Frequently asked questions</li>
                    </ul>
                </div>
                <!-- end breadcrumb -->

                <!-- title -->
                <div class="col-12 col-xl-11">
                    <div class="main__title main__title--page">
                        <h1>Help center</h1>
                        <p>Here you will find answers to frequently asked questions about our company and services. If you
                            don't find the answer to your question, please contact our customer support and we'll be happy
                            to assist you. <a href="{{ route('contactus') }}">Ask a question</a>.</p>
                    </div>
                </div>
                <!-- end title -->

                <!-- accordion -->
                <div class="col-12">
                    <div class="accordion" id="accordion">
                        <div class="row">
                            @foreach ($questions as $question)
                                <div class="col-12 col-lg-6">
                                    <div class="accordion__card">
                                        <button class="collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $loop->index }}" aria-expanded="false"
                                            aria-controls="collapse{{ $loop->index }}">
                                            {{ $question->title }}
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M19,11H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M19,11H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Z" />
                                                </svg>
                                            </span>
                                        </button>

                                        <div id="collapse{{ $loop->index }}" class="collapse" data-bs-parent="#accordion">
                                            <p>{{ $question->desc }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- end accordion -->
            </div>
        </div>
    </main>
    <!-- end main content -->
@endsection
