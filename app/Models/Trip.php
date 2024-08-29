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
        'return_date',
        'image_url'
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

    //Per ottenere tutti le stops collegate al trip
    public function stops()
    {
        return $this->hasManyThrough(Stop::class, Day::class);
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

    public function generateDays($departure_date,  $return_date, $has_days = false)
    {

        $departure_date = Carbon::parse($departure_date);
        $return_date = Carbon::parse($return_date);

        if (!$has_days) {

            // Calcola i giorni tra le due date
            $days = $departure_date->diffInDays($return_date) + 1; // +1 per includere anche il giorno di ritorno

            // Loop per creare i giorni
            for ($i = 0; $i < $days; $i++) {
                $date = $departure_date->copy()->addDays($i);

                // Crea un'istanza di Day per ogni data
                Day::create([
                    'trip_id' => $this->id,
                    'number' =>  '' . ($i + 1),
                    'date' => $date,
                ]);
            }
        } else {

            if ($departure_date > $this->departure_date && $return_date > $this->return_date) {

                // Genera dei nuovi giorni che vanno dalla vecchia data di ritorno alla nuova data di ritorno
                $this->generateDays($this->return_date->addDays(1), $return_date);

                // Prende tutti i giorni fuori dal range(prima della nuova data di partenza) e li elimina
                $before_range_days = Day::whereTripId($this->id)->where('date', '<', $departure_date)->delete();
            } else {

                // Controllo la nuova data di partenza

                // Se è antecedente a quella vecchia
                if ($departure_date < $this->departure_date) {
                    //Genera dei nuovi giorni che vanno dalla nuova data di partenza alla vecchia
                    $this->generateDays($departure_date, $this->departure_date->subDays(1));
                    // Se è conseguente
                } else if ($departure_date > $this->departure_date) {
                    // Prende tutti i giorni fuori dal range(prima della nuova data di partenza) e li elimina
                    $before_range_days = Day::whereTripId($this->id)->where('date', '<', $departure_date)->delete();
                }

                // Cotrollo la nuova data di ritorno

                // Se è antecedente alla vecchia data di ritorno
                if ($return_date < $this->return_date) {
                    // Prende tutti i giorni fuori dal range(dopo la nuova data di ritorno) e li elimina
                    $after_range_days = Day::whereTripId($this->id)->where('date', '>', $return_date)->delete();

                    // Se è conseguente alla vecchia data di ritorno
                } else if ($return_date > $this->return_date) {
                    // Genera dei nuovi giorni che vanno dalla vecchia data di ritorno alla nuova data di ritorno
                    $this->generateDays($this->return_date->addDays(1), $return_date);
                }
            }



            // Devo riassegnare tutti i titoli dei giorni

            // Prendo tutti i giorni del viaggio
            $all_days = Day::whereTripId($this->id)->orderBy('date', 'asc')->get();
            foreach ($all_days as $i => $day) {
                $day->update(['number' => '' . ($i + 1)]);
            }
        }
    }
}
