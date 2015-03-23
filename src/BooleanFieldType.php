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
     * Get the config.
     *
     * @return array
     */
    public function getConfig()
    {
        if (!isset($this->config['text']) && ends_with($this->getLabel(), ['.name', '.label'])) {
            $this->config['text'] = str_replace(['.name', '.label'], '.text', $this->getLabel());
        }

        return parent::getConfig();
    }
}
