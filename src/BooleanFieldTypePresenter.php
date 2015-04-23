<?php namespace Anomaly\BooleanFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;

/**
 * Class BooleanFieldTypePresenter
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\BooleanFieldType
 */
class BooleanFieldTypePresenter extends FieldTypePresenter
{

    /**
     * Return icon HTML.
     *
     * @return string
     */
    public function icon()
    {
        if ($this->object->getValue()) {
            return '<i class="text-success fa fa-check fa-lg"></i>';
        } else {
            return '<i class="text-danger fa fa-close fa-lg"></i>';
        }
    }
}
