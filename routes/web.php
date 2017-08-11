<?php
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin-check']], function () {


    Route::group(['prefix' => 'airports'], function () {

        Route::get('/', ['as' => 'app.airports.index', 'uses' => 'FFAirportsController@index']);
        Route::get('/create', ['as' => 'app.airports.create', 'uses' => 'FFAirportsController@create']);
        Route::post('/create', ['as' => 'app.airports.store', 'uses' => 'FFAirportsController@store']);

        Route::group(['prefix' => '{id}'], function () {

            Route::get('/edit', ['as' => 'app.airports.edit', 'uses' => 'FFAirportsController@edit']);
            Route::post('/edit', ['as' => 'app.airports.update', 'uses' => 'FFAirportsController@update']);

            Route::delete('/', ['as' => 'app.airports.delete', 'uses' => 'FFAirportsController@destroy']);
            Route::get('/', ['as' => 'app.airports.show', 'uses' => 'FFAirportsController@show']);

        });
    });

    Route::group(['prefix' => 'airlines'], function () {

        Route::get('/', ['as' => 'app.airlines.index', 'uses' => 'FFAirlinesController@index']);
        Route::get('/create', ['as' => 'app.airlines.create', 'uses' => 'FFAirlinesController@create']);
        Route::post('/create', ['as' => 'app.airlines.store', 'uses' => 'FFAirlinesController@store']);

        Route::group(['prefix' => '{id}'], function () {

            Route::get('/edit', ['as' => 'app.airlines.edit', 'uses' => 'FFAirlinesController@edit']);
            Route::post('/edit', ['as' => 'app.airlines.update', 'uses' => 'FFAirlinesController@update']);

            Route::delete('/', ['as' => 'app.airlines.delete', 'uses' => 'FFAirlinesController@destroy']);
            Route::get('/', ['as' => 'app.airlines.show', 'uses' => 'FFAirlinesController@show']);

        });
    });

    Route::group(['prefix' => 'flights'], function () {


        Route::get('/', ['as' => 'app.flights.index', 'uses' => 'FFFlightsController@index']);
        Route::get('/create', ['as' => 'app.flights.create', 'uses' => 'FFFlightsController@create']);
        Route::post('/create', ['as' => 'app.flights.store', 'uses' => 'FFFlightsController@store']);

        Route::group(['prefix' => '{id}'], function () {

            Route::get('/edit', ['as' => 'app.flights.edit', 'uses' => 'FFFlightsController@edit']);
            Route::post('/edit', ['as' => 'app.flights.update', 'uses' => 'FFFlightsController@update']);

            Route::delete('/', ['as' => 'app.flights.delete', 'uses' => 'FFFlightsController@destroy']);
            Route::get('/', ['as' => 'app.flights.show', 'uses' => 'FFFlightsController@show']);

        });
    });

    Route::group(['prefix' => 'countries'], function () {


        Route::get('/', ['as' => 'app.countries.index', 'uses' => 'FFCountriesController@index']);
        Route::get('/create', ['as' => 'app.countries.create', 'uses' => 'FFCountriesController@create']);
        Route::post('/create', ['as' => 'app.countries.store', 'uses' => 'FFCountriesController@store']);

        Route::group(['prefix' => '{id}'], function () {

            Route::get('/edit', ['as' => 'app.countries.edit', 'uses' => 'FFCountriesController@edit']);
            Route::post('/edit', ['as' => 'app.countries.update', 'uses' => 'FFCountriesController@update']);

            Route::delete('/', ['as' => 'app.countries.delete', 'uses' => 'FFCountriesController@destroy']);
            Route::get('/', ['as' => 'app.countries.show', 'uses' => 'FFCountriesController@show']);
        });
    });

    Route::get('/faker', ['as' => 'app.faker.index', 'uses' => 'FakeDataController@index']);

    Route::post('/faker', ['as' => 'app.faker.fakeFlights', 'uses' => 'FakeDataController@fakeFlights']);
//    Route::post('/faker', ['as' => 'app.faker.fakeAirports', 'uses' => 'FakeDataController@fakeAirports']);
//    Route::post('/faker', ['as' => 'app.faker.fakeAirlines', 'uses' => 'FakeDataController@fakeAirlines']);


});


Route::get('/home', function () {
    return view('home');
});
Route::get('/search', ['as' => 'app.front-end.index', 'uses' => 'FFFrontEndController@index']);


