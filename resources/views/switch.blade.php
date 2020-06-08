@php
assets('scripts.js')->add('public::vendor/anomaly/field_type/boolean/js/index.js');
@endphp

<label for="unchecked" class="mt-3 inline-flex items-center cursor-pointer">
    <span class="relative">
        <span class="block w-10 h-6 bg-gray-400 rounded-full shadow-inner"></span>
        <span
            class="absolute block w-4 h-4 mt-1 ml-1 bg-white rounded-full shadow inset-y-0 left-0 focus-within:shadow-outline transition-transform duration-300 ease-in-out">
            <input id="unchecked" type="checkbox" class="absolute opacity-0 w-0 h-0" />
        </span>
    </span>
    <span class="ml-3 text-sm">Unchecked</span>
</label>

<label for="checked" class="mt-3 inline-flex items-center cursor-pointer">
    <span class="relative">
        <span class="block w-10 h-6 bg-gray-400 rounded-full shadow-inner"></span>
        <span
            class="absolute block w-4 h-4 mt-1 ml-1 rounded-full shadow inset-y-0 left-0 focus-within:shadow-outline transition-transform duration-300 ease-in-out bg-purple-600 transform translate-x-full">
            <input id="checked" type="checkbox" class="absolute opacity-0 w-0 h-0" />
        </span>
    </span>
    <span class="ml-3 text-sm">Checked</span>
</label>

<v-input>
    <v-switch {!! html_attributes([ 'value'=> $fieldType->getValue(),
        'label' => $fieldType->label,
        'name' => $fieldType->getInputName(),
        'hint' => $fieldType->instructions,

        'readonly' => $fieldType->readonly ? true : false,
        'disabled' => $fieldType->disabled ? true : false,

        // 'data-field' => $fieldType->getField(),
        // 'data-provides' => $fieldType->getNamespace(),
        // 'data-field_name' => $fieldType->getFieldName(),

        // 'class' => $fieldType->getClass(),
        // 'id' => $fieldType->getInputName(),
        ]) !!}

        outlined
        clearable
        ></v-switch>
</v-input>
