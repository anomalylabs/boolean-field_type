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
            $icon  = 'check';
            $style = array_get($this->object->getConfig(), 'on_style', 'success');
        } else {
            $icon  = 'close';
            $style = array_get($this->object->getConfig(), 'off_style', 'danger');
        }

        return '<span class="label label-' . $style . '"><i class="fa fa-' . $icon . '"></i></span>';
    }

    /**
     * Return label HTML.
     *
     * @return string
     */
    public function label()
    {
        if ($this->object->getValue()) {
            $style = array_get($this->object->getConfig(), 'on_style', 'success');
            $text  = array_get($this->object->getConfig(), 'on_text', 'anomaly.field_type.boolean::choice.yes');
        } else {
            $style = array_get($this->object->getConfig(), 'off_style', 'danger');
            $text  = array_get($this->object->getConfig(), 'off_text', 'anomaly.field_type.boolean::choice.no');
        }

        return '<span class="label label-' . $style . '">' . trans($text) . '</span>';
    }
}
