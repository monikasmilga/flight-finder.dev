<?php namespace App\Http\Controllers;

use App\Models\FFAirports;
use Carbon\Carbon;
use Illuminate\Routing\Controller;

class FFFrontEndController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /fffrontend
	 *
	 * @return Response
	 */
	public function index()
	{
	    $config['origin_id'] = FFAirports::pluck('name', 'id');
	    $config['destination_id'] = FFAirports::pluck('name', 'id');
	    $config['date'] = Carbon::now('Europe/Vilnius')->format('Y-m-d');

		return view ('front-end.search', $config);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /fffrontend/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /fffrontend
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /fffrontend/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /fffrontend/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /fffrontend/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /fffrontend/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}