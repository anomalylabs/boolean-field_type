{{ assets('styles.css', 'anomaly.field_type.boolean::css/switch.css') }}
{{ assets('scripts.js', 'anomaly.field_type.boolean::js/ajax.js') }}

<div class="boolean-field_type">
    <div class="switch">

        <input
                class="
                switch__checkbox
                switch__checkbox--on-{{ $fieldType->config->on_color }}
                switch__checkbox--off-{{ $fieldType->config->off_color }}"

                {!! html_attributes($fieldType->attributes([
                    'data-field' => $fieldType->field,
                    'data-entry' => $fieldType->entry->id,
                    'data-toggle' => $fieldType->namespace,
                    'data-stream' => $fieldType->entry->stream()->slug,
                    'data-namespace' => $fieldType->entry->stream()->namespace,
                ])) !!}>
        <label
                class="switch__label"
                for="{{ $fieldType->field }}-{{ $fieldType->entry->id }}"></label>

    </div>
</div>
