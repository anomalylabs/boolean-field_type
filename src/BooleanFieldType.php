<?php namespace Anomaly\Streams\Addon\FieldType\Boolean;

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
     * The input wrapper view.
     *
     * @var string
     */
    protected $wrapperView = 'field_type.boolean::wrapper';

    /**
     * Get view data for the input.
     *
     * @return array
     */
    public function getInputData()
    {
        $data = parent::getInputData();

        $data['checked'] = ($this->getValue());

        // This is API configuration for the plugin.
        $data['on']  = trans($this->getConfig('on', 'misc.enabled'));
        $data['off'] = trans($this->getConfig('off', 'misc.disabled'));

        $data['size'] = $this->getConfig('size', 'normal');

        $data['onstyle']  = $this->getConfig('onstyle', 'success');
        $data['offstyle'] = $this->getConfig('offstyle', 'default');

        return $data;
    }
}
