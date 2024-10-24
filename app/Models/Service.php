<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Service extends Model
{
    use HasFactory;

    public function plans(): HasMany
    {
        return $this->hasMany(ServicePlan::class);
    }

    public function groups(): HasManyThrough
    {
        return $this->hasManyThrough(ServicePlan::class, Group::class);
    }
}
