<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sex extends Model
{
    protected $fillable = ['sex'];
    protected $primaryKey = 'id';

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
