@php
    assets('scripts.js')->add('public::vendor/anomaly/field_type/boolean/js/index.js');
@endphp

<boolean-field-type {!! html_attributes($fieldType->attributes()) !!}/>
