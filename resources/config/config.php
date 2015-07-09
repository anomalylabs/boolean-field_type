<?php

return [
    'on_text'   => [
        'type'     => 'anomaly.field_type.text',
        'required' => true
    ],
    'on_color'  => [
        'type'     => 'anomaly.field_type.select',
        'required' => true,
        'config'   => [
            'default_value' => 'success',
            'options'       => [
                'success' => 'anomaly.field_type.boolean::config.on_color.green',
                'info'    => 'anomaly.field_type.boolean::config.on_color.blue',
                'warning' => 'anomaly.field_type.boolean::config.on_color.orange',
                'danger'  => 'anomaly.field_type.boolean::config.on_color.red',
                'default' => 'anomaly.field_type.boolean::config.on_color.gray'
            ]
        ]
    ],
    'off_text'  => [
        'type'     => 'anomaly.field_type.text',
        'required' => true
    ],
    'off_color' => [
        'type'   => 'anomaly.field_type.select',
        'config' => [
            'required'      => true,
            'default_value' => 'default',
            'options'       => [
                'success' => 'anomaly.field_type.boolean::config.off_color.green',
                'info'    => 'anomaly.field_type.boolean::config.off_color.blue',
                'warning' => 'anomaly.field_type.boolean::config.off_color.orange',
                'danger'  => 'anomaly.field_type.boolean::config.off_color.red',
                'default' => 'anomaly.field_type.boolean::config.off_color.gray'
            ]
        ]
    ],
];
