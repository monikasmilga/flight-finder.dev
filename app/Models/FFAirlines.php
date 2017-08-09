<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FFAirlines extends CoreModel {

    protected $table = 'ff_airlines';

    protected $fillable = ['id', 'name'];

}
