<?php namespace Anomaly\Streams\Addon\FieldType\Boolean;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypeAddon;

class BooleanFieldType extends FieldTypeAddon
{
    public $columnType = 'boolean';

    public function input()
    {
        $options = array(
            'id' => $this->fieldName(),
        );

        return \Form::checkbox($this->fieldName(), true, $this->value, $options);
    }
}
