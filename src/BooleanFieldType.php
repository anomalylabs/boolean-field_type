<?php namespace Anomaly\BooleanFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldType;

/**
 * Class BooleanFieldType
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Addon\FieldType\Boolean
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
    protected $inputView = 'field_type.boolean::input';

    /**
     * Mutate the value when setting on the model.
     *
     * @param $value
     * @return mixed
     */
    function mutate($value)
    {
        return filter_var($value, FILTER_VALIDATE_BOOLEAN);
    }

    /**
     * Unmutate the value when getting off the model.
     *
     * @param $value
     * @return mixed
     */
    function unmutate($value)
    {
        return filter_var($value, FILTER_VALIDATE_BOOLEAN);
    }

    /**
     * Get the value. Just another check to make
     * sure we're always dealing with booleans.
     *
     * @return mixed
     */
    public function getValue()
    {
        return filter_var(parent::getValue(), FILTER_VALIDATE_BOOLEAN);
    }

    /**
     * Get view data for the input.
     *
     * @return array
     */
    public function getInputData()
    {
        $data = parent::getInputData();

        $data['checked'] = $this->getValue();

        // This is API configuration for the plugin.
        $data['on']  = trans($this->pullConfig('on', 'misc.enabled'));
        $data['off'] = trans($this->pullConfig('off', 'misc.disabled'));

        $data['size'] = $this->pullConfig('size', 'normal');

        $data['onstyle']  = $this->pullConfig('onstyle', 'success');
        $data['offstyle'] = $this->pullConfig('offstyle', 'default');

        return $data;
    }
}
