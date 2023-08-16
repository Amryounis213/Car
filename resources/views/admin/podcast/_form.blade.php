 <!--begin::Aside column-->
 <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
    <!--begin::Thumbnail settings-->
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2 class="required">الصورة </h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body text-center pt-0">
            <!--begin::Image input-->
            <!--begin::Image input placeholder-->
            <style>
                @if(!$podcast->image)
                .image-input-placeholder {
                    background-image: url('https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/files/pic.jpg');
                }
                @else
                .image-input-placeholder {
                    background-image: url('{{$podcast->image_path}}');
                }
                @endif

                [data-theme="dark"] .image-input-placeholder {
                    background-image: url('https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/files/blank-image-dark.svg');
                }
            </style>
            <!--end::Image input placeholder-->
            <!--begin::Image input-->
            <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                data-kt-image-input="true">
                <!--begin::Preview existing avatar-->
                <div class="image-input-wrapper w-150px h-150px"></div>
                <!--end::Preview existing avatar-->
                <!--begin::Label-->
                <label
                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                    title="تغيير الصورة">
                    <!--begin::Icon-->
                    <i class="fa-solid fa-pencil fs-7"></i>
                    <!--end::Icon-->
                    <!--begin::Inputs-->
                    <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                    <input type="hidden" name="avatar_remove" />
                    <!--end::Inputs-->
                </label>
                <!--end::Label-->
                <!--begin::Cancel-->
                <span
                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                    title="الغاء الصورة">
                    <i class="fa-sharp fa-solid fa-xmark fs-2"></i>
                </span>
                <!--end::Cancel-->
                <!--begin::Remove-->
                <span
                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                    title="Remove avatar">
                    <i class="fa-sharp fa-solid fa-xmark fs-2"></i>
                </span>
                <!--end::Remove-->
            </div>

            @error('image')
            <div class="fv-plugins-message-container invalid-feedback">{{$message}}</div>
            @enderror
            <!--end::Image input-->
            <!--begin::Description-->
            <div class="text-muted fs-7">تعيين الصورة المصغرة للفئة. تقبل فقط ملفات الصور * .png و *
                .jpg و * .jpeg
            </div>
            <!--end::Description-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Thumbnail settings-->
    <!--begin::Status-->
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2>المنطقة الزمنية</h2>
            </div>
            <!--end::Card title-->
            @error('time_zone')
            <div class="fv-plugins-message-container invalid-feedback">{{$message}}</div>
            @enderror

           
            <!--begin::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Select2-->
            <select name="time_zone" class="form-select mb-2" data-control="select2" data-hide-search="true"
                data-placeholder="Select an option" id="kt_ecommerce_add_category_status_select">
                <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp;
                    Canada)</option>
                <option value="Central Time (US &amp; Canada)">(GMT-06:00) Central Time (US &amp;
                    Canada)</option>
                <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp;
                    Canada)</option>
                <option value="" disabled="disabled">-------------</option>
                <option value="International Date Line West">(GMT-12:00) International Date Line
                    West</option>
                <option value="American Samoa">(GMT-11:00) American Samoa</option>
                <option value="Midway Island">(GMT-11:00) Midway Island</option>
                <option value="Hawaii">(GMT-10:00) Hawaii</option>
                <option value="Alaska">(GMT-09:00) Alaska</option>
                <option value="Tijuana">(GMT-08:00) Tijuana</option>
                <option value="Arizona">(GMT-07:00) Arizona</option>
                <option value="Chihuahua">(GMT-07:00) Chihuahua</option>
                <option value="Mazatlan">(GMT-07:00) Mazatlan</option>
                <option value="Central America">(GMT-06:00) Central America</option>
                <option value="Guadalajara">(GMT-06:00) Guadalajara</option>
                <option value="Mexico City">(GMT-06:00) Mexico City</option>
                <option value="Monterrey">(GMT-06:00) Monterrey</option>
                <option value="Saskatchewan">(GMT-06:00) Saskatchewan</option>
                <option value="Bogota">(GMT-05:00) Bogota</option>
                <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                <option value="Lima">(GMT-05:00) Lima</option>
                <option value="Quito">(GMT-05:00) Quito</option>
                <option value="Atlantic Time (Canada)">(GMT-04:00) Atlantic Time (Canada)</option>
                <option value="Caracas">(GMT-04:00) Caracas</option>
                <option value="Georgetown">(GMT-04:00) Georgetown</option>
                <option value="La Paz">(GMT-04:00) La Paz</option>
                <option value="Puerto Rico">(GMT-04:00) Puerto Rico</option>
                <option value="Santiago">(GMT-04:00) Santiago</option>
                <option value="Newfoundland">(GMT-03:30) Newfoundland</option>
                <option value="Brasilia">(GMT-03:00) Brasilia</option>
                <option value="Buenos Aires">(GMT-03:00) Buenos Aires</option>
                <option value="Greenland">(GMT-03:00) Greenland</option>
                <option value="Montevideo">(GMT-03:00) Montevideo</option>
                <option value="Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
                <option value="Azores">(GMT-01:00) Azores</option>
                <option value="Cape Verde Is.">(GMT-01:00) Cape Verde Is.</option>
                <option value="Casablanca">(GMT+00:00) Casablanca</option>
                <option value="Dublin">(GMT+00:00) Dublin</option>
                <option value="Edinburgh">(GMT+00:00) Edinburgh</option>
                <option value="Lisbon">(GMT+00:00) Lisbon</option>
                <option value="London">(GMT+00:00) London</option>
                <option value="Monrovia">(GMT+00:00) Monrovia</option>
                <option value="UTC">(GMT+00:00) UTC</option>
                <option value="Amsterdam">(GMT+01:00) Amsterdam</option>
                <option value="Belgrade">(GMT+01:00) Belgrade</option>
                <option value="Berlin">(GMT+01:00) Berlin</option>
                <option value="Bern">(GMT+01:00) Bern</option>
                <option value="Bratislava">(GMT+01:00) Bratislava</option>
                <option value="Brussels">(GMT+01:00) Brussels</option>
                <option value="Budapest">(GMT+01:00) Budapest</option>
                <option value="Copenhagen">(GMT+01:00) Copenhagen</option>
                <option value="Ljubljana">(GMT+01:00) Ljubljana</option>
                <option value="Madrid">(GMT+01:00) Madrid</option>
                <option value="Paris">(GMT+01:00) Paris</option>
                <option value="Prague">(GMT+01:00) Prague</option>
                <option value="Rome">(GMT+01:00) Rome</option>
                <option value="Sarajevo">(GMT+01:00) Sarajevo</option>
                <option value="Skopje">(GMT+01:00) Skopje</option>
                <option value="Stockholm">(GMT+01:00) Stockholm</option>
                <option value="Vienna">(GMT+01:00) Vienna</option>
                <option value="Warsaw">(GMT+01:00) Warsaw</option>
                <option value="West Central Africa">(GMT+01:00) West Central Africa</option>
                <option value="Zagreb">(GMT+01:00) Zagreb</option>
                <option value="Zurich">(GMT+01:00) Zurich</option>
                <option value="Athens">(GMT+02:00) Athens</option>
                <option value="Bucharest">(GMT+02:00) Bucharest</option>
                <option value="Cairo">(GMT+02:00) Cairo</option>
                <option value="Harare">(GMT+02:00) Harare</option>
                <option value="Helsinki">(GMT+02:00) Helsinki</option>
                <option value="Jerusalem">(GMT+02:00) Jerusalem</option>
                <option value="Kaliningrad">(GMT+02:00) Kaliningrad</option>
                <option value="Kyiv">(GMT+02:00) Kyiv</option>
                <option value="Pretoria">(GMT+02:00) Pretoria</option>
                <option value="Riga">(GMT+02:00) Riga</option>
                <option value="Sofia">(GMT+02:00) Sofia</option>
                <option value="Tallinn">(GMT+02:00) Tallinn</option>
                <option value="Vilnius">(GMT+02:00) Vilnius</option>
                <option value="Baghdad">(GMT+03:00) Baghdad</option>
                <option value="Istanbul">(GMT+03:00) Istanbul</option>
                <option value="Kuwait">(GMT+03:00) Kuwait</option>
                <option value="Minsk">(GMT+03:00) Minsk</option>
                <option value="Moscow">(GMT+03:00) Moscow</option>
                <option value="Nairobi">(GMT+03:00) Nairobi</option>
                <option value="Riyadh">(GMT+03:00) Riyadh</option>
                <option value="St. Petersburg">(GMT+03:00) St. Petersburg</option>
                <option value="Volgograd">(GMT+03:00) Volgograd</option>
                <option value="Tehran">(GMT+03:30) Tehran</option>
                <option value="Abu Dhabi">(GMT+04:00) Abu Dhabi</option>
                <option value="Baku">(GMT+04:00) Baku</option>
                <option value="Muscat">(GMT+04:00) Muscat</option>
                <option value="Samara">(GMT+04:00) Samara</option>
                <option value="Tbilisi">(GMT+04:00) Tbilisi</option>
                <option value="Yerevan">(GMT+04:00) Yerevan</option>
                <option value="Kabul">(GMT+04:30) Kabul</option>
                <option value="Ekaterinburg">(GMT+05:00) Ekaterinburg</option>
                <option value="Islamabad">(GMT+05:00) Islamabad</option>
                <option value="Karachi">(GMT+05:00) Karachi</option>
                <option value="Tashkent">(GMT+05:00) Tashkent</option>
                <option value="Chennai">(GMT+05:30) Chennai</option>
                <option value="Kolkata">(GMT+05:30) Kolkata</option>
                <option value="Mumbai">(GMT+05:30) Mumbai</option>
                <option value="New Delhi">(GMT+05:30) New Delhi</option>
                <option value="Sri Jayawardenepura">(GMT+05:30) Sri Jayawardenepura</option>
                <option value="Kathmandu">(GMT+05:45) Kathmandu</option>
                <option value="Almaty">(GMT+06:00) Almaty</option>
                <option value="Astana">(GMT+06:00) Astana</option>
                <option value="Dhaka">(GMT+06:00) Dhaka</option>
                <option value="Urumqi">(GMT+06:00) Urumqi</option>
                <option value="Rangoon">(GMT+06:30) Rangoon</option>
                <option value="Bangkok">(GMT+07:00) Bangkok</option>
                <option value="Hanoi">(GMT+07:00) Hanoi</option>
                <option value="Jakarta">(GMT+07:00) Jakarta</option>
                <option value="Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
                <option value="Novosibirsk">(GMT+07:00) Novosibirsk</option>
                <option value="Beijing">(GMT+08:00) Beijing</option>
                <option value="Chongqing">(GMT+08:00) Chongqing</option>
                <option value="Hong Kong">(GMT+08:00) Hong Kong</option>
                <option value="Irkutsk">(GMT+08:00) Irkutsk</option>
                <option value="Kuala Lumpur">(GMT+08:00) Kuala Lumpur</option>
                <option value="Perth">(GMT+08:00) Perth</option>
                <option value="Singapore">(GMT+08:00) Singapore</option>
                <option value="Taipei">(GMT+08:00) Taipei</option>
                <option value="Ulaanbaatar">(GMT+08:00) Ulaanbaatar</option>
                <option value="Osaka">(GMT+09:00) Osaka</option>
                <option value="Sapporo">(GMT+09:00) Sapporo</option>
                <option value="Seoul">(GMT+09:00) Seoul</option>
                <option value="Tokyo">(GMT+09:00) Tokyo</option>
                <option value="Yakutsk">(GMT+09:00) Yakutsk</option>
                <option value="Adelaide">(GMT+09:30) Adelaide</option>
                <option value="Darwin">(GMT+09:30) Darwin</option>
                <option value="Brisbane">(GMT+10:00) Brisbane</option>
                <option value="Canberra">(GMT+10:00) Canberra</option>
                <option value="Guam">(GMT+10:00) Guam</option>
                <option value="Hobart">(GMT+10:00) Hobart</option>
                <option value="Melbourne">(GMT+10:00) Melbourne</option>
                <option value="Port Moresby">(GMT+10:00) Port Moresby</option>
                <option value="Sydney">(GMT+10:00) Sydney</option>
                <option value="Vladivostok">(GMT+10:00) Vladivostok</option>
                <option value="Magadan">(GMT+11:00) Magadan</option>
                <option value="New Caledonia">(GMT+11:00) New Caledonia</option>
                <option value="Solomon Is.">(GMT+11:00) Solomon Is.</option>
                <option value="Srednekolymsk">(GMT+11:00) Srednekolymsk</option>
                <option value="Auckland">(GMT+12:00) Auckland</option>
                <option value="Fiji">(GMT+12:00) Fiji</option>
                <option value="Kamchatka">(GMT+12:00) Kamchatka</option>
                <option value="Marshall Is.">(GMT+12:00) Marshall Is.</option>
                <option value="Wellington">(GMT+12:00) Wellington</option>
                <option value="Chatham Is.">(GMT+12:45) Chatham Is.</option>
                <option value="Nuku'alofa">(GMT+13:00) Nuku'alofa</option>
                <option value="Samoa">(GMT+13:00) Samoa</option>
                <option value="Tokelau Is.">(GMT+13:00) Tokelau Is.</option>
            </select>
            </select>
            <!--end::Select2-->
           
           
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Status-->

</div>
<!--end::Aside column-->
<!--begin::Main column-->
<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
    <!--begin::General options-->
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <div class="card-title">
                <h2>عام</h2>
            </div>
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Input group-->
            <div class="mb-10 fv-row">
                <!--begin::Label-->
                <label class="required form-label">عنوان البرنامج </label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" name="title" value="{{old('title' , $podcast->title)}}" class="form-control mb-2"
                    placeholder="ادخل عنوانا مميزا" />
                <!--end::Input-->
                @error('title')
                <div class="fv-plugins-message-container invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <!--begin::Input group-->

             <!--begin::Input group-->
             <div class="mb-10 fv-row">
                <!--begin::Label-->
                <label class="required form-label">وصف البرنامج </label>
                <!--end::Label-->
                <!--begin::Input-->
                <textarea type="text" name="description" class="form-control mb-2"
                    placeholder="ادخل ووصفا مميزا">{{old('description' , $podcast->description)}}</textarea>
                <!--end::Input-->
                @error('description')
                <div class="fv-plugins-message-container invalid-feedback">{{$message}}</div>
                @enderror

            </div>
            <!--begin::Input group-->

            <div class="fv-row mb-10">
                <!--begin::Label-->
                <label class="fs-6 fw-semibold mb-2">نوع البرنامج</label>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                        title=""></i></label>
                <!--End::Label-->
                <!--begin::Row-->
                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9"
                    data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Option-->
                        <label
                            class="btn btn-outline btn-outline-dashed btn-active-light-primary @if(old('type' , $podcast->type) == 'episodic') active @endif d-flex text-start p-6"
                            data-kt-button="true">
                            <!--begin::Radio-->
                            <span
                                class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                <input class="form-check-input" type="radio"
                                    name="type" value="episodic" @checked(old('type'  , $podcast->type) == 'episodic') />
                            </span>
                            <!--end::Radio-->
                            <!--begin::Info-->
                            <span class="ms-5">
                                <span class="fs-4 fw-bold text-gray-800 d-block">عرض</span>
                            </span>
                            <!--end::Info-->
                        </label>
                        <!--end::Option-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Option-->
                        <label
                            class="btn btn-outline btn-outline-dashed btn-active-light-primary  @if(old('type') == 'serial') active @endif d-flex text-start p-6"
                            data-kt-button="true">
                            <!--begin::Radio-->
                            <span
                                class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                <input class="form-check-input" type="radio"
                                    name="type" value="serial"  @checked(old('type') == 'serial')  />
                            </span>
                            <!--end::Radio-->
                            <!--begin::Info-->
                            <span class="ms-5">
                                <span class="fs-4 fw-bold text-gray-800 d-block">تسلسل</span>
                            </span>
                            <!--end::Info-->
                        </label>
                        <!--end::Option-->
                    </div>
                    <!--end::Col-->
                    @error('type')
                    <div class="fv-plugins-message-container invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <!--end::Row-->
            </div>
            <!--end::Input group-->
         
        </div>
        <!--end::Card header-->
    </div>
    <!--end::General options-->
    <!--begin::Meta options-->
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <div class="card-title">
                <h2>معلومات اخرى</h2>
            </div>
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <div class="d-flex flex-wrap gap-5">
                <!--begin::Input group-->
                <div class="fv-row w-100 flex-md-root fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="required form-label">التصنيف الأساسي</label>
                    <!--end::Label-->
                    <!--begin::Select2-->
                    <select name="main_category_id" class="form-select mb-2 " >
                        <option>اختر تصنيفا اساسيا</option>
                       @foreach ($categories as $category)
                            <option value="{{$category->id}}" @selected(old('main_category_id' , $podcast->main_category_id )== $category->id)>{{$category->name}}</option>
                       @endforeach
                       
                    </select>
                    <!--end::Select2-->
                    <!--begin::Description-->
                    <!--end::Description-->
                    @error('main_category_id')
                    <div class="fv-plugins-message-container invalid-feedback">{{$message}}</div>
                    @enderror

                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
               
                <div class="fv-row w-100 flex-md-root">
                    <!--begin::Label-->
                    <label class="required form-label">التصنيف الثانوي</label>
                    <!--end::Label-->
                    <select name="sub_category_id" class="form-select mb-2 ">
                        <option>اختر تصنيفا اساسيا</option>
                       @foreach ($categories as $s_category)
                       <option value="{{$s_category->id}}"  @selected(old('sub_category_id' , $podcast->sub_category_id) == $s_category->id )>{{$s_category->name}}</option>
                       @endforeach
                    
                    </select>
                    <!--end::Input-->
                    @error('sub_category_id')
                    <div class="fv-plugins-message-container invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <!--end::Input group-->
            </div>
            <!--begin::Input group-->

            <div class="d-flex flex-wrap gap-5">
                <!--begin::Input group-->
                <div class="fv-row w-100 flex-md-root fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class=" required form-label">المؤلف</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <input name="author" value="{{old('author' , $podcast->author)}}" name="author" class="form-control mb-2" />
                    <!--end::Editor-->
                    <!--begin::Description-->
                    @error('author')
                    <div class="fv-plugins-message-container invalid-feedback">{{$message}}</div>
                    @enderror
                    <!--end::Description-->
                </div>
                <!--end::Input group-->

                <div class="fv-row w-100 flex-md-root fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="form-label">حقوق النشر</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <input name="copy_right" value="{{old('copy_right' , $podcast->copy_right)}}" placeholder="e.g. © 2022 Podcasting Co."
                        class="form-control mb-2" />
                    <!--end::Editor-->
                </div>
            </div>

            <!--end::Input group-->
            <!--begin::Input group-->
          
         
            <div class="d-flex flex-wrap gap-5">
                <div class="fv-row w-100 flex-md-root fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="form-label">الكلمات المفتاحية</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <input id="kt_ecommerce_add_category_meta_keywords"
                        name="key_words"
                        class="form-control mb-2" value="{{$podcast->key_words != null ? $podcast->key_words : ''}}" />
                    <!--end::Editor-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7">قم بتعيين قائمة بالكلمات الأساسية التي ترتبط بها
                        الفئة. افصل بين الكلمات {{ __('dashboard.mainPage') }} بإضافة <code>فاصلة</code> او
                        <code>enter</code>بين الكلمة والاخرى
                    </div>
                    <!--end::Description-->
                </div>

                <div class="fv-row w-100 flex-md-root fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="form-label">الموقع الالكتروني</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <input  name="website" value="{{old('website' , $podcast->website)}}" placeholder="e.g http://mypodcast.fm"
                        class="form-control mb-2" />
                    <!--end::Editor-->

                </div>
            </div>
            <!--end::Input group-->
            <div class="d-flex flex-wrap gap-5">
              

                <div class="fv-row w-100 flex-md-root fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="form-label">اللغة</label>

                    <!--end::Label-->
                    <select name="language" class="form-select mb-2 " name="tax">
                        <option>اختر اللغة</option>
                       @foreach ($langs as $langs)
                       <option value="{{$langs->id}}" @selected(old('language' , $podcast->language )== $langs->id)>{{$langs->name}}</option>
                       @endforeach
                    
                    </select>
                    @error('language')
                    <div class="fv-plugins-message-container invalid-feedback">{{$message}}</div>
                    @enderror
                    <!--end::Description-->
                </div>
            </div>

            <div class="d-flex flex-wrap gap-5">
                <!--begin::Input group-->
                <div class="fv-row w-100 flex-md-root fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="required form-label">البريد الالكتروني للمالك</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <input name="owner_email" value="{{old('owner_email' , $podcast->owner_email)}}" class="form-control mb-2" />
                    <!--end::Editor-->
                    <!--begin::Description-->
                    @error('owner_email')
                    <div class="fv-plugins-message-container invalid-feedback">{{$message}}</div>
                    @enderror
                    <!--end::Description-->
                </div>
                <!--end::Input group-->

                <div class="fv-row w-100 flex-md-root fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="required form-label">اسم المالك</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <input name="owner_name" value="{{old('owner_name' , $podcast->owner_name)}}" class="form-control mb-2" />
                    <!--end::Editor-->
                    <!--begin::Description-->
                    @error('owner_name')
                    <div class="fv-plugins-message-container invalid-feedback">{{$message}}</div>
                    @enderror
                    <!--end::Description-->
                </div>

              
            </div>

            <div class="d-flex flex-wrap gap-5 mt-5">
                <div class="fv-row w-100 flex-md-root fv-plugins-icon-container">
                   
                <!--begin::Editor-->
                <input type="checkbox" name="explicit" @checked(old('explicit' , $podcast->explicit == 1)) value="1" >
                <!--end::Editor-->

                 <!--begin::Label-->
                 <label class="form-label">مشاركة محتوى حساس </label>
                 <!--end::Label-->
                </div>

               
            </div>

        </div>
        <!--end::Card header-->
    </div>
    <!--end::Meta options-->

    <div class="d-flex justify-content-center">
        <!--end::Button-->
        <!--begin::Button-->
        <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-dark">
            <span class="indicator-label">حفظ البرنامج</span>
            <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
        <!--end::Button-->
    </div>
</div>
<!--end::Main column-->