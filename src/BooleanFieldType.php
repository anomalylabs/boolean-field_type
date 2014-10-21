<?php namespace Anomaly\Streams\Addon\FieldType\Boolean;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypeAddon;

class BooleanFieldType extends FieldTypeAddon
{
    /**
     * The database column type this field type uses.
     *
     * @var string
     */
    public $columnType = 'boolean';

    /**
     * Return form input.
     *
     * @return string
     */
    public function input()
    {
        $options = array(
            'class' => 'boolean-field-type',
        );

        return \Form::checkbox($this->formName(), true, $this->value, $options);
    }

    public function setValue()
    {
        return (boolean) parent::value();
    }
}
