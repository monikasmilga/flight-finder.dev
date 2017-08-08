<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FFCountries extends CoreModel {

    protected $table = 'ff_countries';

	protected $fillable = ['id', 'name'];

}
