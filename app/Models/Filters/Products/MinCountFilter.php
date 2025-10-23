<?php

namespace App\Models\Filters\Products;

use Lacodix\LaravelModelFilter\Filters\NumericFilter;
use Lacodix\LaravelModelFilter\Enums\FilterMode;

class MinCountFilter extends NumericFilter
{
    public FilterMode $mode = FilterMode::GREATER_OR_EQUAL;
    protected string $field = 'count';
    protected string $name = 'min_count_filter';
}
