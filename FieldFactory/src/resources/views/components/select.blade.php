@php
    $id = $id ?? $name;
    $placeholder = $placeholder ?? $name;
    $labelClasses = $labelClasses ?? '';
    $classes = $classes ?? '';
    $label = $label ?? ucfirst($name);
@endphp

<label class="form-label {{ $labelClasses  }}" for="{{ $name }}">
    {{ $label }}
    @if(isset($required) && $required)
        <span class="text-danger">*</span>
    @endif
</label>

{{ $preInput ?? null }}

<select
    @if($type == 'multiselect')
        name="{{ $name }}[]"
    @else
        name="{{ $name }}"
    @endif

    id="{{ $id }}"
    class="form-control {{ $classes ?? '' }}"

    @if($type == 'multiselect')
        multiple
    @endif

    @if(isset($required) && $required)
        required
    @endif

    @if(isset($disabled) && $disabled)
        disabled
    @endif

    @if(isset($extraAttribs) && is_array($extraAttribs))
        @foreach($extraAttribs as $attribute => $attrValue)
            {{ $attribute }} = "{{ $attrValue }}"
        @endforeach
    @endif
>
    @if(isset($options) && is_array($options))
        @foreach($options as $key => $optValue)
            @if(is_string($optValue))
                <option
                    value="{{ $key }}"
                    @if(isset($value) && is_array($value) && in_array($key, $value))
                        selected
                    @elseif(isset($value) && $value == $key)
                        selected
                    @endif
                >{{ $optValue }}</option>
            @elseif(is_array($optValue) && isset($optValue['label']) && isset($optValue['value']))
                <option
                    value="{{ $optValue['value'] }}"
                    @if(isset($value) && is_array($value) && in_array($optValue, $value))
                        selected
                    @elseif(isset($value) && $value == $optValue['value'])
                        selected
                    @endif
                >{{ $optValue['label'] }}</option>
            @endif
        @endforeach
    @endif
</select>

{{ $afterInput ?? null }}
