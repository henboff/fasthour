<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHorariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Horarios', function(Blueprint $table)
		{
			$table->integer('id_horario', true);
			$table->date('dt_ini');
			$table->date('dt_final');
			$table->integer('id_bimestre')->index('FK_Horarios_Bimestres');
			$table->unique(['dt_ini','dt_final'], 'dt_ini');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Horarios');
	}

}
