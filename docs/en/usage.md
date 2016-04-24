# Usage

- [Setting Values](#mutator)
- [Basic Output](#output)
- [Presenter Output](#presenter)
- [Displaying An Ajax Toggle](#ajax)

<hr>

<a name="mutator"></a>
## Setting Values

You can set the boolean field type value with a boolean value.

    $entry->example = true

You can also set the value with a boolean filterable string.

    $entry->example = "yes";

<hr>

<a name="output"></a>
## Basic Output

The addon field type always returns a boolean value.

    $entry->example; // true or false

<hr>

<a name="presenter"></a>
## Presenter Output

When accessing the value from a decorated entry, like one in a view, the boolean field type presenter is returned instead.

### Testing the value

You can return whether the value is true / false by using the `is` method.

    $entry->example->is(true); // true or false

There are also a couple shortcut methods you can use instead.

    $entry->example->isTrue(); // true or false
    $entry->example->isFalse(); // true or false

### Displaying symbolic output

You can easily display symbolic output like labels and icons that work great for table columns.

#### Icon

To display a FontAwesome icon, use the `icon` method. You can also include an optional size argument.

    $entry->example->icon();

#### Color

The `color` method returns the configured state color based on the value.

    $entry->example->color(); // success

#### Text

To return the configured state text based on the value, use the `text` method.

    $entry->example->text(); // ON

You can also define optional `true` and `false` overrides.

    $entry->example->text("Yep", "Nope"); // Yep

<div class="alert alert-info">
<strong>Remember:</strong> You can access presenter methods in valuated strings like table columns too.
</div>

    protected $columns = [
        'entry.example.label'
    ];

<hr>

<a name="ajax"></a>
## Displaying An Ajax Toggle

You can return an ajax input to display a working toggle anywhere.

    $entry->example->getAjaxInput();

You can also display the toggle in your table as a column value.

    protected $columns = [
        'entry.example.toggle'
    ];
