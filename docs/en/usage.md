# Usage

- [Setting Values](#mutator)
- [Basic Output](#output)
- [Presenter Output](#presenter)
- [Displaying An Ajax Toggle](#ajax)

<hr>

<a name="mutator"></a>
## Setting Values

You can set the boolean field type value with a boolean value.

{{ code('php', '$entry->example = true') }}

You can also set the value with a boolean filterable string.

{% code php %}
$entry->example = "yes";
{% endcode %}

<hr>

<a name="output"></a>
## Basic Output

The addon field type always returns a boolean value.

{% code php %}
$entry->example; // true or false
{% endcode %}

<hr>

<a name="presenter"></a>
## Presenter Output

When accessing the value from a decorated entry, like one in a view, the boolean field type presenter is returned instead.

### Testing the value

You can return whether the value is true / false by using the `is` method.

{% code php %}
$entry->example->is(true); // true or false
{% endcode %}

There are also a couple shortcut methods you can use instead.

{% code php %}
$entry->example->isTrue(); // true or false
$entry->example->isFalse(); // true or false
{% endcode %}

### Displaying symbolic output

You can easily display symbolic output like labels and icons that work great for table columns.

#### Icon

To display a FontAwesome icon, use the `icon` method. You can also include an optional size argument.

{% code php %}
$entry->example->icon('lg');
{% endcode %}

#### Color

The `color` method returns the configured state color based on the value.

{% code php %}
$entry->example->color(); // "success"
{% endcode %}

#### Text

To return the configured state text based on the value, use the `text` method.

{% code php %}
$entry->example->text(); // "ON"
{% endcode %}

You can also define optional `true` and `false` overrides.

{% code php %}
$entry->example->text("Yep", "Nope"); // "Yep"
{% endcode %}

<div class="">
<strong>Remember:</strong> You can access presenter in valuated strings like table columns too.
</div>

<pre>
{% code php %}
protected $columns = [
    'entry.example.label'
];
{% endcode %}
</pre>

<hr>

<a name="ajax"></a>
## Displaying An Ajax Toggle

You can return an ajax input to display a working toggle anywhere.

{% code php %}
$entry->example->getAjaxInput();
{% endcode %}

You can also display the toggle in your table as a column value.

<pre>
{% code php %}
protected $columns = [
    'entry.example.toggle'
];
{% endcode %}
</pre>