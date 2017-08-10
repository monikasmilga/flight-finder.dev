<?php namespace App\Http\Controllers;

use App\Models\FFAirlines;
use App\Models\FFAirports;
use App\Models\FFCountries;
use Illuminate\Routing\Controller;

class FFAirportsController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /ffairports
     *
     * @return Response
     */
    public function index()
    {
        $config['list'] = FFAirports::get()->toArray();
        $config['pageTitle'] = 'Airports';
        $config['route'] = route('app.airports.create');

        return view('admin.list', $config);
    }

    /**
     * Show the form for creating a new resource.
     * GET /ffairports/create
     *
     * @return Response
     */
    public function create()
    {
        $config['pageTitle'] = 'Airports';
        $config['country_id'] = FFCountries::pluck('name', 'id');

        return view('admin.formAirports', $config);
    }

    /**
     * Store a newly created resource in storage.
     * POST /ffairports
     *
     * @return Response
     */
    public function store()
    {
        $data = request()->all();
        FFAirports::create([

            'name' => $data['name'],
            'id' => $data['id'],
            'country_id' => $data['country_id'],
            'city' => $data['city']
        ]);

        return redirect()->route('app.airports.index');
    }

    /**
     * Display the specified resource.
     * GET /ffairports/{id}
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
     * GET /ffairports/{id}/edit
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
     * PUT /ffairports/{id}
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
     * DELETE /ffairports/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}