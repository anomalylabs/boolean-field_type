{{ assets()->add('styles.css', 'anomaly.field_type.boolean::css/switch.css') }}
{{ assets()->add('scripts.js', 'anomaly.field_type.boolean::js/ajax.js') }}

<div class="boolean-field_type">
    <div class="switch">

        <input
                type="checkbox"
                name="{{ $fieldType->input_name }}"
                id="{{ $fieldType->field }}-{{ $fieldType->entry->id }}"

                class="
                switch__checkbox
                switch__checkbox--on-{{ $fieldType->config->on_color }}
                switch__checkbox--off-{{ $fieldType->config->off_color }}"

                data-toggle="anomaly.field_type.boolean"

                {!! html_attributes($fieldType->attributes()) !!}>

        <label
                class="switch__label"
                for="{{ $fieldType->field }}-{{ $fieldType->entry->id }}"></label>

    </div>
</div>
