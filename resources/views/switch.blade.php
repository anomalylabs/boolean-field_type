{{ assets('styles.css', 'anomaly.field_type.boolean::css/switch.css') }}

<div class="switch">

    <input
            type="checkbox"
            id="{{ $fieldType->input_name }}"
            name="{{ $fieldType->input_name }}"

            class="
                switch__checkbox
                switch__checkbox--on-{{ $fieldType->config('on_color') }}
                switch__checkbox--off-{{ $fieldType->config('off_color') }}"
            {{ $fieldType->value ? 'checked' : '' }}
            {{ html_attributes($fieldType->attributes) }}>

    <label
            class="switch__label"
            for="{{ $fieldType->input_name }}">
        {{ trans($fieldType->config('label') ?: 'Label for switch') }}
    </label>

</div>
