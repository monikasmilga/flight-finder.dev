<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FFAirports extends CoreModel {

    protected $table = 'ff_airports';

    protected $fillable = ['id', 'name', 'country_id', 'city'];

}
