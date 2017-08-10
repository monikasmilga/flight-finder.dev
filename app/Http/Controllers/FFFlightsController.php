<?php namespace App\Http\Controllers;

use App\Models\FFAirlines;
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
        $config['list'] = FFFlights::get()->toArray();
        $config['pageTitle'] = 'Flights';
        $config['route'] = route('app.flights.create');

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
        $config['origin_country'] = FFCountries::pluck('name', 'id');
        $config['destination_country'] = FFCountries::pluck('name', 'id');
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
//        dd($data);

        FFFlights::create([
            'origin_id' => $data['origin_id'],
            'destination_id' => $data['destination_id'],
            'departure' => $data['departure_date'],
            'arrival' => $data['arrival_date']

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