<?php namespace Streams\Addon\FieldType\Boolean;

use Streams\Core\Addon\FieldTypeAbstract;
use Streams\Core\Model\EntryModel;

class BooleanFieldType extends FieldTypeAbstract
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
