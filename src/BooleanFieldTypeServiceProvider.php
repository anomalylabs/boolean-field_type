<?php

namespace Anomaly\BooleanFieldType;

use Anomaly\BooleanFieldType\BooleanFieldType;
use Illuminate\Contracts\Support\DeferrableProvider;
use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class BooleanFieldTypeServiceProvider
 *
 * @link   http://pyrocms.com/
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class BooleanFieldTypeServiceProvider extends AddonServiceProvider implements DeferrableProvider
{

    /**
     * Return the provided services.
     */
    public function provides()
    {
        return [BooleanFieldType::class];
    }
}
