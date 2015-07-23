<?php namespace Anomaly\BooleanFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypeQuery;
use Anomaly\Streams\Platform\Ui\Table\Component\Filter\Contract\FieldFilterInterface;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class BooleanFieldTypeQuery
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\BooleanFieldType
 */
class BooleanFieldTypeQuery extends FieldTypeQuery
{

    /**
     * Filter a query by the value of a
     * field using this field type.
     *
     * @param Builder              $query
     * @param FieldFilterInterface $filter
     */
    public function filter(Builder $query, FieldFilterInterface $filter)
    {
        $stream     = $filter->getStream();
        $assignment = $stream->getAssignment($filter->getField());

        $column = $this->fieldType->getColumnName();

        $table        = $stream->getEntryTableName();
        $translations = $stream->getEntryTranslationsTableName();

        $modifier = $this->fieldType->getModifier();

        if ($assignment->isTranslatable()) {
            $query
                ->join($translations, $translations . '.entry_id', '=', $table . '.id')
                ->where($translations . '.' . $column, $modifier->modify($filter->getValue()))
                ->where('locale', config('app.locale'));
        } else {
            $query->where($column, $modifier->modify($filter->getValue()));
        }
    }
}
