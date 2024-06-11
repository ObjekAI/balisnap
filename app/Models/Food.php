<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Food extends Model
{
    use HasFactory;

    protected $table = 'foods';

    protected $guarded = ['id'];

    public function locations(): BelongsToMany
    {
        return $this->belongsToMany(Location::class, 'food_locations', 'food_id', 'location_id');
    }
}
