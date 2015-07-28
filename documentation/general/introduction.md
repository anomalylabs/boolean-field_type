# Boolean Field Type

*anomaly.field_type.boolean*

### An on/off switch style field type.

The boolean field type provides an on/off style switch input.

### Notes

- When setting and getting the value via API the value will ALWAYS be converted to it's boolean representation.

```
// Examples of true
$entry->example = 'yes';
$entry->example = 'y';
$entry->example = true;

// Examples of false
$entry->example = 'no';
$entry->example = 'n';
$entry->example = false;
```