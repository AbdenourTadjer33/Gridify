<?php

namespace Duobix\Gridify\ColumnTypes;

use Duobix\Gridify\Column;
use Duobix\Gridify\Enums\FilterTypeEnum;
use Duobix\Gridify\Exceptions\InvalidColumnExpressionException;

class Aggregate extends Column
{
    /**
     * Process filter.
     */
    public function processFilter($queryBuilder, $requestedValues)
    {
        if ($this->filterableType === FilterTypeEnum::DROPDOWN->value) {
            return $queryBuilder->having(function ($scopeQueryBuilder) use ($requestedValues) {
                if (is_string($requestedValues)) {
                    $scopeQueryBuilder->orHaving($this->columnName, $requestedValues);
                } elseif (is_array($requestedValues)) {
                    foreach ($requestedValues as $value) {
                        $scopeQueryBuilder->orHaving($this->columnName, $value);
                    }
                } else {
                    throw new InvalidColumnExpressionException('Only string and array are allowed for text column type.');
                }
            });
        }

        return $queryBuilder->having(function ($scopeQueryBuilder) use ($requestedValues) {
            if (is_string($requestedValues)) {
                $scopeQueryBuilder->orHaving($this->columnName, 'LIKE', '%'.$requestedValues.'%');
            } elseif (is_array($requestedValues)) {
                foreach ($requestedValues as $value) {
                    $scopeQueryBuilder->orHaving($this->columnName, 'LIKE', '%'.$value.'%');
                }
            } else {
                throw new InvalidColumnExpressionException('Only string and array are allowed for text column type.');
            }
        });
    }
}