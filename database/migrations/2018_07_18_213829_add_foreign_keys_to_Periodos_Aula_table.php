<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPeriodosAulaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Periodos_Aula', function(Blueprint $table)
		{
			$table->foreign('id_turno', 'FK_Periodos_Turnos')->references('id_turno')->on('Turnos')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Periodos_Aula', function(Blueprint $table)
		{
			$table->dropForeign('FK_Periodos_Turnos');
		});
	}

}
