@php
    assets('scripts.js')->add('public::vendor/anomaly/field_type/boolean/js/index.js');
@endphp

{{-- <boolean-field-type 
    id="{{ $fieldType->input_name }}"
    name="{{ $fieldType->input_name }}"

    class="
        switch__checkbox
        switch__checkbox--on-{{ $fieldType->config('on_color') }}
        switch__checkbox--off-{{ $fieldType->config('off_color') }}"
    {{ $fieldType->value ? 'checked' : '' }}
    {{ html_attributes($fieldType->attributes) }}></boolean-field-type> --}}

<boolean-field-type :value="false"
    color="#82C7EB"
    :sync="true"
    :labels="true"/>
