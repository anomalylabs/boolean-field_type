# Output

This field type returns the addon instance as a value. You may access the object as normal.

### `text`

Return the configured on/off text value.

```
// Twig Usage
{{ entry.example.text }}

// API usage
$entry->example->text();
```

### `icon`

Return the icon representation of the value.

```
// Twig Usage
{{ entry.example.icon|raw }}

// API usage
$entry->example->icon();
```

### `label`

Return the label representation of the value.

```
// Twig Usage
{{ entry.example.label|raw }}

// API usage
$entry->example->label();
```

### `color`

Return the configured color the value represents.

```
// Twig Usage
{{ entry.example.color }}

// API usage
$entry->example->color();
```
