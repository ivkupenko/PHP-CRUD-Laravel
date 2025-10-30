<?php

namespace App\Models\Filters;

use App\Models\Gender;
use Lacodix\LaravelModelFilter\Filters\SelectFilter;
use Lacodix\LaravelModelFilter\Enums\FilterMode;

class GenderIdFilter extends SelectFilter
{
    public FilterMode $mode = FilterMode::EQUAL;
    protected string $field = 'gender_id';

    public function options(): array
    {
        return Gender::query()->orderBy('id')->pluck('id', 'gender')->toArray();

    }
}
