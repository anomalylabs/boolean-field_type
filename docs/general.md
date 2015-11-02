# Boolean Field Type

- [Introduction](#introduction)
- [Configuration](#configuration)
- [Output](#output)
- [Usage](#usage)


<a name="introduction"></a>
## Introduction

`anomaly.field_type.boolean`

The boolean field type provides an on/off style switch input.


<a name="configuration"></a>
## Configuration

**Example Definition:**

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

### `default_value`

The default value of the checkbox. The default value is `false`.

### `on_color`

The color of the switch when it is in the "on" position. The default value is `success`. Valid options are `default`, `primary`, `success`, `info`, `warning`, and `danger`.

### `off_color`

The color of the switch when it is in the "off" position. The default value is `danger`. Valid options are `default`, `primary`, `success`, `info`, `warning`, and `danger`.

### `on_text`

The text shown on the checkbox when it is enabled. It can be text or a language key. The default value is `anomaly.field_type.boolean::choice.yes`.

### `off_text`

The text show on the checkbox when it is disabled. It can be text or a language key. The default value is `anomaly.field_type.boolean::choice.no`.


<a name="output"></a>
## Output

This field type returns the boolean value by default.

### `isTrue()`

Returns true if the value is true.

    // Twig Usage
    {{ entry.example.true }}

    // API usage
    $entry->example->isTrue();

### `isOff()`

Returns true if the value is false.

    // Twig Usage
    {{ entry.example.off }}

    // API usage
    $entry->example->isOff();

### `text()`

Returns the configured on/off text value.

    // Twig Usage
    {{ entry.example.text }}
    
    // API usage
    $entry->example->text();

### `icon()`

Returns the icon representation of the value.

    // Twig Usage
    {{ entry.example.icon|raw }}
    
    // API usage
    $entry->example->icon();

### `label()`

Returns the label representation of the value.

    // Twig Usage
    {{ entry.example.label|raw }}
    
    // API usage
    $entry->example->label();

### `color()`

Returns the configured color the value represents.

    // Twig Usage
    {{ entry.example.color }}
    
    // API usage
    $entry->example->color();


<a name="usage"></a>
## Usage

When setting and getting the value via API the value will ALWAYS be converted to it's boolean representation.


    // Equates to true
    $entry->example = 'yes';
    $entry->example = 'y';
    $entry->example = true;
    
    // Equates to false
    $entry->example = 'no';
    $entry->example = 'n';
    $entry->example = false;
