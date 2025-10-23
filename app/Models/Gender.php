<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gender extends Model
{
    protected $fillable = ['gender'];
    protected $primaryKey = 'id';

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
