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
     * The element view.
     *
     * @var string
     */
    protected $elementView = 'field_type.boolean::element';

    /**
     * Return form input.
     *
     * @return string
     */
    public function input()
    {
        $options = array(
            'id' => $this->fieldName(),
        );

        return \Form::checkbox($this->fieldName(), true, $this->value, $options);
    }
}
