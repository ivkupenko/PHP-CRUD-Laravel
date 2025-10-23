<?php

namespace App\Models\Filters;

use Lacodix\LaravelModelFilter\Filters\SelectFilter;
use Lacodix\LaravelModelFilter\Enums\FilterMode;

class SexIdFilter extends SelectFilter
{
    public FilterMode $mode = FilterMode::EQUAL;
    protected string $field = 'sex_id';

    public function options(): array
    {
        return [
            '0' => '0',
            '1' => '1',
        ];
    }
}
