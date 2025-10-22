<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Lacodix\LaravelModelFilter\Traits\HasFilters;
use App\Models\Filters\NameFilter;

class Product extends Model
{
    use HasFactory, HasFilters;

    protected $fillable = [
        'name',
        'description',
        'count'
    ];

    protected array $filters = [
        NameFilter::class,
    ];
};
