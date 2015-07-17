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
     * Return the text value.
     *
     * @return string
     */
    public function text()
    {
        if ($this->object->getValue()) {
            return trans(array_get($this->object->getConfig(), 'on_text'));
        } else {
            return trans(array_get($this->object->getConfig(), 'off_text'));
        }
    }

    /**
     * Return icon representation of the value.
     *
     * @return string
     */
    public function icon()
    {
        if ($this->object->getValue()) {
            return '<i class="text-' . $this->color() . ' fa fa-check fa-lg"></i>';
        } else {
            return '<i class="text-' . $this->color() . ' fa fa-close fa-lg"></i>';
        }
    }

    /**
     * Return label representation of the value.
     *
     * @return string
     */
    public function badge()
    {
        if ($this->object->getValue()) {
            return '<i class="label label-' . $this->color() . '">' . $this->text() . '</i>';
        } else {
            return '<i class="label label-' . $this->color() . '">' . $this->text() . '</i>';
        }
    }

    /**
     * Return the configured color the value represents.
     *
     * @return string
     */
    public function color()
    {
        return array_get($this->object->getConfig(), $this->object->getValue() ? 'on_color' : 'off_color');
    }
}
