<?php

use Anomaly\BooleanFieldType\BooleanFieldType;

class BooleanFieldTypePresenterTest extends TestCase
{

    public function testHumanize()
    {
        $fieldType = app(BooleanFieldType::class)
            ->setValue(true);

        $presenter = decorate($fieldType);

        $this->assertTrue($presenter->isTrue());
    }
}
