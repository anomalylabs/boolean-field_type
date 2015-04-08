<?php namespace Anomaly\BooleanFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldType;

/**
 * Class BooleanFieldType
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\BooleanFieldType
 */
class BooleanFieldType extends FieldType
{

    /**
     * The database column type.
     *
     * @var string
     */
    public $columnType = 'boolean';

    /**
     * The input view.
     *
     * @var string
     */
    protected $inputView = 'anomaly.field_type.boolean::input';

    /**
     * The config array.
     *
     * @var array
     */
    protected $config = [
        'on_color'  => 'success',
        'off_color' => 'default',
        'on_text'   => 'anomaly.field_type.boolean::choice.yes',
        'off_text'  => 'anomaly.field_type.boolean::choice.no'
    ];

}
