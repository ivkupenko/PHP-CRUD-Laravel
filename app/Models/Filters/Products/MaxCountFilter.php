<?php

namespace App\Models\Filters\Products;

use Lacodix\LaravelModelFilter\Filters\NumericFilter;
use Lacodix\LaravelModelFilter\Enums\FilterMode;

class MaxCountFilter extends NumericFilter
{
    public FilterMode $mode = FilterMode::LOWER_OR_EQUAL;
    protected string $field = 'count';
    protected string $name = 'max_count_filter';

}
