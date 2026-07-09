@php
    $id = $id ?? $name;
    $placeholder = $placeholder ?? $name;
    $labelClasses = $labelClasses ?? '';
    $classes = $classes ?? '';
    $label = $label ?? ucfirst($name);
@endphp

{{ $preInput ?? null }}

<button
    name="{{ $name }}"
    id="{{ $id }}"
    value="{{ $value ?? null }}"
    type="{{ $type ?? 'text' }}"
    class="form-control {{ $classes ?? '' }}"
    @if(isset($disabled) && $disabled)
        disabled
    @endif
    @if(isset($extraAttribs) && is_array($extraAttribs))
        @foreach($extraAttribs as $attribute => $value)
            {{ $attribute }} = "{{ $value }}"
        @endforeach
    @endif
>{{ $label }}</button>

{{ $afterInput ?? null }}
