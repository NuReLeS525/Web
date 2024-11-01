<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'icon',
        'link',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Social $social) {
            $social->slug = $social->slug ?? str($social->social)->slug();
        });
    }
}
