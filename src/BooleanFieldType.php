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
     * The filter view.
     *
     * @var string
     */
    protected $filterView = 'anomaly.field_type.boolean::filter';

    /**
     * The config array.
     *
     * @var array
     */
    protected $config = [
        'default_value' => false,
        'on_color'      => 'success',
        'off_color'     => 'danger',
        'on_text'       => 'YES',
        'off_text'      => 'NO'
    ];

    /**
     * Get the post value.
     *
     * @param null $default
     * @return bool
     */
    public function getPostValue($default = null)
    {
        return filter_var(parent::getPostValue($default), FILTER_VALIDATE_BOOLEAN);
    }
}
