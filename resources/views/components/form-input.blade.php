<div class="col-lg-{{ $col ?? 6 }}">

    <div class="form-group row">
        <label class="col-lg-{{ $nameInputDistance ?? 2 }} col-form-label {{ $required ?? 'required' }} fw-bold fs-6">
            {{ $title ?? ' ' }}
        </label>
        <div class="col-lg-8">
            @if ($type == 'text')
                <input autocomplete="off" type="{{ $type }}" name="{{ $name }}"
                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name"
                    placeholder="{{ $title ?? ' ' }}" value="{{ old($name, $var->$name) }}">
            @elseif ($type == 'select')
                <select name="{{ $name }}" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0">
                    @foreach ($var as $v)
                        <option value="{{ $v->id }}" {{ old($name, $v->id) == $v->id ? 'selected' : '' }}>
                            {{ $v->name ?? $v->username }}
                        </option>
                    @endforeach
                </select>
            @elseif ($type == 'desc')
                <textarea id="{{ $id ?? ' ' }}" rows="{{ $rows ?? 20 }}" autocomplete="off" name="{{ $name }}"
                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name" placeholder="{{ $title ?? 'Desc' }}">{{ old($name, $var->$name) }}</textarea>
            @elseif ($type == 'password')
                <input autocomplete="off" type="password" name="{{ $name }}"
                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name"
                    placeholder="{{ $title ?? ' ' }}" value="{{ old($name, $var->$name) }}">
            @elseif ($type == 'password')
                <input autocomplete="off" type="{{ $type }}" name="{{ $name }}"
                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name"
                    placeholder="{{ $title ?? ' ' }}">
            @else
                <input autocomplete="off" type="{{ $type }}" name="{{ $name }}"
                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 name"
                    placeholder="{{ $title ?? ' ' }}" value="{{ old($name, $var->$name) ?? ' ' }}">
            @endif

            <div class="fv-plugins-message-container invalid-feedback"></div>
            @error($name)
                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                </div>
            @enderror
        </div>
    </div>
</div>
