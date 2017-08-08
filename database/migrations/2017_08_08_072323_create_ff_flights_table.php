<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFfFlightsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ff_flights', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamps();
			$table->softDeletes();
			$table->string('origin_id', 36)->index('fk_ff_flights_ff_airports1_idx');
			$table->string('destination_id', 36)->index('fk_ff_flights_ff_airports2_idx');
			$table->dateTime('arrival');
			$table->dateTime('departure');
			$table->string('airline_id', 36)->index('fk_ff_flights_ff_airlines1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ff_flights');
	}

}
