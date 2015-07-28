# Configuration

**Example Definition:**

```
protected $fields = [
    'example' => [
        'type'   => 'anomaly.field_type.boolean',
        'config' => [
            'default_value' => false,
            'on_color'      => 'success',
            'off_color'     => 'danger',
            'on_text'       => 'anomaly.field_type.boolean::choice.yes',
            'off_text'      => 'anomaly.field_type.boolean::choice.no'
        ]
    ]
];
```

### `default_value`

The default value of the checkbox. The default value is `false`.

### `on_color`

The color of the checkbox when it is enabled. The default value is `success`.  
Options are `default`, `primary`, `success`, `info`, `warning`, and `danger`.  
<a href="http://getbootstrap.com/css/#buttons-options" target="_blank">View Color Examples</a>

### `off_color`

The color of the checkbox when it is disabled. The default value is `danger`.  
Options are `default`, `primary`, `success`, `info`, `warning`, and `danger`.  
<a href="http://getbootstrap.com/css/#buttons-options" target="_blank">View Color Examples</a>

### `on_text`

The text shown on the checkbox when it is enabled. It can be text or a language key. The default value is `anomaly.field_type.boolean::choice.yes`.

### `off_text`

The text show on the checkbox when it is disabled. It can be text or a language key. The default value is `anomaly.field_type.boolean::choice.no`.

