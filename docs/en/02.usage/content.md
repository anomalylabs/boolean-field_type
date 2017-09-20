---
title: Usage
---

## Usage[](#usage)

This section will show you how to use the field type via API and in the view layer.


### Setting Values[](#usage/setting-values)

You can set the boolean field type value with a boolean value:

    $entry->example = true

You can also set the value with a boolean-filterable string.

    $entry->example = "yes"; // Value is "true"


### Basic Output[](#usage/basic-output)

The `value` returned by the field type will always be a `boolean` value.

    $entry->example; // true or false


### Presenter Output[](#usage/presenter-output)

This section will show you how to use the decorated value provided by the `\Anomaly\BooleanFieldType\BooleanFieldTypePresenter` class.


#### BooleanFieldTypePresenter::isTrue()[](#usage/presenter-output/booleanfieldtypepresenter-istrue)

The `isTrue` method returns whether the `value` is `true` or not. This is a shortcut for the `is(true)` method.

###### Returns: `boolean`

###### Example

    $decorated->example->isTrue();

###### Twig

    {% if decorated.example.isTrue() %}
      Yep!
    {% endif %}

Presenter processing means you can simply do this:

    {% if decorated.example.true %}
      Yep!
    {% endif %}


#### BooleanFieldTypePresenter::isFalse()[](#usage/presenter-output/booleanfieldtypepresenter-isfalse)

The `isFalse` method returns whether the value is `false` or not. If the value is `false` this method will return `true`. This is a shortcut for the `is(false)` method.

###### Returns: `boolean`

###### Example

    $decorated->example->isTrue();

###### Twig

    {% if decorated.example.isFalse() %}
      Oh crap...
    {% endif %}

Presenter processing means you can simply do this:

    {% if decorated.example.false %}
      Yep!
    {% endif %}


#### BooleanFieldTypePresenter::is()[](#usage/presenter-output/booleanfieldtypepresenter-is)

The `is` method returns whether the value matches the test value.

###### Returns: `boolean`

###### Arguments

<table class="table table-bordered table-striped">

<thead>

<tr>

<th>Key</th>

<th>Required</th>

<th>Type</th>

<th>Default</th>

<th>Description</th>

</tr>

</thead>

<tbody>

<tr>

<td>

$test

</td>

<td>

true

</td>

<td>

mixed

</td>

<td>

none

</td>

<td>

The boolean or filterable text to test.

</td>

</tr>

</tbody>

</table>

###### Example

    if ($decorated->example->is(true)) {
        echo "Yes!";
    }

###### Twig

    {% if decorated.example.is(true) %}
      Yep!
    {% endif %}


#### BooleanFieldTypePresenter::icon()[](#usage/presenter-output/booleanfieldtypepresenter-icon)

The `icon` method returns an icon representing the value.

###### Returns: `string`

###### Arguments

<table class="table table-bordered table-striped">

<thead>

<tr>

<th>Key</th>

<th>Required</th>

<th>Type</th>

<th>Default</th>

<th>Description</th>

</tr>

</thead>

<tbody>

<tr>

<td>

$size

</td>

<td>

false

</td>

<td>

string

</td>

<td>

sm

</td>

<td>

The size of the icon. Valid options are `sm`, `md`, and `lg`.

</td>

</tr>

</tbody>

</table>

###### Example

    $decorated->example->icon('lg'); // <i class="text-{color} fa fa-check fa-lg"></i>

###### Twig

    {{ decorated.example.icon(); // <i class="text-{color} fa fa-check fa-sm"></i>


#### BooleanFieldTypePresenter::color()[](#usage/presenter-output/booleanfieldtypepresenter-color)

The `color` method returns the configured state color based on the value.

###### Returns: `string`

###### Example

    $decorated->example->color();

###### Twig

    {{ decorated.example.color() }}


#### BooleanFieldTypePresenter::label()[](#usage/presenter-output/booleanfieldtypepresenter-label)

The `label` method returns a label of the configured state color based on the value.

###### Returns: `string`

###### Example

    $decorated->example->label();

###### Twig

    {{ decorated.example.label() }}


#### BooleanFieldTypePresenter::text()[](#usage/presenter-output/booleanfieldtypepresenter-text)

The `text` method returns text based on the value.

###### Returns: `string`

###### Arguments

<table class="table table-bordered table-striped">

<thead>

<tr>

<th>Key</th>

<th>Required</th>

<th>Type</th>

<th>Default</th>

<th>Description</th>

</tr>

</thead>

<tbody>

<tr>

<td>

$on

</td>

<td>

false

</td>

<td>

string

</td>

<td>

The configured `on_text`.

</td>

<td>

Text for "on" state.

</td>

</tr>

<tr>

<td>

$ff

</td>

<td>

false

</td>

<td>

string

</td>

<td>

The configured `off_text`.

</td>

<td>

Text for "off" state.

</td>

</tr>

</tbody>

</table>

###### Example

    $decorated->example->text('YAS!', 'DRAT!');

###### Twig

    {{ decorated.example.text('YAS!', 'DRAT!') }}


#### BooleanFieldTypePresenter::toggle()[](#usage/presenter-output/booleanfieldtypepresenter-toggle)

The `toggle` method returns an `ajax` input switch that will update the value.

###### Returns: `string`

###### Example

    $decorated->example->toggle();

###### Twig

    Status: {{ decorated.example.toggle()|raw }}

This method is great for use in table columns!

    protected $columns = [
        'entry.example.toggle',
    ];
