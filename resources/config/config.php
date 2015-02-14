<?php

return [
    'size'      => [
        'type'   => 'anomaly.field_type.select',
        'config' => [
            'options' => [
                'large',
                'normal',
                'small',
                'mini'
            ]
        ]
    ],
    'on_text'   => [
        'type' => 'anomaly.field_type.text'
    ],
    'on_style'  => [
        'type'   => 'anomaly.field_type.select',
        'config' => [
            'options' => [
                'primary',
                'success',
                'info',
                'warning',
                'danger'
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
                'primary',
                'success',
                'info',
                'warning',
                'danger'
            ]
        ]
    ],
];
