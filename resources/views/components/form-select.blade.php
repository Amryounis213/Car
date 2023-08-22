<div class="col-lg-{{ $col }}">
    <div class="form-group row">
        <label class="col-lg-2 col-form-label required fw-bold fs-6">
            {{ $title ?? " " }}
        </label>
        <div class="col-lg-10">
            @if ($type == 'text')
                <input autocomplete="off" type="{{ $type }}" name="{{ $name }}"
                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name"
                    placeholder="{{ $title }}" value="{{ old($name, $var->$name) }}">
            @elseif ($type == 'select')
                <select name="{{ $name }}"
                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name">
                    @foreach($var as $city)
                        <option value="{{ $city->id }}" {{ old($name, $var->$name) == $city->id ? 'selected' : '' }}>
                            {{ $city->name }}
                        </option>
                    @endforeach
                </select>
            @else
                <textarea autocomplete="off" name="{{ $name }}"
                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name" placeholder="{{ $title ?? 'Desc' }}">{{ old($name, $var->$name) }}</textarea>
            @endif

            <div class="fv-plugins-message-container invalid-feedback"></div>
            @error($name)
                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                </div>
            @enderror
        </div>
    </div>
</div>
