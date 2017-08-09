<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FFFlights extends CoreModel {

    protected $table = 'ff_flights';

    protected $fillable = ['id', 'origin_id', 'destination_id', 'arrival', 'departure', 'airline_id'];

}
