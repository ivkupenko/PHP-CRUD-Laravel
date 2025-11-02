<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Lacodix\LaravelModelFilter\Traits\HasFilters;
use App\Models\Filters\Products\NameFilter;
use App\Models\Filters\Products\DescriptionFilter;
use App\Models\Filters\Products\MaxCountFilter;
use App\Models\Filters\Products\MinCountFilter;
use App\Models\AttributeValue;

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
        DescriptionFilter::class,
        MaxCountFilter::class,
        MinCountFilter::class,
    ];

    public function attributeValues()
    {
        return $this->belongsToMany(AttributeValue::class, 'product_attribute_values')
            ->with('attribute')
            ->withTimestamps();
    }
};
