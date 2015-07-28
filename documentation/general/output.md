# Output

This field type returns the addon instance as a value. You may access the object as normal.

**Examples:**

### `text`

Return the text value

```
// Twig Usage
{{ entry.example.text }}

// API Usage
$entry->example->text();
```

### `icon`

Return label representation of the value.

```
// Twig Usage
{{ entry.example.icon }}

// API Usage
$entry->example->icon();
```

### `label`

Return label representation of the value.

```
// Twig Usage
{{ entry.example.label }}

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
