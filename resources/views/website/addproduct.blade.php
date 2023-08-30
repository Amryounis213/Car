@extends('layouts.website')

@section('style')
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
    <style>
        .custom-file-input {
            width: calc(100% - 0.5em);
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
                        <li class="breadcrumbs__item"><a href="{{ route('website.home') }}">Home</a></li>
                        <li class="breadcrumbs__item breadcrumbs__item--active">Post</li>
                    </ul>
                </div>
                <!-- end breadcrumb -->

                <!-- title -->
                <div class="col-12">
                    <div class="main__title main__title--page">
                        <h1>Add Advirtisement</h1>
                    </div>
                </div>
                <!-- end title -->
            </div>

            <div class="row">
                <div class="col-12 col-lg-7 col-xl-7">
                    @if (session()->has('errors'))
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach (session()->get('errors')->all() as $error)
                                    <li class="text-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        
                    @endif
                    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data"
                        class="sign__form sign__form--contacts">
                        @csrf
                        <div class="row">
                            {{-- Post Title --}}
                            <div class="col-12">
                                <div class="sign__group">
                                    <textarea name="description" class="sign__textarea" placeholder="Description ..">{{old('description')}}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-12 col-md-6">
                                <div class="sign__group">
                                    {{-- <input type="text" inputmode="numeric" pattern="[0-9]*" min="1900" max=""
                                        name="year" class="sign__input" placeholder="Year" id="year-input"> --}}
                                    <select name="year" class="sign__input" id="year-input">
                                        <option value="" disabled selected>Select Year</option>
                                        <?php
                                        $currentYear = date('Y');
                                        $selected = old('year') == $currentYear ? 'selected' : '';
                                        for ($year = $currentYear; $year >= 1912; $year--) {
                                            echo "<option value='$year' $selected>$year</option>";
                                        }
                                        ?>
                                    </select>
                                    @error('year')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>
                            {{-- This Should be a Select View --}}
                            <div class="col-12 col-md-6">
                                <div class="sign__group">
                                    <select name="car_model_id" class="sign__input">
                                        <option value="" disabled selected>Select Car Model</option>
                                        @foreach ($models as $model)
                                            <option value="{{ $model->id }}" @selected(old('car_model_id') == $model->id)>{{ $model->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('car_model_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="sign__group">
                                    <select name="generation_id" class="sign__input">
                                        <option value="" disabled selected>Select Car Generation</option>
                                        @foreach ($generation as $generation)
                                            <option value="{{ $generation->id }}" @selected(old('generation_id') == $generation->id)>{{ $generation->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('generation_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="sign__group">
                                    <select name="car_type_id" class="sign__input">
                                        <option value="" disabled selected>Select Car Type</option>
                                        @foreach ($carTypes as $model)
                                            <option value="{{ $model->id }}" @selected(old('car_type_id') == $model->id)>{{ $model->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('car_type_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                               
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="sign__group">
                                    <select name="brand_id" class="sign__input">
                                        <option value="" disabled selected>Select Car Brand</option>
                                        @foreach ($brands as $model)
                                            <option value="{{ $model->id }}" @selected(old('brand_id') == $model->id)>{{ $model->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('brand_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                            {{-- <div class="col-12 col-md-6">
                                <div class="sign__group">
                                    <select name="year" class="sign__input">
                                        <option value="" disabled selected>Select Release Year</option>
                                        @for ($year = date('Y'); $year >= 1912; $year--)
                                            <option value="{{ $year }}">{{ $year }}</option>
                                        @endfor
                                    </select>
                                    @error('year')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div> --}}

                            {{-- What is Technical Control ?! --}}

                            <div class="col-12 col-md-6">
                                <div class="sign__group">
                                    <input type="number" name="price" class="sign__input" value="{{old('price')}}" placeholder="Price">
                                </div>
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="sign__group">
                                    <input type="number" value="{{old('number_of_owners')}}"  min="0" max="79" name="number_of_owners"
                                        class="sign__input" placeholder="Number of Owners">
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="sign__group">
                                    <input type="number" value="{{old('mileage')}}"  name="mileage" class="sign__input" placeholder="Mileage"
                                        min="0" max="999999">
                                </div>
                            </div>
                            {{-- Gearbox is a Select View --}}
                            <div class="col-12 col-md-6">
                                <div class="sign__group">
                                    <select name="gearbox" class="sign__input">
                                        <option value="" disabled selected>Select Gearbox</option>
                                        <option value="manual" @selected(old('gearbox') == 'manual')>Manual</option>
                                        <option value="automatic" @selected(old('gearbox') == 'automatic')>Automatic</option>
                                    </select>
                                </div>
                            </div>


                             {{-- Gearbox is a Select View --}}
                             <div class="col-12 col-md-6">
                                <div class="sign__group">
                                    <select name="fuel" class="sign__input">
                                        <option value="" disabled selected>Select fuel</option>
                                        <option value="Diesel" @selected(old('fuel') == 'Diesel')>Diesel</option>
                                        <option value="Essence" @selected(old('fuel') == 'Essence')>Gasoline</option>
                                        <option value="Electric" @selected(old('fuel') == 'Electric')>Electric</option>

                                    </select>
                                </div>
                            </div>



                            {{-- هادي ممكن نعملها ليستة من الالوان وخلص مش ضروري موضوع الكلر آي دي  --}}
                            <div class="col-12 col-md-6">
                                <div class="sign__group">
                                    <select name="color_id_in" class="sign__input">
                                        <option value="" disabled selected>Select Color Inner</option>
                                        @foreach ($carColors as $color)
                                            <option value="{{ $color->id }}" @selected(old('color_id_in') == $color->id)>{{ $color->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- هادي ممكن نعملها ليستة من الالوان وخلص مش ضروري موضوع الكلر آي دي  --}}
                            <div class="col-12 col-md-6">
                                <div class="sign__group">
                                    <select name="color_id_out" class="sign__input">
                                        <option value="" disabled selected>Select Color Inner</option>
                                        @foreach ($carColors as $color)
                                            <option value="{{ $color->id }}" @selected(old('color_id_out') == $color->id)>{{ $color->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- Select View --}}
                            {{-- <div class="col-12 col-md-6">
                                <div class="sign__group">
                                    <input type="text" name="upholstery" class="sign__input" placeholder="Upholstery">
                                </div>
                            </div> --}}

                            <div class="col-12 col-md-6">
                                <div class="sign__group">
                                    <input type="number"  value="{{old('number_of_doors')}}"  min="1" max="8" name="number_of_doors"
                                        class="sign__input" placeholder="Number Of Doors">
                                </div>
                            </div>


                            <div class="col-12 col-md-6">
                                <div class="sign__group">
                                    <input type="number"  value="{{old('walk_for_liter')}}"  min="1" max="400" name="walk_for_liter"
                                        class="sign__input" placeholder="distance per liter">
                                </div>
                            </div>


                            

                            {{-- Select View --}}
                            <div class="col-12 col-md-12">
                                {{-- <div class="sign__group"> --}}
                                <label for="fuel" class="sign__label">Force Points</label>
                                <div class="sign__group sign__group--checkbox">
                                    @foreach ($amenities as $key => $amenity)
                                        <div style="display: flex; align-items: center;">

                                            <input type="checkbox" name="amenities[]" value="amenity{{ $key }}"
                                                id="amenity{{ $key }}">
                                            <label for="amenity{{ $key }}"> {{ $amenity->name }}</label>
                                            <img style="width: 20px; height: 20px; margin-left: 5px;"
                                                src="{{ asset('storage/' . $amenity->icon) }}" alt="">
                                        </div>
                                    @endforeach
                                    {{-- </div> --}}
                                </div>
                            </div>


                            {{-- <div class="col-12">
                                <div class="sign__group">
                                    <textarea name="text" class="sign__textarea" placeholder="Type your message"></textarea>
                                </div>
                            </div> --}}

                            <div class="col-12">
                                <div class="sign__group">
                                    <input id="images" type="file" name="images[]" class="custom-file-input"
                                        multiple>
                                </div>
                            </div>


                            <div class="col-12 col-xl-3">
                                <button type="submit" class="sign__btn"><span>Post</span></button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-12 col-md-6 col-lg-5 col-xl-4 offset-xl-1">
                    <div class="main__title main__title--sidebar">
                        <h2>Info</h2>
                        <p>We understand that taking
                            that first step is important, which is why we're delighted to offer you your inaugural posting
                            absolutely free of charge. As part of our commitment to supporting your growth, you currently
                            have <strong style="color: red">{{ auth()->user()->post_attempts ?? '1' }} </strong> post
                            attempts remaining. These attempts empower
                            you to showcase your offerings to the world. Should you wish to continue after your initial
                            complimentary post, we offer a seamless payment process for subsequent posts. Feel free to
                            leverage our email, phone, or website form to reach out for any guidance or queries. We're truly
                            excited to be a part of your journey and look forward to witnessing your success.
                        </p>
                    </div>
                    <ul class="contacts__list">
                        <li><a href="tel:88002345678">{{ $SETTING->whatsapp }}</a></li>
                        <li><a href="mailto:support@waydex.com">{{ $SETTING->email }}</a></li>
                        <li><a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                target="_blank">{{ $SETTING->location }}</a></li>
                    </ul>
                    <div class="contacts__social">
                        <a href="#" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M20.9,2H3.1A1.1,1.1,0,0,0,2,3.1V20.9A1.1,1.1,0,0,0,3.1,22h9.58V14.25h-2.6v-3h2.6V9a3.64,3.64,0,0,1,3.88-4,20.26,20.26,0,0,1,2.33.12v2.7H17.3c-1.26,0-1.5.6-1.5,1.47v1.93h3l-.39,3H15.8V22h5.1A1.1,1.1,0,0,0,22,20.9V3.1A1.1,1.1,0,0,0,20.9,2Z" />
                            </svg></a>

                        <a href="#" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M23,9.71a8.5,8.5,0,0,0-.91-4.13,2.92,2.92,0,0,0-1.72-1A78.36,78.36,0,0,0,12,4.27a78.45,78.45,0,0,0-8.34.3,2.87,2.87,0,0,0-1.46.74c-.9.83-1,2.25-1.1,3.45a48.29,48.29,0,0,0,0,6.48,9.55,9.55,0,0,0,.3,2,3.14,3.14,0,0,0,.71,1.36,2.86,2.86,0,0,0,1.49.78,45.18,45.18,0,0,0,6.5.33c3.5.05,6.57,0,10.2-.28a2.88,2.88,0,0,0,1.53-.78,2.49,2.49,0,0,0,.61-1,10.58,10.58,0,0,0,.52-3.4C23,13.69,23,10.31,23,9.71ZM9.74,14.85V8.66l5.92,3.11C14,12.69,11.81,13.73,9.74,14.85Z" />
                            </svg></a>

                        <a href="#" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M17.34,5.46h0a1.2,1.2,0,1,0,1.2,1.2A1.2,1.2,0,0,0,17.34,5.46Zm4.6,2.42a7.59,7.59,0,0,0-.46-2.43,4.94,4.94,0,0,0-1.16-1.77,4.7,4.7,0,0,0-1.77-1.15,7.3,7.3,0,0,0-2.43-.47C15.06,2,14.72,2,12,2s-3.06,0-4.12.06a7.3,7.3,0,0,0-2.43.47A4.78,4.78,0,0,0,3.68,3.68,4.7,4.7,0,0,0,2.53,5.45a7.3,7.3,0,0,0-.47,2.43C2,8.94,2,9.28,2,12s0,3.06.06,4.12a7.3,7.3,0,0,0,.47,2.43,4.7,4.7,0,0,0,1.15,1.77,4.78,4.78,0,0,0,1.77,1.15,7.3,7.3,0,0,0,2.43.47C8.94,22,9.28,22,12,22s3.06,0,4.12-.06a7.3,7.3,0,0,0,2.43-.47,4.7,4.7,0,0,0,1.77-1.15,4.85,4.85,0,0,0,1.16-1.77,7.59,7.59,0,0,0,.46-2.43c0-1.06.06-1.4.06-4.12S22,8.94,21.94,7.88ZM20.14,16a5.61,5.61,0,0,1-.34,1.86,3.06,3.06,0,0,1-.75,1.15,3.19,3.19,0,0,1-1.15.75,5.61,5.61,0,0,1-1.86.34c-1,.05-1.37.06-4,.06s-3,0-4-.06A5.73,5.73,0,0,1,6.1,19.8,3.27,3.27,0,0,1,5,19.05a3,3,0,0,1-.74-1.15A5.54,5.54,0,0,1,3.86,16c0-1-.06-1.37-.06-4s0-3,.06-4A5.54,5.54,0,0,1,4.21,6.1,3,3,0,0,1,5,5,3.14,3.14,0,0,1,6.1,4.2,5.73,5.73,0,0,1,8,3.86c1,0,1.37-.06,4-.06s3,0,4,.06a5.61,5.61,0,0,1,1.86.34A3.06,3.06,0,0,1,19.05,5,3.06,3.06,0,0,1,19.8,6.1,5.61,5.61,0,0,1,20.14,8c.05,1,.06,1.37.06,4S20.19,15,20.14,16ZM12,6.87A5.13,5.13,0,1,0,17.14,12,5.12,5.12,0,0,0,12,6.87Zm0,8.46A3.33,3.33,0,1,1,15.33,12,3.33,3.33,0,0,1,12,15.33Z" />
                            </svg></a>

                        <a href="#" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M22,5.8a8.49,8.49,0,0,1-2.36.64,4.13,4.13,0,0,0,1.81-2.27,8.21,8.21,0,0,1-2.61,1,4.1,4.1,0,0,0-7,3.74A11.64,11.64,0,0,1,3.39,4.62a4.16,4.16,0,0,0-.55,2.07A4.09,4.09,0,0,0,4.66,10.1,4.05,4.05,0,0,1,2.8,9.59v.05a4.1,4.1,0,0,0,3.3,4A3.93,3.93,0,0,1,5,13.81a4.9,4.9,0,0,1-.77-.07,4.11,4.11,0,0,0,3.83,2.84A8.22,8.22,0,0,1,3,18.34a7.93,7.93,0,0,1-1-.06,11.57,11.57,0,0,0,6.29,1.85A11.59,11.59,0,0,0,20,8.45c0-.17,0-.35,0-.53A8.43,8.43,0,0,0,22,5.8Z" />
                            </svg></a>

                        <a href="#" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M21.43451,14.15552a9.586,9.586,0,0,0,.21155-2.02631,9.47653,9.47653,0,0,0-9.54029-9.42254,9.11414,9.11414,0,0,0-1.62494.14178A5.53558,5.53558,0,0,0,2.00061,7.466a5.42884,5.42884,0,0,0,.75354,2.7558,10.0197,10.0197,0,0,0-.18866,1.88452,9.33889,9.33889,0,0,0,9.54028,9.25788,8.56663,8.56663,0,0,0,1.74268-.16584A5.57942,5.57942,0,0,0,16.46368,22a5.433,5.433,0,0,0,4.97083-7.84448ZM16.43964,15.9931a3.63146,3.63146,0,0,1-1.62488,1.22473,6.33963,6.33963,0,0,1-2.52033.44709,6.21683,6.21683,0,0,1-2.89764-.61176,3.733,3.733,0,0,1-1.31964-1.17779,2.574,2.574,0,0,1-.494-1.41339.88041.88041,0,0,1,.30646-.68384,1.09008,1.09008,0,0,1,.77643-.28247.94433.94433,0,0,1,.637.2127,1.793,1.793,0,0,1,.44708.65863,3.39792,3.39792,0,0,0,.49518.87256,1.78964,1.78964,0,0,0,.72955.56488,3.01435,3.01435,0,0,0,1.24872.23554,2.9217,2.9217,0,0,0,1.71985-.44708,1.33217,1.33217,0,0,0,.65979-1.13092,1.135,1.135,0,0,0-.35333-.87134,2.18491,2.18491,0,0,0-.91944-.51923c-.37616-.11774-.89538-.23553-1.53112-.37616a13.9908,13.9908,0,0,1-2.14295-.6358,3.34814,3.34814,0,0,1-1.36651-1.01312,2.47429,2.47429,0,0,1-.49512-1.57807,2.62945,2.62945,0,0,1,.54205-1.60205,3.41154,3.41154,0,0,1,1.53113-1.084,6.652,6.652,0,0,1,2.37964-.37623,6.403,6.403,0,0,1,1.88452.25843,4.07215,4.07215,0,0,1,1.31842.65979,2.91587,2.91587,0,0,1,.77765.87134,1.80281,1.80281,0,0,1,.23553.87139.96189.96189,0,0,1-.30645.70667.9912.9912,0,0,1-.7536.30646.9735.9735,0,0,1-.63575-.18866,2.38218,2.38218,0,0,1-.47113-.61176,2.93711,2.93711,0,0,0-.77758-.96631A2.37614,2.37614,0,0,0,12.0589,7.96a2.7028,2.7028,0,0,0-1.5083.37738,1.07558,1.07558,0,0,0-.56488.89539.95783.95783,0,0,0,.18866.56488,1.41851,1.41851,0,0,0,.54205.4002,2.69264,2.69264,0,0,0,.68262.25959c.23559.07092.613.16467,1.15381.28247.65979.14178,1.27276.30646,1.81475.47107a5.43,5.43,0,0,1,1.38941.6358,2.85691,2.85691,0,0,1,.89532.94226,2.8284,2.8284,0,0,1,.32935,1.3905A2.89029,2.89029,0,0,1,16.43964,15.9931Z" />
                            </svg></a>

                        <a href="#" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M22.26465,2.42773a2.04837,2.04837,0,0,0-2.07813-.32421L2.26562,9.33887a2.043,2.043,0,0,0,.1045,3.81836l3.625,1.26074,2.0205,6.68164A.998.998,0,0,0,8.134,21.352c.00775.012.01868.02093.02692.03259a.98844.98844,0,0,0,.21143.21576c.02307.01758.04516.03406.06982.04968a.98592.98592,0,0,0,.31073.13611l.01184.001.00671.00287a1.02183,1.02183,0,0,0,.20215.02051c.00653,0,.01233-.00312.0188-.00324a.99255.99255,0,0,0,.30109-.05231c.02258-.00769.04193-.02056.06384-.02984a.9931.9931,0,0,0,.20429-.11456,250.75993,250.75993,0,0,1,.15222-.12818L12.416,18.499l4.03027,3.12207a2.02322,2.02322,0,0,0,1.24121.42676A2.05413,2.05413,0,0,0,19.69531,20.415L22.958,4.39844A2.02966,2.02966,0,0,0,22.26465,2.42773ZM9.37012,14.73633a.99357.99357,0,0,0-.27246.50586l-.30951,1.504-.78406-2.59307,4.06525-2.11695ZM17.67188,20.04l-4.7627-3.68945a1.00134,1.00134,0,0,0-1.35352.11914l-.86541.9552.30584-1.48645,7.083-7.083a.99975.99975,0,0,0-1.16894-1.59375L6.74487,12.55432,3.02051,11.19141,20.999,3.999Z" />
                            </svg></a>
                    </div>
                </div>
            </div>

            <!-- partners -->
            <div class="row">
                <div class="col-12">
                    <div class="partners splide" id="partners-slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                @foreach ($images as $car)
                                    <li class="splide__slide">
                                        <a href="{{ route('showCarByImage', $car->id) }}" class="partners__img">
                                                <img src="{{ asset('storage/' . $car->main_image) }}" alt="">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end partners -->
        </div>
    </main>
    <!-- end main content -->
@endsection

@section('scripts')
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js">
    </script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.js"></script>

    <script>
        FilePond.registerPlugin(
            FilePondPluginFileValidateSize,
            FilePondPluginFileValidateType,
            FilePondPluginImageExifOrientation,
            FilePondPluginImagePreview,
            FilePondPluginImageCrop,
            FilePondPluginImageResize,
            FilePondPluginImageTransform,
            // FilePondPluginImageEdit

        );

        // Get a reference to the file input element
        const inputElement = document.querySelector('#images');
        // Create a FilePond instance
        const pond = FilePond.create(inputElement, {

            allowFileSizeValidation: true,
            labelFileWaitingForSizeValidation: 'انتظر حتى يتم التحقق من حجم الملف',
            labelFileSizeNotAvailable: 'حجم الملف غير متوفر',
            labelFileLoading: 'جاري التحميل',
            labelFileLoadError: 'حدث خطأ أثناء التحميل',
            labelFileProcessing: 'جاري التحميل',
            labelFileProcessingComplete: 'تم التحميل',
            labelFileProcessingAborted: 'تم إلغاء التحميل',
            labelMaxFileSizeExceeded: 'حجم الملف كبير جدا',
            maxFileSize: '100MB',
            minFileSize: '1b',
            labelMinFileSizeNotMet: 'حجم الملف صغير جدا',
            // acceptedFileTypes : ['audio/*'], 
            labelFileTypeNotAllowed: 'نوع الملف يجب ان يكون mp3 او wav',
        });


        FilePond.setOptions({
            server: {
                process: '/upload',
                revert: "{{-- route('revertFile') --}}",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }
        });
    </script>


    <script>
        const currentYear = new Date().getFullYear();
        document.getElementById('year-input').setAttribute('max', currentYear);
    </script>
    <script>
        const fileInput = document.querySelector('.sign__input');
        const imagePreviewContainer = document.querySelector('.image-preview-container');

        fileInput.addEventListener('change', handleFileUpload);

        function handleFileUpload(event) {
            imagePreviewContainer.innerHTML = ''; // Clear existing previews

            const files = event.target.files;
            for (let i = 0; i < Math.min(files.length, 6); i++) {
                const imagePreview = document.createElement('div');
                imagePreview.className = 'image-preview';
                const image = document.createElement('img');
                image.src = URL.createObjectURL(files[i]);
                imagePreview.appendChild(image);
                imagePreviewContainer.appendChild(imagePreview);
            }
        }
    </script>
@endsection
