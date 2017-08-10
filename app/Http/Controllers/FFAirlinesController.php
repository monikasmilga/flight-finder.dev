<?php namespace App\Http\Controllers;

use App\Models\FFAirlines;
use Illuminate\Routing\Controller;
use Ramsey\Uuid\Uuid;

class FFAirlinesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /ffairlines
	 *
	 * @return Response
	 */
	public function index()
	{
        $config['list'] = FFAirlines::get()->toArray();
        $config['pageTitle'] = 'Airlines';
        $config['route'] = route('app.airlines.create');

        return view('admin.list', $config);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /ffairlines/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $config['pageTitle'] = 'Airlines';

        return view('admin.formAirlines', $config);
    }

	/**
	 * Store a newly created resource in storage.
	 * POST /ffairlines
	 *
	 * @return Response
	 */
	public function store()
	{
//	    dd("labas");
		$data = request()->all();
//		$data['id'] = Uuid::uuid4();

		FFAirlines::create([
		    'name' => $data['name']
        ]);

		return redirect()->route('app.airlines.index');
	}

	/**
	 * Display the specified resource.
	 * GET /ffairlines/{id}
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
	 * GET /ffairlines/{id}/edit
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
	 * PUT /ffairlines/{id}
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
	 * DELETE /ffairlines/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}