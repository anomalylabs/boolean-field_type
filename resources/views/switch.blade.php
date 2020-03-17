{{-- {{ assets('scripts.js', 'public::vendor/anomaly/field_type/boolean/js/switch.js') }} --}}

<boolean-field-type-switch 
    id="{{ $fieldType->input_name }}"
    name="{{ $fieldType->input_name }}"

    class="
        switch__checkbox
        switch__checkbox--on-{{ $fieldType->config('on_color') }}
        switch__checkbox--off-{{ $fieldType->config('off_color') }}"
    {{ $fieldType->value ? 'checked' : '' }}
    {{ html_attributes($fieldType->attributes) }}></boolean-field-type-switch>
