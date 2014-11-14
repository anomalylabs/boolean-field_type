<?php namespace Anomaly\Streams\Addon\FieldType\Boolean;

use Anomaly\Streams\Platform\Addon\FieldType\FieldType;

class BooleanFieldType extends FieldType
{
    public $columnType = 'boolean';

    public function input()
    {
        $options = array(
            'id' => $this->fieldName(),
        );

        return \Form::checkbox($this->fieldName(), true, $this->value, $options);
    }

    protected function onSet($value)
    {
        return boolean($value);
    }
}
