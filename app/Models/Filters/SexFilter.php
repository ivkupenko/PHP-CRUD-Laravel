<?php

namespace App\Models\Filters;

use Lacodix\LaravelModelFilter\Filters\SelectFilter;
use Lacodix\LaravelModelFilter\Enums\FilterMode;

class SexFilter extends SelectFilter
{
    public FilterMode $mode = FilterMode::EQUAL;
    protected string $field = 'sex';

    public function options(): array
    {
        return [
            'male' => 'male',
            'female' => 'female',
        ];
    }
}
