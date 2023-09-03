<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-12">
    <!--begin::General options-->
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <div class="card-title">
                <h2>Add Post</h2>
            </div>
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">

            <div class="row mb-2">
                <!--begin::Col-->
                <div class="col-lg-12">

                    {{-- Name Arabic English --}}

                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Input-->
                        <div class="col-lg-6">
                            <x-form-input col="12" title="User" type="select" name="user_id"
                                :var="$users" />
                        </div>
                        <!--end::Input-->

                        <!--begin::Input-->
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">
                                    Ad Type
                                </label>
                                <div class="col-lg-8">
                                    <select
                                        name="post_type"class="form-control form-control-lg form-control-solid mb-3 mb-lg-0">
                                        <option value="" disabled selected>Select Ad Type</option>
                                        <option value="1" @selected(old('post_type') == 1)>Car</option>
                                        <option value="0" @selected(old('post_type') == 0)>Mechanical Item</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--end::Input-->

                        <!--begin::Input-->
                        <div class="col-lg-6">
                            <x-form-input col="12" rows="10" title="Description" type="desc"
                                name="description" :var="$car" />
                        </div>
                        <!--end::Input-->
                        <!--begin::Input-->
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">
                                    Select Year
                                </label>
                                <div class="col-lg-8">
                                    <select
                                        name="year" id="year-input" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0">
                                        <option value="" disabled selected>Select Year</option>
                                        <?php
                                        $currentYear = date('Y');
                                        $selected = old('year') == $currentYear ? 'selected' : '';
                                        for ($year = $currentYear; $year >= 1912; $year--) {
                                            echo "<option value='$year' $selected>$year</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--end::Input-->

                        <!--begin::Input-->
                        <div class="col-lg-6">
                            <x-form-input col="12" title="Model" type="select" name="car_model_id"
                                :var="$models" />
                        </div>
                        <!--end::Input-->

                        <!--begin::Input-->
                        <div class="col-lg-6">
                            <x-form-input col="12" title="Brand" type="select" name="brand_id"
                                :var="$brands" />
                        </div>
                        <!--end::Input-->

                        <!--begin::Input-->
                        <div class="col-lg-6">
                            <x-form-input col="12" title="Generation" required="" type="select"
                                name="generation_id" :var="$generation" />
                        </div>
                        <!--end::Input-->

                        <!--begin::Input-->
                        <div class="col-lg-6">
                            <x-form-input col="12" title="Car Type" required="" type="select"
                                name="car_type_id" :var="$carTypes" />
                        </div>
                        <!--end::Input-->

                        <!--begin::Input-->
                        <div class="col-lg-6">
                            <x-form-input col="12" title="Price $" type="number" name="price"
                                :var="$car" />
                        </div>
                        <!--end::Input-->

                        <!--begin::Input-->
                        <div class="col-lg-6">
                            <x-form-input col="12" title="Number Of Owners" type="number" name="number_of_owners"
                                :var="$car" />
                        </div>
                        <!--end::Input-->

                        <!--begin::Input-->
                        <div class="col-lg-6">
                            <x-form-input col="12" title="Milage" type="number" name="milage"
                                :var="$car" />
                        </div>
                        <!--end::Input-->

                        <!--begin::Input-->
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">
                                    Select Fuel
                                </label>
                                <div class="col-lg-8">
                                    <select name="fuel"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0">
                                        <option value="" disabled selected>Select fuel</option>
                                        <option value="Diesel" @selected(old('fuel') == 'Diesel')>Diesel</option>
                                        <option value="Essence" @selected(old('fuel') == 'Essence')>Gasoline</option>
                                        <option value="Electric" @selected(old('fuel') == 'Electric')>Electric</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--end::Input-->

                        <!--begin::Input-->
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">
                                    Select Gearbox
                                </label>
                                <div class="col-lg-8">
                                    <select name="gearbox" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0">
                                        <option value="" disabled selected>Select Gearbox</option>
                                        <option value="manual" @selected(old('gearbox') == 'manual')>Manual</option>
                                        <option value="automatic" @selected(old('gearbox') == 'automatic')>Automatic</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--end::Input-->

                        <!--begin::Input-->
                        <div class="col-lg-6">
                            <x-form-input col="12" title="Inner Color" type="select" name="color_id_in"
                                :var="$carColors" />
                        </div>
                        <!--end::Input-->

                        <!--begin::Input-->
                        <div class="col-lg-6">
                            <x-form-input col="12" title="Outter Color" type="select" name="color_id_out"
                                :var="$carColors" />
                        </div>
                        <!--end::Input-->


                        <!--begin::Input-->
                        <div class="col-lg-6">
                            <x-form-input col="12" title="Number Of Doors" type="number"
                                name="number_of_doors" :var="$car" />
                        </div>
                        <!--end::Input-->


                        <!--begin::Input-->
                        <div class="col-lg-6">
                            <x-form-input col="12" title="Distance Per Liter" type="number"
                                name="walk_for_liter" :var="$car" />
                        </div>
                        <!--end::Input-->


                        <!--begin::Input-->
                        <div class="col-lg-6">
                            <x-form-input col="12" title="Number Of Seats" type="number"
                                name="seats" :var="$car" />
                        </div>
                        <!--end::Input-->



                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">
                                    Force Points
                                </label>
                                <div class="col-lg-8">
                                    @foreach ($amenities as $key => $amenity)
                                        <div style="display: flex; align-items: center;">

                                            <input type="checkbox" name="amenities[]"
                                                value="amenity{{ $key }}" id="amenity{{ $key }}">
                                            <label for="amenity{{ $key }}"> {{ $amenity->name }}</label>
                                            <img style="width: 20px; height: 20px; margin-left: 5px;"
                                                src="{{ asset('storage/' . $amenity->icon) }}" alt="">
                                        </div>
                                    @endforeach
                                    @error('amenities')
                                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="sign__group">
                                <input id="images" type="file" name="images[]" class="custom-file-input"
                                    multiple>
                            </div>
                        </div>

                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Col-->
            </div>

        </div>
        <!--end::Card header-->
    </div>
    <!--end::General options-->


    <div class="d-flex justify-content-center">
        <!--end::Button-->
        <!--begin::Button-->
        <button type="submit" class="btn btn-dark">
            <span class="indicator-label">{{ __('dashboard.save') }} </span>
            <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
        <!--end::Button-->
    </div>
</div>
<!--end::Main column-->
