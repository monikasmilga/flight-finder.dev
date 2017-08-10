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
use Faker\Factory;

class FakeDataController extends Controller
{

    public function index()
    {
//        $routes['airports'] = route('app.faker.fakeAirports');
        $routes['airlines'] = route('app.faker.fakeAirlines');
//        $routes['flights'] = route('app.faker.fakeFlights');


        return view('admin.faker', $routes);
    }


    public function fakeAirports()
    {
//
    }


    public function fakeAirlines()
    {

        $faker = Factory::create();

        for ($i=0; $i <= 100; $i++) {
            FFAirlines::create([
                'name' => $faker->company
            ]);
        }
        return redirect()->route('app.airlines.index');
    }


    public function fakeFlights()
    {
//
    }

}