<?php

use Anomaly\BooleanFieldType\BooleanFieldType;
use Anomaly\BooleanFieldType\BooleanFieldTypeServiceProvider;

class BooleanFieldTypeServiceProviderTest extends TestCase
{

    public function testProvides()
    {
        $provider = app(BooleanFieldTypeServiceProvider::class, ['app' => app()]);

        $provides = $provider->provides();

        $this->assertTrue(in_array(BooleanFieldType::class, $provides));
        $this->assertTrue(in_array('anomaly.field_type.boolean', $provides));
    }
}
