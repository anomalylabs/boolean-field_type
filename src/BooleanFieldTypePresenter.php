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
     * Return if the value is true / false.
     *
     * @param $test
     * @return bool
     */
    public function is($test)
    {
        return $this->object->getValue() === filter_var($test, FILTER_VALIDATE_BOOLEAN);
    }

    /**
     * Return whether the value is true.
     *
     * @return bool
     */
    public function isTrue()
    {
        return $this->is(true);
    }

    /**
     * Return whether the value is false.
     *
     * @return bool
     */
    public function isFalse()
    {
        return $this->is(false);
    }

    /**
     * Return icon representation of the value.
     *
     * @param string $size
     * @return string
     */
    public function icon($size = 'lg')
    {
        if ($this->object->getValue()) {
            return '<i class="text-' . $this->color() . ' fa fa-check fa-' . $size . '"></i>';
        } else {
            return '<i class="text-' . $this->color() . ' fa fa-close fa-' . $size . '"></i>';
        }
    }

    /**
     * Return the configured color the value represents.
     *
     * @return string
     */
    public function color()
    {
        return $this->object->config($this->object->getValue() ? 'on_color' : 'off_color');
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
     * Return the text value.
     *
     * @param null $on
     * @param null $off
     * @return string
     */
    public function text($on = null, $off = null)
    {
        $config = $this->object->getValue() ? 'on_text' : 'off_text';

        if ($on && $config == 'on_text') {
            return $on;
        }

        if ($off && $config == 'off_text') {
            return $off;
        }

        return $this->object->config($config);
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
