<select
        class="custom-select form-control"
        name="{{ $fieldType->input_name }}" {{ $fieldType->disabled ? 'disabled' : '' }}>

    <option value="" disabled {{ $fieldType->value ? '' : 'selected' }}>
        {{ $fieldType->placeholder }}
    </option>

    <option value="false" {{ $fieldType->value == 'false' ? 'selected' : '' }}>
        {{ trans($fieldType->config('off_text', 'anomaly.field_type.boolean::choice.no')) }}
    </option>
    <option value="true" {{ $fieldType->value == 'true' ? 'selected' : '' }}>
        {{ trans($fieldType->config('on_text', 'anomaly.field_type.boolean::choice.yes')) }}
    </option>

</select>
