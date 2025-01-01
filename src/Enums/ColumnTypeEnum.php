<?php

namespace Duobix\Gridify\Enums;

use Duobix\Gridify\ColumnTypes\Date;
use Duobix\Gridify\ColumnTypes\Text;
use Duobix\Gridify\ColumnTypes\Boolean;
use Duobix\Gridify\ColumnTypes\Decimal;
use Duobix\Gridify\ColumnTypes\Datetime;
use Duobix\Gridify\ColumnTypes\Aggregate;
use Duobix\Gridify\ColumnTypes\Integer;
use Duobix\Gridify\Exceptions\InvalidColumnTypeException;

enum ColumnTypeEnum: string
{
    /**
     * String.
     */
    case STRING = 'string';

    /**
     * Integer.
     */
    case INTEGER = 'integer';

    /**
     * Decimal.
     */
    case DECIMAL = 'decimal';

    /**
     * Boolean.
     */
    case BOOLEAN = 'boolean';

    /**
     * Date.
     */
    case DATE = 'date';

    /**
     * Date time.
     */
    case DATETIME = 'datetime';

    /**
     * Aggregate.
     */
    case AGGREGATE = 'aggregate';

    /**
     * Get the corresponding class name for the column type.
     */
    public static function getClassName(string $type): string
    {
        return match ($type) {
            self::STRING->value    => Text::class,
            self::INTEGER->value   => Integer::class,
            self::DECIMAL->value   => Decimal::class,
            self::BOOLEAN->value   => Boolean::class,
            self::DATE->value      => Date::class,
            self::DATETIME->value  => Datetime::class,
            self::AGGREGATE->value => Aggregate::class,
            default                => throw new InvalidColumnTypeException("Invalid column type: {$type}")
        };
    }
}
