<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePeriodosAulaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Periodos_Aula', function(Blueprint $table)
		{
			$table->integer('id_periodo', true);
			$table->time('hr_ini');
			$table->time('hr_fim');
			$table->integer('id_turno')->nullable()->index('FK_Periodos_Turnos');
			$table->unique(['hr_ini','hr_fim'], 'hr_ini');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Periodos_Aula');
	}

}
