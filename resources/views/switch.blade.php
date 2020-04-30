@php
    assets('scripts.js')->add('public::vendor/anomaly/field_type/boolean/js/index.js');
@endphp

<v-input>
    <v-switch
    {!! html_attributes([
        'value' => $fieldType->getValue(),
        'label' => $fieldType->getLabel(),
        'name'  => $fieldType->getInputName(),
        'hint'  =>  $fieldType->instructions,
        
        'readonly' => $fieldType->readonly ? true : false,
        'disabled' => $fieldType->disabled ? true : false,
    
        // 'data-field'      => $fieldType->getField(),
        // 'data-provides'   => $fieldType->getNamespace(),
        // 'data-field_name' => $fieldType->getFieldName(),
    
        // 'class' => $fieldType->getClass(),
        // 'id'    => $fieldType->getInputName(),
    ]) !!}
    
    outlined
    clearable
    ></v-switch>
</v-input>
