<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Lacodix\LaravelModelFilter\Traits\HasFilters;
use App\Models\Filters\SexFilter;

class User extends Model
{
    use HasFactory, HasFilters;

    protected $fillable = [
        'name',
        'sex',
        'email',
        'location',
        'phone'
    ];

    protected array $filters = [
        SexFilter::class,
    ];
};
