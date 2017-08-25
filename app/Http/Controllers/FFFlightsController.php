<?php namespace App\Http\Controllers;

use App\Models\FFAirlines;
use App\Models\FFAirports;
use App\Models\FFCountries;
use App\Models\FFFlights;
use Illuminate\Routing\Controller;
use Carbon\Carbon;

class FFFlightsController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /ffflights
     *
     * @return Response
     */
    public function index()
    {
        $config['list'] = FFFlights::paginate(15)->toArray();
//        dd($config);
        foreach ($config['list']['data'] as $key => &$value){
            $value['airport_name'] = $value['airport_name']['name'];
        }

        $config['pageTitle'] = 'Flights';
        $config['route'] = route('app.flights.create');
        $config['faker'] = route('app.flights.faker');

        return view('admin.list', $config);
    }

    /**
     * Show the form for creating a new resource.
     * GET /ffflights/create
     *
     * @return Response
     */
    public function create()
    {
        $config['pageTitle'] = 'Flights';
        $config['origin_airport'] = FFAirports::pluck('name', 'id');
        $config['destination_airport'] = FFAirports::pluck('name', 'id');
        $config['airline'] = FFAirlines::pluck('name', 'id');
        $config['arrival_date'] = Carbon::now('Europe/Vilnius');
        $config['departure_date'] = Carbon::now('Europe/Vilnius');

        return view('admin.formFlights', $config);
    }

    /**
     * Store a newly created resource in storage.
     * POST /ffflights
     *
     * @return Response
     */
    public function store()
    {
        $data = request()->all();

        FFFlights::create([
            'origin_id' => $data['origin_id'],
            'destination_id' => $data['destination_id'],
            'airline_id' => $data['airline_id'],
            'departure' => $data['departure'],
            'arrival' => $data['arrival']
        ]);

        return redirect()->route('app.flights.index');
    }

    /**
     * Display the specified resource.
     * GET /ffflights/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /ffflights/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /ffflights/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /ffflights/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}