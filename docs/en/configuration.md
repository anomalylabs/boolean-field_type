# Configuration

- [Basic Configuration](#basic)
- [Extra Configuration](#extra)

<hr>

Below is the full configuration available with defaults.

    protected $fields = [
        "example" => [
            "type"   => "anomaly.field_type.boolean",
            "config" => [
                "default_value" => false,
                "on_color"      => "success",
                "off_color"     => "danger",
                "on_text"       => "YES",
                "off_text"      => "NO",
                "mode"          => null
            ]
        ]
    ];

<hr>

<a name="basic"></a>
## Basic Configuration

### Default Value

    "default_value" => false

The `default_value` is a core option. This field type accepts a boolean value or a filterable string like "yes" or "no".

### "ON" Color

    "on_color" => "success"

Specify the color of the switch when in the "ON" position. Valid options are `success`, `info`, `warning`, `danger`, `default`, and `primary`.

### "OFF" Color

    "on_color" => "danger"

Specify the color of the switch when in the "OFF" position. Valid options are `success`, `info`, `warning`, `danger`, `default`, and `primary`.

### "ON" Text

    "on_text" => "ON"

Specify the text of the switch when in the "ON" position. Any string may be used.

### "OFF" Text

    "on_text" => "OFF"

Specify the text of the switch when in the "OFF" position. Any string may be used.

<hr>

<a name="extra"></a>
## Extra Configuration

### Input Mode

    "mode" => "switch"

Specify the type of input to display. Valid options are `switch`, `checkbox`, `dropdown` or `radio`. If no value is provided the `anomaly.field_type.boolean::input.mode` value will be used by default.
