<?php

return [
    'text'      => [
        'type' => 'anomaly.field_type.text'
    ],
    'on_text'   => [
        'type' => 'anomaly.field_type.text'
    ],
    'on_style'  => [
        'type'   => 'anomaly.field_type.select',
        'config' => [
            'options' => [
                'primary' => 'anomaly.field_type.boolean::config.on_style.option.primary',
                'success' => 'anomaly.field_type.boolean::config.on_style.option.success',
                'info'    => 'anomaly.field_type.boolean::config.on_style.option.info',
                'warning' => 'anomaly.field_type.boolean::config.on_style.option.warning',
                'danger'  => 'anomaly.field_type.boolean::config.on_style.option.danger',
                'default' => 'anomaly.field_type.boolean::config.on_style.option.default'
            ]
        ]
    ],
    'off_text'  => [
        'type' => 'anomaly.field_type.text'
    ],
    'off_style' => [
        'type'   => 'anomaly.field_type.select',
        'config' => [
            'options' => [
                'primary' => 'anomaly.field_type.boolean::config.off_style.option.primary',
                'success' => 'anomaly.field_type.boolean::config.off_style.option.success',
                'info'    => 'anomaly.field_type.boolean::config.off_style.option.info',
                'warning' => 'anomaly.field_type.boolean::config.off_style.option.warning',
                'danger'  => 'anomaly.field_type.boolean::config.off_style.option.danger',
                'default' => 'anomaly.field_type.boolean::config.off_style.option.default'
            ]
        ]
    ],
];
