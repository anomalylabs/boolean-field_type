<?php namespace Anomaly\BooleanFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;

/**
 * Class BooleanFieldTypePresenter
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\BooleanFieldType
 */
class BooleanFieldTypePresenter extends FieldTypePresenter
{

    /**
     * The decorated object.
     *
     * @var BooleanFieldType
     */
    protected $object;

    /**
     * Return whether the value is true.
     *
     * @return bool
     */
    public function isTrue()
    {
        return $this->object->getValue() === true;
    }

    /**
     * Return whether the value is false.
     *
     * @return bool
     */
    public function isFalse()
    {
        return $this->object->getValue() === false;
    }

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
    public function label()
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

    /**
     * Return the input for AJAX use.
     *
     * @return string
     */
    public function toggle()
    {
        return $this->object->getAjaxInput();
    }
}
