@php
    $id = $id ?? $name;
    $placeholder = $placeholder ?? $name;
    $labelClasses = $labelClasses ?? '';
    $classes = $classes ?? '';
    $label = $label ?? ucfirst($name);
    $label = $label ?? ucfirst($name);
    if ($type == 'dateTimeLocal'){
        $type = 'datetime-local';
    }
@endphp

<label class="form-label {{ $labelClasses  }}" for="{{ $name }}">
    {{ $label }}
    @if(isset($required) && $required)
        <span class="text-danger">*</span>
    @endif
</label>

{{ $preInput ?? null }}

<input
    type="{{ $type ?? 'text' }}"
    value="{{ $value ?? null }}"
    name="{{ $name }}"
    id="{{ $id }}"
    placeholder="{{ $placeholder }}"
    class="form-control {{ $classes ?? '' }}"

    @if(isset($required) && $required)
        required
    @endif

    @if(isset($disabled) && $disabled)
        disabled
    @endif

    @if(isset($extraAttribs) && is_array($extraAttribs))
        @foreach($extraAttribs as $attribute => $value)
            {{ $attribute }} = "{{ $value }}"
        @endforeach
    @endif
>
{{ $afterInput ?? null }}
