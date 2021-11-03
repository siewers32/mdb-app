<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    protected $fillable = [
        'title',
        'year',
    ];
}
