@extends('layouts.website')
@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css">
@endsection
@section('content')
    @php
        $fav = \App\Models\Favorite::where('user_id', 1)
            ->where('car_id', $car->id)
            ->get()
            ->pluck('car_id')
            ->toArray();
        
    @endphp
    <!-- main content -->
    <main class="main">
        <div class="container">
            <div class="row">
                <!-- breadcrumb -->
                <div class="col-12">
                    <ul class="breadcrumbs">
                        <li class="breadcrumbs__item"><a href="{{ route('website.home') }}">Home</a></li>
                        <li class="breadcrumbs__item breadcrumbs__item--active">My account</li>
                    </ul>
                </div>
                <!-- end breadcrumb -->

                <!-- title -->
                <div class="col-12">
                    <div class="main__title main__title--page">
                        <h1>My account</h1>
                    </div>
                </div>
                <!-- end title -->
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="profile">
                        <!-- tabs nav -->
                        <ul class="nav nav-tabs profile__tabs" id="profile__tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="active" data-bs-toggle="tab" data-bs-target="#tab-1" type="button"
                                    role="tab" aria-controls="tab-1" aria-selected="true">My listing</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button data-bs-toggle="tab" data-bs-target="#tab-2" type="button" role="tab"
                                    aria-controls="tab-2" aria-selected="false">Favorites</button>
                            </li>


                            <li class="nav-item" role="presentation">
                                <button data-bs-toggle="tab" data-bs-target="#tab-3" type="button" role="tab"
                                    aria-controls="tab-3" aria-selected="false">Settings</button>
                            </li>


                        </ul>
                        <!-- end tabs nav -->
                    </div>

                    <!-- content tabs -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" tabindex="0">
                            <div class="row">
                                <div class="col-12">
                                    <!-- cart -->
                                    <div class="cart">
                                        <div class="cart__table-wrap">
                                            <div class="cart__table-scroll">
                                                <table class="cart__table">
                                                    <thead>
                                                        <tr>
                                                            <th>Car</th>
                                                            <th></th>
                                                            <th>Year</th>
                                                            <th>Transmission</th>
                                                            <th>Fuel type</th>
                                                            <th>Price</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach ($mycars as $car)
                                                            <tr>
                                                                <td>
                                                                    <div class="cart__img">
                                                                        <img src="{{ $car->main_image }}" alt="">
                                                                    </div>
                                                                </td>
                                                                <td><a href="car.html">{{ $car->title }}</a></td>
                                                                <td>{{ $car->year }}</td>
                                                                <td>{{ $car->gearbox }}</td>
                                                                <td>{{ $car->fuel }}</td>
                                                                <td><span class="cart__price">{{ $car->price }}</span>
                                                                </td>
                                                                <td>
                                                                    <button class="cart__delete" type="button"
                                                                        aria-label="Delete">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 24 24">
                                                                            <path
                                                                                d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z">
                                                                            </path>
                                                                        </svg>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end cart -->
                                </div>
                            </div>

                            <!-- paginator -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="paginator">
                                        <span class="paginator__pages">4 from 38</span>

                                        <ul class="paginator__list-mobile">
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z" />
                                                    </svg>
                                                    <span>Prev</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span>Next</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="paginator__list">
                                            <li>
                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z" />
                                                    </svg></a>
                                            </li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><span>...</span></li>
                                            <li><a href="#">18</a></li>
                                            <li><a href="#">19</a></li>
                                            <li>
                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
                                                    </svg></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end paginator -->
                        </div>

                        <div id="tab-2" class="tab-pane fade" role="tabpanel" tabindex="0">
                            <div class="row">
                                @foreach ($favCars as $car)
                                    <!-- car -->
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="car">
                                            <div class="car__img">
                                                <img src="{{ $car->main_image }}" alt="">
                                            </div>
                                            <div class="car__title">
                                                <h3 class="car__name"><a href="car.html">{{ $car->title }}</a></h3>
                                                <span class="car__year">{{ $car->year }}</span>
                                            </div>
                                            <ul class="car__list">
                                                <li>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z" />
                                                    </svg>
                                                    <span>{{ $car->number_of_places }}</span>
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
                                                    <span>{{ $car->mileage }}</span>
                                                </li>
                                                <li>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M12,12a1,1,0,1,0,1,1A1,1,0,0,0,12,12Zm9.71-2.36a0,0,0,0,1,0,0,10,10,0,0,0-19.4,0,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0,4.72,0,0,0,0,1,0,0A10,10,0,0,0,9.61,21.7h0a9.67,9.67,0,0,0,4.7,0h0a10,10,0,0,0,7.31-7.31,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0-4.72ZM12,4a8,8,0,0,1,7.41,5H4.59A8,8,0,0,1,12,4ZM4,12a8.26,8.26,0,0,1,.07-1H6v2H4.07A8.26,8.26,0,0,1,4,12Zm5,7.41A8,8,0,0,1,4.59,15H7a2,2,0,0,1,2,2Zm4,.52A8.26,8.26,0,0,1,12,20a8.26,8.26,0,0,1-1-.07V18h2ZM13.14,16H10.86A4,4,0,0,0,8,13.14V11h8v2.14A4,4,0,0,0,13.14,16ZM15,19.41V17a2,2,0,0,1,2-2h2.41A8,8,0,0,1,15,19.41ZM19.93,13H18V11h1.93A8.26,8.26,0,0,1,20,12,8.26,8.26,0,0,1,19.93,13Z" />
                                                    </svg>
                                                    <span>{{ $car->gearbox }}</span>
                                                </li>
                                            </ul>
                                            <div class="car__footer">
                                                <span class="car__price">{{ $car->price . '$' }} </span>
                                                <button
                                                    class="car__favorite {{ $car->isLikedByUser() ? 'car__favorite--active' : '' }}"
                                                    type="button" aria-label="Add to favorite"
                                                    data-id="{{ $car->id }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z" />
                                                    </svg>
                                                </button>
                                                <a href="{{ route('showCar', $car->id) }}" class="car__more"><span>Buy Now</span></a>
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
                                        <span class="paginator__pages">6 from 134</span>

                                        <ul class="paginator__list-mobile">
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z" />
                                                    </svg>
                                                    <span>Prev</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span>Next</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="paginator__list">
                                            <li>
                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z" />
                                                    </svg></a>
                                            </li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><span>...</span></li>
                                            <li><a href="#">18</a></li>
                                            <li><a href="#">19</a></li>
                                            <li>
                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
                                                    </svg></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end paginator -->
                        </div>

                        <div class="tab-pane fade" id="tab-3" role="tabpanel" tabindex="0">
                            <div class="row">
                                <!-- details form -->
                                <div class="col-12 col-lg-6">
                                    <form action="{{ route('account.update', $user->id) }}" method="POST"
                                        class="sign__form sign__form--profile">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="sign__title">Profile details</h4>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="username">Username</label>
                                                    <input id="username" type="text" name="username"
                                                        class="sign__input" placeholder="User123"
                                                        value="{{ $user->username }}">
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="email1">Email</label>
                                                    <input id="email1" type="text" name="email"
                                                        class="sign__input" placeholder="email@email.com"
                                                        value="{{ $user->email }}">
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="firstname">First name</label>
                                                    <input id="firstname" type="text" name="firstname"
                                                        class="sign__input" placeholder="John"
                                                        value="{{ $user->firstname }}">
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="lastname">Last name</label>
                                                    <input id="lastname" type="text" name="lastname"
                                                        class="sign__input" placeholder="Doe"
                                                        value="{{ $user->lastname }}">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="lastname">Phone</label>
                                                    <input id="lastname" type="text" name="phone"
                                                        class="sign__input" placeholder="Doe"
                                                        value="{{ $user->phone }}">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button class="sign__btn" id="change"
                                                    type="submit"><span>Save</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- end details form -->

                                <!-- password form -->
                                <div class="col-12 col-lg-6">
                                    <form action="#" class="sign__form sign__form--profile">
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="sign__title">Change password</h4>
                                            </div>

                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="oldpass">Old password</label>
                                                    <input id="oldpass" type="password" name="oldpass"
                                                        class="sign__input">
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="newpass">New password</label>
                                                    <input id="newpass" type="password" name="newpass"
                                                        class="sign__input">
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="confirmpass">Confirm new
                                                        password</label>
                                                    <input id="confirmpass" type="password" name="confirmpass"
                                                        class="sign__input">
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="select">Select</label>
                                                    <select name="select" id="select" class="sign__select">
                                                        <option value="0">Option</option>
                                                        <option value="1">Option 2</option>
                                                        <option value="2">Option 3</option>
                                                        <option value="3">Option 4</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button class="sign__btn" id="save-button"
                                                    type="button"><span>Change</span></button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                                <!-- end password form -->
                            </div>
                        </div>

                    </div>
                    <!-- end content tabs -->
                </div>
            </div>
        </div>
    </main>
    <!-- end main content -->
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    {{-- https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js --}}
    <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.js"></script>
    <script>
        //jquery document ready
        $(document).ready(function() {
            $('.offer__favorite').click(function() {
                //if offer__favorite--active class is exist
                if ($(this).hasClass('offer__favorite--active')) {
                    $(this).removeClass('offer__favorite--active');
                } else {
                    $(this).addClass('offer__favorite--active');
                }


                //ajax request post
                $.ajax({
                    url: "{{ route('add.to.favorite') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        car_id: $(this).data('id')
                    },
                    success: function(response) {
                        toastr.success(response.message)
                    }
                });

            });
        });
    </script>
    {{-- <script>
        $(document).ready(function() {
            $('.sign__btn').click(function() {
                $.ajax({
                    url: "{{ route('account.update', ':id') }}".replace(':id', id),
                    type: "POST",
                    data: {
                        _method: "PUT", // Add _method field to simulate PUT request
                        _token: "{{ csrf_token() }}",
                        id: id,
                    },
                    success: function(response) {
                        toastr.success(response.message);
                    }
                });
            });
        });
    </script> --}}
@endsection
