<?php

use Anomaly\BooleanFieldType\BooleanFieldType;
use Anomaly\BooleanFieldType\BooleanFieldTypeModifier;

class BooleanFieldTypeModifierTest extends TestCase
{

    public function testModify()
    {
        $fieldType = app(BooleanFieldType::class);

        $modifier = app(BooleanFieldTypeModifier::class)
            ->setFieldType($fieldType);

        $this->assertTrue($modifier->modify(true) === 1);
        $this->assertTrue($modifier->modify('no') === 0);
    }

    public function testRestore()
    {
        $fieldType = app(BooleanFieldType::class);

        $modifier = app(BooleanFieldTypeModifier::class)
            ->setFieldType($fieldType);

        $this->assertTrue($modifier->restore(1));
        $this->assertTrue($modifier->restore(0) === false);
    }
}
