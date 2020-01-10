<?php

use Illuminate\Contracts\View\View;
use Anomaly\BooleanFieldType\BooleanFieldType;

class BooleanFieldTypePresenterTest extends TestCase
{

    public function testTrueFalse()
    {
        $fieldType = app(BooleanFieldType::class)
            ->setValue(true);

        $presenter = decorate($fieldType);

        $this->assertTrue($presenter->isTrue());
        $this->assertTrue($presenter->isFalse() === false);
    }

    public function testColor()
    {
        $fieldType = app(BooleanFieldType::class)
            ->setValue(true);

        $presenter = decorate($fieldType);

        $this->assertTrue($presenter->color() === 'success');
    }

    public function testText()
    {
        $fieldType = app(BooleanFieldType::class)
            ->setValue(true);

        $presenter = decorate($fieldType);

        $this->assertTrue($presenter->text('YES', 'NO') === 'YES');

        $fieldType->setValue(false);

        $this->assertTrue($presenter->text('YES', 'NO') === 'NO');
        $this->assertTrue($presenter->text() === 'anomaly.field_type.boolean::choice.no');
    }

    public function testToggle()
    {
        $fieldType = app(BooleanFieldType::class)
            ->setField('boolean');

        $presenter = decorate($fieldType);

        $this->assertTrue($presenter->toggle() instanceof View);
    }
}
