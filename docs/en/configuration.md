# Configuration

- [Basic Configuration](#basic)
- [Extra Configuration](#extra)

<hr>

Below is the full configuration available with defaults.

    {% code php %}
    protected $fields = [
        "example" => [
            "type"   => "anomaly.field_type.boolean",
            "config" => [
                "default_value" => false,
                "on_color"      => "success",
                "off_color"     => "danger",
                "on_text"       => "YES",
                "off_text"      => "NO",
                "mode"          => "switch"
            ]
        ]
    ];
    {% endcode %}

<hr>

<a name="basic"></a>
## Basic Configuration

### Default Value

{{ code('php', '"default_type" => false') }}

The `default_value` is a core option. This field type accepts a boolean value or a filterable string like "yes" or "no".

### "ON" Color

{{ code('php', '"on_color" => "success"') }}

Specify the color of the switch when in the "ON" position. Valid options are `success`, `info`, `warning`, `danger`, `default`, and `primary`.

### "OFF" Color

{{ code('php', '"on_color" => "danger"') }}

Specify the color of the switch when in the "OFF" position. Valid options are `success`, `info`, `warning`, `danger`, `default`, and `primary`.

### "ON" Text

{{ code('php', '"on_text" => "ON"') }}

Specify the text of the switch when in the "ON" position. Any string may be used.

### "OFF" Text

{{ code('php', '"on_text" => "OFF"') }}

Specify the text of the switch when in the "OFF" position. Any string may be used.

<hr>

<a name="extra"></a>
## Extra Configuration

### Input Mode

{{ code('php', '"mode" => "switch"') }}

Specify the type of input to display. Valid options are `switch` and `checkbox`.
