<?php
/**
 * Created by PhpStorm.
 * User: Monika
 * Date: 8/10/2017
 * Time: 2:09 PM
 */

namespace App\Http\Controllers;

use App\Models\FFAirlines;
use App\Models\FFAirports;
use App\Models\FFCountries;
use App\Models\FFFlights;
use Carbon\Carbon;
use Faker\Factory;

class FakeDataController extends Controller
{

    public function index()
    {
//        $routes['airports'] = route('app.faker.fakeAirports');
//        $routes['airlines'] = route('app.faker.fakeAirlines');
        $routes['flights'] = route('app.faker.fakeFlights');


        return view('admin.faker', $routes);
    }

    public function generateAirportId()
    {
        $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $airport_id = '';

        for ($i = 1; $i <=3; $i++){
            $airport_id .= $letters[mt_rand(0, strlen($letters) -1)];
        }
        return $airport_id;

    }

//TODO : secure from repetitive

    public function fakeAirports()
    {

        $faker = Factory::create();

        for ($i = 0; $i <= 100; $i++) {
            FFAirports::create([
                'name' => $faker->company,
                'id' => $this->generateAirportId(),
                'city' => $faker->city,
                'country_id' => FFCountries::all()->random()->id,
            ]);
        }
        return redirect()->route('app.airports.index');


    }


    public function fakeAirlines()
    {
        $faker = Factory::create();

        for ($i = 1; $i <= 100; $i++) {
            FFAirlines::create([
                'name' => $faker->company
            ]);
        }
        return redirect()->route('app.airlines.index');
    }


    public function fakeFlights()
    {
        $time = Carbon::create(rand(2017, 2018), rand(1,12), rand(1,31), rand(0,23), rand(0, 59), rand(0,59) );
        $faker = Factory::create();

        for ($i = 1; $i <= 100; $i++) {
            FFFlights::create([
                'id'=> $faker->uuid,
                'origin_id' => FFAirports::all()->random()->id,
                'destination_id' => FFAirports::all()->random()->id,
                'departure' => $time->toDateTimeString(),
                'arrival' => $time->addMinutes(rand(30, 960))->toDateTimeString(),
                'airline_id' => FFAirlines::all()->random()->id,
            ]);
        }

        return redirect()->route('app.flights.index');


    }

}