<?php

namespace App\Models\Filters\Products;

use Lacodix\LaravelModelFilter\Filters\StringFilter;
use Lacodix\LaravelModelFilter\Enums\FilterMode;

class NameFilter extends StringFilter
{
    public FilterMode $mode = FilterMode::CONTAINS;
    protected string $field = 'name';
}
