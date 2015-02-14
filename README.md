# Boolean Field Type

*anomaly.field_type.boolean*

#### A boolean switch field type.

The boolean field type provides an on/off switch input.

## Configuration

- `size` - large, normal, small or mini
- `on_text` - any string including translatable keys
- `on_style` - primary, success, info, warning or danger
- `off_text` - any string including translatable keys
- `off_style` - primary, success, info, warning or danger

Though the default options follow twitter Bootstrap's direction, they can be
overridden easily to fit alongside a different theme framework. 

#### Example

	config => [
		'size' => 'large',
		'on_text' => 'Enabled',
		'on_style' => 'success',
		'off_text' => 'Disabled',
        'off_style' => 'danger',
	]
