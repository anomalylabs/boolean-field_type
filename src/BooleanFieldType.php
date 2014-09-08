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
            'id' => $this->fieldName(),
        );

        return \Form::checkbox($this->fieldName(), true, $this->value, $options);
    }

    /**
     * Return the form input element output.
     *
     * @return mixed
     */
    public function element()
    {
        $field = $this->assignment->field;

        return \View::make('field_type.boolean::element', compact('field'));
    }
}
