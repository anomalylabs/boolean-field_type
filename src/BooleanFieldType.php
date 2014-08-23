<?php namespace Addon\FieldType\Boolean;

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
     * Field type version
     *
     * @var string
     */
    public $version = '1.1.0';

    /**
     * Field type author information.
     *
     * @var array
     */
    public $author = array(
        'name' => 'AI Web Systems, Inc.',
        'url'  => 'http://aiwebsystems.com/',
    );

    /**
     * Return form input.
     *
     * @return string
     */
    public function input()
    {
        $options = array(
            'class' => 'switch',
        );

        return \Form::checkbox($this->postKey(), true, $this->value(), $options);
    }

    public function value()
    {
        return (boolean) parent::value();
    }
}
