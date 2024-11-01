<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
        'img'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Game $game) {
            $game->slug = $game->slug ?? str($game->name)->slug();
        });
    }
}
