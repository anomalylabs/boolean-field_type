<?php namespace Anomaly\BooleanFieldType;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class BooleanFieldTypeServiceProvider
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class BooleanFieldTypeServiceProvider extends AddonServiceProvider
{

    /**
     * The addon routes.
     *
     * @var array
     */
    protected $routes = [
        'streams/boolean-field_type/toggle' => 'Anomaly\BooleanFieldType\Http\Controller\BooleanController@toggle',
    ];

}
