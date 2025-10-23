<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Lacodix\LaravelModelFilter\Traits\HasFilters;
use App\Models\Filters\SexIdFilter;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Model
{
    use HasFactory, HasFilters;

    protected $fillable = [
        'name',
        'sex_id',
        'email',
        'location',
        'phone'
    ];

    protected array $filters = [
        SexIdFilter::class,
    ];

    public function sex(): BelongsTo
    {
        return $this->belongsTo(Sex::class, 'sex_id');
    }
}
