@extends('layouts.website')

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.5.0/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">
    <style>
        * {
            /* direction: ltr; */
        }

        .filter__scroll-view {
            max-height: 200px;
            /* Adjust the maximum height as needed */
            overflow-y: auto;
        }

        .filter__checkbox-label {
            display: block;
            margin-bottom: 10px;
        }

        .filter__checkbox {
            margin-right: 5px;
            /* Adjust spacing between checkbox and city name */
        }
    </style>
@endsection

@section('content')
    <!-- main content -->
    <main class="main">
        <div class="container">
            <div class="row">
                <!-- breadcrumb -->
                <div class="col-12">
                    <ul class="breadcrumbs">
                        <li class="breadcrumbs__item"><a href="{{ route('website.home') }}">{{ __('dashboard.home') }}</a>
                        </li>
                        <li class="breadcrumbs__item breadcrumbs__item--active">{{ __('dashboard.explore_cars') }}</li>
                    </ul>
                </div>
                <!-- end breadcrumb -->

                <!-- title -->
                <div class="col-12">
                    <div class="main__title main__title--page">
                        <h1>{{ __('dashboard.choose_the_right_lease') }}</h1>
                    </div>
                </div>
                <!-- end title -->
            </div>

            <div class="row">
                <!-- sidebar -->
                <div class="col-12 col-xl-3 order-xl-2">
                    <div class="filter-wrap">
                        <button class="filter-wrap__btn" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFilter" aria-expanded="false" aria-controls="collapseFilter"><span>Open
                                {{ __('dashboard.filter') }}</span></button>

                        <form method="POST" action="{{ route('search') }}" class="collapse filter-wrap__content"
                            id="collapseFilter">
                            @csrf
                            <!-- filter -->
                            <div class="filter">
                                <h4 class="filter__title">{{ __('dashboard.filters') }} <button
                                        type="reset">{{ __('dashboard.clear_all') }}</button></h4>

                                <div class="filter__group">
                                    <label class="filter__label">{{ __('dashboard.search') }}:</label>
                                    <input type="text" name="name" class="filter__input" placeholder="Keyword">
                                </div>

                                <div class="filter__group">
                                    <label for="filter__posttype"
                                        class="filter__label">{{ __('dashboard.post_type') }}:</label>
                                    
                                    <div class="filter__select-wrap">
                                        <select name="post_type" id="filter__posttype" class="filter__select">
                                            <option value="">{{ __('dashboard.post_type') }}</option>
                                            <option value="0">{{ __('dashboard.mechanical_items') }}</option>
                                            <option value="1" selected>{{ __('dashboard.cars') }}</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="filter__group">
                                    <label for="filter__status"
                                        class="filter__label">{{ __('dashboard.sort_by') }}:</label>

                                    <div class="filter__select-wrap">
                                        <select name="sort" id="filter__status" class="filter__select">
                                            <option value="1">{{ __('dashboard.newest') }}</option>
                                            <option value="2">{{ __('dashboard.oldest') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="filter__group">
                                    <label for="filter__category"
                                        class="filter__label">{{ __('dashboard.brands') }}:</label>

                                    <div class="filter__select-wrap">
                                        <select name="brands" id="filter__category" class="filter__select">
                                            <option value="">{{ __('dashboard.all_brands') }}</option>
                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="filter__group">
                                    <label for="filter_cities" class="filter__label">{{ __('dashboard.the_cities') }}:</label>

                                    <div class="filter__select-wrap">
                                        <select name="city_id" id="filter_cities" class="filter__select">
                                            <option value="" selected>{{ __('dashboard.all_cities') }}</option>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>



                                <div class="filter__group">
                                    <label for="filter_colorin" class="filter__label">{{ __('dashboard.color_inner') }}:</label>

                                    <div class="filter__select-wrap">
                                        <select name="colorin" id="filter_colorin" class="filter__select">
                                            <option value="">{{ __('dashboard.all_colors') }}</option>
                                            @foreach ($colors as $colorin)
                                                <option value="{{ $colorin->id }}">{{ $colorin->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="filter__group">
                                    <label for="filter_colorout" class="filter__label">{{ __('dashboard.color_outter') }}:</label>

                                    <div class="filter__select-wrap">
                                        <select name="colorout" id="filter_colorout" class="filter__select">
                                            <option value="">{{ __('dashboard.all_colors') }}</option>
                                            @foreach ($colors as $colorout)
                                                <option value="{{ $colorout->id }}">{{ $colorout->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="filter__group">
                                    <label for="filter_seats"
                                        class="filter__label">{{ __('dashboard.seats') }}:</label>

                                    <div class="filter__select-wrap">
                                        <select name="seats" id="filter_seats" class="filter__select">
                                            <option value="">{{ __('dashboard.seats') }}</option>
                                            <option value="2">2</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="4">6</option>
                                        </select>
                                    </div>
                                </div>




                                <div class="filter__group">
                                    <button class="filter__btn"
                                        type="submit"><span>{{ __('dashboard.apply_filter') }}</span></button>
                                </div>
                            </div>
                            <!-- end filter -->
                        </form>
                    </div>
                </div>
                <!-- end sidebar -->

                <!-- content -->
                <div class="col-12 col-xl-9 order-xl-1">
                    <div class="row">
                        @foreach ($cars as $car)
                            <!-- car -->
                            <div class="col-12 col-md-6 col-xl-6">
                                <div class="car">
                                    <div class="splide splide--card car__slider">
                                        <div class="splide__arrows">
                                            <button class="splide__arrow splide__arrow--prev" type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path
                                                        d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <button class="splide__arrow splide__arrow--next" type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path
                                                        d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>

                                        <div class="splide__track">
                                            <ul class="splide__list">
                                                @foreach ($car->images as $image)
                                                    <li class="splide__slide">
                                                        <img src="{{ asset('storage/' . $image) }}" alt="">
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="car__title">
                                        <h3 class="car__name"><a
                                                href="{{ route('showCar', $car->id) }}">{{ $car->title }}</a>
                                        </h3>
                                        <span class="car__year">{{ $car->year }}</span>
                                    </div>
                                    <ul class="car__list">
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path
                                                    d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z" />
                                            </svg>
                                            <span>{{ $car->seats }} People</span>
                                        </li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path
                                                    d="M20.54,6.29,19,4.75,17.59,3.34a1,1,0,0,0-1.42,1.42l1,1-.83,2.49a3,3,0,0,0,.73,3.07l2.95,3V19a1,1,0,0,1-2,0V17a3,3,0,0,0-3-3H14V5a3,3,0,0,0-3-3H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3h6a3,3,0,0,0,3-3V16h1a1,1,0,0,1,1,1v2a3,3,0,0,0,6,0V9.83A5,5,0,0,0,20.54,6.29ZM12,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12h8Zm0-9H4V5A1,1,0,0,1,5,4h6a1,1,0,0,1,1,1Zm8,1.42L18.46,9.88a1,1,0,0,1-.24-1l.51-1.54.39.4A3,3,0,0,1,20,9.83Z" />
                                            </svg>
                                            <span>{{ $car->fuel }}</span>
                                        </li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path
                                                    d="M19.088,4.95453c-.00732-.00781-.00952-.01819-.01715-.02582s-.01819-.00995-.02606-.01733a9.97886,9.97886,0,0,0-14.08948,0c-.00787.00738-.01837.00964-.02606.01733s-.00983.018-.01715.02582a10,10,0,1,0,14.1759,0ZM12,20a7.9847,7.9847,0,0,1-6.235-3H9.78027a2.9636,2.9636,0,0,0,4.43946,0h4.01532A7.9847,7.9847,0,0,1,12,20Zm-1-5a1,1,0,1,1,1,1A1.001,1.001,0,0,1,11,15Zm8.41022.00208L19.3999,15H15a2.99507,2.99507,0,0,0-2-2.81573V9a1,1,0,0,0-2,0v3.18427A2.99507,2.99507,0,0,0,9,15H4.6001l-.01032.00208A7.93083,7.93083,0,0,1,4.06946,13H5a1,1,0,0,0,0-2H4.06946A7.95128,7.95128,0,0,1,5.68854,7.10211l.65472.65473A.99989.99989,0,1,0,7.75732,6.34277l-.65466-.65466A7.95231,7.95231,0,0,1,11,4.06946V5a1,1,0,0,0,2,0V4.06946a7.95231,7.95231,0,0,1,3.89734,1.61865l-.65466.65466a.99989.99989,0,1,0,1.41406,1.41407l.65472-.65473A7.95128,7.95128,0,0,1,19.93054,11H19a1,1,0,0,0,0,2h.93054A7.93083,7.93083,0,0,1,19.41022,15.00208Z" />
                                            </svg>
                                            <span>6.1km / 1-litre</span>
                                        </li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path
                                                    d="M12,12a1,1,0,1,0,1,1A1,1,0,0,0,12,12Zm9.71-2.36a0,0,0,0,1,0,0,10,10,0,0,0-19.4,0,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0,4.72,0,0,0,0,1,0,0A10,10,0,0,0,9.61,21.7h0a9.67,9.67,0,0,0,4.7,0h0a10,10,0,0,0,7.31-7.31,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0-4.72ZM12,4a8,8,0,0,1,7.41,5H4.59A8,8,0,0,1,12,4ZM4,12a8.26,8.26,0,0,1,.07-1H6v2H4.07A8.26,8.26,0,0,1,4,12Zm5,7.41A8,8,0,0,1,4.59,15H7a2,2,0,0,1,2,2Zm4,.52A8.26,8.26,0,0,1,12,20a8.26,8.26,0,0,1-1-.07V18h2ZM13.14,16H10.86A4,4,0,0,0,8,13.14V11h8v2.14A4,4,0,0,0,13.14,16ZM15,19.41V17a2,2,0,0,1,2-2h2.41A8,8,0,0,1,15,19.41ZM19.93,13H18V11h1.93A8.26,8.26,0,0,1,20,12,8.26,8.26,0,0,1,19.93,13Z" />
                                            </svg>
                                            <span alt>{{ $car->seats }}</span>
                                        </li>
                                    </ul>
                                    <div class="car__footer">
                                        <span class="car__price">{{ $car->price }} $ </span>
                                        @auth
                                            {{-- <button
                                                class="car__favorite {{ $car->isLikedByUser() ? 'car__favorite--active' : '' }}"
                                                type="button" aria-label="Add to favorite" data-id="{{ $car->id }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path
                                                        d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z" />
                                                </svg>
                                            </button> --}}
                                        @else
                                            <a href="{{ route('website.login') }}" class="car__favorite"
                                                aria-label="Add to favorite">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path
                                                        d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z" />
                                                </svg>
                                            </a>
                                        @endauth
                                        <a href="{{ route('showCar', $car->id) }}"
                                            class="car__more"><span>{{ __('dashboard.show_more') }}</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end car -->
                        @endforeach


                    </div>
                    <!-- paginator -->
                    <div class="row">
                        <div class="col-12">
                            <div class="paginator">
                                <span class="paginator__pages">{{ $cars->currentPage() }} -  from - {{ $cars->lastPage() }}</span>

                                <ul class="paginator__list-mobile">
                                    @if ($cars->previousPageUrl())
                                        <li>
                                            <a href="{{ $cars->previousPageUrl() }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <!-- SVG Path for Previous Icon -->
                                                </svg>
                                                <span>Prev</span>
                                            </a>
                                        </li>
                                    @endif

                                    @if ($cars->nextPageUrl())
                                        <li>
                                            <a href="{{ $cars->nextPageUrl() }}">
                                                <span>Next</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <!-- SVG Path for Next Icon -->
                                                </svg>
                                            </a>
                                        </li>
                                    @endif
                                </ul>

                                <ul class="paginator__list">


                                    @for ($i = 1; $i <= $cars->lastPage(); $i++)
                                        <li class="{{ $cars->currentPage() == $i ? 'active' : '' }}">
                                            <a
                                                href="{{ $cars->path() }}?page={{ $i }}">{{ $i }}</a>
                                        </li>
                                    @endfor

                                    <!-- Render "..." if there are many pages -->
                                    @if ($cars->currentPage() < $cars->lastPage() - 2)
                                        <li><span>...</span></li>
                                    @endif

                                    <li>
                                        {{-- <a href="{{ $cars->url($cars->lastPage()) }}">{{ $cars->lastPage() }}</a> --}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end paginator -->

                </div>
                <!-- end content -->
            </div>
        </div>
    </main>
    <!-- end main content -->
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#filter__cities').select2({
                placeholder: '{{ __('dashboard.select_cities') }}',
                allowClear: true, // Adds a clear button
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"></script>
    <script>
        $(document).ready(function() {
            $('#filter__cities').multiselect({
                enableFiltering: true, // Add a search filter
                includeSelectAllOption: true // Include a "Select All" option
            });
        });
    </script>
@endsection
