<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Stop extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'foods',
        'is_completed',
        'adress',
        'latitude',
        'longitude',
        'rating'
    ];

    public function day()
    {
        return $this->belongsTo(Day::class);
    }

    // Mutator per la generazione dello slug quando viene scritto un nuovo title
    protected function title(): Attribute
    {
        return Attribute::make(
            set: fn(string $value) => [
                'title' => $value,
                'slug' => Str::slug($value)
            ]
        );
    }
}
