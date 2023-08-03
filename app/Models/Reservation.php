<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Reservation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function clienti()
    {
        return $this->belongsTo(Client::class, 'client', 'id');
    }

    protected function setNreservationAttribute($value)
    {
        $newValue =  $this->count().'-'.Carbon::now()->format('Y');
        $this->attributes['Nreservation'] = $newValue;
    }
}
