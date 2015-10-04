<?php namespace Anomaly\BooleanFieldType;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class BooleanFieldTypeServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\BooleanFieldType
 */
class BooleanFieldTypeServiceProvider extends AddonServiceProvider
{

    /**
     * The addon routes.
     *
     * @var array
     */
    protected $routes = [
        'streams/boolean-field_type/toggle' => 'Anomaly\BooleanFieldType\Http\Controller\BooleanController@toggle'
    ];

}
