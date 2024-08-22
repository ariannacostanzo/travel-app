<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Date;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'departure_date',
        'return_date'
    ];

    // Assicurati che departure_date e return_date siano trattati come date
    protected $casts = [
        'departure_date' => 'date',
        'return_date' => 'date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function days()
    {
        return $this->hasMany(Day::class);
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

    public function generateDays($departure_date,  $return_date)
    {

        // Calcola i giorni tra le due date
        $days = $departure_date->diffInDays($return_date) + 1; // +1 per includere anche il giorno di ritorno

        // Loop per creare i giorni
        for ($i = 0; $i < $days; $i++) {
            $date = $departure_date->copy()->addDays($i);

            // Crea un'istanza di Day per ogni data
            Day::create([
                'trip_id' => $this->id,
                'title' => 'Giorno ' . ($i + 1),
                'date' => $date,
            ]);
        }
    }
}
