<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Location extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function foods(): BelongsToMany
    {
        return $this->belongsToMany(Food::class, 'food_locations', 'food_id', 'location_id');
    }
}
