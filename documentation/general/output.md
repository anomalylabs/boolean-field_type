# Output

This field type returns the addon instance as a value. You may access the object as normal.

**Examples:**

### `text`

Return the configured on/off text value.

```
// Twig Usage
{{ entry.example.text }}

// API Usage
$entry->example->text();
```

### `icon`

Return the icon representation of the value.

```
// Twig Usage
{{ entry.example.icon|raw }}

// API Usage
$entry->example->icon();
```

### `label`

Return the label representation of the value.

```
// Twig Usage
{{ entry.example.label|raw }}

// API Usage
$entry->example->label();
```

### `color`

Return the configured color the value represents.

```
// Twig Usage
{{ entry.example.color }}

// API Usage
$entry->example->color();
```
