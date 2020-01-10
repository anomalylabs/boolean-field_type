<?php

use Anomaly\BooleanFieldType\BooleanFieldType;
use Illuminate\Contracts\View\View;

class BooleanFieldTypeTest extends TestCase
{

    public function testGetValidationValue()
    {
        $fieldType = app(BooleanFieldType::class)
            ->setField('boolean');

        $this->assertTrue($fieldType->getValidationValue() === null);
    }

    public function testGetPostValue()
    {
        $fieldType = app(BooleanFieldType::class)
            ->setField('boolean');

        request()->request->set('boolean', true);

        $this->assertTrue($fieldType->getPostValue());

        request()->request->set('boolean', 'no');

        $this->assertTrue($fieldType->getPostValue() === false);

        request()->request->remove('boolean');
    }

    public function testGetInputView()
    {
        $fieldType = app(BooleanFieldType::class)
            ->setField('boolean');

        $this->assertTrue($fieldType->getInputView() === 'anomaly.field_type.boolean::switch');

        $fieldType->setInputView('test_view');

        $this->assertTrue($fieldType->getInputView() === 'test_view');
    }

    public function testGetAjaxInput()
    {
        $fieldType = app(BooleanFieldType::class)
            ->setField('boolean');

        $this->assertTrue($fieldType->getAjaxInput() instanceof View);
    }

    public function testClass()
    {
        $fieldType = app(BooleanFieldType::class)
            ->setField('boolean');

        $this->assertTrue(str_contains($fieldType->class('foo bar'), 'input'));
    }

    public function testAttributes()
    {
        $fieldType = app(BooleanFieldType::class)
            ->setValue(true)
            ->setField('boolean');

        $attributes = $fieldType->attributes();

        $this->assertTrue(array_get($attributes, 'checked') === 'checked');
    }
}
