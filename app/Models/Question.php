<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'question',
        'answer'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Question $question) {
            $question->slug = $question->slug ?? str($question->question)->slug();
        });
    }
}
